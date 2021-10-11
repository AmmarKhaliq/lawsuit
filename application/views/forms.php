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

            <div class="row justify-content-center justify-content-md-end align-items-center">

                <div class="col-12 d-flex justify-content-md-end">
                    <div class="form-group mb-0">
                        <select class="form-control form-select" id="sel1">
                            <option>All</option>
                            <option>AAAAAAAAAAAAAAAAAAAAA</option>
                            <option>BBBBBBBBBBBBBBB</option>
                        </select>
                    </div>
                </div>

            </div>

            <div class="row my-5">

                <div class="col-12 col-md-6 col-lg-4">

                    <div class="bg-white  rounded-ls shadow">
                        <?php for($i=0; $i <=10; $i++) { ?>
                        <div class="Agreement-section">
                            <p>
                                <a href="#/">Agreement to attach marital counselling</a>
                            </p>
                        </div>
                        <hr class="m-0">

                        <?php } ?>

                        <div class="Agreement-section">
                            <p>
                                <a href="#/">Agreement to attach marital counselling</a>
                            </p>
                        </div>

                    </div>

                </div>

                <div class="col-12 col-md-6 col-lg-4">

                    <div class="bg-white  rounded-ls shadow">
                        <?php for($i=0; $i <=10; $i++) { ?>
                        <div class="Agreement-section">
                            <p>
                                <a href="#/">Agreement to attach marital counselling</a>
                            </p>
                        </div>
                        <hr class="m-0">

                        <?php } ?>

                        <div class="Agreement-section">
                            <p>
                                <a href="#/">Agreement to attach marital counselling</a>
                            </p>
                        </div>

                    </div>

                </div>

                <div class="col-12 col-md-6 col-lg-4">

                    <div class="bg-white  rounded-ls shadow">
                        <?php for($i=0; $i <=10; $i++) { ?>
                        <div class="Agreement-section">
                            <p>
                                <a href="#/">Agreement to attach marital counselling</a>
                            </p>
                        </div>
                        <hr class="m-0">

                        <?php } ?>

                        <div class="Agreement-section">
                            <p>
                                <a href="#/">Agreement to attach marital counselling</a>
                            </p>
                        </div>

                    </div>

                </div>

            </div>


            <div class="d-flex my-5 justify-content-end">
                <a href="#/" class="text-decoration-none mr-3">
                    <button class="btn new-add-book">Save form</button>
                </a>
                <a href="#/" class="text-decoration-none mr-3">
                    <button class="btn new-add-book">Email form</button>
                </a>
                <a href="#/" class="text-decoration-none">
                    <button class="btn new-add-book">Print form</button>
                </a>
            </div>


        </form>

    </div>








    <?php include('includes/bottom_links.php'); ?>

</body>

</html>