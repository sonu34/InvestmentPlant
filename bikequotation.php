<!DOCTYPE html>
<html>
<head>
  <title>Bike Quotation</title>
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
                  <form class="form-container" action="bikequotationconn.php" method="post">
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

                  <div class="form-row mb-4">
                  <div class="col">
                    <!-- First name -->
                    <label for="companyname">Two Wheeler company Name:</label>
                      <input type="text" class="form-control" name="companyname" placeholder="Company Name" required>
                  </div>
                  <div class="col">
                    <!-- Last name -->
                    <label for="modelname">Model Name:</label>
                      <input type="text" class="form-control" name="modelname" placeholder="Model Name" required>
                 </div>
                </div>

                <div class="form-row mb-4">
                  <div class="col">
                    <!-- First name -->
                    <label for="fueltype">Fuel Type:</label>
                    <select class="browser-default custom-select" name="fueltype">
                      <option value="petrol">Petrol</option>
                    </select>
                  </div>
                  <div class="col">
                    <!-- Last name -->
                    <label for="bikenumber">Bike Number:</label>
                      <input type="text" class="form-control" name="bikenumber" placeholder="MH01B1234" required>
                 </div>
                </div>


                   <div class="form-group">
                    <label for="insurancetype">Insurance Type:</label>
                    <select class="browser-default custom-select" id="instype" name="insurancetype">
                      <option value="type">------Select Type------</option>
                      <option value="v01">Comprehensive</option>
                      <option value="v02" id="v02">Third Party</option>
                    </select>
                  </div>

                   <div class="form-row mb-4">
                     <div class="col">
                         <!-- First name -->
                         <label for="date-picker-example">Registration Date:</label>
                         <input placeholder="Select date" type="text" id="datepicker2" name="regdate" class="form-control datepicker2" required>
                     </div>
                     <div class="col">
                         <!-- date -->
                         <label for="manufyear">Manufacturing-</label>
                         <div class="form-row md-4">
                           <div class="col">
                             <select class="browser-default custom-select" name="manumonth" required>
                               <option value="m01">--Select Month--</option>
                               <option value="m02">January</option>
                               <option value="m03">February</option>
                               <option value="m04">March</option>
                               <option value="m05">April</option>
                               <option value="m06">May</option>
                               <option value="m07">June</option>
                               <option value="m08">July</option>
                               <option value="m09">August</option>
                               <option value="m10">September</option>
                               <option value="m11">October</option>
                               <option value="m12">November</option>
                               <option value="m13">December</option>
                             </select>
                           </div>
                           <div class="col">
                             <select class="browser-default custom-select 90-20" name="manuyear">
                               <option value="year">--Select Year--</option>
                             </select>
                           </div>
                         </div>

                     </div>
                 </div>

                 <div class="form-row mb-4">
                     <div class="col">
                         <!-- First name -->
                         <label for="date-picker-example">Previous Policy Expiry Date:</label>
                         <input placeholder="Select date" type="text" id="datepicker3" name="expirydate" class="form-control datepicker3" required>
                     </div>
                     <div class="col">
                         <!-- date -->
                         <label for="precompany">Previous Company:</label>
                         <input placeholder="Company Name" type="text" name="precompany" id="" class="form-control" required>

                     </div>
                 </div>


                <div class="form-row mb-4" >
                     <div class="col" id="cpacov">

                      <label for="cpacover" >Include CPA Cover:</label>
                      <select class="browser-default custom-select" id="incdcpa" name="cpacover">
                      <option value="yes01">Yes</option>
                      <option value="no01" id="no01">No</option>
                      </select>
                      <div id="incpa" style="display: none;"><font color="red">*I declear I have valid DL(Driving Licence) and an existing personal accidental cover of Rs. 15 Lacs.</font></div>
                     </div>
                     <div class="col" id="claiminprev">

                         <label for="prevclaim">Claim in previous year:</label>
                         <select class="browser-default custom-select" id="claimprev" name="prevclaim" required>
                          <option value="yes001">Yes</option>
                          <option value="no001" id="no001">No</option>
                         </select>
                     </div>
                 </div>
                 <div class="form-group" id="claimno" style="display: none;">
                   <label for="ncb">NCB(%):</label>
                   <select class="browser-default custom-select" name="ncb">
                     <option value="ncb01">0</option>
                     <option value="ncb020">20</option>
                     <option value="ncb25">25</option>
                     <option value="ncb35">35</option>
                     <option value="ncb45">45</option>
                     <option value="ncb50">50</option>
                   </select>
                 </div>


                  <hr>
                  <input  class="btn btn-success rounded-pill" name="create" type="submit" value="Get Quotetion">
            </form>
                </div>
                <div class="col-sm-6" style="padding : 250px 140px;">
                  <h2>InvestmentPlant.com</h2> 
                </div>
              </div>
              
            </div>
             
            
    
   
    </div>
    <script type="text/javascript">
      $('#instype').on('change', function() {
  //  alert( this.value ); // or $(this).val()
  if(this.value == "v02") {
    $('#claiminprev').hide();
  } else {
    $('#claiminprev').show();
  }
});

      $('#instype').on('change', function() {
  //  alert( this.value ); // or $(this).val()
  if(this.value == "v03") {
    $('#cpacov').hide();
  } else {
    $('#cpacov').show();
  }
});

      $('#claimprev').on('change', function() {
  //  alert( this.value ); // or $(this).val()
  if(this.value == "no001") {
    $('#claimno').show();
  } else{
    $('#claimno').hide();
  }
});

      $('#incdcpa').on('change', function() {
  //  alert( this.value ); // or $(this).val()
  if(this.value == "no01") {
    $('#incpa').show();
  } else{
    $('#incpa').hide();
  }
});
    </script>


   <script type="text/javascript">
    // Data Picker Initialization
    $("#datepicker").datepicker({format: 'yyyy-mm-dd'});

    $("#datepicker2").datepicker({format: 'yyyy-mm-dd'});

    $("#datepicker3").datepicker({format: 'yyyy-mm-dd'});

   </script>


   <script type="text/javascript">
     $(function(){
    var $select = $(".90-20");
    for (i=2005;i<=2020;i++){
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