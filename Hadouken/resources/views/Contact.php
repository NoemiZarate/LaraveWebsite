<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
	
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<style type="text/css">
#bg{
  margin-top: 20px;
  text-align: center;
  background-position: center;
  font-family: sans-serif;
}
.contact-title{
  transition: uppercase;  
  transition: all 4s ease-in-out;
}
h1{
  font-size: 32px;
  line-height: 10px;
}
h2{
  font-size: 16px;
}
.form-control{
  position: center;
  width: 600px;
  background: transparent;
  border: none;
  outline: none;
  border-bottom: 1px solid gray;
  color: #000000;
  margin-bottom: 16px
}
input{
  height: 45px;
  text-align: center;
}
#bod{
  height: 100%
}
form .submit{
  background: gray;
  border-color: transparent;
  font-size: 20px;
  font-weight: bold;
  letter-spacing: 2px;
  height: 50px;
  margin-top: 20px
}
form .submit:hover{
  background-color: white;
  cursor: pointer;
}
</style>
</head>
<body>
<div class="card" id="bod">
  <div class="card-header">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
          <a class="navbar-brand" href="#">Team Hadouken</a>
          
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="Home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="About.php">About Us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="Contact.php">Contact Us</a>
                </li>
              </ul>
          </div>
        </div>
    </nav>
  </div>

  <div class="card-body" id="bg" >
    <div class="contact-title">
      <h1>Say Hello</h1>
      <h2>We are always ready to serve you!</h2>
    </div><br><br>

    <div class="conatct-form" align="center">
      <form id="conatct-form" method="POST" action="Contact.php">
        <input type="text" name="name" class="form-control" placeholder="Your Name">
        <br>
       <input type="text" name="email" class="form-control" placeholder="Your Email">
       <br>

       <textarea name="message" class="form-control" placeholder="message" row="4" > </textarea>
       <br>
       <input type="submit" name="submit" class="submit" value="SEND MESSAGE">

      </form>
    </div>
  </div>



    <div class="card-footer " >
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">&copy Team Hadouken</a>
        </div>    
      </nav>
    </div>
</div>
</body>
</html>