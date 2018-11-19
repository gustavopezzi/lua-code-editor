<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Level1 extends CustomController {
    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->data['dialogs'] = [
            [
                'duration' => 2300,
                'content' => "`<span>Hi there!<br/><br/>Welcome to the team...</span>`"
            ],
            [
                'duration' => 4500,
                'content' => "`<span>My name is Gus, and I'm a game programmer here at the company.</span>`"
            ],
            [
                'duration' => 4000,
                'content' => "`<span>We heard great things about you. It's really exciting to have you on board.</span>`"
            ],
            [
                'duration' => 7000,
                'content' => "`
                    <span>
                        Alright, first things first...
                        <br/>
                        <br/>
                        You are allowed to wear Jeans on Fridays, and the bathroom is down the hall on the right.
                    </span>
                `"
            ],
            [
                'duration' => 4500,
                'content' => "`<span>Since this is your first day, I will help you with some of the basics.</span>`"
            ],
            [
                'duration' => 4000,
                'content' => "`
                    <span>
                        To develop our games, we use a programming language called <span style='color:#7468d8'>Lua</span>.
                        <br/>
                        <center><img width='40' src='".site_url("files/level1/lua-logo.png")."'/></center>
                    </span>`"
            ],
            [
                'duration' => 9000,
                'content' => "`
                    <span>
                        Lua is very easy, and you'll get up to speed in no time.
                        <br/>
                        <br/>
                        This is one of the reasons why Lua is so popular among game development companies.
                    </span>
                `"
            ],
            [
                'duration' => 6500,
                'content' => "`<span>But first, how about you take a couple of minutes just to play around and get comfortable with the whole environment that we use?</span>`"
            ],
            [
                'duration' => 9000,
                'content' => "`
                    <span>
                        First, you will see a terminal.
                        <br/>
                        <br/>
                        <center><img width='150' src='".site_url("files/level1/terminal.png")."'/></center>
                        <br/>
                        This is where you can type things like \"<span style='color:#2196f3'>run</span>\" to run your code, or \"<span style='color:#2196f3'>exit</span>\" to end the session.
                    </span>
                `"
            ],
            [
                'duration' => 6500,
                'content' => "`
                    <span>
                        You can access the code editor by pressing <span style='color:#2196f3'>ESC</span>, and you go back to the terminal by pressing <span style='color:#2196f3'>ESC</span> again.
                        <br/>
                        <br/>
                        <center><img width='150' src='".site_url("files/level1/code-editor.png")."'/></center>
                    </span>
                `"
            ],
            [
                'duration' => 5000,
                'content' => "`
                    <span>
                        It's that easy!
                        <br/>
                        <center><img width='200' src='".site_url("files/level1/toggle-editor-terminal.png")."'/></center>
                        <br/>
                        <span style='color:#2196f3'>ESC</span> to go to the terminal... <span style='color:#2196f3'>ESC</span> to go back to the code editor.
                    </span>
                `"
            ],
            [
                'duration' => 7000,
                'content' => "`
                    <span>
                        I will try to write down some instructions on the whiteboard.
                        Nothing too complicated, just some tips to help you if you are stuck.
                        <br/>
                        <br/>
                        <center><img width='150' src='".site_url("files/level1/whiteboard.png")."'/></center>
                    </span>
                `"
            ],
            [
                'duration' => 11000,
                'content' => "`<span>When you think you had enough of testing and you feel you understood how the environment works, just type \"<span style='color:#2196f3'>exit</span>\" in the terminal. That will close the session and I'll come to check on you, so we can actually do some real work.</span>`"
            ],
            [
                'duration' => 3000,
                'content' => "`
                    <span>
                        Good luck!
                        <br/>
                        <br/>
                        I'll see you soon...
                    </span>
                `"
            ]
        ];

        $this->data['whiteboard_left_content'] = "<span><img src='".site_url("files/level1/whiteboard-left.png")."'/></span>";
        $this->data['whiteboard_right_content'] = "<span><img src='".site_url("files/level1/whiteboard-right.png")."'/></span>";

        $this->data['page_title'] = 'Level 1';
        $this->data['page_custom_css'] = 'tutorial-level1.css';
        $this->data['page_custom_js'] = 'tutorial.js';
        $this->data['page_id'] = 'level1';
        $this->data['page_previous'] = "";
        $this->data['page_next'] = "level1ide";
        $this->data['page_quiz'] = "";
        $this->data['background_color'] = '#8bcad2';
        $this->load->view('tutorial', $this->data);
    }
}

?>
