
    <div class="cta-wrapper">
    <a href="https://wa.me/919286800204" target="_blank" class="quote-btn"><i class="fa-brands fa-whatsapp" style="font-size: 26px; color:#ffff;"></i></a>
    <a href="tel:<?php echo "$phone"?>" class="call-btn">
        <i class="fa-solid fa-phone-volume" style="font-size: 26px; " ></i>
    </a>
    </div>

    <footer class="footer">
    <div class="footer-container">

        <!-- Logo + About -->
        <div class="footer-col">
        <img class="logo" src="assets/img/logo/logo8.png">
        <p>
            We create powerful sonic identities that help brands stand out, stay memorable and connect deeper with customers through music.
        </p>

        </div>

        <!-- Quick Links -->
        <div class="footer-col">
        <h3>Quick Links</h3>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Packages</a></li>
            <li><a href="#">Portfolio</a></li>
            <li><a href="#">Reviews</a></li>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
        </div>

        <!-- Services -->
        <div class="footer-col">
        <h3>Services</h3>
        <ul>
            <li>Custom Jingles</li>
            <li>Sonic Logos</li>
            <li>Brand Anthems</li>
            <li>Audio Production</li>
            <li>Commercial Rights</li>
        </ul>
        </div>

        <!-- Contact -->
        <div class="footer-col">
        <h3>Contact Us</h3>
        <div style="display:flex;">
            <i class="fa-solid fa-phone " style="margin: 5px; color: #f80f93; font-size: 20px;"></i>
            <p class="details"><?php echo "$phone"?></p>
        </div>
            <div style="display:flex;" >
                <i class="fa-solid fa-envelope" style="margin: 5px; color: #f80f93; font-size: 20px;"></i>
                <p class="details"><?php echo "$email"?></p>
            </div>
        </div>
    </div>


    <!-- Bottom -->
    <div class="footer-bottom">
        <p>© 2026 All Rights Reserved BrandTune Studio | Powered by <a href="https://worldomania.com/" style="margin:0px; font-weight:bold;">Worldomania</a></p>
    </div>
    </footer>

    <div id="popupSuccess" class="popup">
    <div class="popup-box1">
        <h2>Thank You 🙏</h2>
        <p style="color: #000000;">Thank You For Connecting With BrandTune Studio.</p>
        <button id="closePopup">OK</button>
    </div>
    </div>
    
    <style>
        .popup {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0,0,0,0.6);
  display: none;
  justify-content: center;
  align-items: center;
  justify-items: center;
  align-content: center;
  z-index: 9999;
}

.popup-box1 {
    background: #fff;
    padding: 25px 20px;
    border-radius: 10px;
    text-align: center;
    width: 100%;
    height: 27%;
    max-width: 500px;
    animation: popupFade 0.3s ease;
}

.popup-box1 h2 {
  margin-bottom: 10px;
  color: #7d19f2;
}

.popup-box1 button {
  margin-top: 15px;
  padding: 8px 20px;
  border: none;
  background: #7d19f2;
  color: #fff;
  border-radius: 5px;
  cursor: pointer;
}

@keyframes popupFade {
  from { transform: scale(0.7); opacity: 0; }
  to { transform: scale(1); opacity: 1; }
}
    </style>
    </body>

    <script src="assets/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> 
    
<script>
const toggle = document.getElementById("menu-toggle");
const menu = document.getElementById("menu");

