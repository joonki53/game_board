<?php
session_start();
if(!isset($_SESSION['userid'])){
    echo "<script>alert('세션없음')</script>";
    exit;
   }
$severname = "localhost";
$username = "root";
$password = "qwer";
$dbname = "bbs";

$conn = new mysqli($severname, $username, $password, $dbname);
// $conn = mysqli_connect("localhost", "root", "qwer", "bbs");
    
   if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
   }
   
    $user_id = $_SESSION["userid"];
    $pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);
    $uname = $_POST['newname'];
    $phone = $_POST['newphone'];
    $email = $_POST['newemail'];
    




	/* 받아온 idx값을 선택해서 게시글 수정 */

    $sql = "update user set pass ='$pass', name ='$uname', phone ='$phone', email ='$email' where id = '$user_id'";
   
    if($conn->query($sql)){
		echo "<script>alert('수정이 완료되었습니다. 다시 로그인 해주세요.')</script>";
		echo "<script>location.href='logout2.php';</script>";
	}else{
        echo "<script>alert('수정 오류')</script>";	   
			echo "<script>location.href='member_mod.php';</script>";
	}

?>