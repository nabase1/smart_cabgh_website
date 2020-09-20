<?php 
session_start();
include('includes/config.php');
error_reporting(0);

?>

<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">
<title>Home :: smartcabgh</title>
<!--Bootstrap -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="assets/css/style.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css">
<link href="assets/css/slick.css" rel="stylesheet">
<link href="assets/css/bootstrap-slider.min.css" rel="stylesheet">
<link href="assets/css/font-awesome.min.css" rel="stylesheet">
    
    
    
		<link rel="stylesheet" id="switcher-css" type="text/css" href="assets/switcher/css/switcher.css" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/red.css" title="red" media="all"  />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/orange.css" title="orange" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/blue.css" title="blue" media="all" data-default-color="true"/>
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/pink.css" title="pink" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/green.css" title="green" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/purple.css" title="purple" media="all" />
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/favicon-icon/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/favicon-icon/apple-touch-icon-114-precomposed.html">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/favicon-icon/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="assets/images/favicon-icon/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="assets/images/smart_cab_logo.png">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900|Righteous" rel="stylesheet"> 
   
<!--     <link href="https://fonts.googleapis.com/css?family=Playfair+Display|Lobster" rel="stylesheet">-->
</head>
<body>

<!-- Start Switcher -->
<?php include('includes/colorswitcher.php');?>
<!-- /Switcher -->  
        
<!--Header-->
<?php include('includes/header.php');?>
<!-- /Header --> 
<a class="weatherwidget-io" href="https://forecast7.com/en/5d60n0d19/accra/" data-label_1="SMART" data-label_2="WEATHER" data-theme="original" >SMART WEATHER</a>
<script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
</script>

<!-- Banners -->
<section id="banner" class="">
  <div class="container-fluid">
      <div class="row">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
   
    <div class="carousel-inner">

      <div class="item active">
        <img src="admin/img/carousel-img/WhatsApp%20Image.jpg" alt="smartcab" style="width:100%;">
        <div class="carousel-caption">
          <h3 class="white-text"></h3>
          <p class="c-caption"></p>
        </div>
      </div>

      <div class="item">
        <img src="admin/img/carousel-img/WhatsApp%20Image%202019-06-07%20at%204.21.10%20AM(1).jpeg" alt="accra" style="width:100%;">
        <div class="carousel-caption">
          <h3></h3>
          <p class="c-caption"></p>
        </div>
      </div>
    
      <div class="item">
        <img src="admin/img/carousel-img/WhatsApp%20Image%202019-06-07%20at%204.21.10%20AM.jpeg" alt="accra" style="width:100%;">
        <div class="carousel-caption">
          <h3></h3>
          <p class="c-caption"></p>
        </div>
      </div>
        
    </div>

  </div>

     <div class="col-md-5 col-md-push-7">
          <div class="banner_content">
                <a href="#booking" class=" btn btn-lg" data-toggle="modal" data-dismiss="modal">Book S-Cab Now <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></a>
               <h1>Your N.1 Cab Services</h1>
              <p>Stay smart ! 😉 </p>
            
              
            </div>
        </div>    
    
      </div>
  </div>
</section>
    
<!-- /Banners --> 


<!-- Resent Cat-->
<section class="section-padding gray-bg">
  <div class="container">
    <div class="section-header text-center">
      <h2>Get your  <span>Smart ride!</span></h2>
<!--      <p>Our services keep getting better. SmartCab offers clients pickup service to their office, home or desired location.</p>-->
    </div>
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center smartride">
				<a href="index.php?info=s-cab"><img src = "admin/img/2016-Toyota-Corolla-Venice-Florida.png" style="height:auto; width:90%;"></a>
				<div class = "cap">S-Cab</div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center smartride">
				<a href="index.php?info=s-bike"><img src = "admin/img/mbike.png" style="height:auto; width:90%;"></a>
				<div class = "cap">S-bike</div>
        </div>  
		
					
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center smartride">
				<a href="index.php?info=rentals"><img src = "admin/img/prado.png"  style="height:auto; width:90%;"></a>
				<div class = "cap">Rentals</div>
        </div>
				
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center smartride">
				<a href="index.php?info=buses"><img src = "admin/img/model.png" style="height:auto; width:90%;"></a>
				<div class = "cap">Buses</div>
        </div>	
 
    </div>
  <?php
   $info = $_GET['info'];
      if($info =='s-bike'){
          include 's-bikes.php';
      }
      if($info =='rentals'){
          include 'rentals.php';
      }
      if($info == 's-cab'){
          include 'cabs.php';
      }
      if($info == 'buses'){
          include 'buses.php';
      }
      
      
