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

                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label class="label-ls" for="client">name:</label>
                        <input type="text" class="form-control input-ls" id="client" placeholder="write here">
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label class="label-ls" for="client">company name:</label>
                        <input type="text" class="form-control input-ls" id="client" placeholder="write here">
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label class="label-ls" for="client">company (short):</label>
                        <input type="text" class="form-control input-ls" id="client" placeholder="write here">
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label class="label-ls" for="client">address:</label>
                        <input type="text" class="form-control input-ls" id="client" placeholder="write here">
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label class="label-ls" for="client">city:</label>
                        <input type="text" class="form-control input-ls" id="client" placeholder="write here">
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label class="label-ls" for="client">state/province:</label>
                        <input type="text" class="form-control input-ls" id="client" placeholder="write here">
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label class="label-ls" for="client">zip code:</label>
                        <input type="text" class="form-control input-ls" id="client" placeholder="write here">
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label class="label-ls" for="client">email address:</label>
                        <input type="email" class="form-control input-ls" id="client" placeholder="write here">
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label class="label-ls" for="client">telephone#:</label>
                        <input type="text" class="form-control input-ls" id="client" placeholder="write here">
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label class="label-ls" for="client">website(url):</label>
                        <input type="text" class="form-control input-ls" id="client" placeholder="write here">
                    </div>
                </div>

                <div class="col-12 col-md-12">
                    <div class="form-group">
                        <label class="label-ls" for="client">how did you find us:</label>
                        <input type="text" class="form-control input-ls" id="client" placeholder="write here">
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label class="label-ls" for="client">monetary symbol:</label>
                        <input type="text" class="form-control input-ls" id="client" placeholder="write here">
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label class="label-ls" for="client">currency:</label>
                        <input type="text" class="form-control input-ls" id="client" placeholder="write here">
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label class="label-ls" for="client">import graphical letterhead:</label>

                        <div class="button-wrapper">
                            <span class="label">
                                click here to attach letterhead
                            </span>
                            <input type="file" name="upload" id="upload" class="upload-box" placeholder="Upload File">

                        </div>

                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label class="label-ls" for="client">import logo:</label>

                        <div class="button-wrapper">
                            <span class="label">
                                click here to attach logo
                            </span>
                            <input type="file" name="upload" id="upload" class="upload-box"
                                placeholder="click here to attach logo">

                        </div>

                    </div>
                </div>

                <div class="col-12 d-flex justify-content-end">
                    <a href="#/">
                        <button class="btn save-now-button" type="button">save now</button>
                    </a>
                </div>



            </div>



        </form>






        <?php include('includes/bottom_links.php'); ?>

</body>

</html>