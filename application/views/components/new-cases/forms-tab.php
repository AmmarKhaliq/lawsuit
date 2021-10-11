<div class="tab-pane fade" id="forms" role="tabpanel" aria-labelledby="documents-tab">
    <div class="card card-ls border-0 my-4">
        <table class="table border-0 table-ls table-bordered">
            <thead class="border-0">
                <tr class="border-0">
                    <th > <span class="font-weight-bolder"> show on palette / form name / date created / date modified / </span></th>
                    <th><span class="font-weight-bolder"> click the column title to sort </span></th>
                </tr>
            </thead>
            <tbody>
                <?php for($i=0; $i<=10; $i++) { ?>
                <tr>
                    <td>
  <input class="mr-4" type="checkbox" value="" id="defaultCheck1">

<a href="#/"> <button class="btn btn-forms-tab">Edit</button> </a>
<a href="#/"> <button class="btn btn-forms-tab">print</button> </a>
<a href="#/"> <button class="btn btn-forms-tab">duplicate</button> </a>
<a href="#/"> <button class="btn btn-forms-tab">delete</button> </a>



</td>
                    <td> <span>Agreement to sell buisness</span> <p>00/00/0000 00/00/0000</p> </td>
                   
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>