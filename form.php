
 <?php
    
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $name=$_POST['name'];
        $snum=$_POST['snum'];
        $email=$_POST['email'];
        $branch=$_POST['branch'];
        
        
        $servername="localhost";
        $username="root";
        $passward="";
        $database="ieee";
      
        $conn=mysqli_connect($servername,$username,$passward,$database);
      
    
     $sql="INSERT INTO `ieee` ( `name`, `scholar no`, `email`, `branch`, `time`) VALUES ( '$name', '$snum', '$email', '$branch', current_timestamp())";
     $result=mysqli_query($conn,$sql);
     if($result){
       echo'<div class="alert alert-success" role="alert">
       <h4 class="alert-heading">Well done!</h4>
       <p> you successfully registered</p>
  
     </div>';
     }

    }
?>



<!doctype html>
<html lang="en">
 <style>
  body{
        background-image: url("back.jpeg");
        background-repeat: no-repeat;
        background-size: cover;
  }

  .form{
          margin: auto;
          max-width: 350px;
          background: rgba(0,0,0,0.8);
          padding: 45px;
          margin-top: 90px;
          color: white;
          border-radius: 20px;
  }
  h3{
    text-align: center;
  }
  input[type=text],input[type=email],input[type=number],input[type=email]{
    width: 100%;
    box-sizing: border-box;
    border-radius: 20%;
    padding: 5px;
  }
  input[type=submit]{
         
         width:100%;
         box-sizing: border-box;
         border-radius: 20%;
         padding: 5px;
         margin-top: 20px;
         text-align: center;
         background-color: lightskyblue;
         
  }

  .home{
      margin:10px;
  }
  h4{
      color:yellow;
  }
 </style>    


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>IEEE!</title>
  </head>
  <body>
    <div class="home">
       <a href="home.html"><h4><span><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-arrow-left-short" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"/>
</svg></span>Home</h4></a>
    </div>
  
      <div class="form">
        <h3>Register here</h3>
      <form action="form.php" method="POST">     
        <input type="text"  id="name" placeholder="name" name="name" >
        <input type="number"  id="snum" placeholder="scholar number" name="snum"> 
        <input type="email"  id="email" placeholder="email" name="email" aria-describedby="emailHelp">
        <input type="text"  id="branch" placeholder="branch" name="branch" >
        <input type="submit" placeholder="submit" > 
      </form>
      </div>
    
     
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>