<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../view/image/LOGO.png"/>
    <link rel="stylesheet" href="../view/style.css"/>
    <title>Billing</title>
</head>
    <nav>
        <?php include("home_nav.php") ?>
    </nav>
<body>
    <img src="../view/image/LOMS.png" class="banner5" alt="Logo with company banner">

   
   <div class="Billing">
   <h2>
   Order Entry
   </h2>

   <table>
       <tr>
           <th><b>Item Id</b></th>
           <th><b>Item Name</b></th>
           <th><b>Rate</b></th>
           <th><b>Quantity</b></th>
           <th><b>Item total</b></th>
        </tr> 

        <tr>
            <th><input type= "text" name="Item1"></th>
            <th><input type= "text" name="Item2"></th>
            <th><input type= "text" name="Item3"></th>
            <th><input type= "text" name="Item4"></th>
            <th><input type= "text" name="Item5"></th>
        </tr>

        <button class="bill_Add">Save</button>
        <button class="bill_update">Update</button>
        <button class="bill_invoice">Invoice</button>
        <button class="bill_back">Back>></button>

        </table>
</div>
</div>
<div class="footer"><?php require("footer.php") ?></div>
</body>
</html>