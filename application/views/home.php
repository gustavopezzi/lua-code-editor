<?=$this->load->view('header');?>

        <div class="floor"></div>
        <div class="table-top"></div>
        <div class="table-front"></div>

        <div id="character" class="character-container">
            <div
            <div id="dialog-bubble">
                <span class="audio-tip">Make sure your audio is enabled</span>
                <span class="dialog-click">
                    <img src="<?=site_url('images/left.png');?>"/>
                    CLICK ME TO START
                    <img src="<?=site_url('images/right.png');?>"/>
                </span>
                <span class="dialog-text">
                    Hi there! Welcome to this research study.
                    <br/>
                    <br/>
                    This project explores how teaching basic game programming can help you learn mathematics.
                    <br/>
                    <br/>
                    This study will <u>not</u> teach you how to code, and it actually expects you to know a little bit of programming.
                    <br/>
                    <br/>
                    The main purpose is to verify if coding can help you understand and absorb some simple high school mathematics concepts, and at the end, you will answer a quick questionnaire about your experience using the system.
                    <br/>
                    <br/>
                    When you're ready, click <span style='color:#ff1f6b; text-align: center; border-radius:2px;'>Level 1</span> to start.
                    <br/>
                    <br/>
                    See you soon!
                </span>
            </div>
            <img id="character-dev" src="<?=site_url('files/'.$page_id.'/character.svg');?>"/>
        </div>

        <div class="laptop-container">
            <div class='level-selector-container'>
                <div class='level-selector'>
                    <div class="level-selector-title">WELCOME TO THE <span style="color: #ff1f6b">LUA</span> GAME EDITOR</div>
                    <a href="<?=site_url('level1')?>">
                        <span class='level level-enabled'><span>LEVEL 1</span></span>
                    </a>
                    <span class='level'><span>LEVEL 2</span></span>
                    <span class='level'><span>LEVEL 3</span></span>
                    <span class='level'><span>LEVEL 4</span></span>
                    <span class='level'><span>LEVEL 5</span></span>
                    <span class='level'><span>QUIZ</span></span>
                </div>
            </div>
            <img id="laptop" src="<?=site_url('/files/laptop-screen.svg');?>"/>
            <audio id="home-dialog-audio">
                <source src="<?=site_url('files/'.$page_id.'/'.$page_id.'.ogg');?>" type="audio/ogg">
            </audio>
        </div>

<?=$this->load->view('footer');?>