?>
</div>
</section>
<!-- /Resent Cat --> 

<!-- services-->
<section class="fun-facts-section">
    <!--beginning of packages section-->
<?php 
$sql = "SELECT * FROM tblpackages";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
  ?>

    
    <div class="container div_zindex" style="text-align:center;">
            <div class="row" style="background-color:rgba(0,0,0,.5);">
			 <div class="col-12">
						<h3 class="text-center white-text">OUR SMART PACKAGES AND PROMO</h3>
                       <hr>
                 <?php foreach($results as $result)
                {  ?>
						<ul style="list-style-type:none; font:20px sans-serif; color:#ffffff;">
						<li> <?php echo htmlentities($result->package);?></li>
						</ul>
               <?php  }
                 ?>
				</div>
			</div>
<?php }
    ?>
		</div><br/><br/>
<!--ending of packages section-->
    
    
  <div class="container div_zindex">
       <h2 class="text-center white-text">Our Services</h2>
    <div class="row">
      <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
        <div class="fun-facts-m">
          <div class="cell">
            <h3><i class="fa fa-cab" aria-hidden="true"></i>Private and VIP cab</h3><br/>
            <p>Smartcab offers its clients VIP cabs to move around with.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
        <div class="fun-facts-m">
          <div class="cell">
            <h3><i class="fa fa-car" aria-hidden="true"></i>Chauffeur</h3><br/>
            <p>Start your trip with our chauffeurs waiting to take you to your destination while you relax or get some work done.Get the best riding experience</p>
          </div>
        </div>
      </div>
        </div><br>
        <div class="row">
      <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
        <div class="fun-facts-m">
          <div class="cell">
            <h3><i class="fa fa-cab" aria-hidden="true"></i>PickUps</h3><br/>
            <p>Our services keep getting better. SmartCab offers clients pickup service to their office, home or desired location.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
        <div class="fun-facts-m">
          <div class="cell">
            <h3><i class="fa fa-car" aria-hidden="true"></i>Rentals and hiring</h3><br/>
            <p>Our services keep getting better. SmartCab offers car rental services within and outside Accra.</p>
          </div>
        </div>
      </div>
    </div>
      <br/>
     <div class="row">
      <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
        <div class="fun-facts-m">
          <div class="cell">
            <h3><i class="fa fa-bus" aria-hidden="true"></i>Shuttle</h3><br/>
            <p>SmartCab Gh provides quality transport for group of people, that is business and casual trips.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
        <div class="fun-facts-m">
          <div class="cell">
            <h3><i class="fa fa-truck" aria-hidden="true"></i>Packages dispatch</h3><br/>
            <p>SmartCab Gh services keep getting better. SmartCab offers clients delivery services to their homes and offices.</p>
          </div>
        </div>
      </div>
       </div> <br/> 
        <div class="row">
      <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
        <div class="fun-facts-m">
          <div class="cell">
            <h3><i class="fa fa-support" aria-hidden="true"></i>Tourism Advisor</h3><br/>
            <p>SmartCab Gh services keep getting better. SmartCab offers clients advise about where to visit in Ghana for relaxation.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
        <div class="fun-facts-m">
          <div class="cell">
            <h3><i class="fa fa-phone" aria-hidden="true"></i>Customer Support</h3><br/>
            <p>Call our customer line for better support and quick response to all your enquiries.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
    
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<!-- /services--> 


