<?php
$user = 'youssef'
 ?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./f-main-content/style.css">
    <link rel="stylesheet" href="./css/all.min.css">
    <title>mr youssef</title>
    
        <?php include './u-header.php'?>
        <?php include './main.php'?>
        <?php include './footer.php'?>

        <script>
            let header = document.getElementById('header');

            window.onscroll = function ev(){ 
                if(scrollY >=40){
                    header.style.height='60px';
                    header.style.transition='0.3s';
                }
                else if (scrollY<= 40){
                    header.style.height='100px';
                }
            }
            // iner h1
            let h1 =document.getElementById('name');
            let i= 0
            let text = " | يوسف خالد"

            let inter = setInterval(
                function slid(){
                h1.innerHTML+= text[i] 
                i++
                if(i==13){
                    h1.innerHTML=''
                    i=0
                }
            }
            ,500)

        </script>
</body>
</html>

