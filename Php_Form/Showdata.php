
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="btnStyle.css">
</head>


 
<?php

    $conn = mysqli_connect("localhost", "root", "", "information");
    if ($conn) {
        $query = "SELECT * FROM forminformation";
        $res = mysqli_query($conn, $query);
      ?>
           
          <table  border="3" style="width: 80%;">
                <tr>
                <th style="width: 10%;"><?php echo "ID" ?></th>
                    <th style="width: 20%;"><?php echo "First_Name"?></th>
                    <th style="width: 20%;"><?php echo "Last_Name"?></th>
                    <th style="width: 20%;"> <?php echo "Email"?> </th>
                    <th style="width: 10%;" > <?php echo "Password"?></th>
                    <th style="width: 20%;" colspan="2">Action</th>
                </tr>
            </table>
      <?php        $i = 1;
        while ($row = mysqli_fetch_assoc($res)){
            ?> 
            
            <table  border="3" style="width: 80%;">
                <tr>
                   <th style="width: 10%;"><?php echo $i++ ?></th>
                    <th style="width: 20%;"><?php echo $row['First_name'] ?></th>
                    <th style="width: 20%;"> <?php echo $row['Last_name'] ?> </th>
                    <th style="width: 20%;" > <?php echo $row['Email'] ?></th>
                    <th style="width: 10%;" > <?php echo $row['Password'] ?></th>
                    <th style="width: 10%;">
                    <a href="delete.php?delete=<?php echo $row['Id']; ?>" class="delete">Delete</a>
                    </th>
                    <th style="width: 10%;">
                    <a href="update.php?update=<?php echo $row['Id']; ?>" id="edit">Edit</a>

                    </th>
                </tr>
            </table>
            
            
            <?php
        }
    }

?>

