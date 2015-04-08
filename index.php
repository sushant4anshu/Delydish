<?php
    include 'action.php';
?>
<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name=description content="DelyDish-The most convenient meal ever!! Impress your taste buds with hot & fresh, homely meals prepared by our chefs. A daily changing menu of delicious meals delivered at your door lightning fast in 30 minutes.">
    <title> DelyDish | Eat Homely and Hearty meals  </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom1.css" rel="stylesheet">
    <link href="css/social-sharing.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/respond.js"></script>
    <link rel="shortcut icon" href="img/favicon.ico" />
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-60089016-1', 'auto');
  ga('send', 'pageview');

</script>
<script type="text/javascript">
window.onload = function fade() {
	("#myModal").modal();
    };
</script>

<noscript>
  Sorry...JavaScript is needed to go ahead.;
</noscript>
</head>

<body onload="fade()">
<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-W9HB3G"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-W9HB3G');</script>
<!-- End Google Tag Manager -->
<div>
    <nav class="navbar navbar-default">
        <div class="container" >
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" style="color:#FF9933;font-size:30px;"><b>DelyDish</b></a>
            </div>
            <div class="collapse navbar-collapse" id="collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li style="color: black"><a href="#howitworks" data-toggle = "modal" style="color:#2E8A5C;"><b>How it works</b></a></li>                   
                    <li><a href="#soontolaunch" data-toggle = "modal" style="color:#2E8A5C;"><b>Delivery Locations</b></a></li>
                    <li><a href="#feedback" data-toggle = "modal" style="color:#2E8A5C;"><b>FeedBack</b></a></li>
                </ul> 
            </div>
        </div> 
	</nav> 
</div>
<center><span id="marquee" style="display: block;color:#FF6600;font-weight: bolder;font-size: 25px"> </span></center>
<div class="container">
    <div class="jumbotron">
        <img src="img/Delydish_logo.jpg" alt="" class="pull-right img-responsive img-circle">
        <h1 style="color:#2E8A5C; "> The most convenient meal ever </h1>
        <p>Impress your taste buds with hot & fresh, homely meals prepared by our chefs. A daily changing menu of delicious meals delivered at your door lightning fast in 30 minutes. </br> <b>No minimum order required.</b></p>
    </div>
</div>
<div class="sr-menu-toolbar affix-top" data-addclass-address-mode="address_mode" data-spy="affix" data-offset-top="450">
	<div class="container">
		<div class="row">
            <div class="col-md-6 col-xs-6" style="padding:5px;"><center>

                <!--<b style="color:#2E8A5C;font-size: 15px;">IIT Delhi&nbsp &nbsp  </b>-->
                <b style="color:#FF9933;font-size: 15px;"><span class=" glyphicon glyphicon-cutlery"></span> Today's Menu</b>
                <b style="color:#2E8A5C; padding: 5px;font-size: 15px;"><span class="glyphicon glyphicon-flash"></span> Delivery: 30min</b>
                <b style="color:#2E8A5C; padding: 5px;font-size: 15px;"><span class="glyphicon glyphicon-time"></span>  Open : 6:00pm-11:00pm </b>
            </center></div>
            <div class="col-md-6 col-xs-6">
                <form action="checkout.php" onsubmit ="return formSubmit()" method="GET">
    <button name="chk" id="chk" style="background-color:#28997D;" class="btn btn-success" data-toggle="tooltip" title="Checkout" disabled><span class="glyphicon glyphicon-shopping-cart" style="font-size :35px;"></span><span class="badge" style="font-size :15px;"> <span id="item">0</span><br> Rs  <span id="totprice">0</span> </span></button>
	
					<div id="timeslot1" style="display:none">
					<select type="select" name="time" id="time" class="form-control">
                    <option value="None">Select time-slot for Delivery</option>
					<option value="6:00pm - 6:30pm">6:00pm - 6:30pm</option>
					<option value="6:30pm - 7:00pm">6:30pm - 7:00pm</option>
					<option value="7:00pm - 7:30pm">7:00pm - 7:30pm</option>
					<option value="7:30pm - 8:00pm">7:30pm - 8:00pm</option>
					<option value="8:00pm - 8:30pm">8:00pm - 8:30pm</option>
					<option value="8:30pm - 9:00pm">8:30pm - 9:00pm</option>
					<option value="9:00pm - 9:30pm">9:00pm - 9:30pm</option>
					<option value="10:30pm - 10:00pm">10:30pm - 10:00pm</option>
					</select>
					</div>
					<input type="hidden" name='uid' value="<?php echo $user_id; ?>">
                    <input type="hidden" name='i1' id ="i1" value="0">
                    <input type="hidden" name='i2' id ="i2" value="0">
		    <input type="hidden" name='i3' id ="i3" value="0">
                    <input type="hidden" name='prodname1' id ="prodname1" value="<?php echo $objPName[0]; ?>">
                    <input type="hidden" name='prodname2' id ="prodname2" value="<?php echo $objPName[1]; ?>">
		    <input type="hidden" name='prodname3' id ="prodname3" value="<?php echo $objPName[2]; ?>">
                    <input type="hidden" name='qty1' id ="qty1" value="<?php echo $objQty[0]; ?>">                    
                    <input type="hidden" name='qty2' id ="qty2" value="<?php echo $objQty[1]; ?>">
					<input type="hidden" name='qty3' id ="qty3" value="<?php echo $objQty[2]; ?>">                    
                </form>
            </div>			
		</div>
	</div>
