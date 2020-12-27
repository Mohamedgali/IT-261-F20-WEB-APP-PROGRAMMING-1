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
   
    <h1><?php echo $mainHeadline;?></h1>
    <?php include('includes/form.php'); ?>
    </main>
    
    <aside>
        <h2>Give us your feedback</h2>
        <p>Let us know your thoughts on our website and share with us some of your preferred gaming platforms! You may also choose to subscribe to our mailing list, which doesn't actually do anything at the moment.</p>
        
    
    </aside>

    
    

    
<?php
include('includes/footer.php');
?>