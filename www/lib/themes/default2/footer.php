<?php 
	if(!defined("_access")) {
		die("Error: You don't have permission to access here..."); 
	}
?>			
			<hr>
			<footer>
				<p>&copy; <?php print __("All rights reserved"); ?> - ZanPHP Framework v.2.5 - 2011 - <?php print __("Powered by"); ?> <a href="http://www.milkzoft.com" title="MilkZoft">MilkZoft</a></p>
	      	</footer>

    	</div> <!-- /container -->
		<!--<script src="<?php print path("vendors/js/jquery-1.7.1.min.js", "zan"); ?>"></script>-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script src="<?php print path("vendors/css/frameworks/newbootstrap/js/bootstrap.min.js", "zan"); ?>"></script>
		<script>
			$(document).on('ready', function () {
				$('.dropdown-toggle').dropdown();
				$(".alert").alert()
				console.log('dropdown');
			});
		</script>
	</body>
</html>