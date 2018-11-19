<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Level1IDE extends CustomController {
    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->data['whiteboard_left_content'] = "<span><img src='".site_url("files/level1/whiteboard-left-ide.png")."'/></span>";
        $this->data['whiteboard_right_content'] = "<span><img src='".site_url("files/level1/whiteboard-right-ide.png")."'/></span>";

        $this->data['page_title'] = 'Level 1 - IDE';
        $this->data['page_custom_css'] = 'ide.css';
        $this->data['page_custom_js'] = 'ide.js';
        $this->data['page_id'] = 'level1';
        $this->data['page_previous'] = "level1";
        $this->data['page_next'] = "level2";
        $this->data['page_quiz'] = "https://gustavopezzi.typeform.com/to/Ava4qZ";
        $this->data['background_color'] = '#8bcad2';
        $this->data['floor_color'] = '#0a635b';
        $this->load->view('ide', $this->data);
    }
}

?>
