<?php
$aa=0;
$bb=1;
function logand($n,$na) {
    if ($na==true && $n==true){
        echo '1';
    }
    else {
        echo '0';
    }
}
function logor($n,$na){
    if($na==true || $n==true){
        echo'1';
    }
    else{
        echo'0';
    }

}
function logxor($n,$na){
    if($na==true && $n==false){
        echo'1';
    }
    elseif ($n==true && $na==false){
        echo'1';
    }
    else{
        echo'0';
    }

}
function diskr($a,$b,$c)
{
    $d = ($b ** 2) - (4 * $a * $c);
    echo 'Diskriminant =' . $d . '<br>';



    if ($d > 0) {

        echo 'x1=' . $x1 = ((-$b) - (sqrt($d))) / (2 * $a) . '<br>';
        echo 'x2=' . $x2 = ((-$b) + (sqrt($d))) / (2 * $a);
    }
    elseif ($d == 0) {
        echo 'x=' . $x = (-$b) / (2 * $a);
    }
    elseif ($d<0) {
                echo 'not result';
            }

    return  $d;
}


/* Russian languache*/
//$name='Аня';
//strrpos($name,'я');
//var_dump(strrpos($name,'я'));
function gender1($name)
{
if(strrpos($name,'я')==true){
    echo $name . ' is female';
   }
elseif(strrpos($name,'а')==true){
    echo $name . ' is female';
}
elseif(strrpos($name,'й')==true){
    echo $name . ' is male';
}
elseif(strrpos($name,'р')==true){
    echo $name . ' is male';
}
elseif(strrpos($name,'н')==true){
    echo $name . ' is male';
}
elseif(strrpos($name,'т')==true){
    echo $name . ' is male';
}
else {
    echo null;
}
}

//var_dump(gender1('Сергей'));


//assert(diskr(1,4,1)==12);
//assert(diskr(1,2,1)==0)
//assert(diskr(2,1,8)==-63)
?>
