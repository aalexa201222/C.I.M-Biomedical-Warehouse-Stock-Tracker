<?php
include 'connection.php';
?>

<!DOCTYPE html>
<html>

<head>
    <title>Biomedical</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <div id="header" style="color: blue;">
        <form method="post">
            <input id="search" placeholder="Search" name="search"></input>
            <button id="searchButton" type="submit" name= "submit"><i class="fa fa-search"></i></button>
        </form>
    </div>

    <div class="container">
        <div class="table">

        <?php
        if(isset($_POST['submit'])){
            $search = $_POST['search'];
            $sql="Select * from products where product_id ='$search'";
            $result = mysqli_query($con,$sql);
            if($result){
                $num = mysqli_num_rows($result);
                echo $num ;

            }
        }
        ?>
        </div>

    </div>
    <div id="main" class="row">
        <div id="col1" class="column">
            <h2>Column 1</h2>
            <p>Some text..</p>
        </div>
        <div id="col2" class="column">
            <h2>Column 2</h2>
            <p>Some text..</p>
        </div>
        <div id="col3" class="column">
            <h2>Column 3</h2>
            <p>Some text..</p>
        </div>
        <div id="col4" class="column">
            <h2>Column 4</h2>
            <p>Some text..</p>
        </div>
        <div id="col5" class="column">
            <h2>Column 5</h2>
            <p>Some text..</p>
        </div>
        <div id="col6" class="column">
            <h2>Column 6</h2>
            <p>Some text..</p>
        </div>
    </div>

</body>
<script src="biomed.js"></script>
</html>