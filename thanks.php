<?php
    session_start();
    include 'config.php';
    if ($_POST["submit"]) {
        $mobile = $_POST['mobile'];
        $user_id = $_POST['user_id'];
        $email = $_POST['email'];
        $name = $_POST['name'];
        $address = $_POST['address'];
	$timeslot = $_POST['timeslot'];
        $totalprice = $_POST['total'];
	$item1 = $_POST['i1'];
	$item2 = $_POST['i2'];
        $item3 = $_POST['i3'];
	$qty1 = $_POST['qty1'];
        $qty2 = $_POST['qty2'];
        $qty3 = $_POST['qty3'];
        $prodname1 = $_POST['prodname1'];
	$prodname2 = $_POST['prodname2'];
        $prodname3 = $_POST['prodname3'];
	$sql = "INSERT into userinfo(user_id,mobile,email,name,address,item1,item2,item3,total,success,preorder,timeslot, addedon) VALUES ('$user_id','$mobile','$email','$name','$address',$item1,$item2,$item3,$totalprice,1,1,'$timeslot',NOW());";
	$mysqli->query($sql);
	$qsql = $mysqli->query("SELECT qty FROM menus;");
	$objQty = array();
	while($row = $qsql->fetch_assoc()){
		$objQty[] = $row["qty"];
	}
		$mysqli->query("UPDATE menus SET qty=$objQty[0]-$item1 where id=1");
        $mysqli->query("UPDATE menus SET qty=$objQty[1]-$item2 where id=2");
        $mysqli->query("UPDATE menus SET qty=$objQty[2]-$item3 where id=3");

        /*$message = "Hello,".$name.", Your order has been received at DelyDish. Your Order is ".$item1." Quantity of ".$prodname1.", ".$item2." Quantity of ".$prodname2." and ".$item3." Quantity of ".$prodname3.". Your total cost is Rs ".$totalprice.". Your order will be delivered within 30mins. Thank you!!  DelyDish";*/

        $message = "Hello,".$name.", Your order has been received at DelyDish. Your total cost is Rs ".$totalprice.". Your order will be delivered within 30mins. Thank you!!  DelyDish";
	
	$ch = curl_init();

	curl_setopt($ch, CURLOPT_URL, "http://www.mosto.in/app/api/sms.php");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, "userName=9716590534&userPass=Abhianand@09&mobileNumber=$mobile&messageBody=".urlencode($message)."&senderId=DLYDSH");
	$buffer = curl_exec($ch);
		if ($timeslot == "None"){
			$mess="New order has been Received from ".$name." for ".$item1." Quantity of ".$prodname1.", and ".$item2." Quantity of ".$prodname2." mobile no is ".$mobile." and delivery address is ".$address." ";
			curl_setopt($ch, CURLOPT_POSTFIELDS, "userName=9716590534&userPass=Abhianand@09&mobileNumber=9716590534&messageBody=".urlencode($mess)."&senderId=DLYDSH");
			$buffer = curl_exec($ch);
			$message = wordwrap($message, 70);
			mail('abhishek.anand228@gmail.com', 'New Order', $mess);
		} else {
			$mess="A new Preorder has been Received from ".$name." for ".$item1." Quantity of ".$prodname1.", and ".$item2." Quantity of ".$prodname2." for the timeslot of ".$timeslot." mobile no is ".$mobile." and delivery address is ".$address." ";
			curl_setopt($ch, CURLOPT_POSTFIELDS, "userName=9716590534&userPass=Abhianand@09&mobileNumber=9716590534&messageBody=".urlencode($mess)."&senderId=DLYDSH");
			$buffer = curl_exec($ch);
			$message = wordwrap($message, 70);
			mail('abhishek.anand228@gmail.com', 'New Preorder', $mess);
		}
	curl_close($ch);
    if(isset($_POST['checkbox'])){
			$sql = "INSERT into members(userid,mobile,email,name,address) VALUES ('$user_id','$mobile','$email','$name','$address');";
			$mysqli->query($sql);
			$_SESSION['email'] = $email;
    }
    } else {
		header('Location:http://delydish.com/');
	}
 ?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>DelyDish | Eat Homely and Heartly meals </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/respond.js"></script>
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-60089016-1', 'auto');
  ga('send', 'pageview');

</script>
<noscript>
  Sorry...JavaScript is needed to go ahead.
</noscript>
</head>

<body>
<div class="container">
    <div class="jumbotron">
        <img src="img/Delydish_logo.jpg" alt="" class="pull-right img-responsive img-circle">
        <h1 style="color:#2E8A5C;"> The most convenient meal ever </h1>
        <p>Impress your taste buds with hot & fresh, homely meals prepared by our chefs. A daily changing menu of delicious meals delivered at your door lightning fast in 30 minutes. </br> <b>No minimum order required.</b></p>
    </div>
</div>
<div class="container">
        <h2 align="center"> Thanks, <b style="color:#FF9933"><?php echo $name ?></b>, for Ordering!! Your Order will be delivered Within 30 minutes. </h2>
 </div>


<!-- javascript -->
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>