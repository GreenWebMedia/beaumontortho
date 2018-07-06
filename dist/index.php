<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Alex+Brush" rel="stylesheet">
	
	<script src="https://unpkg.com/vue-recaptcha@latest/dist/vue-recaptcha.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js?onload=vueRecaptchaApiLoaded&render=explicit" async defer></script>
    <?php wp_head(); ?>
</head>
<body>
  <div id="app"></div>
  <?php wp_footer(); ?>
  <script> 
//slider 
var current = 0,
    slides = document.getElementsByClassName("slimg");
setInterval(function() {
  for (var i = 0; i < slides.length; i++) {
    slides[i].style.opacity = 0;
  }
  current = (current != slides.length - 1) ? current + 1 : 0;
  slides[current].style.opacity = 1;
}, 3000);

    slidesNew = document.getElementsByClassName("slimgN");
setInterval(function() {
  for (var i = 0; i < slidesNew.length; i++) {
    slidesNew[i].style.opacity = 0;
  }
  currentNew = (currentNew != slidesNew.length - 1) ? currentNew + 1 : 0;
  slidesNew[currentNew].style.opacity = 1;
}, 3000000);
</script>
    <script type="text/javascript">
      WebFontConfig = {
        google: { families: [ 'Roboto' ] }
      };
      (function() {
        var wf = document.createElement('script');
        wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
          '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
        wf.type = 'text/javascript';
        wf.async = 'true';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(wf, s);
      })();
       function validateFRForm() { 
            var flname = document.getElementById("flname").value;
            var emailID = document.getElementById("emailID").value;           
            var atpos = emailID.indexOf("@");
            var dotpos = emailID.lastIndexOf(".");
			var friendName = document.getElementById("friendName").value; 
            var response = grecaptcha.getResponse();
            if (flname == "") {
                alert("Please enter Your Name");
                return false;
            } else if (emailID == "") {
                alert("Please enter Your email address.");
                return false;
            } else if (atpos<1 || dotpos<atpos+2 || dotpos+2>=emailID.length) {
                alert("Please enter a valid email address.");
                return false;
            } else if (friendName == "") {
                alert("Please enter Your Friend name.");
                return false;                    
            } else if(response.length == 0){
                alert("Please validate Google Recaptcha");
                return false;
            }
        }

       function validateDRForm() { 
            var todayDate = document.getElementById("todayDate").value;
            var yourName = document.getElementById("yourName").value;
            var praticeName = document.getElementById("praticeName").value;
            var emailID1 = document.getElementById("emailID1").value;
            var atpos = emailID1.indexOf("@");
            var dotpos = emailID1.lastIndexOf(".");
            var referPName = document.getElementById("referPName").value;
            var response = grecaptcha.getResponse();
            if (todayDate == "") {
                alert("Please enter Today's Date");
                return false;
            } else if (yourName == "") {
                alert("Please enter Your Name.");
                return false;
            } else if (praticeName == "") {
                alert("Please enter Your Practice Name.");
                return false;
            } else if (emailID1 == "") {
                alert("Please enter Your E-mail Address.");
                return false;
            } else if (atpos<1 || dotpos<atpos+2 || dotpos+2>=emailID1.length) {
                alert("Please enter a valid email address.");
                return false;
            } else if (referPName == "") {
                alert("Please enter Full name of the patient you are referring.");
                return false;
            } else if(response.length == 0){
                alert("Please validate Google Recaptcha");
                return false;
            }
        }  
		
		function validateAPRForm() { 
            var paitentName = document.getElementById("paitentName").value;
			var emailId = document.getElementById("emailId").value;
            var atpos = emailId.indexOf("@");
            var dotpos = emailId.lastIndexOf(".");
            var address = document.getElementById("address").value;
            var phoneNo = document.getElementById("phoneNo").value;
            var preferredDays = document.getElementById("preferredDays").value;
            var nameAddress = document.getElementById("nameAddress").value;
            var response = grecaptcha.getResponse();
            if (paitentName == "") {
                alert("Please enter Patient Name.");
                return false;
            } else if (emailId == "") {
                alert("Please enter E-mail Address.");
                return false;
            } else if (atpos<1 || dotpos<atpos+2 || dotpos+2>=emailId.length) {
                alert("Please enter a valid email address.");
                return false;
            } else if (address == "") {
                alert("Please enter Your Address .");
                return false;
            } else if (phoneNo == "") {
                alert("Please enter Your Phone Number.");
                return false;
            } else if (preferredDays == "") {
                alert("Please enter Preferred Days.");
                return false;
            } else if (nameAddress == "") {
                alert("Please enter Name and Address of General Dentist.");
                return false;
            } else if(response.length == 0){
                alert("Please validate Google Recaptcha");
                return false;
            }
        } 
		
		function validateFeedback() { 
            var yourName = document.getElementById("yourName").value;
            var EmailId = document.getElementById("EmailId").value;
            var atpos = EmailId.indexOf("@");
            var dotpos = EmailId.lastIndexOf(".");
            var yourFeedback = document.getElementById("yourFeedback").value;
            var response = grecaptcha.getResponse();
            if (yourName == "") {
                alert("Please enter Your Name.");
                return false;
            } else if (EmailId == "") {
                alert("Please enter Your E-mail Address.");
                return false;
            } else if (atpos<1 || dotpos<atpos+2 || dotpos+2>=EmailId.length) {
                alert("Please enter a valid email address.");
                return false;
            } else if (yourFeedback == "") {
                alert("Please enter Your Feedback.");
                return false;
            } else if(response.length == 0){
                alert("Please validate Google Recaptcha");
                return false;
            }
        } 
    </script>    
    <script>        
        function menuToggle(x) {
   var menu = document.getElementById("mainmenu1");   
   if (menu.style.display === "none") {
    menu.style.display = "block";
   } else if (menu.style.display === "block") {
    menu.style.display = "none";
   } else {
    menu.style.display = "block";
   }
  }

  window.onscroll = function() {
            backTopFunction()
        };
  function backTopFunction() {
            var bodyTop = document.getElementById("page");
            var backTop = document.getElementById("backTop");
            var sticky1 = bodyTop.offsetTop + 100;
          if (window.pageYOffset >= sticky1) {
            backTop.classList.add("on");
          } else {
            backTop.classList.remove("on");
          }
        }
</script>
<script>
   function subMOpen2(){ 
   var dropdown2 = document.getElementById("dropdown2");
   if (dropdown2.style.display === "none") {
    dropdown2.style.display = "block";
   } else if (dropdown2.style.display === "block") {
    dropdown2.style.display = "none";
   } else {
    dropdown2.style.display = "block";
   }
  } 

  function subMOpen3(){ 
   var dropdown2 = document.getElementById("dropdown3");
   if (dropdown2.style.display === "none") {
    dropdown2.style.display = "block";
   } else if (dropdown2.style.display === "block") {
    dropdown2.style.display = "none";
   } else {
    dropdown2.style.display = "block";
   }
  } 
  function subMOpen4(){ 
   var dropdown2 = document.getElementById("dropdown4");
   if (dropdown2.style.display === "none") {
    dropdown2.style.display = "block";
   } else if (dropdown2.style.display === "block") {
    dropdown2.style.display = "none";
   } else {
    dropdown2.style.display = "block";
   }
  } 
  function subMOpen5(){ 
   var dropdown2 = document.getElementById("dropdown5");
   if (dropdown2.style.display === "none") {
    dropdown2.style.display = "block";
   } else if (dropdown2.style.display === "block") {
    dropdown2.style.display = "none";
   } else {
    dropdown2.style.display = "block";
   }
  }

</script>
</body>
</html>
