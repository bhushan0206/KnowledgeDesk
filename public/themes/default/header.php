<!doctype html>
<head>
    <meta charset="utf-8">    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php e(isset($meta_description) ? $meta_description : ''); ?>">
    <meta name="author" content="">
    <meta name="robots" content="noindex" /> 
    <meta http-equiv="content-type" content="text/plain; charset=UTF-8">
    <META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE, NO-STORE, must-revalidate">
    <META HTTP-EQUIV="PRAGMA" CONTENT="NO-CACHE">
    <META HTTP-EQUIV="EXPIRES" CONTENT=0>

    <title><?php
        echo isset($toolbar_title) ? "{$toolbar_title} : " : '';
        e($this->settings_lib->item('site.title'));
    ?></title>
        
    <?php
        /* Modernizr is loaded before CSS so CSS can utilize its features */                
        echo Assets::js('modernizr-2.5.3.js');

        echo Assets::add_css(array('clean-blog.min.css', 'bootstrap-datepicker.min', 
            'jquery.filer-dragdropbox-theme.css', 'motion-ui.min.css', 'offcanvas.css', 'semantic.min.css', 
            'bootstrap-select.min.css'));     

        echo Assets::add_css(array(
            'bootstrap.min.css',
            'bootstrap-responsive.min.css',
            'custom.css',
        ));         

        if (isset($shortcut_data) && is_array($shortcut_data['shortcut_keys'])) {
            Assets::add_js($this->load->view('ui/shortcut_keys', $shortcut_data, true), 'inline');
        }    
    ?>

    <link rel="stylesheet" href="http://cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">    
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.10/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.0.0/css/responsive.dataTables.min.css">    
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.9.3/css/bootstrap-select.min.css"> -->

    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>     
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>      
    <script src="http://cdn.jsdelivr.net/chartist.js/latest/chartist.min.js"></script>  
    <!--<script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.7/js/bootstrap-select.min.js"></script>  -->
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
    <script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>    
    <script src="https://cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js"></script> 
    <script src="https://cdn.datatables.net/responsive/2.0.0/js/dataTables.responsive.min.js"></script>  
    <script src="<?php echo Template::theme_url("js/custom.js?1234"); ?>"></script>  

    <?php
        //echo Assets::js('jquery-ui-1.8.13.min.js');
        echo Assets::css(null, true); 
        //echo Assets::js('jquery-ui-timepicker-addon.js');        
        echo Assets::js('semantic.min.js');        
        //echo Assets::js('custom.js'); 
        echo Assets::js('bootstrap-datepicker.js');
        echo Assets::js('bootstrap-select.min.js');
        // echo Assets::js('move-top.js');
        //echo Assets::js('custom.js');
        // echo Assets::js('easing.js');    
        // echo Assets::js('easing.js');   
        echo Assets::js('fileinput_locale_es.js');   
        echo Assets::js('fileinput.min.js');   
        echo Assets::js('chartist-plugin-pointlabels.min.js');   
        echo Assets::js('motion-ui.min.js');   
        echo Assets::js('chartist-plugin-tooltip.min.js');        
        echo Assets::js('clean-blog.min.js');
        //echo Assets::js('offcanvas.js');                                  
    ?>        
        <!--/script-->
    <script type="text/javascript">
                jQuery(document).ready(function($) {
                    $(".scroll").click(function(event){     
                        event.preventDefault();
                        $('html,body').animate({scrollTop:$(this.hash).offset().top},900);
                    });

                    // $('#post_date').datepicker({
                    // format: "yyyy-mm-dd"
                    // });  
                });
    </script>
    <!---->    
    <link rel="shortcut icon" href="<?php echo base_url(); ?>favicon.ico">
</head>
<!-- <body class="desktop" onbeforeunload="return HandleBackFunctionality(this)"> -->
<body class="desktop">
    <!--[if lt IE 7]>
    <p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or
    <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p>
    <![endif]-->
    <noscript>
        <p>Javascript is required to use Bonfire's admin.</p>
    </noscript>

    <!-- Navigation -->

    <nav class="navbar-static-top navbar-inverse navbar navbar-default navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>                
                <?php
                echo anchor('/', html_escape($this->settings_lib->item('site.title')), 'class="navbar-brand"');
                if (isset($shortcut_data) && is_array($shortcut_data['shortcuts'])
                    && is_array($shortcut_data['shortcut_keys']) && count($shortcut_data['shortcut_keys'])
                   ) :
                ?>
                <?php endif;?>
            </div>
            <?php echo theme_view('_sitenav'); ?>
        </div>
        <!-- /.container -->        
    </nav>    

    