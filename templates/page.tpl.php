<header>
  <div class="top-header">
    <div class="container">
      <?php print render($page['quick_menu']); ?>
      <?php print render($page['search']); ?>
      <?php print render($page['social_links']); ?>
    </div>
  </div>
  <div class="main-header">
    <div class="container">
      <div class="header-logo pull-left">
        <img src="<?php print drupal_get_path('theme', 'ftutheme') ?>/images/main-logo.gif" class="pull-left">
        <?php if ($site_slogan): ?>
        <?php if ($title): ?>
        <div class="header-sitename">
          <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">
            <span><?php print $site_slogan; ?></span>
          </a>
        </div>
        <?php else: /* Use h1 when the content title is empty */ ?>
        <h1 class="header-sitename">
          <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">
            <span><?php print $site_slogan; ?></span>
          </a>
        </h1>
        <?php endif; ?>
        <?php endif; ?>
      </div>
      <?php print render($page['main_menu']); ?>
    </div>
  </div>
</header>


<div class="main-content container">
  <?php if($is_front) : ?>
  <!-- FRONT PAGE CONTENT -->
  <div class="front-page-content">
    <div class="content-slider" style="display: none;">
      <ul class="bxslider">
        <li>
          <div class="single-slide row">
            <div class="image col-sm-8">
              <img src="images/temp/EMI_2949.jpg">
            </div>
            <div class="caption col-sm-4">
              <div class="title">Премиерот во посета на Факултетот за Туризам и Угостителство</div>
              <div class="description">
                Вишата угостителско-туристичка школа во Охрид, се формира со Одлука на
                Здруженото угостителско-туристичко стопанство на СРМ. Оваа школа е единствена Виша школа
                во Македонија која имаше за цел едуцирање на стручни кадри од областа на угостителството
              </div>
            </div>
          </div>
        </li>
        <li>
          <div class="single-slide row">
            <div class="image col-sm-8">
              <img src="images/temp/sveti-jovan.jpg">
            </div>
            <div class="caption col-sm-4">
              <div class="title">Промоција на градот Охрид и други работи</div>
              <div class="description">
                Охрид — град во југозападниот дел на Македонија со 42.033 жители.
                По него Охридското Езеро го носи своето име.
                Охрид и Охридското Езеро се едни од главните туристички места во Македонија.
                Поради големиот број на цркви и манастири, градот е познат како Балкански и Европски
                Ерусалим.
                Охрид е познат и како „град на светлината“ што претставува буквален превод на неговото старо
                име, Лихнид.
              </div>
            </div>
          </div>
        </li>
        <li>This is a final slide.</li>
      </ul>
    </div>
    <div class="row">
      <div class="col-sm-8">
        <div class="content-articles">
          <?php print render($page['notice_board']); ?>
        </div>
      </div>
      <div class="content-sidebar col-sm-4">
        <div class="sidebar-item">
          <img src="images/temp/uklo.png">
        </div>
        <div class="sidebar-item">
          <img src="images/temp/sileks.png">
        </div>
        <div class="sidebar-item">
          <img src="images/temp/metropol.png">
        </div>
      </div>
    </div>
  </div>

  <?php else : ?>
  <!-- NOT FRONT PAGE CONTENT -->
  <div class="not-front-page-content row">
    <div class="col-sm-3">
      <?php print render($page['sidebar_left']); ?>
    </div>
    <div class="col-sm-9">
      <div class="drupal-content-wrapper"></div>
        <?php if ($page['highlighted']): ?>
        <div id="highlighted"><?php print render($page['highlighted']); ?></div>
        <?php endif; ?>

        <?php print render($title_prefix); ?>

        <?php if ($title): ?>
        <h1 class="title" id="page-title"><?php print $title; ?></h1>
        <?php endif; ?>

        <?php print render($title_suffix); ?>

        <?php if ($tabs): ?>
        <div class="tabs"><?php print render($tabs); ?></div>
        <?php endif; ?>

        <?php print render($page['help']); ?>

        <?php if ($action_links): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
        <?php endif; ?>

        <?php print render($page['content']); ?>

        <?php print $feed_icons; ?>
      </div>
    </div>
    <?php endif ?>
  </div>
</div>


<footer>
  <div class="container">
    <?php print render($page['footer']); ?>
  </div>
</footer>
