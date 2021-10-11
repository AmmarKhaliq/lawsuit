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


                <div class="col-12 col-md-12">
                    <div class="form-group">
                        <label class="label-ls" for="client">staff status:</label>
                        <input type="text" class="form-control input-ls" id="client" placeholder="write here">
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label class="label-ls" for="client">initials:</label>
                        <input type="text" class="form-control input-ls" id="client" placeholder="write here">
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label class="label-ls" for="client">date of birth:</label>
                        <input type="date" class="form-control input-ls" id="client" placeholder="write here">
                    </div>
                </div>

                <div class="col-12 col-md-12">
                    <div class="form-group">
                        <label class="label-ls" for="client">address:</label>
                        <input type="date" class="form-control input-ls" id="client" placeholder="write here">
                    </div>
                </div>

                <div class="col-12 col-md-4">
                    <div class="form-group">
                        <label class="label-ls" for="exampleFormControlSelect1">city:</label>
                        <select class="form-control input-ls" id="exampleFormControlSelect1">
                            <option>Select</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                </div>

                <div class="col-12 col-md-4">
                    <div class="form-group">
                        <label class="label-ls" for="exampleFormControlSelect1">state province:</label>
                        <select class="form-control input-ls" id="exampleFormControlSelect1">
                            <option>Select</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                </div>

                <div class="col-12 col-md-4">
                    <div class="form-group">
                        <label class="label-ls" for="client">zip code:</label>
                        <input type="text" class="form-control input-ls" id="client" placeholder="write here">
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label class="label-ls" for="client">firm:</label>
                        <input type="text" class="form-control input-ls" id="client" placeholder="write here">
                    </div>
                </div>


                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label class="label-ls" for="client">title:</label>
                        <input type="text" class="form-control input-ls" id="client" placeholder="write here">
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label class="label-ls" for="client">ss#:</label>
                        <input type="text" class="form-control input-ls" id="client" placeholder="write here">
                    </div>
                </div>


                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label class="label-ls" for="exampleFormControlSelect1">staff id:</label>
                        <select class="form-control input-ls" id="exampleFormControlSelect1">
                            <option>Select</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                </div>









            </div>


            <div class="row mb-4">
                <div class="col-12 col-md-8">
                    <a href="#/">
                        <button class="btn form-buttons" type="button">view map & directions</button>
                    </a>

                    <a href="#/">
                        <button class="btn form-buttons" type="button">print form</button>
                    </a>

                    <a href="#/">
                        <button class="btn form-buttons" type="button">email form</button>
                    </a>
                </div>

                <div class="col-12 col-md-4 d-flex justify-content-end">
                    <a href="#/">
                        <button class="btn save-now-button" type="button">save form</button>
                    </a>
                </div>
            </div>






            <?php include('includes/bottom_links.php'); ?>

</body>

</html>