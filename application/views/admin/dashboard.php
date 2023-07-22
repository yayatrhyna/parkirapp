<?php include('header.php');?>

<div class="container-fluid">
    <?php include('notification.php');?>
    <div class="row">
        <div class="col-3 px-0" style="position:fixed">
            <div class="card border-0 shadow-sm">
                <div class="card-body m-0 p-0">
                    <?php include('sidebar.php');?>
                </div>
            </div>
        </div>
        <div class="col-9 offset-3 mt-5">
           <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                <div class="card rounded-0 border-0 shadow-sm bg-info text-white">
                    <div class="card-body">
                       <div class="row">
                           <div class="col-7">
                              <h1 class="ml-2"><?=$this->datawork->count_data('add_vehicle',['status'=>0]);?></h1>
                              <h6 class="my-3">Vehicles Parked</h6>
                           </div>
                           <div class="col-5">
                               <div class="mx-auto my-2">
                                 <i class="fas fa-parking fa-4x"></i>
                               </div>
                           </div>
                       </div>
                    </div>
                    
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                <div class="card rounded-0 border-0 shadow-sm bg-dark text-white">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-7">
                                <h1 class="ml-2"><?=$this->datawork->count_data('add_vehicle',['status='=>1]);?></h1>
                                <h6 class="my-3">Departed Vehicles</h6>
                            </div>
                            <div class="col-5">
                                <div class="mx-auto my-2">
                                <i class="fas fa-car fa-4x"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                <div class="card rounded-0 border-0 shadow-sm bg-danger text-white">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-7">
                                <h1 class="ml-2"><?=$this->datawork->count_data('category',['cat_id!='=>NULL]);?></h1>
                                <h6 class="my-3">Available Category</h6>
                            </div>
                            <div class="col-5">
                                <div class="mx-auto my-2">
                                <i class="fas fa-box fa-4x"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                <div class="card rounded-0 border-0 shadow-sm bg-warning text-white">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-7">
                                
                                <h1 class="ml-2"><i class="fas fa-dollar-sign fa-xs"></i>&nbsp;<?= number_format($this->datawork->column_sum('parking_charge','add_vehicle'), 2);?></h1>
                                
                                <h6 class="my-3">Total Earnings</h6>
                            </div>
                            <div class="col-5">
                                <div class="mx-auto my-2">
                                <i class="fas fa-money-check-alt fa-4x"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
             <div class="card rounded-0 border-0 shadow-sm bg-secondary text-white">
                 <div class="card-body">
                    <div class="row">
                        <div class="col-7">
                           <h1 class="ml-2"><?=$this->datawork->count_data('add_vehicle',['id!='=>0]);?></h1>
                           <h6 class="my-3">Total Records</h6>
                        </div>
                        <div class="col-5">
                            <div class="mx-auto my-2">
                              <i class="fas fa-layer-group fa-4x"></i>
                            </div>
                        </div>
                    </div>
                 </div>
                 
             </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                   
                <div class="card rounded-0 border-0 shadow-sm bg-primary text-white">
                    <div class="card-body">
                       <div class="row">
                           <div class="col-7">
                              <h1 class="ml-2"><?=$this->datawork->datawork->column_sum('vehicle_limit','category');?></h1>
                              <h6 class="my-3">Total Parking Slots</h6>
                           </div>
                           <div class="col-5">
                               <div class="mx-auto my-2">
                                 <i class="fas fa-check-double fa-4x"></i>
                               </div>
                           </div>
                       </div>
                    </div>
                    
                </div>
            </div>
           </div>
        </div>
    </div>
</div>

<script>
function myFunction() {
    var x = document.getElementById("notification");
    if (x.style.display === "block") {
        x.style.display = "none";
    } 
    else {
        x.style.display = "none";
    }
}
</script>

<?php include('footer.php');?>
