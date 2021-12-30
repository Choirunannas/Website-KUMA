<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use frontend\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body>
    <?php $this->beginBody() ?>

    <div class="wrap">
        <!-- ======= Top Bar ======= -->
        <section id="topbar" class="d-none d-lg-block">
            <div class="container d-flex">
                <div class="contact-info mr-auto">
                    <i class="icofont-envelope"></i><a href="pens.ac.id">Kum A PENS</a>
                    
                </div>
                <div class="social-links">
                    <a href="https://www.facebook.com/pmlamongan" class="facebook"><i class="icofont-facebook"></i></a>
                    <a href="https://www.instagram.com/explore_smapama/" class="instagram"><i class="icofont-instagram"></i></a>
                </div>
            </div>
        </section>

        <!-- ======= Header ======= -->
        <header id="header">
            <div class="container d-flex">

                <div class="logo mr-auto">
                    <h1 class="text-light"><a href="index.html"><span>Website KUM A PENS</span></a></h1>
                    <!-- Uncomment below if you prefer to use an image logo -->
                    <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
                </div>

                <nav class="nav-menu d-none d-lg-block">
                    <ul>
                        <li><?= Html::a('Home', ['/site/index']) ?></li>
                        <li><?= Html::a('Signup', ['/site/signup']) ?></li>


                        <?php
                        if (Yii::$app->user->isGuest) { ?>
                                    <li><?= Html::a('Login', ['/site/login']) ?></li>
                        <?php } else { ?>
                            <li><?= Html::a('Atasan', ['/atasan/index']) ?></li>
                            <li><?= Html::a('Dosen', ['/dosen/index']) ?></li>
                            <li><?= Html::a('Logout', ['/site/logout']) ?></li>
                        <?php } ?>
                    </ul>
                </nav><!-- .nav-menu -->
            </div>
        </header><!-- End Header -->

        <div>
            <?= $content ?>
        </div>

    </div>
    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">


                    </div>

                </div>
            </div>
        </div>

    </footer><!-- End Footer -->

    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>