<?php
include('db.php');


// $id =$_GET['token'];
// echo $id;


    $id = mysqli_real_escape_string($conn,$_GET['id']);
    mysqli_query($conn,"UPDATE reg_user set verification_status='1' WHERE id='$id'");
    echo "Your  Account Verified";



?>

<a href="login.php">click here to login</a>
<!-- <script>
    window.location.href='login.php';
</script> -->
