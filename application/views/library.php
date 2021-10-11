<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('includes/toplinks.php'); ?>
</head>

<body>
    <?php include('includes/navigation.php'); ?>



    <div class="main-bg-div-all">
        <form action="<?php echo base_url() . 'site/newlibrary'; ?>">
            <div class="row justify-content-center justify-content-md-between align-items-center">
                <div class="col-12 col-md-8 col-xl-3">
                    <a href="<?php echo base_url() . 'site/newlibrary'; ?>" class="text-decoration-none">
                        <button class="btn new-add-book">new book</button>
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
                            <option>Sort</option>
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
                                        <div>qut</div>
                                    </th>
                                    <th>
                                        <div>title</div>
                                    </th>
                                    <th>
                                        <div>author</div>
                                    </th>
                                    <th>
                                        <div>category</div>
                                    </th>
                                    <th>
                                        <div>publisher</div>
                                    </th>

                                </tr>
                            </thead>

                            <tbody>

                                <?php for($i=0; $i <= 30; $i++) { ?>

                                <tr>
                                    <td>
                                        <?php echo $i++ ?>
                                    </td>
                                    <td>lorem ipsum is simply
                                    </td>
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

                                    <td><span>Johnson Bob</span> </td>
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
                                </tr>

                                <?php } ?>
                            </tbody>
                        </table>
                    </section>
                </section>




            </div>



            <div class="d-flex my-5 justify-content-end">
                <a href="#/" class="text-decoration-none mr-3">
                    <button class="btn new-add-book ">print</button>
                </a>
                <a href="#/" class="text-decoration-none mr-3">
                    <button class="btn new-add-book ">quick reports</button>
                </a>
                <a href="#/" class="text-decoration-none mr-3">
                    <button class="btn new-add-book ">show subset</button>
                </a>

                <a href="#/" class="text-decoration-none mr-3">
                    <button class="btn new-add-book ">barcode-label</button>
                </a>

                <a href="#/" class="text-decoration-none mr-3">
                    <button class="btn new-add-book ">search by barcode</button>
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