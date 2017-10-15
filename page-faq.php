<?php
/* Template Name: FAQ Page */
	
	$faq_answer = get_field('faq_answer');
	
	get_header();
?>
<div class="container">
	<h1 class="mt-4 mb-3"><?php wp_title('',true);?></h1>

	<ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
        </li>
        <li class="breadcrumb-item active"><?php wp_title('',true);?></li>
  	</ol>

  	<div class="mb-4" id="faq" role="tablist" aria-multiselectable="true">
        <?php $loop = new WP_Query( array ( 'post_type' => 'faqs', 'orderby' => 'post_id', 'order' => 'ASC') ); ?>
        <?php while( $loop->have_posts() ): $loop->the_post(); ?>
	        <div class="card">
	          	<div class="card-header" role="tab" id="faq_<?php the_ID(); ?>">
		            <h5 class="mb-0">
		              	<a data-toggle="collapse" data-parent="#faq" href="#faq-<?php the_ID(); ?>" aria-expanded="false" aria-controls="faq-<?php the_ID(); ?>"><?php the_title(); ?></a>
		            </h5>
	          	</div>

	          	<div id="faq-<?php the_ID(); ?>" class="collapse" role="tabpanel" aria-labelledby="faq_<?php the_ID(); ?>">
		            <div class="card-body">
		              <?php the_field('faq_answer'); ?>
		            </div>
	          	</div>
	        </div>
		<?php endwhile; wp_reset_query();?>
  	</div>
</div>

<?php get_footer();?>