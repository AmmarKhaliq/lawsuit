<div class="tab-pane fade" id="facts" role="tabpanel" aria-labelledby="facts-tab">


    <div class="card card-ls border-0 my-4">
        <table class="table border-0 table-ls table-bordered">
            <thead class="border-0">
                <tr class="border-0">
                    <th>date</th>
                    <th>time</th>
                    <th>facts</th>
                    <th>ke</th>
                    <th class="w-25">facts status</th>
                    <th>evaluation</th>
                    <th class="w-25">linked to issue</th>
                </tr>
            </thead>
            <tbody>

                <?php for($i=0; $i<=10; $i++) { ?>
                <tr>
                    <td> <input type="text" class="form-control input-ls-table" id="client" placeholder="write here">
                    </td>
                    <td><input type="text" class="form-control input-ls-table" id="client" placeholder="write here">
                    </td>
                    <td><input type="text" class="form-control input-ls-table" id="client" placeholder="write here">
                    </td>
                    <td><input type="text" class="form-control input-ls-table" id="client" placeholder="write here">
                    </td>
                    <td><input type="text" class="form-control input-ls-table" id="client" placeholder="write here">
                    </td>
                    <td><input type="text" class="form-control input-ls-table" id="client" placeholder="write here">
                    </td>
                    <td><input type="text" class="form-control input-ls-table" id="client" placeholder="write here">
                    </td>
                </tr>
                <?php } ?>

            </tbody>
        </table>
    </div>



</div>