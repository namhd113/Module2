<?php
class ArrayList
{
    public $arrayList;

    public function ArrayList($arr = "")
    {
        if (is_array($arr) == true)
            $this->arrayList = $arr;
        else
            $this->arrayList = array();
    }
}