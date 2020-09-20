<?php
include('includes/config.php');
extract($_POST);
?> 

<div class="row"> 
      
      <!-- Nav tabs -->
      <div class="recent-tab">
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a href="#resentnewcar" role="tab" data-toggle="tab">Buses</a></li>
        </ul>
      </div>
    
   
      <!-- Recently Listed New Cars -->
      <div class="tab-content">
           <div class="info" style="padding:10px;">
        <p>
           <strong>BUSES</strong>  Available for pre-request. We take you beyond...<br/>
For all shuttles and group movement within and out of Accra Smartcab makes buses available for you.<br/>
Ride within or out of Accra at affordable prices with our professional drivers, all with full AC<br/>
Available for all occasions; Wedding, tourist tour, celebrations, business trips, weekends, holidays, Airport pick-ups, hotel pick-ups etc. 
             </p>
<ul>
    <li>Request and confirmation within 24hours</li>
    <li>Price varies depending on type of vehicles request</li>
</ul>	
       
    </div>
        <div role="tabpanel" class="tab-pane active" id="resentnewcar">

<?php $sql = "SELECT tblvehicles.VehiclesTitle,tblbrands.BrandName,tblvehicles.PricePerDay,tblvehicles.FuelType,tblvehicles.ModelYear,tblvehicles.id,tblvehicles.SeatingCapacity,tblvehicles.VehiclesOverview,tblvehicles.Vimage1 from tblvehicles join tblbrands on tblbrands.id=tblvehicles.VehiclesBrand where status='bus'";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{  
?>  

<div class="col-list-3">
<div class="recent-car-list">
<div class="car-info-box"> <a href=""><img src="admin/img/vehicleimages/<?php echo htmlentities($result->Vimage1);?>" class="img-responsive" alt="image"></a>
<ul>
<li><i class="fa fa-car" aria-hidden="true"></i><?php echo htmlentities($result->FuelType);?></li>
<li><i class="fa fa-calendar" aria-hidden="true"></i><?php echo htmlentities($result->ModelYear);?> Model</li>
<li><i class="fa fa-user" aria-hidden="true"></i><?php echo htmlentities($result->SeatingCapacity);?> seats</li>
</ul>
</div>
<div class="car-title-m">
<h6><a href=""><?php echo htmlentities($result->BrandName);?> , <?php echo htmlentities($result->VehiclesTitle);?></a></h6>
<!--<span class="price">&cent;<?php echo htmlentities($result->PricePerDay);?> /Day</span> -->
</div>
<div class="inventory_info_m">
<p><?php echo substr($result->VehiclesOverview,0,70);?></p>
</div>
</div>
</div>
<?php }}?>
       
      </div>
    </div>
  </div>