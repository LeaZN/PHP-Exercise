<html>
<head>
	<title>Income Tax Calculator</title>
</head>
<body>
<form method="POST" action="safe.php">

<div class="">

<fieldset>
              <legend>Enter your details</legend>
    

    <label for="salary_usd">Salary in USD: </label>

        <input type="text" name="salary_usd" id="salary_usd" required> <br> 

        <input type="radio" id="yearly" name="yearly_monthly" value="yearly"> 
        <label for="yearly">Yearly</label><br>  

     <input type="radio" id="monthly" name="yearly_monthly" value="monthly">
     <label for="monthly">Monthly</label><br>

        <label for="tax_free">Tax Free Allowance:</label>

        <input type="text" name="tax_free" id="tax_free" required> <br>

        <input type="submit" name="submit" value="Calculate">
        </fieldset>
</div>
</form>

</body>
</html>