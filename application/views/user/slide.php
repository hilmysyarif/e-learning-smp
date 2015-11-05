<div class="slide">
	<!-- <a href="#"><img src="<?php echo base_url('resource/img/slides/slides.jpg'); ?>"></a> -->
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			<li data-target="#carousel-example-generic" data-slide-to="1"></li>
			<li data-target="#carousel-example-generic" data-slide-to="2"></li>
			<li data-target="#carousel-example-generic" data-slide-to="3"></li>
			<li data-target="#carousel-example-generic" data-slide-to="4"></li>
			<li data-target="#carousel-example-generic" data-slide-to="5"></li>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner">
		
		<div class="item active">
			<img src="<?php echo base_url('resource/img/slides/slides.png'); ?>" alt="...">
			<div class="carousel-caption">

			</div>
		</div>
		<?php foreach ($slides as $row) { ?>
		<div class="item">
			<img src="<?php echo base_url('resource/img/slides/'.$row['gambar']); ?>" alt="...">
			<div class="carousel-caption">
				<!-- caption -->
			</div>
		</div>
		<?php } ?>

		</div>

		<!-- Controls -->
		<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
		</a>
		<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right"></span>
	    </a>
	</div>


	<?php //echo $this->load->view('user/form-login'); ?>

</div>