<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./f-main-content/style.css">
    <title>الكورس غير متوفر</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .m-box{
            width: 650px;
            height: 190px;
            background-color: rgba(118, 158, 151, 0.363);
            margin:auto;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
            border-radius: 17px 0 17px 0;
            margin-top: 200px;
            margin-bottom: 200px;
        }
        .m-box h2{
            color: rgb(230, 95, 95);
        }
        @media(max-width:745px){
            div{
                width: 350px;
            }
        }
        


    </style>
</head>
<?php include "./header.php"?>
<body>   
    <div class="m-box">
        <h2>هذا الكورس غير متوفر حاليا </h2><br>
        <p>سيتم إتاحة جميع الكورسات مع بدء العام الدراسي</p>
    </div> 
</body>
<?php include "./footer.php"?>
</html>