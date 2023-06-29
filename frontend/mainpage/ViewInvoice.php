<?php
include 'connection.php';
?>
<!DOCTYPE html>

<!-- Main Search Page -->

<html>
<head>
<link rel="stylesheet" href="../css/style.css">

</head>
<style>
  body {
    font-family: Verdana, sans-serif;
    font-size: 15px;
    line-height: 1.5;
    color: #0E131F;
    background: #B9C0DA;
  }

  .line {
    border-bottom: 5px solid #3b6b1f;
    margin-top: 5px;
    width: 100%;
  }

  .top {
    padding: 16px;
    background-color: #62ab37;
    width: 81.6%;
    color: #f1f1f1;
    border: 5px solid #63585e;
  }

  .search {
    font-family: Arial;
    padding: 16px;
    width: 100%;
    border-top: 5px solid gray;
    /*border-bottom: 5px solid gray;*/
  }

  input[type=text] {
    width: 90%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
  }

  .sumbit {
    width: auto;
    padding: 10px 18px;
    background-color: #3b6b1f;
    color: white;
    font-family: Arial;
  }

  .sumbit:hover {
    opacity: 0.8;
    background-color: #63585e;
  }

  button:hover {
    opacity: 0.8;
    background-color: #63585e;
  }

  .add {
    width: auto;
    padding: 10px 18px;
    background-color: #3b6b1f;
    color: white;
    font-family: Arial;
  }

  .addbutton {
    margin: auto;
    text-align: left;
  }

  .delete {
    text-align: center;
    width: 50%;
    padding: 5px 9px;
    background-color: #d7504d;
    color: black;
  }

  .sidebar {
    float: right;
    color: black;
    margin: 25px;
  }

  table {
    font-family: Arial;
    border: 5px solid #63585e;
    width: 100%
  }

  th,
  td {
    text-align: left;
    border-right: 5px solid #63585e;
  }

  .imgcontainer {
    float: right;
    border: 5px solid #63585e;
  }
</style>

<body>

  <!-- Navbar -->
  <ul class="navbar">
    <li class="nav" style="margin-left: 0; background: white;"><img class="logo" src="https://i.imgur.com/gq738mR.png"
        height="25px"></li>
    <li class="nav"><a class="nav" href="../index.html">Home</a></li>
    <li class="nav" style="float: right; margin-right: 0;"><a class="nav" href="Lan-Log-Sign-pages\login.html">LoggedIn as Grant391</a></li>
    <li class="nav" style="float: center;"><u>View Invoice</u></li>
  </ul>

  <div class="line"> </div>

  <div class="search">
    <form method="post">
      <b>Search:</b> <input type="text" placeholder="..." name="products_search">
      <input type="submit" class="sumbit" name="products_sumbit">
    </form>
  </div>
  <div class="container">
    <table>
      <tr>
        <th>product Id</th>
        <th>UProduct name</th>
        <th>Description</th>
        <th>product type</th>
        <th>expiry date</th>
        <th>Section Id</th>
        <th>Lot Number</th>
        <th>Product Size</th>
        <td>Buy Invoice Id</td>
        <td>Sell Invoice Id</td>
        <th><button type="button" class="delete" name="delete"> <b>Delete</b> </button></th>
      </tr>

      <?php
        if (isset($_POST['products_sumbit'])) { // if user presses submit
          $search = $_POST['products_search']; //take the input 
          $sql = "Select * from products where buy_invoice_id ='$search' or sell_invoice_id ='$search' "; //query
          $result = mysqli_query($con, $sql); //take the result from the database
          if ($result) { //if a query happened return True
            if (mysqli_num_rows($result) > 0) { //if there are more than zero rows with this id
              //print a table with the data (from boostrap)
              while ($row = mysqli_fetch_assoc($result)) { //display all the product details
                echo '<tbody>
                    <tr>
                    <td>' . $row['product_id'] . '</td>
                    <td>' . $row['name'] . '</td>
                    <td>' . $row['description'] . '</td>
                    <td>' . $row['product_type'] . '</td>
                    <td>' . $row['expiry_date'] . '</td>
                    <td>' . $row['section_id'] . '</td>
                    <td>' . $row['lot_number'] . '</td>
                    <td>' . $row['product_size'] . '</td>
                    <td>' . $row['buy_invoice_id'] . '</td>
                    <td>' . $row['sell_invoice_id'] . '</td>
                    <td><input type="checkbox" name="delete" value="delete"></td>
                    </tr>
                    </tbody>';
              }
            } else {
              echo '<h3>Data not found</h3>';
            }
          }
        }
        ?>
    </table>
</body>

</html>