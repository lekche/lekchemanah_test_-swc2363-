<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sales Commission Calculation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            width: 1400px;
            border: 1px solid black;
            padding: 100px;
        }
        .container label {
            display: block;
            margin: 10px 0 5px;
        }
        .container input[type="text"], .container input[type="number"] {
            width: 100%;
            padding: 5px;
        }
        .container input[type="button"] {
            margin-top: 10px;
            padding: 5px 10px;
            cursor: pointer;
        }
        .result {
            margin-top: 20px;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Sales Commission Calculation</h2>
    <label for="name">Name:</label>
    <input type="text" id="name" name="name">

    <label for="month">Month:</label>
    <input type="text" id="month" name="month">

    <label for="salesAmount">Sales Amount:</label>
    <input type="number" id="salesAmount" name="salesAmount" placeholder="Enter sales amount">

    <input type="button" value="Calculate Commission" onclick="calculateCommission()">

    <div class="result" id="result"></div>
</div>

<script>
    function calculateCommission() {
        // Get input values
        const name = document.getElementById('name').value;
        const month = document.getElementById('month').value;
        const salesAmount = parseFloat(document.getElementById('salesAmount').value);

        // Simple commission rate (10%)
        const commissionRate = 0.7;
        const commission = salesAmount * commissionRate;

        // Display the result
        document.getElementById('result').innerHTML = 
            `Name: ${name}<br>Month: ${month}<br>Total Sales: $${salesAmount.toFixed(2)}<br>Commission (7%): $${commission.toFixed(2)}`;
    }
</script>

</body>
</html>


