<?php  include('../inc/header.php'); ?>
<?php 

    $sql = "SELECT * FROM `client` ";
    $result = mysqli_query($conn,$sql);

?>
    <h1 class="text-center col-12 bg-primary py-3 text-white my-2">All Clients</h1>
    <a class="nav-link" href="add.php">Add New</a>

    <div class="row">
        <div class="col-sm-12">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">User Name</th>
                    <th scope="col">Password</th>
                    <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>

                <?php  if(mysqli_num_rows($result) > 0): ?>
                    <?php  while($row = mysqli_fetch_assoc($result)): ?>
                    <tr>
                        <th><?php echo $row['id']; ?></th>
                        <td><?php echo $row['username']; ?></td>
                        <td><?php echo $row['password']; ?></td>
                       
                        <td>
                            <a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>"> <i class="fa fa-close"></i> </a>
                        </td>
                    </tr>

                    <?php endwhile; ?>
                <?php endif; ?>

            
                
                </tbody>
            </table>
        </div>
    </div>

<?php  include('../inc/footer.php'); ?>


 
  