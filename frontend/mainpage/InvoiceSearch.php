<?php
include 'connection.php';
?>
<!DOCTYPE html>

<html>
<head>
<link rel="stylesheet" href="../css/style.css">

</head>
<style>

  body {
    font-family: Verdana,sans-serif;
    font-size: 15px;
    line-height: 1.5;
    color: #0E131F;
    background: #B9C0DA;
  }

  .line{
    border-bottom: 5px solid #3b6b1f;
    margin-top: 5px;
    width: 100%;
  }

  .top{
    padding: 16px;
    background-color: #62ab37;
    width: 81.6%;
    color: #f1f1f1;
    border: 5px solid #63585e;
  }

  .search{
    font-family: Arial;
    padding: 16px;
    width: 100%;
    border-top: 5px solid gray;
    /*border-bottom: 5px solid gray;*/
  }

  input[type=text]{
    width: 90%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
  }

  .sumbit{
    width: auto;
    padding: 10px 18px;
    background-color: #3b6b1f;
    color: white;
    font-family: Arial;
  }

  .sumbit:hover{
    opacity: 0.8;
    background-color: #63585e;
  }

  button:hover{
    opacity: 0.8;
    background-color: #63585e;
  }

  .add{
    width: auto;
    padding: 10px 18px;
    background-color: #3b6b1f;
    color: white;
    font-family: Arial;
  }

  .addbutton{
    margin: auto;
    text-align: left;
  }

  .delete{
    text-align: center;
    width: 50%;
    padding: 5px 9px;
    background-color: #d7504d;
    color: black;
  }

  .sidebar{
    float: right;
    color: black;
    margin: 25px;
  }

  table{
    font-family: Arial;
    border: 5px solid #63585e;
    width: 100%

  }

  th,td{
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
    <li class="nav" style="float: center;"><u>Search Invoice</u></li>
  </ul>

  <h3><div class="addbutton"><a href='./addInvoice.html'> <button type="button" class="add"> Add Invoice </button></a></div></h3>

  <div class="line"> </div>

  <div class="search">
    <form method="post">
      <b>Search:</b> <input type="text" placeholder="..." name="invoices_search" title="Type here">
      <input type="submit" class="sumbit" name="invoices_submit">
    </form>
  </div>
  <div class="container">
    <table>
      <tr>
        <th>Invoice ID</th>
        <th>Sale Number</th>
        <th>Invoice Date</th>
        <th>Employee ID</th>
        <th><button type="button" class="delete" name="delete"> <b>Delete</b> </button></th>
      </tr>

        <?php
        if(isset($_POST['invoices_submit'])){ // if user presses submit
            $search = $_POST['invoices_search']; //take the input 
            $sql="Select * from invoices where invoice_id ='$search' or employee_id ='$search' or invoice_date LIKE '%$search%'"; //query
            $result = mysqli_query($con,$sql); //take the result from the database
            if($result){ //if a query happened return True
                if(mysqli_num_rows($result)>0){ //if there are more than zero rows with this id
                    //print a table with the data (from boostrap)
                    while($row = mysqli_fetch_assoc($result)){ //display all the product details
                    echo '<tbody>
                    <tr>
                    <td>'.$row['invoice_id'].'</td>
                    <td>'.$row['is_sale'].'</td>
                    <td>'.$row['invoice_date'].'</td>
                    <td>'.$row['employee_id'].'</td>
                    <td><input type="checkbox" name="delete" value="delete"></td>
                    </tr>
                    </tbody>';
                    }  
                }else{
                    echo '<h3>Data not found</h3>';
                }
            }
        }
        ?>
      </table>
</body>

</html>
