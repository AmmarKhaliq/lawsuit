<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('includes/toplinks.php'); ?>
</head>

<body>
    <?php include('includes/navigation.php'); ?>



    <div class="main-bg-div-all">
        <form action="">
            <div class="row justify-content-center justify-content-md-end align-items-center">

                <div class="col-12 col-md-6 col-xl-2 p-0">
                    <div class="form-group mb-0">
                        <select class="form-control myn-select" id="sel1">
                            <option>By Alphabets</option>
                            <option>AAAAAAAAAAAAAAAAAAAAA</option>
                            <option>BBBBBBBBBBBBBBB</option>
                        </select>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-xl-2 p-0">
                    <div class="form-group mb-0">
                        <select class="form-control myn-select" id="sel1">
                            <option>Cash flow Reports/Active accounts</option>
                            <option>AAAAAAAAAAAAAAAAAAAAA</option>
                            <option>BBBBBBBBBBBBBBB</option>
                        </select>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-xl-2 p-0">
                    <div class="form-group mb-0">
                        <select class="form-control myn-select" id="sel1">
                            <option>All Reports</option>
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
                                        <div>Active/Acount Name</div>
                                    </th>
                                    <th>
                                        <div>Account #</div>
                                    </th>
                                    <th>
                                        <div>Balance</div>
                                    </th>
                                </tr>
                            </thead>

                            <tbody>

                                <?php for($i=0; $i <= 30; $i++) { ?>

                                <tr>
                                    <td>lore ipsum is simply</td>
                                    <td>jJH2223334444
                                        <?php echo $i++ ?>
                                    </td>
                                    <td>$67698987
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
                    <button class="btn button-ls-finance ">print</button>
                </a>
                <a href="#/" class="text-decoration-none mr-3">
                    <button class="btn button-ls-finance ">quick reports</button>
                </a>
                <a href="#/" class="text-decoration-none">
                    <button class="btn button-ls-finance ">show subset</button>
                </a>

                <a href="#/" class="text-decoration-none mr-3">
                    <button class="btn button-ls-finance ">barcode-label</button>
                </a>

                <a href="#/" class="text-decoration-none mr-3">
                    <button class="btn button-ls-finance ">search by barcode</button>
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