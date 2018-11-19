<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Level3 extends CustomController {
    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->data['dialogs'] = [
            [
                'duration' => 7000,
                'content' => "`
                    <span>
                        Great...
                        <br/>
                        <br/>
                        As you can see, we play with the coordinates <span style='color:#2196f3'>x</span> and <span style='color:#2196f3'>y</span> to create this illusion of movement.
                    </span>
                `"
            ],
            [
                'duration' => 13000,
                'content' => "`
                    <span>
                        Adding x + 1 makes the object move to the right:
                        <br/>
                        <center><img width='120' src='".site_url("files/level3/x-plus-1.png")."'/></center>
                        <br/>
                        Adding x + 3 makes the object move to the right, but faster:
                        <br/>
                        <center><img width='120' src='".site_url("files/level3/x-plus-3.png")."'/></center>
                        <br/>
                        It simply tells x to skip 3 pixels per frame instead of just 1.
                    </span>
                `"
            ],
            [
                'duration' => 18000,
                'content' => "`
                    <span>
                        That is just one of the techniques programmers use to change the position of objects in a game.
                        <br/>
                        <br/>
                        How fast the position changes, or the overall path of the movement, can be thought of as <span style='color:#2196f3'>functions</span>.
                        <br/>
                        <br/>
                        Yup, functions like the ones you learn in school...
                        <br/>
                        <br/>
                        <span style='color:#2196f3'>f(</span>x<span style='color:#2196f3'>)</span> type of thing.
                    </span>
                `"
            ],
            [
                'duration' => 20000,
                'content' => "`
                    <span>
                        These functions receive an input, calculate something, and return a new value as result.
                        <br/>
                        <br/>
                        In our case, we received the last position x of the object as an input, added 1 pixel to it, and returned the object's new position x, which will be used to display the object in the next frame.
                        <br/>
                        <br/>
                        <center><img width='120' src='".site_url("files/level3/x-plus-1.png")."'/></center>
                    </span>
                `"
            ],
            [
                'duration' => 10000,
                'content' => "`
                    <span>
                        You probably studied <span style='color:#909ba0'>- or at least pretended to -</span> the ideas of linear functions, quadratic functions, trigonometric functions, and many others.
                        <br/>
                        <br/>
                        <center><img width='189' src='".site_url("files/level3/functions-graph.png")."'/></center>
                    </span>
                `"
            ],
            [
                'duration' => 18000,
                'content' => "`
                    <span>
                        If you remember, a <span style='color:#2196f3'>linear function</span> is a function that describes a simple line.
                        <br/>
                        <br/>
                        The function f(x) had a simple x plus or minus a number. No power, no exponents, just a linear function of a linear x.
                        <br/>
                        <br/>
                        <center><img width='56' src='".site_url("files/level3/linear-f-x.png")."'/></center>
                        <br/>
                        <center><img width='107' src='".site_url("files/level3/linear-function.png")."'/></center>
                    </span>
                `"
            ],
            [
                'duration' => 14000,
                'content' => "`
                    <span>
                        How many games did you play where the player movement is constant or the enemies follow a simple line movement?
                        <br/>
                        <br/>
                        <center><img width='100' style='border-radius:5px;' src='".site_url("files/level3/linear-game.gif")."'/></center>
                        <br/>
                        Well, we just saw one in the last code we worked, didn't we?
                        <center><img width='130' style='border-radius:5px;' src='".site_url("files/level3/circle-animation.gif")."'/></center>
                    </span>
                `"
            ],
            [
                'duration' => 16500,
                'content' => "`
                    <span>
                        We also had <span style='color:#2196f3'>quadratic functions</span>, which described parabolas.
                        <br/>
                        <br/>
                        In that case, f(x) had an x squared, which was the main element for us to say a function was quadratic.
                        <br/>
                        <br/>
                        <center><img width='69' src='".site_url("files/level3/quadratic-f-x.png")."'/></center>
                        <br/>
                        <center><img width='107' src='".site_url("files/level3/quadratic-function.png")."'/></center>
                    </span>
                `"
            ],
            [
                'duration' => 12000,
                'content' => "`
                    <span>
                        Again, how many games have bombs or projectiles following a parabola path?
                        <br/>
                        <br/>
                        Or an angry bird performing a parabola-like movement to hit a pig?
                        <br/>
                        <br/>
                        <center><img width='200' style='border-radius:5px;' src='".site_url("files/level3/parabola-game.gif")."'/></center>
                    </span>
                `"
            ],
            [
                'duration' => 11000,
                'content' => "`
                    <span>
                        You see... all these math functions can help programmers define the characteristics of a game.
                        <br/>
                        <br/>
                        Things like position, movement, speed, or acceleration.
                    </span>
                `"
            ],
            [
                'duration' => 17000,
                'content' => "`
                    <span>
                        Here at the company we have some games that need to simulate objects falling.
                        <br/>
                        <br/>
                        Like enemies falling from the sky, or a bomb falling from a plane before hitting the ground.
                        <br/>
                        <br/>
                        <center><img width='150' src='".site_url("files/level3/gravity-animation.gif")."'/></center>
                        <br/>
                        All these games need to simulate the characteristics of acceleration of gravity.
                    </span>
                `"
            ],
            [
                'duration' => 19000,
                'content' => "`
                    <span>
                        Your next task is to study the code that performs this simulation of gravity.
                        <br/>
                        <br/>
                        Run the code to see the object falling. You'll see that gravity makes the object start very slow and then accelerate as it falls down.
                        <br/>
                        <br/>
                        <center><img width='150' src='".site_url("files/level3/gravity-animation.gif")."'/></center>
                    </span>
                `"
            ],
            [
                'duration' => 24000,
                'content' => "`
                    <span>
                        Your task here is to basically invert gravity.
                        <br/>
                        <br/>
                        The final result should have an object starting at the bottom of the screen and then accelerating upwards until it hits the top of the screen.
                        <br/>
                        <br/>
                        <center><img width='150' src='".site_url("files/level3/invert-gravity-animation.gif")."'/></center>
                        <br/>
                        Your circle will start with speed 0 and proceed to accelerate upwards.
                    </span>
                `"
            ],
            [
                'duration' => 10000,
                'content' => "`
                    <span>
                        Take your time, understand the functions, the formulas, and when you are done just type \"<span style='color:#2196f3'>exit</span>\" to leave the console.
                        <br/>
                        <br/>
                        See you soon...
                    </span>
                `"
            ]
        ];

        $this->data['whiteboard_left_content'] = "<span><img src='".site_url("files/level3/whiteboard-left.png")."'/></span>";
        $this->data['whiteboard_right_content'] = "<span></span>";

        $this->data['page_title'] = 'Level 3';
        $this->data['page_custom_css'] = 'tutorial-level3.css';
        $this->data['page_custom_js'] = 'tutorial.js';
        $this->data['page_id'] = 'level3';
        $this->data['page_previous'] = "level2";
        $this->data['page_next'] = "level3ide";
        $this->data['page_quiz'] = "https://gustavopezzi.typeform.com/to/Ava4qZ";
        $this->data['background_color'] = '#d4bbfb';
        $this->load->view('tutorial', $this->data);
    }
}

?>
