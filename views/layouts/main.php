<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;

use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;
use yii\helpers\Url;

AppAsset::register($this);
$asset = AppAsset::register($this);
$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<!--<header id="header">-->
<!--    --><?php
//    NavBar::begin([
//        'brandLabel' => Yii::$app->name,
//        'brandUrl' => Yii::$app->homeUrl,
//        'options' => ['class' => 'navbar-expand-md navbar-dark bg-dark fixed-top']
//    ]);
//    echo Nav::widget([
//        'options' => ['class' => 'navbar-nav'],
//        'items' => [
//            ['label' => 'Home', 'url' => ['/site/index']],
//            ['label' => 'About', 'url' => ['/site/about']],
//            ['label' => 'Contact', 'url' => ['/site/contact']],
//            Yii::$app->user->isGuest
//                ? ['label' => 'Login', 'url' => ['/site/login']]
//                : '<li class="nav-item">'
//                    . Html::beginForm(['/site/logout'])
//                    . Html::submitButton(
//                        'Logout (' . Yii::$app->user->identity->username . ')',
//                        ['class' => 'nav-link btn btn-link logout']
//                    )
//                    . Html::endForm()
//                    . '</li>'
//        ]
//    ]);
//    NavBar::end();
//    ?>
<!--</header>-->
<header>


    <nav id="nav_dark" class="navbar border-bottom border-body text-light" data-bs-theme="dark">
        <div class="container-fluid">
            <form id="search_dark" class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Поиск..." aria-label="Search">
            </form>
            <p>Бьюти-бокс месяца стоимостью 2500 руб. всего за 1000 руб.</p>
            <a class="navbar-brand" href="<?= Url::to(['cab'])?>">
                <img src="<?= $asset->baseUrl.'/img/ph.JPG'?>" alt="Logo" width="47" height="42" class="d-inline-block align-text-top">
            </a>

        </div>
    </nav>


    <nav id="nav_white" class="navbar">
        <div class="container-fluid">
            <p class="text-start">
                <a class="navbar-brand" href="<?= Url::to(['podpiska'])?>">Боксы по подписке</a>
                <a class="navbar-brand" href="#cont">Контакты</a>
            </p>
            <a class="navbar-brand" href="<?= Url::to(['index'])?>">
                <img src="<?= $asset->baseUrl.'/img/ph1.JPG'?>" alt="Bootstrap" width="224" height="76">
            </a>
            <a class="navbar-brand" href="<?= Url::to(['basket'])?>">Корзина(0)</a>

        </div>
    </nav>
</header>
<main id="main" class="flex-shrink-0" role="main">
    <div class="container">
        <?php if (!empty($this->params['breadcrumbs'])): ?>
            <?= Breadcrumbs::widget(['links' => $this->params['breadcrumbs']]) ?>
        <?php endif ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>
<div id="footer_or" class="text-start row row-cols-1 row-cols-md-3 g-4 align-items-center">
    <div id="f1">
        <h3>Магазин</h3><br>
        <a href="<?= Url::to(['podpiska'])?>">Подписка на боксы</a><br>
        <a href="<?= Url::to(['dostavka'])?>">Доставка и возврат</a><br>
        <a href="<?= Url::to(['politics'])?>">Политика магазина</a><br>
        <a href="<?= Url::to(['politics', '#'=>'sposob'])?>">Способы оплаты</a><br>
        <a href="<?= Url::to(['qa'])?>">Вопросы и ответы</a><br>
    </div>
    <div id="f2" class="text-center">
        <h2>Коробочки</h2>
        <p>Подпишитесь для обновлений и уведомлениях об ограниченных сериях</p>
        <form>
        <input type="text" class="form-control" id="specificSizeInputName" placeholder="Эл. почта*">
        <input type="submit" class="btn btn-dark" value="subscribe">
        </form>
        <br><br>
    </div>
    <div id="f3" class="text-start">
        <p><a name="cont"></a></p>
        <h3>Контакты</h3><br>
        <p>ул. Арбат, 1а,  Москва,<br>
            119019, Россия<br>
            info@mysite.ru<br>
            +7 123 456-78-90</p><br>
    </div>
</div>

<!--основной футер-->
<footer class="text-center">Created by Sinitsina Sofiya</footer>
<!--<footer id="footer" class="mt-auto py-3 bg-light">-->
<!--    <div class="container">-->
<!--        <div class="row text-muted">-->
<!--            <div class="col-md-6 text-center text-md-start">&copy; My Company --><?php //= date('Y') ?><!--</div>-->
<!--            <div class="col-md-6 text-center text-md-end">--><?php //= Yii::powered() ?><!--</div>-->
<!--        </div>-->
<!--    </div>-->
<!--</footer>-->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
