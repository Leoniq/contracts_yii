<?php for ($i=0; $i < count($contractArray->contract); $i++): ?>
    <tr>
        <th scope="row"><?=$contractArray->contract[$i]->id?></th>
        <td><?=$contractArray->contract[$i]->contractType?></td>
        <td><?=$contractArray->contract[$i]->type?></td>
        <td>
            <?=$contractArray->contract[$i]->numberInternal?>
            <div class="status-permission">
                <span><?=$contractArray->contract[$i]->status?></span>
            </div>
        </td>
        <td>
            <ul class="list-group list-group-flush for-list-gr-fl">
                <?php
                $permOptions = ['A','B','C','D'];
                // Display specific options in $permOptions
                for ($permission = 0; $permission < count($permOptions); $permission++):
                    $contractArray->contract[$i]->permission == $permOptions[$permission] ?
                        $entryMarked = 'id=checkDefault' : $entryMarked = '';
                    ?>
                    <li class="list-group-item for-list-gr-it">
                        <div class="form-check for-form-ch">
                            <input type="radio" class="form-check-input target" <?=$entryMarked;?>
                                   name="groupOfMaterialRadios-<?=$contractArray->contract[$i]->id;?>"
                                   value="<?=$permOptions[$permission];?>">
                        </div>
                    </li>
                <?php endfor; ?>
            </ul>
        </td>
    </tr>
<?php endfor; ?>