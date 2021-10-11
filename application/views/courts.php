<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('includes/toplinks.php'); ?>
</head>

<body>
    <?php include('includes/navigation.php'); ?>



    <div class="main-bg-div-all">
        <form action="">

            <div class="table-start my-4 bg-white rounded p-4 shadow-sm">
                <section class="containr">
                    <section class="container-section">
                        <table id="example1" class="display table-responsiv" cellspacing="0" width="100%">
                            <thead>
                                <tr class="text-uppercase-ls">
                                    <th>
                                        <div>id</div>
                                    </th>
                                    <th>
                                        <div>active</div>
                                    </th>
                                    <th>
                                        <div>court name</div>
                                    </th>
                                    <th>
                                        <div>Address</div>
                                    </th>
                                    <th>
                                        <div>Judge Name</div>
                                    </th>
                                    <th>
                                        <div>departement #</div>
                                    </th>
                                    <th>
                                        <div>telephone/fax#</div>
                                    </th>
                                </tr>
                            </thead>

                            <tbody>

                                <?php for($i=0; $i <= 50; $i++) { ?>

                                <tr>
                                    <td> <span>
                                            <?php echo $i++ ?>
                                        </span> </td>
                                    <td> <span>yes</span> </td>
                                    <td>
                                        <span>United states federal court</span>
                                    </td>
                                    <td>Superior court of california
                                    </td>

                                    <td> Johnson bob
                                    </td>
                                    <td>FA-98
                                        <?php echo $i++ ?>
                                    </td>
                                    <td>(212)-2223-4567
                                        <?php echo $i++ ?>
                                    </td>
                                </tr>

                                <?php } ?>
                            </tbody>
                        </table>
                    </section>
                </section>




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