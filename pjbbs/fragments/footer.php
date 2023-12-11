<!-- Footer Section End -->
<footer class="footer-section">
        <div class="container">
           
            <div class="copyright-area">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="ca-text"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <div class="ca-text">Games &copy; 2023 game review board</div>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="ca-links">
                        <a href="#"><?php $DateAndTime = date('D Y년 m월 d일', time()); echo $DateAndTime;?></a>
                            <a href="index.php">home</a>
                            <a href="/pjbbs/list.php">게시판</a>
                            <a href="categories-list.php">각종게임</a>
                            <?php
                            if(!$userid){
                            ?>
                             <a href="login2.php">login</a>
                             <?php
                                 }
                             ?>
                              <?php
                            if($userid){
                            ?>
                             <a href="logout.php">logout</a>
                             <?php
                                 }
                             ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>