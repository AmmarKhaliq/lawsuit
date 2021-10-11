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
                        <label class="label-ls" for="client">title:</label>
                        <input type="text" class="form-control input-ls" id="client" placeholder="write here">
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label class="label-ls" for="client">isbn:</label>
                        <input type="text" class="form-control input-ls" id="client" placeholder="write here">
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label class="label-ls" for="exampleFormControlSelect1">author:</label>
                        <select class="form-control input-ls" id="exampleFormControlSelect1">
                            <option>Select</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label class="label-ls" for="client">acquiered:</label>
                        <input type="text" class="form-control input-ls" id="client" placeholder="write here">
                    </div>
                </div>


                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label class="label-ls" for="exampleFormControlSelect1">publisher:</label>
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
                        <label class="label-ls" for="client">h:</label>
                        <input type="text" class="form-control input-ls" id="client" placeholder="write here">
                    </div>
                </div>

                <div class="col-12 col-md-4">
                    <div class="form-group">
                        <label class="label-ls" for="client">w:</label>
                        <input type="text" class="form-control input-ls" id="client" placeholder="write here">
                    </div>
                </div>

                <div class="col-12 col-md-4">
                    <div class="form-group">
                        <label class="label-ls" for="client">l:</label>
                        <input type="text" class="form-control input-ls" id="client" placeholder="write here">
                    </div>
                </div>


                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label class="label-ls" for="exampleFormControlSelect1">category:</label>
                        <select class="form-control input-ls" id="exampleFormControlSelect1">
                            <option>Select</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label class="label-ls" for="exampleFormControlSelect1">type:</label>
                        <select class="form-control input-ls" id="exampleFormControlSelect1">
                            <option>Select</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                </div>

                <div class="col-12 col-md-12">
                    <div class="form-group">
                        <label class="label-ls" for="client">location:</label>
                        <input type="text" class="form-control input-ls" id="client" placeholder="write here">
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label class="label-ls" for="client">lccn#:</label>
                        <input type="text" class="form-control input-ls" id="client" placeholder="write here">
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label class="label-ls" for="client"># of pages:</label>
                        <input type="text" class="form-control input-ls" id="client" placeholder="write here">
                    </div>
                </div>


            </div>


            <div class="row mb-4">
                <div class="col-12 col-md-8">
                    <a href="#/">
                        <button class="btn form-buttons" type="button">view map</button>
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

        </form>


    </div>

















    <?php include('includes/bottom_links.php'); ?>

</body>

</html>