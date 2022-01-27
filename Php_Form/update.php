<?php
include ('config.php');

$first = '';
$last = '';

if (isset ($_GET['update'])){
    $id = $_GET['update'];
    if($id)
    {
        $query = "SELECT * FROM forminformation WHERE Id = '$id'";
        $res = mysqli_query($conn,$query);
        $row = mysqli_fetch_assoc($res);
        $first = $row['First_name'];
        $last = $row['Last_name'];

    }

    if (isset ($_POST['update'])){
        $first = $_POST['first_name'];
        $last = $_POST['last_name'];
        $query = "UPDATE forminformation SET First_name = '$first', Last_name = '$last' WHERE Id = '$id' ";
        $res = mysqli_query($conn, $query);
        if ($res){
            header("location:Showdata.php");
            die();
        } else {
            echo "soething wrong";
        }
    }
    
}

?>
<head> 
    <title>User  ragistration form</title>
    <link rel="stylesheet" type ="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type ="text/css" href="style.css">
</head>
<body>
    <div>
        <form action="" method="post">
            <div class ="container">
                <div class="row justify-content-center"> 
                    <div calss ="col-sm-3"> 
                        <h1>Update Form</h1>
                        <p><b>Fill up the form with correct values</b></p>
                        <br>
                        <label for=" first name"><b>First Name</b></label>
                        <input class="form-control" type="text" name = "first_name" value =<?php echo $first ?> required>

                        <label for=" last name"><b>Last Name</b></label>
                        <input class="form-control" type="text" name = "last_name" value =<?php echo $last ?> required>

                        <br>
                        <input class="btn btn-primary" type="submit" name = "update" value ="UPDATE">
                        
                        <br>
                        <br>
                       
                    </div>

                </div>

            </div>
        </form>
    </div>
</body>