<div class="tab-pane fade" id="messages" role="tabpanel" aria-labelledby="evidence-tab">
    <div class="card card-ls border-0 my-4">
        <table class="table border-0 table-ls table-bordered">
            <thead class="border-0">
                <tr class="border-0">
                    <th>Date</th>
                    <th>client name</th>
                    <th class="w-25">contact info</th>
                    <th class="w-25">message</th>
                    <th></th>

                </tr>
            </thead>
            <tbody>
                <?php for($i=0; $i<=10; $i++) { ?>
                <tr>
                    <td><span>02/09/2021</span></td>
                    <td> <span>Franks, John F</span> </td>
                    <td> <i class="fa fa-phone" aria-hidden="true"></i> <span>(212)-2221-7858</span> </td>
                    <td> <span>john needs an attorney</span> </td>
                    <td> <i class="fa mr-3 fa-rotate-45 text-success fa-long-arrow-down " aria-hidden="true"></i>
                        <i class="fa mr-3 fa-envelope " aria-hidden="true"></i>
                        <i class="fa  fa-pencil " aria-hidden="true"></i>
                    </td>
                </tr>
                <?php } ?>

                <tr>
                    <td><span>02/09/2021</span></td>
                    <td> <span>Franks, John F</span> </td>
                    <td> <i class="fa fa-envelope" aria-hidden="true"></i> <span>john@john.com</span> </td>
                    <td> <span>john needs an attorney</span> </td>
                    <td> <i class="fa mr-3 fa-rotate-220 text-danger fa-long-arrow-down " aria-hidden="true"></i>
                        <i class="fa mr-3 fa-envelope " aria-hidden="true"></i>
                        <i class="fa  fa-pencil " aria-hidden="true"></i>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>