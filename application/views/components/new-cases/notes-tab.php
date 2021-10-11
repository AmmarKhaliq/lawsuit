<div class="tab-pane fade" id="notes" role="tabpanel" aria-labelledby="notes-tab">


    <div class="card card-ls border-0 my-4">
        <table class="table border-0 table-ls table-bordered">
            <thead class="border-0">
                <tr class="border-0">
                    <th>Date</th>
                    <th>time</th>
                    <th class="w-50">note</th>                   
                    <th>linked to issue</th>
                   
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
                   
                </tr>
                <?php } ?>

            </tbody>
        </table>
    </div>



</div>