<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/Procedure.css">

    <title>PLSQL</title>
</head>
<body>
<?php

include "../Controller/ProcedureCheck.php";


include '../View/Header.php';
?>
<div class="title">
    <h1>Procedures and function</h1>
</div>

<!-- 1st -->
<div class="heading-table">
    <p>Adding existing admin or customer support into employee table</p>
</div>
<div class="info">
   
<form action="" method="POST" name="form1" >
    <label for="acsId">Admin or Customer-Support ID: </label>
    <input type="text" id="acsId" name="acsId" requird>
    
    <label for="job">Job Title: </label>
    <input type="text" id="job" name="job" required>
    
    <br><br>
    <input class="submit" type="submit" id="submit1" name="submit1" value="Submit">
</form>

</div>

<!-- 2nd -->
<div class="heading-table">
    <p>Delete a payment detail entering the payment id</p>
</div>
<div class="info">
   
<form action="" method="POST"  name="form2" required>
    <label for="pid">Payment ID: </label>
    <input type="text" id="pid" name="pid">
   
    <br><br>
    <input class="submit" type="submit" id="submit2" name="submit2" value="Submit">
</form>

</div>

<!-- 3rd -->
<div class="heading-table">
    <p>Inserting product details in the requested product table </p>
</div>
<div class="info">
   
<form action="" method="POST" name="form3">
    <table>
        <tr>
            <td><label for="bid">Borrower ID: </label></td>
            <td><input type="text" id="bid" name="bid" required> </td>
        </tr>
        
        <tr>
            <td><label for="pname">Product Name: </label>  </td>
            <td><input type="text" id="pname" name="pname" required>  </td>
        </tr>
        <tr>
            <td><label for="cid">Category ID </label> </td>
            <td><input type="text" id="cid" name="cid" required> <br> </td>
        </tr>
        <tr>
            <td><label for="budg">Budget: </label> </td>
            <td><input type="number" id="budg" name="budg" required> </td>
        </tr>
        <tr></tr>

        <tr>
            <td colspan="2"><label for="budg"> <input class="submit" type="submit" id="submit3" name="submit3" value="Submit"></label> </td>
        </tr>

    </table>
    
   
</form>

</div>

</body>
</html>