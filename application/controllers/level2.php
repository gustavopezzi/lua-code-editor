<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Level2 extends CustomController {
    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->data['dialogs'] = [
            [
                'duration' => 2500,
                'content' => "`<span>So... pretty simple, uh?</span>`"
            ],
            [
                'duration' => 3500,
                'content' => "`<span>Now, I want us to look at a simple Lua code...</span>`"
            ],
            [
                'duration' => 3000,
                'content' => "`<span>This next example introduces some important concepts.</span>`"
            ],
            [
                'duration' => 25000,
                'content' => "`
                    <span>
                        First, we declare two simple variables in the first line of our program.
                        <center><img width='180' src='".site_url("files/level2/x-y-vars.png")."'/></center>
                        Variables are like little places we create in memory, and they can store values.
                        <br/>
                        <br/>
                        We can give them meaningful names. In this example I chose the names <span style='color:#673ab7'>x</span> and <span style='color:#673ab7'>y</span>, and you will see why in a second.
                    </span>
                `"
            ],
            [
                'duration' => 15000,
                'content' => "`
                    <span>
                        We can think of the computer screen as a Cartesian plane.
                        <br/>
                        <br/>
                        Yes, that Cartesian plane we studied in school... with the <span style='color:#ed1e79'>X</span>-axis holding the horizontal values (from left to right), and the <span style='color:#ed1e79'>Y</span>-axis holding the vertical values (up and down).
                        <br/>
                        <br/>
                        <center><img width='107' src='".site_url("files/level2/x-y-axis.png")."'/></center>
                    </span>
                `"
            ],
            [
                'duration' => 8000,
                'content' => "`
                    <span>
                        Think of the computer screen as that plane, where each pixel is one unit in the X and Y axis.
                        <br/>
                        <br/>
                        <center><img width='170' src='".site_url("files/level2/x-y-screen.png")."'/></center>
                    </span>
                `"
            ],
            [
                'duration' => 5500,
                'content' => "`<span>We will use the variables <span style='color:#673ab7'>x</span> and <span style='color:#673ab7'>y</span> to define where to draw objects in the screen.</span>`"
            ],
            [
                'duration' => 26000,
                'content' => "`
                    <span>
                        See, I can simply call the Lua function <span style='color:#2196f3'>circle</span>() and tell the function to use the parameters (x,y) to draw a circle at position x and y of the screen.
                        <center><img width='170' src='".site_url("files/level2/circle-x-y.png")."'/></center>
                        And you might be thinking... \"Gus, what is that value 10 at the end of the function?\" ...well, to draw a circle we also need to tell Lua how big the circle should be. So, in this example, the circle will have a radius of 10 pixels.
                        <br/>
                        <br/>
                        Not bad, right?
                    </span>
                `"
            ],
            [
                'duration' => 12000,
                'content' => "`
                    <span>
                        Another important thing we need to understand is what programmers call a \"game loop.\"
                        <br/>
                        <br/>
                        Lua has two functions to handle game loop: <span style='color:#2196f3'>update</span>() and <span style='color:#2196f3'>draw</span>().
                        <center><img width='270' src='".site_url("files/level2/update-draw.png")."'/></center>
                    </span>
                `"
            ],
            [
                'duration' => 17500,
                'content' => "`
                    <span>
                        Both <span style='color:#2196f3'>update</span>() and <span style='color:#2196f3'>draw</span>() run several times per second, and they are responsible for changing the values and drawing the frames of our game, one after the other.
                        <br/>
                        <br/>
                        The functions update and draw run really fast, and that is what gives us the impression of animation.
                        <center><img width='270' src='".site_url("files/level2/update-draw.png")."'/></center>
                    </span>
                `"
            ],
            [
                'duration' => 3000,
                'content' => "`<span>Ok, that's too much talk. It's time to work!</span>`"
            ],
            [
                'duration' => 11500,
                'content' => "`
                    <span>
                        Your next task is to change the behavior of a simple game.
                        <br/>
                        <br/>
                        I will give you a simple code to study. Run the program and you should see a small circle moving on the screen.
                        <br/>
                        <br/>
                        <center><img width='150' src='".site_url("files/level2/circle-animation.gif")."'/></center>
                    </span>
                `"
            ],
            [
                'duration' => 10000,
                'content' => "`
                    <span>
                        The circle is simply moving from left to right, but I spoke with our project manager and she wants the circle to move not only to the right, but also down.
                        <br/>
                        <br/>
                        <center><img width='150' src='".site_url("files/level2/circle-animation.gif")."'/></center>
                    </span>
                `"
            ],
            [
                'duration' => 18000,
                'content' => "`
                    <span>
                        See if you can figure out how to change the code to make the circle move diagonally from the top-left all the way to the bottom-right.
                        <br/>
                        <br/>
                        <center><img width='150' src='".site_url("files/level2/circle-animation-diag.gif")."'/></center>
                        <br/>
                        Take your time, and pay special attention to these three main elements that make this game work:
                        <br/><br/>
                        <span style='color: #2196f3; margin-left: 15px;'>-</span> variables
                        <br/>
                        <span style='color: #2196f3; margin-left: 15px;'>-</span> draw()
                        <br/>
                        <span style='color: #2196f3; margin-left: 15px;'>-</span> update()
                    </span>
                `"
            ],
            [
                'duration' => 8000,
                'content' => "`
                    <span>
                        When you're done, just type \"<span style='color:#2196f3'>exit</span>\" and we will move forward to some more exciting stuff.
                        <br/>
                        <br/>
                        I'll see you soon.
                    </span>
                `"
            ]
        ];

        $this->data['whiteboard_left_content'] = "<span><img src='".site_url("files/level2/whiteboard-left.png")."'/></span>";
        $this->data['whiteboard_right_content'] = "<span></span>";

        $this->data['page_title'] = 'Level 2';
        $this->data['page_custom_css'] = 'tutorial-level2.css';
        $this->data['page_custom_js'] = 'tutorial.js';
        $this->data['page_id'] = 'level2';
        $this->data['page_previous'] = "level1";
        $this->data['page_next'] = "level2ide";
        $this->data['page_quiz'] = "https://gustavopezzi.typeform.com/to/Ava4qZ";
        $this->data['background_color'] = '#949494';
        $this->load->view('tutorial', $this->data);
    }
}

?>
