<!DOCTYPE html>
<html>
<head>
  <title>Mobile Quotation</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">  
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
  <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">

  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

  <link href="https://fonts.googleapis.com/css?family=Abril+Fatface&display=swap" rel="stylesheet">

<style type="text/css">

html, body {
  height: 100%;
  margin: 0;
  padding: 0;
}

.box {
  border:0px solid #fff;
  padding: 30px 35px;
  margin-top: 25px;
  margin-bottom: 25px;
  -webkit-box-shadow: -1px 3px 22px -1px rgba(0,0,0,0.75);
-moz-box-shadow: -1px 3px 22px -1px rgba(0,0,0,0.75);
box-shadow: -1px 3px 22px -1px rgba(0,0,0,0.75); 

}


</style>

</head>
<body>
    <div >

            <div class="container box">
              <div class="row">
                <div class="col-sm-6">
                  <form class="form-container" action="index.php" method="post">
                <br><br>
            <h3>Get Quotation Now</h3>
                 <hr>
                 <div class="form-row mb-4">
                  <div class="col">
                    <!-- First name -->
                    <label for="fname">First Name:</label>
                      <input type="text" class="form-control" name="fname" placeholder="First Name..." required>
                  </div>
                  <div class="col">
                    <!-- Last name -->
                    <label for="lname">Last Name:</label>
                      <input type="text" class="form-control" name="lname" placeholder="Last Name..." required>
                 </div>
                </div>

                 
                  
                  <div class="form-group">

                    <label for="phonenumber" >Mobile No:</label>
                    <input type="text" class="form-control" name="phonenumber" placeholder="9999999999" required>
                  </div>

                  <div class="form-group">
                    <label for="email" >Email:</label>
                    <input type="text" class="form-control" name="email" placeholder="example@gmail.com" required>
                  </div>


                   <div class="form-group">

                    <select class="browser-default custom-select">
                      <option value="type">--Select Type--</option>
                      <option value="v01">Comprehensive</option>
                      <option value="v02">Third Party</option>
                      <option value="v03">Own Damage</option>
                    </select>
                  </div>

                   <div class="form-row mb-4">
                     <div class="col">
                         <!-- First name -->
                         <label for="date-picker-example">Registration Date:</label>
                         <input placeholder="Select date" type="text" id="datepicker2" class="form-control datepicker2" required>
                     </div>
                     <div class="col">
                         <!-- date -->
                         <div class="form-row mb-4">
                           <div class="col">
                             <select class="browser-default custom-select">
                               <option value="m01">--Select Month--</option>
                             </select>
                           </div>
                           <div class="col">
                             <section class="browser-default custom-select 1990-2020">
                               <option>--Select Year--</option>
                             </section>
                           </div>
                         </div>

                     </div>
                 </div>

                 <div class="form-row mb-4">
                     <div class="col">
                         <!-- First name -->
                         <label for="date-picker-example">Previous Policy Expiry Date:</label>
                         <input placeholder="Select date" type="text" id="datepicker3" class="form-control datepicker3" required>
                     </div>
                     <div class="col">
                         <!-- date -->
                         <label for="date-picker-example">Returning to India on:</label>
                         <input placeholder="Select date" type="text" id="datepicker3" class="form-control datepicker3" required>

                     </div>
                 </div>


                <div class="form-row mb-4" >
                     <div class="col">

                      <label for="diesesse" >Do you have Pre-Existing Disese?:</label>
                      <select class="browser-default custom-select">
                      <option value="no">No</option>
                      <option value="yes">Yes</option>
                      </select>
                     </div>
                     <div class="col">

                         <label for="resident">All Traveler must resident and travelling from India:</label>
                         <select class="browser-default custom-select">
                          <option value="yes">Yes</option>
                         </select>
                     </div>
                 </div>


                  <hr>
                  <input  class="btn btn-success rounded-pill" name="create" type="submit" value="Submit Form">
            </form>
                </div>
                <div class="col-sm-6" style="padding : 250px 140px;">
                  <h2>InvestmentPlant.com</h2> 
                </div>
              </div>
              
            </div>
             
            
    
   
    </div>
    <script type="text/javascript">
      $('#newmember').on('change', function() {
  //  alert( this.value ); // or $(this).val()
  if(this.value == "spouse") {
    $('#hspouse').show();
  } else if(this.value == "son"){
    $('#hson').show();
  }else if(this.value == "daughter"){
    $('#hdaughter').show();
  }else if(this.value == "son2"){
    $('#hson2').show();
  }else if(this.value == "daughter2"){
    $('#hdaughter2').show();
  }else if(this.value == "mother"){
    $('#hmother').show();
  }else if(this.value == "father"){
    $('#hfather').show();
  }else if(this.value == "motherinlaw"){
    $('#hmotherinlaw').show();
  }else if(this.value == "fatherinlaw"){
    $('#hfatherinlaw').show();
  }else if(this.value == "grandmother"){
    $('#hgrandmother').show();
  }else if(this.value == "grandfather"){
    $('#hgrandfather').show();
  }
});
    </script>


   <script type="text/javascript">
    // Data Picker Initialization
    $('#datepicker').datepicker({
            uiLibrary: 'bootstrap4'
        });

    $('#datepicker2').datepicker({
            uiLibrary: 'bootstrap4'
        });

    $('#datepicker3').datepicker({
            uiLibrary: 'bootstrap4'
        });
   </script>


   <script type="text/javascript">
     $(function(){
    var $select = $(".18-100");
    for (i=18;i<=100;i++){
        $select.append($('<option></option>').val(i).html(i))
    }
});

     $(function(){
    var $select = $(".0-100");
    for (i=0;i<=100;i++){
        $select.append($('<option></option>').val(i).html(i))
    }
});
   </script>

   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
     <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
</body>
</html>