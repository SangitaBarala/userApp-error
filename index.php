<head>
    <title>signup Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        function checkForBlank(){
            if(document.getElementById('fname').value==''){
                alert('please enter some data ');
                return false;
            }
        }
    </script>
</head>
<body style="background-color: aqua;">
<div class="container">
    <br>
    <h2 style="text-align: center">Sign Up Form !</h2><br>
    <?php
    if(isset($_GET['userAdded'])){
        ?>
    }
    <div class="alert alert-success">
        <strong>Success! </strong><?php echo $_GET['msg']?>
    </div>
    <?php
    }
    ?>
    <br>
    <form action="lib/register.php" method="post" onsubmit="return checkForBlank()">
        <div class ='form-group'>
            <label for="task">First Name:</label>
            <input type="text" class="form-control"  id="fname" placeholder="Enter first name" name="firstname">
        </div>
        <div class ='form-group'>
            <label for="task">Last Name:</label>
            <input type="text" class="form-control" placeholder="Enter last name" name="lastname">
        </div>
        <div class ='form-group'>
            <label for="task">E-mail:</label>
            <input type="email" class="form-control" placeholder="Enter email address" name="email">
        </div>
        <div class ='form-group'>
            <label for="task">Password:</label>
            <input type="password" class="form-control" placeholder="Enter password" name="pwd">
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>