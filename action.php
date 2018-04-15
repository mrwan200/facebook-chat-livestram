<?php
require '/sys/connect.php';
	if($_POST) {
		if($_POST['action'] == "fb") {
			$error_count = 0;
			if($_POST['token'] == ""){
				$error_count += 1;
			}
			if($_POST['post'] == ""){
				$error_count += 1;
			}
			if($error_count > 0){
				echo "<script>alert('กรุณากรอกข้อมูลครบด้วยครับ');window.location='index.php';</script>";
				exit();
			}
			$sql = "UPDATE code SET 
				token = '".$_POST["token"]."' ,
				post = '".$_POST["post"]."' ";
			
			$query = mysqli_query($conn,$sql);
			
				if($query) {
					echo "<script>alert('บันทึกข้อมูลสำเร็จ');window.location='index.php';</script>"; 
				}
			mysqli_close($conn);
		}else{
			header("Location: index.php");
		}
	}else{
		header("Location: index.php");
	}
?>