<!--Testimonial -->
<section class="section-padding testimonial-section parallex-bg">
    <div class="container div_zindex" style="background-color:rgba(0,0,0,.5);">
        <div class="container">
                 <h1 class=" text-center white-text">Why <strong>Smartcab?</strong></h1>
                <h4 class="text-center white-text"><span>The smartest ride experience in town</span></h4>
          <hr>
            </div>
      <div class="slides">
					<div class = "row ">
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
							<img src="assets/images/timess.jpg" style="width=100%; width:100%;"/>
						</div>
						<div class = "col-lg-9 col-md-9 col-sm-9 col-xs-9">
						
									<div class = "row" style="text-align:center;">				
										<div class="col-12">
											<div class = "customsupport">
												<h3 class="white-text">Get the best value for money</h3>
											</div>	
										
										</div>
											
										<div class="col-12">
										<br>
											<p class="white-text">A service for every situation, we confirm your fare before you move. MORE than a transport, we take care of our scabers</p>
										</div>
									</div>	
						</div>
					</div>
					</div>
        
        <div class="slides">
					<div class = "row">
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
							<img src="assets/images/call.jpg" style="width=100%; width:100%;"/>
						</div>
						
						<div class = "col-lg-9 col-md-9 col-sm-9 col-xs-9">
						
									<div class = "row">				
										<div class="col-12">
											<div class = "customsupport">
												<h3 class="white-text">No app to download </h3>
											</div>	
										</div>
											
										<div class="col-12">
										<br>
											<p class="white-text">Save your time, save your resources, anyone can make a request just call 0545 42 4545 </p>
										</div>
									</div>
						</div>
					</div>
					</div>
					
					<div class="slides">
						<div class = "row">
							<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
								<img src="assets/images/quickr.jpg" style="width=100%; width:100%;"/>
							</div>
							
							<div class = "col-lg-9 col-md-9 col-sm-9 col-xs-9">
							
										<div class = "row">				
											<div class="col-12">
												<div class = "customsupport">
													<h3 class="white-text">We deliver the quickest response to your missing Items</h3>
												</div>	
											</div>
												
											<div class="col-12">
											<br>
												<p class="white-text">No worries for your valuables left in a scab, you can easily retrieve them</p>
											</div>
										</div>
							</div>	
						</div>
					</div>
					
					<div class="slides">
					<div class = "row">
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
							<img src="assets/images/easyaccessimg.jpg" style="width=100%; width:100%;"/>
						</div>
						
						<div class = "col-lg-9 col-md-9 col-sm-9 col-xs-9">
						
									<div class = "row">				
										<div class="col-12">
											<div class = "customsupport">
												<h3 class="white-text">Easy service access </h3>
											</div>	
										</div>
											
										<div class="col-12">
										<br>
											<p class="white-text">No Wahalaaa! Just call..., sms or Whatsapp...  smartcabgh and we respond 24/7</p>
										</div>
									</div>
						</div>	
					</div>
					</div>
					
					<div class="slides">
					<div class = "row">
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
							<img src="assets/images/convi.jpg" style="width=100%; width:100%;"/>
						</div>
					
					<div class = "col-lg-9 col-md-9 col-sm-9 col-xs-9">
					
									<div class = "row">				
										<div class="col-12">
											<div class = "customsupport">
												<h3 class="white-text">Smartcab cab is closer to you</h3>
											</div>	
										</div>
											
										<div class="col-12">
										<br>
											<p class="white-text">You can reach us anytime for any complain on our customer support 24 /7</p>
										</div>
									</div>
						</div>
					</div>
					</div>
					
					<div class="slides">
					<div class = "row">
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
							<img src="assets/images/times.jpg" style="width=100%; width:100%;"/>
						</div>
						
						<div class = "col-lg-9 col-md-9 col-sm-9 col-xs-9">
						
									<div class = "row">				
										<div class="col-12">
											<div class = "customsupport">
												<h3 class="white-text">Convenient and time saver</h3>
											</div>	
										</div>
											
										<div class="col-12">
										<br>
											<p class="white-text">You can always book a scab to wait for you at your door step ahead of time</p>
										</div>
									</div>	
						</div>
					</div>
					</div>
					
					<div class="slides">
					<div class = "row">
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
							<img src="assets/images/supp.jpg" style="width=100%; width:100%;"/>
						</div>
						
						<div class = "col-lg-9 col-md-9 col-sm-9 col-xs-9">
						
									<div class = "row">				
										<div class="col-12">
											<div class = "customsupport">
												<h3 class="white-text">Stay smart 😉!</h3>
											</div>	
										</div>
											
										<div class="col-12">
										<br>
											<p class="white-text">We keep on getting better for you day by day. Thank you for your support!</p>
										</div>
									</div>
						</div>		
					</div>
					</div>
					
					<div class="slides">
					<div class = "row">
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
							<img src="assets/images/gpsloc.jpg" style="width=100%; width:100%;"/>
						</div>
						
						<div class = "col-lg-9 col-md-9 col-sm-9 col-xs-9">
						
									<div class = "row">				
										<div class="col-12">
											<div class = "customsupport">
												<h3 class="white-text">Your safety is our business</h3>
											</div>	
										</div>
											
										<div class="col-12">
										<br>
											<p class="white-text">With the latest GPS technology we moniter all our vehicles and personnel for better safety</p>
										</div>
									</div>
						</div>	
					</div>
					</div>
					
					<div class="slides">
					<div class = "row">
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
							<img src="assets/images/pergood.jpg" style="width=100%; width:100%;"/>
						</div>
						
						<div class = "col-lg-9 col-md-9 col-sm-9 col-xs-9">
						
									<div class = "row">				
										<div class="col-12">
											<div class = "customsupport">
												<h3 class="white-text">SmartChauffeur</h3>
											</div>	
										</div>
											
										<div class="col-12">
										<br>
											<p class="white-text">Our personel and drivers are professionals and well trained to take good care of you</p>
										</div>
									</div>
						</div>
					</div>
					</div>
        
        <div class="slides">
					<div class = "row">
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
							<img src="assets/images/tnksupp.jpg" style="width=100%; width:100%;"/>
						</div>
						
						<div class = "col-lg-9 col-md-9 col-sm-9 col-xs-9">
						
									<div class = "row">				
										<div class="col-12">
											<div class = "customsupport">
												<h3 class="white-text">Our S-cabs</h3>
											</div>	
										</div>
											
										<div class="col-12">
										<br>
											<p class="white-text">These are brand new vehicles with comprehensive insurance , full AC and with updated service inspection</p>
										</div>
									</div>
						</div>
					</div>
					</div>
        

        
    </div>
     <br/><br/>
