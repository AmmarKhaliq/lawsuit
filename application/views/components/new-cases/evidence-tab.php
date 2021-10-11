<div class="tab-pane fade" id="evidence" role="tabpanel" aria-labelledby="evidence-tab">


    <div class="card card-ls border-0 my-4">
        <table class="table border-0 table-ls table-bordered">
            <thead class="border-0">
                <tr class="border-0">
                    <th>Rec'</th>
                    <th class="w-25">evidence/info needed</th>
                    <th class="w-25">addmittedly/get</th>
                    <th>description</th>
                    <th >date</th>
                    <th class="w-25">date recieved</th>
                    <th>upload</th>

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
                    <td> <i class="fa fa-upload" aria-hidden="true"></i> PHOTOS OR DOC
 
                    </td>
                  
                </tr>
                <?php } ?>

            </tbody>
        </table>
    </div>



</div>