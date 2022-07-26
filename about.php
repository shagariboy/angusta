<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Angusta</title>
    <link rel= "stylesheet" href= "start.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href= "https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">  
  </head>
  <body>
    <section class="sub-header">
      <nav>
        <a href="about.php"><img src= "logo.png"></a>
        <div class= "nav-links" id="navlinks">
          
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-square" viewBox="0 0 16 16" onclick="hidem()">
  <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
  <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
</svg>
          
            <ul>
                <li><a href="start.php">HOME</a></li>
                <li><a href="blog.php">BLOG</a></li>
                <li><a href="login.php">LOGIN</a></li>
                <li><a href="contact.php">CONTACT</a></li>
            </ul>
        </div>
        
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16" onclick="showm()">
  <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
</svg>
        
      </nav>
      
<!---------about -------->  
      <h1>About Angusta</h1>
    </section>
    
    <section class="about-us">

            <h1>We are the best choice to help with your speech anxiety.</h1>
            <p>Lorem ipsum dolor sit amet, ut nec consul ubique phaedrum. Duo ei moderatius conclusionemque. Id quas malis has. Wisi luptatum in est, apeirian salutandi adolescens qui an, vis incorrupte conclusionemque ut. Mea at nisl falli eligendi, cu sit unum affert civibus, in vel semper aperiri recusabo.
            Veri fugit honestatis est et. In vel semper repudiandae, ad sit minim suscipiantur. Vis nibh reformidans et, ad augue partiendo eam, vix inani mandamus in. Cu legere graeci accusam duo, elit erat contentiones mea cu, consequat urbanitas tincidunt sea te. Ex duo soleat invidunt erroribus. Eu sea maluisset laboramus, verear detracto ea usu. In audire regione principes mei. </p>
          
    </section>
    <section class="about-uss">
      
    </section>

<!---------Footer-------->   
    <section class= "footer">
      <hr>
      <h2>About Us</h2>
      <p>Dear reader(s), <br> If you have any questions or concerns regarding our privacy policy or our terms, kindly contact us.</p>
      <p>Copyright © 2022, Angusta. All rights reserved.</p>
    </section>
    
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
  </body>
</html>
