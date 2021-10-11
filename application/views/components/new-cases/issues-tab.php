<div class="tab-pane fade" id="opponentthree" role="tabpanel" aria-labelledby="opponentthree-tab">


    <div class="card card-ls border-0 my-4">
        <table class="table border-0 table-ls table-bordered">
            <thead class="border-0">
                <tr class="border-0">
                    <th class="w-25">issue</th>
                    <th>description</th>
                    <th>evaluation</th>
                </tr>
            </thead>
            <tbody>

                <?php for($i=0; $i<=10; $i++) { ?>
                <tr>
                    <td> <input type="text" class="form-control input-ls-table" id="client" placeholder="write here">
                    </td>
                    <td><input type="text" class="form-control input-ls-table" id="client" placeholder="write here">
                    </td>
                    <td>

                        <div class="form-group m-0">
                            <select class="form-control input-ls-table" id="exampleFormControlSelect1">
                                <option>Select</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>

                    </td>
                </tr>
                <?php } ?>

            </tbody>
        </table>
    </div>



</div>