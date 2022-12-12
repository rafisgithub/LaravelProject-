<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <Link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Donate Life web</title>
</head>
<body>
    <div class="container my-5">
        <h2>List of donars</h2>
        <a href="./donateblood.php" class="btn btn-outline-secondary" role="button">Add donator</a> <br>
        <table>
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Mobile No</th>
                <th>Blood group</th>
                <th>Last date of blood donation</th>
                <th>Present address</th>
                <th>gender</th>
                <th>division</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php 
            $servername ="localhost";
            $username = "root";
            $password = "";
            $database = "blood_bank_management";
            $connection =new mysqli($servername,$username,$password,$database);
            if($connection->connect_error){
                die("connection failed:" .$connection->connect_error);
            }else{
                echo "Connection successfull";
            }
           
            $sql="SELECT * FROM  blood_donators";
            $result = $connection->query($sql);
            if((!$result)){
                die("Invalid query:" .$connection->error);
            }else{
                echo "Query is exicuted succesfully.";
            }
            while($row =$result->fetch_assoc()){
                echo "
                <tr>
                <td>$row[id]</td>
                <td>$row[first_name].[last_name]</td>
                <td>$row[phone_number]</td>
                <td>$row[blood_group]</td>
                <td>$row[last_date_of_donation]</td>
                <td>$row[present_address]</td>
                <td>$row[present_address]</td>
                <td>$row[division]</td>
                <a class='btn btn-outline-primary' href='./admin/edit.php?id=$row[id]'>Edit</a>
                <a class='btn btn-outline-danger' href='./admin/delete.php?id=$row[id]'>Delete</a>
                </td>
                </tr>
                ";
            }
            ?>
        
            </tbody>
            
        </table>
    </div> 
</body>
</html>