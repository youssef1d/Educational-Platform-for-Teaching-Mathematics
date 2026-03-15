<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/all.min.css"> 
    <link rel="stylesheet" href="./f-main-content/style.css">
    <title>login to wesite</title>
    <style>
        :root{
            /* CSS HEX */
        --black: #1F2823ff;
        --black-wight: #8a817cff;
        --silver: #bcb8b1ff;
        --wight : #f4f3eeff;
        --blue: #7765e3ff;
        /* CSS HEX */
        --wight-gr: #dad7cdff;
        --sage: #a3b18aff;
        --fern-green: #588157ff;
        --hunter-green: #3a5a40ff;
        --brunswick-green: #344e41ff;
        }
        body{
            height:fit-content;
        }
        header .header{
            height: 60px;
        }
        .sign .sign-in{
            display: none;
        }
        .sec{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 600px;
            padding-top: 70px;
            background:#bcb8b1ff;  
        }
         
        .login{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 30px;
            background:url(./images//bg-signup.jpg);
            background-size:cover;
            /* background-color: #588157ff; */
            width: 370px;
            height: 450px;
            border-radius:13px;
        }
        .login h1{
            color: rgb(0, 56, 141);
        }
        .login input {
            width: 300px;
            height: 50px;
            display: flex;
            flex-direction: column;
            gap: 20px;
            outline: none;
            border-radius:10px;
            text-align:center;
            transition: 1s;
            border:#588157ff solid 2px;

        }
        .login input:hover{
            transform: scale(1.05);

        }
        .login .sub{
            background: linear-gradient( to right , #588157ff,#7765e3ff );
            font-size: 1.4em;
            display: flex;
            padding-right: 120px;
            padding-top: 2px;
            height: 40px;
            opacity: 1;
            border:none;
            
        }
        .login .sub:hover{
            opacity: .8;
            transform: none;
            cursor: pointer;
        }
        .sec .login  p ,a {
            font-size: 1.2em;
            font-weight: 600;
        }
        .sec .login a{
            color:#dad7cdff ;
        }

        footer{
        height: 10px;
        }
        footer .copy{
            padding:0 100px ;
        }
        @media (min-width:370px) and (max-width:745px){
            .sign {
                display: flex;
            }
        }

    </style>
    
</head>
<body>
    <?php include 'header.php'?>
                    <!-- login -->
    <section class="sec">
        <div class="login">
            <h1> تسجيل الدخول</h1>

            <form action="./f-form/rev-login.php" method="post">
                <input type="text" name="user" placeholder="اسم المستخدم"  required><br>
                <input type="passwoerd" name="pass" placeholder="كلمة المرور" required><br>
                <input class="sub" type="submit" value="دخول" placeholder="دخول">
            </form>
            <p>لو معندكش حساب <a href="">انشاء حساب</a></p>
            <a href="">نسيت كلمة المرور</a>
        </div>
    </section>
    <?php include 'footer.php'?>
    <!-- <script src="cont.js"></script> -->
</body>
</html>
