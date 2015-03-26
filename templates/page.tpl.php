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
      <!--<div class="header-menu">
        <ul>
          <li><a href="#">За факултетот</a></li>
          <li><a href="#">Кадар</a></li>
          <li>
            <a href="#">Студии</a>
            <ul>
              <li><a href="#">Додипломски</a></li>
              <li><a href="#">Магистерски</a></li>
              <li><a href="#">Докторски</a></li>
            </ul>
          </li>
          <li><a href="#">Истражувања</a></li>
        </ul>
      </div>-->
    </div>
  </div>
</header>
<div class="main-content container">
  <div class="front-page-content">
    <?php if($is_front) : ?>
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
          <!--<div class="header">Огласна табла</div>
          <div class="col-sm-6">
            <div class="single-article">
              <div class="title">
                Распоред за настава
              </div>
              <div class="date">
                15/03/2015
              </div>
              <div class="description">
                Наставата за летниот семестар од академската 2014/2015 година започнува на 02.02.2015.
                Распоредот на настава е објавен на веб страната од Факултетот за туризам и угостителство –
                Охрид.
                Од деканската управа
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="single-article">
              <div class="title">
                ЕРАЗМУС стипендии
              </div>
              <div class="date">
                14/03/2015
              </div>
              <div class="description">
                Во рамките на ЕРАЗМУС - програмата за мобилност на студенти и академски кадар, Универзитетот
                „Св. Климент Охридски” – Битола
                објавува КОНКУРС за стипендии за студентска и академска мобилност за Академска 2013/2014
                година.
                Краен рок за аплицирање: 21 јуни 2013
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="single-article">
              <div class="title">
                Тројца професори од ФТУ Охрид се стекнаа со признанија
              </div>
              <div class="date">
                14/03/2015
              </div>
              <div class="description">
                „Една од најстарите институции на балканските простори за едукација на ваков кадар е токму
                Факултетот за туризам и угостителство во Охрид. Поради активностите, посебно во делот на едукација
                на менаџментот доделуваме признание на проф. д-р Ангела Василевска,
                која покажала ислучителен напор и инвентивност.“ - потеницира Танески.
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="single-article">
              <div class="title">
                Со квалитетно образование и пракса до развој на туризмот
              </div>
              <div class="date">
                14/03/2015
              </div>
              <div class="description">
                Симбиоза на науката и праксата. Тоа е формулата за развој на туризмот и туристичкото стопанство,
                велат стручњаците. Во последните десет години се повеќе се работи на зголемување на предметите
                со практичен дел на факултетите за туризам.
              </div>
            </div>
          </div>-->
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
    <?php endif ?>
  </div>
  <div class="not-front-page-content row">
    <?php if(!$is_front) : ?>

    <div class="col-sm-3">
      <?php print render($page['side_menu_nav']); ?>
    </div>
    <div class="col-sm-9">
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
      <?php endif ?>
    </div>
  </div>
</div>
<footer>

  <div class="container">
    <?php print render($page['footer']); ?>
    <!--<div class="footer-content">-->
    <!--<div class="contact">-->
    <!--<div class="title">Факултет за туризам и угостителство</div>-->
    <!--<div class="info">-->
    <!--<div class="address">-->
    <!--Кеј Маршал Тито 95, 6000 Охрид, Македонија-->
    <!--</div>-->
    <!--<div class="phone">-->
    <!--Тел/Факс: + 389 46 611 517 <br>-->
    <!--Тел: + 389 46 611 518 <br>-->
    <!--Тел: + 389 76 355 501 <br>-->
    <!--E-mail: ftu@uklo.edu.mk-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>-->
    <!--<div class="copyright">-->
    <!--&copy; 2015 ФТУ. Сите права задржани.-->
    <!--</div>-->
  </div>
</footer>
