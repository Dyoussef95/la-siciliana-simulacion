<?php
class Distribuciones{
    public function g(){
        $n0=rand(1,20);
        $a=rand(1,20);
        $c=rand(1,20);
        $m=rand(21,40);
        $bandera=0;

        for($i=1;$i<$m;$i++){
            if($bandera==0){
                $n0=($a*$n0+$c) % $m;
                $bandera=1;
            }else{
                $n0=($a*$n0+$c) % $m;
            }
            
        }
        $u=$n0/$m; 
        return $u;
    }

    public function normal($m,$d){
       
        do{
            $sum=0;
        for($i=1;$i<12;$i++){
           $u=$this->g(); 
           $sum=$sum+$u;
        }
        $x=$d*($sum-6)+$m;
        }while($x<$m-$d || $x>$m+$d); 
        return $x;
    }

    public function poisson($a){
        
        $b=exp(-$a);
        $x=0;
        $p=1;
        while($p>$b){
            $u=$this->g();           
            $p=$p*$u;
            $x++;
        }
        return $x;
    }
}
?>