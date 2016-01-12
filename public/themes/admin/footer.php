	<footer class="container-fluid footer">
		<p class="pull-right">
			Executed in {elapsed_time} seconds, using {memory_usage}.<br />
			Copyright &copy; <?php echo date("Y"); ?> Bhushan Gavhale - IGATE Global Solutions. All rights reserved. <br />
			Powered by <a href="http://cibonfire.com" target="_blank"><span class="icon-fire"></span>&nbsp;Bonfire</a> <?php echo BONFIRE_VERSION; ?>
		</p>
	</footer>
	<div id="debug"><!-- Stores the Profiler Results --></div>
    <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
		<!--<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>     -->
    <script>window.jQuery || document.write('<script src="<?php echo js_path(); ?>jquery-1.11.3.min.js"><\/script>');</script>
    <?php 
    	echo Assets::js(); 
    	//echo Assets::js('custom.js');
    ?>
</body>
</html>