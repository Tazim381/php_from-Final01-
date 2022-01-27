<html>

<?php
include ("config.php");
?>

<head> 
    <title>User  ragistration form</title>
    <link rel="stylesheet" type ="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type ="text/css" href="style.css">
</head>


<body>
    <div>
        <form action="registration.php" method="post">
            <div class ="container">
                <div class="row justify-content-center"> 
                    <div calss ="col-sm-3"> 
                        <h1>Registration Form</h1>
                        <p><b>Fill up the form with correct values</b></p>
                        <br>
                        <label for=" first name"><b>First Name</b></label>
                        <input class="form-control" type="text" name = "first_name" required>

                        <label for=" last name"><b>Last Name</b></label>
                        <input class="form-control" type="text" name = "last_name" required>

                        <label for=" Email"><b>Email</b></label>
                        <input class="form-control" type="text" name = "email">

                        <label for=" Password"><b>Password</b></label>
                        <input class="form-control" type="password" name = "password">

                        <br>
                        <input class="btn btn-primary" type="submit" name = "create" value ="Submit">
                        
                        <br>
                        <br>
                        <button class="btn btn-primary" onclick="window.location.href='Showdata.php';"> SHOW DATABASE </button>
                    </div>
                </div>

            </div>
        </form>
    </div>


<?php
  if(isset($_POST['create']))
  {
    $firstname = $_POST['first_name'];
    $lastname = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "INSERT INTO forminformation(first_name,last_name,email,password) VALUES('$firstname','$lastname','$email','$password')";
    $res = mysqli_query($conn,$query);
    if($res) { echo "<h2> Data inserted </h2>";}
    else echo "Not inserted";

    echo $firstname ." ".$lastname." ".$email." ".$password;
}
else echo 'Not submitted';


if(isset($_POST['create']))
  {
?>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   <script src="//cdn.jsdelivr.net/npm/sweetalert2@8"></script>
   <script type="text/javascript">


       $(function()
       {
        Swal.fire({
         'title': 'congratulations',
         'text':'Your information entered tazims database',
         'type':'success'
        })
       }      
       );
<?php
    }
?>
</script>


</body>
</html>