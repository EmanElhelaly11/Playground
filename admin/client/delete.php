<?php  include('../inc/header.php'); ?>

<?php 

    if(!isset($_GET['id']) or !is_numeric($_GET['id']))
    {
        header("Location:client.php");
    }
    $id = $_GET['id'];
    $sql = "SELECT * FROM client  WHERE id='$id' LIMIT 1 ";
    $result = mysqli_query($conn,$sql);
    $check = mysqli_num_rows($result);
    if(!$check)
    {
        header("Location:client.php");
    }
    
    $sql2 = "DELETE FROM client WHERE id='$id' ";
    mysqli_query($conn,$sql2);

?>



    <h1 class="text-center col-12 bg-danger py-3 text-white my-2"> Client Has Been Deleted </h1>
    <?php header("refresh:3;url=client.php"); ?> 
  
   
<?php  include('../inc/footer.php'); ?>

 
  