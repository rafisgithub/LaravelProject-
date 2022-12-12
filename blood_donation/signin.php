<?php
include_once __DIR__.'/includes/header.php';
?>
<?php 
$servername ="localhost";
$username = "root";
$password = "";
$database = "blood_bank_management";
//create connection
$connection = new mysqli($servername, $username, $password, $database);

$email="";
$password="";
$confirm_password="";

$errorMessage="";
$successMessage="";

if($_SERVER['REQUEST_METHOD']=='POST'){
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

   do{
    if(empty($email) || empty($password) || empty($confirm_password)){
        $errorMessage="All the fiedls are requied";
        break;
    }
    //add new client to database

    $sql = "INSERT INTO signin_infos (email,password,confirm_password)" .
    "VALUES ('$email','$password','$confirm_password')";
    $result = $connection->query($sql);
    if(!$result){
        $errorMessage = "Invalid query:" >$connection->error;
        break;
    }

    $email="";
    $password="";
    $confirm_password="";
    $successMessage="client added successfully.";
    
    header("location :./signin.php");
    exit;

   }while(false);
}
?>
      <main>
        <section class="container">
        <?php
        if(!empty($errorMessage)){
            echo "
    <div class='alert alert-warning alert-dismissible fade show' role='alert'>
    <strong>$errorMessage</strong>
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    </div> ";
        }
        ?>
            <form action="" method="POST">
                <div class="grid gap-6 mb-6 md:grid-cols-2">                                                                          
                </div>
                <div class="mb-6">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your Email</label>
                    <input type="email" name="email" value="<?php echo $email; ?>" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-50 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ener your email" required="">
      
                </div> 
                <div class="mb-6">
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Password</label>
                    <input type="password" name="password" value="<?php echo $password; ?>" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-50 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="•••••••••" required="">
                </div> 
                <div class="mb-6">
                    <label for="confirm_password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Confirm password</label>
                    <input type="password" name="confirm_password" value="<?php echo $confirm_password; ?>" id="confirm_password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-50 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="•••••••••" required="">
                </div>
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                <button type="reset" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Reset</button>
                <p>don't have any account? <a href="signup.php">Signup</a></p>
            </form>
            
        </section>
        <?php
        if(!empty($successMessage)){
            echo "
             <div class='alert alert-warning alert-dismissible fade show' role='alert'>
             <strong>$successMessage</strong>
             <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
             </div> ";
        }
        ?>
</main>
<?php
include_once __DIR__.'/includes/footer.php';
?>
      
      