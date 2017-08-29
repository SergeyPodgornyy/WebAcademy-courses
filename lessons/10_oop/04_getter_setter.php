<?php

class Test
{
    private $val;

    public function getVal()
    {
        return $this->val;
    }

    public function setVal($val)
    {
        $this->val = $val;
    }
}

$obj = new Test;

$obj->setVal('Some value');

echo $obj->getVal();    // Output: 'Some value'
