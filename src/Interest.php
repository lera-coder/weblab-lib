<?php


namespace Valery\InterestPack;


class Interest
{
    public $dept, $percent, $months;

    function __construct($dept, $percent, $months){
        $this -> dept = $dept;
        $this -> percent = $percent;
        $this -> months = $months;
    }

    public function compoundInterest(){
        if(!$this -> checkData()) return NULL;

        return  $this -> dept * pow(1 + $this -> percent / 100, $this -> months);
    }

    public function simpleInterest(){
        if(!$this -> checkData()) return NULL;

        return  $this -> dept * (1 + $this -> percent / 100 * $this -> months);
    }

    private function checkData(){
        if (gettype($this -> dept) != 'integer' && gettype($this -> dept) != 'double') return false;
        if (gettype($this -> percent) != 'integer' && gettype($this -> percent) != 'double') return false;
        if (gettype($this -> months) != 'integer' && gettype($this -> months) != 'double') return false;
        return true;
    }
}