<!-- beginning of testimonial section-->
  <div class="container div_zindex">  
    <div class="section-header white-text text-center">
      <h2>Our Satisfied <span>Customers</span></h2>
    </div>
    <div class="row">
      <div id="testimonial-slider">
<?php 
$tid=1;
$sql = "SELECT tbltestimonial.Testimonial,tblusers.FullName,tblusers.EmailId,tblusers.image from tbltestimonial join tblusers on tbltestimonial.UserEmail=tblusers.EmailId where tbltestimonial.status=:tid";
$query = $dbh -> prepare($sql);
$query->bindParam(':tid',$tid, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{  ?>


        <div class="testimonial-m">
 
          <div class="testimonial-content">
            <div class="testimonial-heading">
                <img src="assets/images/<?php echo htmlentities($result->EmailId);?>/<?php echo htmlentities($result->image); ?>" style="width:90px; height:100px;"/>
              <h5><?php echo htmlentities($result->FullName);?></h5>
            <p><?php echo htmlentities($result->Testimonial);?></p>
          </div>
        </div>
        </div>
        <?php }} ?>
        
       
  
      </div>
    </div>
  </div>
    <!-- ending of testimonial section-->
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<!-- /Testimonial--> 
 <?php include('downloadapp.php'); ?>
    
<?php include('booking.php'); ?>


<!--Footer -->
<?php include('includes/footer.php');?>
<!-- /Footer--> 

