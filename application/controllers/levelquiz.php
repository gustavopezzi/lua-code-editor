<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class LevelQuiz extends CustomController {
    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->data['dialogs'] = [
            [
                'duration' => 5000,
                'content' => "`
                    <span>
                        Hi there, I'm Pinky... the project manager here at the company.
                    </span>
                `"
            ],
            [
                'duration' => 6000,
                'content' => "`
                    <span>
                        Thank you for joining us.
                        <br/>
                        <br/>
                        I hope you had fun with the little projects Gus gave to you today.
                    </span>
                `"
            ],
            [
                'duration' => 5000,
                'content' => "`
                    <span>
                        Just before you go, could you please answer some quick questions about your experience today?
                    </span>
                `"
            ],
            [
                'duration' => 4500,
                'content' => "`
                    <span>
                        These are simple questions, just to check if this helped you learn something new.
                    </span>
                `"
            ],
            [
                'duration' => 3000,
                'content' => "`
                    <span>
                        See you soon!
                        <br/>
                        <br/>
                        Bye bye...
                    </span>
                `"
            ],
        ];

        $this->data['whiteboard_left_content'] = "<span><img src='".site_url("files/levelquiz/whiteboard-left.png")."'/></span>";
        $this->data['whiteboard_right_content'] = "<span><img src='".site_url("files/levelquiz/whiteboard-right.png")."'/></span>";

        $this->data['page_title'] = 'Quiz';
        $this->data['page_custom_css'] = 'tutorial-quiz.css';
        $this->data['page_custom_js'] = 'tutorial.js';
        $this->data['page_id'] = 'levelquiz';
        $this->data['page_previous'] = "";
        $this->data['page_next'] = "https://gustavopezzi.typeform.com/to/Ava4qZ";
        $this->data['background_color'] = '#9a516a';
        $this->load->view('tutorial', $this->data);
    }
}

?>
