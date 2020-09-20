
<header>
  <div class="default-header">
    <div class="container">
      <div class="row">
        <div class="col-sm-3 col-md-2">
          <div class="logo"> <a href="index.php"><img src="assets/images/smart_cab_logo.png" width="100px" alt="image"/></a> </div>
        </div>
        <div class="col-sm-9 col-md-10">
          <div class="header_info">
               <div class="header_widgets">
<!--              <div class="circle_icon"> <i class="fa fa-phone" aria-hidden="true"></i> </div>-->
              <a  href="#booking" data-toggle="modal" data-dismiss="modal" class="uppercase_text">Book S-Cab </a><br/>
              <a href="tel:+233545424545 "> (+233) 545 42 4545 </a><br/>
              <a href="tel:+233577998000 "> (+233) 577 99 8000 </a>
              </div>
              
            <div class="header_widgets">
                <a href="page.php?type=faqs" class="uppercase_text">help </a>
<!--              <div class="circle_icon"> <i class="fa fa-envelope" aria-hidden="true"></i> </div>-->
<!--              <a href="page.php?type=faqs" class="uppercase_text">help </a>-->
<!--              <a href="mailto:Smartcab00@gmail.com">Smartcab00@gmail.com</a>-->
              
              </div>
              
            
              
            <div class="header_widgets">
               <div class="social-follow">
              <ul>
               <li><a href="https://facebook.com/Gh.smartcab" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
              <li><a href="https://twitter.com/scab_gh" target="_blank"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
              <li><a href="https://wa.me/+233577998000/?"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
              <li><a href="https://instagram.com/scab_gh"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
              </ul>
            </div>
              </div> 
           
   <?php   if(strlen($_SESSION['login'])==0)
	{	
?>
 <div class="login_btn"> <a href="#loginform" class="btn btn-xs uppercase" data-toggle="modal" data-dismiss="modal">Login / Register</a> </div>
<?php }
else{ 

echo "Welcome To SmartCab gh";
 } ?>
          </div>
        </div>
      </div>
        <div class="row">
           <marquee><h2 class="header_text"><strong >smart</strong><strong style="color:#33cdff">cab</strong><strong style="color:#d5ad66">gh</strong><strong style="color:#33cdff">.com </strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp;<strong >smart</strong><strong style="color:#33cdff">cab</strong><strong style="color:#d5ad66">gh</strong><strong style="color:#33cdff">.com</strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<strong >smart</strong><strong style="color:#33cdff">cab</strong><strong style="color:#d5ad66">gh</strong><strong style="color:#33cdff">.com</strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<strong >smart</strong><strong style="color:#33cdff">cab</strong><strong style="color:#d5ad66">gh</strong><strong style="color:#33cdff">.com</strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<strong >smart</strong><strong style="color:#33cdff">cab</strong><strong style="color:#d5ad66">gh</strong><strong style="color:#33cdff">.com</strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<strong >smart</strong><strong style="color:#33cdff">cab</strong><strong style="color:#d5ad66">gh</strong><strong style="color:#33cdff">.com</strong></h2>  </marquee> 
        </div>
       
    </div>
  </div>
  
  <!-- Navigation -->
  <nav id="navigation_bar" class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button id="menu_slide" data-target="#navigation" aria-expanded="false" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <div class="header_wrap">
        <div class="user_login">
          <ul>
            <li class="dropdown"> <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-circle" aria-hidden="true"></i> 
<?php 
$email=$_SESSION['login'];
$sql ="SELECT FullName FROM tblusers WHERE EmailId=:email ";
$query= $dbh -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
foreach($results as $result)
	{

	 echo htmlentities($result->FullName); }}?><i class="fa fa-angle-down" aria-hidden="true"></i></a>
              <ul class="dropdown-menu">
           <?php if($_SESSION['login']){?>
            <li><a href="profile.php">Profile Settings</a></li>
              <li><a href="update-password.php">Update Password</a></li>
            <li><a href="my-booking.php">My Booking</a></li>
            <li><a href="post-testimonial.php">Post a Testimonial</a></li>
          <li><a href="my-testimonials.php">My Testimonial</a></li>
            <li><a href="logout.php">Sign Out</a></li>
            <?php } else { ?>
            <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">Sign In</a></li>
            <?php } ?>
          </ul>
            </li>
          </ul>
        </div>
        <div class="header_search">
          <div id="search_toggle"><i class="fa fa-search" aria-hidden="true"></i></div>
          <form action="search-carresult.php" method="get" id="header-search-form">
            <input type="text"  name="search" placeholder="Search..." class="form-control">
            <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
          </form>
        </div>
      </div>
      <div class="collapse navbar-collapse" id="navigation">
        <ul class="nav navbar-nav">
          <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
             <li class="nav-item"><a class="nav-link" href="s-cab.php">S-cab</a></li>
            <li class="nav-item"><a class="nav-link" href="car-listing.php">Rentals</a></li>
             <li class="nav-item"><a class="nav-link" href="s-ads.php">s-ads</a></li>
             <li><a href="page.php?type=delivery">Delivery</a></li>
          <li class="nav-item"><a class="nav-link" href="page.php?type=vacancy">Work With Smartcab</a></li>
             <li class="dropdown"><a data-toggle="dropdown" href="" aria-haspopup="true" aria-expanded="false" aria-hidden="true">help</a>
                 <ul class="dropdown-menu">
                      <li class="nav-item"><a class="nav-link" href="contact-us.php">Contact Us</a></li>
                     <li><a href="page.php?type=aboutus">About Us</a></li>
                    <li><a href="page.php?type=faqs">FAQs</a></li>
                  </ul>
            
            </li>

        </ul>
      </div>
    </div>
  </nav>
  <!-- Navigation end --> 
  
</header>