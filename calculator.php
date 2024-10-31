<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>حاسبة بسيطة</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f7f7f7;
        }
        .calculator {
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .calculator input, .calculator select, .calculator button {
            padding: 10px;
            margin: 5px;
            font-size: 16px;
            width: calc(100% - 24px);
        }
        .result {
            font-size: 18px;
            margin-top: 15px;
            color: #333;
        }
    </style>
</head>
<body>

<div class="calculator">
    <h2>حاسبة بسيطة</h2>
    <form method="post" action="">
        <input type="number" name="num1" placeholder="الرقم الأول" required>
        <input type="number" name="num2" placeholder="الرقم الثاني" required>
        <select name="operation">
            <option value="add">جمع</option>
            <option value="subtract">طرح</option>
            <option value="multiply">ضرب</option>
            <option value="divide">قسمة</option>
        </select>
        <button type="submit" name="calculate">احسب</button>
    </form>

    <?php
    if (isset($_POST['calculate'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];
        $result = "";

        switch ($operation) {
            case 'add':
                $result = $num1 + $num2;
                break;
            case 'subtract':
                $result = $num1 - $num2;
                break;
            case 'multiply':
                $result = $num1 * $num2;
                break;
            case 'divide':
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    $result = "لا يمكن القسمة على صفر";
                }
                break;
            default:
                $result = "عملية غير صالحة";
                break;
        }

        echo "<div class='result'>النتيجة: $result</div>";
    }
    ?>
</div>

</body>
</html>
