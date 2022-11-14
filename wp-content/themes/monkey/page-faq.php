<?php

/*

Template Name: top-page

*/
	get_header();
?>


<main class="sub-page first">

	<div class="sub-heading">
        <div class="container">
            <h2 class="sub-heading-title">よくあるご質問</h2>
        </div>
	</div>

    <section class="faq-link">
        <div class="container">
            <div class="faq-link-wrap">
                <!-- カスタムフィールド出力 -->
                <?php if( have_rows('faq_block') ): ?>
                    <!-- カテゴリごとにナンバー付与 -->
                    <?php 
                        $num = 0;
                    ?>
                    <!-- // カテゴリごとにナンバー付与 -->
                <ul class="faq-link-wrap">
                    <?php while ( have_rows('faq_block') ) : the_row(); ?>
                        <!-- カテゴリごとにナンバー更新 -->
                        <?php  
                        $num ++; 
                        ?>
                        <!-- カテゴリごとにナンバー更新 -->
                        <li><a href="#faq_<?php echo $num ?>">
                            <?php the_sub_field('category'); ?></a>
                        </li>
                    <?php endwhile; ?>
                </ul>
                <?php endif; ?>
                <!-- // カスタムフィールド出力 -->
            </div>
        </div>
    </div>


    <!-- <section class="question top-section" id="question">
      <div class="container">
        <div class="question-block">

          <h3 data-aos="fade-up" data-aos-duration="500">よくあるご質問</h3>

          <ul class="ac">
            <li data-aos="fade-up" data-aos-duration="500">
              <div class="ac-label">

                <p>何歳から始められますか？</p>
                <div class="icon-wrap"><span class="icon"></span></div>
              </div>
              <div class="ac-content">
                <p>0ヶ月～3歳までご利用可能です。現在すでに1歳以上のお子様も、月齢に合ったおもちゃをレンタルできますのでお気軽にお申し込みください。</p>
              </div>
            </li>
          </ul>

        </div>
      </div>
    </section> -->

    <section class="question top-section" id="question">
        <div class="container">
            <!-- カスタムフィールド出力 -->
            <?php if( have_rows('faq_block') ): ?>

                <!-- カテゴリごとにナンバー付与 -->
                <?php 
                    $num = 0;
                ?>
                <!-- // カテゴリごとにナンバー付与 -->

            <?php while ( have_rows('faq_block') ) : the_row(); ?>

                <!-- カテゴリごとにナンバー更新 -->
                <?php  
                $num ++; 
                ?>
                <!-- カテゴリごとにナンバー更新 -->

                <div id="faq_<?php echo $num ?>" class="question-block">
                    <h3>
                        <?php the_sub_field('category'); ?>
                    </h3>
                    <ul class="ac">
                        <?php if( have_rows('question_item') ): ?>
                            <?php while ( have_rows('question_item') ) : the_row(); ?>
                                <li>
                                <div class="ac-label">
                                    <p><?php the_sub_field('question'); ?></p>
                                    <div class="icon-wrap"><span class="icon"></span></div>
                                </div>
                                <div class="ac-content">
                                    <p><?php the_sub_field('answer'); ?></p>
                                </div>
                                </li>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </ul>
                </div>
            <?php endwhile; ?>
            <?php endif; ?>
            <!-- // カスタムフィールド出力 -->
        </div>
    </section>


</main>

<?php get_footer(); ?>

