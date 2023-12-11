<?php
    $id   = $_POST['id'];
    $pass = $_POST['pass']; 
    
 $con = mysqli_connect("localhost", "root", "qwer", "bbs");
   $sql = "SELECT * FROM user WHERE id = '$id'";

   $result = mysqli_query($con, $sql);

   $num_match = mysqli_num_rows($result);

   if(!$num_match) {
     echo("
           <script>
             window.alert('등록되지 않은 아이디입니다!')
             location.href = 'login2.php';
           </script>
         ");
    } else {
        $row = mysqli_fetch_array($result);
        $db_pass = $row['pass'];

        mysqli_close($con);
		/* 로그인 화면에서 전송된 $pass와 DB의 $db_pass의 해쉬값 비교 */
        if(!password_verify($pass, $db_pass)){
        	echo("
	              <script>
	                window.alert('비밀번호가 틀립니다!')
	                location.href = 'login2.php';
	              </script>
	           ");
	           exit;
        }else {
            session_start();
            $_SESSION["userid"] = $row["id"];
            $_SESSION["userpw"] = $pass;
            $_SESSION["username"] = $row["name"];
            $_SESSION["role"] = $row["role"];
            $_SESSION["phone"] = $row["phone"]; // 추가 코드        
            $_SESSION["email"] = $row["email"];
            $_SESSION["gender"] = $row["gender"];
            echo("
              <script>
              window.alert('로그인 완료')
                location.href = 'index.php';
              </script>
            ");
        }
     }        
?>
