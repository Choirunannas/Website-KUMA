<?php

/* @var $this \yii\web\View */
/* @var $content string */
use yii\helpers\Html;

$url = Yii::getAlias("@web") . '/img/';
?>

<!DOCTYPE html>
<html lang="en">

<body>

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container">
            <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

                <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

                <div class="carousel-inner" role="listbox">

                    <!-- Slide 1 -->
                    <div class="carousel-item active" style="background: url(<?= $url ?>background.jpg)">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2 class="animate_animated animate_fadeInDown">Selamat datang di <span> <br>Website KUM A PENS</span></h2>
                                <p class="animate_animated animate_fadeInUp"></p>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="carousel-item" style="background: url(<?= $url ?>background2.jpg)">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2 class="animate_animated fanimate_adeInDown"><span>Pengisian Data KUM A</span></h2>
                                <p class="animate_animated animate_fadeInUp"></p>
                            </div>
                        </div>
                    </div>

                </div>

                <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon icofont-rounded-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>

                <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon icofont-rounded-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>

            </div>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= Featured Section ======= -->
        <section id="featured" class="featured">
            <div class="container">

                <div class="row">
                    <div class="col-lg-4">
                        <div class="icon-box">
                            <i class="icofont-database"></i>
                            <h3>Kum A</h3>
                        <p><a class="btn btn-lg btn-success" href="http://localhost/kuma/backend/web/site/login">Input data</a></p>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-4 mt-lg-0">
                        <div class="icon-box">
                            <i class="icofont-globe"></i>
                            <h3>Website PENS</h3>
                            <p><a class="btn btn-lg btn-success" href="https://www.pens.ac.id/">Kunjungi</a></p>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-4 mt-lg-0">
                        <div class="icon-box">
                            <i class="icofont-globe"></i>
                            <h3>Info Pengumuman</h3>
                            <p><a class="btn btn-lg btn-success" href="https://online.mis.pens.ac.id/">Kunjungi</a></p>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Featured Section -->

      

    </main><!-- End #main -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
</body>

</html>