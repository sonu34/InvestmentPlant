<!DOCTYPE html>
<html>
<head>
  <title>Insurance</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">  
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Varela&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
  <style type="text/css">
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
        hr { 
          background-color: #002366; 
          height: 1px; 
          border: 0;
         }
         .unorder {
          list-style: none;
        }

        .unorder li:before {
          content: '✓';
          color: blue;
          font-weight: bold;
        }

        .unor{
          list-style: none;
        }
        .imge {
          transform: rotate(90deg);
          margin-left: 100px;
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

/*collapse start*/
/* accordion styles */
.accordion {
  .card-header {
    cursor: pointer;
  }
  
  &.heading-right {
    .card-title {
      position: absolute;
      right: 50px;
    }
  }
  
  &.indicator-plus {
    .card-header {
      &:after {
        font-family: 'FontAwesome';  
        content: "\f068";
        float: right; 
      }
      &.collapsed {
        &:after {
          content: "\f067"; 
        }
      }
    }
  }
  &.indicator-plus-before {
    &.round-indicator {
      .card-header {
        &:before {
          font-family: 'FontAwesome';  
          font-size: 14pt;
          content: "\f056";
          // float: left; 
          margin-right: 10px;
          // color: #ff9900;
        }
        &.collapsed {
          &:before {
            content: "\f055"; 
            color: #000;
          }
        }
      }     
    }
    .card-header {
      &:before {
        font-family: 'FontAwesome';  
        content: "\f068";
        float: left; 
      }
      &.collapsed {
        &:before {
          content: "\f067"; 
        }
      }
    }
  } 
  
  &.indicator-chevron {
    .card-header {
      &:after {
        font-family: 'FontAwesome';  
        content: "\f078";
        float: right; 
      }
      &.collapsed {
        &:after {
          content: "\f077"; 
        }
      }
    }
  } 
  
  &.background-none {
    [class^="card"] {
      background: transparent;
    }
  }
  
  &.border-0 {
    .card {
      border: 0;
    } 
  } 
}
/*collapse end*/
  </style>
</head>
<body style="background-color: #DCF5FF">

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
          <a class="nav-link dropdown-item" href="mutualfund.php" ><strong>Mutual Fund</strong> </a>
          <div class="dropdown-divider"></div>
          <a class="nav-link dropdown-item" href="mars.php"><strong>MARS</strong></a>

          <div class="dropdown-divider"></div>
          <a class="nav-link dropdown-item active" href="insurance.php"><strong>Insurance</strong> </a>
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
     
      
     </div>

     <div style="margin-top: 0px; background-color: #738276"></div>
     <div class="container" style="background-color: white;">
      
        <div >
          <br>
          <div>You are here:  <a class="unorder" href="#">Home</a> / <a class="unorder" href="#">Products</a> / Insurance</div>
        
        </div>
        <hr>
        <div class="row">
          <div class="col-lg-8">

            

            <h3>Insurance</h3><hr>
            Insurance constitutes a very important aspect of any person&#39;s or family&#39;s financial life. It is an important pillar
ensuring the continued financial well-being of a family in case of any eventuality.
             <br>
             Insurance is a Right not Privilege. Insurance provides financial security for you and your family at any
mis-happening case. So that they can survive their life with honour. Insurance also helps you to
secure your savings. Life is not predictable so it’s better to have an insurance rather than leaving
your family vulnerable.
             <br>
             Though we are all familiar with the "insurance" term, there exists a huge gap in "what the customer
             need" and "what the customer gets". Investment plant, realises this "need gap" and aims to fulfil it by
providing you with 360 degree service offering to identify, satisfy and manage your insurance needs.
             <br><br>
             <h4>What You Get</h4>
             <h6>40+ Insurers One Place</h6>
             <div >
      <div class="accordion indicator-plus-before round-indicator" id="accordionH" aria-multiselectable="true">
        <div class="card m-b-0">
          
          <div class="card-header collapsed" role="tab" id="headingOneH" href="#collapseOneH" data-toggle="collapse" data-parent="#accordionH" aria-expanded="false" aria-controls="collapseOneH">
            <a class="card-title"><strong>1. Term Life Insurance</strong></a>
          </div>
          <div class="collapse" id="collapseOneH" role="tabpanel" aria-labelledby="headingOneH">
            <div class="card-body">
              <h5>Why Term Insurance is must have for You?</h5>
              <ul class="unorder">
          <li> Protect your family's financial future and financial Goals.</li>
          <li> For ensuring a steady income in Your Absence.</li>
          <li> To give a no-compromise lifestyle for your love ones.</li>
          <li> Protects your child’s education and career goals. </li>
          <li> Large cover at affordable rates.</li>
          
          <li> Take care of your parents’ health and retirement needs.</li>
          <li> Company provide Term Insurance is not valid during job change or sabbatical.</li>
          <li> Premium paid and benefits received are eligible for tax benefits U/S 80C (up to ₹46,800) and, maturity benefit is tax free U/S 10(10D).</li>
          <li> Prevent the burden of your Loan EMIs on your family. </li>
          <li> Large cover at affordable rates.</li>
        </ul>
<br>
       <h6>Why buy on <font color="blue">INVESTMENT</font><font color="green">PLANT?</font></h6> 
     <ul>
      <li> Quick and hassle-free claims service when your family needs it the most. </li>
      <li>Fast, easy & paperless</li>
      <li>Instant tax proof</li>
      <li>Complete assistance for purchase & claims</li>
      <li>One click payment</li>
     </ul>
      <a href="termquotation.php">
        <button type="button" class="btn btn-success">Get Quotation Now</button>
      </a>
     
            </div>
          </div>

          <div class="card-header collapsed" role="tab" id="headingTwoH" href="#collapseTwoH" data-toggle="collapse" data-parent="#accordionH" aria-expanded="false" aria-controls="collapseTwoH">
            <a class="card-title"><strong>2. Health Insurance</strong> </a>
          </div>
          <div class="collapse" id="collapseTwoH" role="tabpanel" aria-labelledby="headingTwoH">
            <div class="card-body">
              <h5>Why Health Insurance is must have for You?</h5>
              <ul class="unorder">
          <li> Access the best healthcare for you & your family.</li>
          <li> Protect your family’s savings from medical emergencies.</li>
          <li> Coverage against critical illnesses.</li>
          <li> Assured timely finance during medical emergencies.</li>
          <li> Preventive care with free periodic health check-ups.</li>
          <li> Helps avail caseless treatments in leading hospitals.</li>
          <li> Additional protection over and above your employer cover.</li>
          <li> Tax saving up to ₹15,600 by buying for Family as well as Parents.</li>
          <li> Supports lifelong renewals, irrespective of your health condition.</li>
        </ul>
      <br>  <h6>Why buy on <font color="blue">INVESTMENT</font><font color="green">PLANT?</font></h6> 
     <ul>
      <li>Quick and hassle-free claims service when your family needs it the most. </li>
      <li>Fast, easy & paperless</li>
      <li>Instant tax proof</li>
      <li>Complete assistance for purchase & claims</li>
      <li>One click payment</li>
     </ul>
            <a href="healthquotation.php">
               <button type="button" class="btn btn-success">Get Quotation Now</button>
            </a>
            </div>
          </div>

          <div class="card-header collapsed" role="tab" id="headingThreeH" href="#collapseThreeH" data-toggle="collapse" data-parent="#accordionH" aria-expanded="false" aria-controls="collapseThreeH">
            <a class="card-title"><strong>3. Personal Accident Insurance</strong> </a>
          </div>
          <div class="collapse" id="collapseThreeH" role="tabpanel" aria-labelledby="headingThreeH">
            <div class="card-body">
              <button type="button" class="btn btn-success">Get Quotation Now</button>
            </div>
          </div>

          <div class="card-header collapsed" role="tab" id="headingfourH" href="#collapsefour" data-toggle="collapse" data-parent="#accordionH" aria-expanded="false" aria-controls="collapsefour">
            <a class="card-title"><strong>4. Travel Insurance</strong> </a>
          </div>
          <div class="collapse" id="collapsefour" role="tabpanel" aria-labelledby="headingfourH">
            <div class="card-body">
              <a href="travelquotation.php">
                <button type="button" class="btn btn-success">Get Quotation Now</button>
              </a>
              
            </div>
          </div>

          <div class="card-header collapsed" role="tab" id="headingfiveH" href="#collapsefive" data-toggle="collapse" data-parent="#accordionH" aria-expanded="false" aria-controls="collapsefive">
            <a class="card-title"><strong>5. Car Insurance</strong> </a>
          </div>
          <div class="collapse" id="collapsefive" role="tabpanel" aria-labelledby="headingfiveH">
            <div class="card-body">
              <a href="carquotation.php">
                <button type="button" class="btn btn-success">Get Quotation Now</button>
              </a>

              <a href="carquotation2.php">
                <button type="button" class="btn btn-success">Get Quotation with Photo(RC/Policy)</button>
              </a>
              
            </div>
          </div>

          <div class="card-header collapsed" role="tab" id="headingsixH" href="#collapsesix" data-toggle="collapse" data-parent="#accordionH" aria-expanded="false" aria-controls="collapsesix">
            <a class="card-title"><strong>6. Bike Insurance</strong> </a>
          </div>
          <div class="collapse" id="collapsesix" role="tabpanel" aria-labelledby="headingsixH">
            <div class="card-body">
              <a href="bikequotation.php">
                <button type="button" class="btn btn-success">Get Quotation Now</button>
              </a>
              
            </div>
          </div>

          <div class="card-header collapsed" role="tab" id="headingsevenH" href="#collapseseven" data-toggle="collapse" data-parent="#accordionH" aria-expanded="false" aria-controls="collapseseven">
            <a class="card-title"><strong>7. PCV - GCV - Commercial Vehicle</strong> </a>
          </div>
          <div class="collapse" id="collapseseven" role="tabpanel" aria-labelledby="headingsevenH">
            <div class="card-body">
              <a href="commercialquotation.php">
                <button type="button" class="btn btn-success">Get Quotation Now</button>
              </a>
              
            </div>
          </div>


        </div>
       </div>  
      </div>
             
             <img style="height: 400px;width: 650px;" src="pics\ins.jpg">


          </div>
          <div ><br><br><br>
            <img style="height: 300px;width: 300px;" src="pics\ins1.jpg">
          </div>
        </div>
        
     </div>

    
<footer class="mainfooter" role="contentinfo">
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
  <!--collapse script start-->
  <script type="text/javascript">
    $( '.closeall' ).click( function( e ) {
  e.preventDefault();
  $( '.accordion .collapse.show' ).collapse( 'hide' );
  return false;
} );
$( '.openall' ).click( function( e ) {
  e.preventDefault();
  $( '.accordion .collapse' ).collapse( 'show' );
  return false;
} );

if ( window.location.hash ) {
  redirect( window.location.hash );
}

$( 'a[href^="#"]' ).on( 'click', function( e ) {
  e.preventDefault();
  var a = document.createElement( 'a' );
    a.href = this.href;
  redirect ( a.hash );
  return false;
} );

function redirect( hash ) {
  // $( hash ).attr( 'aria-expanded', 'true' ).focus();
  // $( hash + '+div.collapse' ).addClass( 'show' ).attr( 'aria-expanded', 'true' );
  $( hash + '+div.collapse' ).collapse( 'show' );

  // using this because of static nav bar space
  $( 'html, body' ).animate( {
    scrollTop: $( hash ).offset().top - 60
  }, 10, function() {
  // Add hash (#) to URL when done scrolling (default click behavior)
    window.location.hash = hash;
  } );
}

document.documentElement.setAttribute("lang", "en");
document.documentElement.removeAttribute("class");

axe.run( function(err, results) {
  console.log( results.violations );
} );
  </script>
<!--collapse script end-->

<!-- slider script start -->
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      $('.toggle').click(function(){
        $('.sidebar-contact').toggleClass('active')
        $('.toggle').toggleClass('active')
      })

    })
  </script>
<!-- slider script end-->
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>