<script type="text/javascript">
	$(document).ready(function(){
		$(".nav-long li a").click(function(){
			// $(this).css({"background-color": "#e3e3e3", "box-shadow": "0px -3px 0px 1px #CE0000 inset"});
			$(this).addClass("nav-long-active");
		});
	});
</script>
<script src="<?php echo base_url('resource/js/bootstrap.js'); ?>"></script>
</body>
</html>