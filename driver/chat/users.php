<?php 
  session_start();
  include_once "php/config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
  }
?>
<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="users">
      <header>
        <div class="content">
          <?php 
            $sql = mysqli_query($conn, "SELECT * FROM userd WHERE unique_id = {$_SESSION['unique_id']}");
            if(mysqli_num_rows($sql) > 0){
              while ($row = mysqli_fetch_array($sql)) {
                $state = $row['status'];
              }
            }
          ?>
          <img src="../../images/avatar/<?php echo $_SESSION['profileimg']; ?>" alt="">
          <div class="details">
            <span><?php echo $_SESSION['firstname'] ?> <?php echo $_SESSION['lastname'] ?></span>
            <p><?php echo $state; ?></p>
          </div>
        </div>
        <a href="../index.php" class="logout">Return to Home</a>
      </header>
      <div class="search">
        <span class="text">Select any Admin to start chat</span>
        <input type="text" placeholder="Enter name to search...">
        <button><i class="fas fa-search"></i></button>
      </div>
      <div class="users-list">
  
      </div>
    </section>
  </div>

  <script src="javascript/users.js"></script>

</body>
</html>
