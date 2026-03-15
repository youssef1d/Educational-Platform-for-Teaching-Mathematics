<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/all.min.css">
    <link rel="stylesheet" href="./f-main-content/style.css">
    <link rel="icon" href="images/logo.png">   
    <link rel="apple-touch-icon"  href="./images/logo.png">
    <meta name="theme-color" content="#000000">
    <title>مستر يوسف</title>
</head>
<body>
   
<?php include './header.php' ?>
<?php include './main.php' ?>
<?php include './footer.php' ?>

<script src="cont.js"></script>


<!-- <script>
    // write the name about intervals 
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


    // animation on scroll
    let ser = document.querySelector('.serv');
    let card1 = document.getElementById('card1');
    let card2 = document.getElementById('card2');
    let card3 = document.getElementById('card3');

    window.onscroll = function () {
        if (window.scrollY >= ser.offsetTop -400 ){ 
            console.log('done');
            card1.style.opacity = "1";
            card2.style.opacity = "1";
            card3.style.opacity = "1";   
        }
        else if (window.scrollY <= ser.offsetTop -400){
            card1.style.opacity = "0";
            card2.style.opacity = "0";
            card3.style.opacity = "0"; 
        }
    }

    // resize header 
    let header = document.getElementById('header');
    window.onscroll = function ev(){ 
        if(scrollY >= 40){
            header.style.height='60px';
            header.style.transition='0.3s';
        }
        else if (scrollY <= 40){
            header.style.height='100px';
        }
    }

    // menu
    let menu = document.getElementById('menu');
    let divmenu = document.getElementById('divmenu');
    let nav =document.getElementById('nav');
    let sign =document.getElementById('sign');

    let n = 0
    menu.onclick = function on() {
        if(n==0){
            start()
        }
        else if (n==1){
            end()
        }
        n= n+1
        if(n==2){
            n=0
        }
    }

    function start(){
        nav.style.display ='flex';
        nav.style.flexDirection = 'column';
        nav.style.background = '#f1faeeff';
        nav.style.width ='200px';
        nav.style.padding='3px';
        nav.style.position ='absolute';
        nav.style.top = '60px';
        nav.style.left= '15px';
        
        sign.style.flexDirection = 'column';
        sign.style.background = '#f1faeeff';
        sign.style.width ='200px';
        sign.style.display ='flex';
        sign.style.flexWrap='wrap-reverse';
        sign.style.padding='3px';
        sign.style.position ='absolute';
        sign.style.top = '245px';
        sign.style.left= '15px';

        
    }
    function end(){
        nav.style.display='none';
        sign.style.display='none';
    }
</script> -->
</body>
</html>