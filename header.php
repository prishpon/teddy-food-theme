<?php
	/* Header main
	*/
?>
<!doctype html>
<html <?php language_attributes(); ?> >
<head>
	<!-- Required meta tags -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Bootstrap library -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

	<?php wp_head(); ?>
</head>

<body>
	<div class="container-fluid orange-background">
		<div class="row">
			<div class="col-1"></div>
			<div class="col-1">
			<?php 
					$custom_logo_id = get_theme_mod( 'custom_logo' );
					$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
					if ( has_custom_logo() ) {
							echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
					} else {
							echo '<h1>'. get_bloginfo( 'name' ) .'</h1>';
					}
			?>
			</div>
			<div class="col-6">
				<p class="banner-add-paragraph">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia, officia.</p>
			</div>
			<div class="col-1 help-button">
				<a href="#"> <span>Help</span> </a>
			</div>
			<div class="col-2">
				<button class="btn btn-light btn-stay-connect">Stay Connected</button>
			</div>
			<div class="col-1"></div>
		</div><!-- . row -->
	</div><!-- . container-fluid -->


