<?=$this->load->view('header');?>

        <div id="whiteboard-left"><?=$whiteboard_left_content;?></div>
        <div id="whiteboard-right"><?=$whiteboard_right_content;?></div>

        <div class="floor-tutorial"></div>
        <div id="character" class="character-container">
            <div id="dialog-bubble">
                <div id="click-me">
                    <img src="<?=site_url('images/left.png');?>"/>
                    CLICK ME TO START
                    <img src="<?=site_url('images/right.png');?>"/>
                </div>
            </div>
            <img id="character-dev" src="<?=site_url('files/'.$page_id.'/character.svg');?>"/>
        </div>
        <?php if (!empty($page_previous)): ?>
                <a href="<?=site_url($page_previous);?>">
                    <div id="back-to-previous"><img src="<?=site_url('images/left.png');?>"/> Back to Previous</div>
                </a>
        <?php endif; ?>
        <?php if (!empty($page_quiz)): ?>
                <div id="jump-quiz-container">
                    <div id="jump-quiz">I'm done with all this... take me to the <a href="<?=$page_quiz?>"><u>questionnaire</u></a></div>
                </div>
        <?php endif; ?>
        <?php if (!empty($page_next)): ?>
                <a href="<?=$page_id == "levelquiz" ? $page_next : site_url($page_next);?>">
                    <div id="skip-tutorial">Skip Tutorial <img src="<?=site_url('images/right.png');?>"/></div>
                </a>
        <?php endif; ?>

        <audio id="tutorial-dialog-audio">
            <source src="<?=site_url('files/'.$page_id.'/'.$page_id.'.ogg');?>" type="audio/ogg">
        </audio>

<?=$this->load->view('footer');?>
