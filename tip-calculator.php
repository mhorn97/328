<?php
    /*
     * Michael Horn & Scott Medlock
     * 1/5/2018
     * restaurant-functions.php
     * form for calculating tips
     */

    include("restaurant-functions.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>restaurant calculator</title>

    </head>

    <body>
        <?php
            $isValid = false;
            if ($_POST["submit"]) {
                $isValid = true;

                $billAmount = $_POST['billAmount'];
                $tipPercentage = convertPercent($_POST['tipPercentage']);
                $numPeople = $_POST['numPeople'];

                if (!isValidValue($billAmount)) {
                    $isValid = false;
                }

                if (!isValidValue($tipPercentage)) {
                    $isValid = false;
                }

                if (!isValidValue($numPeople)) {
                    $isValid = false;
                }
            }
        ?>

        <h2>Tip Calculator</h2>
        <form method="post">
            <label>Bill amount: <input type="text" name="billAmount"></label><br>
            <label>Tip Percentage: <input type="text" name="tipPercentage" value = "15%"></label><br>

            <label>Number of People<input type="text" name="numPeople" value = "1"></label><br>
            <input type="submit" value="calculate" name="submit">
        </form>

        <?php
            if ($isValid) {
                $total = $billAmount + calcTip($billAmount, $tipPercentage) + calcTax($billAmount);
                echo "<p>Total Amount: $$total</p>";
                echo "<p>Amount Per Person: $" . perPerson($total, $numPeople) . "</p>";
            }
        ?>
    </body>
</html>