    <?php include "common/header.php" ?>
    <section class="hero" id="hero" >
        <div class="hero-overlay"></div>

        <div class="hero-container">
            <div class="hero-content">

            <h1>
                WE CREATE SONGS <br>
                THAT BUILD <br>
                <span>BRANDS</span>
            </h1>

            <p>
                Memorable Brand Jingles, sonic logos & anthems that make your brand unforgettable.
            </p>

            <div class="stats">
                <div class="stat">
                <div class="circle"><i class="fa-brands fa-itunes-note"></i></div>
                <span>1000+ Jingles Created</span>
                </div>

                <div class="stat">
                <div class="circle"><i class="fa-solid fa-shield-heart"></i></div>
                <span>Commercial Use Rights</span>
                </div>

                <div class="stat">
                <div class="circle"><i class="fa-solid fa-headphones"></i></div>
                <span>On-Time Delivery</span>
                </div>
            </div>

            <div class="buttons">
                <a href="#" class="btn btn1 primary" id="openPopup">GET A CUSTOM JINGLE</a>
            </div>
            </div>
        </div>
    </section>

<!-- Popup Form -->
<div id="popupFormmm" class="popup-overlay">

    <div class="popup-box">

        <!-- Close Button -->
        <span id="closePopup" class="close-btn">&times;</span>

        <!-- Left Side -->
        <div class="popup-left">
            <img src="assets/img/about.webp" alt="Music Banner" class="popup-image">

                <p>
                At BrandTune Studio, we help businesses turn their brand into a memorable sound. From custom brand jingles and sonic logos to full brand anthems and music videos, we create audio branding solutions that increase recall, strengthen identity and make your marketing stand out.
                </p>
        </div>

        <!-- Right Side -->
        <div class="popup-right">

            <div class="right_contant">
                <h2>Request Your Brand Jingle Quote</h2>
                <p>
                    Share your brand details and get a custom jingle concept & quote.
                </p>
            </div>
            
            <form class="contact" id="contactForm" method="post" action="#">

                <input type="text" name="cont_name" id="cont_name" placeholder="Your Name">
                <span id="usercontname" class="error"></span>

                <input type="text" name="cont_bname" id="cont_bname" placeholder="Business Name">
                <span id="usercontbname" class="error"></span>

                <div class="phone-box">
                    <span class="country-code">+91</span>

                        <input type="number"
                            id="cont_phone"
                            placeholder="Phone / WhatsApp"
                            oninput="if(this.value.length > 10) this.value = this.value.slice(0,10)">
                </div>

                <span id="usercontphone" class="error"></span>

                <button type="submit"
                        class="it-btn-theme btn"
                        name="submitss"
                        id="submitss">
                    Submit Enquiry
                </button>
            </form>
        </div>
    </div>
