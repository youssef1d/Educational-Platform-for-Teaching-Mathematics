<?php
$user = 'Ahmed'
 ?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/all.min.css">
    <link rel="stylesheet" href="./f-main-content/style.css">
    <title>mr youssef</title>
    <style>
        .header{
            height: 60px;
        }
        header .user-info{
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 15px;
            background-color: #588157ff;
            border-radius: 30px;
            padding: 2px 30px 2px 15px; 
        }
        header .user-info img{
            width: 50px;
            height:50px;
            border-radius: 50%;
            cursor: pointer;
        }
        header .user-info a{
            text-decoration: none;
            color:black ;
            font-size: 1.6em;
            font-weight: 700;

        }
        
    </style>
</head>
<body>
    <section>
        <header>
            <div class="header" id="header">
                <div class="logo">
                    <a href="./u-info.php">
                    <span>أ/ </span>يوسف 
                    </a>
                </div>
        
                <div class="nav" id="nav" >
                    <a href="index.php" class="nav-main" id="ita"><i class="fa-solid fa-house"></i></a>
                    <a href="year1.php"> الصف الاول </a>
                    <a href="year2.php">الصف الثاني </a>
                    <a href="year3.php">الصف الثالث</a>
                    <a href="rode.php" class="rod-map" >خارطة الطريق </a>
                </div>
        
                <!-- <div class="sign">
                    <div class="sign-up"><a href="">انشاء حساب </a></div>
                    <div class="sign-in"><a href="../f-form/login.php">تسجيل دخول </a></div> 
                    <div class="div-menu" id="menu" >
                        <i class="fa-solid fa-bars" style="color: #ed61ff;"></i>
                    </div>
                </div> -->
                <div class="user-info">
                    <a href=""><?php echo $user ?></a>
                    <img src="./images/image_3.jpg" alt="user-info">  
                </div>
                
            </div>
        
            <div id="border" class="border">
        </div>
        </header>
                        <!-- space -->
        <div class="space"></div>
    </section>
</body>
</html>