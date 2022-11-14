<?php

/*

Template Name: top-page

*/
	get_header();
?>


<main class="sub-page first">

	<div class="sub-heading">
        <div class="container">
            <h2 class="sub-heading-title">お問い合わせ</h2>
        </div>
	</div>

   <section class="contact">
      <div class="container">
        <?php echo do_shortcode('[mwform_formkey key="89"]'); ?>
      </div>
   </section>


</main>

<?php get_footer(); ?>

