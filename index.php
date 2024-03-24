<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>PedalStart</title>

        <!-- CSS FILES -->        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap" rel="stylesheet">
                        
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link href="css/templatemo-topic-listing.css" rel="stylesheet">      

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-f0E90wJo64qMtPeCrw1Qnd4QD7MI5RtV5Lu8FvI5cEzSmvktg0Yv1eSLyYNL2vTfVdFwVl+0CJa8rT7h8vOepA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!--

TemplateMo 590 topic listing

https://templatemo.com/tm-590-topic-listing

-->
    <style>
        h6:hover {
            color: #FF5733; /* New color on hover */
            transition: color 1000s ease; /* Slow transition for color change */
        }

        @keyframes colorChange {
            0% { color: black; }
            25% { color: purple; }
            50% { color: yellow; } 
            100% { color: black; }
        }

        /* Apply the keyframes animation to the h6 element */
        h6 {
            animation: colorChange 100s infinite; /* Make the blinking animation slower */
        }

            /* Animation for slow color change */
        @keyframes slowColorChange {
            0% { color: white; }
            50% { color: #FF5733; } /* New color */
            100% { color: white; }

        /* Animation for "Join PedalConnect Today!" */
        @keyframes joinPedalConnectAnimation {
            0% { color: white; }
            50% { color: green; } /* New color */
            100% { color: white; }
        }

        * {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
}

body {
	font-family: Arial, sans-serif;
	background-color: #f7f7f7;
}

h1 {
	margin-top: 5rem;
	text-align: center;
}

/* This class is defining the styling for a grid container. */
.testimonial-grid {
	display: grid;
	grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
	gap: 20px;
	max-width: 1200px;
	margin: 0 auto;
	padding: 20px;
	text-align: center;
}

/* This class is defining the styling for the container element that holds each
testimonial in a testimonial grid. */
.testimonial-container {
	background-color: #ffffff;
	border-radius: 12px;
	padding: 30px;
	box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

/* This class is defining the styling for the avatar image */
.testimonial-avatar {
	width: 100px;
	height: 100px;
	border-radius: 50%;
	overflow: hidden;
	margin: 0 auto 20px;
}

.testimonial-avatar img {
	width: 100%;
	height: 100%;
	object-fit: cover;
}

.testimonial-text {
	margin-bottom: 20px;
}

.testimonial-name {
	font-size: 20px;
	font-weight: bold;
	margin-bottom: 5px;
	color: #333333;
}

.testimonial-role {
	font-size: 16px;
	color: #666666;
}

/* This media query in CSS that targets screens with a maximum width of 600 pixels. */
@media screen and (max-width: 600px) {
	.testimonial-grid {
		grid-template-columns: 1fr;
	}
}

    .btn-primary btn-lg animated-btn {
        background: linear-gradient(black, #ff0000, black,  #00ff00);
        border: none;
        color: white;
        padding: 15px 30px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
        animation: glow 2s linear infinite alternate;
    }

    @keyframes glow {
        from {
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
        }
        to {
            box-shadow: 0 0 20px rgba(255, 255, 255, 0.8);
        }
    }
    </style>
    </head>
    
    <body id="top">

        <main>

                <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="position: fixed; top: 0; width: 100%;">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <i class="logo-img"></i>
                    <img src="images/logo.png" alt="Logo" style="width: 200px; height: auto; float: left; margin-right: 10px;">
                </a>

                <div class="d-lg-none ms-auto me-4">
                    <a href="#top" class="navbar-icon bi-person smoothscroll"></a>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-lg-5 me-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_1">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_2">Startup</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_3">How it works</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_4">FAQs</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_5">Testimonials</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_6">Pages</a>
                        </li>
                    </ul>

                    <div class="d-none d-lg-block">
                        <a href="#top" class="navbar-icon bi-person smoothscroll"></a>
                    </div>
                </div>
            </div>
        </nav>



    <section class="hero-section d-flex justify-content-center align-items-center" id="section_1">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12 mx-auto">
                    <h1 class="text-white text-center" style="color: white; animation: colorChange 0.3s infinite;">First we build.<br>Then we invest.</h1>
                    <h6 class="text-center" style="color: white; animation: colorChange 0.3s infinite;">Enabling entrepreneurs by providing them with the best possible support possible in their journey</h6>
                    <section class="cta-container text-center p-5" style="background-color: #f8f9fa; border-radius: 10px; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1); border: 4px solid black;">
                        <div class="container">
                            <h2 style="color: black; animation: joinPedalConnectAnimation 50s infinite;">Join PedalConnect Today!</h2>
                            <p>Ready to take your cycling experience to the next level? Sign up now to connect with fellow riders, share experiences, and unlock exclusive benefits!</p>
                            <a href="signup.php" class="btn btn-primary btn-lg animated-btn"  style="background: linear-gradient( #474973, #118ab2,  #ff595e, #8ac926, #1982c4);
    border: none;
    color: white;
    padding: 15px 30px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 8px;
    animation: moveGradient 5s linear infinite;">Sign Up Now</a>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>




            <section class="featured-section">
                <div class="container">
                    <div class="row justify-content-center">

                        <div class="col-lg-4 col-12 mb-4 mb-lg-0">
                            <div class="custom-block bg-white shadow-lg" style= "margin-left:15px;>
                                <a href="topics-detail.html">
                                    <div class="d-flex">
                                        <div>
                                            <h5 class="mb-2">Accleration</h5> <br>

                                            <p class="mb-0">• Direct Access – $10k Credits  <br>
                                                            • Pitch Deck & Financial Model <br>
                                                            • Business Collaborations <br></p>
                                        </div>

                                      
                                    </div>

                                    <img src="images/11.png" class="custom-block-image img-fluid" alt="">
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-6 col-12">
                        <div class="custom-block custom-block-overlay" style="width: 450px; height: 450px; margin-left:65px;">
                            <div class="d-flex flex-column h-100">
                                <img src="images/founders.png" class="custom-block-image img-fluid" alt="">
                                    <div class="custom-block-overlay-text d-flex">
                                        <div>
                                            <h5 class="text-white mb-2">Finance</h5>
                                            <br>
                                            &nbsp;<p class="text-white">FUND RAISING <br>
                                                            • Demo Pitch With Mentors <br>
                                                            • Strategic Investors <br>
                                                            • Investors Pitch <br>
                                                            • Funds Transaction</p>
                                            <a href="topics-detail.html" class="btn custom-btn mt-2 mt-lg-3">Learn More</a>
                                        </div>

                                      
                                    </div>

                                    <div class="social-share d-flex">
                                        <p class="text-white me-4">Share:</p>

                                        <ul class="social-icon">
                                            <li class="social-icon-item">
                                                <a href="#" class="social-icon-link bi-twitter"></a>
                                            </li>

                                            <li class="social-icon-item">
                                                <a href="#" class="social-icon-link bi-facebook"></a>
                                            </li>

                                            <li class="social-icon-item">
                                                <a href="#" class="social-icon-link bi-pinterest"></a>
                                            </li>
                                        </ul>

                                        <a href="#" class="custom-icon bi-bookmark ms-auto"></a>
                                    </div>

                                    <div class="section-overlay"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>


            <section class="explore-section section-padding" id="section_2">
                <div class="container">
                    <div class="row">

                        <div class="col-12 text-center">
                            <h2 class="mb-4">Startup</h1>
                        </div>

                    </div>
                </div>

                <div class="container-fluid">
                    <div class="row">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="design-tab" data-bs-toggle="tab" data-bs-target="#design-tab-pane" type="button" role="tab" aria-controls="design-tab-pane" aria-selected="true">Community Features</button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="marketing-tab" data-bs-toggle="tab" data-bs-target="#marketing-tab-pane" type="button" role="tab" aria-controls="marketing-tab-pane" aria-selected="false">Pedal Invest</button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="music-tab" data-bs-toggle="tab" data-bs-target="#music-tab-pane" type="button" role="tab" aria-controls="music-tab-pane" aria-selected="false">Mentorship</button>
                            </li>

                           
                        </ul>
                    </div>
                </div>

                <div class="container">
                    <div class="row">

                        <div class="col-12">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="design-tab-pane" role="tabpanel" aria-labelledby="design-tab" tabindex="0">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                                            <div class="custom-block bg-white shadow-lg">
                                                <a href="topics-detail.html">
                                                    <div class="d-flex">
                                                        <div>
                                                            <h5 class="mb-2" style="font-size: 20px;">Dedicated Mate</h5>

                                                            <p class="mb-0" style="font-size: 18px;"> 1-on-1 support from experienced founders.</p>
                                                        </div>

                                                       
                                                    </div>

                                                    <img src="images/topics/undraw_Remote_design_team_re_urdx.png" class="custom-block-image img-fluid" alt="">
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                                            <div class="custom-block bg-white shadow-lg">
                                                <a href="topics-detail.html">
                                                    <div class="d-flex">
                                                        <div>
                                                            <h5 class="mb-2" style="font-size: 20px;">Networking Opportunity & Team Building</h5>

                                                                <p class="mb-0" style="font-size: 18px;">Online and offline access to events, connecting you with fellow founders and startup enthusiasts.</p>
                                                        </div>

                                                    </div>

                                                    <img src="images/topics/undraw_Redesign_feedback_re_jvm0.png" class="custom-block-image img-fluid" alt="">
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6 col-12">
                                            <div class="custom-block bg-white shadow-lg">
                                                <a href="topics-detail.html">
                                                    <div class="d-flex">
                                                        <div>
                                                            <h5 class="mb-2" style="font-size: 20px;">Regular Updates and Metrics Tracking</h5>

                                                                <p class="mb-0" style="font-size: 18px;">Follow-ups with a dedicated community manager.</p>
                                                        </div>
                                                    </div>

                                                    <img src="images/topics/colleagues-working-cozy-office-medium-shot.png" class="custom-block-image img-fluid" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="marketing-tab-pane" role="tabpanel" aria-labelledby="marketing-tab" tabindex="0">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-3">
                                                <div class="custom-block bg-white shadow-lg">
                                                    <a href="topics-detail.html">
                                                        <div class="d-flex">
                                                            <div>
                                                                <h5 class="mb-2" style="font-size: 20px;">Exponential Returns</h5>

                                                                <p class="mb-0" style="font-size: 18px;">Early-stage startup investment offers high return opportunities in long term</p>
                                                            </div>

                          
                                                        </div>

                                                        <img src="images/topics/undraw_online_ad_re_ol62.png" class="custom-block-image img-fluid" alt="">
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-3">
                                                <div class="custom-block bg-white shadow-lg">
                                                    <a href="topics-detail.html">
                                                        <div class="d-flex">
                                                            <div>
                                                                <h5 class="mb-2" style="font-size: 20px;">Risk Mitigation</h5>

                                                                <p class="mb-0" style="font-size: 18px;">Listed opportunities are only the ones vetted and accelerated by PedalStart</p>
                                                            </div>

                                                        </div>

                                                        <img src="images/topics/undraw_Group_video_re_btu7.png" class="custom-block-image img-fluid" alt="">
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-md-6 col-12">
                                                <div class="custom-block bg-white shadow-lg">
                                                    <a href="topics-detail.html">
                                                        <div class="d-flex">
                                                            <div>
                                                                <h5 class="mb-2" style="font-size: 20px;">Portfolio Diversification</h5>

                                                                <p class="mb-0" style="font-size: 18px;">Opportunity to invest in a startup pool containing multiple startups with a minimum ticket size of INR 50K, hence diversifying the portfolio.</p>
                                                            </div>

                                                            
                                                        </div>

                                                        <img src="images/topics/undraw_viral_tweet_gndb.png" class="custom-block-image img-fluid" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                  </div>


                                <div class="tab-pane fade" id="music-tab-pane" role="tabpanel" aria-labelledby="music-tab" tabindex="0">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-3">
                                            <div class="custom-block bg-white shadow-lg">
                                                <a href="topics-detail.html">
                                                    <div class="d-flex">
                                                        <div>
                                                            <h5 class="mb-2"  style="font-size: 20px;">Mentor and Vertical Domain Expert Engagement</h5>

                                                            <p class="mb-0"  style="font-size: 18px;">Guidance from successful startup founders, including CEOs, CFOs, and CTOs.</p>
                                                        </div>

                      
                                                    </div>

                                                    <img src="images/topics/undraw_Compose_music_re_wpiw.png" class="custom-block-image img-fluid" alt="">
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-3">
                                            <div class="custom-block bg-white shadow-lg">
                                                <a href="topics-detail.html">
                                                    <div class="d-flex">
                                                        <div>
                                                            <h5 class="mb-2"  style="font-size: 20px;">Founder Tool-Kit</h5>

                                                            <p class="mb-0"  style="font-size: 18px;">Access to credits and resources.</p>
                                                        </div>
                                                    </div>

                                                    <img src="images/topics/undraw_happy_music_g6wc.png" class="custom-block-image img-fluid" alt="">
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6 col-12">
                                            <div class="custom-block bg-white shadow-lg">
                                                <a href="topics-detail.html">
                                                    <div class="d-flex">
                                                        <div>
                                                            <h5 class="mb-2"  style="font-size: 20px;">Regular Updates and Metrics Tracking</h5>

                                                            <p class="mb-0"  style="font-size: 18px;">Follow-ups with a dedicated community manager.</p>
                                                        </div>

                                                     
                                                    </div>

                                                    <img src="images/topics/undraw_Podcast_audience_re_4i5q.png" class="custom-block-image img-fluid" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                
                    </div>
                </div>
            </section>


            <section class="timeline-section section-padding" id="section_3" style="background-image: url('images/wallpaper.png');">
                <div class="section-overlay"></div>

                <div class="container">
                    <div class="row">

                        <div class="col-12 text-center">
                            <h2 class="text-white mb-4">How To Join Our Community - A Four Step Process </h1>
                        </div>

                        <div class="col-lg-10 col-12 mx-auto">
                            <div class="timeline-container">
                                <ul class="vertical-scrollable-timeline" id="vertical-scrollable-timeline">
                                    <div class="list-progress">
                                        <div class="inner"></div>
                                    </div>

                                    <li>
                                        <h4 class="text-white mb-3">Join wishlist</h4>

                                        <p class="text-white">Click  <strong> “Sign Up”. </strong> Fill the form and submit. We read each application at least twice before coming to a decision</p>
                                        <div class="icon-holder">
                                          <i class="bi bi-person-plus-fill"></i>
                                        </div>
                                    </li>
                                    
                                    <li>
                                        <h4 class="text-white mb-3">Application screening</h4>

                                        <p class="text-white">The applications we love will hear back from us. We send out call invites within 24 Hours</p>

                                        <div class="icon-holder">
                                          <i class="bi bi-journal-check"></i>
                                        </div>
                                    </li>

                                    <li>
                                        <h4 class="text-white mb-3">Pitch  to us</h4>

                                        <p class="text-white">We will connect with you on call [Just to get a better understanding of your startup]</p>

                                        <div class="icon-holder">
                                          <i class="bi bi-chat-right-dots"></i>
                                        </div>
                                    </li>

                                    <li>
                                        <h4 class="text-white mb-3">Community  onboarding</h4>

                                        <p class="text-white">After acceptance We will onboard you in our community</p>

                                        <div class="icon-holder">
                                          <i class="bi bi-people-fill"></i>
                                        </div>
                                    </li> 
                                </ul>
                            </div>
                        </div>

                        <div class="col-12 text-center mt-5">
                            <p class="text-white">
                            &nbsp;  &nbsp;  We're backed by incredible mentors & investors
                                <a href="https://www.youtube.com/channel/UCPOhXuMP7G_atpUBz_ey04w" class="btn custom-btn custom-border-btn ms-3">Check out Youtube</a>
                            </p>
                        </div>
                    </div>
                </div>
            </section>


            <section class="faq-section section-padding" id="section_4">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12">
                            <h2 class="mb-4">FAQ's</h2>
                        </div>

                        <div class="clearfix"></div>

                        <div class="col-lg-5 col-12">
                            <img src="images/husters.png" class="img-fluid" alt="FAQs">
                        </div>

                        <div class="col-lg-6 col-12 m-auto">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        How can I join the PedalStart Community?
                                        </button>
                                    </h2>

                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                        To join the PedalStart Community, you need to go through a selection-based screening process. <strong> First, you need to join the wishlist and then apply. </strong> The screening process involves a quick call with an analyst, a group discussion, and a pitch call. 
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Are there any physical events organized by PedalStart?
                                    </button>
                                    </h2>

                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                        Yes, PedalStart organizes physical events across India. These events provide founders with opportunities to connect, share experiences, and learn from each other face-to-face.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        What is the selection percentage rate of PedalStart for startups to join their community?
                                    </button>
                                    </h2>

                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                         PedalStart has a selection rate of 10% for startups to join their community.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>


            <section class="contact-section section-padding section-bg" id="section_5" style="background-color: #ADD8E6; border: 2px solid orange;">
    <div class="container">
        <div class="row">
            <div class="col-lg-4" style="display: flex; justify-content: center;">
                <div class="card" style="width: 300px; height: 300px; transform-style: preserve-3d; perspective: 500px; border: 2px solid orange; background-color: white; position: relative;">
                    <div class="card-content" style="padding: 25px 12px 12px 12px; font-size: 3px; font-family: 'Times New Roman', Times, serif; text-align: justify;">
                        <h3 style="margin-top: 0;" style="font-size: 9px;">NEMAI AI</h3>
                        <p>Health ed-tech platform that uses brain scan technology to improve learning for  special  schooling. It offers tools to improve mental wellness and neuromarketing strategies for both individuals and corporations.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4" style="display: flex; justify-content: center;">
                <div class="card" style="width: 300px; height: 300px; transform-style: preserve-3d; perspective: 500px; border: 2px solid orange; background-color: white; position: relative;">
                    <div class="card-content" style="padding: 25px 12px 12px 12px;  font-size: 3px; font-family: 'Times New Roman', Times, serif; text-align: justify;">
                        <h3 style="margin-top: 0;" style="font-size: 9px;">OhLocal</h3>
                        <p>Local marketplace that connects merchants and consumers in their city through a smart real-time bidding platform with prices that compete with online retailers. Founded in 2020 and based in Gurugram, Haryana, India.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4" style="display: flex; justify-content: center;">
                <div class="card" style="width: 300px; height: 300px; transform-style: preserve-3d; perspective: 500px; border: 2px solid orange; background-color: white; position: relative;">
                    <div class="card-content" style="padding: 25px 12px 12px 12px; font-size: 3px; font-family: 'Times New Roman', Times, serif; text-align: justify;">
                        <h3 style="margin-top: 0;" style="font-size: 9px;">Curomates</h3>
                        <p>Community-based mental health application that offers private chats with empathetic listeners and affordable therapy. Located in Thane, Maharashtra, India.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


        </main>

<footer class="site-footer section-padding">
            <div class="container">
                <div class="row">

                   
                <div class="col-lg-3 col-md-4 col-6 mb-4 mb-lg-0">
                    <h6 class="site-footer-title mb-3">About</h6>
                    <p class="para" style="text-align: justify; color: black; font-size:16px;">
                        PedalStart is India's fast-growing startup founders' community that works intensively with the startups in each phase of their journey. We have been transforming big ideas into high-potential businesses.
                    </p>
                </div>


                    <div class="col-lg-3 col-md-4 col-6" >
                        <h6 class="site-footer-title mb-3">Resources</h6>

                        <ul class="site-footer-links">
                            <li class="site-footer-link-item">
                                <a href="#" class="site-footer-link" style=color:black;>Home</a>
                            </li>

                            <li class="site-footer-link-item">
                                <a href="#" class="site-footer-link" style=color:black;>Startup</a>
                            </li>

                            <li class="site-footer-link-item">
                                <a href="#" class="site-footer-link" style=color:black;>FAQs</a>
                            </li>

                            <li class="site-footer-link-item">
                                <a href="#" class="site-footer-link"  style=color:black;>Testimonials</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-4 col-6 mb-4 mb-lg-0">
                    <h6 class="site-footer-title mb-3">Follow Us</h6>
                    <ul class="list-unstyled">
                        <li>
                            <a href="https://www.linkedin.com/company/pedalstart/" target="_blank"  style="color: black;">
                                <i class="fab fa-linkedin"></i> LinkedIn
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/pedalstart/?igsh=MWIwc205aTV0c3Aycg%3D%3D" target="_blank" style="color: black;">
                              <i class="fab fa-instagram" ></i> Instagram
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/pedalstart/?igsh=MWIwc205aTV0c3Aycg%3D%3D" target="_blank" style="color: black;">
                              <i class="fab fa-facebook" ></i> Facebook
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-4 col-6 mb-4 mb-lg-0">
                <h6 class="site-footer-title mb-3">Get in touch</h6>
                <ul class="list-unstyled">
                    <li style="color: black; font-size: 16px">
                        <i class="fas fa-phone-alt"></i> +91-9560346002
                    </li>
                    <li style="color: black; font-size: 16px">
                        <a href="mailto:connect@join.pedalstart.com">
                            <i class="far fa-envelope" ></i> connect@join.pedalstart.com
                        </a>
                    </li>
                    <li style="color: black; font-size: 16px">
                        <i class="fas fa-map-marker-alt"  ></i> Address: SpringHouse Coworking, Grand Mall, Sikandarpur, Gurgaon, Haryana 122004, IN
                    </li>
                </ul>
            </div>

                    </div>

                </div>
            </div>
            <!-- Footer -->
            <br>
            <br>
    <footers class="footer text-center" style="background-color: black;  padding: 10px 0; bottom: 0; width: auto;"> 
        <p style= "color: black; margin: 0;">© 2022 – PedalStart. All Rights Reserved.</p>
    </footers>

        </footer>


        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/click-scroll.js"></script>
        <script src="js/custom.js"></script>

    </body>
</html>