</div>
<div class="container">        
    <div class="row" style="margin-bottom:10px;">
		<div class="col-md-6 col-xs-12">
			<p><img src="img/<?php echo $objPIname[0] ?>" alt="" class="img-responsive img-rounded" id="img-res"></p>
		</div>
		<div class="col-md-6 col-xs-12">
			<center><h2 style="color:#2E8A5C;"><?php echo '<div>'.$objPName[0].'</div>' ?></h2></center>
			<?php echo '<div>'.$objDesc[0].'</div>' ?>
			<center><span style="font-weight: bold;font-size: 25px;"> Price Rs</span></center>
				<center><p style="font-weight: bold;font-size: 25px;" id="p1" ><?php echo $objPrice[0]?> </p></center>
				<div class = "row" id="hide1">
					<center>
						<input type="hidden" id ='it1' value="<?php echo $user_id; ?>">
						<button id="r1" style="font-size: 20px;margin-bottom: 35px;border-radius: 50px;background-color:#827F87;" class="btn btn-warning" onclick="rmitem1()"><i class="glyphicon glyphicon-minus" disabled></i></button>
						<span id = "item11" style="font-weight: bold;font-size: 60px; color:#2E8A5C;" disabled>0</span>
						<button id="item1" class="btn btn-warning" style="font-size: 20px;margin-bottom: 35px;border-radius: 50px;border-color:#7A7882;" onclick="item1()"><i class="glyphicon glyphicon-plus" disabled></i></button>
<div id="tom1" style="display:none;color: red;font-weight: bolder;font-size: 18px;">
							<span>Pre-order starts at 2:00pm</span>
						</div>					
