<div class="tab-pane fade" id="events" role="tabpanel" aria-labelledby="events-tab">


    <div class="card card-ls border-0 my-4">
        <table class="table border-0 table-ls table-bordered">
            <thead class="border-0">
                <tr class="border-0">    
                    <th>date</th>
                    <th>start time </th>
                    <th>end time</th>
                    <th>due date</th>
                    <th>date name</th>
                    <th>summary</th>
                    <th class="w-25">who/assigned to</th>
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