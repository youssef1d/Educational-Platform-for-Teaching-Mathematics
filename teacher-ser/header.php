
<section>
<header>
    <div class="header" id="header">
        <div class="logo">
            <a href="./index.php">
            <span>أ/ </span>يوسف 
            </a>
        </div>

        <div class="nav " id="nav" >
            <a href="index.php" class="nav-main" id="ita"><i class="fa-solid fa-house"></i></a>
            <a href="year1.php"> الصف الاول </a>
            <a href="year2.php">الصف الثاني </a>
            <a href="year3.php">الصف الثالث</a>
            <a href="rode.php" class="rod-map" >خارطة الطريق </a>
        </div>

        <div class="sign" id="sign">
            <div class="sign-in"><a href="login.php">تسجيل دخول </a></div> 
            <div class="sign-up"><a href="sinup.php">انشاء حساب </a></div>

        </div>

        <div class="menu" id="menu">
            <div class="top"></div>
            <div class="center" dir="rtl"></div>
            <div class="bottom"></div>
            <div id="divmenu"></div>
        </div>

        
    </div>

    <div id="border" class="border">
</div>
</header>
                <!-- space -->
<div class="space"></div>
</section>
<script>
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
</script>




