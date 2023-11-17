<?php
function generate($num){
    $tableau=[];
    for($l=0; $l<$num; $l++){
        $tableau[$l]=[];
        for($c=0;$c<$num;$c++){
            $couleur=(($l+$c)%2==0)?"#000":"#fff";
            $tableau[$l][$c]=$couleur;
        };
    };
    
    return $tableau;
};
echo "<pre>";
print_r(generate(4));
echo "</pre>";