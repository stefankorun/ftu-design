<header>
  <div class="notification-message">
    <?php print render($page['notification_message']); ?>
  </div>
  <div class="top-header">
    <div class="container">
      <?php print render($page['quick_menu']); ?>
      <?php print render($page['search']); ?>
      <?php print render($page['social_links']); ?>
    </div>
  </div>
  <div class="main-header">
    <div class="container">
      <div class="header-logo">
        <img src="<?php print $logo ?>" class="pull-left">
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
    <?php print render($page['main_slider']); ?>
    <div class="row">
      <div class="col-sm-8">
        <?php print render($page['notice_board']); ?>
      </div>
      <div class="col-sm-4">
        <?php print render($page['sidebar_right']); ?>
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
      <div class="drupal-content-wrapper">
        <?php if ($page['highlighted']): ?>
        <div id="highlighted"><?php print render($page['highlighted']); ?></div>
        <?php endif; ?>

        <?php if ($tabs): ?>
        <div class="tabs"><?php print render($tabs); ?></div>
        <?php endif; ?>

        <?php print render($page['help']); ?>

        <?php print render($title_prefix); ?>

        <?php if ($title): ?>
        <h1 class="title" id="page-title"><?php print $title; ?></h1>
        <?php endif; ?>

        <?php print render($title_suffix); ?>

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
