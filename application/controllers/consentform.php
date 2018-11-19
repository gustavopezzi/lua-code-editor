<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class ConsentForm extends CustomController {
    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->data['page_title'] = 'Consent Form';
        $this->data['page_custom_css'] = 'consent.css';
        $this->data['page_custom_js'] = 'home.js';
        $this->data['page_id'] = 'consentform';
        $this->data['page_previous'] = "";
        $this->data['page_next'] = "mainmenu";
        $this->data['background_color'] = '#fff';
        $this->load->view('consentform', $this->data);
    }
}

?>
