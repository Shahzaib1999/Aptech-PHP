
<?php

class salary{

    var $basic;
    var $hra;
    var $tax;

    function __construct($b){
        $this ->basic = $b;
    }

    function cal_hra(){
        $hra = $this -> basic * .7;
        return $hra;
    }

    function calc_ta(){
        $tax = $this -> basic * 0.04;
        return $tax;
    }

}

?>