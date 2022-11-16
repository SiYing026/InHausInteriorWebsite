<?php 
  session_start();
  include_once "php/config.php";
  if(!isset($_SESSION['user_id'])){
    header("location: login.php");
  }
?>



<?php include_once "header.php"; ?>
<style>
  
  ul{
  background-color: #c4a27f;
	display: flex;
	width: 100%;
	height: 10vh;
	margin: auto;
	justify-content: space-between;
	text-align: center;
}
li {
	padding: 1rem 2rem 1.15rem;
  text-transform: uppercase;
  cursor: pointer;
  color: #ebebeb;
	min-width: 80px;
	margin: auto;
}

li:hover {
  background-image: url('https://scottyzen.sirv.com/Images/v/button.png');
  background-size: 100% 100%;
  color: #27262c;
  animation: spring 300ms ease-out;
  text-shadow: 0 -1px 0 #ef816c;
	font-weight: bold;
}
li:active {
  transform: translateY(4px);
}

</style>
<body>
<ul>
	<li><a aria-current="page" href="index.html">Home</a></li>
	<li><a href="about-us.html">About</a></li>
	<li> <a href="typography.html">Typography</a></li>
	<li><a href="appointmentForm.php">Appointment</a></li>
  <li><a href="users.php">Chat</a></li>
  <li><a href="profile.php">Profile</a></li>
</ul>

  <div class="body" >
  <div class="wrapper">
    <section class="users">
      <header>
        <div class="content">
          <?php 
            $sql = mysqli_query($conn, "SELECT * FROM user WHERE user_id = {$_SESSION['user_id']}");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
          ?>
          <div class="details">
            <span><?php echo $row['name']?></span>
            <p><?php echo $row['status']; ?></p>
          </div>
        </div>
        <a href="php/logout.php?logout_id=<?php echo $row['user_id']; ?>" class="logout">Logout</a>
      </header>
      <div class="search">
        <span class="text">Select an user to start chat</span>
        <input type="text" placeholder="Enter name to search...">
        <button><i class="fas fa-search"></i></button>
      </div>
      <div class="users-list">
  
      </div>
    </section>
  </div>

  <script src="javascript/users.js">
  </script>

  </div>

</body>
</html>