<div id="sold1" style="display:none;color: red;font-weight: bolder;font-size: 18px;">
							<span>SOLD OUT</span>
						</div>
					</center>
				</div>
		</div>
	</div>
	<div class="row" style="margin-bottom:10px;">
		<div class="col-md-6 col-xs-12">
			<p><img src="img/<?php echo $objPIname[1] ?>" alt="" class="img-responsive img-rounded" id="img-res"></p>
			
		</div>
		<div class="col-md-6 col-xs-12">
			<center><h2 style="color:#2E8A5C;"><?php echo '<div>'.$objPName[1].'</div>' ?></h2></center>
			<?php echo '<div>'.$objDesc[1].'</div>' ?>
			<center><span style="font-weight: bold;font-size: 25px;"> Price Rs </span></center>
				<center><p style="font-weight: bold;font-size: 25px;" id="p2" >  <?php echo $objPrice[1]?> </p></center>
				<div class="row" id="hide2" >
					<center>
						<input type="hidden" id ='it2' value="<?php echo $user_id; ?>">
						<input type="hidden" id ='rm2' value="<?php echo $user_id; ?>">
						<button id="r2" style="margin-bottom: 35px;font-size: 20px;border-radius: 50px;background-color:#827F87;" class="btn btn-warning" onclick="rmitem2()"><i class="glyphicon glyphicon-minus" disabled></i></button>
						<span id = "item22" style="font-weight: bold;font-size: 60px;color:#2E8A5C;" disabled>0</span>
						<button id= "item2" class="btn btn-warning" style="font-size: 20px;margin-bottom: 35px;border-radius: 50px;border-color:#7A7882;" onclick="item2()"><i class="glyphicon glyphicon-plus" disabled></i></button>
<div id="tom2" style="display:none;color: red;font-weight: bolder;font-size: 18px;">
							<span>Pre-order starts at 2:00pm</span>
						</div>
						<div id="sold2" style="display:none;color: red;font-weight: bolder;font-size: 18px;">
							<span>SOLD OUT</span>
						</div>
					</center>
				</div>
		</div>
	</div>
	<!--<div class="row" style="margin-bottom:10px;">
		<div class="col-md-6 col-xs-12">
			<p><img src="img/<?php echo $objPIname[2] ?>" alt="" class="img-responsive img-rounded" id="img-res"></p>
		</div>
		<div class="col-md-6 col-xs-12" >
				<center><h2 style="color:#2E8A5C;"><?php echo '<div>'.$objPName[2].'</div>' ?></h2></center>
				<?php echo '<div>'.$objDesc[2].'</div>' ?>
				<center><span style="font-weight: bold;font-size: 25px;"> Price Rs </span></center>
				<center><p style="font-weight: bold;font-size: 25px;" id="p3" >  <?php echo $objPrice[2]?> </p></center>
				<div class="row">
					<center>
						<input type="hidden" id ='it3' value="<?php echo $user_id; ?>">
						<input type="hidden" id ='rm3' value="<?php echo $user_id; ?>">
						<button id="r3" style="margin-bottom: 35px;font-size: 20px;border-radius: 50px;background-color:#827F87;" class="btn btn-warning" onclick="rmitem3()"><i class="glyphicon glyphicon-minus" disabled></i></button>
						<span id = "item33" style="font-weight: bold;font-size: 60px;color:#2E8A5C;" disabled>0</span>
						<button id= "item3" class="btn btn-warning" style="font-size: 20px;margin-bottom: 35px;border-radius: 50px;border-color:#7A7882;" onclick="item3()"><i class="glyphicon glyphicon-plus" disabled></i></button>
                        <div id="tom3" style="display:none;color: red;font-weight: bolder;font-size: 18px;">
							<span>Pre-order starts at 2:00pm</span>
						</div>
						<div id="sold3" style="display:none;color: red;font-weight: bolder;font-size: 18px;">
							<span>SOLD OUT</span>
						</div>
					</center>
				</div>
		</div>
	</div>-->
