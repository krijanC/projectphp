<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Edit Record</h2>
    <form class="post-form" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="uid" />
        </div>
        <input class="submit" type="submit" name="showbtn" value="Show" />
    </form>

    <?php
      if(isset($_POST['showbtn'])){
        include 'config.php';

        $user_id = $_POST['uid'];

        $sql = "SELECT * FROM login WHERE uid = {$user_id}";
        $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

        if(mysqli_num_rows($result) > 0)  {
          while($row = mysqli_fetch_assoc($result)){
    ?>
    <form class="post-form" action="updatedata.php" method="post">
        <div class="form-group">
            <label for="">Name</label>
            <input type="hidden" name="uid"  value="<?php echo $row['uid']; ?>" />
            <input type="text" name="username" value="<?php echo $row['uname']; ?>" />
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="useraddress" value="<?php echo $row['uaddress']; ?>" />
        </div>
        <div class="form-group">
        <label>Class</label>
   
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="userphone" value="<?php echo $row['uphone']; ?>" />
        </div>
    <input class="submit" type="submit" value="Update"  />
    </form>
    <?php
  }
}
}

    ?>
</div>
</div>
</body>
</html>
