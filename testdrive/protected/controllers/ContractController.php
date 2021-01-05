<?php

use application\models\Contract;

class ContractController extends \CController
{
    public function actionMain()
    {
        $view = new Contract;

        return $this->render('/site/contract', [
            'contractArray' => $view->readXML()
        ]);
    }
}