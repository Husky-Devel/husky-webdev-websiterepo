<head>
    <title>West Rolleston</title>
    <link rel="stylesheet" type="text/css" href="CSS/styles.css" />
    <link rel="stylesheet" type="text/css" href="CSS/Topnav.css" />
  </head>
<body>
  <div class="wrapper">
  <header role="banner">
    <nav role="navigation">
      <p>
        <a href="index.php">
          <img src="./Images/small-logo2.png" />
        </a>
      </p>

      <div class="topnav">
        <a class="active" href="index.php">Home</a>
        <a href="Contact.php">Contact</a>
        <a href="About-us.php">About </a> 
        <a href="Our-story.php">Reference</a> 
        <a href="Where-are-we.php">Where are we?</a>
        <a href="Sineup.php ">Sign up</a>
    </nav>
  </header>
  <main role="main">
    <section class="sec-intro" role="section">
      <img src="./Images/Headerimg.jpg" alt="West Rolleston is a great school" />
      <footer>
        <div role="navigation">
          <ul class="nav-ul">
  </div>

<div class="body">
Thank for signing up!
</div>
<div class="body">
  
</div>
<div class="body">

<?php
$host = 'westrolleston-huskys-website-1-database.database.windows.net';
$username = 'Husky';
$password = ' Westrollestonschool1';
$db_name = 'westrolleston-huskys-website-1-database.database.windows.net';


$conn = mysqli_init();

printf("hello")
mysqli_real_connect($conn, $host, $username, $password, $db_name, 3306);
if (mysqli_connect_errno($conn)) {
printf("sory");
die('Failed to connect to MySQL: '.mysqli_connect_error());
}


if (mysqli_query($conn, '
select * from table1;
')) {
printf("Table created\n");
}


mysqli_close($conn);
?php>
  
</div>
</body>
</html>



    