</div>

    <!--==============services===================-->
    <section id="services" style="border-bottom: 1px solid #ffffff0f;">
    <div class="container">
    <h2 class="title">Services</h2>
    <div class="services">
        <div class="service"><div class="circle"><i class="fa-brands fa-itunes-note " style="font-size:30px;"></i></div><h4>Custom Jingles</h4><p>Unique jingles that capture your brand's essence.</p></div>
        <div class="service"><div class="circle"><i class="bi bi-soundwave voice-icon" style="font-size:30px;"></i></div><h4>Sonic Logos</h4><p>Short, powerful audio logos that stick in the mind.</p></div>
        <div class="service"><div class="circle"><i class="bi bi-mic-fill" style="font-size:30px;"></i></div><h4>Audio Listing</h4><p>professional composition, recording & mixing.</p></div>
        <div class="service"><div class="circle"><i class="fa-solid fa-shield-heart" style="font-size:30px;"></i></div><h4>Commercial Rights</h4><p>Premium visual production.</p></div>
        <div class="service"><div class="circle"><i class="bi bi-camera-video" style="font-size:30px;"></i></div><h4>Brand Anthems</h4><p>Full length songs that inspire & connoct.</p></div>
    </div>
    </div>
    </section>

    <!--==================About=================-->
    <section class="about-section" id="about">
        <div class="container about-grid">

            <!-- Left Image -->
            <div class="about-img">
            <img src="assets/img/about.webp" alt="about">
            </div>

            <!-- Right Content -->
            <div class="about-content">
            <h2>About Brand Tune Studio</h2>
            <p class="subtitle">
                We Don’t Just Create Jingles — We Build Brand Recall Through Music
            </p>

            <p>
                At BrandTune Studio, we help businesses turn their brand into a memorable sound.
                From custom brand jingles and sonic logos to full brand anthems and music videos, we create audio branding solutions that increase recall, strengthen identity and make your marketing stand out.
                Whether you're a startup, restaurant, real estate brand or growing business — we craft music that connects emotionally and sells powerfully.
            </p>

            <div class="about-features">
                <div class="feature">
                ✔ Custom Brand Jingles
                </div>
                <div class="feature">
                ✔  Sonic Branding Solutions
                </div>
                <div class="feature">
                ✔ Audio Platform Distribution
                </div>
                <div class="feature">
                ✔ Premium Music Video Production
                </div>
            </div>

            <a href="#contact" class="about-btn">Contact</a>
            </div>

        </div>
    </section>

    <!--===================audio=======================  -->
    <section>
    <h1 class="title">YouTube Reels</h1>

    <div class="reels-grid">

        <!-- REEL 1 -->
    <div class="reel-card">

        <iframe
        class="youtube-video"
        src="https://www.youtube.com/embed/_btVD2tMr8Y?enablejsapi=1&autoplay=0&mute=0&controls=0&loop=1&playlist=_btVD2tMr8Y&rel=0"
        allow="autoplay"
        allowfullscreen>
        </iframe>
    </div>

    <!-- REEL 2 -->
    <div class="reel-card">

        <iframe
        class="youtube-video"
        src="https://www.youtube.com/embed/89LwJsFmCMU?enablejsapi=1&autoplay=0&mute=0&controls=0&loop=1&playlist=89LwJsFmCMU&rel=0"
        allow="autoplay"
        allowfullscreen>
        </iframe>
    </div>

    <!-- REEL 3 -->
    <div class="reel-card">

        <iframe
        class="youtube-video"
        src="https://www.youtube.com/embed/8h205SAxb9s?enablejsapi=1&autoplay=0&mute=0&controls=0&loop=1&playlist=8h205SAxb9s&rel=0"
        allow="autoplay"
        allowfullscreen>
        </iframe>
    </div>
    </div>
    </section>

 <!-- =============================================== -->
 <section id="package">
    <div class="pricing">

    <!-- BASIC -->
    <div class="card">
        <div class="">BASIC</div>
        <div class="price">₹4,999 <span>+ GST</span></div>

        <ul>
            <li>15–30 Sec Custom Jingle</li>
            <li>Lyrics + Melody</li>
            <li>1 Revision</li>
            <li>Commercial Use Rights</li>
        </ul>

        <button class="btn btn1" data-price="₹4,999">CHOOSE PLAN</button>
    </div>

    <!-- STANDARD -->
    <div class="card popular">
        <div class="badge">MOST POPULAR</div>
        <div class="">STANDARD</div>
        <div class="price">₹7,999 <span>+ GST</span></div>

        <ul>
            <li>Everything in Basic</li>
            <li>Full Song Version</li>
            <li>Audio Distribution</li>
            <li>Cover Art & Metadata</li>
            <li>2 Revisions</li>
        </ul>

        <button class="btn btn1 " data-price="₹7,999">CHOOSE PLAN</button>
    </div>

    <!-- PREMIUM -->
    <div class="card">
        <div class="">PREMIUM</div>
        <div class="price">₹75,000 <span>+ GST</span></div>

        <ul>
            <li>Everything in Standard</li>
            <li>Music Video Shoot</li>
            <li>Reel Edits (3–5)</li>
            <li>Sonic Logo Mnemonic</li>
            <li>Priority Support</li>
        </ul>

        <button class="btn btn1" data-price="₹75,000">CHOOSE PLAN</button>
    </div>
    </div>
    </section>

    <!-- Popup Form -->
<div id="popupFormm" class="popup-overlay">
    <div class="popup-box">
        <!-- Close Button -->
        <span id="closePopupp" class="close-btn">&times;</span>

        <!-- Left Side -->
        <div class="popup-left">
            <img src="assets/img/about.webp" alt="Music Banner" class="popup-image">

                <p>
                At BrandTune Studio, we help businesses turn their brand into a memorable sound. From custom brand jingles and sonic logos to full brand anthems and music videos, we create audio branding solutions that increase recall, strengthen identity and make your marketing stand out.
                </p>
        </div>

        <!-- Right Side -->
        <div class="popup-right">

            <div class="right_contant">
                <h2>Request Your Brand Jingle Quote</h2>
                <p>
                    Share your brand details and get a custom jingle concept & quote.
                </p>
            </div>
            
            <form class="contactt" id="contactForm" method="post" action="#">

                <input type="text" name="conte_name" id="conte_name" placeholder="Your Name">
                <span id="usercontename" class="error"></span>

                <input type="text" name="conte_bname" id="conte_bname" placeholder="Business Name">
                <span id="usercontebname" class="error"></span>

                <div class="phone-box">
                    <span class="country-code">+91</span>

                        <input type="number"
                            id="conte_phone"
                            placeholder="Phone / WhatsApp"
                            oninput="if(this.value.length > 10) this.value = this.value.slice(0,10)">
                </div>

                <span id="usercontephone" class="error"></span>

                <!-- PRICE FIELD -->
                 <input type="text" name="conte_price" id="conte_price" placeholder="Selected Package Price" readonly>

                <button type="submit"
                        class="it-btn-theme btn"
                        name="submitsss"
                        id="submitsss">
                    Submit Enquiry
                </button>
            </form>
        </div>
    </div>
