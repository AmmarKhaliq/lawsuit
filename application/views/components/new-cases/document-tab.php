<div class="tab-pane fade" id="documents" role="tabpanel" aria-labelledby="documents-tab">
    <div class="card card-ls border-0 my-4">
        <table class="table border-0 table-ls table-bordered">
            <thead class="border-0">
                <tr class="border-0">
                    <th>Type/Date</th>
                    <th>description</th>
                    <th>doc#1</th>
                    <th>doc#2</th>
                    <th>doc#3</th>
                    <th>doc#4</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php for($i=0; $i<=10; $i++) { ?>
                <tr>
                    <td> <span>2/09/21</span> </td>
                    <td> <span>lorem ipsum is simply a dummy text</span> </td>
                    <td> <a href="#/" class="text-dark text-decoration-none"> Preview</a> </td>
                    <td> <a href="#/" class="text-dark text-decoration-none"> Preview</a> </td>
                    <td> <a href="#/" class="text-dark text-decoration-none"> Preview</a> </td>
                    <td> <a href="#/" class="text-dark text-decoration-none"> Preview</a> </td>
                    <td>
                        <a href="#/" class="text-dark text-decoration-none">
                            <i class="fa fa-pencil" aria-hidden="true"></i></a>
                        <a href="#/" class="text-dark text-decoration-none">
                            <i class="fa fa-trash" aria-hidden="true"></i></a>
                        <a href="#/" class="text-dark text-decoration-none">
                            <i class="fa fa-eye" aria-hidden="true"></i></a>

                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>