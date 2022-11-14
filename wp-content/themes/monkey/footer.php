

<footer class="footer">
  <div class="footer-block">
    <div class="container">
      <div class="logo">
        <?php
        the_custom_logo();
        if (!has_custom_logo()) {
          bloginfo('name');
        }
        ?>
      </div>
      <div class="footer-nav">
        <ul>
          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>/#">特商法</a></li>
          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>/#">利用規約</a></li>
          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>/#">プライバシーポリシー</a></li>
          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>/contact">お問い合わせ</a></li>
          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>/faq">よくある質問</a></li>
          <li><a href="https://sarucrew.co.jp/">運営会社</a></li>
        </ul>
      </div>
    </div>
  </div>
  <small>©︎ 2022 MONKEY ONLINE CLINIC Co.,Ltd All Right Reserved.</small>
</footer>
<script>
  $(function () {
    var image = document.getElementsByClassName('thumbnail');
    new simpleParallax(image, {
      scale: '1.25',
      delay: '0.6'
    });
  })
</script>
<script defer>

  $(function () {
    window.addEventListener('scroll', function () {
      var aos_flag;  // 判断用の変数を用意
      if ($("aos_flag").empty()) { //aos_flgに値が入ってない場合
        AOS.init();
        aos_flag = '1';  //aos_flgを値を追加して、今後スクロールした時にifで弾かれるようにする
      }
    })
  });
</script>
<?php wp_footer(); ?>
</body>

</html>
