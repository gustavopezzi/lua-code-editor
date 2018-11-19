<!doctype html>
<html>
    <head>
        <title><?=$page_title?></title>
        <meta charset="UTF-8">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta http-equiv="content-language" content="en-us"/>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta property="og:image" content="http://www.gustavopezzi.com/msc-final-project/images/cover.png"/>
        <meta property="og:title" content="Research Project (Game Programming)" />
        <meta property="og:description" content="A research project on game programming and high-school mathematics"/>
        <?php if ($page_id == "quizform"): ?>
                <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=1">
        <?php endif; ?>
        <link rel="shortcut icon" type="image/ico" href="<?=site_url('images/favicon.png');?>"/>
        <link rel="apple-touch-icon" href="<?=site_url('images/favicon.png');?>"/>
        <link rel="stylesheet" href="<?=site_url('assets/css/normalize.css');?>"/>
        <link rel="stylesheet" href="<?=site_url('assets/css/hover.css');?>"/>
        <link rel="stylesheet" href="<?=site_url('assets/css/menu.css');?>"/>
        <link rel="stylesheet" href="<?=site_url('assets/css/main.css');?>?d=<?=md5(time());?>"/>
        <link rel="stylesheet" href="<?=site_url('assets/css/'.$page_custom_css);?>?d=<?=md5(time());?>"/>
        <script>var BASE_URL = '<?=site_url();?>'</script>
        <script>var page_next = '<?=empty($page_next) ? "" : $page_next;?>'</script>
        <script>var page_id = '<?=empty($page_id) ? "" : $page_id;?>'</script>
        <script src="<?=site_url('assets/js/jquery.js')?>"></script>
        <script src="<?=site_url('assets/js/utils.js')?>?d=<?=md5(time());?>"></script>
        <?php if ($page_id != "error"): ?>
                <script src="<?=site_url('assets/js/main.js')?>?d=<?=md5(time());?>"></script>
        <?php endif; ?>
        <script>
            var dialogList = [
                <? if (isset($dialogs)): ?>
                    <? foreach ($dialogs as $key=>$dialog): ?>
                        {
                            'duration': <?=$dialog['duration'];?>,
                            'content': <?=$dialog['content'];?>
                        },
                    <? endforeach; ?>
                <? endif; ?>
            ];
        </script>
        <script src="<?=site_url('assets/js/'.$page_custom_js)?>?d=<?=md5(time());?>"></script>
    </head>

    <body style="background-image: url('<?=site_url('files/'.$page_id.'/background.png')?>'); background-color: <?=$background_color?>;">
        <nav class="main-menu">
            <ul>
                <li>
                    <a href="<?=site_url('mainmenu');?>">
                        <i class="fa fa-square fa-2x"></i>
                        <span class="nav-text">MAIN MENU</span>
                    </a>
                </li>
                <li>
                    <a href="<?=site_url('level1');?>">
                        <i class="fa fa-square fa-2x"></i>
                        <span class="nav-text">LEVEL 1</span>
                    </a>
                </li>
                <li class="has-subnav">
                    <a href="<?=site_url('level2');?>">
                        <i class="fa fa-square fa-2x"></i>
                        <span class="nav-text">LEVEL 2</span>
                    </a>
                </li>
                <li class="has-subnav">
                    <a href="<?=site_url('level3');?>">
                        <i class="fa fa-square fa-2x"></i>
                        <span class="nav-text">LEVEL 3</span>
                    </a>
                </li>
                <li class="has-subnav">
                    <a href="<?=site_url('level4');?>">
                        <i class="fa fa-square fa-2x"></i>
                        <span class="nav-text">LEVEL 4</span>
                    </a>
                </li>
                <!--
                <li class="has-subnav">
                    <a href="<?=site_url('level5');?>">
                        <i class="fa fa-square fa-2x"></i>
                        <span class="nav-text">LEVEL 5</span>
                    </a>
                </li>
                -->
                <li class="has-subnav">
                    <a href="<?=site_url('levelquiz');?>">
                        <i class="fa fa-square fa-2x"></i>
                        <span class="nav-text">QUESTIONNAIRE</span>
                    </a>
                </li>
            </ul>
        </nav>
