<!DOCTYPE html>
<html lang="ja">

<head>
  <title>美容師テンプレート５ | お知らせ詳細</title>
  <?php get_header(); ?>
</head>

<body>
  <div class="superwrapper animsition">
    <header id="header" class="header">
      <div class="mobile-container">
        <div class="logo__img">
          <a class="animsition-link" href="<?php echo esc_url( home_url('/')); ?>">
            <div class="logo"></div>
          </a>
        </div>
        <div class="mobile-button">
          <button class="mobile-menu__btn">
            <span></span>
            <span></span>
            <span></span>
          </button>
        </div>
      </div>
      <!-- /.mobile-container -->
      <div class="pc-container">
        <div class="logo__img">
          <a class="animsition-link" href="<?php echo esc_url( home_url('/')); ?>">
            <div class="logo-pc logo"></div>
          </a>
        </div>
        <nav class="pc-nav">
          <ul class="pc-nav-list">
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link" href="<?php echo esc_url( home_url('/')); ?>"><span>TOP</span></a>
            </li>
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link" href="<?php echo esc_url( home_url('/news')); ?>"><span>NEWS</span></a>
            </li>
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link" href="<?php echo esc_url( home_url('/recruit')); ?>"><span>RECRUIT</span></a>
            </li>
          </ul>
        </nav>
      </div>
      <!-- /.pc-container -->
      <nav class="sp-navbtn">
        <ul class="sp-navbtn__container">
          <li>
            <a class="tel" href="tel:092-686-7954">電話予約<i class="icon-tel"></i></a>
          </li>
          <li>
            <a class="net" target="_blank" href="https://beauty.hotpepper.jp/">オンライン予約<i class="icon-net"></i></a>
          </li>
        </ul>
      </nav>
      <!-- /.nav-btn -->
    </header>
    <!-- /#header -->
    <section class="c-news-sl">
      <div class="c-container">
        <h3 class="c-title02">
          <span class="txt">News</span>
        </h3>
        <ul class="c-news-sl__list">
          <li class="c-news-sl__block">
            <div class="c-news-sl__title">
              <span class="c-news-sl__date"><?php echo get_the_date(); ?></span>
              <p class="c-news-sl__tit c-txt02"><?php the_title(); ?></p>
            </div>
            <?php the_post_thumbnail('thumbnail'); ?>
            <div class="c-news-sl__contents">
              <p><?php the_content(); ?></p>
            </div>
          </li>
        </ul>
        <a class="more-link animsition-link" href="<?php echo esc_url( home_url('/news')); ?>"><span class="readmore">一覧へ戻る</span></a>
      </div>
    </section>
    <!-- /.news-top -->
    <footer id="footer" class="footer">
      <div class="footer__inner">
        <div class="footer__sns">
          <a href="https://www.instagram.com/" target="_blank">
            <i class="fab fa-instagram fa-2x"></i>
          </a>
          <a href="https://www.facebook.com/" target="_blank">
            <i class="fab fa-facebook fa-2x"></i>
          </a>
        </div>
        <div class="copyright">&copy;RivRound</div>
      </div>
    </footer>
    <!-- /.footer -->
    <div class="mobile-menu">
      <nav class="mobile-menu__nav">
        <ul class="mobile-menu__list">
          <li class="mobile-menu__item">
            <a class="animsition-link" href="<?php echo esc_url( home_url('/')); ?>">TOP</a>
          </li>
          <li class="mobile-menu__item">
            <a class="animsition-link" href="<?php echo esc_url( home_url('/news')); ?>">NEWS</a>
          </li>
          <li class="mobile-menu__item">
            <a class="animsition-link" href="<?php echo esc_url( home_url('/recruit')); ?>">RECRUIT</a>
          </li>
        </ul>
        <div class="reserve-btn-wrap">
          <div class="reserve-btn-tel">
            <h4>電話予約はこちら</h4>
            <div class="reserve-btn">
              <a href="tel:092-686-7954"><span>092-686-7954</span></a>
            </div>
          </div>
          <div class="reserve-btn-net">
            <h4>ネット予約はこちら</h4>
            <div class="reserve-btn">
              <a href="https://beauty.hotpepper.jp/" target="_blank"><span>ONLINE RESERVE</span></a>
            </div>
          </div>
        </div>
      </nav>
    </div>
    <!-- /.mobile-menu -->
  </div>
  <!-- .superwrapper -->
  <?php get_template_part('includes/c-footer'); ?>
</body>

</html>