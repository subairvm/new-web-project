<?php
if( isset($_POST['email']) && $_POST['email']!= ''){
   
  if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){

 
  
  //submit the form
$userName = $_POST['name'];
$userSecondName = $_POST['secondname'];
$message = $_POST['message'];
$messageSubject = $_POST['subject'];

$to = "subairvm69@gmail.com";
$body = "";

$body .="From: ".$userName."\r\n";
$body .="Email: ".$userName. "\r\n";
$body .="Message: ".message. "\r\n";
mail($to,$messageSubject,$body);
//mail($to,$messageSubject,&body);
$message_sent =true;
}
else{$invalid_class_name = "form-invalid";

}

}
?>

<!DOCTYPE html>
<html lang="en" style="scroll-behavior: smooth;">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JEVA</title>
    <link rel="icon" href="LOGO.jpg" type="image/gif" sizes="16x16">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>




    <header class="bg-primary" style="position: fixed;width: 100%; z-index: 1; height: 60px;">
        <div class="row text-white">
            <div class="col-md-6  p-3 pl-5">
  
                <h2>JEVA-R</h2>
            </div>
            <div class="col md-6  my-auto ml">
                <nav class="navbar navbar-expand-lg navbar-light ml-auto">
                    <a class="navbar-brand" href="#"></a>
                    <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                  
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                          <a class="nav-link text-white" href="#home-section"><span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link text-white" href="#event-section"></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#another event-section"></a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link text-white" href="#pd-section"></a>
                          </li>
                          
                        <li class="nav-item">
                          
                        </li>
                      </ul>
                      
                    </div>
                  </nav>
            </div>
        </div>

    </header>
   
    


         

        
    

      
   
    <section class="" id="home-section" style="padding-top: 6em;" class="P-5 bg-light font-white " id="pd-section">
    
      
      <div class="container P-5">
        <h2 class="text-center bg-light">Personol Details</h2>
        <div class="row">
          <div class="col-md-12">

      <form action="" method="POST">
     
      
        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" placeholder="First Name">
            
          </div>
          
          <div class="form-group col-md-4">
            <label for="name2">Second Name</label>
            <input type="text" class="form-control" id="name2" placeholder="Second Name">
          </div>
          <div class="form-group col-md-4">
            <label for="name3">Last Name</label>
            <input type="text" class="form-control" id="name3" placeholder="Last Name">
          </div>
        </div>
        
        <div class="form-group ">
          <label for="inputAddress">Address</label>
          <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
        </div>
        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="name">Place in Saudi</label>
            <input type="text" class="form-control" id="name" placeholder="Place in Saudi">
            
          </div>
          <div class="form-group col-md-4">
            <label for="name">Duration In Outside</label>
            <input type="text" class="form-control" id="name" placeholder="Outside Duration">
            
          </div>
          <div class="form-group col-md-4">
            <label for="name">Stay In India</label>
            <input type="text" class="form-control" id="name" placeholder="Year">
            
          </div>

        </div>
          
        
          
        
        <div class="form-row">
          <div class="form-group col-md-3">
            <label for="inputCity">City</label>
            <input type="text" class="form-control" id="inputCity">
          </div>
          <div class="form-group col-md-3">
            <label for="inputState">State</label>
           
            <select id="inputState" class="form-control">
              <option selected>Choose</option>
              <option value="1">Kerala</option>
              <option>Tamilnadu</option>
              <option value="1">Other</option>
              
            </select>
          </div>
          <div class="form-group col-md-3">
            <label for="inputZip">Zip</label>
            <input type="text" class="form-control" id="inputZip">
          </div>
          <div class="form-group col-md-3">
            <label for="inputmobile">Mo.Number</label>
            <input type="tel" class="form-control" id="inputmobile" placeholder="Mobile Number">
          </div>
        </div>
        
              
            </label>
          </div>
        </div>
      <div class="form-group text-center">
        <button type="submit" class="btn btn-primary m-auto">Submit</button>
      </div>
     
      </form>
    </div>
    </div>
  </div>
    </section>
    <footer class="bg-info">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center text-white">
            <a href="https://rss.com/" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a>
            <a href="https://www.facebook.com/?ref=tn_tnmn" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a>
            <a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a>
            <a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a>
            <a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a>
            
            <div>
              <p class="fa fa-copyright" >Copyrights</p>
             
                
              
            </div>

          </div>
        </div>

      </div>

    </footer>

  




    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/f688788c08.js" crossorigin="anonymous"></script>
</body>
</html>