toggle.addEventListener("click", () => {
  menu.classList.toggle("active");
});
</script>

    <script type="text/javascript">
    $("#submitss").click(function(event) {
    event.preventDefault();

    var user = $("#cont_name").val().trim();
    var cont_bname = $("#cont_bname").val().trim();
    var cont_phone = $("#cont_phone").val().trim();
    let error = false;
    let errorMsg = "";

    // Name validation
    if (user == "") {
        $("#usercontname").html("Please fill the name").show();
        errorMsg += "• Please fill the name\n";
        error = true;
    }

    // Email validation
    if (cont_bname == "") {
        $("#usercontbname").html("Please fill the bname").show();
        errorMsg += "• Please fill the bname\n";
        error = true;
    }

    // Phone validation
    if (cont_phone == "") {
        $("#usercontphone").html("Please fill the phone no.").show();
        errorMsg += "• Please fill the phone number\n";
        error = true;
    } else if (isNaN(cont_phone)) {
        $("#usercontphone").html("Only digits allowed").show();
        errorMsg += "• Phone must contain digits only\n";
        error = true;
    } else if (cont_phone.length != 10) {
        $("#usercontphone").html("Phone must be 10 digits").show();
        errorMsg += "• Phone number must be 10 digits\n";
        error = true;
    }

    // If error found — show alert after 3 seconds
    if (error) {
        // setTimeout(function(){
        //     alert("Please fix the following:\n\n" + errorMsg);
        // }, 3000);

        setTimeout(function(){
            $(".error").html('');
        }, 2000);

        return false;
    }

    // AJAX Submit
    $.ajax({
        type: "POST",
        url: "mailer.php",
        data: {user,cont_bname,cont_phone},
        dataType: 'json',
        success: function(data) {
    if (data.msg) {
        $('.contact')[0].reset();

        $("#popupSuccess").fadeIn(); // popup show

    } else {
        alert("Something went wrong!");
    }
}
    });

});

$(document).on("click", "#closePopup", function(){
    $("#popupSuccess").fadeOut();
});
    </script>



     <script type="text/javascript">
    $("#submitsss").click(function(event) {
    event.preventDefault();

    var user = $("#conte_name").val().trim();
    var conte_bname = $("#conte_bname").val().trim();
    var conte_phone = $("#conte_phone").val().trim();
    var conte_price = $("#conte_price").val().trim();
    let error = false;
    let errorMsg = "";

    // Name validation
    if (user == "") {
        $("#usercontename").html("Please fill the name").show();
        errorMsg += "• Please fill the name\n";
        error = true;
    }

    // Email validation
    if (conte_bname == "") {
        $("#usercontebname").html("Please fill the bname").show();
        errorMsg += "• Please fill the bname\n";
        error = true;
    }

    // Phone validation
    if (conte_phone == "") {
        $("#usercontephone").html("Please fill the phone no.").show();
        errorMsg += "• Please fill the phone number\n";
        error = true;
    } else if (isNaN(conte_phone)) {
        $("#usercontephone").html("Only digits allowed").show();
        errorMsg += "• Phone must contain digits only\n";
        error = true;
    } else if (conte_phone.length != 10) {
        $("#usercontphone").html("Phone must be 10 digits").show();
        errorMsg += "• Phone number must be 10 digits\n";
        error = true;
    }

    // Email validation
    if (conte_price == "") {
        $("#userconteprice").html("Please fill the price").show();
        errorMsg += "• Please fill the price\n";
        error = true;
    }

    // If error found — show alert after 3 seconds
    if (error) {
        // setTimeout(function(){
        //     alert("Please fix the following:\n\n" + errorMsg);
        // }, 3000);

        setTimeout(function(){
            $(".error").html('');
        }, 2000);

        return false;
    }

    // AJAX Submit
    $.ajax({
        type: "POST",
        url: "package.php",
        data: {user,conte_bname,conte_phone, conte_price},
        dataType: 'json',
        success: function(data) {
    if (data.msg) {
        $('.contactt')[0].reset();

        $("#popupSuccess").fadeIn(); // popup show

    } else {
        alert("Something went wrong!");
    }
}
    });

});

$(document).on("click", "#closePopup", function(){
    $("#popupSuccess").fadeOut();
});
    </script>




<!-- YOUTUBE API -->
<script src="https://www.youtube.com/iframe_api"></script>


<script>

let players = [];

/* CREATE PLAYERS */
function onYouTubeIframeAPIReady(){

    const iframes = document.querySelectorAll('.youtube-video');

    iframes.forEach((iframe, index) => {

        players[index] = new YT.Player(iframe, {

            events: {

                'onStateChange': onPlayerStateChange

            }

        });

    });

}

/* WHEN VIDEO PLAY */
function onPlayerStateChange(event){

    // 1 = PLAYING
    if(event.data == YT.PlayerState.PLAYING){

        players.forEach((player) => {

            if(player !== event.target){

                player.pauseVideo();

            }

        });

    }

}

</script>

    </html>
