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
                        <label class="label-ls" for="exampleFormControlSelect1">Branch</label>
                        <select class="form-control input-ls" id="exampleFormControlSelect1">
                            <option>Select</option>
                            <option>Irvine Office</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label class="label-ls" for="exampleFormControlSelect1">Client</label>
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
                        <label class="label-ls" for="client">Email address</label>
                        <input type="email" class="form-control input-ls" id="client"
                            placeholder="lopezperezlaw@gmail.com">
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label class="label-ls" for="exampleFormControlSelect1">staff</label>
                        <select class="form-control input-ls" id="exampleFormControlSelect1">
                            <option>Select</option>
                            <option>COURT,RON</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                </div>

                <div class="col-12 col-md-12">
                    <div class="form-group">
                        <label class="label-ls" for="client">cases</label>
                        <input type="text" class="form-control input-ls" id="client" placeholder="write here">
                    </div>
                </div>


                <div class="checkboxes col-12 d-flex">
                    <div class="form-check">
                        <input class="form-check-input  checkbox-scale" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label ml-2 text-uppercase font-weight-bolder" for="defaultCheck1">
                            can edit
                        </label>
                    </div>

                    <div class="form-check ml-5">
                        <input class="form-check-input  checkbox-scale" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label ml-2 text-uppercase font-weight-bolder" for="defaultCheck1">
                            can delete
                        </label>
                    </div>

                    <div class="form-check ml-5">
                        <input class="form-check-input  checkbox-scale" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label ml-2 text-uppercase font-weight-bolder" for="defaultCheck1">
                            can view
                        </label>
                    </div>

                    <div class="form-check ml-5">
                        <input class="form-check-input  checkbox-scale" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label ml-2 text-uppercase font-weight-bolder" for="defaultCheck1">
                            can print
                        </label>
                    </div>

                </div>

            </div>

            <div class="row justify-content-end text-right">
                <div class="col-12 col-md-4">
                    <a href="#/">
                        <button class="btn save-now-button" type="button">add it to sharing list</button>
                    </a>
                </div>
            </div>


        </form>

        <div class="card card-ls border-0 my-4">
            <table class="table border-0 table-ls table-bordered">
                <thead class="border-0">
                    <tr class="border-0">
                        <th class="w-25">Email Address</th>
                        <th>Can view</th>
                        <th>Can edit</th>
                        <th>Can delete</th>
                        <th class="w-25">Can Print</th>
                        <th></th>

                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td><span>lopezperezlaw@gmail.com</span></td>
                        <td> <span>Yes</span> </td>
                        <td> <span>Yes</span> </td>
                        <td> <span>Yes</span> </td>
                        <td> <span>Yes</span> </td>
                        <td>
                            <a href="#/"> <i class="fa text-decoration-none text-dark mr-3 fa-trash "
                                    aria-hidden="true"></i></a>
                            <a href="#/"> <i class="fa text-decoration-none text-dark  fa-pencil "
                                    aria-hidden="true"></i></a>
                        </td>
                    </tr>

                    <tr>
                        <td><span>lopezperezlaw@gmail.com</span></td>
                        <td> <span>Yes</span> </td>
                        <td> <span>Yes</span> </td>
                        <td> <span>Yes</span> </td>
                        <td> <span>Yes</span> </td>
                        <td>
                            <a href="#/"> <i class="fa text-decoration-none text-dark mr-3 fa-trash "
                                    aria-hidden="true"></i></a>
                            <a href="#/"> <i class="fa text-decoration-none text-dark fa-pencil "
                                    aria-hidden="true"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="card card-ls border-0 my-4">
            <table class="table border-0 table-ls table-bordered">
                <thead class="border-0">
                    <tr class="border-0">
                        <th class="w-25">Selection</th>
                        <th class="w-25">Case Name</th>
                        <th>Request By Staff</th>
                        <th>Status</th>
                        <th class="w-25"></th>

                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td><span>Open</span></td>
                        <td> <span>Miramotes, Antoni B VBC Company</span> </td>
                        <td> <span>Kot, Ron</span> </td>
                        <td> <span>Pending</span> </td>
                        <td>
                            <a href="#/" class="text-uppercase allow-request mr-2 text-dark"> allow
                                request </a>
                            <a href="#/" class="text-uppercase allow-request text-dark"> deny
                                request </a>
                        </td>
                    </tr>
                    <tr>
                        <td><span>Open</span></td>
                        <td> <span>Miramotes, Antoni B VBC Company</span> </td>
                        <td> <span>Kot, Ron</span> </td>
                        <td> <span>Pending</span> </td>
                        <td>
                            <a href="#/" class="text-uppercase allow-request mr-2 text-dark"> allow
                                request </a>
                            <a href="#/" class="text-uppercase allow-request text-dark"> deny
                                request </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>

    <?php include('includes/bottom_links.php'); ?>
</body>

</html>