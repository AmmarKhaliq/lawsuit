<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('includes/toplinks.php'); ?>
</head>

<body>
    <?php include('includes/navigation.php'); ?>



    <div class="main-bg-div-all">
        <form action="<?php echo base_url() . 'site/newstaff'; ?>">
            <div class="row justify-content-center justify-content-md-between align-items-center">
                <div class="col-12 col-md-8 col-xl-3">
                    <a href="<?php echo base_url() . 'site/newstaff'; ?>" class="text-decoration-none">
                        <button class="btn new-add-book">new person</button>
                    </a>
                </div>


                <div class="col-12 col-md-6 col-xl-2 p-0">
                    <div class="form-group mb-0">
                        <select class="form-control myn-select" id="sel1">
                            <option>By Alphabet</option>
                            <option>AAAAAAAAAAAAAAAAAAAAA</option>
                            <option>BBBBBBBBBBBBBBB</option>
                        </select>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-2 p-0">
                    <div class="form-group mb-0">
                        <select class="form-control myn-select" id="sel1">
                            <option>By Alphabet</option>
                            <option>AAAAAAAAAAAAAAAAAAAAA</option>
                            <option>BBBBBBBBBBBBBBB</option>
                        </select>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-2 p-0">
                    <div class="form-group mb-0">
                        <select class="form-control myn-select" id="sel1">
                            <option>By Alphabet</option>
                            <option>AAAAAAAAAAAAAAAAAAAAA</option>
                            <option>BBBBBBBBBBBBBBB</option>
                        </select>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-2 p-0">
                    <div class="form-group mb-0">
                        <select class="form-control myn-select" id="sel1">
                            <option>By Alphabet</option>
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
                                <tr>
                                    <th>
                                        <div>Full Name</div>
                                    </th>
                                    <th>
                                        <div>MTD</div>
                                    </th>
                                    <th>
                                        <div>MTD Last</div>
                                    </th>
                                    <th>
                                        <div>Total</div>
                                    </th>
                                    <th>
                                        <div>Telephone #</div>
                                    </th>
                                    <th>
                                        <div>Staff</div>
                                    </th>
                                    <th>
                                        <div>mobile #</div>
                                    </th>
                                </tr>
                            </thead>

                            <tbody>

                                <?php for($i=0; $i <= 30; $i++) { ?>

                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <p class="m-0 ml-2">Tiger
                                                <?php echo $i++ ?> Nixon
                                            </p>
                                        </div>
                                    </td>
                                    <td>  <span>$00.00</span> </td>
                                    <td><span>$00.00</span></td>
                                    <td><span>$00.00</span></td>
                                    <td>(918)-6767-2876
                                        <?php echo $i++ ?>
                                    </td>
                                    <td>Attorney</td>
                                    <td>(918)-6767-121
                                        <?php echo $i++ ?>
                                    </td>
                                </tr>

                                <?php } ?>
                            </tbody>
                        </table>
                    </section>
                </section>




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
    <!--end of main-div-all-->
















    <?php include('includes/bottom_links.php'); ?>
    <script>
        $(document).ready(function () {
            $('#example1').dataTable();
        });
    </script>

</body>

</html>