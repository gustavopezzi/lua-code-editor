<?=$this->load->view('header');?>

        <div id="whiteboard-left"><?=$whiteboard_left_content;?></div>
        <div id="whiteboard-right"><?=$whiteboard_right_content;?></div>

        <div class="floor-ide" style="background-color:<?=$floor_color?>"></div>
        <div class="table-top"></div>
        <div class="table-front"></div>

        <div class="laptop-container">
            <img id="laptop" src="<?=site_url('/files/laptop-screen.svg');?>"/>
            <div id="ide-container"></div>
        </div>

        <?php if (!empty($page_quiz)): ?>
                <div id="jump-quiz-container">
                    <div id="jump-quiz">I'm done with this, take me to the <a href="<?=$page_quiz?>"><u>questionnaire</u></a></div>
                </div>
        <?php endif; ?>

        <input type='file' style='display:none'/>
        <script src="<?=site_url('assets/js/ide/require.min.js')?>"></script>
        <script>
            const micro = Tarp.require('<?=site_url("assets/js/ide/micro.js");?>');
            const devenv = micro.newDevEnv();
            devenv.reboot();
        </script>

<?=$this->load->view('footer');?>