</div>
<footer style=" background-color: black;height:auto;padding:25px;">
	<center>
    <div class="footer" id="footer">
        <div class="container">
            <div class="row">
				<div class="col-lg-4  col-md-4 col-sm-4 col-xs-12 ">
                    <p class="social" style="font-size:25px;">
                        <span style="padding:10px;color:#2E8A5C;"><a href="https://www.facebook.com/DelyDish?fref=ts" title="Share on Facebook" target="_blank" style="color:#2E8A5C;"> <i class=" fa fa-facebook">   </i> </a></span>
                        <span style="padding:10px;color:#2E8A5C;"><a href="http://twitter.com/home?status=" title="Share on Twitter" target="_blank" style="color:#2E8A5C;"> <i class="fa fa-twitter">   </i> </a> </span>
                        <span style="padding:10px; font-color:#2E8A5C;"><a href="https://plus.google.com/share?url=" title="Share on Google+" target="_blank" style="color:#2E8A5C;"> <i class="fa fa-google-plus">   </i> </a></span>
                    </p>
                </div>
                <div class="col-lg-4  col-md-4 col-sm-4 col-xs-12">
                        <span style="color:#2E8A5C;"><b> Copyright &copy DelyDish Technology Pvt. Ltd. </b></span>
                </div>
                <div class="col-lg-4  col-md-4 col-sm-4 col-xs-12">
						<a href="#contactus" data-toggle ="modal" style="padding: 5px;color:#2E8A5C;"><u><b>CONTACT</b></u></a>
						<a href="#privacypolicy" data-toggle = "modal" style="padding: 5px;color:#2E8A5C;"><u><b>PRIVACY POLICY</b></u></a>
                </div>
            </div>
 
        </div>
	</div>
	</center>
</footer>
<div class ="modal fade" role = "dialog" id="aboutus">
	<div class = "modal-dialog">
		<div class = "modal-content">
			<div class = "modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 style="color: #2E8A5C">DelyDish | Eat Homely and Hearty meals </h4>
			</div>
			<div class = "modal-body">
                            <h2> The most Convenient Meal Ever at DelyDish </h2>
                            <p>Impress your taste buds with hot & fresh, homely meals prepared by our chefs.
							 A daily changing menu of delicious meals delivered at your door lightning fast in 30 minutes</p>
			</div>
		</div>
	</div>
</div>
<div class ="modal fade" role = "dialog" id="howitworks">
	<div class = "modal-dialog">
		<div class = "modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 style="color: #2E8A5C">DelyDish | Eat Homely and Hearty meals</h4>
                    </div>
                    <div class = "modal-body">
						
                        <h4> 1. Order online in a few simple steps at delydish.com </h4>
                        <h4> 2. Choose from select delicious meals daily. </h4>
                        <h4> 3. Fill in your address details, and checkout. </h4>
                        <h4> 4. We deliver your meal lightning fast within 30 minutes. </h4>
						<h4> 5. Pay COD to our delivery executive and enjoy the food. </h4></br>

<h5> Enjoy a daily changing menu of hot & fresh, homely meals expertly prepared with love by our chefs, using only the best and the freshest of the ingredients.</h5>
                    </div>
		</div>
	</div>
</div>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 style="color: #2E8A5C">DelyDish | Eat Homely and Hearty meals </h4>
      </div>
      <div class="modal-body">
        We are closed now and will be open soon!!
      </div>
    </div>
  </div>
</div>
<div class ="modal fade" role = "dialog" id="contactus">
	<div class = "modal-dialog">
		<div class = "modal-content">
			<div class = "modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 style="color: #2E8A5C">DelyDish | Eat Homely and Hearty meals </h4>
			</div>
			<div class = "modal-body">
				<p> Feel free to contact us at 9999045752 for any query and suggestions. </p>
			</div>
		</div>
	</div>
</div>
<div class ="modal fade" role = "dialog" id="privacypolicy">
	<div class = "modal-dialog">
		<div class = "modal-content">
			<div class = "modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 style="color: #2E8A5C">DelyDish | Eat Homely and Hearty meals </h4>
			</div>
			<div class = "modal-body">
                            <p>
                                <h2> Our Privacy Policy </h2>
                                <h4> Thank you for visiting our web site. </h4>
This privacy policy tells you how we use personal information collected at this site. Please read this privacy policy before using the site or submitting any personal information. By using the site, you are accepting the practices described in this privacy policy. These practices may be changed, but any changes will only apply to activities and information on a going forward, not retroactive basis. You are encouraged to review the privacy policy whenever you visit the site to make sure that you understand how any personal information you provide will be used.

