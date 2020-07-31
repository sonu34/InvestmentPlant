<!DOCTYPE html>
<html>
<head>
	<title>MUTUAL FUND</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">  
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
	
	<link href="https://fonts.googleapis.com/css?family=Varela&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

	<style type="text/css">

/*style.css*/

/*end style.css*/

		.brand{
          width: 160px;
          height: 60px;
          margin-left: 30px;
        }
        #fonts{
            font-family: 'Varela', sans-serif;
        }
        .fa {
          padding: 20px;
          font-size: 30px;
          width: 65px;
          text-align: center;
          text-decoration: none;
          margin: 5px 2px;
        }

        .fa:hover {
           opacity: 0.7;
        }

        .fa-facebook {
           background: #3B5998;
           color: white;
        }
        .fa-twitter {
            background: #55ACEE;
            color: white;
        }
        .fa-instagram {
            background: #125688;
            color: white;
        }
        .unorder {
          list-style: none;
        }

        .unorder li:before {
          content: '✓';
          color: blue;
        }
        hr{
height: 1px;
color: #002366;
background-color: #002366;
border: none;
}

#fontstyle{
  font-style:italic;
}
/*Starting Footer*/
footer {
  background: #16222A;
  background: -webkit-linear-gradient(59deg, #3A6073, #16222A);
  background: linear-gradient(59deg, #3A6073, #16222A);
  color: white;
}

footer a {
  color: #fff;
  font-size: 14px;
  transition-duration: 0.2s;
}

footer a:hover {
  color: #FA944B;
  text-decoration: none;
}

.copy {
  font-size: 12px;
  padding: 10px;
  border-top: 1px solid #FFFFFF;
}

.footer-middle {
  padding-top: 2em;
  color: white;
}


/*SOCİAL İCONS*/

/* footer social icons */

ul.social-network {
  list-style: none;
  display: inline;
  margin-left: 0 !important;
  padding: 0;
}

ul.social-network li {
  display: inline;
  margin: 0 5px;
}


/* footer social icons */

.social-network a.icoFacebook:hover {
  background-color: #3B5998;
}

.social-network a.icoLinkedin:hover {
  background-color: #007bb7;
}

.social-network a.icoFacebook:hover i,
.social-network a.icoLinkedin:hover i {
  color: #fff;
}

.social-network a.socialIcon:hover,
.socialHoverClass {
  color: #44BCDD;
}

.social-circle li a {
  display: inline-block;
  position: relative;
  margin: 0 auto 0 auto;
  -moz-border-radius: 50%;
  -webkit-border-radius: 50%;
  border-radius: 50%;
  text-align: center;
  width: 30px;
  height: 30px;
  font-size: 15px;
}

.social-circle li i {
  margin: 0;
  line-height: 30px;
  text-align: center;
}

.social-circle li a:hover i,
.triggeredHover {
  -moz-transform: rotate(360deg);
  -webkit-transform: rotate(360deg);
  -ms--transform: rotate(360deg);
  transform: rotate(360deg);
  -webkit-transition: all 0.2s;
  -moz-transition: all 0.2s;
  -o-transition: all 0.2s;
  -ms-transition: all 0.2s;
  transition: all 0.2s;
}

.social-circle i {
  color: #595959;
  -webkit-transition: all 0.8s;
  -moz-transition: all 0.8s;
  -o-transition: all 0.8s;
  -ms-transition: all 0.8s;
  transition: all 0.8s;
}

.social-network a {
  background-color: #F9F9F9;
}

	</style>
</head>
<body style="background-color: #DCF5FF">

  
<div>
	<div id="fonts">
      <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #002366; " >
  <a class="navbar-brand" href="index.php" style="font-size: 35px;color: #eee;-webkit-text-stroke: .4px green;font-family: 'Source Sans Pro', sans-serif;margin-left: 30px;">Investment Plant </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item" id="bs-example-navbar-collapse-1">
        <a class="nav-link" href="index.php" style="margin-right: 10px; color: white;"><strong>HOME</strong> <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php" style="margin-right: 10px; color: white;"><strong>WHY US?</strong> </a>
      </li>
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" id="navbarDropdown" aria-haspopup="true" aria-expanded="false" style="margin-right: 10px;color: white;">
          <strong>PRODUCTS</strong> 
        </a>
        
        <div class="dropdown-menu">
        
        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          <a class="nav-link dropdown-item active" href="mutualfund.php" ><strong>Mutual Fund</strong> </a>
          <div class="dropdown-divider"></div>
          <a class="nav-link dropdown-item" href="mars.php"><strong>MARS</strong></a>
          
          <div class="dropdown-divider"></div>
          <a class="nav-link dropdown-item" href="insurance.php"><strong>Insurance</strong> </a>
          <div class="dropdown-divider"></div>
          <a class="nav-link dropdown-item" href="fixedincome.php"><strong>Fixed Deposits</strong> </a>
          <div class="dropdown-divider"></div>
          <a class="nav-link dropdown-item" href="equityandetf.php"><strong>Equity & ETFs</strong> </a>
          <div class="dropdown-divider"></div>
          <a class="nav-link dropdown-item" href="taxsaving.php"><strong>Tax Saving</strong></a>
          
          <div class="dropdown-divider"></div>
          <a class="nav-link dropdown-item" href="grp.php"><strong>Guaranteed Return Plan</strong> </a>

          <div class="dropdown-divider"></div>
          <a class="nav-link dropdown-item" href="goldbond.php"><strong>RBI Gold</strong> </a>
          <div class="dropdown-divider"></div>
          <a class="nav-link dropdown-item" href="pms.php"  ><strong>PMS</strong> </a>
          <div class="dropdown-divider"></div>
          <a class="nav-link dropdown-item" href="loanagent.php"><strong>Loan Against Securities</strong></a>
        </div>

        </div>

      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" id="navbarDropdown" aria-haspopup="true" aria-expanded="false" style="margin-right: 10px;color: white;">
        <strong>TECHNOLOGY</strong>  
        </a>
        
        <div class="dropdown-menu">
        
        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          <a class="nav-link dropdown-item " href="sipcalculator.php" ><strong>MF SIP Calculator</strong></a>
          <div class="dropdown-divider"></div>
          <a class="nav-link dropdown-item" href="ewealthinfo.php"><strong>E-Wealth</strong></a>
          <div class="dropdown-divider"></div>
          <a class="nav-link dropdown-item" href="clientdeskinfo.php"><strong>Client Desk</strong></a>
        </div>  

        </div>

      </li>
       
      <li class="nav-item dropdown">
         <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" id="navbarDropdown" aria-haspopup="true" aria-expanded="false" style="margin-right: 10px;color: white;">
          <strong>RESOURCES</strong>
         </a>
        
         <div class="dropdown-menu">
         
         
         <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          <a class="nav-link dropdown-item " href="resources.php"><strong>Articles</strong></a>
          <div class="dropdown-divider"></div>
            <a class="nav-link dropdown-item" href="video.php" ><strong>Video Gallery</strong></a>
           <div class="dropdown-divider"></div>
            <a class="nav-link dropdown-item" href="gallery.php"><strong>Image Gallery</strong></a>
            <div class="dropdown-divider"></div>
            <a class="nav-link dropdown-item" href="interviews.php"><strong>Interviews</strong></a>
          </div>

         </div>

        </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-right: 10px;color: white;">
        <strong>LOGIN</strong>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="https://www.njindiaonline.com/onlinetrading/login.fin?action=showLoginForm"><strong>NJ E-Wealth A/c</strong></a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="https://www.njindiaonline.in/cdesk/login.fin"><strong>Client Desk</strong></a>
         
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php" tabindex="-1" aria-disabled="true" style="margin-right: 10px;color: white;"><strong>CONTACT US</strong></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="partner.php" tabindex="-1" aria-disabled="true" style="margin-right: 80px;color: white;"><strong>PARTNER US</strong></a>
      </li>
    </ul>
   
  </div>
</nav>
     


     <div style="background-color: white;" class="container">
     	<div >
          <br>
          <div>You are here:  <a class="unorder" href="#">Home</a> / <a class="unorder" href="#">Products</a> / Mutual Fund</div>
        
        </div>
        <hr>
        <div class="row">

        	<div class="col-lg-9">
        <!-- slider start -->
        <div class="sidebar-contact">
         <div class="toggle">
      
         </div>
         <h2 style="color: black;font-family: 'Open Sans', sans-serif;">Contact Us</h2>
         <hr>
         <form action="sliderconnection.php" method="POST">
           <input type="text" name="sname" placeholder ="Name" required>
           <input type="text" name="email" placeholder ="Email" required>
           <input type="text" name="contact" placeholder ="Phone Number" required>
           <input type="text" name="scity" placeholder="City" required>
           <textarea name="smessage" placeholder="Message.." required></textarea>
           <input type="submit" name="submit" value="Submit">
          </form>
        </div>
        <!-- slider start -->
           <h5>
            Why Mutual Fund?
           </h5><hr>
           Mutual funds are ideal for investors who want to invest in stock market but do not have sufficient time and expertise to pick winning stocks. A mutual fund pools money from many investors and invests  the money in securities such as stocks, bonds, and short-term debt. The combined holdings of the mutual fund are known as its portfolio.<br><br>
           Key Benefits of investing in Mutual Funds :<br>
           <ul class="unorder" >
             <li> Diversification</li>
             <li> Well Regulated and Professional Management</li>
             <li> Liquidity</li>
             <li> Systematic and Online Transactions</li>
             <li> Tax Benefits</li>
             <li> Wide choice and Disciplined investment approach</li>
             <li> Low transaction costs</li>
           </ul>
           
           <h5>Why invest with us?</h5><hr>
           <ul class="unorder">
             <li> Invest in 9000+ fund scheme across 35 AMCs.</li><br>
             <li> All our offerings are designed keeping you in mind. Your long-term intrests serve as the 'primary' influencing factor in our recommendations process.</li><br>
             <li> We offer a single point access to multiple financial products with a holistic need-driven approach & not product centric approach.</li><br>
             <li> Invest in mutual fund schemes through Lump sum, Systematic Investment Plan (sips), Systematic Transfer Plan (STP), Systematic Withdrawal Plan (SWP) and New fund offers (NFO's) across all the asset class- Equity, Debt, Balanced, Tax Saving funds.</li><br>
             <li> Our services ensure comfort, convenience, confidence and control to you in managing your wealth. You would enjoy being always updated of your investments any time, any where.</li><br>
             <li> Delighting investors is our aim. Nothing excites us more that helping our clients archive their financial goals and dreams in life with our support.</li><br>
           </ul>  

           <h5>Our Technology</h5><hr>
           <ul class="unorder">
             <li> Flexibility to invest online through a single login across all devices - desktop, mobile, Phone call.</li><br>
             <li> Using client desk, you can set your financial goals, map all insurance with detailed reports, reminders for policy. Also you can link FDs, PPF, NPS, Bonds, other demate account equity investments, your loans. You can manange all family members investment and share this platform's ID and Password with your family members.</li><br>
             <li> MARS (Mutual Fund Automated Portfolio Rebalancing System):- MARS is technology powered tool which helps in managing asset allocation through periodic rebalancing of portfolio which  involves a research and logic driven scheme selection process with two broad asset allocation offerings - Dynamic & Fixed, MARS is the beneficial to investors worries on portfolio management.</li><br>
             <li> You can do hassle, worry and error free transactions in a very easy, time and cost effective manner - any time, any where.</li><br>
           </ul>
           <ul>
             
           </ul>
        	</div>
        	<div></div>
        </div>
        
     </div>

    </div>
    <footer class="mainfooter" role="contentinfo">
        <div class="footer-middle">
        <div class="container">
          <div class="row">
            <div class="col-md-3 col-sm-6">
              <!--Column1-->
              <div class="footer-pad">
                <h4>Links</h4>
                <ul class="list-unstyled">
                  <li><a href="#"></a></li>
                  <li><a href="index.php"> Home</a></li>
                  <li><a href="about.php"> Why Us?</a></li>
                  <li><a href="partnerus.php"> Partner Us</a></li>
                  <li><a href="contact.php"> Contact Us</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <!--Column1-->
              <div class="footer-pad">
                <h4><br></h4>
                <ul class="list-unstyled">
                  <li><a href="http://www.sebi.gov.in/sebiweb/">SEBI</a></li>
                  <li><a href="http://www.rbi.org.in/">RBI</a></li>
                  <li><a href="http://www.bseindia.com/">BSE</a></li>
                  <li><a href="http://www.cdslindia.com/">CDSL</a></li>
                </ul>
              </div>
             </div>
             <div class="col-md-3 col-sm-6">
               <!--Column1-->
               <div class="footer-pad">
                 <h4><br></h4>
                 <ul class="list-unstyled">
                   <li><a href="http://www.amfiindia.com/">AMFI</a></li>
                   <li><a href="http://investor.sebi.gov.in/">Investor Awareness</a></li>
                   <li><a href="https://www.mutualfundssahihai.com/">Mutual Fund Sahi Hai</a></li>
                   <li>
                   <a href="https://www.anmi.in/">ANMI</a>
                   </li>
                 </ul>
               </div>
             </div>
           <div class="col-md-3">
             <h4>Follow Us</h4>
              <ul class="social-network social-circle">
               <li><a href="#"  title="Facebook"><i class="fab fa-facebook"></i></a></li>
               <li><a href="#"  title="Instagram"><i class="fab fa-instagram"></i></a></li>
              </ul>       
           </div>
          </div>
      <div class="row">
        <div class="col-md-12 copy">
          <p class="text-center" id="fontstyle">&copy; Copyright 2020 - Investment Plant.  All rights reserved.</p>
        </div>
     </div>


  </div>
  </div>
</footer>
     <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      $('.toggle').click(function(){
        $('.sidebar-contact').toggleClass('active')
        $('.toggle').toggleClass('active')
      })

    })
  </script>
  <!--  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script> -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>