<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Level4 extends CustomController {
    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->data['dialogs'] = [
            [
                'duration' => 12000,
                'content' => "`
                    <span>
                        Alright...
                        <br/>
                        <br/>
                        Hopefully by now you understand the basics of what a game loop is, and how we look at the screen as this Cartesian plane with an x and y starting from the top-left corner of the display.
                        <br/>
                        <br/>
                        <center><img width='150' src='".site_url("files/level4/x-y-screen.png")."'/></center>
                    </span>
                `"
            ],
            [
                'duration' => 18000,
                'content' => "`
                    <span>
                        But, we don't always think of problems only using the x-y Cartesian approach.
                        <br/>
                        <br/>
                        There are problems where it makes more sense to define points in space by saying how far away they are from the origin and how much they have rotated from the x-axis.
                        <br/>
                        <br/>
                        <center><img width='200' src='".site_url("files/level4/distance-angle.png")."'/></center>
                    </span>
                `"
            ],
            [
                'duration' => 8000,
                'content' => "`
                    <span>
                        We can express these points with two values:
                        <br/>
                        <br/>
                        <span style='margin-left:5px'></span>- <span style='color:#818181'>distance</span>
                        <br/>
                        <span style='margin-left:5px'/>- <span style='color:#818181'>angle</span>
                        <br/>
                        <center><img width='200' src='".site_url("files/level4/distance-angle.png")."'/></center>
                    </span>
                `"
            ],
            [
                'duration' => 28000,
                'content' => "`
                    <span>
                        So, instead of saying an object is at point (<span style='color:#898989'>7</span>, <span style='color:#898989'>5</span>), we can now say that the object is 6 units away from the origin, and it travelled an angle of 45 degrees counterclockwise from the x-axis.
                        <br/>
                        <br/>
                        The distance from the origin can be seen as the <span style='color:#12ad9f'>radius</span> of the circle that is produced by the rotating the object.
                        <br/>
                        <br/>
                        <center><img width='200' src='".site_url("files/level4/distance-angle-circle-values.png")."'/></center>
                    </span>
                `"
            ],
            [
                'duration' => 19000,
                'content' => "`
                    <span>
                        This is what mathematicians usually call <span style='color:#ea1a59'>Polar Coordinates</span>.
                        <br/>
                        <br/>
                        It is nothing more than a <u>different way</u> of describing the position of something in space.
                        <br/>
                        <br/>
                        Before we used x-y values... and when we think now of Polar coordinates, we use a distance from the origin, and an angle.
                    </span>
                `"
            ],
            [
                'duration' => 10000,
                'content' => "`
                    <span>
                        This is useful for us, as programmers, because some problems are easier to solve when we think of them in Polar coordinates.
                        <br/>
                        <br/>
                        <center><img width='150' src='".site_url("files/level4/sun-planet-animation.gif")."'/></center>
                    </span>
                `"
            ],
            [
                'duration' => 26000,
                'content' => "`
                    <span>
                        But, there is just one gotcha...
                        <br/>
                        <br/>
                        Even though it's easier to think of these problem as angles and a distance, <span style='color:#2196f3'>Lua</span> still expects us to provide an x-y point when we want to draw these object on the screen.
                        <br/>
                        <br/>
                        Therefore, in order to render these objects, we need to convert the Polar distance-angle values to Cartesian x-y points.
                    </span>
                `"
            ],
            [
                'duration' => 11000,
                'content' => "`
                    <span>
                        Let's look at how we can convert Polar coordinates (distance/angle) to Cartesian coordinates (x/y).
                    </span>
                `"
            ],
            [
                'duration' => 17000,
                'content' => "`
                    <span>
                        If we look at the Polar coordinate, we have the radius of the circle and the travelled angle. That will gives us our point in the plane.
                        <br/>
                        <br/>
                        We need to find the x and the y values that are equivalent to that point.
                        <br/>
                        <br/>
                        <center><img width='200' src='".site_url("files/level4/distance-angle-point.png")."'/></center>
                    </span>
                `"
            ],
            [
                'duration' => 30000,
                'content' => "`
                    <span>
                        So, let's start by projecting the values down to the x-axis, and projecting the values to the left, on the y-axis. We will end up with a triangle.
                        <br/>
                        <br/>
                        This triangle will help us find the x and y coordinates of our point. The base of this triangle is the <span style='color:#e91e63'>x</span> value, and the height of the triangle is the <span style='color:#e91e63'>y</span> value.
                        <br/>
                        <br/>
                        <center><img width='200' src='".site_url("files/level4/distance-angle-x-y.gif")."'/></center>
                    </span>
                `"
            ],
            [
                'duration' => 11000,
                'content' => "`
                    <span>
                        Mathematicians love weird names.
                        <br/>
                        <br/>
                        When they talk about right-triangles they use things like <span style='color:#2196f3'>adjacent</span> side, or the <span style='color:#2196f3'>opposite</span> side, or <span style='color:#2196f3'>hypotenuse</span>.
                    </span>
                `"
            ],
            [
                'duration' => 19000,
                'content' => "`
                    <span>
                        This is actually quite easy.
                        <br/>
                        <br/>
                        The <span style='color:#e83a75'>opposite</span> side is the side that is opposite to the angle we are talking about.
                        <br/>
                        <br/>
                        In this case, the opposite side is equal to the height of the triangle. Meaning that the opposite side will be our <span style='color:#e83a75'>y</span> value.
                        <br/>
                        <br/>
                        <center><img width='154' src='".site_url("files/level4/opposite-side.png")."'/></center>
                    </span>
                `"
            ],
            [
                'duration' => 14000,
                'content' => "`
                    <span>
                        The <span style='color:#743ae4'>adjacent</span> is the other side, the one that runs along the base. Which means the adjacent will be the <span style='color:#743ae4'>x</span> value we are looking for.
                        <br/>
                        <br/>
                        <center><img width='141' src='".site_url("files/level4/adjacent-side.png")."'/></center>
                    </span>
                `"
            ],
            [
                'duration' => 16000,
                'content' => "`
                    <span>
                        And the other side is the <span style='color:#46bd30'>hypotenuse</span>, the longest one, which we already have.
                        <br/>
                        <br/>
                        This is the <span style='color:#46bd30'>radius</span> of our circle, or the distance from the object to the origin.
                        <br/>
                        <br/>
                        <center><img width='143' src='".site_url("files/level4/hypotenuse-side.png")."'/></center>
                    </span>
                `"
            ],
            [
                'duration' => 11000,
                'content' => "`
                    <span>
                        Ok, so... since the <span style='color:#743ae4'>adjacent</span> side of the triangle is the <span style='color:#743ae4'>x</span> coordinate, and the <span style='color:#e83a75'>opposite</span> side is the <span style='color:#e83a75'>y</span> coordinate, how do we discover these two values?
                    </span>
                `"
            ],
            [
                'duration' => 8000,
                'content' => "`
                    <span>
                        Here is where we going to use some useful properties straight from your high school mathematics book.
                    </span>
                `"
            ],
            [
                'duration' => 10000,
                'content' => "`
                    <span>
                        The ratio between the adjacent side and the hypotenuse gives us something called the \"<span style='color:#743ae4'>cosine</span>\" of the angle.
                        <br/>
                        <br/>
                        <center><img width='200' src='".site_url("files/level4/cos-equation.png")."'/></center>
                    </span>
                `"
            ],
            [
                'duration' => 11000,
                'content' => "`
                    <span>
                        And the ratio between the opposite side and the hypotenuse will be what we call the \"<span style='color:#743ae4'>sine</span>\" of the angle.
                        <br/>
                        <br/>
                        <center><img width='200' src='".site_url("files/level4/sin-equation.png")."'/></center>
                    </span>
                `"
            ],
            [
                'duration' => 24000,
                'content' => "`
                    <span>
                        And the good news is... Lua has built-in functions to calculate the Sine and Cosine of an angle.
                        <br/>
                        <center><img width='250' src='".site_url("files/level4/lua-cos-sin-functions.png")."'/></center>
                        <br/>
                        That means we have everything we need to calculate the value of the adjacent and opposite sides of our triangle, which also means we will be able to find x and y for our game object.
                    </span>
                `"
            ],
            [
                'duration' => 33000,
                'content' => "`
                    <span>
                        With a little bit of algebra, we just shuffle the ratio formula from before, and we can get:
                        <br/>
                        <br/>
                        <center><img width='300' src='".site_url("files/level4/adjacent-equation.png")."'/></center>
                        <br/>
                        <center><img width='300' src='".site_url("files/level4/opposite-equation.png")."'/></center>
                        <br/>
                        <br/>
                        Which as we saw, it is the same as saying:
                        <br/>
                        <br/>
                        <center><img width='200' src='".site_url("files/level4/adjacent-x-equation.png")."'/></center>
                        <br/>
                        <center><img width='200' src='".site_url("files/level4/opposite-y-equation.png")."'/></center>
                    </span>
                `"
            ],
            [
                'duration' => 29000,
                'content' => "`
                    <span>
                        So, there we go!
                        <br/>
                        <br/>
                        This formula gives us the Cartesian x and y coordinates based on the Polar distance and angle values.
                        <br/>
                        <br/>
                        <center><img width='200' src='".site_url("files/level4/x-angle-distance.png")."'/></center>
                        <br/>
                        <center><img width='200' src='".site_url("files/level4/y-angle-distance.png")."'/></center>
                        <br/>
                        <br/>
                        We use these converted x and y values to tell Lua where to draw the object in the screen.
                    </span>
                `"
            ],
            [
                'duration' => 14000,
                'content' => "`
                    <span>
                        <center><img width='320' src='".site_url("files/level4/lua-code-polar.png")."'/></center>
                        <br/>
                        In the example above, the variable <span style='color:#46bd30'>angle</span> starts at 0 and then we add 0.05 in each frame of the update loop.
                    </span>
                `"
            ],
            [
                'duration' => 22500,
                'content' => "`
                    <span>
                        <center><img width='320' src='".site_url("files/level4/lua-code-polar.png")."'/></center>
                        <br/>
                        Observe that, inside the update function, we use the Lua built-in functions \"<span style='color:#decb6b'>math.cos</span>()\" and \"<span style='color:#decb6b'>math.sin</span>()\" to get the cosine and sine of our angle.
                    </span>
                `"
            ],
            [
                'duration' => 19500,
                'content' => "`
                    <span>
                        <center><img width='320' src='".site_url("files/level4/lua-code-polar.png")."'/></center>
                        <br/>
                        Ok, you are probably looking at this example and thinking \"Wait a minute! An angle that grows only 0.05 on each frame? Isn't that value too small? Aren't angles usually measured in 45 degrees, 90 degrees, 180 degrees, etc.?\"
                    </span>
                `"
            ],
            [
                'duration' => 23000,
                'content' => "`
                    <span>
                        You are absolutely correct! We are used to think and talk to other people about angles using \"degrees.\"
                        <br/>
                        <br/>
                        Degrees are a unit. But, computers usually expect angles to be provided in a unit called \"<span style='color:#82b1ff'>radians</span>.\"
                    </span>
                `"
            ],
            [
                'duration' => 18000,
                'content' => "`
                    <span>
                        Radians are a different way of expressing of angles, and their value is linked to the radius \"r\" of the circle. If we travel our circle a distance equivalent of 1 r (length), that gives us the measurement of 1 radian (angle).
                        <br/>
                        <br/>
                        <center><img width='150' style='border-radius:100%;' src='".site_url("files/level4/circle-radians-slow.gif")."'/></center>
                    </span>
                `"
            ],
            [
                'duration' => 26500,
                'content' => "`
                    <span>
                        Notice that, if we travel 180 degrees in the circle, that is the equivalent of approximately 3.14 radians. That also means that a full 360 degree rotation is approximately 6.28 radians.
                        <br/>
                        <br/>
                        <center><img width='150' style='border-radius:100%;' src='".site_url("files/level4/circle-radians.gif")."'/></center>
                        <br/>
                        <center><img width='150' src='".site_url("files/level4/degrees-radians-180.png")."'/></center>
                        <br/>
                        <center><img width='150' src='".site_url("files/level4/degrees-radians-360.png")."'/></center>
                    </span>
                `"
            ],
            [
                'duration' => 8500,
                'content' => "`
                    <span>
                        <center><img width='150' src='".site_url("files/level4/degrees-radians-180.png")."'/></center>
                        <br/>
                        <center><img width='150' src='".site_url("files/level4/degrees-radians-360.png")."'/></center>
                        <br/>
                        We can now use these properties above to convert from radians to degrees, and also back from degrees to radians.
                    </span>
                `"
            ],
            [
                'duration' => 24500,
                'content' => "`
                    <span>
                        But for now, always remember that when we talk angles with the computer, it usually expect us to provide the values of the angles in radians.
                        <br/>
                        <br/>
                        When you talk with your friends or other programmers, chances are you will still talk angles in degrees.
                        <br/>
                        <br/>
                        I never heard anyone say that they performed a radical 2PI radians maneuver with the skateboard.
                    </span>
                `"
            ],
            [
                'duration' => 10000,
                'content' => "`
                    <span>
                        Ok, we really covered a lot in this talk!
                        <br/>
                        <br/>
                        Now I have a quick task for you to put in practice what we just learned.
                    </span>
                `"
            ],
            [
                'duration' => 14500,
                'content' => "`
                    <span>
                        I have a small game that needs to draw the sun in the center of the screen, and a small blue planet that rotates around the sun object...
                        <br/>
                        <br/>
                        <center><img width='150' src='".site_url("files/level4/sun-planet-animation.gif")."'/></center>
                    </span>
                `"
            ],
            [
                'duration' => 14500,
                'content' => "`
                    <span>
                        Open your environment, open the code editor, and take a moment to analyze what the script is doing.
                        <br/>
                        <br/>
                        You will see a variable \"angle\", that is being incremented in 0.05.
                    </span>
                `"
            ],
            [
                'duration' => 19000,
                'content' => "`
                    <span>
                        Currently, our planet object is moving to the right and down.
                        <br/>
                        <center><img width='150' src='".site_url("files/level4/sun-planet-animation-right.gif")."'/></center>
                        <br/>
                        Your goal is to see if you can change the code and use the concepts that we just learned to make the planet rotate around the sun.
                        <br/>
                        <center><img width='150' src='".site_url("files/level4/sun-planet-animation.gif")."'/></center>
                    </span>
                `"
            ],
            [
                'duration' => 12000,
                'content' => "`
                    <span>
                        I will try to write some helpful tips and diagrams in the whiteboard.
                        <br/>
                        <br/>
                        And as always, once you are done, just type \"<span style='color:#40aadc'>exit</span>\" in the terminal and we can proceed to the next task.
                    </span>
                `"
            ],
            [
                'duration' => 4000,
                'content' => "`
                    <span>
                        Have fun...
                    </span>
                `"
            ]
        ];

        $this->data['whiteboard_left_content'] = "<span><img src='".site_url("files/level4/whiteboard-left.png")."'/></span>";
        $this->data['whiteboard_right_content'] = "<span><img src='".site_url("files/level4/whiteboard-right.png")."'/></span>";

        $this->data['page_title'] = 'Level 4';
        $this->data['page_custom_css'] = 'tutorial-level4.css';
        $this->data['page_custom_js'] = 'tutorial.js';
        $this->data['page_id'] = 'level4';
        $this->data['page_previous'] = "level3";
        $this->data['page_next'] = "level4ide";
        $this->data['page_quiz'] = "https://gustavopezzi.typeform.com/to/Ava4qZ";
        $this->data['background_color'] = '#8bc34a';
        $this->load->view('tutorial', $this->data);
    }
}

?>
