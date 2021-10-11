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

                <div class="col-12 col-md-6 col-lg-4">

                    <div class="bg-white  rounded-ls shadow">
                        <?php for($i=0; $i <=10; $i++) { ?>
                        <div class="Agreement-section">
                            <h3>Frank, John F</h3>
                            <p>
                                <a href="#/">244 5th avenue new york 10001 united sates</a>
                            </p>
                        </div>
                        <hr class="m-0">

                        <?php } ?>

                        <div class="Agreement-section">
                            <h3>Frank, John F</h3>
                            <p>
                                <a href="#/">244 5th avenue new york 10001 united sates</a>
                            </p>
                        </div>

                    </div>

                </div>

                <div class="col-12 col-md-6 col-lg-8">

                    <div class="mapp-section rounded-ls">
                        <div style="width: 100%;"><iframe class="rounded-ls" width="100%" height="900px" frameborder="0"
                                scrolling="no" marginheight="0" marginwidth="0"
                                src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=new%20york+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                        </div>
                    </div>

                </div>

            </div>


        </form>

    </div>








    <?php include('includes/bottom_links.php'); ?>

</body>

</html>