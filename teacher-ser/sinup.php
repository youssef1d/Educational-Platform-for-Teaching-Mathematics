<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./f-main-content/style.css">
    <title>signup</title>
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
        .header{
            height:70px;
        }
        .header .sign .sign-up{
            display: none;
        }
        section{
            display: flex;
            align-items: center;
            justify-content: center;
            padding-top: 30px; 
            background-color: var(--sage);
        }
        .bg{
            width: 80%;
            min-height: 560px;
            /* background-color: brown; */
            background: url(./images/bg-signup.jpg) ; 
            /* background-position: center; */
            background-size: cover;
            border-radius: 9px 50px 9px 50px;
            box-shadow: 0 5px 25px rgba(1 1 1 / 80%);
            display: flex;
            flex-direction:column;
            justify-self:center;
            align-items: center;

        }
        .bg h2{
            padding-top: 35px;
            padding-bottom: 20px;
            color:black;
        }
        .bg form{
            width:80%;
            display: flex;
            flex-direction:column;
            justify-self:center;
            align-items: center;
            gap:20px;
        }

        .bg form input{
            outline: none 0;
            border: solid 2px #588157ff;
            border-radius: 9px;
            height:45px;
            width: 100%;
            text-align: right;
            padding-right: 20px;
            transition: 1s;
            color: #1F2823ff;
            font-size: 1.1em;
            font-weight: 600;   
        }

        .bg form input:hover{
            transform: scale(1.05);
        }
        form .div-input {
            width: 100%;
            display: flex;
            gap: 25px;
        }
        form input[type="submit"]{
            text-align: center;
            background: linear-gradient(to right,#7765e3ff,#588157ff,#a3b18aff);
            border: none;
            /* cursor: pointer; */
            color: black;
            font-size: 1.2em;
            font-weight: 800;
            margin-bottom: 10px;
        }

        form .bg label{
            padding-left: 20px;
        }
        .bg form .option{
            width: 100%;
            height: 40px;
            background-color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 1em;
            border: #588157ff solid  2px;
            border-radius: 9px;
        }
        .bg  form .option select{
            width: 350px;
            height: 35px;
            outline: none 0;
            border: 2px #588157ff solid;
            border-radius: 9px;
            font-size: 1.1em;
            font-weight: 500;
        }
        .bg  h3 {
            font-size:1.3em;
            color:white;
            margin-bottom: 20px;
        }
        .bg   a{
            color:red;
            padding-right:10px;
        }
    </style>
</head>
<body>
<?php include 'header.php'?>
    <section>
        <div class="bg">
            <h2>انشاء حساب جديد</h2>
            <form action="../f-form/rev-signup.php" method="post">
                <div class="div-input">
                    <input type="text" name="frist-name"   placeholder=" الاسم الاول" required>
                    <input type="text" name="famely-name"  placeholder=" اسم العائلة" required>
                </div class="div-input">
                <input type="text" name="user-name"   placeholder="اسم المستخدم " required>
                <input type="email" name="email"   placeholder=" الايميل " required>
                <div class="div-input" dir="rtl">
                    <input type="number" name="num-stu"   placeholder="رقم تيلفون الطالب" required>
                    <input type="number" name="num-fath"   placeholder="رقم تيلفون ولي الامر " required>
                </div>
                <div class="option">
                    <select name="select">
                        <option value="" selected disabled> الصف الدراسي</option>
                        <option value="year1">الصف الاول الثانوي</option>
                        <option value="year2">الصف الثاني الثانوي</option>
                        <option value="year3">الصف الثالث الثانوي</option>
                    </select>
                </div>
                <div class="div-input">
                    <input type="password" name="paas"   placeholder="كلمة المرور" required>
                    <input type="password" name="re-pass"   placeholder="تاكيد كلمة المرور" required>

                </div>
                <input class="sub" id="sub" name="submit" type="submit" value="ارسال البيانات">
            </form>
            <h3>لو عندك حساب <a href="./login.php">سجل الدخول</a></h3>
        </div>
    </section>

    <?php include 'footer.php'?>
    <!-- <script src="cont.js"></script> -->
</body>
</html>