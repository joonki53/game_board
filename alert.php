<!-- 로그인 체크 -->
<?php 
	if(!$userid && !$username) {
		echo("
			<script>
			alert('로그인 후 이용해 주세요! ');
			location.href='/login2.php'; // login.php
			</script>
			");
	}
?>