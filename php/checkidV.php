<!DOCTYPE html>
<html lang="en">
<head>
<title>Login System</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../css/mystyle.css">

</head>
<body>
  
    <ul class="topnav">
    <li><a href="../index.html">Home</a></li>
    <li><a href="../login.html" class="active">Login</a></li>
    </ul>

    <div class="header">
      <h1>Dark from Damn</h1>
      <p>To be, or not to be: that is the question.</p>
	  <p><?php include "connectionChk.php"; ?></p>
    </div>

    <div class="card">
          <h2>User System</h2>
          <h5><span id="time"></span></h5>

          <h2 id="demo1" style="font-weight:bold;"></h2>
		  <p id="demo2"></p>
      <script>var chk_p = <?php include "checkidSql.php";?>; var chk = chk_p.slice(0,1); console.log(chk);</script>
      <script>var chkPermission = chk && <?php if($uname=="HEN"){echo 1; }else{echo 0;}?>;</script>
      <script src = "../js/myFunction.js"></script>
      <script>colorChange(); </script>
    <div>

<form id="postFormU" style="display: none;" method="post" action="main.php">
    <select name="subject[]">
        <option value="Status">Status</option>
        <option value="Message">Message</option>
        <option value="Change">Change</option>
        <option value="Open">Open</option>
    </select><br><br>
    <input type="submit" name="submit" value="Search">
</form>
    
<!-- <form id="postForm" style="display: none;" method="post" onsubmit="return validateForm()" action="main.php"> -->
<form id="postForm" style="display: none;" method="post" action="main.php">
    <select name="subject[]">
        <option value="Status">Status</option>
        <option value="Message">Message</option>
        <option value="Change">Change</option>
        <option value="Open">Open</option>
        <option value="Update">Update</option>
        <option value="Insert">Insert</option>
        <option value="Delete">Delete</option>
    </select><br><br>
    <input type="submit" name="submit" value="Search">
</form>

<script>validateForm();</script>

</body>
</html>