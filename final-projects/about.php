<?php

session_start();

if(!isset($_SESSION['UserName'])) {
    $_SESSION['msg'] = 'You must log in first';
    header('Location: login.php');
}

if(isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['UserName']);
     header('Location: login.php');
}


include('config.php');
include('includes/header.php');

?>

    <main>
        <h1><?php echo $mainHeadline; ?></h1>
        <a href="images/db_screenshot.JPG" target="_blank"><img src="images/db_screenshot.JPG" alt="Database table" style="border: 1px solid black; box-shadow: 0 10px 10px -10px rgb(129, 129, 129)"></a>
        <a href="images/db_screenshot.JPG" target="_blank"><img src="images/db_screenshot1.JPG" alt="Database table" style="border: 1px solid black; box-shadow: 0 10px 10px -10px rgb(129, 129, 129)"></a>
    </main>

    <aside>
        <h3>Database Table</h3>
        <p>Screenshot of the SQL database table for the <a href="actor.php">Actor</a> page.
    </aside>
    

<?php

include('includes/footer.php');

?>