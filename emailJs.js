function sendMail(params) {
    var tempParams = {
      from_name:document.getElementById("name").value,
      email_id:document.getElementById('email').value,
      message:document.getElementById("message").value,
    };
  
    emailjs.send("service_5rg4jzd", "template_d3n7vmw", tempParams)
    .then(function(res) {
      console.log("ok", res.status);
      
    })
  }