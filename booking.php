<?php 
if(isset($_POST['submit']))
{
$pickuptown=$_POST['pickuptown'];
$dropofftown=$_POST['dropofftown']; 
$pickupdate=$_POST['pickupdate'];
$pickuptime=$_POST['pickuptime'];
$phone=$_POST['phone'];
$description=$_POST['description'];
$message=$_POST['message'];
$useremail=$_SESSION['login'];
$status=0;
$sql="INSERT INTO  tblbookingcab(userEmail,phone,PickUpTown,DropOffTown,PickUpDate,PickUpTime,description,message,Status) VALUES(:useremail,:phone,:pickuptown,:dropofftown,:pickupdate,:pickuptime,:description,:message,:status)";
$query = $dbh->prepare($sql);
$query->bindParam(':useremail',$useremail,PDO::PARAM_STR);
$query->bindParam(':phone',$phone,PDO::PARAM_STR);
$query->bindParam(':pickuptown',$pickuptown,PDO::PARAM_STR);
$query->bindParam(':dropofftown',$dropofftown,PDO::PARAM_STR);
$query->bindParam(':pickupdate',$pickupdate,PDO::PARAM_STR);
$query->bindParam(':pickuptime',$pickuptime,PDO::PARAM_STR); 
$query->bindParam(':description',$description,PDO::PARAM_STR);
$query->bindParam(':message',$message,PDO::PARAM_STR);
$query->bindParam(':status',$status,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
echo "<script>alert('Booking successfull.');</script>";
}
else 
{
echo "<script>alert('Something went wrong. Please try again');</script>";
}

}

?>

<div class="modal fade" id="booking">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title">Book S-cab Now</h3>
      </div>
      <div class="modal-body">
        <div class="row">
        <div class="mx-auto col-lg-10 col-md-10 col-sm-12 col-xs-12 text-center">
        <div class=""><a href="tel:+233545424545 "><img src="admin/img/phone_icon.jpg" width="100%" height="90px"> </a> </div><br>
        <div class=""><a href="https://wa.me/+233577998000/? "><img src="admin/img/whats_icon.jpg" width="100%" height="90px"></a> </div><br/>
        <br/>    
        <h4>Or Fill the forms below for online booking</h4>
        </div>    
        </div>
          
        <div class="row">
          <div class="login_wrap">
            <div class="col-md-12 col-sm-6">
              <form method="post">
               <div class="form-group">
                <label class="control-label">Phone</label>   
              <input type="text" class="form-control" name="phone" placeholder="Enter Phone Number" required>
            </div>
               <div class="form-group">
                    <label class="control-label">Pick Up Town</label>
              <input type="text" class="form-control" name="pickuptown" id="pickuptown" placeholder="Enter Pick Up town/city" required>
            </div>
               <div class="form-group">
                   <label class="control-label">Drop Off Town</label>
              <input type="text" class="form-control" name="dropofftown" id="dropofftown" placeholder="Enter Drop Off town/city" required>
            </div>
            <div class="form-group">
                <label class="control-label">Pick Up Date</label>
              <input type="date" class="form-control" name="pickupdate" placeholder="Pick Up Date(mm/dd/yyyy)" required>
            </div>
                  
            <div class="form-group">
                <label class="control-label">Pick Up Time</label>
              <input type="time" class="form-control" name="pickuptime" placeholder="" required>
            </div>
           
             <div class="form-group">
                 <label class="control-label">Description</label>
              <input type="text" class="form-control" name="description" placeholder="Description E.g Taxi cab,van,pick-up and etc" required>
            </div>
            <div class="form-group">
              <textarea rows="4" class="form-control" name="message" placeholder="Message"></textarea>
            </div>
          <?php //if($_SESSION['login'])
             // {?>
              <div class="form-group">
                <input type="submit" class="btn"  name="submit" value="Book Now">
              </div>
              <?php// } else { ?>
<!--<a href="#loginform" class="btn btn-xs uppercase" data-toggle="modal" data-dismiss="modal">Login For Book</a>-->

              <?php// } ?>
          </form>
            </div>
           
          </div>
        </div>
      </div>
      <div class="modal-footer text-center">
        
      </div>
    </div>
  </div>
</div>