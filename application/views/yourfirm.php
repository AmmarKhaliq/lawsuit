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
                        <label class="label-ls" for="exampleFormControlSelect1">Assigned to:</label>
                        <select class="form-control input-ls" id="exampleFormControlSelect1">
                            <option>Select</option>
                            <option>JACOB C MILLER,||</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label class="label-ls" for="exampleFormControlSelect1">Case/Client</label>
                        <select class="form-control input-ls" id="exampleFormControlSelect1">
                            <option>Select</option>
                            <option>JOHN FRANKS</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                </div>

                <div class="col-12 col-md-12">
                    <div class="form-group">
                        <label class="label-ls" for="client">Summary:</label>
                        <textarea class="form-control border-0" placeholder="Fox John, Lorem ipsum is simply" name=""
                            id="" cols="30" rows="10"></textarea>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-chec d-flex justify-content-between">
                        <label class="form-check-label text-uppercase font-weight-bolder" for="defaultCheck1">
                            REPEAT
                        </label>

                        <input class="checkbox-scale" type="checkbox" value="" id="defaultCheck1">

                    </div>
                    <input type="text" class="form-control input-ls" id="client" placeholder="Weekly">

                </div>

                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label class="label-ls" for="client">repeat limit:</label>
                        <input type="text" class="form-control input-ls" id="client" placeholder="00">
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="form-group">
                        <label class="label-ls" for="client">start date:</label>
                        <input type="date" class="form-control input-ls" id="client" placeholder="00">
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="form-group">
                        <label class="label-ls" for="client">end date:</label>
                        <input type="date" class="form-control input-ls" id="client" placeholder="00">
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="form-group">
                        <label class="label-ls" for="client">start time:</label>
                        <input type="time" class="form-control input-ls" id="client" placeholder="00">
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="form-group">
                        <label class="label-ls" for="client">end time:</label>
                        <input type="time" class="form-control input-ls" id="client" placeholder="00">
                    </div>
                </div>

            </div>


            <div class="row my-4">
                <div class="col-12 col-md-8">
                    <a href="#/" class="text-decoration-none">
                        <button class="btn form-buttons" type="button">cancel</button>
                    </a>

                    <a href="#/" class="text-decoration-none">
                        <button class="btn form-buttons" type="button">delete</button>
                    </a>
                </div>

                <div class="col-12 col-md-4 d-flex justify-content-end">
                    <a href="#/">
                        <button class="btn px-5 save-now-button" type="button">save</button>
                    </a>
                </div>
            </div>

        </form>

    </div>


    <?php include('includes/bottom_links.php'); ?>

</body>

</html>