Note: the privacy practices set forth in this privacy policy are for this web site only. If you link to other web sites, please review the privacy policies posted at those sites.</br>

<b>Collection of Information</b></br>

We collect personally identifiable information, like names, postal addresses, email addresses, etc., when voluntarily submitted by our visitors.</br>

<b>Cookie/Tracking Technology</b></br>

The Site may use cookie and tracking technology depending on the features offered. Cookie and tracking technology are useful for gathering information such as browser type and operating system, tracking the number of visitors to the Site, and understanding how visitors use the Site. Cookies can also help customize the Site for visitors. If you previously provided personally identifiable information, cookies may be tied to such information. Aggregate cookie and tracking information may be shared with third parties. SpoonRocket, Inc. and third-party vendors, including Google, use first-party cookies (such as the Google Analytics cookies) and third-party cookies (such as the DoubleClick cookie) together to report how our ad impressions, other uses of ad services, and interactions with these ad impressions and ad services are related to visits to this site.</br>

<b>Distribution of Information </b></br>

We may share information with governmental agencies or other companies assisting us in fraud prevention or investigation. We may do so when: (1) permitted or required by law; or, (2) trying to protect against or prevent actual or potential fraud or unauthorized transactions; or, (3) investigating fraud which has already taken place. The information is not provided to these companies for marketing purposes.</br>

<b>Commitment to Data Security</b></br>

Your personally identifiable information is kept secure. Only authorized employees, agents and contractors (who have agreed to keep information secure and confidential) have access to this information. All emails and newsletters from this site allow you to opt out of further mailings.</br>

<b>Privacy Contact Information</b></br>

If you have any questions, concerns, or comments about our privacy policy you may contact us using the information below:</br>

By e-mail: info.delydish@gmail.com

We reserve the right to make changes at any time to this policy.
                                
                            </p>
			</div>
		</div>
	</div>
</div>
<div class ="modal fade" role = "dialog" id="soontolaunch">
    <div class = "modal-dialog modal-sm">
		<div class = "modal-content">
			<div class = "modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 style="color: #2E8A5C">DelyDish | Eat Homely and Hearty Meals </h4>
			</div>
			<div class = "modal-body">
                            <h4>We are currently delivering to IIT Delhi and JNU Only.</h4>
                            <p>Fill in your details below, and we will let you know when we launch at your place.</p>
                            <form name="contact" action="soon.php"class="contact" method="GET">
                                    <div class="form-group">
                                    <label for="subsname" class="control-label">Name:</label>
                                    <input type="text" name="name" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="subsmobile" class="control-label">Contact no:</label>
                                        <input type="text" name="contact" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="subsemail" class="control-label">Email:</label>
                                        <input type="text" name="email" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="subsloc" class="control-label">Your Location:</label>
                                        <input type="text" name="locations" class="form-control">
                                    </div>
                                    <input class="btn btn-success" name="submit" type="submit" value="Subscribe" id="submit">
                                </form>
                        </div>	
		</div>
	</div>
</div>
<div class ="modal fade" role = "dialog" id="feedback">
    <div class = "modal-dialog modal-sm">
		<div class = "modal-content">
			<div class = "modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 style="color: #2E8A5C">DelyDish | Eat Homely and Hearty Meals </h4>
			</div>
			<div class = "modal-body">
                            <form name="feedback" action="feedback.php"class="contact" method="GET">
                                    <div class="form-group">
                                        <label for="feedemail" class="control-label">Email:</label>
                                        <input type="text" name="feedemail" class="form-control">
                                    </div>
									<div class="form-group">
                                        <label for="feed" class="control-label"> FeedBack:</label>
                                        <textarea name="feedback" class="form-control" rows="15" cols="50"></textarea>
                                    </div>
                                    <input class="btn btn-success" name="submit" type="submit" value="Submit" id="submit">
                                </form>
                        </div>	
		</div>
	</div>
</div>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="jquery1.js" type="text/javascript"></script>
</body>
</html>