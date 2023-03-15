<?php
//Switch
/*
function x()
{
    sleep(3);
    echo 'Done <br>';
    return 3;
}

if(x()==1){
    echo 1;
}elseif(x()==2){
    echo 2;
}elseif(x()==3){
    echo 3;
}else{
    echo 4;
}

switch (x()) {
    case 1:
        echo 1;
        break;
    case 2:
        echo 2;
        break;
    case 3:
        echo 3;
        break;
    default:
        echo 4;
}*/

$paymentStatus = 3;
switch ($paymentStatus) {
    case 1:
        echo 'Paid';
        break;
    case 2:
    case 3:
        echo 'Payment Declined';
        break;
    case 0:
        echo 'Pending Payment';
        break;
    default:
        echo 'Unknown payment status';
}
echo '<br>';

$displayStatus = match ($paymentStatus) { //its return value type strict
    1 => 'Paid',
    2, 3 => 'Payment declined',
    0 => 'Pending Payment',
    default => 'Unknown payment status'
};

echo $displayStatus;