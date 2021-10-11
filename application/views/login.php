<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('includes/toplinks.php'); ?>
   
</head>

<body class="bg-light">
 


<!-- Content -->
<div class="main">

<div class="container">
            <div class="row align-items-center" style="height: 100vh;">
                <div class="col-12 col-sm-6">
                    <div class="share-div text-center">
                        <img src="<?php echo base_url() . 'assets/'; ?>images/logo.png" class="img-fluid" alt="">   
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="main-login bg-white rounded p-4">
                        <form action="<?php echo base_url() . 'site/caseshome'; ?>" method="post">
                            <input type="email" required class="form-control mb-4 my-form-control" placeholder="User name / Email">
                            <input type="password" required class="form-control mb-4 my-form-control" placeholder="password">
                            <a class="text-white">
                                <button type="submit" class="btn btn-info btn-block my-btn">Log In</button>
                            </a>

                        </form>
                    </div>
                </div>
            </div>
    </div>


</div>
















    <?php include('includes/bottom_links.php'); ?>
    

</body>

</html>