<?php  include('../inc/header.php'); ?>
<?php 

    $sql = "SELECT * FROM `playground` ";
    $result = mysqli_query($conn,$sql);

?>
    <h1 class="text-center col-12 bg-primary py-3 text-white my-2">All Playgrounds</h1>

    <div class="row">
        <div class="col-sm-12">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    </tr>
                </thead>
                <tbody>

                <?php  if(mysqli_num_rows($result) > 0): ?>
                    <?php  while($row = mysqli_fetch_assoc($result)): ?>
                    <tr>
                        <th><?php echo $row['id']; ?></th>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['price']; ?></td>
                      
                    </tr>

                    <?php endwhile; ?>
                <?php endif; ?>

            
                
                </tbody>
            </table>
        </div>
    </div>

<?php  include('../inc/footer.php'); ?>

 
  