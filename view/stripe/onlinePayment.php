<!DOCTYPE html>
<html>
<head>
    <title>Stripe Example</title>
    <meta charset="UTF-8" />
    <script>
        function validateForm() {
            var amountInput = document.getElementById("amount");
            var amount = amountInput.value.trim();

            if (isNaN(amount) || amount === "") {
                alert("Please enter a valid number for the amount.");
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
    <form method="post" action="checkout.php" onsubmit="return validateForm()">
        <input type="text" id="amount" name="amount" placeholder="Enter amount">
        <button type="submit">Pay</button>
    </form>
</body>
</html>