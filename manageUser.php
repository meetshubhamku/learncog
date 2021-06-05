<?php 
session_start(); 
if(!isset($_SESSION['urole']) || $_SESSION['urole']!=1)
{
  echo "<script>alert('Invalid request. Please Login')</script>";
  echo "<script>window.location.replace('./login.php');</script>";
}
else
{
  include "./db.php";
  $sql="select user_id, user_name, user_email, is_block from users where user_role=0 order by user_name";
  $result = $conn->query($sql);
}
?>

<!DOCTYPE html>
<html lang="en">
<?php include "./head.php"; ?>
<body>
<?php include "./navbar.php"; ?>

<div class="container">
  <h2 class="text-center mt-4">User Management</h2>
  <h6 class="text-center mt-1 mb-4">Order By User Name</h6>
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Status</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
        if ($result->num_rows > 0) 
        {
          while($row = $result->fetch_assoc()) 
          {
            ?>
              <tr>
                <th scope="row"><?php echo $row['user_id']; ?></th>
                <td><?php echo $row['user_name']; ?></td>
                <td><?php echo $row['user_email']; ?></td>
                <td class="<?php echo $row['is_block']==0?'text-success':'text-danger'; ?>">
                  <?php
                    if($row['is_block']==0){
                      echo "Active";
                    }
                    else{
                      echo "Inactive";
                    }
                  ?>
                </td>
                <td>
                  <?php
                    if($row['is_block']==0){
                      ?>  
                        <a style="min-width: 8.5rem;" href="./userAuth.php?user_id=<?php echo $row['user_id']; ?>&type=block" class="btn font-weight-bold btn-danger text-left">
                          <i class="mr-1"><img src="https://img.icons8.com/material/24/ffffff/lock.png"/></i>
                          Block
                        </a>
                      <?php
                    }
                    else{
                      ?>
                        <a style="min-width: 8.5rem;" href="./userAuth.php?user_id=<?php echo $row['user_id']; ?>&type=unblock" class="btn font-weight-bold btn-success text-left">
                          <i class="mr-1"><img src="https://img.icons8.com/material/24/ffffff/unlock.png"/></i>
                          Unblock
                          </a>
                      <?php
                    }
                  ?>
                </td>
              </tr>
            <?php
          }
        }
        else
        {
          ?>
            <h3 class="text-center text-danger my-5">No users available</h3>
          <?php
        }
      ?>
    </tbody>
</table>
</div>

<?php include "./footer.php"; ?>
</body>
</html>