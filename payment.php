<?php
include("paymentconf.php")

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}
.mail{
  width: 100%;
}
input[type=text] {
  width: 80%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}
label:after {content: "*";
color: red;}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.proceedbtn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 30%;
  margin-left: 100px;
  margin-top: 30px;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.proceedbtn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}
.table1{
  width: 100%;
}
#verifydoc:after {content: "*";
color: red;}
.required:after {content: "*";
color: red;}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
</head>
<body>
  

<h2>PAYMENT DETAILS</h2>

<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="payment.php" method="POST">
<div class="col-50">
            <h3>Payment</h3>
            <table class="table1"><tr><td>
            <label for="cname">Name of customer</label>
            <input type="text" id="cname" name="cname" placeholder="Enter name">
          </td>
        <td>
            <label for="phone">Phone number</label>
            <input type="text" id="phone" name="phone" placeholder="enter contact number">
          </td></tr>
          <tr><td>
            <label for="PayMet">Payment method</label>
            <input type="text" list="payM" id="paymethod" name="paymethod" placeholder="Credit/Debit/Cash/Cheque/EMI/UPI">
            <datalist id="payM">
              <option value="credit">
              <option value="debit">
              <option value="cash">
              <option value="cheque">
              <option value="EMI">
              <option value="UPI">
             </datalist></td>
             <td>
              <label for="email">E-mail</label>
              <input type="email" id="mail" name="mail" placeholder="example@gmail.com">
             
             </td>
            </tr>
            </table>
            <label for="paymentdate">Payment Date and time</label>
            <input type="datetime-local" id="paymentdate" name="paymentdate" placeholder="Enter todays date"> 
            <br><br>
            <table class="Amounts">
              <tr><td>
            <div class="row">
              <div class="col-50">
                <label for="TAmount">Total Amount</label>
                <input type="number" id="totalamount" onchange="DueAmount('totalamount','amountpaid')" name="totalamount" placeholder="enter total amount">
              </div>
            </div></td>
            <td><div class="row">
              <div class="col-50">
                <label for="expyear">Amount paid</label>
                <input type="number" id="amountpaid" name="amountpaid" placeholder="enter first amount">
              </div>
            </div>
          </td>            
        <td><div class="row">
              <div class="col-50">
                <label for="expyear">Discount</label>
                <input type="number" id="discount" name="discount" placeholder="enter discount">
              </div>
            </div>
          </td>
          </tr>
          </table>
            
          </div>


        </div>
        <table class="table1"><tr>
          <td><div class="required"><label id="verifydoc" for="verifydoc"><b>Upload PAN or PASSPORT</b></label>
            <input type="file" id="myfile" name="myfile"></div>
          </td><td>
        <input type="submit" value="proceed" class="proceedbtn" name="proceedbtn">
      </td>
    </tr></table>
      </form>
    </div>
  
  </div>

</div>


</body>
<?php
if(isset($_POST['proceedbtn']))
{
  $method=$_POST['paymethod'];
$totalamount=$_POST['totalamount'];
$amountpaid=$_POST['amountpaid'];
$discount=$_POST['discount'];
$dueamount=$totalamount-($amountpaid+$discount);

$res=mysqli_query($connection,"INSERT INTO payment 
VALUES ('','$method','$totalamount','$amountpaid','$discount','','$dueamount','')");
}
?>
</html>
