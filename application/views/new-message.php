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

                <div class="col-12 col-md-4">
                    <div class="form-group">
                        <label class="label-ls" for="client">Date:</label>
                        <input type="date" class="form-control input-ls" id="client" placeholder="write here">
                    </div>
                </div>

                <div class="col-12 col-md-4">
                    <div class="form-group">
                        <label class="label-ls" for="client">time:</label>
                        <input type="time" class="form-control input-ls" id="client" placeholder="write here">
                    </div>
                </div>

                <div class="col-12 col-md-4">
                    <div class="form-group">
                        <label class="label-ls" for="exampleFormControlSelect1">due:</label>
                        <select class="form-control input-ls" id="exampleFormControlSelect1">
                            <option>Select</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                </div>





                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label class="label-ls" for="exampleFormControlSelect1">client name:</label>
                        <select class="form-control input-ls" id="exampleFormControlSelect1">
                            <option>Select</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label class="label-ls" for="client">status:</label>
                        <input type="text" class="form-control input-ls" id="client" placeholder="write here">
                    </div>
                </div>

                <div class="col-12 col-md-12">
                    <div class="form-group">
                        <label class="label-ls" for="exampleFormControlSelect1">assigned to:</label>
                        <select class="form-control input-ls" id="exampleFormControlSelect1">
                            <option>Select</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                </div>

                <div class="col-12 col-md-12">
                    <div class="form-group">
                        <label class="label-ls" for="client">note:</label>
                        <textarea class="form-control border-0" placeholder="write here" name="" id="" cols="30"
                            rows="10"></textarea>
                    </div>
                </div>

                <div class="col-12 col-md-12">
                    <div class="form-group">
                        <label class="label-ls" for="client">comment:</label>
                        <textarea class="form-control border-0" placeholder="write here" name="" id="" cols="30"
                            rows="10"></textarea>
                    </div>
                </div>
















            </div>




            <div class="row my-4">
                <div class="col-12 col-md-8">
                    <a href="#/" class="text-decoration-none">
                        <button class="btn form-buttons" type="button">delete</button>
                    </a>

                    <a href="#/" class="text-decoration-none form-buttons rounded ">
                        <button class="btn p-0 text-left text-white text-uppercase form- w-25" type="button">set color
                        </button>
                        <input type="checkbox" class="form-check-inpu" value="">
                    </a>

                    <a href="#/" class="text-decoration-none">
                        <button class="btn form-buttons" type="button">print</button>
                    </a>
                    <a href="#/" class="text-decoration-none">
                        <button class="btn form-buttons" type="button">send text </button>
                    </a>
                </div>

                <div class="col-12 col-md-4 d-flex justify-content-end">
                    <a href="#/">
                        <button class="btn save-now-button" type="button">save now</button>
                    </a>
                </div>
            </div>
        </form>











        <?php include('includes/bottom_links.php'); ?>

</body>

</html>