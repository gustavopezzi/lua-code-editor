<?php

class CustomController extends CI_Controller {
	var $check_session = false;
	var $text_menu = NULL;
	var $cmspanel = false;
	var $logged_in = false;

	function __construct() {
		parent::__construct();

		if ($this->session->userdata(LOGGED) !== TRUE && $this->check_session) {
			$this->session->set_userdata('url', uri_string());
			redirect(site_url(), 'refresh');
		}

		$this->load->library('image_lib');

		$this->data['page_title'] = '';

		$this->data['social_image'] = '';
		$this->data['social_title'] = '';
		$this->data['social_description'] = '';

		$this->data['show_avatar'] = false;
		$this->data['cmspanel'] = false;
	}

	function setMessage($msg, $error=false) {
		if ($error) {
			if (empty($this->errors))
				$this->data['errors'] = $msg;
			else
				$this->data['errors'] .= ". ".$msg;
			return;
		}

		if (empty($this->msgs))
			$this->data['msgs'] = $msg;
		else
			$this->data['msgs'] .= ". ".$msg;
	}

	public function do_upload($upload_path, $form_field_name, $max_width=0, $max_height=0) {
		$id = $this->input->post($this->model_id);

		if (!empty($_FILES['img_file']['name'])) {
			if (!is_dir($upload_path))
				create_dirs_recursive($upload_path);

			$config['upload_path'] = $upload_path;
			$config['allowed_types'] = 'gif|jpg|png';
			$config['encrypt_name'] = true;
			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('img_file')) {
				$error = $this->upload->display_errors();
				$error_message = ImageErrors($error);
				$this->setMessage("Error while uploading file! ".$error_message, true);
				return false;
			}
			else {
				$data = $this->upload->data();
				if (!empty($max_width) || !empty($max_height))
					if (($data['image_width'] > $max_width) || ($data['image_height'] > $max_height))
						$this->resize_image($data['full_path'], $max_width, $max_height, false);
				return $data['file_name'];
			}
		}
		else {
			if ($id)
				return TRUE;
			else {
				$this->setMessage("Error while uploading file!", true);
				return FALSE;
			}
		}
	}

	function resize_image($result, $width, $height, $thumb, $maker='_thumb') {
		$config['image_library'] = 'gd2';
		$config['source_image'] = $result;
		$config['create_thumb'] = $thumb;
		$config['thumb_marker'] = $maker;
		$config['maintain_ratio'] = TRUE;
		$config['width']  = $width;
		$config['height']  = $height;
		$config['master_dim'] = 'auto';
		$this->image_lib->initialize($config);
		$this->image_lib->resize();
		$this->image_lib->clear();
		return true;
	}
}

?>