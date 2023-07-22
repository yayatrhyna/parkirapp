<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple Parking Management System</title>
    <link rel="icon" href="<?=base_url('assets/images/ico.png');?>">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</head>
<body class="bg-dark text-light" style="font-family: Quicksand;">
    <div class="container my-3">
        <div class="row">
           <div class="col-lg-12">
               <h4><i class="fas fa-car-side text-primary"></i>&nbsp; <span class="text-primary">S</span>imple Parking Management System</h4>
               <hr class="border-light">
           </div>
       </div>
        <div class="row">
            <div class="col-lg-6 mx-auto mt-5">
               <?=$this->session->flashdata('error');?>
                <div class="card border-0 shadow-sm mt-4 text-dark">
                    <div class="card-body">
                        <h5 class="h5 text-center"><i class="fas fa-sign-in-alt text-primary"></i>&nbsp; Admin Login</h5>
                        <form action="<?=base_url('home/index');?>" method="post" class="mt-4">
                            <label class="m-0 p-0 text-muted">Username</label>
                            <input type="text" name="username" class="form-control form-control-sm shadow-none" required>
                            <label class="m-0 p-0 mt-2 text-muted">Password</label>
                            <input type="password" name="password" class="form-control form-control-sm shadow-none" required>
                            <input type="submit" class="btn btn-block mt-4 text-white bg-primary shadow-none rounded-pill" name="send" value="Login">
                        </form>
                        <div class="row">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-6 mt-5 mx-auto"><br><br>
                <p class="text-center small mt-4">&copy; <?php echo date("Y"); ?> SPMS | Developed in CodeIgniter Version <?= CI_VERSION ?></p>
            </div>
        </div>
    </div>
</body>
</html>