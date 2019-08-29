<?php $employee = array("Employee1"=>60000,"Employee2"=>10000,"Employee3"=>30000,"Employee4"=>20000,"Employee5"=>50000,"Employee6"=>10000,"Employee7"=>31000,"Employee8"=>25000);


echo '<table border="1">';
echo '<tr><th> employee </th><th> salary </th></tr>';
foreach( $employee as $key =>$value )
{
    if($value>30000){
    echo '<tr>';
    
        echo '<td>'.$key.'</td>';
        echo '<td>'.$value.'</td>';
    }

    echo '</tr>';
}
echo '</table>';
?>
