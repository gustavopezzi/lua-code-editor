<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Error extends CustomController {
    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->data['page_title'] = 'Error';
        $this->data['page_custom_css'] = 'error.css';
        $this->data['page_custom_js'] = 'home.js';
        $this->data['page_id'] = 'error';
        $this->data['page_previous'] = "";
        $this->data['page_next'] = "";
        $this->data['background_color'] = '#000';
        $this->load->view('error', $this->data);
    }
}

?>
