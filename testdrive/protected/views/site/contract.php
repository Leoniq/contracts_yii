<table class="table table-striped" style="margin: auto; max-width: 800px">
 <tbody>
    <tr>
        <td>
            <ul class="list-group list-group-flush for-list-gr-fl">
                <?php
                // Display specific options in $permOptions
                $permOptions = ['A'=>'Activate a bank account','B'=>'Arrange list','C'=>'Hide account','D'=>'Deactivate account'];
                foreach ($permOptions as $key => $value):
                    ?>
                    <li class="list-group-item for-list-gr-it">
                        <div class="form-check for-form-ch">
                            <input type="radio" class="form-check-input target" name="SelectAllGroup" value="<?=$key?>">
                            <span class="tooltiptext"><?=$value?></span>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </td>
    </tr>
 </tbody>
</table>
<table class="table table-striped" style="margin: auto; max-width: 800px">
  <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Contract type</th>
        <th scope="col">Product code</th>
        <th scope="col">Account number</th>
        <th scope="col">Availability</th>
    </tr>
  </thead>
  <tbody>

    <?php require_once("menu_contract.php");?>

  </tbody>
</table>