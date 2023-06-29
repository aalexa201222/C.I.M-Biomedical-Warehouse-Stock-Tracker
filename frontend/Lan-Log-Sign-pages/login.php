<?php
include '../mainpage/connection.php';
?>

<!DOCTYPE html>
<html>
<style>

    /*set border to the form*/
    form {
        border: 5px solid #63585e;
        text-align: center;
        width: 60%;
        margin: auto;
    }

    body {
        font-family: Verdana,sans-serif;
        font-size: 15px;
        line-height: 1.5;
        color: #0E131F;
        background: #B9C0DA;
    }

    h2{
      text-align: center;
      background: #62ab37;
      color: #f1f1f1;
    }


    /*assign full width inputs*/
    input[type=text],
    input[type=password] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }

    /*set a style for the buttons*/
    button {
        background-color: #3b6b1f;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
        font-family: Verdana,sans-serif;
    }

    /* set a hover effect for the button*/
    button:hover {
        opacity: 0.8;
        background-color: #63585e;
    }

    /*set extra style for the cancel button*/
    .cancelbtn {
        width: auto;
        padding: 10px 18px;
        background-color: #f44336;
    }

    /*centre the display image inside the container*/
    .imgcontainer {
        text-align: center;
        margin: 24px 0 12px 0;
    }

    /*set image properties*/
    img.avatar {
        width: 40%;
        border-radius: 50%;
    }

    /*set padding to the container*/
    .container {
        padding: 16px;
        text-align: center;
        background: #62ab37;
    }

    /*set the forgot password text*/
    span.psw {
        float: right;
        padding-top: 16px;
    }

    /*set styles for span and cancel button on small screens*/
    @media screen and (max-width: 300px) {
        span.psw {
            display: block;
            float: none;
        }
        .cancelbtn {
            width: 100%;
        }
    }
</style>

<body>

    <h2>Login</h2>
    
    <!-- <form action="/action_page.php"> -->
        <div class="imgcontainer">
            <img src="https://i.imgur.com/gq738mR.png" alt="Avatar" class="avatar">
        </div>

        <div class="container">
            <form method="post">
                <label><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="username" required>

                <label><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" required>

                <button type="submit" name="submit">Login</button>
                <input type="checkbox" checked="checked"> Remember me
            </form>
        </div>
        <div class="container">
            <?php
            if(isset($_POST['submit'])){ // if user presses submit
                $username = $_POST['username']; //take the input 
                $password = $_POST['password']; //take the input 
                $sql="Select * from employees where username ='$username' and password ='$password'" ; //query
                $result = mysqli_query($con,$sql); //take the result from the database
                if($result){ //if a query happened return True
                    if(mysqli_num_rows($result)>0){ //if there are more than zero rows with this id
                        

                        header("Location: ../index.html");
                        
                    }else{
                        header("Location: fail_login.php");
                    }
                }
            }
            ?>
        </div>
        

        <div class="container" style="background-color: #62ab37">
            <a href='./landingpage.html'>
              <button type="button" class="cancelbtn">
                Cancel
              </button>
            </a>
        </div>
    <!-- </form> -->

</body>

</html>
