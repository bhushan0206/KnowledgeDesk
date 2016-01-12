<div id="footer" align="center">
    <footer class="footer">
        <p>                        
            Copyright &copy; <?php echo date("Y"); ?> Bhushan Gavhale - IGATE Global Solutions. All rights reserved. <br />
            <a>contact us</a> 
            Powered by <a href="http://cibonfire.com" target="_blank"><span class="icon-fire"></span>&nbsp;Bonfire</a> <?php echo BONFIRE_VERSION; ?>            
        </p>
    </footer>    
    <div id="debug"><!-- Stores the Profiler Results --></div>
    <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
    <!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script> -->
    <script>window.jQuery || document.write('<script src="<?php echo js_path(); ?>jquery-1.11.3.min.js"><\/script>');</script>
    <?php echo Assets::js(); ?>    
</div>
</body>
</html>