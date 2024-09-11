<?php
    get_header();
?>
<div class="container-fluid full-width-container">
    <img alt="" class="image-fluid" src="<?php header_image(); ?>">
</div>

<div class="container-fluid orange-background">
    <div class="row">
        <div class="col-2"></div>
        <div class="col-6">
        <?php 
                    $product_cats = []; //array for non duplicated category

                        $args = [
                            'post_type' => 'product',
                            'posts_per_page' => -1
                        ];

                    $products = new WP_Query( $args );

                    if( $products -> have_posts() ) {
                        while( $products -> have_posts() ) {
                                $products -> the_post();
                                
                                $product_categories = get_the_terms ( get_the_id(), 'product_cat' );

                                foreach ( $product_categories as $product_category ) {
                                    if ( !in_array($product_category->name, $product_cats , true) ) {
                                        array_push( $product_cats , $product_category->name );
                                    }
                                }
                        }
                    ?>    

                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <?php 
                        $counter = 0;
                        $class = '';
                            
                            foreach( $product_cats as $key => $product_cat ) { 
                                $counter++;
                                if( $counter == 1 ) {
                                    $class = 'active';
                                } else {
                                    $class = '';
                                } 

                    ?>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link <?php echo $class ?>" 
                                    id="<?php echo $product_cat; ?>-tab" 
                                    data-bs-toggle="tab" 
                                    data-bs-target="#<?php echo $product_cat; ?>"
                                    type="button" role="tab" 
                                    aria-controls="<?php echo $product_cat; ?>" 
                                    aria-selected="true">
                                <?php echo $product_cat; ?>
                            </button>
                        </li>
                                    <?php   } //End foreach $cats  ?>
                        </ul>
                <div class="tab-content" id="myTabContent">
                    <?php 
                             $counter = 0;
                             $class = '';
                             
                             foreach( $product_cats as $key => $product_cat ) { 
                                 $counter++;
                                 if( $counter == 1 ) {
                                     $class = 'show active';
                                 } else {
                                     $class = '';
                                 } 
                    ?>
                        <div class="tab-pane fade <?php echo $class ?>" 
                                id="<?php echo $product_cat; ?>" 
                                role="tabpanel" 
                                aria-labelledby="<?php echo $product_cat; ?>-tab">

                             <?php
                                        $args = [
                                            'post_type' => 'product',
                                            'posts_per_page' => -1,
                                            'tax_query' => array(
                                                array(
                                                    'taxonomy' => 'product_cat',
                                                    'field'  => 'slug',
                                                    'terms' => array( $product_cat ),
                                                    'operator' => 'IN'
                                                )
                                            )
                                        ];

                        $products_from_cat = new WP_Query ( $args );

                        if( $products_from_cat -> have_posts() ) {
                            while( $products_from_cat -> have_posts() ){
                                $products_from_cat -> the_post();
                                
                                    $image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'thumbnail' );
                                    ?>

                              <div class="row">
                                 <div class="col-md-4 col-sm-12">
                                        <img src="<?php echo $image[0] ?>" alt="">
                                 </div>
                                 <div class="col-md-8 col-sm-12">
                                        <h3><?php echo get_the_title(); ?></h3>
                                        <p><?php echo get_the_title(); ?></p>
                                        <?php wc_get_template( 'loop/add-to-cart.php' ); ?>
                                 </div>
                              </div>      

                    <?php     }   
                        } //end if products from cat

                        wp_reset_postdata();
                             ;?>
                    </div>
                        <?php   } //End foreach $cats  ?>    
                </div><!-- .tab content --> 

                    <?php
                    } else {
                        esc_attr_e( 'No products found', 'teddyfood' );
                    }
                    wp_reset_postdata();
                ?>
        </div><!-- .col-6 -->
        <div class="col-2">
            Mini cart
        </div>
        <div class="col-2"></div>
    </div><!-- . row -->
</div><!-- . container-fluid -->

<?php
get_footer();
?>