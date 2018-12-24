<?php
	
	$name = pickup('name_textbox', 250, true);
	$email = pickup('email_textbox', 250, true);
	$mobile = pickup('mobile_textbox', 10, true);
	$college = pickup('college_textbox', 250, true);
	$tshirt = pickup('tshirt_textbox',250,true);

	$name2 = pickup('name2_textbox', 250, true);
	$email2 = pickup('email2_textbox', 250, true);
	$mobile2 = pickup('mobile2_textbox', 10, true);
	$college2 = pickup('college2_textbox', 250, true);
	$tshirt2 = pickup('tshirt2_textbox',250,true);

	$name3 = pickup('name3_textbox', 250, true);
	$email3 = pickup('email3_textbox', 250, true);
	$mobile3 = pickup('mobile3_textbox', 10, true);
	$college3 = pickup('college3_textbox', 250, true);
	$tshirt3 = pickup('tshirt3_textbox',250,true);

	$name4 = pickup('name4_textbox', 250, true);
	$email4 = pickup('email4_textbox', 250, true);
	$mobile4 = pickup('mobile4_textbox', 10, true);
	$college4 = pickup('college4_textbox', 250, true);
	$tshirt4 = pickup('tshirt4_textbox',250,true);

	$name5 = pickup('name5_textbox', 250, true);
	$email5 = pickup('email5_textbox', 250, true);
	$mobile5 = pickup('mobile5_textbox', 10, true);
	$college5 = pickup('college5_textbox', 250, true);
	$tshirt5 = pickup('tshirt5_textbox',250,true);

	$name6 = pickup('name6_textbox', 250, true);
	$email6 = pickup('email6_textbox', 250, true);
	$mobile6 = pickup('mobile6_textbox', 10, true);
	$college6 = pickup('college6_textbox', 250, true);
	$tshirt6 = pickup('tshirt6_textbox',250,true);

	$project = pickup('project_textbox', 250, true);	
	$project_desc = pickup('desc_textbox', -1, true);	
	

	include_once('conn.php');

	$date = date('Y-m-d');//2015-03-14

	mysqli_query($con, "INSERT INTO re(name, email, mobile, college,tshirt, name2, email2, mobile2, college2,tshirt2, name3, email3, mobile3, college3,tshirt3, name4, email4, mobile4, college4,tshirt4, name5, email5, mobile5, college5,tshirt5, name6, email6, mobile6, college6,tshirt6, project_name, project_desc, date_tab)
		VALUES('$name','$email','$mobile','$college', '$tshirt','$name2','$email2','$mobile2','$college2', '$tshirt2', '$name3','$email3','$mobile3','$college3', '$tshirt3', '$name4','$email4','$mobile4','$college4', '$tshirt4', '$name5','$email5','$mobile5','$college5', '$tshirt5', '$name6','$email6','$mobile6','$college6', '$tshirt6', '$project', '$project_desc', '$date')") or die("Unable to register.");

	echo '<script>window.location.replace("thanks.php");</script>';

	die("Thanks for applying");

	function pickup($box, $max, $blank){
		
		if(isset($_POST[$box])){
		$data = $_POST[$box];
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		if($blank === true){
			if($data == ""){
				die("All feild are required.");

			}
		}
		return $data;
	}


?>