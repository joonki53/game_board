<?php
	include_once "./config.php";
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Amin Template">
    <meta name="keywords" content="Amin, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>게임리뷰 사이트</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cinzel:400,700,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/barfiller.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Menu Begin -->
    <?php include_once "./fragments/humber.php";?>
    <!-- Humberger Menu End -->

    <!-- Header Section Begin -->
    <?php include_once "./fragments/header.php";?>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="hs-text">
                        <div class="label"><span></span></div>
                        <h3>게임리뷰 사이트</h3>
                        <div class="ht-meta">
                           
                            <ul>
                                <li>by Games</li>
                                <li>review</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5 col-md-6 offset-lg-1 offset-xl-2">
                    <div class="trending-post">
                        <div class="section-title">
                            <h5>인기게임</h5>
                        </div>
                        <div class="trending-slider owl-carousel">
                            <div class="single-trending-item">
                                <div class="trending-item">
                                    <div class="ti-pic">
                                        <img src="img/trending/lol2.jpg" alt="">
                                    </div>
                                    <div class="ti-text">
                                        <h6><a href="review_lol.php">리그 오브 레전드</a>
                                        </h6>
                                        <ul>
                                            <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                            <li><i class="fa fa-comment-o"></i> 12</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="trending-item">
                                    <div class="ti-pic">
                                        <img src="img/trending/volo2.jpg" alt="">
                                    </div>
                                    <div class="ti-text">
                                        <h6><a href="review_valo.php">발로란트</a>
                                        </h6>
                                        <ul>
                                            <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                            <li><i class="fa fa-comment-o"></i> 12</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="trending-item">
                                    <div class="ti-pic">
                                        <img src="img/trending/fifa2.jpg" alt="">
                                    </div>
                                    <div class="ti-text">
                                        <h6><a href="review_fc.php">FC 온라인</a></h6>
                                        <ul>
                                            <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                            <li><i class="fa fa-comment-o"></i> 12</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="trending-item">
                                    <div class="ti-pic">
                                        <img src="img/trending/lost2.jpg" alt="">
                                    </div>
                                    <div class="ti-text">
                                        <h6><a href="review_lost.php">로스트아크</a>

                                        </h6>
                                        <ul>
                                            <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                            <li><i class="fa fa-comment-o"></i> 12</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="single-trending-item">
                                <div class="trending-item">
                                    <div class="ti-pic">
                                        <img src="img/trending/fps2.jpg" alt="">
                                    </div>
                                    <div class="ti-text">
                                        <h6><a href="review_sudden.php">서든어택</a>

                                        </h6>
                                        <ul>
                                            <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                            <li><i class="fa fa-comment-o"></i> 12</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="trending-item">
                                    <div class="ti-pic">
                                        <img src="img/trending/maple2.jpg" alt="">
                                    </div>
                                    <div class="ti-text">
                                        <h6><a href="review_maple.php">메이플스토리</a></h6>
                                        <ul>
                                            <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                            <li><i class="fa fa-comment-o"></i> 12</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="trending-item">
                                    <div class="ti-pic">
                                        <img src="img/trending/over2.jpg" alt="">
                                    </div>
                                    <div class="ti-text">
                                        <h6><a href="review_over.php">오버워치 2</a></h6>
                                        <ul>
                                            <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                            <li><i class="fa fa-comment-o"></i> 12</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="trending-item">
                                    <div class="ti-pic">
                                        <img src="img/trending/dia2.jpg" alt="">
                                    </div>
                                    <div class="ti-text">
                                        <h6><a href="review_dia.php">디아블로 4</a></h6>
                                        <ul>
                                            <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                            <li><i class="fa fa-comment-o"></i> 12</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-slider owl-carousel">
            <div class="hs-item set-bg" data-setbg="img/hero/valo.jpg"></div>
            <div class="hs-item set-bg" data-setbg="img/hero/lol.jpg"></div>
            <div class="hs-item set-bg" data-setbg="img/hero/lost.jpg"></div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Latest Preview Section Begin -->
    <section class="latest-preview-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h5>인기게임</h5>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="lp-slider owl-carousel">
                    <div class="col-lg-3">
                        <div class="lp-item">
                            <div class="lp-pic set-bg" data-setbg="img/latest-preview/lol2.jpg">
                                <div class="review-loader">
                                    <div class="loader-circle-wrap">
                                        <div class="loader-circle">
                                            <span class="circle-progress" data-cpid="id" data-cpvalue="75"
                                                data-cpcolor="#c20000"></span>
                                            <div class="review-point">7.5</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="lp-text">
                                <h6><a href="#">리그 오브 레전드</a></h6>
                                <ul>
                                    <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                    <li><i class="fa fa-comment-o"></i> 12</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="lp-item">
                            <div class="lp-pic set-bg" data-setbg="img/latest-preview/volo2.jpg">
                                <div class="review-loader">
                                    <div class="loader-circle-wrap">
                                        <div class="loader-circle">
                                            <span class="circle-progress" data-cpid="id" data-cpvalue="75"
                                                data-cpcolor="#c20000"></span>
                                            <div class="review-point">7.5</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="lp-text">
                                <h6><a href="#">발로란트</a></h6>
                                <ul>
                                    <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                    <li><i class="fa fa-comment-o"></i> 12</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="lp-item">
                            <div class="lp-pic set-bg" data-setbg="img/latest-preview/fifa2.jpg">
                                <div class="review-loader">
                                    <div class="loader-circle-wrap">
                                        <div class="loader-circle">
                                            <span class="circle-progress" data-cpid="id" data-cpvalue="75"
                                                data-cpcolor="#c20000"></span>
                                            <div class="review-point">7.5</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="lp-text">
                                <h6><a href="#">FC 온라인</a></h6>
                                <ul>
                                    <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                    <li><i class="fa fa-comment-o"></i> 12</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="lp-item">
                            <div class="lp-pic set-bg" data-setbg="img/latest-preview/lost2.jpg">
                                <div class="review-loader">
                                    <div class="loader-circle-wrap">
                                        <div class="loader-circle">
                                            <span class="circle-progress" data-cpid="id" data-cpvalue="75"
                                                data-cpcolor="#c20000"></span>
                                            <div class="review-point">7.5</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="lp-text">
                                <h6><a href="#">로스트아크</a></h6>
                                <ul>
                                    <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                    <li><i class="fa fa-comment-o"></i> 12</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="lp-item">
                            <div class="lp-pic set-bg" data-setbg="img/latest-preview/fps2.jpg">
                                <div class="review-loader">
                                    <div class="loader-circle-wrap">
                                        <div class="loader-circle">
                                            <span class="circle-progress" data-cpid="id" data-cpvalue="75"
                                                data-cpcolor="#c20000"></span>
                                            <div class="review-point">7.5</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="lp-text">
                                <h6><a href="#">서든어택</a></h6>
                                <ul>
                                    <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                    <li><i class="fa fa-comment-o"></i> 12</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="lp-item">
                            <div class="lp-pic set-bg" data-setbg="img/latest-preview/maple2.jpg">
                                <div class="review-loader">
                                    <div class="loader-circle-wrap">
                                        <div class="loader-circle">
                                            <span class="circle-progress" data-cpid="id" data-cpvalue="75"
                                                data-cpcolor="#c20000"></span>
                                            <div class="review-point">7.5</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="lp-text">
                                <h6><a href="#">메이플스토리</a></h6>
                                <ul>
                                    <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                    <li><i class="fa fa-comment-o"></i> 12</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="lp-item">
                            <div class="lp-pic set-bg" data-setbg="img/latest-preview/over2.jpg">
                                <div class="review-loader">
                                    <div class="loader-circle-wrap">
                                        <div class="loader-circle">
                                            <span class="circle-progress" data-cpid="id" data-cpvalue="75"
                                                data-cpcolor="#c20000"></span>
                                            <div class="review-point">7.5</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="lp-text">
                                <h6><a href="#">오버워치</a></h6>
                                <ul>
                                    <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                    <li><i class="fa fa-comment-o"></i> 12</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Preview Section End -->

    <!-- Update News Section Begin -->
    <section class="update-news-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="section-title">
                        <h5><span>신작</span></h5>
                    </div>
                    <div class="tab-elem">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">All</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">pc</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab">mobile</a>
                            </li>
                           
                        </ul><!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="tabs-1" role="tabpanel">
                                <div class="row">
                                    <div class="un-slider owl-carousel">
                                        <div class="col-lg-12">
                                            <div class="un-big-item set-bg" data-setbg="img/news/storm.jpg">
                                                <div class="ub-text">
                                                    <div class="label"><span>pc</span></div>
                                                    <h5><a href="#">가디언스톰</a></h5>
                                                    <ul>
                                                        <li>by <span>Admin</span></li>
                                                        <li><i class="fa fa-clock-o"></i> 10, 2023</li>
                                                        <li><i class="fa fa-comment-o"></i> 20</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="un-item">
                                                        <div class="un_pic set-bg" data-setbg="img/news/war.jpg">
                                                            <div class="label"><span>pc</span></div>
                                                        </div>
                                                        <div class="un_text">
                                                            <h6><a href="#">워헤이븐</a></h6>
                                                            <ul>
                                                                <li><i class="fa fa-clock-o"></i> 09, 2023</li>
                                                                <li><i class="fa fa-comment-o"></i> 20</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="un-item">
                                                        <div class="un_pic set-bg" data-setbg="img/news/dae.jpg">
                                                            <div class="label"><span>pc</span></div>
                                                        </div>
                                                        <div class="un_text">
                                                            <h6><a href="#">대천명</a></h6>
                                                            <ul>
                                                                <li><i class="fa fa-clock-o"></i> 07, 2023</li>
                                                                <li><i class="fa fa-comment-o"></i> 20</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="un-item">
                                                        <div class="un_pic set-bg" data-setbg="img/news/gum.jpg">
                                                            <div class="label"><span>pc</span></div>
                                                        </div>
                                                        <div class="un_text">
                                                            <h6><a href="#">검풍</a></h6>
                                                            <ul>
                                                                <li><i class="fa fa-clock-o"></i> 06, 2023</li>
                                                                <li><i class="fa fa-comment-o"></i> 20</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="un-big-item set-bg" data-setbg="img/news/vel.jpg">
                                                <div class="ub-text">
                                                    <div class="label"><span>pc</span></div>
                                                    <h5><a href="#">베일드 엑스퍼트</a></h5>
                                                    <ul>
                                                        <li>by <span>Admin</span></li>
                                                        <li><i class="fa fa-clock-o"></i> 05, 2023</li>
                                                        <li><i class="fa fa-comment-o"></i> 20</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="un-item">
                                                        <div class="un_pic set-bg" data-setbg="img/news/mad.jpg">
                                                            <div class="label"><span>pc</span></div>
                                                        </div>
                                                        <div class="un_text">
                                                            <h6><a href="#">매드월드</a></h6>
                                                            <ul>
                                                                <li><i class="fa fa-clock-o"></i> 04, 2023</li>
                                                                <li><i class="fa fa-comment-o"></i> 20</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="un-item">
                                                        <div class="un_pic set-bg" data-setbg="img/news/ark.jpg">
                                                            <div class="label"><span>pc</span></div>
                                                        </div>
                                                        <div class="un_text">
                                                            <h6><a href="#">아크마스터</a></h6>
                                                            <ul>
                                                                <li><i class="fa fa-clock-o"></i> 04, 2023</li>
                                                                <li><i class="fa fa-comment-o"></i> 20</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="un-item">
                                                        <div class="un_pic set-bg" data-setbg="img/news/pra.jpg">
                                                            <div class="label"><span>pc</span></div>
                                                        </div>
                                                        <div class="un_text">
                                                            <h6><a href="#">프라시아 전기</a></h6>
                                                            <ul>
                                                                <li><i class="fa fa-clock-o"></i> 03, 2023</li>
                                                                <li><i class="fa fa-comment-o"></i> 20</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="tabs-2" role="tabpanel">
                                <div class="row">
                                    <div class="un-slider owl-carousel">
                                        <div class="col-lg-12">
                                            <div class="un-big-item set-bg" data-setbg="img/news/storm.jpg">
                                                <div class="ub-text">
                                                    <div class="label"><span>pc</span></div>
                                                    <h5><a href="#">가디언스톰</a></h5>
                                                    <ul>
                                                        <li>by <span>Admin</span></li>
                                                        <li><i class="fa fa-clock-o"></i> 10, 2023</li>
                                                        <li><i class="fa fa-comment-o"></i> 20</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="un-item">
                                                        <div class="un_pic set-bg" data-setbg="img/news/war.jpg">
                                                            <div class="label"><span>pc</span></div>
                                                        </div>
                                                        <div class="un_text">
                                                            <h6><a href="#">워헤이븐</a></h6>
                                                            <ul>
                                                                <li><i class="fa fa-clock-o"></i> 09, 2023</li>
                                                                <li><i class="fa fa-comment-o"></i> 20</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="un-item">
                                                        <div class="un_pic set-bg" data-setbg="img/news/dae.jpg">
                                                            <div class="label"><span>pc</span></div>
                                                        </div>
                                                        <div class="un_text">
                                                            <h6><a href="#">대천명</a></h6>
                                                            <ul>
                                                                <li><i class="fa fa-clock-o"></i> 07, 2023</li>
                                                                <li><i class="fa fa-comment-o"></i> 20</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="un-item">
                                                        <div class="un_pic set-bg" data-setbg="img/news/gum.jpg">
                                                            <div class="label"><span>pc</span></div>
                                                        </div>
                                                        <div class="un_text">
                                                            <h6><a href="#">검풍</a></h6>
                                                            <ul>
                                                                <li><i class="fa fa-clock-o"></i> 06, 2023</li>
                                                                <li><i class="fa fa-comment-o"></i> 20</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-12">
                                            <div class="un-big-item set-bg" data-setbg="img/news/vel.jpg">
                                                <div class="ub-text">
                                                    <div class="label"><span>pc</span></div>
                                                    <h5><a href="#">베일드 엑스퍼트</a></h5>
                                                    <ul>
                                                        <li>by <span>Admin</span></li>
                                                        <li><i class="fa fa-clock-o"></i> 05, 2023</li>
                                                        <li><i class="fa fa-comment-o"></i> 20</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="un-item">
                                                        <div class="un_pic set-bg" data-setbg="img/news/mad.jpg">
                                                            <div class="label"><span>pc</span></div>
                                                        </div>
                                                        <div class="un_text">
                                                            <h6><a href="#">매드월드</a></h6>
                                                            <ul>
                                                                <li><i class="fa fa-clock-o"></i> 04, 2023</li>
                                                                <li><i class="fa fa-comment-o"></i> 20</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="un-item">
                                                        <div class="un_pic set-bg" data-setbg="img/news/ark.jpg">
                                                            <div class="label"><span>pc</span></div>
                                                        </div>
                                                        <div class="un_text">
                                                            <h6><a href="#">아크마스터</a></h6>
                                                            <ul>
                                                                <li><i class="fa fa-clock-o"></i> 04, 2023</li>
                                                                <li><i class="fa fa-comment-o"></i> 20</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="un-item">
                                                        <div class="un_pic set-bg" data-setbg="img/news/pra.jpg">
                                                            <div class="label"><span>pc</span></div>
                                                        </div>
                                                        <div class="un_text">
                                                            <h6><a href="#">프라시아 전기</a></h6>
                                                            <ul>
                                                                <li><i class="fa fa-clock-o"></i> 03, 2023</li>
                                                                <li><i class="fa fa-comment-o"></i> 20</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="tab-pane fade" id="tabs-3" role="tabpanel">
                                <div class="row">
                                    <div class="un-slider owl-carousel">
                                        <div class="col-lg-12">
                                            <div class="un-big-item set-bg" data-setbg="img/news/seven.jpg">
                                                <div class="ub-text">
                                                    <div class="label"><span>mobile</span></div>
                                                    <h5><a href="#">세븐나이츠 키우기</a></h5>
                                                    <ul>
                                                        <li>by <span>Admin</span></li>
                                                        <li><i class="fa fa-clock-o"></i> 09, 2023</li>
                                                        <li><i class="fa fa-comment-o"></i> 20</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="un-item">
                                                        <div class="un_pic set-bg" data-setbg="img/news/asap.jpg">
                                                            <div class="label"><span>mobile</span></div>
                                                        </div>
                                                        <div class="un_text">
                                                            <h6><a href="#">ASAP 아레나</a></h6>
                                                            <ul>
                                                                <li><i class="fa fa-clock-o"></i> 09, 2023</li>
                                                                <li><i class="fa fa-comment-o"></i> 20</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="un-item">
                                                        <div class="un_pic set-bg" data-setbg="img/news/light.jpg">
                                                            <div class="label"><span>mobile</span></div>
                                                        </div>
                                                        <div class="un_text">
                                                            <h6><a href="#">빛의 계승자 : 이클립스</a></h6>
                                                            <ul>
                                                                <li><i class="fa fa-clock-o"></i> 09, 2023</li>
                                                                <li><i class="fa fa-comment-o"></i> 20</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="un-item">
                                                        <div class="un_pic set-bg" data-setbg="img/news/monster.jpg">
                                                            <div class="label"><span>mobile</span></div>
                                                        </div>
                                                        <div class="un_text">
                                                            <h6><a href="#">몬스터 헌터 나우</a></h6>
                                                            <ul>
                                                                <li><i class="fa fa-clock-o"></i> 09, 2023</li>
                                                                <li><i class="fa fa-comment-o"></i> 20</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="un-big-item set-bg" data-setbg="img/news/dragon.jpg">
                                                <div class="ub-text">
                                                    <div class="label"><span>mobile</span></div>
                                                    <h5><a href="#">드래곤에어 : 침묵의 신</a></h5>
                                                    <ul>
                                                        <li>by <span>Admin</span></li>
                                                        <li><i class="fa fa-clock-o"></i> 09, 2023</li>
                                                        <li><i class="fa fa-comment-o"></i> 20</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="un-item">
                                                        <div class="un_pic set-bg" data-setbg="img/news/dol.jpg">
                                                            <div class="label"><span>mobile</span></div>
                                                        </div>
                                                        <div class="un_text">
                                                            <h6><a href="#">라그나돌</a></h6>
                                                            <ul>
                                                                <li><i class="fa fa-clock-o"></i> 09, 2023</li>
                                                                <li><i class="fa fa-comment-o"></i> 20</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="un-item">
                                                        <div class="un_pic set-bg" data-setbg="img/news/news-4.jpg">
                                                            <div class="label"><span>mobile</span></div>
                                                        </div>
                                                        <div class="un_text">
                                                            <h6><a href="#">루나 : 달빛 연대기</a></h6>
                                                            <ul>
                                                                <li><i class="fa fa-clock-o"></i> 09, 2023</li>
                                                                <li><i class="fa fa-comment-o"></i> 20</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="un-item">
                                                        <div class="un_pic set-bg" data-setbg="img/news/call.jpg">
                                                            <div class="label"><span>mobile</span></div>
                                                        </div>
                                                        <div class="un_text">
                                                            <h6><a href="#">콜 오브 드래곤즈</a></h6>
                                                            <ul>
                                                                <li><i class="fa fa-clock-o"></i> 09, 2023</li>
                                                                <li><i class="fa fa-comment-o"></i> 20</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tabs-4" role="tabpanel">
                                <div class="row">
                                    <div class="un-slider owl-carousel">
                                        <div class="col-lg-12">
                                            <div class="un-big-item set-bg" data-setbg="img/news/news-1.jpg">
                                                <div class="ub-text">
                                                    <div class="label"><span>Reviews</span></div>
                                                    <h5><a href="#">Get one of our favorite nvme ssds, the 2tb samsung
                                                            970 evo, for $120 less than nomal</a></h5>
                                                    <ul>
                                                        <li>by <span>Admin</span></li>
                                                        <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                                        <li><i class="fa fa-comment-o"></i> 20</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="un-item">
                                                        <div class="un_pic set-bg" data-setbg="img/news/news-3.jpg">
                                                            <div class="label"><span>Reviews</span></div>
                                                        </div>
                                                        <div class="un_text">
                                                            <h6><a href="#">Downwell and space hulk: tactics are coming
                                                                    to...</a></h6>
                                                            <ul>
                                                                <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                                                <li><i class="fa fa-comment-o"></i> 20</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="un-item">
                                                        <div class="un_pic set-bg" data-setbg="img/news/news-4.jpg">
                                                            <div class="label"><span>Reviews</span></div>
                                                        </div>
                                                        <div class="un_text">
                                                            <h6><a href="#">Downwell and space hulk: tactics are coming
                                                                    to...</a></h6>
                                                            <ul>
                                                                <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                                                <li><i class="fa fa-comment-o"></i> 20</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="un-item">
                                                        <div class="un_pic set-bg" data-setbg="img/news/news-2.jpg">
                                                            <div class="label"><span>Reviews</span></div>
                                                        </div>
                                                        <div class="un_text">
                                                            <h6><a href="#">Downwell and space hulk: tactics are coming
                                                                    to...</a></h6>
                                                            <ul>
                                                                <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                                                <li><i class="fa fa-comment-o"></i> 20</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="un-big-item set-bg" data-setbg="img/news/news-1.jpg">
                                                <div class="ub-text">
                                                    <div class="label"><span>Reviews</span></div>
                                                    <h5><a href="#">Get one of our favorite nvme ssds, the 2tb samsung
                                                            970 evo, for $120 less than nomal</a></h5>
                                                    <ul>
                                                        <li>by <span>Admin</span></li>
                                                        <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                                        <li><i class="fa fa-comment-o"></i> 20</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="un-item">
                                                        <div class="un_pic set-bg" data-setbg="img/news/news-3.jpg">
                                                            <div class="label"><span>Reviews</span></div>
                                                        </div>
                                                        <div class="un_text">
                                                            <h6><a href="#">Downwell and space hulk: tactics are coming
                                                                    to...</a></h6>
                                                            <ul>
                                                                <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                                                <li><i class="fa fa-comment-o"></i> 20</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="un-item">
                                                        <div class="un_pic set-bg" data-setbg="img/news/news-4.jpg">
                                                            <div class="label"><span>Reviews</span></div>
                                                        </div>
                                                        <div class="un_text">
                                                            <h6><a href="#">Downwell and space hulk: tactics are coming
                                                                    to...</a></h6>
                                                            <ul>
                                                                <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                                                <li><i class="fa fa-comment-o"></i> 20</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="un-item">
                                                        <div class="un_pic set-bg" data-setbg="img/news/news-2.jpg">
                                                            <div class="label"><span>Reviews</span></div>
                                                        </div>
                                                        <div class="un_text">
                                                            <h6><a href="#">Downwell and space hulk: tactics are coming
                                                                    to...</a></h6>
                                                            <ul>
                                                                <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                                                <li><i class="fa fa-comment-o"></i> 20</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar-option">
                        <div class="social-media">
                            <div class="section-title">
                                <h5>Social media</h5>
                            </div>
                            <ul>
                                <li>
                                    <div class="sm-icon"><i class="fa fa-facebook"></i></div>
                                    <span>Facebook</span>
                                    <div class="follow">1,2k Follow</div>
                                </li>
                                <li>
                                    <div class="sm-icon"><i class="fa fa-twitter"></i></div>
                                    <span>Twitter</span>
                                    <div class="follow">1,2k Follow</div>
                                </li>
                                <li>
                                    <div class="sm-icon"><i class="fa fa-youtube-play"></i></div>
                                    <span>Youtube</span>
                                    <div class="follow">2,3k Subs</div>
                                </li>
                                <li>
                                    <div class="sm-icon"><i class="fa fa-instagram"></i></div>
                                    <span>Instagram</span>
                                    <div class="follow">2,6k Follow</div>
                                </li>
                            </ul>
                        </div>
                        <div class="hardware-guides">
                            <div class="section-title">
                                <h5>인기신작</h5>
                            </div>
                            <div class="trending-item">
                                <div class="ti-pic">
                                    <img src="img/trending/storm.jpg" alt="">
                                </div>
                                <div class="ti-text">
                                    <h6><a href="#">가디언스톰</a>
                                    </h6>
                                    <ul>
                                        <li><i class="fa fa-clock-o"></i> 10, 2023</li>
                                        <li><i class="fa fa-comment-o"></i> 12</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="trending-item">
                                <div class="ti-pic">
                                    <img src="img/trending/seven.jpg" alt="">
                                </div>
                                <div class="ti-text">
                                    <h6><a href="#">세븐나이츠 키우기</a></h6>
                                    <ul>
                                        <li><i class="fa fa-clock-o"></i> 09, 2023</li>
                                        <li><i class="fa fa-comment-o"></i> 12</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="trending-item">
                                <div class="ti-pic">
                                    <img src="img/trending/war.jpg" alt="">
                                </div>
                                <div class="ti-text">
                                    <h6><a href="#">워헤이븐</a>
                                    </h6>
                                    <ul>
                                        <li><i class="fa fa-clock-o"></i> 09, 2023</li>
                                        <li><i class="fa fa-comment-o"></i> 12</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="trending-item">
                                <div class="ti-pic">
                                    <img src="img/trending/asap.jpg" alt="">
                                </div>
                                <div class="ti-text">
                                    <h6><a href="#">ASAP 아레나</a></h6>
                                    <ul>
                                        <li><i class="fa fa-clock-o"></i> 09, 2023</li>
                                        <li><i class="fa fa-comment-o"></i> 12</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Update News Section End -->

    <!-- Videos Guide Section Begin -->
    <section class="video-guide-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h5>게임소개영상</h5>
                    </div>
                </div>
            </div>
            <div class="tab-elem">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#tabs-5" role="tab">All</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#tabs-6" role="tab">pc</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#tabs-7" role="tab">mobile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#tabs-8" role="tab">Reviews</a>
                    </li>
                </ul><!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="tabs-5" role="tabpanel">
                        <div class="row">
                            <div class="vg-slider owl-carousel">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="vg-item large-vg set-bg" data-setbg="img/videos/lol.jpg">
                                                <a href="https://www.youtube.com/watch?v=rfx3gzyi-sg"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h5>리그 오브 레전드</h5>
                                                    <ul>
                                                        <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                                        <li><i class="fa fa-comment-o"></i> 12</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="vg-item large-vg set-bg" data-setbg="img/videos/valo.jpg">
                                                <a href="https://www.youtube.com/watch?v=cRYIkEA9a8A"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h5>발로란트</h5>
                                                    <ul>
                                                        <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                                        <li><i class="fa fa-comment-o"></i> 12</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="vg-item set-bg" data-setbg="img/videos/fifa.jpg">
                                                <a href="https://www.youtube.com/watch?v=ChvrJGJ3FYA"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h6>FC 온라인</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="vg-item set-bg" data-setbg="img/videos/lost.jpg">
                                                <a href="https://www.youtube.com/watch?v=YDyiYrIGF00"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h6>로스트아크</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="vg-item set-bg" data-setbg="img/videos/fps.jpg">
                                                <a href="https://www.youtube.com/watch?v=PYvNkNrPK50"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h6>서든어택</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="vg-item large-vg set-bg" data-setbg="img/videos/maple.jpg">
                                                <a href="https://www.youtube.com/watch?v=HeYXigNN6Dg"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h5>메이플스토리</h5>
                                                    <ul>
                                                        <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                                        <li><i class="fa fa-comment-o"></i> 12</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="vg-item large-vg set-bg" data-setbg="img/videos/over.jpg">
                                                <a href="https://www.youtube.com/watch?v=s5EEqUL6s1E"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h5>오버워치 2</h5>
                                                    <ul>
                                                        <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                                        <li><i class="fa fa-comment-o"></i> 12</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="vg-item set-bg" data-setbg="img/videos/dia.jpg">
                                                <a href="https://www.youtube.com/watch?v=B4lXRlGMrL0"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h6>디아블로 4</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="vg-item set-bg" data-setbg="img/videos/fight.jpg">
                                                <a href="https://www.youtube.com/watch?v=aqTEriJgPGI"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h6>던전앤파이터</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="vg-item set-bg" data-setbg="img/videos/battle.jpg">
                                                <a href="https://www.youtube.com/watch?v=hx1yOJdD0vg"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h6>배틀그라운드</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tabs-6" role="tabpanel">
                        <div class="row">
                            <div class="vg-slider owl-carousel">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="vg-item large-vg set-bg" data-setbg="img/videos/lol.jpg">
                                                <a href="https://www.youtube.com/watch?v=tEnsqpThaFg&list=PLCtjwJ0mILrq94UnL5_KpUlQupdqRLkAL"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h5>리그 오브 레전드</h5>
                                                    <ul>
                                                        <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                                        <li><i class="fa fa-comment-o"></i> 12</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="vg-item large-vg set-bg" data-setbg="img/videos/valo.jpg">
                                                <a href="https://www.youtube.com/watch?v=cRYIkEA9a8A"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h5>발로란트</h5>
                                                    <ul>
                                                        <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                                        <li><i class="fa fa-comment-o"></i> 12</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="vg-item set-bg" data-setbg="img/videos/fifa.jpg">
                                                <a href="https://www.youtube.com/watch?v=ChvrJGJ3FYA"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h6>FC 온라인</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="vg-item set-bg" data-setbg="img/videos/lost.jpg">
                                                <a href="https://www.youtube.com/watch?v=YDyiYrIGF00"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h6>로스트아크</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="vg-item set-bg" data-setbg="img/videos/fps.jpg">
                                                <a href="https://www.youtube.com/watch?v=PYvNkNrPK50"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h6>서든어택</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="vg-item large-vg set-bg" data-setbg="img/videos/maple.jpg">
                                                <a href="https://www.youtube.com/watch?v=HeYXigNN6Dg"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h5>메이플스토리</h5>
                                                    <ul>
                                                        <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                                        <li><i class="fa fa-comment-o"></i> 12</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="vg-item large-vg set-bg" data-setbg="img/videos/over.jpg">
                                                <a href="https://www.youtube.com/watch?v=s5EEqUL6s1E"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h5>오버워치 2</h5>
                                                    <ul>
                                                        <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                                        <li><i class="fa fa-comment-o"></i> 12</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="vg-item set-bg" data-setbg="img/videos/dia.jpg">
                                                <a href="https://www.youtube.com/watch?v=B4lXRlGMrL0"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h6>디아블로 4</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="vg-item set-bg" data-setbg="img/videos/fight.jpg">
                                                <a href="https://www.youtube.com/watch?v=aqTEriJgPGI"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h6>던전앤파이터</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="vg-item set-bg" data-setbg="img/videos/battle.jpg">
                                                <a href="https://www.youtube.com/watch?v=hx1yOJdD0vg"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h6>배틀그라운드</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tabs-7" role="tabpanel">
                        <div class="row">
                            <div class="vg-slider owl-carousel">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="vg-item large-vg set-bg" data-setbg="img/videos/seven.jpg">
                                                <a href="https://www.youtube.com/watch?v=ALC_v2S4IBs"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h5>세븐나이츠 키우기</h5>
                                                    <ul>
                                                        <li><i class="fa fa-clock-o"></i> 09, 2023</li>
                                                        <li><i class="fa fa-comment-o"></i> 12</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="vg-item large-vg set-bg" data-setbg="img/videos/dragon.jpg">
                                                <a href="https://www.youtube.com/watch?v=fxX80PY-Fog&feature=youtu.be"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h5>드래곤에어 : 침묵의 신</h5>
                                                    <ul>
                                                        <li><i class="fa fa-clock-o"></i> 09, 2023</li>
                                                        <li><i class="fa fa-comment-o"></i> 12</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="vg-item set-bg" data-setbg="img/videos/asap.jpg">
                                                <a href="https://www.youtube.com/watch?v=Q95ZvP0hKWw"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h6>ASAP 아레나</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="vg-item set-bg" data-setbg="img/videos/light.jpg">
                                                <a href="https://www.youtube.com/watch?v=5hLi3IanvxQ"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h6>빛의 계승자 : 이크립스</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="vg-item set-bg" data-setbg="img/videos/dol.jpg">
                                                <a href="https://www.youtube.com/watch?v=8lLH2iW6NUo"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h6>라그나돌</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="vg-item large-vg set-bg" data-setbg="img/videos/pa.jpg">
                                                <a href="https://www.youtube.com/watch?v=ffeZyXkxsFw"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h5>우파루 오딧세이</h5>
                                                    <ul>
                                                        <li><i class="fa fa-clock-o"></i> 09, 2023</li>
                                                        <li><i class="fa fa-comment-o"></i> 12</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="vg-item large-vg set-bg" data-setbg="img/videos/gang.jpg">
                                                <a href="https://www.youtube.com/watch?v=VPfJYhsV5Wg"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h5>농땡이 강호</h5>
                                                    <ul>
                                                        <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                                        <li><i class="fa fa-comment-o"></i> 12</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="vg-item set-bg" data-setbg="img/videos/monster.jpg">
                                                <a href="https://www.youtube.com/watch?v=JtGiIYxp_zU"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h6>몬스터 헌터 나우</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="vg-item set-bg" data-setbg="img/videos/lona.jpg">
                                                <a href="https://www.youtube.com/watch?v=XqPAzQlzoTQ"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h6>루나 : 달빛 연대기</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="vg-item set-bg" data-setbg="img/videos/call.jpg">
                                                <a href="https://www.youtube.com/watch?v=gNQSaT5Skwg"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h6>콜 오브 드래곤즈</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tabs-8" role="tabpanel">
                        <div class="row">
                            <div class="vg-slider owl-carousel">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="vg-item large-vg set-bg" data-setbg="img/videos/videos-1.jpg">
                                                <a href="https://www.youtube.com/watch?v=EzKkl64rRbM"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h5>THROUGH THE AGES' FIRST EXPANSION WILL BE RELEASING ON DIGITAL
                                                        PLATFORMS...</h5>
                                                    <ul>
                                                        <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                                        <li><i class="fa fa-comment-o"></i> 12</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="vg-item large-vg set-bg" data-setbg="img/videos/videos-2.jpg">
                                                <a href="https://www.youtube.com/watch?v=EzKkl64rRbM"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h5>THROUGH THE AGES' FIRST EXPANSION WILL BE RELEASING ON DIGITAL
                                                        PLATFORMS...</h5>
                                                    <ul>
                                                        <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                                        <li><i class="fa fa-comment-o"></i> 12</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="vg-item set-bg" data-setbg="img/videos/videos-3.jpg">
                                                <a href="https://www.youtube.com/watch?v=EzKkl64rRbM"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h6>THis gam,ing laptop with Gtx 1660 ti and of ram is</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="vg-item set-bg" data-setbg="img/videos/videos-4.jpg">
                                                <a href="https://www.youtube.com/watch?v=EzKkl64rRbM"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h6>THis gam,ing laptop with Gtx 1660 ti and of ram is</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="vg-item set-bg" data-setbg="img/videos/videos-5.jpg">
                                                <a href="https://www.youtube.com/watch?v=EzKkl64rRbM"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h6>THis gam,ing laptop with Gtx 1660 ti and of ram is</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="vg-item large-vg set-bg" data-setbg="img/videos/videos-1.jpg">
                                                <a href="https://www.youtube.com/watch?v=EzKkl64rRbM"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h5>THROUGH THE AGES' FIRST EXPANSION WILL BE RELEASING ON DIGITAL
                                                        PLATFORMS...</h5>
                                                    <ul>
                                                        <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                                        <li><i class="fa fa-comment-o"></i> 12</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="vg-item large-vg set-bg" data-setbg="img/videos/videos-2.jpg">
                                                <a href="https://www.youtube.com/watch?v=EzKkl64rRbM"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h5>THROUGH THE AGES' FIRST EXPANSION WILL BE RELEASING ON DIGITAL
                                                        PLATFORMS...</h5>
                                                    <ul>
                                                        <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                                        <li><i class="fa fa-comment-o"></i> 12</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="vg-item set-bg" data-setbg="img/videos/videos-3.jpg">
                                                <a href="https://www.youtube.com/watch?v=EzKkl64rRbM"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h6>THis gam,ing laptop with Gtx 1660 ti and of ram is</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="vg-item set-bg" data-setbg="img/videos/videos-4.jpg">
                                                <a href="https://www.youtube.com/watch?v=EzKkl64rRbM"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h6>THis gam,ing laptop with Gtx 1660 ti and of ram is</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="vg-item set-bg" data-setbg="img/videos/videos-5.jpg">
                                                <a href="https://www.youtube.com/watch?v=EzKkl64rRbM"
                                                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                                <div class="vg-text">
                                                    <h6>THis gam,ing laptop with Gtx 1660 ti and of ram is</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Videos Guide Section End -->
   
    <!-- Instagram Post Section Begin -->
    <section class="instagram-post-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="section-title">
                        <h5>추억의 게임</h5>
                    </div>
                <div class="col-md-8">
                    <div class="ip-item">
                        <div class="vg-item set-bg" data-setbg="img/videos/buble.jpg"> 
                            <a href="https://www.youtube.com/watch?v=O49OgQ_kogw" class="play-btn video-popup"><i class="fa fa-play"></i></a>
                        </div>
                        <div class="ip-text">
                            <div class="label"><span>아케이드</span></div>
                            <h5><a href="#">BUBBLE BOBBLE</a></h5>
                            <ul>
                                <li><span>개발사: TAITO</span></li>
                                <li><i class="fa fa-clock-o"></i>출시일: 1986년 8월</li>
                            </ul>
                            <p>타이토에서 제작하여 1986년 8월에 출시한 게임. 
                            한국에서도 상당히 유명한 오락실용 게임으로, 
                            한국에서는 '보글보글'이라는 이름으로 더 유명하다. <br>
                            한국에서 추억의 게임하면 가장 먼저 떠올리는 게임이기도 하다.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="ip-item">
                        <div class="vg-item set-bg" data-setbg="img/videos/METAL.png"> 
                            <a href="https://www.youtube.com/watch?v=FVFMQjuLXd4" class="play-btn video-popup"><i class="fa fa-play"></i></a>
                        </div>
                        <div class="ip-text">
                            <div class="label"><span>런앤건</span></div>
                            <h5><a href="#">METAL SLUG</a></h5>
                            <ul>
                                <li><span>개발사: 나스카,  SNK</span></li>
                                <li><i class="fa fa-clock-o"></i>출시일: 1996년 4월 19일</li>
                            </ul>
                            <p>정식 명칭은 넘버링 없이 그냥 '메탈슬러그'이지만, 
                                게임에 등장하는 전차 및 시리즈 전반을 이르는 명칭과 구분하기 위해 보통 메탈슬러그 1, 메탈1 같은 방식으로 표기한다.
                                네오지오의 사양을 한계까지 끌어올려서 매우 부드러운 도트 그래픽을 선보였고 아케이드에 나왔을 당시 많은 사람들에게 충격을 주었다.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="ip-item">
                        <div class="vg-item set-bg" data-setbg="img/videos/poko.jpg"> 
                            <a href="https://www.youtube.com/watch?v=v9CCdLr-jec" class="play-btn video-popup"><i class="fa fa-play"></i></a>
                        </div>
                        <div class="ip-text">
                            <div class="label"><span>아케이드</span></div>
                            <h5><a href="#">PONPOKO</a></h5>
                            <ul>
                                <li><span>개발사: 세이부 전자</span></li>
                                <li><i class="fa fa-clock-o"></i>출시일: 1982년 11월</li>
                            </ul>
                            <p> 한국에서는 유례없을 정도로 대히트를 기록했는데, 
                                버블보블과 함께 대중적으로 큰 인기를 얻은 1980~1990년대 오락실과 문방구 등지의 히트작이기도 하다. 
                                이로 인해 한국 한정으로는 고전게임의 대명사 중 하나로 꼽힐 정도의 인기를 자랑한다.  
                                국내 기업인 이오리스에서 리메이크 작인 '라쿤 월드'라는 아케이드 작품을 발매하기까지 했다.</p>
                        </div>
                    </div>
                </div>
                   
                </div>
                <div class="col-lg-4 col-md-7">
                    <div class="sidebar-option">
                        <div class="insta-media">
                            <div class="section-title">
                            <h5>best game</h5>
                    </div>
                        <div class="insta-pic">
                            <img src="img/instagram/lol.jpg" alt="">
                            <img src="img/instagram/valo.jpg" alt="">
                            <img src="img/instagram/lost.jpg" alt="">
                            <img src="img/instagram/fifa.jpg" alt="">
                        </div>
                    </div>
                        <div class="best-of-post">
                            <div class="section-title">
                                 <h5>게임 점유율(%)</h5>
                            </div>
                            <div class="bp-item">
                                <div class="bp-loader">
                                    <div class="loader-circle-wrap">
                                        <div class="loader-circle">
                                            <span class="circle-progress-1" data-cpid="id-1" data-cpvalue="44"
                                                data-cpcolor="#c20000"></span>
                                            <div class="review-point">44</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bp-text">
                                    <h6><a href="review_lol.php">League of Legends</a></h6>
                                    <ul>
                                        <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                        <li><i class="fa fa-comment-o"></i> 20</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="bp-item">
                                <div class="bp-loader">
                                    <div class="loader-circle-wrap">
                                        <div class="loader-circle">
                                            <span class="circle-progress-1" data-cpid="id-2" data-cpvalue="15"
                                                data-cpcolor="#c20000"></span>
                                            <div class="review-point">9.2</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bp-text">
                                    <h6><a href="review_fc.php">FC온라인</a></h6>
                                    <ul>
                                        <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                        <li><i class="fa fa-comment-o"></i> 20</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="bp-item">
                                <div class="bp-loader">
                                    <div class="loader-circle-wrap">
                                        <div class="loader-circle">
                                            <span class="circle-progress-1" data-cpid="id-3" data-cpvalue="10"
                                                data-cpcolor="#c20000"></span>
                                            <div class="review-point">6.2</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bp-text">
                                    <h6><a href="./review_sudden.php">서든어택</a></h6>
                                    <ul>
                                        <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                        <li><i class="fa fa-comment-o"></i> 20</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="bp-item">
                                <div class="bp-loader">
                                    <div class="loader-circle-wrap">
                                        <div class="loader-circle">
                                            <span class="circle-progress-1" data-cpid="id-4" data-cpvalue="10"
                                                data-cpcolor="#c20000"></span>
                                            <div class="review-point">5.9</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bp-text">
                                    <h6><a href="review_lost.php">로스트아크</a></h6>
                                    <ul>
                                        <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                        <li><i class="fa fa-comment-o"></i> 20</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="hardware-guides">
                            <div class="section-title">
                                <h5>한국게임 Top4</h5>
                            </div>
                            <div class="trending-item">
                                <div class="ti-pic">
                                    <img src="img/trending/4.jpg" alt="">
                                </div>
                                <div class="ti-text">                                    
                                    <h6><a href="review_lol.php">1위</a>
                                    </h6>
                                    <h6><a href="review_lol.php">리그 오브 레전드</a>
                                    </h6>
                                    <ul>
                                    </ul>
                                </div>
                            </div>
                            <div class="trending-item">
                                <div class="ti-pic">
                                    <img src="img/trending/6.jpg" alt="">
                                </div>
                                <div class="ti-text">                                   
                                    <h6><a href="review_fc.php">2위</a>
                                    <h6><a href="review_fc.php">FC온라인</a></h6>
                                    </h6>
                                    <ul>
                                        
                                    </ul>
                                </div>
                            </div>
                            <div class="trending-item">
                                <div class="ti-pic">
                                    <img src="img/trending/8.jpg" alt="">
                                </div>
                                <div class="ti-text">                                   
                                    <h6><a href="review_sudden.php">3위</a>
                                    <h6><a href="review_sudden.php">서든어택</a></h6>
                                    </h6>
                                    <ul>
                                        
                                    </ul>
                                </div>
                            </div>
                            <div class="trending-item">
                                <div class="ti-pic">
                                    <img src="img/trending/7.jpg" alt="">
                                </div>
                                <div class="ti-text">                                   
                                    <h6><a href="review_lost.php">4위</a>
                                    <h6><a href="review_lost.php">로스트아크</a></h6>
                                    </h6>
                                    <ul>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                
            </div>
        </div>
        
    </section>
    <!-- Instagram Post Section End -->

   <!-- footer Section start -->
 	<?php include_once "./fragments/footer.php"; ?>
    <!-- Footer Section End -->

    <!-- Sign Up Section Begin -->
    <div class="signup-section">
        <div class="signup-close"><i class="fa fa-close"></i></div>
        <div class="signup-text">
            <div class="container">
                <div class="signup-title">
                    <h2>Sign up</h2>
                    <p>Fill out the form below to recieve a free and confidential</p>
                </div>
                <form action="join_ok.php" method="post" class="signup-form">
                    <div class="sf-input-list">
                        <input type="text" class="input-value" name="id" id="id" placeholder="User ID*">
                        <div class="form-group">
							<span id="id_check_msg" data-check="0"></span>	<!--커스텀 속성:data-check="0"  -->
						</div>      
                        <input type="password" class="input-value" name="pass"  id="pass" placeholder="Password">
                        <input type="password" class="input-value" name="pass_confirm"  id="pass_confirm" placeholder="Password Check">
                        <div class="form-group">
							<span id="pass_check_msg" data-check="0"></span>	<!--커스텀 속성:data-check="0"  -->
						</div>    
                        <input type="text" class="input-value" name="name" id="name"placeholder="Name">
                        <input type="text" class="input-value" name="email"  id="email" placeholder="Email">
                        <input type="text" class="input-value" name="phone" id="phone" placeholder="Phone">                        
                    </div>
                    <div class="form-group" style="text-align: center">
                        <div class="btn-group" data-toggle="buttons">
                            <label class="btn btn-primary active">
                                <input type="radio" name="gender" id="gender1" autocomplete="off" value="남자" checked>남자
                            </label>
                            <label class="btn btn-primary">
                                <input type="radio" name="gender" id="gender2" autocomplete="off" value="여자">여자
                            </label>
                        </div>
                    </div>
                    <div class="radio-check">
                        <label for="rc-agree">I agree with the term & conditions
                            <input type="checkbox" id="rc-agree">
                            <span class="checkbox"></span>
                        </label>
                    </div>
                    <button type="submit" onclick="check_input()"><span>REGISTER NOW</span></button>
                </form>
            </div>
        </div>
    </div>
    <!-- Sign Up Section End -->

    <!-- Search model Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/circle-progress.min.js"></script>
    <script src="js/jquery.barfiller.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    <script>
    /* 아이디 중복 체크(비동기통신) */
			$(function(){/*문서가 로드되면 function을 실행하라  */
				$("#id").blur(function(){/*아이디가 id인것을 찾아 포커즈를 빠져나갈때 발생하는 이벤트  */
					if($(this).val()==""){
						$("#id_check_msg").html("아이디를 입력하세요.").css("color","red").attr("data-check","0");/*선택자를 .연사자추가해서 계속 사용가능  */
						$(this).focus();
					}else{
						checkIdAjax();				
					}
				});
			});

			$(function(){/*문서가 로드되면 function을 실행하라  */
				$("#pass_confirm").blur(function(){/*아이디가 id인것을 찾아 포커즈를 빠져나갈때 발생하는 이벤트  */
					if( $(this).val()!=$("#pass").val() ) {
						$("#pass_check_msg").html("비밀번호가 일치하지 않습니다.").css("color","red");
					}else if( ($("#this").val()=="") || ($("#pass").val()=="") ){
						$("#pass_check_msg").html("비밀번호를 입력하세요.").css("color","red");
					}else{
						$("#pass_check_msg").html("비밀번호가 일치합니다.").css("color","blue");
					}
				});
			});

			/* 아이디 중복 체크(비동기통신) */
			function checkIdAjax(){//id값을 post로 전송해서 서버와 통신하여 중복 결과 json 형태로 받아오는 함수
				$.ajax({				//비동기통신방법, 객체로 보낼때{}사용
					url : "./ajax/check_id.php",
					type : "post",
					dataType : "json",
					data : {
						"id" : $("#id").val()
					},
					success : function(data){
						if(data.check){			//json사용했기때문에 data.으로 접근가능
							$("#id_check_msg").html("사용 가능한 아이디입니다.").css("color", "blue").attr("data-check","1");
						}else{
							$("#id_check_msg").html("중복된 아이디입니다.").css("color", "red").attr("data-check","0");
							$("#id").focus();
						}
					}
				});
			}

			function check_input()
			   {
				 if (!$("#id").val()) {
			          alert("아이디를 입력하세요!");    
			          $("#id").focus();
			          return;
			      }
	
				 if (!$("#pass").val()) {
			          alert("비밀번호를 입력하세요!");    
			          $("#pass").val().focus();
			          return;
			      }
	
				 if (!$("#pass_confirm").val()) {
			          alert("비밀번호확인을 입력하세요!");    
			          $("#pass_confirm").focus();
			          return;
			      }
			      
				 if (!$("#name").val()) {
			          alert("이름을 입력하세요!");    
			          $("#name").focus();
			          return;
			      }
	
			      if (!$("#phone").val()) {
			          alert("전화번호를 입력하세요!");    
			          $("#phone").focus();
			          return;
			      }
	
			      if (!$("#email").val()) {
			          alert("이메일 주소를 입력하세요!");    
			          $("#email").focus();
			          return;
			      }
	
			      if ( $("#pass").val() != 
			            $("#pass_confirm").val()) {
			          alert("비밀번호가 일치하지 않습니다.\n다시 입력해 주세요!");
			          $("#pass").focus();
			          $("#pass").select();
			          return;
			      }
	
			      document.join.submit();
			   }
	
			   function reset_form() {
			      document.join.id.value = "";  
			      document.join.pass.value = "";
			      document.join.pass_confirm.value = "";
			      document.join.name.value = "";
			      document.join.gender.value = "";
			      document.join.phone.value = "";
			      document.join.email.value = "";
			      document.join.id.focus();
			      return;
			   }
		</script>
</body>

</html>