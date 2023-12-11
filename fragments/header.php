<!-- Header Section Begin -->
<?php 
	    if(!$userid){
	?>    
    <header class="header-section">
        <div class="ht-options">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-8">
                        <div class="ht-widget">
                            <ul>
                                <li><i class="fa fa-sun-o"></i> <span>-1<sup>c</sup></span> KOREA</li>
                                <li><i class="fa fa-clock-o"></i><?php $DateAndTime = date('D Y년 m월 d일', time()); echo $DateAndTime;?></li>
                                <li><a class="fa fa-sign-out" href="login2.php" style="color:aliceblue">Login</a> 
                                <li class="signup-switch signup-open"><i class="fa fa-sign-out"></i> Sign up
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-4">
                        <div class="ht-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-envelope-o"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="logo">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                       <a href="./index.php"><img src="img/logo_G.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav-options">
            <div class="container">
                <div class="humberger-menu humberger-open">
                    <i class="fa fa-bars"></i>
                </div>
                <div class="nav-search search-switch">
                    <i class="fa fa-search"></i>
                </div>
                <div class="nav-menu">
                    <ul>
                        <li class="active"><a href="./index.php"><span>홈</span></a></li>
                        <li class="mega-menu"><a href="#"><span>인기게임 <i class="fa fa-angle-down"></i></span></a>
                            <div class="megamenu-wrapper">
                                <ul class="mw-nav">
                                    <li><a href="#"><span>인기게임</span></a></li>
                              
                                </ul>
                                <div class="mw-post">
                                    <div class="mw-post-item">
                                        <div class="mw-pic">
                                            <img src="img/megamenu/lol.jpg" alt="">
                                        </div>
                                        <div class="mw-text">
                                            <h6><a href="/review_lol.php">리그 오브 레전드</a></h6>
                                            <ul>
                                                <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                                <li><i class="fa fa-comment-o"></i> 12</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="mw-post-item">
                                        <div class="mw-pic">
                                            <img src="img/megamenu/valo.jpg" alt="">
                                        </div>
                                        <div class="mw-text">
                                            <h6><a href="/review_valo.php">발로란트</a>
                                            </h6>
                                            <ul>
                                                <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                                <li><i class="fa fa-comment-o"></i> 12</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="mw-post-item">
                                        <div class="mw-pic">
                                            <img src="img/megamenu/lost.jpg" alt="">
                                        </div>
                                        <div class="mw-text">
                                            <h6><a href="review_lost.php">로스트아크</a>
                                            </h6>
                                            <ul>
                                                <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                                <li><i class="fa fa-comment-o"></i> 12</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="mw-post-item">
                                        <div class="mw-pic">
                                            <img src="img/megamenu/fifa.jpg" alt="">
                                        </div>
                                        <div class="mw-text">
                                            <h6><a href="review_fc.php">FC 온라인</a></h6>
                                            <ul>
                                                <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                                <li><i class="fa fa-comment-o"></i> 12</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="mw-post-item">
                                        <div class="mw-pic">
                                            <img src="img/megamenu/fps.jpg" alt="">
                                        </div>
                                        <div class="mw-text">
                                            <h6><a href="review_sudden.php">서든어택</a>
                                            </h6>
                                            <ul>
                                                <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                                <li><i class="fa fa-comment-o"></i> 12</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#"><span>각종게임 <i class="fa fa-angle-down"></i></span></a>
                            <ul class="dropdown">
                                <li><a href="./categories-list.php">게임모음</a></li>
                       
                            </ul>
                        </li>
                        <li><a href="./pjbbs/list.php"><span>게시판 <i class="fa fa-angle-down"></i></span></a></li>
                        <li><a href="#"><span>미니게임<i class="fa fa-angle-down"></i></span></a>
                        <ul class="dropdown">
                                <li><a href="./9_domoku.html">오목</a></li>
                                <li><a href="./jstetris-master/tetris.html">테트리스</a></li>
                            </ul>
                        </li>
                       
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <?php
       }else if($userid){
        $logged = $username."(".$userid.")";
    ?>
    <header class="header-section">
        <div class="ht-options">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-8">
                        <div class="ht-widget">
                            <ul>
                                <li><i class="fa fa-sun-o"></i> <span>-1<sup>c</sup></span>Korea</li>
                                <li><i class="fa fa-clock-o"></i><?php $DateAndTime = date('D Y년 m월 d일', time()); echo $DateAndTime;?></li>
                                <li><a class="fa fa-sign-out" href="logout.php" style="color:aliceblue">Logout</a> 
                                <li class="signup-switch signup-open"><i class="fa fa-sign-out"></i> Sign up
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-4">
                        <div class="ht-social">
                        <li><a href="member_info.php"  role="button" 
						        aria-haspopup="true" aria-expanded="false"><b><?=$logged ?></b>님의 마이페이지<span class="caret"></span></a>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-envelope-o"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="logo">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                       <a href="./index.php"><img src="img/logo_G.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav-options">
            <div class="container">
                <div class="humberger-menu humberger-open">
                    <i class="fa fa-bars"></i>
                </div>
                <div class="nav-search search-switch">
                    <i class="fa fa-search"></i>
                </div>
                <div class="nav-menu">
                    <ul>
                        <li class="active"><a href="./index.php"><span>홈</span></a></li>
                        <li class="mega-menu"><a href="#"><span>인기게임 <i class="fa fa-angle-down"></i></span></a>
                            <div class="megamenu-wrapper">
                                <ul class="mw-nav">
                                    <li><a href="#"><span>인기게임</span></a></li>
                              
                                </ul>
                                <div class="mw-post">
                                    <div class="mw-post-item">
                                        <div class="mw-pic">
                                            <img src="img/megamenu/lol.jpg" alt="">
                                        </div>
                                        <div class="mw-text">
                                            <h6><a href="/review_lol.php">리그 오브 레전드</a></h6>
                                            <ul>
                                                <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                                <li><i class="fa fa-comment-o"></i> 12</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="mw-post-item">
                                        <div class="mw-pic">
                                            <img src="img/megamenu/valo.jpg" alt="">
                                        </div>
                                        <div class="mw-text">
                                            <h6><a href="/review_valo.php">발로란트</a>
                                            </h6>
                                            <ul>
                                                <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                                <li><i class="fa fa-comment-o"></i> 12</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="mw-post-item">
                                        <div class="mw-pic">
                                            <img src="img/megamenu/lost.jpg" alt="">
                                        </div>
                                        <div class="mw-text">
                                            <h6><a href="review_lost.php">로스트아크</a>
                                            </h6>
                                            <ul>
                                                <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                                <li><i class="fa fa-comment-o"></i> 12</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="mw-post-item">
                                        <div class="mw-pic">
                                            <img src="img/megamenu/fifa.jpg" alt="">
                                        </div>
                                        <div class="mw-text">
                                            <h6><a href="review_fc.php">FC 온라인</a></h6>
                                            <ul>
                                                <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                                <li><i class="fa fa-comment-o"></i> 12</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="mw-post-item">
                                        <div class="mw-pic">
                                            <img src="img/megamenu/fps.jpg" alt="">
                                        </div>
                                        <div class="mw-text">
                                            <h6><a href="review_sudden.php">서든어택</a>
                                            </h6>
                                            <ul>
                                                <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                                <li><i class="fa fa-comment-o"></i> 12</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#"><span>각종게임 <i class="fa fa-angle-down"></i></span></a>
                            <ul class="dropdown">
                                <li><a href="./categories-list.php">게임모음</a></li>
                       
                            </ul>
                        </li>
                        <li><a href="./pjbbs/list.php"><span>게시판 <i class="fa fa-angle-down"></i></span></a></li>
                        <li><a href="#"><span>미니게임<i class="fa fa-angle-down"></i></span></a>
                        <ul class="dropdown">
                                <li><a href="./9_domoku.html">오목</a></li>
                                <li><a href="./jstetris-master/tetris.html">테트리스</a></li>
                            </ul>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <?php
       }
    ?>
    <!-- Header End -->