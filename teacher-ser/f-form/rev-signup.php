<?php 
// get about data
$frist_name = $_POST['frist-name'];
$famely_name = $_POST['famely-name'];
$user_name = $_POST['user-name'];
$email = $_POST['email'];
$num_stu = $_POST['num-stu'];
$num_fath = $_POST['num-fath'];
$year= $_POST['select'];
$paas = $_POST['paas'];
$re_pass = $_POST['re-pass'];

// conection by data base 
$conn = new mysqli("localhost","root","","mryoussef");

// التحقق من الاتصال
if ($conn->connect_error) {
    die("فشل الاتصال: " . $conn->connect_error);
}

// يمكنك هنا قيام بعمليات أخرى، مثل التحقق من صحة بيانات المستخدم وتنفيذ استعلام SQL
if($frist_name=='' or $famely_name  =='' or $user_name =='' or $email =='' or $num_stu =='' or $num_fath =='' or $year=='' or $paas =='' or $re_pass =='' ){
    echo 'تحقق من البيانات';
}
elseif($frist_name!='' and $famely_name  !='' and $user_name !='' and $email !='' and $num_stu !='' and $num_fath !='' and $paas !='' and $re_pass !='' ){
    $ins = "insert into students values( '$frist_name', '$famely_name','$user_name', '$email' , '$num_stu' , '$num_fath' , '$year' ,'$paas' , '$re_pass')";
    mysqli_query($conn , $ins );
    header('location:./../f-user-pages/u-info.php');
}

// قم بإغلاق اتصال قاعدة البيانات عند الانتهاء
$conn->close();
?>

<?php
// if( isset($_POST["submit"]) ){
//     if( strlen(strval($_POST['pass'])) <= 9 or strlen( strval($_POST['re-pass'])) <= 9 ) 
//     { echo 'لابد ان تكون كلمة المرور اطول من 9 حروف' ;};
//     elseif( $_POST['pass'] === $_POST['re-pass']){
//         echo 'كلمة مرور غير متطابقة' ;
//     };
// }
?>


