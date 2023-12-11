<?php 
	include_once "./config.php";
	include_once "./db/db_con.php";
	
	// 현재 페이지 번호를 확인
	if (isset($_GET["page"]))
		$page = $_GET["page"]; //1,2,3,4,5
	else
		$page = 1;
?>
<!DOCTYPE html>
<html>
	<head>
		<?php include_once "./fragments/head2.php";?>
	
	</head>
	<body>
		<!-- 표준 네비게이션 바 (화면 상단에 위치, 화면에 의존하여 확대 및 축소) -->
		
			<?php include_once "./fragments/header2.php";?>
		
		<!-- 비밀 글 모달창 양식 구현-->
		<div class="modal fade" id="modal_div">
			<div class="modal-dialog">
				<div class="modal-content">
					<!-- header -->
					<div class="modal-header">
						<!-- 닫기(x) 버튼 -->
						<button type="button" class="close" data-dismiss="modal">×</button>
						<!-- header title -->
						<h4 class="modal-title"><b>비밀글 입니다.</b></h4>
					</div>
					<!-- body -->
					<div class="modal-body">
						<form method="post" id="modal_form" data-action="./ck_read.php?idx=">
							<p>비밀번호  <input type="password" name="pw_chk" /> <input type="submit" class="btn btn-primary" value="확인" /></p>
						</form>
					</div>
			  	</div>
		  	</div>
		</div>
		<!-- 비밀 글 모달창 구현 끝-->
		<div class="container">
			<div id="board_area"> 
			  <h1><b></b></h1><br>
			  <h4></h4><br>
			  <table class="table table-striped" style="text-align: center; border: 1px solid #ddddda">
			  	<tr>
					<th style="background-color: #eeeeee; text-align: center;">번호</th>
					<th style="background-color: #eeeeee; text-align: center;">제목</th>
					<th style="background-color: #eeeeee; text-align: center;">작성자</th>
					<th style="background-color: #eeeeee; text-align: center;">작성일</th>
					<th style="background-color: #eeeeee; text-align: center;">조회수</th>
			    </tr>
			    
			    <!-- 페이징 구현 -->
			    <?php 
			    	$sql = mq("select
			    					*
			    			   from 
			    					board
			    			");
			    	$total_record = mysqli_num_rows($sql); // 게시판 총 레코드 수z
			  		
			    	$list = 10; // 한 페이지에 보여줄 개수
			  		$block_cnt = 5; // 블록당 보여줄 페이지 개수
			  		$block_num = ceil($page / $block_cnt); // 현재 페이지 블록 구하기
			  		$block_start = (($block_num - 1) * $block_cnt) + 1; // 블록의 시작 번호  ex) 1,6,11 ...
			    	$block_end = $block_start + $block_cnt - 1; // 블록의 마지막 번호 ex) 5,10,15 ...
			    	
			    	
			    	$total_page = ceil($total_record / $list); // 페이징한 페이지 수
			    	if($block_end > $total_page){ // 블록의 마지막 번호가 페이지 수 보다 많다면
			    		$block_end = $total_page; // 마지막 번호는 페이지 수
			    	}
			    	$total_block = ceil($total_page / $block_cnt); // 블럭 총 개수
			    	$page_start = ($page - 1) * $list; // 페이지 시작
			    	
			    	/* 게시글 정보 가져오기  limit : (시작번호, 보여질 수) */
			    	$sql2 = mq("select 
			    					* 
			    				from 
			    					board 
			    				order by 
			    					idx desc limit $page_start, $list
			    			");
			    	while($board = $sql2->fetch_array()){
			    		$title=$board["title"];
			    		/* 글자수가 30이 넘으면 ... 처리해주기 */
			    		if(strlen($title)>30){
			    			$title=str_replace($board["title"],mb_substr($board["title"],0,30,"utf-8")."...",$board["title"]);
			    		}
			    
			    		/* 댓글 수 구하기 */
			    		$sql3 = mq("select
			    						*
			    				    from
			    						reply
			    					where
			    						con_num='".$board['idx']."'
			    				");
			    		$rep_count = mysqli_num_rows($sql3); // 레코드의 수(댓글의 수)
			    					  
			    ?>
			    
			      <!-- 글 목록 가져오기 -->
			      <tbody>
			      	<tr>
			          <td width="70"><?=$board['idx']; ?></td>
			          <td width="500">
			          <!-- 비밀 글 가져오기 -->	 
			          <?php 
			          	$lockimg="<img src='./img/lock.png' alt='lock' title='lock' width='18' height='18'>";
			          	if($board['lock_post']=="1"){ // lock_post 값이 1이면 잠금
			          ?>
			          		<span class="lock_check" style="cursor:pointer" data-action="./read.php?idx="
			          		data-check=<?=$role ?> data-idx="<?=$board['idx']?>" ><?=$title?> <?=$lockimg?></span>
			          <!-- 일반 글 가져오기 -->
			          <?php 
			          	}else{	// 아니면 공개 글
			          ?>
			          		<span class="read_check" style="cursor:pointer" data-action="./read.php?idx=<?=$board['idx']?>" ><?=$title?></span> 
			          		<span style="color:blue;">[<?=$rep_count?>]</span></td>
			          <?php 		
			          	}
			          ?>
			          <td width="120"><?=$board['name'];?></td>
			          <td width="100"><?=$board['date'];?></td>
			          <td width="100"><?=$board['hit']; ?></td>
			        </tr>
			      </tbody>
			      <?php } ?>
			    </table>
			    <div id="page_num" style="text-align: center;">
			    	<?php
				    	if ($page <= 1){
				    		// 빈 값
				    	} else {
				    		echo "<a href='list.php?page=1'>처음</a>";
				    	}
				    	
				    	if ($page <= 1){
				    		// 빈 값
				    	} else {
				    		$pre = $page - 1;
				    		echo "<a href='list.php?page=$pre'>◀ 이전 </a>";
				    		
				    	}
				    	
				    	for($i = $block_start; $i <= $block_end; $i++){
				    		if($page == $i){
				    			echo "<b> $i </b>";
				    		} else {
				    			echo "<a href='list.php?page=$i'> $i </a>";
				    		}
				    	}
				    	
				    	if($page >= $total_page){
				    		// 빈 값
				    	} else {
				    		$next = $page + 1;
				    		echo "<a href='list.php?page=$next'> 다음 ▶</a>";
				    	}
					   	
				    	if($page >= $total_page){
				    		// 빈 값
				    	} else {
				    		echo "<a href='list.php?page=$total_page'>마지막</a>";
				    	}
					?>
				</div>	
			    <div id="write_btn">
			      <a href="write.php"><button class="btn btn-primary pull-right" style="background-color:black" >글쓰기</button></a>
			    </div>
			  <div id="search_box" style="text-align: center; padding-top: 50px;">
			  	<form action="search_result.php" method="get">
			  		<select name="category">
			  			<option value="title">제목</option>
			  			<option value="name">글쓴이</option>
			  			<option value="content">내용</option>
			  		</select>
			  		<input type="text" name="search" size="40" required="required">
			  			<button class="btn btn-primary"style="background-color:black">검색</button>
			  	</form>
			  </div>
		  </div>
		</div>
		
   
    <script src="/js/jquery.magnific-popup.min.js"></script>
    <script src="/js/circle-progress.min.js"></script>
    <script src="/js/jquery.barfiller.js"></script>
    <script src="/js/jquery.slicknav.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
		<script src="./js/login.js"></script>
		
		<script>
		//<!-- 비밀글 클릭시 모달창을 띄우는 이벤트 -->
		$(function(){
		    $(".lock_check").click(function(){
			    <!-- 관리자 계정일 경우 바로 해당 글로 이동 -->
			    if($(this).attr("data-check")=="ADMIN") {
			    	var action_url = $(this).attr("data-action")+$(this).attr("data-idx");
					$(location).attr("href",action_url);
			    }
				$("#modal_div").modal();
				<!-- 주소에 data-idx(idx)값을 더하기 -->
				var action_url = $("#modal_form").attr("data-action")+$(this).attr("data-idx");
				$("#modal_form").attr("action",action_url);
			});
		});
	
		//<!-- 일반 글 클릭시 해당 idx의 read 페이지로 이동하는 이벤트 -->
		$(function(){
		    $(".read_check").click(function(){
			    var action_url = $(this).attr("data-action");
			    console.log(action_url);
			    $(location).attr("href",action_url);
			});
		});
        
		</script>
		<!-- Page Preloder -->
	<div id="preloder">
    	<div class="loader"></div>
    </div>

	<!-- Humberger Menu Begin -->
    <div class="humberger-menu-overlay"></div>
    <div class="humberger-menu-wrapper">
        <div class="hw-logo">
            <a href="#"><img src="img/f-logo.png" alt=""></a>
        </div>
        <div class="hw-menu mobile-menu">
            <ul>
                <li><a href="./index.php">홈</a></li>
                <li><a href="./categories-list.php">각종게임 <i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown">
                        <li><a href="./categories-list.php">게임모음</a></li>
                    </ul>
                </li>
                <li><a href="./pjbbs/list.php">게시판 <i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown">
                        
                      
                    </ul>
                </li>
                <li><a href="#">미니게임<i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown">
                        <li><a href="#">Playstation</a></li>
                        <li><a href="#">Windows</a></li>
                        <li><a href="#">Mobile</a></li>
                        <li><a href="#">Xbox</a></li>
                    </ul>
                </li>
                <li><a href="#">Videos <i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown">
                        <li><a href="#">Playstation</a></li>
                        <li><a href="#">Windows</a></li>
                        <li><a href="#">Mobile</a></li>
                        <li><a href="#">Xbox</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="hw-copyright">
            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
        </div>
        <div class="hw-social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-youtube-play"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
        </div>
        <div class="hw-insta-media">
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
    </div>
    <!-- Humberger Menu End -->

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
                        <input type="text" class="input-value" name="pass"  id="pass" placeholder="Password">
                        <input type="text" class="input-value" name="pass_confirm"  id="pass_confirm" placeholder="Password Check">
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

        <!-- footer Section start -->
 	<footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="footer-about">
                        <div class="fa-logo">
                            <a href="#"><img src="/img/f-logo.png" alt=""></a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua lacus vel facilisis.</p>
                        <div class="fa-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="editor-choice">
                        <div class="section-title">
                            <h5>Editor's Choice</h5>
                        </div>
                        <div class="ec-item">
                            <div class="ec-pic">
                                <img src="/img/trending/editor-1.jpg" alt="">
                            </div>
                            <div class="ec-text">
                                <h6><a href="#">A Monster Prom poster got hijacked for a Papa Roach concert...</a>
                                </h6>
                                <ul>
                                    <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                    <li><i class="fa fa-comment-o"></i> 12</li>
                                </ul>
                            </div>
                        </div>
                        <div class="ec-item">
                            <div class="ec-pic">
                                <img src="/img/trending/editor-2.jpg" alt="">
                            </div>
                            <div class="ec-text">
                                <h6><a href="#">Facebook wants to read your thoughts with its augmented...</a>
                                </h6>
                                <ul>
                                    <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                    <li><i class="fa fa-comment-o"></i> 12</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="tags-cloud">
                        <div class="section-title">
                            <h5>Tags Cloud</h5>
                        </div>
                        <div class="tag-list">
                            <a href="#"><span>Gaming</span></a>
                            <a href="#"><span>Platform</span></a>
                            <a href="#"><span>Playstation</span></a>
                            <a href="#"><span>Hardware</span></a>
                            <a href="#"><span>Reviews</span></a>
                            <a href="#"><span>Simulation</span></a>
                            <a href="#"><span>Strategy</span></a>
                            <a href="#"><span>Scientific</span></a>
                            <a href="#"><span>References</span></a>
                            <a href="#"><span>Role-playing</span></a>
                            <a href="#"><span>Adventurea</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-area">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="ca-text"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="ca-links">
                            <a href="#">About</a>
                            <a href="#">Subscribe</a>
                            <a href="#">Contact</a>
                            <a href="#">Support</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

	<script src="/js/main.js"></script>
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