<!DOCTYPE html>
<html>
<head>
    <title>Sum of Even Numbers</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: plum;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        h1 {
            margin-top: 20px;
        }

        .container {
            background-color: palegreen;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
            width: 50%;
            margin: 20px auto;
        }

        label {
            font-weight: bold;
        }

        input {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 80%;
        }

        button {
            background-color: purple;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-weight: bold;
            cursor: pointer;
            margin-top: 10px;
        }

        #result {
            margin-top: 20px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <br><br><br>
    <h1>Sum of Even Numbers on the Array</h1>
    <br><br><br>

    <div class="container">
        <form method="post">
            <label for="inputArray">Enter an array of integers (comma-separated):</label>
            <input type="text" name="inputArray" id="inputArray" required>
            <button type="submit">Calculate</button>
        </form>
    </div>

    <div class="container" id="result">
        <?php
        if (isset($_POST['inputArray'])) {
            $inputArray = $_POST['inputArray'];
            $numbers = explode(',', $inputArray);

            // Filter out non-numeric values
            $numbers = array_filter($numbers, 'is_numeric');

            // Calculate the sum of even numbers
            $sum = 0;
            foreach ($numbers as $number) {
                if ($number % 2 === 0) {
                    $sum += $number;
                }
            }

            echo "Sum of even numbers: $sum";
        }
        ?>
    </div>
</body>
</html>

