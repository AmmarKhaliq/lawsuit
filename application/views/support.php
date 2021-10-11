<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('includes/toplinks.php'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/'; ?>css/cases.css">
</head>

<body>
    <?php include('includes/navigation.php'); ?>


    <div class="main-bg-div-all">

        <form action="">

            <div class="row my-5">

                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label class="label-ls" for="client">first name:</label>
                        <input type="text" class="form-control input-ls" id="client" placeholder="write here">
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label class="label-ls" for="client">last name:</label>
                        <input type="text" class="form-control input-ls" id="client" placeholder="write here">
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label class="label-ls" for="client">email address:</label>
                        <input type="email" class="form-control input-ls" id="client" placeholder="write here">
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label class="label-ls" for="client">phone number:</label>
                        <input type="tel" class="form-control input-ls" id="client" placeholder="write here">
                    </div>
                </div>

                <div class="col-12 col-md-12">
                    <div class="form-group">
                        <label class="label-ls" for="client">message:</label>
                        <textarea class="form-control border-0" placeholder="write here" name="" id="" cols="30"
                            rows="10"></textarea>
                    </div>
                </div>

                <div class="col-12 d-flex justify-content-between">
                <a href="#/">
                        <button class="btn save-now-button" type="button">report a bug</button>
                    </a>
                    <a href="#/">
                        <button class="btn save-now-button" type="button">send now</button>
                    </a>
                </div>


            </div>

        </form>

    </div>








    <?php include('includes/bottom_links.php'); ?>

</body>

</html>