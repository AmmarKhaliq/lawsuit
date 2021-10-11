<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('includes/toplinks.php'); ?>
</head>

<body>
    <?php include('includes/navigation.php'); ?>



    <div class="main-bg-div-all">
        <form action="<?php echo base_url() . 'site/newmessage'; ?>">
            <div class="row justify-content-center justify-content-md-between align-items-center">
                <div class="col-12 col-md-8 col-xl-5">
                    <a href="<?php echo base_url() . 'site/newmessage'; ?>" class="text-decoration-none">
                        <button class="btn new-add-book">new message</button>
                    </a>
                </div>

                <div class="col-12 col-md-6 col-xl-2 p-0">
                    <div class="form-group mb-0">
                        <select class="form-control myn-select" id="sel1">
                            <option>All Records</option>
                            <option>AAAAAAAAAAAAAAAAAAAAA</option>
                            <option>BBBBBBBBBBBBBBB</option>
                        </select>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-2 p-0">
                    <div class="form-group mb-0">
                        <select class="form-control myn-select" id="sel1">
                            <option>Sort By</option>
                            <option>AAAAAAAAAAAAAAAAAAAAA</option>
                            <option>BBBBBBBBBBBBBBB</option>
                        </select>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-2 p-0">
                    <div class="form-group mb-0">
                        <select class="form-control myn-select" id="sel1">
                            <option>Labels</option>
                            <option>AAAAAAAAAAAAAAAAAAAAA</option>
                            <option>BBBBBBBBBBBBBBB</option>
                        </select>
                    </div>
                </div>


            </div>


            <div class="table-start my-4 bg-white rounded p-4 shadow-sm">
                <section class="containr">
                    <section class="container-section">
                        <table id="example1" class="display table-responsiv" cellspacing="0" width="100%">
                            <thead>
                                <tr class="text-uppercase-ls">
                                    <th>
                                        <div>Date</div>
                                    </th>
                                    <th>
                                        <div>Priority</div>
                                    </th>
                                    <th>
                                        <div>caller</div>
                                    </th>
                                    <th>
                                        <div>phone#</div>
                                    </th>
                                    <th>
                                        <div>status</div>
                                    </th>
                                    <th>
                                        <div>message</div>
                                    </th>
                                    <th>
                                        <div> <i class="fa fa-ellipsis-v" aria-hidden="true"></i></div>
                                    </th>
                                </tr>
                            </thead>

                            <tbody>

                                <?php for($i=0; $i <= 30; $i++) { ?>

                                <tr>
                                    <td> <span>09/07/2021</span> </td>
                                    <td> <span>low</span> </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="<?php echo base_url() . 'assets/'; ?>images/21.png"
                                                class="img-fluid" alt="" width="40" height="40"
                                                class="rounded shadow-sm mr-4 ">
                                            <p class="m-0 ml-2">Tiger
                                                <?php echo $i++ ?> Nixon
                                            </p>
                                        </div>
                                    </td>

                                    <td>(122)-2233-1123
                                        <?php echo $i++ ?>
                                    </td>
                                    <td>opens
                                        <?php echo $i++ ?>
                                    </td>
                                    <td>john needs an attorney</td>
                                    <td><i class="fa fa-rotate-45 text-success fa-long-arrow-down fa-2x" aria-hidden="true"></i></td>
                                </tr>

                                <?php } ?>

                                <tr>
                                    <td> <span>09/07/2021</span> </td>
                                    <td> <span>low</span> </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="<?php echo base_url() . 'assets/'; ?>images/21.png"
                                                class="img-fluid" alt="" width="40" height="40"
                                                class="rounded shadow-sm mr-4 ">
                                            <p class="m-0 ml-2">Tiger
                                                 Nixon
                                            </p>
                                        </div>
                                    </td>

                                    <td>(122)-2233-1123
                                        
                                    </td>
                                    <td>opens
                                        
                                    </td>
                                    <td>john needs an attorney</td>
                                    <td><i class="fa fa-rotate-45 text-danger fa-long-arrow-down fa-2x" aria-hidden="true"></i></td>
                                </tr>
                            </tbody>
                        </table>
                    </section>
                </section>




            </div>




            <div class="d-flex my-5 justify-content-end">
                <a href="#/" class="text-decoration-none mr-3">
                    <button class="btn new-add-book">labels</button>
                </a>
                <a href="#/" class="text-decoration-none mr-3">
                    <button class="btn new-add-book">print</button>
                </a>
            </div>

        </form>

    </div>
    <!--end of main-div-all-->
















    <?php include('includes/bottom_links.php'); ?>
    <script>
        $(document).ready(function () {
            $('#example1').dataTable();
        });
    </script>

</body>

</html>