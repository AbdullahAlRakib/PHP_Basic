<?php
    //echo "Hello World!";
   //echo'<h1>Hello World</h1>';


   //HTML In PHP
   /*
   echo'<!DOCTYPE html >';
   echo'<html>';
   echo'<head>';
   echo'<title>Hello</title>';
   echo'</head>';
   echo'<body>';
   echo'<h1>Hello World</h1>';
   echo'<p>This is paragraph</p>';
   echo'</body>';
   echo'</html>';
   */

//Variable
/*
$firstName='Jhon';
$lastName='Doe';
echo $firstName.' '.$lastName;
*/

//echo $firstName;
//echo "$firstName";
/*
$x=10;
$y=10;

//echo $x++;
//echo $x--;
echo'<br>';
echo $x;
*/
/*
$x=10;
$y=10;
if($x>$y){
    $z=$x+$y;
    echo $z;

}
else {
    echo 'Hello World';
}
*/
/*
echo $x+$y;
echo '<br>';
echo $x-$y;
echo '<br>';
echo $x*$y;
echo '<br>';
echo $x/$y;
echo '<br>';
echo $x%$y;
echo '<br>';
*/
//loop 
/*
for($x=1;$x<=5;$x++){
    echo 'hello world' . '<br>';
}
*/
/*
/*
$i=10;
while($i>20){
    echo $i.'';
    $i++;
}
*/
/*
$i=10;
do{
    echo $i.'';
    $i++;
}
while($i>20);
*/
//Array 

/*
$data = Array();

$data[0]=10;
$data[1]=20;
$data[2]=30;

$data['name']='Rahim';
$data['city']='Dhaka';

//echo $data[0];
//echo $data['name'];
*/
//$data=Array(10,20,30,'rahim','dhaka');
/*
$data=[10,20,30,'rahim','karim'];
foreach($data as $value){
    echo $value. '    ';
}

*/
//students data table array
/*
$students=[
    '0'=>[
        'name'=>'Rahim',
        'email'=>'abc@gmail.com',
        'id'=>'20170007',
        'city'=>'Dhaka'
    ],
    '1'=>[
        'name'=>'ahim',
        'email'=>'abc@gmail.com',
        'id'=>'20170008',
        'city'=>'Dhaka'
    ],
    '2'=>[
        'name'=>'him',
        'email'=>'abc@gmail.com',
        'id'=>'20170009',
        'city'=>'Dhaka'
    ],
    

];
*/



?>

<!--
<table border="1" width="500">
<tr>
<th>Name</th>
<th>Email</th>
<th>Id</th>
<th>City</th>
</tr>
/
<?php foreach //($students as $student) {?>
<tr>
<td><?php //echo $student['name'];?></td>
<td><?php// echo $student['email'];?></td>
<td><?php //echo $student['id'];?></td>
<td><?php //echo $student['city'];?></td>

</tr>
<?php }?>

</table>

-->

<!--PHP In HTML-->
<!--
<html>
<head>
<title><?php //echo'Home';?></title>
</head>
<body>
<h1><?php //echo'This is Heading';?> </h1>
<p><?php //echo'This is Paragraph';?></p>
</body>
</html>
-->

<!--In attribute we can write php code
<html>
<head>
</head>
<body>
<input type="text" value="<?php //echo'Hello world';?>"/>
</body>
</html>
-->