</div>

<script>
document.querySelectorAll(".btn1").forEach(function(button) {

    button.addEventListener("click", function(e) {

        e.preventDefault();

        // POPUP OPEN
        document.getElementById("popupFormm").style.display = "block";

        // GET PRICE
        let price = this.getAttribute("data-price");

        // SET PRICE IN INPUT
        document.getElementById("conte_price").value = price;

    });

});

// CLOSE POPUP
document.getElementById("closePopupp").onclick = function() {

    document.getElementById("popupFormm").style.display = "none";

};
</script>
    <!-- =================portfolio============== -->
    <section class="media-section" id="portfolio">
                    <h2 class="title">References</h2>
                <div class="media-grid">

                <div class="media-box" onclick="openVideo('QFoMcZI9vRg')"   style=" transition:0.3s;"
                onmouseover="this.style.boxShadow='0 0 45px rgb(132 28 222)'"
                onmouseout="this.style.boxShadow='none'">
                    <img src="assets/img/music/music1.webp">
                    <div class="media-overlay"></div>
                    <div class="media-play"></div>

                    <div class="media-title">
                        <h3>Vicco Turmeric</h3>
                        <span>Brand Jingle </span>
                    </div>
                </div>

                <div class="media-box" onclick="openVideo('4hhoHIOz_Rg')"   style=" transition:0.3s;"
                onmouseover="this.style.boxShadow='0 0 45px #5a89fa'"
                onmouseout="this.style.boxShadow='none'" >

                    <img src="assets/img/music/music2.webp">
                    <div class="media-overlay"></div>
                    <div class="media-play"></div>
                    <div class="media-title">
                        <h3>Nirma</h3>
                        <span>Brand Jingle</span></div>
                </div>

                <div class="media-box" onclick="openVideo('J6hkuvAuOsk')" style=" transition:0.3s;"
                onmouseover="this.style.boxShadow='0 0 45px #BB02CA'"
                onmouseout="this.style.boxShadow='none'">
                    <img src="assets/img/music/music3.webp">
                    <div class="media-overlay"></div>
                    <div class="media-play"></div>
                    <div class="media-title">
                        <h3>Bajaj</h3>
                        <span>Brand Anthom </span>
                    </div>
                </div>

                <div class="media-box" onclick="openVideo('kIENtAwIRYc')" style=" transition:0.3s;"
                onmouseover="this.style.boxShadow='0 0 45px #fc1dd1'"
                onmouseout="this.style.boxShadow='none'">
                    <img src="assets/img/music/music4.webp">
                    <div class="media-overlay"></div>
                    <div class="media-play"></div>
                    <div class="media-title">
                        <h3>MDH Masala</h3>
                        <span>Brand Jingle</span>
                    </div>
                </div>

                <div class="media-box" onclick="openVideo('Wcua0DMG3mw')" style=" transition:0.3s;"
                onmouseover="this.style.boxShadow='0 0 45px #F82135'"
                onmouseout="this.style.boxShadow='none'">
                    <img src="assets/img/music/music5.webp">
                    <div class="media-overlay"></div>
                    <div class="media-play"></div>
                    <div class="media-title">
                        <h3>Automative</h3>
                        <span>Brand Jingle</span></div>
                </div>

                <div class="media-box" onclick="openVideo('uykVxooNL70')" style=" transition:0.3s;"
                onmouseover="this.style.boxShadow='0 0 45px #3F77B2'"
                onmouseout="this.style.boxShadow='none'">
                    <img src="assets/img/music/music6.webp">
                    <div class="media-overlay"></div>
                    <div class="media-play"></div>
                    <div class="media-title">
                        <h3>Healthcare</h3>
                        <span> Brand Anthom </span>
                    </div>
                </div>

                </div>
    </section>

    <!-- POPUP -->
    <div class="media-popup" id="popup">
        <div class="media-close" onclick="closeVideo()">✖</div>
        <iframe id="frame" src="" allow="autoplay" allowfullscreen></iframe>
    </div>

 <style>