<!--Back to top-->
<div id="back-top" class="back-top"> <a href="#top"><i class="fa fa-angle-up" aria-hidden="true"></i> </a> </div>
<!--/Back to top--> 

<!--Login-Form -->
<?php include('includes/login.php');?>
<!--/Login-Form --> 

<!--Register-Form -->
<?php include('includes/registration.php');?>

<!--/Register-Form --> 

<!--Forgot-password-Form -->
<?php include('includes/forgotpassword.php');?>
<!--/Forgot-password-Form --> 
    
    <script>
    
    function initAutocomplete(){
            
         var from_places = document.getElementById('pickuptown');
         var to_place = document.getElementById('dropofftown');
            
        
        let fromAutocomplete = new google.maps.places.Autocomplete(from_places);
        
       fromAutocomplete.setFields(
        ['address_components', 'geometry', 'icon', 'name']);
        
        fromAutocomplete.addListener('Place_changed', function(){
            let place1 = fromAutocomplete.getPlace();
            let address1 = fromAutomcomplemte.getformatted_address;
        });
        
            
        let toAutocomplete = new google.maps.places.Autocomplete(to_place);
        
       toAutocomplete.setFields(
        ['address_components', 'geometry', 'icon', 'name']);
        
        toAutocomplete.addListener('Place_changed', function(){
            let place2 = toAutocomplete.getPlace();
            let address2 = toAutomcomplemte.getformatted_address;
        });
       
    }
        
         // calculate distance
        function calculateDistance() {
            var origin = $('#origin').val();
            var destination = $('#destination').val();
            var service = new google.maps.DistanceMatrixService();
            service.getDistanceMatrix(
                {
                    origins: [origin],
                    destinations: [destination],
                    travelMode: google.maps.TravelMode.DRIVING,
                    unitSystem: google.maps.UnitSystem.IMPERIAL, // miles and feet.
                    // unitSystem: google.maps.UnitSystem.metric, // kilometers and meters.
                    avoidHighways: false,
                    avoidTolls: false
                }, callback);
        }
        
        
               // get distance results
        function callback(response, status) {
            if (status != google.maps.DistanceMatrixStatus.OK) {
                $('#result').html(err);
            } else {
                var origin = response.originAddresses[0];
                var destination = response.destinationAddresses[0];
                if (response.rows[0].elements[0].status === "ZERO_RESULTS") {
                    $('#result').html("Better get on a plane. There are no roads between "  + origin + " and " + destination);
                } else {
                    var distance = response.rows[0].elements[0].distance;
                    var duration = response.rows[0].elements[0].duration;
                    console.log(response.rows[0].elements[0].distance);
                    var distance_in_kilo = distance.value / 1000; // the kilom
                    var distance_in_mile = distance.value / 1609.34; // the mile
                    var duration_text = duration.text;
                    var duration_value = duration.value;
                    $('#in_mile').text(distance_in_mile.toFixed(2));
                    $('#in_kilo').text(distance_in_kilo.toFixed(2));
                    $('#duration_text').text(duration_text);
                    $('#duration_value').text(duration_value);
                    $('#from').text(origin);
                    $('#to').text(destination);
                }
            }
        }
    
   //  var modal = document.getElementById("downloadapp");
    // modal.style.display= "block";
    
</script>

<!-- Scripts --> 
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/interface.js"></script> 
<!--Switcher-->
<script src="assets/switcher/js/switcher.js"></script>
<!--bootstrap-slider-JS--> 
<script src="assets/js/bootstrap-slider.min.js"></script> 
<!--Slider-JS--> 
<script src="assets/js/slick.min.js"></script> 
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/car_type.js"></script> 
<script src="assets/js/img-slide.js"></script> 
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC31qg8EaTcIjQ6BGR6lWs6ny42n1sb0DY&libraries=places&callback=initAutocomplete"
        async defer></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->

</body>

<!-- Mirrored from themes.webmasterdriver.net/carforyou/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Jun 2017 07:22:11 GMT -->
</html>