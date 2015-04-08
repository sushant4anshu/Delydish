<?php
session_start();
	if(isset($_GET["chk"])){
		include 'config.php';
                if(isset($_SESSION['email'])){
			$email = $_SESSION['email'];
			$result = $mysqli->query("SELECT * FROM members WHERE email = '$email';");
			if($pwd = mysqli_fetch_object($result)){
				echo "fetch successfull";
				$mobile = $pwd->mobile;
				$address = $pwd->address;
				$name = $pwd->name;
			} else {
				$mobile = "";
				$email = "";
				$name = "";
				$address = "";
			}
		} else {
			$mobile = "";
			$email = "";
			$name = "";
			$address = "";
		}
		$uid = $_GET["uid"];
		$item1 = $_GET["i1"];
		$item2 = $_GET["i2"];
        $item3 = $_GET["i3"];
		$times = $_GET['time'];
		$qty1 = $_GET['qty1'];
		$qty2 = $_GET['qty2'];
                $qty3 = $_GET['qty3'];
		$prodname1 = $_GET['prodname1'];
		$prodname2 = $_GET['prodname2'];
        $prodname3 = $_GET['prodname3'];
		$sql = $mysqli->query("SELECT price from menus");
		$price = array();
		$i = 0;
		$total = 0;

		while($row = $sql->fetch_assoc()){
			if($i==0)  $qty = $item1;
			if($i==1)  $qty = $item2;
			if($i==2)  $qty = $item3;
			if($i==3)  $qty = 0;
			$total = $total + $row["price"]*$qty;
			$i = $i + 1;
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
    <script src="jquery1.js"></script>
    <script src="js/bootstrap.min.js"></script>
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
    <script type="text/javascript">
            function validateEmail()
            {
 
           var emailID = document.checkout.email.value;
           atpos = emailID.indexOf("@");
           dotpos = emailID.lastIndexOf(".");
            if (atpos < 1 || ( dotpos - atpos < 2 )) 
            {
            alert("Please enter correct email ID")
            document.checkout.email.focus() ;
            return false;
            }
            return( true );
            }
            
            function validateMob()
            {
 
               var mob = document.checkout.mobile.value;
               if (mob.length != 10) 
               {
                alert("Please enter correct Mobile no or Only 10 digit no")
                document.checkout.mobile.focus() ;
                return false;
                }
                return( true );
            }
            
            function validate()
            {
            if( document.checkout.mobile.value == "" )
            {
                alert( "Please provide your mobile!" );
                document.checkout.mobile.focus() ;
                return false;
            }else {
                var r = validateMob();
                if (r == false) return false;
            }
            if( document.checkout.email.value == "" )
            {
                alert( "Please provide your email!" );
                document.checkout.email.focus() ;
                return false;
            }else{
                var ret = validateEmail();
                if( ret == false )
                {
                return false;
                }
            }
            if( document.checkout.name.value == "" )
            {
                alert( "Please provide your name!" );
                document.checkout.name.focus() ;
                return false;
            }
            if( document.checkout.address.value == "" )
            {
                alert( "Please provide your address!" );
                document.checkout.address.focus() ;
                return false;
            }
           }
    </script>
	<!--<script language="JavaScript">
  window.onbeforeunload = confirmExit;
  function confirmExit()
  {
    return "You have attempted to leave this page.  If you have made any changes to the fields without clicking the Save button, your changes will be lost.  Are you sure you want to exit this page?";
  }
</script>-->
</head>

<body>
<div class="container" style="padding: 15px;">
    <div class="jumbotron">
        <img src="img/Delydish_logo.jpg" alt="" class="pull-right img-responsive img-circle">
        <h1> The most convenient Meal Ever. </h1>
        <p> A daily changing menu of delicious meals delivered at your door lightning fast in 30 minutes.</p>
    </div>
</div>
    <center><div style="margin-bottom: 10px;font-size: 25px;color: green ">  Your Total Order of : Rs <?php echo $total; ?> </div></center>
    <center><div style="margin-bottom: 10px;font-size: 25px;color: red ">  Payment Method Cash on Delivery Only!!</div></center>
        <div>
            <center><h4 style="margin-bottom: 10px;font-size: 25px;color: blue ">Contact Information:</h4></center>
            <div class="container">
                <form name="checkout" class="form-horizontal" role="form" method="post" action="thanks.php" onsubmit="return(validate());">
                <div class="form-group">
                    <label for="mobile" class="col-sm-2 control-label">Mobile No :</label>
                    <div class="col-sm-10" class="inner-addon left-addon">
                        <input type="text" class="form-control" id="mobile" name= "mobile"
                            placeholder="Enter Your Mobile Number" value="<?php echo $mobile; ?>">
                    </div>
                </div>
            <div class="form-group">
                <label for="email" class="col-sm-2 control-label">Email :</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="email" name="email"
                placeholder="Enter Your Email" value="<?php echo $email; ?>">
                    </div>
            </div>
            <div class="form-group">
                <label for="name" class="col-sm-2 control-label">Name :</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" name="name"
                placeholder="Enter Your Name" value="<?php echo $name; ?>">
                    </div>
            </div>
               <div class="form-group">
                <label for="address" class="col-sm-2 control-label">Delivery Address :</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="address" name="address"
                placeholder="Enter Your Address" value="<?php echo $address; ?>">
                    </div>
            </div>
                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                        <input type="hidden" id ='user_id' name='user_id' value="<?php echo $uid; ?>">
                        <input type="hidden" id ='i1' name='i1' value="<?php echo $item1; ?>">
                        <input type="hidden" id ='i2' name='i2' value="<?php echo $item2; ?>">
						<input type="hidden" id ='i3' name='i3' value="<?php echo $item3; ?>">
						<input type="hidden" id ='qty1' name='qty1' value="<?php echo $qty1; ?>">
                        <input type="hidden" id ='qty2' name='qty2' value="<?php echo $qty2; ?>">
						<input type="hidden" id ='qty3' name='qty3' value="<?php echo $qty3; ?>">
                        <input type="hidden" name='prodname1' id ="prodname1" value="<?php echo $prodname1; ?>">
						<input type="hidden" name='prodname2' id ="prodname2" value="<?php echo $prodname2; ?>">
                        <input type="hidden" name='prodname3' id ="prodname3" value="<?php echo $prodname3; ?>">
						<input type="hidden" id ='total' name='total' value="<?php echo $total; ?>">
			<input type="hidden" id = 'timeslot' name = 'timeslot' value = "<?php echo $times; ?>">
                        <input id="checkbox" name="checkbox" type="checkbox" style="color:green;">  Save my information for future checkouts <br>
                        <center><input id="submit" name="submit" type="submit" value="Place Order" class="btn btn-primary"><center>
                    </div>
                </div>
            </form>
                </div>
        </div>
</div>


<!-- javascript -->
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>