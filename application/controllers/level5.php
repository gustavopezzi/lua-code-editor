<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Level5 extends CustomController {
    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->data['dialogs'] = [
            [
                'duration' => 9000,
                'content' => "`
                    <span>
                        I have a feeling that now you are starting to realize <u>where</u> some of these things you learned in your math classes are actually being used by people in the real world.
                    </span>
                `"
            ],
            [
                'duration' => 10000,
                'content' => "`
                    <span>
                        As we just saw, the <span style='color:#743ae4'>cosine</span> and <span style='color:#743ae4'>sine</span> properties are very popular among game programming.
                        <br/>
                        <br/>
                        You can use these tools every time you need to work with angles or rotation.
                    </span>
                `"
            ],
            [
                'duration' => 11000,
                'content' => "`
                    <span>
                        Just a recap from before...
                        <br/>
                        <br/>
                        Remember, \"<span style='color:#743ae4'>sine</span>\" gives us the ratio between the opposite side and the hypotenuse, and \"<span style='color:#743ae4'>cosine</span>\" gives us the ratio between the adjacent side and the hypotenuse.
                        <br/>
                        <br/>
                        <center><img width='200' src='".site_url("files/level5/sin-equation.png")."'/></center>
                        <br/>
                        <center><img width='200' src='".site_url("files/level5/cos-equation.png")."'/></center>
                    </span>
                `"
            ],
            [
                'duration' => 7500,
                'content' => "`
                    <span>
                        That means that, if we have either one of the sides and the hypotenuse, we can get the sine and cosine of the angle.
                        <br/>
                        <br/>
                        <center><img width='200' src='".site_url("files/level5/sin-equation.png")."'/></center>
                        <br/>
                        <center><img width='200' src='".site_url("files/level5/cos-equation.png")."'/></center>
                    </span>
                `"
            ],
            [
                'duration' => 11000,
                'content' => "`
                    <span>
                        But, what if we don’t have the value of the hypotenuse, and we only have the values of the two sides?
                        <br/>
                        <br/>
                        Is there a property that gives me the ratio between the opposite and the adjacent sides?
                        <br/>
                        <br/>
                        <center><img width='154' src='".site_url("files/level5/triangle-2-sides.png")."'/></center>
                    </span>
                `"
            ],
            [
                'duration' => 12000,
                'content' => "`
                    <span>
                        Yes, there is... And this is called the <span style='color:#743ae4'>tangent</span> of an angle.
                        <br/>
                        <br/>
                        <center><img width='200' src='".site_url("files/level5/tan-equation.png")."'/></center>
                        <br/>
                        <br/>
                        The tangent of a given angle gives us the ratio between the opposite side and the adjacent side.
                    </span>
                `"
            ],
            [
                'duration' => 8000,
                'content' => "`
                    <span>
                        This ratio between the opposite (y) side, and the adjacent (x) side, is sometimes called the \"rise over run.\"
                    </span>
                `"
            ],
            [
                'duration' => 17000,
                'content' => "`
                    <span>
                        People call this the \"rise over run\" because it gives us the ratio between how much something is changing in the up/down <span style='color:#ff4444'>Y</span>-axis (rise), over how much it is changing in the left/right <span style='color:#ff4444'>X</span>-axis (run).
                        <br/>
                        <br/>
                        <center><img width='200' src='".site_url("files/level5/rise-over-run.gif")."'/></center>
                    </span>
                `"
            ],
            [
                'duration' => 14000,
                'content' => "`
                    <span>
                        Now you know that, if you have an angle, you can find the sine, cosine, and its tangent by using Lua's built-in functions:
                            <br/>
                            <br/>
                            - <span style='color:#743ae4'>math.sin</span>() <br/>
                            - <span style='color:#743ae4'>math.cos</span>() <br/>
                            - <span style='color:#743ae4'>math.tan</span>().
                    </span>
                `"
            ],
            [
                'duration' => 16000,
                'content' => "`
                    <span>
                        This is all beautiful and useful, but sometimes, when we are programming a game, we need to find things the other way around.
                        <br/><br/>
                        What if we have the ratio of the sides and I need to find the actual <u>angle</u> that is formed by these sides?
                    </span>
                `"
            ],
            [
                'duration' => 5500,
                'content' => "`
                    <span>
                        This is why we also have what we call the inverse trigonometric functions.
                    </span>
                `"
            ],
            [
                'duration' => 13000,
                'content' => "`
                    <span>
                        Do you remember reading about arc-cosine, arc-sine, and arc-tangent?
                        <br/>
                        <br/>
                        There you go… these are the inverse functions of cosine, sine, and tangent.
                    </span>
                `"
            ],
            [
                'duration' => 6700,
                'content' => "`
                    <span>
                        Let's take a look at the arc-tangent, since it's very popular between game programmers.
                    </span>
                `"
            ],
            [
                'duration' => 18000,
                'content' => "`
                    <span>
                        Think of <span style='color:#743ae4'>arctan</span> function like a machine that finds angles.
                        <br/>
                        <br/>
                        In one side you put the two adjacent and opposite sides, and the output of the machine will be the angle that is formed between those two sides.
                        <br/>
                        <br/>
                        <center><img width='200' src='".site_url("files/level5/arctan-machine.png")."'/></center>
                    </span>
                `"
            ],
            [
                'duration' => 10000,
                'content' => "`
                    <span>
                        This is incredibly useful for us, since we can find the angle of an object in the screen if we know the position x and y of the game object.
                    </span>
                `"
            ],
            [
                'duration' => 8000,
                'content' => "`
                    <span>
                        As always, Lua comes to the rescue. The Lua language has a built-in function to compute the arc-tangent for us.
                    </span>
                `"
            ],
            [
                'duration' => 11600,
                'content' => "`
                    <span>
                        <center><img width='300' src='".site_url("files/level5/math-atan.png")."'/></center>
                        <br/>
                        \"<span style='color:#743ae4'>math.atan</span>()\" receives the ratio between the opposite side over the adjacent side, and gives us back the value of the angle that is formed by these sides.
                    </span>
                `"
            ],
            [
                'duration' => 22600,
                'content' => "`
                    <span>
                        And always remember, whenever we are talking angles in Lua, we are talking angles in radians (not degrees).
                        <br/>
                        <br/>
                        So, instead of 0 to 360 degrees, Lua's \"<span style='color:#743ae4'>atan</span>\" function will give us back angles from 0 to 2*PI (or approximately 6.28 radians).
                    </span>
                `"
            ],
            [
                'duration' => 4000,
                'content' => "`
                    <span>
                        Alright, let's see if all of these ideas make sense in the real world.
                    </span>
                `"
            ],
            [
                'duration' => 15000,
                'content' => "`
                    <span>
                        The next project has two game objects in the screen... You have a <span style='color:#ff4444'>red</span> target, and a small <span style='color:#888'>white</span> bullet projectile, that is currently being shot from the origin to the right, with an angle of 0.
                        <br/>
                        <br/>
                        <center><img width='150' src='".site_url("files/level5/bullet-target.gif")."'/></center>
                    </span>
                `"
            ],
            [
                'duration' => 18000,
                'content' => "`
                    <span>
                        Your goal is to change the code to make the game shoot the bullet in the direction of the target.
                        <br/>
                        <br/>
                        In other words, you will find the angle produced by the position x and y of the <span style='color:#ff4444'>target</span>, and use that angle for the <span style='color:#888'>bullet</span> movement.
                        <br/>
                        <br/>
                        <center><img width='150' src='".site_url("files/level5/bullet-target-angle.gif")."'/></center>
                    </span>
                `"
            ],
            [
                'duration' => 14000,
                'content' => "`
                    <span>
                        Remember the arc-tangent property, that receives the ratio of the opposite and adjacent sides of a triangle and gives back the angle formed between them.
                        <br/>
                        <br/>
                        <center><img width='150' src='".site_url("files/level5/target-angle.png")."'/></center>
                        <br/>
                        <br/>
                        I'm pretty sure that will help you in your task.
                    </span>
                `"
            ],
            [
                'duration' => 9000,
                'content' => "`
                    <span>
                        The good news is this is your last project of the day.
                        <br/>
                        <br/>
                        Once you're done, just type \"<span style='color:#743ae4'>exit</span>\" in the terminal and you can just go home and watch some Netflix.
                    </span>
                `"
            ],
            [
                'duration' => 4000,
                'content' => "`
                    <span>
                        I have to say I am having fun...
                        <br/>
                        <br/>
                        I hope you are too.
                    </span>
                `"
            ],
            [
                'duration' => 4000,
                'content' => "`
                    <span>
                        Alright!
                        <br/>
                        <br/>
                        See you soon.
                    </span>
                `"
            ]
        ];

        $this->data['whiteboard_left_content'] = "<span><img src='".site_url("files/level5/whiteboard-left.png")."'/></span>";
        $this->data['whiteboard_right_content'] = "<span><img src='".site_url("files/level5/whiteboard-right.png")."'/></span>";

        $this->data['page_title'] = 'Level 5';
        $this->data['page_custom_css'] = 'tutorial-level5.css';
        $this->data['page_custom_js'] = 'tutorial.js';
        $this->data['page_id'] = 'level5';
        $this->data['page_previous'] = "level4";
        $this->data['page_next'] = "level5ide";
        $this->data['page_quiz'] = "https://gustavopezzi.typeform.com/to/Ava4qZ";
        $this->data['background_color'] = '#b9f7ff';
        $this->load->view('tutorial', $this->data);
    }
}

?>
