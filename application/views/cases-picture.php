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

                <div class="col-12 col-md-5 col-lg-4">

                    <div class="bg-white  rounded-ls shadow">
                        <?php for($i=0; $i <=7; $i++) { ?>
                        <div class="Agreement-section">

                            <h5><i class="fa mr-2 fa-plus-square" aria-hidden="true"></i>New York</h5>
                            <p>
                                <a href="#/">244 5th avenue new york 10001 united sates</a>
                            </p>
                        </div>
                        <hr class="m-0">

                        <?php } ?>

                        <div class="Agreement-section">
                            <h5><i class="fa mr-2 fa-plus-square" aria-hidden="true"></i> New York</h5>
                            <p>
                                <a href="#/">244 5th avenue new york 10001 united sates</a>
                            </p>
                        </div>

                    </div>

                </div>

                <div class="col-12 col-md-7 col-lg-8">

                    <div class="bg-white px-3 py-3 rounded-ls shadow">


                        <div class="row">
                            <?php for($i=0; $i <=8; $i++) { ?>
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="ml-2 imgList">
                                    <a href="#/">
                                        <img src="<?php echo base_url() . 'assets/'; ?>images/profile.jpg"
                                            class="img-fluid img-profile-cases w-100 mb-4 rounded-ls" alt="">

                                        <div class="imgText justify-content-center m-auto">
                                            <span class="m-0">kelly madison</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <?php } ?>
                        </div>

                    </div>

                </div>

            </div>


        </form>

    </div>








    <?php include('includes/bottom_links.php'); ?>

</body>

</html>