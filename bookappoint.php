<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Angusta</title>
    <link rel= "stylesheet" href= "uD.css">
    <link rel= "stylesheet" href= "start.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href= "https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css"> 
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<script src="https://accounts.google.com/gsi/client" onload="console.log('g_id_onload')"> </script>
<script type="text/javascript"
      src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js">
</script>
<script type="text/javascript">
  (function(){
     emailjs.init("teNl4WUP9Sj8LxBNR");
  })();
 </script>

  </head>
  <body>
    <section class="header">
      <nav>
        <a href="uD.php"><img src= "logo.png"></a>
        <div class= "nav-links" id="navlinks">
          
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-square" viewBox="0 0 16 16" onclick="hidem()">
  <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
  <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
</svg>
          
          <ul>
            <li><a href="book.php">BOOK AN APPOINTMENT</a></li>
            <li>
              <a href="#" data-toggle="dropdown" class=" nav-links dropdown-toggle" aria-expanded="false" >
                <span id="userId"></span>&nbsp<i class="fa-solid fa-chess-pawn fa-7x"></i>
              </a>
              <div class="dropdown-menu">					
                <a href="#" class="dropdown-item">Profile</a>
                <a href="#" class="dropdown-item">Account Settings</a>
                <a href="start.php" class="dropdown-item">Log Out</a>
                
              </div>
            </li>
          </ul>
        </div>

        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16" onclick="showm()">
  <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
</svg>       
      </nav>         
    
      
    
    
  </section>
    
  <section class="bookbody">
      <div class="container">
        <div class="title">Please fill-in the following details:</div>
        <form action="#">
          <div class="user-details">
                <div class="input-box">
                    <span class="details">First Name</span>
                    <input type="text" placeholder="Enter your first name" required>
                </div>
                <div class="input-box">
                    <span class="details">Last Name</span>
                    <input type="text" placeholder="Enter your last name" required>
                </div>
                <div class="input-box">
                    <span class="details">Email address</span>
                    <input type="email" placeholder="Enter your email" required>
                </div>
                <div class="gender-details">
                    <span class="gender-title">Gender</span>
                    <div class="category">
                        <label for="">
                    
                            <input type="radio" name="gender" id="dot-1">
                            <span class="gender">Male</span>
                        </label>
                        <label for="">
                            
                            <input type="radio" name="gender" id="dot-2">
                            <span class="gender">Female</span>
                        </label>
                        <label for="">
                            
                            <input type="radio" name="gender" id="dot-3">
                            <span class="gender">Prefer not to specify</span>
                        </label>
                    </div>
                </div>
                <div class="DOB">
                    <span class="dob-details">Date of Birth</span>
                    <input type="date" name="date" value="" required></input>
                </div>
                <div class="Appointment">
                    <span class="app-details">Appointment Date</span>
                    <input type="date" name="date" value="" required></input>
                </div>
                <div class="time">
                    <span class="timing">Appointment Time</span>
                    <input type="time" name="time" value="" required></input>
                </div>
                <div class="input-box">
                    <tr>
                        <td><span class="details">Reason for Appointment </span></td>
                        <td>
                            <select>
                                <option>Select your reason</option>
                                <option>1 </option>
                                <option>2 </option>
                                <option>3 </option>
                                <option>4 </option>
                                <option>Other: Please specify below</option>
                            </select>
                        </td>
                    <input type="text" placeholder="Other" required>
                    </tr>              
                </div>
                <div class="bookbutton"> 
                    <input type="submit" value="Book Appointment"> 
                </div>
          </div>
        </form>
      </div>
    </section>
<!---------Footer-------->   
    <section class= "footer">
      
      <h2>About Us</h2>
      <p>Dear reader(s), <br> If you have any questions or concerns regarding our privacy policy or our terms, kindly contact us.</p>
      <p>Copyright © 2022, Angusta. All rights reserved.</p>
      
    </section>
    <div class="wrapper">
      <ul class="colorlib-bubbles">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
      </ul>
      </div>
    

<!---------Javascript for toggle menu-------->   
    <script>
      
      var navlinks = document.getElementById("navlinks")
      function showm(){
        navlinks.style.right = "0";
      }
      function hidem(){
        navlinks.style.right = "-200px";
      }
      
    </script>
    <script src="/script/scriptHome.js"></script>
    <script src="https://smtpjs.com/v3/smtp.js"></script>
    
   
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="pop.js"></script>
<script src="emailJs.js"></script>
  </body>
</html> 