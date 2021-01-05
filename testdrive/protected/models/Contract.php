<?php

namespace application\models;

class Contract
{
    public $id;
    public $type;
    public $contractType;
    public $status;
    public $contractID;
    public $numberInternal;
    public $numberPan;
    public $currency;
    public $openDate;
    public $closeDate;
    public $permission;

    public function readXML()
    {
        return simplexml_load_file('protected/data/account_list.xml');
    }

}