<?php

Assets::add_js(array('bootstrap.min.js', 'jwerty.js'), 'external', true);
Assets::add_js(array('upclick-min.js', 'jquery.filer.min.js'));
echo theme_view('header');
?>


	    <?php
            echo Template::message();
            echo isset($content) ? $content : Template::content();
        ?>

<?php echo theme_view('footer'); ?>