<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('includes/toplinks.php'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/'; ?>css/cases.css">
</head>

<body>
    <?php include('includes/navigation.php'); ?>


    <div class="main-bg-div-all">
        <div class="inputs-lss mb-5">
            <form action="#">

                <?php include('components/cases-inputs.php'); ?>


                <div class="tabs-and-pills-section">


                    <?php include('components/new-cases/tabs-pills-newcases.php'); ?>



                    <div class="tab-content" id="pills-tabContent">

                        <!--start of general tab-->
                        <?php include('components/new-cases/general-tab.php'); ?>
                        <!--end of general tab-->

                        <!--start of client tab-->
                        <?php include('components/new-cases/client-tab.php'); ?>
                        <!--end of client tab-->


                        <!--start of client2 tab-->
                        <?php include('components/new-cases/clienttwo-tab.php'); ?>
                        <!--end of client2 tab-->

                        <!--start of client3 tab-->
                        <?php include('components/new-cases/clientthree-tab.php'); ?>
                        <!--end of client3 tab-->

                        <!--start of opponent tab-->
                        <?php include('components/new-cases/opponent-tab.php'); ?>
                        <!--end of opponent tab-->

                        <!--start of opponenttwo tab-->
                        <?php include('components/new-cases/opponenttwo-tab.php'); ?>
                        <!--end of opponenttwo tab-->


                        <!--start of issues tab-->
                        <?php include('components/new-cases/issues-tab.php'); ?>
                        <!--end of issues tab-->


                        <!--start of facts tab-->
                        <?php include('components/new-cases/facts-tab.php'); ?>
                        <!--end of facts tab-->

                        <!--start of evidence tab-->
                        <?php include('components/new-cases/evidence-tab.php'); ?>
                        <!--end of evidence tab-->

                        <!--start of property tab-->
                        <?php include('components/new-cases/property-tab.php'); ?>
                        <!--end of property tab-->


                        <!--start of questions tab-->
                        <?php include('components/new-cases/questions-tab.php'); ?>
                        <!--end of questions tab-->

                        <!--start of notes tab-->
                        <?php include('components/new-cases/notes-tab.php'); ?>
                        <!--end of notes tab-->

                        <!--start of billing tab-->
                        <?php include('components/new-cases/billing-tab.php'); ?>
                        <!--end of billing tab-->

                        <!--start of witnesses tab-->
                        <?php include('components/new-cases/witnesses-tab.php'); ?>
                        <!--end of witnesses tab-->

                        <!--start of events tab-->
                        <?php include('components/new-cases/events-tab.php'); ?>
                        <!--end of events tab-->

                        <!--start of dates tab-->
                        <?php include('components/new-cases/dates-tab.php'); ?>
                        <!--end of dates tab-->

                        <!--start of times tab-->
                        <?php include('components/new-cases/times-tab.php'); ?>
                        <!--end of times tab-->


                        <!--start of court tab-->
                        <?php include('components/new-cases/court-tab.php'); ?>
                        <!--end of court tab-->


                         <!--start of court tab-->
                         <?php include('components/new-cases/messages-tab.php'); ?>
                        <!--end of court tab-->

                         <!--start of court tab-->
                         <?php include('components/new-cases/document-tab.php'); ?>
                        <!--end of court tab-->

                         <!--start of court tab-->
                         <?php include('components/new-cases/forms-tab.php'); ?>
                        <!--end of court tab-->

                    </div>

                </div>




                <div class="row mt-4">
                    <div class="col-12 col-md-10">
                        <a href="#/">
                            <button class="btn form-buttons" type="button">stop watch</button>
                        </a>

                        <a href="#/">
                            <button class="btn form-buttons" type="button">duplicate record</button>
                        </a>

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

                    <div class="col-12 col-md-2 d-flex justify-content-end">
                        <a href="#/">
                            <button class="btn save-now-button" type="button">save now</button>
                        </a>
                    </div>
                </div>

            </form>
        </div>
    </div>



















    <?php include('includes/bottom_links.php'); ?>

</body>

</html>