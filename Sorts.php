<?php
class Sorts extends Amain implements Isort{

    private $number;
    private $upper;
    private $low;
    private $trim;
    private $ar2;
    private $mainArray;

    public function __construct($array){
        foreach($array as $key =>$value){
            if(gettype($value)=='integer' || gettype($value)=='double'){
                $this->number[] = $value;
            }
            if (ctype_upper($value)){
                $this->upper[] = $value;
            }
            if (ctype_lower($value)){
                $this->low[] = $value;
            }
            if(strpos($value,' ') || ctype_digit($value)){
                $this->trim[]=$value;
            }
        }
    }

    protected function main(){
        $this->mainSort();
        $this->mainArray = array_merge($this->number,$this->low,$this->ar2,$this->trim);
    }

    private function mainSort(){
        sort($this->number);
        sort($this->low);
        foreach(self::$ar1 as $key => $value){
            foreach($this->upper as $ke => $val){
                if($value==$val){
                    $this->ar2[] = $val;
                }
            }
        }
        sort($this->trim);
    }

    public function display(){
        $this->main();
        foreach($this->mainArray as $value){
            echo $value.", ";
        }
    }

}