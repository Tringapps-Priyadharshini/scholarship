<?php
include("link.php");
?>
<html>
<body>
<nav class="navbar navbar-expand-md">
       
            <a class="navbar-brand" href="#">
            <img src="logo.png" alt="" width="100" height="70">
             </a><h3><font color="white">THIAGARAJAR COLLEGE</font></h3>
 
        <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="main-navigation">
            <ul class="navbar-nav">
                              <li class="nav-item">
                              <a class="nav-link" href="#">HOME</a></li>
                          <li class="nav-item">
                          <a class="nav-link" href="login.php">LOGIN</a>
                      </li>        
                          <li class="nav-item">
                          <a class="nav-link" href="register.php">REGISTER</a>
                      </li> 
                      <li class="nav-item">
                          <a class="nav-link" href="contactus.html">CONTACT US</a>
                      </li>    
                          </ul>
        </div>
    </nav>
</body>
</html>







<style>

.navbar {
    background:blue;
}
.nav-link,
.navbar-brand {
    color: #fff;
    cursor: pointer;
}
.nav-link {
    margin-right: 1em !important;
}
.nav-link:hover {
    color: #000;
}
.navbar-collapse {
    justify-content: flex-end;
}


</style>