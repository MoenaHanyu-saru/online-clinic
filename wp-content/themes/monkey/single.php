<?php

/*

Template Name: top-page

*/
	get_header();

?>
<main>
	<div class="sub-heading">
		<h2 class="sub-heading-title">お知らせ</h2>
	</div>

  <section class="news-article" id="">
		<div class="sub-container">
      <div class="news-article-item">
          <?php
          if (have_posts()) : while (have_posts()) : the_post();
          ?>
          <div class="news-article-title-wrap">
            <h3 class="ttl"><?php the_title(); ?></h3>
            <div class="news-information">
              <p><?php the_time('Y.n.j'); ?></p>
            </div>
          </div>
          <div class="article-txt">
              <?php the_content(); ?>
          </div>
          <?php endwhile; else: ?>
          <p>記事が見つかりませんでした。</p>
          <?php endif; ?>
          <div class="news-article-btn-wrap">
            <a href="<?php
            echo site_url();?>/news-index" class=""><span>お知らせ一覧</span></a>
          </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
