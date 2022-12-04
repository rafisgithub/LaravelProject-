<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <Link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>My shop</title>
</head>
<body>
    <div class="container my-5">
        <h2>List of clients</h2>
        <a href="./create.php" class="btn btn-outline-secondary" role="button">New Client</a> <br>
        <table>
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Created at</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php 
            $servername ="localhost";
            $username = "root";
            $password = "";
            $database = "myshop";
            $connection =new mysqli($servername,$username,$password,$database);
            if($connection->connect_error){
                die("connection failed:" .$connection->connect_error);
            }else{
                echo "Connection successfull";
            }
           
            $sql="SELECT * FROM clients";
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
                <td>$row[name]</td>
                <td>$row[email]</td>
                <td>$row[phone]</td>
                <td>$row[address]</td>
                <td>$row[created_at]</td>
                <td>
                <a class='btn btn-outline-primary' href='./edit.php?id=$row[id]'>Edit</a>
                <a class='btn btn-outline-danger' href='./delete.php?id=$row[id]'>Delete</a>
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