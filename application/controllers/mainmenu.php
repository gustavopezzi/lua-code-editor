<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class MainMenu extends CustomController {
    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->data['page_title'] = 'Welcome';
        $this->data['page_custom_css'] = 'home.css';
        $this->data['page_custom_js'] = 'home.js';
        $this->data['page_id'] = 'home';
        $this->data['page_previous'] = "";
        $this->data['page_next'] = "level1";
        $this->data['background_color'] = '#8bcad2';
        $this->load->view('home', $this->data);
    }
}

?>
