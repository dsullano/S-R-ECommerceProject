

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Style and Relax with S&R</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <?php
    include ("includes/header.php");

  function displayCustomerTable() {
    global $connection;

    $sqlfind = "select Customer_ID, First_Name, Last_Name, Email from tblcustomer where First_Name like '%e%'";
    $smthn = mysqli_query($connection, $sqlfind);

    $sellerArray = array();

    if($smthn){
      while($row = $smthn->fetch_assoc()){
        $sellerArray[] = $row;
      }
      $smthn->free();
    }

    $tablestr = "<div class='table-responsive-lg'><table class='table table-striped table-dark'>
    <thead>
      <tr>
        <th scope ='col'>Customer ID</th>
        <th scope ='col'>First Name</th>
        <th scope ='col'>Last Name</th>
        <th scope ='col'>Email</th>
        <th scope ='col'>CRUD</th>
      </tr>
  </thead>
  <tbody>";
    
  
  foreach($sellerArray as $seller){
    $tablestr .= '
      <tr>
          <th scope="row">'.$seller["Customer_ID"].'</td>
          <td>'.$seller["First_Name"].'</td>
          <td>'.$seller["Last_Name"].'</td>
          <td>'.$seller["Email"].'</td>
          <td><a href="deleteCustomer.php?seller='.$seller["Customer_ID"].'" class="btn btn-outline-danger">Delete</a></td>
      </tr>
    ';
  }
  $tablestr .= '</tbody></table></div>';

  return $tablestr;
}
?>

 <div class="manageAppDiv" style="border bottom: 2 px black solid; border top: 2 px black solid;">
 <br>
    <div id="manageSellerDiv" style="color:#fec601; font-size: 50px; text-align: center;">List Of Customers whose First Names has a letter "e"</div>
    <br>
    <div id ="manageSellerTable">
      <?php
        echo displayCustomerTable();
      ?>
    </div>
  </div>
<br>

<?php
  function displaySellerTable() {
    global $connection;

    $sqlfind = "select Seller_ID, First_Name, Last_Name, Email from tblseller where First_Name like 'S%'";
    $smthn = mysqli_query($connection, $sqlfind);

    $sellerArray = array();

    if($smthn){
      while($row = $smthn->fetch_assoc()){
        $sellerArray[] = $row;
      }
      $smthn->free();
    }

    $tablestr = "<div class='table-responsive-lg'><table class='table table-striped table-dark'>
    <thead>
      <tr>
        <th scope ='col'>Seller ID</th>
        <th scope ='col'>First Name</th>
        <th scope ='col'>Last Name</th>
        <th scope ='col'>Email</th>
        <th scope ='col'>CRUD</th>
      </tr>
  </thead>
  <tbody>";
    
  
  foreach($sellerArray as $seller){
    $tablestr .= '
      <tr>
          <th scope="row">'.$seller["Seller_ID"].'</td>
          <td>'.$seller["First_Name"].'</td>
          <td>'.$seller["Last_Name"].'</td>
          <td>'.$seller["Email"].'</td>
          <td><a href="deleteSeller.php?seller='.$seller["Seller_ID"].'" class="btn btn-outline-danger">Delete</a></td>
      </tr>
    ';
  }
  $tablestr .= '</tbody></table></div>';

  return $tablestr;
}
?>

  <div class="manageAppDiv" style="border bottom: 2 px black solid; border top: 2 px black solid;">
    <div id="manageSellerDiv"style="color:#fec601; font-size: 50px; text-align: center;">List Of Sellers whose First Names starts with "S"</div>
    <br>
    <div id ="manageSellerTable">
      <?php
        echo displaySellerTable();
      ?>
    </div>
  </div>

    <h3 class="d-flex justify-content-center">Recently Added Projects</h3>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">Product ID</th>
            <th scope="col">Name</th>
            <th scope="col">Seller</th>
            <th scope="col">Price</th>
            <th scope="col">Stock</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $query = "SELECT Product_ID, Product_Name, seller.First_Name, seller.Last_Name, Price, Stock 
            from tblproduct, tblstore, tblseller as seller 
            WHERE tblproduct.Store_ID = tblstore.Store_ID 
            AND seller.Seller_ID = tblstore.Seller_ID
            ORDER BY Date_Created";
        $res = mysqli_query($connection, $query);

        $i = 0;
        while($products=mysqli_fetch_assoc($res)) {
            $i++;
            $id = $products['Product_ID'];
            $name = $products['Product_Name'];
            $sname = $products['First_Name'].' '.$products['Last_Name'];
            $price = "P".number_format($products['Price'],2);
            $stock = $products['Stock'];
            echo "
               <tr>
                   <td>$id</td>
                   <td>$name</td>
                   <td>$sname</td>
                   <td>$price</td>
                   <td>$stock</td>
               </tr>
               ";

        }
        ?>
        </tbody>
    </table>
  
   
  </body>

  <!-- FOoter-->

<footer style = "position: relative; min-height: 25vh;">
<?php
    include("includes/footer.php");
?>
</footer>
  
</html>
