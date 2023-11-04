<!DOCTYPE html>
<html>
<head>
    <title>Array Operations</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            margin-top: 20px;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
             
        }

        .result {
            background-color: skyblue;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            margin: 20px 0;
            width: 80%;
            max-width: 400px;
        }

        p {
            margin: 10px 0;
        }

        .array-line {
            white-space: nowrap;
        }
    </style>
</head>
<body>
    <h1>PHP code to perform the array operations</h1>
    <div class="container">
        <?php
        // Define the array of integers
        $numbers = array(2, 4, 6, 8, 10);

        // Display the original array on a single line
        echo '<div class="result"><p><b>Here is the Array:</b></p><div class="array-line">[' . implode(', ', $numbers) . ']</div></div>';

        // i. Print the first element of the array
        echo '<div class="result"><p><b>i. The first element of the array is: ' . $numbers[0] . '</b></p></div>';

        // ii. Print the last element of the array
        $lastIndex = count($numbers) - 1;
        echo '<div class="result"><p><b>ii. The last element of the array is: ' . $numbers[$lastIndex] . '</b></p></div>';

        // iii. Add a new element with the value of 12 to the end of the array
        $numbers[] = 12;
        echo '<div class="result"><p><b>iii. Added 12 to the end of the array.</b></p></div>';

        // iv. Calculate the sum of all the elements in the array and print the result
        $sum = array_sum($numbers);
        echo '<div class="result"><p><b>iv. The sum of all elements in the array is: ' . $sum . '</b></p></div>';
        ?>
    </div>
</body>
</html>
