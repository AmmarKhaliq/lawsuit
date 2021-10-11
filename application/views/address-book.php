<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('includes/toplinks.php'); ?>
</head>

<body>
    <?php include('includes/navigation.php'); ?>



    <div class="main-bg-div-all">
        <form action="<?php echo base_url() . 'site/newaddressbook'; ?>">
            <div class="row justify-content-center justify-content-md-between align-items-center">
                <div class="col-12 col-md-8 col-xl-3">
                    <a href="<?php echo base_url() . 'site/newaddressbook'; ?>" class="text-decoration-none">
                        <button class="btn new-add-book">new address book</button>
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
                                        <div>Name</div>
                                    </th>
                                    <th>
                                        <div>Company</div>
                                    </th>
                                    <th>
                                        <div>Category</div>
                                    </th>
                                    <th>
                                        <div>Telephone/Fax #</div>
                                    </th>
                                    <th>
                                        <div>Email</div>
                                    </th>
                                    <th>
                                        <div>Address</div>
                                    </th>
                                    <th>
                                        <div>Note</div>
                                    </th>
                                </tr>
                            </thead>

                            <tbody>

                                <?php for($i=0; $i <= 30; $i++) { ?>

                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <p class="m-0 ml-2">Johnson
                                                <?php echo $i++ ?> Bob
                                            </p>
                                        </div>
                                    </td>
                                    <td>Lewis Associates</td>
                                    <td>Attorney</td>
                                    <td>(212)-112-1137</td>
                                    <td>JacobCmille
                                        <?php echo $i++ ?>@aol.com
                                    </td>
                                    <td>244 5th Avenue New York USA</td>
                                    <td>Lorem Ipsum</td>
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