<?php
	include "./config.php";
	include "./db/db_con.php";
	include "./login_check.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<?php include_once "./fragments/head2.php";?>
	
	</head>
	<body>
		<!-- 표준 네비게이션 바 (화면 상단에 위치, 화면에 의존하여 확대 및 축소) -->
		
			<?php include_once "./fragments/header2.php";?>
		
		<div class="container">
			<div id="board_write">
                <form action="write_ok.php" method="post">
					<table class="table table-striped" style="text-align: center; border: 1px solid #ddddda">
						<thead>
							<tr>
								<th colspan="2" style="background-color: #eeeeee; text-align: center;"><h3>게시판 글쓰기</h3></th>
							</tr>
						</thead>	
						<tbody>
							<tr>
								<td><span class="pull-left">&nbsp;&nbsp;&nbsp;아이디 : <b><?=$userid?></b></span></td>
							</tr>
							<tr>
								<td><input type="text" class="form-control" placeholder="글 제목" name="title" id="title" required></td>
							</tr>
							<tr>
								<td><input type="password" class="form-control" placeholder="글 비밀번호" name="pw" id="pw" style="width: 150px;"></td>
							</tr>
							<tr>	
								<td><textarea class="form-control" placeholder="글 내용" name="content" id="content" style="height: 350px" required></textarea></td>
							</tr>
						</tbody>
					</table>
					<input type="checkbox" value="1" name="lockpost">비밀글<br><br> 
					<button type="submit" class="btn btn-primary">글쓰기</button>
				</form>
			</div>
		</div> 
		<script src="./js/login.js"></script>	      
	</body>
</html>