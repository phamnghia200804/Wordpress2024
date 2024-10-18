<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

$categories = get_categories();


?>
<footer id="site-footer" class="header-footer-group">

	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="wp-content/themes/twentytwenty/style.css">
	<!------ Include the above in your HEAD tag ---------->

	<!-- Footer -->
	<section id="footer">
		<div class="container">
			<div class="row text-center text-xs-center text-sm-left text-md-left">
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5>Quick links</h5>
					<ul class="list-unstyled quick-links"></ul>
					<ul class="list-unstyled quick-links">
						<?php
						foreach ($categories as $category) { ?>
							<li><a href="http://wordpress.local/category/<?php
							echo $category->slug ?>"><i class="fa fa-angle-double-right"></i><?php echo $category->name ?></a></li>
						<?php } ?>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5>Quick links</h5>
					<ul class="list-unstyled quick-links"></ul>

					<ul class="list-unstyled quick-links">

						<?php
						foreach ($categories as $category) { ?>
							<li><a href="http://wordpress.local/category/<?php
							echo $category->slug ?>"><i class="fa fa-angle-double-right"></i><?php echo $category->name ?></a></li>
						<?php } ?>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5>Quick links</h5>
					<ul class="list-unstyled quick-links"></ul>

					<ul class="list-unstyled quick-links">

						<?php
						foreach ($categories as $category) { ?>
							<li><a href="http://wordpress.local/category/<?php
							echo $category->slug ?>"><i class="fa fa-angle-double-right"></i><?php echo $category->name ?></a></li>
						<?php } ?>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
					<ul class="list-unstyled list-inline social text-center">
						<li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i
									class="fa fa-facebook"></i></a></li>
						<li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i
									class="fa fa-twitter"></i></a></li>
						<li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i
									class="fa fa-instagram"></i></a></li>
						<li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i
									class="fa fa-google-plus"></i></a></li>
						<li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02" target="_blank"><i
									class="fa fa-envelope"></i></a></li>
					</ul>
				</div>
				<hr>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
					<p><u><a href="https://www.nationaltransaction.com/">National Transaction Corporation</a></u> is a
						Registered MSP/ISO of Elavon, Inc. Georgia [a wholly owned subsidiary of U.S. Bancorp,
						Minneapolis, MN]</p>
					<p class="h6">© All right Reversed.<a class="text-green ml-2" href="https://www.sunlimetech.com"
							target="_blank">Sunlimetech</a></p>
				</div>
				<hr>
			</div>
		</div>
	</section>
	<!-- ./Footer -->

</footer><!-- #site-footer -->

<?php wp_footer(); ?>

</body>
<!-- <style>
	/* Footer */
	@import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

	section {
		padding: 60px 0;
	}

	section .section-title {
		text-align: center;
		color: #007b5e;
		margin-bottom: 50px;
		text-transform: uppercase;
	}

	#footer {
		background: #007b5e !important;
	}

	#footer h5 {
		padding-left: 10px;
		border-left: 3px solid #eeeeee;
		padding-bottom: 6px;
		margin-bottom: 20px;
		color: #ffffff;
		margin-left: 50px;
	}

	#footer a {
		color: #ffffff;
		text-decoration: none !important;
		background-color: transparent;
		-webkit-text-decoration-skip: objects;
	}

	#footer ul.social li {
		padding: 3px 0;
	}

	#footer ul.social li a i {
		margin-right: 5px;
		font-size: 25px;
		-webkit-transition: .5s all ease;
		-moz-transition: .5s all ease;
		transition: .5s all ease;
	}

	#footer ul.social li:hover a i {
		font-size: 30px;
		margin-top: -10px;
	}

	#footer ul.social li a,
	#footer ul.quick-links li a {
		color: #ffffff;
	}

	#footer ul.social li a:hover {
		color: #eeeeee;
	}

	#footer ul.quick-links li {
		padding: 3px 0;
		-webkit-transition: .5s all ease;
		-moz-transition: .5s all ease;
		transition: .5s all ease;
	}

	#footer ul.quick-links li:hover {
		padding: 3px 0;
		margin-left: 5px;
		font-weight: 700;
	}

	#footer ul.quick-links li a i {
		margin-right: 5px;
	}

	#footer ul.quick-links li:hover a i {
		font-weight: 700;
	}

	@media (max-width:767px) {
		#footer h5 {
			padding-left: 0;
			border-left: transparent;
			padding-bottom: 0px;
			margin-bottom: 10px;
		}
	}

	.image-left-content {
		display: flex;
		align-items: flex-start;
	}

	.left-image {
		margin-right: 20px;
		width: 300px;
		height: auto;
	}

	.text-content {
		flex: 1;
	}
</style> -->

</html>