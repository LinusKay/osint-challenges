<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST['username']) && isset($_POST['password'])){
        if($_POST['username'] == 'soniq' && $_POST['password'] == 'admin123'){
            session_start();
            $_SESSION['loggedin'] = true;
            header('Location: admin.php');
        }
    } 
}
?>
<?php include('header.php'); ?>
    <form id="login" action="login.php" method="POST">
        <p>Please login to access this page.</p>
        <label for="username">Username: </label>
        <input name="username">
        <br>
        <label for="password">Password: </label>
        <input name="password">
        <br>
        <input type="submit" value="Login">
    </form>
<?php include('footer.php'); ?>