/* ----------------------media video------------------------ */
/*==============================
        MEDIA SECTION
===============================*/

.media-section{
    padding:60px 6%;
}


/*==============================
            TITLE
===============================*/

.media-section .title{
    text-align: center;
    font-size: 33px;
    font-weight: 700;
    color: #fff;
    margin-bottom: 75px;
    position: relative;
    z-index: 2;
    letter-spacing: 1px;
}

.media-section .title span{
    background:linear-gradient(90deg,#8a2eff,#ff2ea6);
    -webkit-background-clip:text;
    -webkit-text-fill-color:transparent;
}

.media-section .title::after{
    content:"";
    position:absolute;
    left:50%;
    bottom:-18px;
    transform:translateX(-50%);
    width:100px;
    height:5px;
    border-radius:50px;
    background:linear-gradient(90deg,#8a2eff,#ff2ea6);
    box-shadow:0 0 25px #8a2eff;
}

/*==============================
            GRID
===============================*/

.media-grid{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(320px,1fr));
    gap:35px;
    position:relative;
    z-index:2;
}

/*==============================
            CARD
===============================*/

.media-box{
    position: relative;
    height: 215px;
    overflow: hidden;
    border-radius: 16px;
    cursor: pointer;
    transition: 0.6s ease;
    background: #111827;
    border: 1px solid rgba(255, 255, 255, 0.08);
    box-shadow: 0 12px 35px rgba(0, 0, 0, 0.45);
}


/* image */
.media-box img{
    width:100%;
    height:100%;
    object-fit:cover;
    /* transition:0.7s ease; */
}

/* overlay */
.media-overlay{
    position:absolute;
    inset:0;
    background:linear-gradient(to top,
    rgba(0,0,0,0.95) 5%,
    rgba(0,0,0,0.35) 50%,
    rgba(0,0,0,0.1) 100%);
    z-index:1;
}

/* hover effect */
.media-box:hover{
    transform:translateY(-12px) scale(1.02);
    box-shadow:
    0 25px 60px rgba(138,46,255,0.28);
}

/*==============================
        PLAY BUTTON
===============================*/

.media-play{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 50px;
    height: 50px;
    border-radius: 50%;
    z-index: 2;
    background: rgba(255, 255, 255, 0.12);
    backdrop-filter: blur(12px);
    border: 2px solid rgba(255, 255, 255, 0.2);
    display: flex;
    align-items: center;
    justify-content: center;
    transition: 0.5s ease;
}

/* glowing pulse */
.media-play::after{
    content:"";
    position:absolute;
    width:100%;
    height:100%;
    border-radius:50%;
    border:2px solid rgba(255,255,255,0.5);
    animation:pulse 2s infinite;
}

@keyframes pulse{
    0%{
        transform:scale(1);
        opacity:1;
    }
    100%{
        transform:scale(1.6);
        opacity:0;
    }
}

/* play icon */
.media-play::before{
    content:"";
    margin-left:8px;
    border-style:solid;
    border-width:15px 0 15px 26px;
    border-color:transparent transparent transparent #fff;
}

.media-box:hover .media-play{
    transform:translate(-50%,-50%) scale(1.12);
    background:linear-gradient(135deg,#8a2eff99,#ff2ea699);
}

/*==============================
            TEXT
===============================*/

.media-title{
    position:absolute;
    left:28px;
    bottom:28px;
    z-index:2;
}

.media-title h3{
    color:#fff;
    font-size:22px;
    font-weight:700;
    margin-bottom:6px;
    text-shadow:0 4px 15px rgba(0,0,0,0.5);
}

.media-title span{
    color:#d9d9d9;
    font-size:15px;
    letter-spacing:1px;
}

/*==============================
          RESPONSIVE
===============================*/

@media(max-width:992px){

    .media-grid{
        grid-template-columns:repeat(2,1fr);
    }

    .media-box{
        height:360px;
    }
}

@media(max-width:768px){

    .media-section{
        padding:80px 5%;
    }

    .media-section .title{
        font-size:42px;
    }

    .media-grid{
        grid-template-columns: repeat(2, 1fr);
    }

    .media-box{
        height:330px;
    }
}

@media(max-width:480px){

    .media-section{
        padding:70px 4%;
    }

    .media-section .title{
        font-size:34px;
    }

    .media-box{
        height:280px;
        border-radius:24px;
    }

    .media-play{
        width:75px;
        height:75px;
    }

    .media-title{
        left:20px;
        bottom:20px;
    }

    .media-title h3{
        font-size:24px;
    }

    .media-title span{
        font-size:13px;
    }
        .media-grid {
        grid-template-columns: repeat(1, 1fr);
    }
}
</style>
<!--====================== counter========================= -->
    <section class="section">
        <div style="    justify-items: anchor-center; margin-bottom: 15px;">
            <h2 class="title" style="margin: 0px 0px 30px;">Numbers That Speak Itself </h2>
        </div>
            <div class="counter-section">

                <div class="counter-box">   
                <div class="circle1"><i class="fa-brands fa-itunes-note"></i></div>
                <div class="counter" data-target="1000">0</div>
                <p>Jingles Created</p>
                </div>

                <div class="counter-box">
                <div class="circle1"><i class="fa-solid fa-users"></i></div>
                <div class="counter" data-target="800">0</div>
                <p>Happy Clients</p>
                </div>

                <div class="counter-box">
                <div class="circle1"><i class="fa-solid fa-clock"></i></div>
                <div class="counter" data-target="7">0</div>
                <p>Years Experience</p>
                </div>

                <div class="counter-box">
                <div class="circle1"><i class="fa-solid fa-shield-heart"></i></div>
                <div class="counter" data-target="100">0</div>
                <p>Jingle Video Produced</p>
                </div>

            </div>
        </section>

    <section class="testimonials">
        <div style="    justify-items: anchor-center; margin-bottom: 15px;">
            <h2 class="title" style="margin: 0px;">Reviews</h2>
            <p>Trusted By Brands That Want To Be Remembered</p>
        </div >
            <div class="wrap">
                <!-- Card -->
                <div class="t-card">
                <div class="quote">
                    <svg width="50" height="50" viewBox="0 0 24 24" fill="#7c4dff">
                        <path d="M7 17h3l2-4V7H6v6h3l-2 4zm9 0h3l2-4V7h-6v6h3l-2 4z"/>
                    </svg>
                </div>
                <img src="https://images.openai.com/static-rsc-4/OFkbBNEngvS3np_P_PYtuvpcIYOWq46zD2t34xrAY2033b-a2xV82Q3quhLMHHRGKNvJ5SYO1yL5Cwddz9G9Ex9cj_gQOe52qWpbNAlSNKzEaSDpbaR6mGkpd4cBu_iRCfqOd5Xu3pD0y5AtS6CPYXeQdLTUlhsJqZ8qe2-p9xTqCoooz2pOCd9kNKWQNUxz?purpose=inline" class="avatar">
                <div class="stars">★★★★★</div>
                <p>
                    We wanted something unique for our restaurant brand, and the jingle became part of our identity. Catchy, professional and memorable.
                </p>
                <h4>Rahul Sharma</h4>
                <span>Restaurant Owner</span>
                </div>

                <div class="t-card">
                <div class="quote">
                    <svg width="50" height="50" viewBox="0 0 24 24" fill="#7c4dff">
                        <path d="M7 17h3l2-4V7H6v6h3l-2 4zm9 0h3l2-4V7h-6v6h3l-2 4z"/>
                    </svg>
                </div>
                <img src="https://images.openai.com/static-rsc-4/BzquAaLeqeRB6bptRGtIY2Veo-NLeAFDwaj23t5cVLk-FIa31VCvFD5neg3rRZ4_zlJfACBBwewXdRKR7e4Iahk271QGOWPamrK9-m62SOEqiuFR4R0_m7MJSo2TIpG2fi0vpRv_vq_WS29cLvHcSHy96-5wfCnTVsKevjDXoJC9Dn7khNKuk6WeT9jbjV9J?purpose=fullsize" class="avatar">
                <div class="stars">★★★★★</div>
                <p>
                    Our real estate project launch felt premium because of the custom brand anthem. It gave our campaign a completely different impact.
                </p>
                <h4>Neha Verma</h4>
                <span>Marketing Head</span>
                </div>

                <div class="t-card">
                <div class="quote">
                    <svg width="50" height="50" viewBox="0 0 24 24" fill="#7c4dff">
                        <path d="M7 17h3l2-4V7H6v6h3l-2 4zm9 0h3l2-4V7h-6v6h3l-2 4z"/>
                    </svg>
                </div>
                <img src="https://images.openai.com/static-rsc-4/kUGiBAQWYJtfHmFCFsNsp8rkp-zlt02GXI-c5ihEucyGudxsVBrrfYRTlBxxZd6QpjmqIX-v6vb4RcjNxH_gUjrHKW8tk1pLplJn2B4Qheludx1jwTD4uGBoz0q4yltBK8mAN2GbM-rvLx4_FBkW4nGk9AW1YIcxyrnCx2BR7igM39qCj7dHpB0HIaHPvnOj?purpose=fullsize" class="avatar">
                <div class="stars">★★★★★</div>
                <p>
                    Amazing concept, quick delivery and outstanding production quality. Customers actually started humming our brand tune!
                </p>
                <h4>Amit Jain</h4>
                <span>Founder, D2C Brand</span>
                </div>

                <div class="t-card">
                <div class="quote">
                    <svg width="50" height="50" viewBox="0 0 24 24" fill="#7c4dff">
                        <path d="M7 17h3l2-4V7H6v6h3l-2 4zm9 0h3l2-4V7h-6v6h3l-2 4z"/>
                    </svg>
                </div>
                <img src="https://images.openai.com/static-rsc-4/5uZzkxGEn6QKFgvShorID1qAaUaq3D6goGPITcxIrzTqoISEfdJTWuPse36D7lAtZ5236MjsW8WF-nahO-d3V1typQJp7tfoyBjePWWGL4I4_egV2JuFzLDUzXG6lOGqZst-Q-4Ou_ALNuhnX8GSShjGIrSFCcfd2v4sGBCFDrmze0Q4LjL-H_NKY1ESgLox?purpose=fullsize" class="avatar">
                <div class="stars">★★★★★</div>
                <p>
                    The Spotify release package was worth every rupee. Our brand literally has its own song online now.
                </p>
                <h4>Rohit Mehra</h4>
                <span>Startup Founder</span>
                </div>

                <div class="t-card">
                <div class="quote">
                    <svg width="50" height="50" viewBox="0 0 24 24" fill="#7c4dff">
                        <path d="M7 17h3l2-4V7H6v6h3l-2 4zm9 0h3l2-4V7h-6v6h3l-2 4z"/>
                    </svg>
                </div>
                <img src="https://images.openai.com/static-rsc-4/lYh16uPb5rAqEtH3o-VJLVxqaRZo7qmwuMtuXQWWStw8QIOvyDUZR5SZr33TBs_gPojT5xvHlWiQ1HfHB2b8lb9MDrPgFtGQ1qhH7_OogmDU2d6UfvWow00BkxI04PLtXjEi8XyU0VTj0iVGQhvnqWGCUUABz88sYkU0Wz3ZhdOaL4zMHGOi52s9p2A5xhvp?purpose=fullsize" class="avatar">
                <div class="stars">★★★★★</div>
                <p>
                    Professional team, strong creative understanding and a sound identity that improved recall. Highly recommended.
                </p>
                <h4>Priya Kapoor</h4>
                <span>Brand Manager</span>
                </div>

                <div class="t-card">
                <div class="quote">
                    <svg width="50" height="50" viewBox="0 0 24 24" fill="#7c4dff">
                        <path d="M7 17h3l2-4V7H6v6h3l-2 4zm9 0h3l2-4V7h-6v6h3l-2 4z"/>
                    </svg>
                </div>
                <img src="https://images.openai.com/static-rsc-4/SdxyVy82mU-3hWrkvpv3Ofd0k6a8kscETxs1AAZZm8bIkujfmECCt3B0l1cfU0qZzHswfI_pyf8uNY2JFGE1nVT-iTKSJ1h6M2QNNwKqF9RbtuzS4LPy2xn1nn_OVOqCPxTquNWGnBLBRALFQnJ9gDqWgaKZPExG0NYysqNtJ03qSc296o95eEOmenLSgVaA?purpose=fullsize" class="avatar">
                <div class="stars">★★★★★</div>
                <p>
                    We chose the premium music video package and it looked like a proper campaign film. Far beyond our expectations.
                </p>
                <h4>Sandeep Arora</h4>
                <span>Business Owner</span>
                </div>

                <div class="t-card">
                <div class="quote">
                    <svg width="50" height="50" viewBox="0 0 24 24" fill="#7c4dff">
                        <path d="M7 17h3l2-4V7H6v6h3l-2 4zm9 0h3l2-4V7h-6v6h3l-2 4z"/>
                    </svg>
                </div>
                <img src="https://images.openai.com/static-rsc-4/tvQi2OOqCrZ5M22cF0N6ucCr6jgCsdK0ZKJUfMmwryRBL2V0lwtSHAiuXWh46HvL4A5ns5K1MLlF01iDvQ7XZ7i_iywRunlhp_i_5civERQYGgEPtlcqbbRAN2Fnl1LZfn-mz0A7avBBtiz2QT8HrP2jd2kFAjsgAmbdZ8zD1SLkBDdR2STlO0NiuOAKgbzM?purpose=fullsize" class="avatar">
                <div class="stars">★★★★★</div>
                <p>
                    Their team understood our brand personality and converted it into music. That’s rare creative talent.
                </p>
                <h4>Manisha Gupta</h4>
                <span>Fashion Founder</span>
                </div>

                <div class="t-card">
                <div class="quote">
                    <svg width="50" height="50" viewBox="0 0 24 24" fill="#7c4dff">
                        <path d="M7 17h3l2-4V7H6v6h3l-2 4zm9 0h3l2-4V7h-6v6h3l-2 4z"/>
                    </svg>
                </div>
                <img src="https://images.openai.com/static-rsc-4/H3QFjYQeb-xpGFTjWFfgRabgVY4RHMoiTbH7Of6RMpazMVu3HCZZJlmnHDhdYVNDkuPqFsNcJgH423FCLu0DLuJnCETvIRp7OeeT3uj-bH79FCEdCF9UH5GdcePXt6KMw8upI13U6IK0sNn2TD-v3e9efZyC6EzGtY1rFoG4bKpqLdJZmjq0vUoSM5KMLD22?purpose=fullsize" class="avatar">
                <div class="stars">★★★★★</div>
                <p>
                    We used the jingle in ads and engagement improved noticeably. Great investment for branding.
                </p>
                <h4>Karan Malhotra</h4>
                <span>Performance Marketer</span>
                </div>

            </div>
    </section>

    <section class="platform-section">
    <h2 class="title">BrandTune Distribution</h2>

    <h2>
    Publish Your Brand Song <br>
    <span class="gradient"> Global Audio Platforms</span>
    </h2>

    <p class="desc">
    We create your brand’s official song and distribute it across all major music platforms — helping your brand sound premium, searchable and memorable everywhere.
    </p>

    <div class="benefits">
    <div class="benefit">100% Original Brand Song</div>
    <div class="benefit">Released On Major Platforms</div>
    <div class="benefit">Increase Brand Reach & Recall</div>
    </div>

    <div class="logo-grid">

    <div class="logo-box">
    <img src="assets/img/social media/spotify.webp" alt="">
    </div>

    <div class="logo-box">
    <img src="assets/img/social media/apple-music.webp" alt="Apple Music">
    </div>

    <div class="logo-box">
    <img src="assets/img/social media/download.webp" alt="YouTube Music">
    </div>

    <div class="logo-box">
    <img src="assets/img/social media/amazon_music.webp" alt="Amazon Music">
    </div>

    <div class="logo-box">
    <img src="assets/img/social media/Gaana.webp" alt="Gaana">
    </div>

    <div class="logo-box">
    <img src="assets/img/social media/JioSaavn.webp" alt="JioSaavn">
    </div>

    <div class="logo-box">
    <img src="assets/img/social media/Wynk_music.webp" alt="Wynk">
    </div>

    <div class="logo-box">
    <img src="assets/img/social media/Hungama_logo.webp" alt="Hungama">
    </div>

    <div class="logo-box">
    <img src="assets/img/social media/soundcloud.webp" alt="SoundCloud">
    </div>

    <div class="logo-box">
    <img src="assets/img/social media/Deezer-Logo.webp" alt="Deezer">
    </div>

    <div class="logo-box">
    <img src="assets/img/social media/tidal.webp" alt="Tidal">
    </div>

    <div class="logo-box">
    <img src="assets/img/social media/audiomack-logo.webp" alt="Audiomack">

    </div>

    </div>
    </section>

    <!-- Restaurant Jingle -->
    <section id="contact" >
        <div style="    justify-items: anchor-center; margin-bottom: 15px;">
            <h2 class="title" style="margin: 0px;">Request Your Brand Jingle Quote</h2>
            <p>Share your brand details and get a custom jingle concept & quote.</p>
        </div >
        <div class="container">
                <!-- <div><img src="assets/img/music2.webp" alt=""></div> -->
                <form class="contactss" id="contactForm" method="post" action="#">
                    <div class="d-flex">
                        <div class="width">
                            <input type="text" name="conte_name" id="conte_name" placeholder="Name" >
                            <span id="usercontename" class="error"></span>
                        </div>
                        <div class="width"> 
                            <input type="text" name="conte_bname" id="conte_bname" placeholder="Business Name" >
                            <span id="usercontebname" class="error"></span>
                        </div>
                    </div>

                    <div class="d-flex">
                        <div class="width">
                            <div style="display:flex; align-items:center;">
                                <span  style="padding: 13px; background:#f1f1f1; color:#000; border-radius: 10px; margin-right: 10px;">
                                    +91
                                </span>
                                <input type="number" id="conte_phone" name="conte_phone" placeholder="Phone / WhatsApp"
                                        oninput="if(this.value.length > 10) this.value = this.value.slice(0,10)">
                            </div>
                            <span id="usercontephone" class="error"></span>
                        </div>
                    </div>
                    <div style="justify-content:center; justify-items:center;">
                    <button type="submit" class="it-btn-theme btn" name="submitff" id="submitff" style="display:block; margin:20px auto 0;">
                            Get Your Brand Jingle
                    </button>
                    </div>

                </form>
        </div>
    </section>

    <section class="faq-section" id="faq">
        <div style="justify-items: anchor-center; margin-bottom: 15px;">
        <h2 class="title" style="margin: 0px;">Frequently Asked Questions</h2>
            <p>Questions Before Your Brand Gets Its Sound</p>
        </div >
        <div class="container">
            <div class="faq-item">
            <button class="faq-question">
                What is a Brand Jingle?
                <span>+</span>
            </button>
            <div class="faq-answer">
                <p>A Brand Jingle is a custom short musical identity created specifically for your business to improve recall, recognition and emotional connection with customers.</p>
            </div>
            </div>

            <div class="faq-item">
            <button class="faq-question">
                What is included in the Basic Package?
                <span>+</span>
            </button>
            <div class="faq-answer">
                <p>Our Basic Package includes:
                    <ul class="list">
                        <li>Custom 15–30 sec brand jingle</li>
                            
                        <li>Lyrics & melody creation</li>
                            
                        <li>Professional audio production</li>
                            
                        <li>Final mastered audio file</li>

                        <li>Cover artwork design</li>

                        <li>Commercial usage rights</li>
                    </ul>
                </p>
            </div>
            </div>

            <div class="faq-item">
            <button class="faq-question">
                What is included in the Standard Package?
                <span>+</span>
            </button>
            <div class="faq-answer">
                <p>Everything in Basic, plus:
                    <ul class="list">

                        <li>Distribution on major audio platforms like Spotify, Apple Music, YouTube Music, JioSaavn, Gaana etc.</li>
                        <li>Cover art metadata setup</li>
                        <li>Streaming links for your brand</li>
                    </ul>    
                </p>
            </div>
            </div>

            <div class="faq-item">
            <button class="faq-question">
                What is included in the Premium Package?
                <span>+</span>
            </button>
            <div class="faq-answer">
                <p>Everything in Standard, plus:
                    <ul class="list">

                        <li>Professional music video shoot</li>
                        <li>Cinematic brand video production</li>
                        <li>Reel edits for social media</li>
                        <li>Campaign-ready audio + video assets</li>
                    </ul>    
                </p>
            </div>
            </div>

            <div class="faq-item">
            <button class="faq-question">
                How long does it take to create a jingle?
                <span>+</span>
            </button>
            <div class="faq-answer">
                <p>Delivery timelines:
                    <ul class="list">

                        <li>Basic: 3–5 working days</li>
                        <li>Standard: 5–7 working days</li>
                        <li>Premium: 15–25 working days</li>
                    </ul>    
                </p>
            </div>
            </div>

            <div class="faq-item">
            <button class="faq-question">
                Do I own the rights to the jingle?
                <span>+</span>
            </button>
            <div class="faq-answer">
                <p>Yes, you receive commercial usage rights as per package terms.</p>
            </div>
            </div>

            <div class="faq-item">
            <button class="faq-question">
                Can I use the jingle in ads and social media?
                <span>+</span>
            </button>
            <div class="faq-answer">
                <p>Absolutely. Your jingle can be used in:
                    <ul class="list">

                        <li>Meta Ads</li>
                        <li>Instagram Reels</li>
                        <li>YouTube Ads</li>
                        <li>Radio Promotions</li>
                        <li>Brand Campaigns</li>
                    </ul>    
                </p>
            </div>
            </div>

            <div class="faq-item">
            <button class="faq-question">
                How many revisions are included?
                <span>+</span>
            </button>
            <div class="faq-answer">
                <p>Additional revisions can be added if required.
                    <ul class="list">

                        <li>Basic: 1 Revision</li>
                        <li>Standard: 2 Revisions</li>
                        <li>Premium: Revision support during project production</li>
                    </ul>    
                </p>
            </div>
            </div>

            <div class="faq-item">
            <button class="faq-question">
                Will my song really be available on Spotify and Apple Music?
                <span>+</span>
            </button>
            <div class="faq-answer">
                <p>Yes. Under the Standard and Premium packages, we distribute your brand jingle through music distribution partners to major audio platforms.</p>
            </div>
            </div>

            <div class="faq-item">
            <button class="faq-question">
                Do you create jingles in Hindi or regional languages?
                <span>+</span>
            </button>
            <div class="faq-answer">
                <p>Yes — we can create jingles in Hindi, English and regional languages based on your requirement.</p>
            </div>
            </div>
        </div>
    </section>
    <?php include "common/footer.php" ?>