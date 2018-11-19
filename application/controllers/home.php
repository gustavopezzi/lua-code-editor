<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Home extends CustomController {
    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->data['page_title'] = 'Participant Information Sheet';
        $this->data['page_custom_css'] = 'consent.css';
        $this->data['page_custom_js'] = 'home.js';
        $this->data['page_id'] = 'informationsheet';
        $this->data['page_previous'] = "";
        $this->data['page_next'] = "consentform";
        $this->data['background_color'] = '#fff';
        $this->load->view('informationsheet', $this->data);
    }
}

?>
