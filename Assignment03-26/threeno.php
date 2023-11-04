<!DOCTYPE html>
<html>
<head>
    <title>Vowel Counter</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: burlywood;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        h1 {
            margin-top: 20px;
        }

        .container {
            background-color:navajowhite;
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
            background-color: brown;
            color: black;
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
    <h1>Vowel Counter on String</h1>

    <div class="container">
        <form method="post">
            <label for="inputString">Enter a string:</label>
            <input type="text" name="inputString" id="inputString" required>
            <button type="submit">Count</button>
        </form>
    </div>

    <div class="container" id="result">
        <?php
        if (isset($_POST['inputString'])) {
            $inputString = $_POST['inputString'];
            $inputString = preg_replace("/[^a-zA-Z]/", '', $inputString); // Remove non-alphabetic characters
            $inputString = strtolower($inputString); // Convert to lowercase for case-insensitivity
            $vowels = ['a', 'e', 'i', 'o', 'u'];
            $count = 0;

            for ($i = 0; $i < strlen($inputString); $i++) {
                if (in_array($inputString[$i], $vowels)) {
                    $count++;
                }
            }

            echo "Number of vowels: $count";
        }
        ?>
    </div>
</body>
</html>
