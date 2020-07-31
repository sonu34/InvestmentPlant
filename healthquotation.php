<!DOCTYPE html>
<html>
<head>
  <title>Health Quotation</title>
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
                  <form class="form-container" action="healthquotationconn.php" method="post">
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

                 <div class="form-row mb-4">
                     <div class="col">
                         <!-- First name -->
                      <label for="gender" >Gender:</label>
                      <select class="browser-default custom-select" name="gender" required>
                      <option value="Gender">Gender</option>
                      <option value="Male">Male</option>
                      <option value="Femele">Femele</option>
                      </select>
                     </div>
                     <div class="col">
                         <!-- date -->
                         <label for="date-picker-example">DateOfBirth:</label>
                         <input placeholder="Select date" type="text" id="datepicker" name="dob" class="form-control datepicker" required>
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
                  <div class="row">
                    

                  
                  <div class="form-group col-sm-6">
                    <i class="fas fa-home"></i>                    <label for="city" >City:</label>
                    <input type="text" class="form-control" name="city" placeholder="Delhi" required>
                  </div>
                  <div class="form-group col-sm-6">
                    <i class="fas fa-angle-double-right"></i> 
                    <label class="mdb-main-label" >State:</label>
                    <select class="browser-default custom-select" name="state" required>
                      <option value="">------------Select State------------</option>
                      <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                      <option value="Andhra Pradesh">Andhra Pradesh</option>
                      <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                      <option value="Assam">Assam</option>
                      <option value="Bihar">Bihar</option>
                      <option value="Chandigarh">Chandigarh</option>
                      <option value="Chhattisgarh">Chhattisgarh</option>
                      <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
                      <option value="Daman and Diu">Daman and Diu</option>
                      <option value="Delhi">Delhi</option>
                      <option value="Goa">Goa</option>
                      <option value="Gujarat">Gujarat</option>
                      <option value="Haryana">Haryana</option>
                      <option value="Himachal Pradesh">Himachal Pradesh</option>
                      <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                      <option value="Jharkhand">Jharkhand</option>
                      <option value="Karnataka">Karnataka</option>
                      <option value="Kerala">Kerala</option>
                      <option value="Lakshadweep">Lakshadweep</option>
                      <option value="Madhya Pradesh">Madhya Pradesh</option>
                      <option value="Maharashtra">Maharashtra</option>
                      <option value="Manipur">Manipur</option>
                      <option value="Meghalaya">Meghalaya</option>
                      <option value="Mizoram">Mizoram</option>
                      <option value="Nagaland">Nagaland</option>
                      <option value="Orissa">Orissa</option>
                      <option value="Pondicherry">Pondicherry</option>
                      <option value="Punjab">Punjab</option>
                      <option value="Rajasthan">Rajasthan</option>
                      <option value="Sikkim">Sikkim</option>
                      <option value="Tamil Nadu">Tamil Nadu</option>
                      <option value="Tripura">Tripura</option>
                      <option value="Uttaranchal">Uttaranchal</option>
                      <option value="Uttar Pradesh">Uttar Pradesh</option>
                      <option value="West Bengal">West Bengal</option>
                    </select>
                    
                   </div>
                   </div>

                   <div class="form-row mb-4">
                     <div class="col">
                         <!-- First name -->
                      <label for="pincode" >PIN Code:</label>
                      <input type="text" class="form-control" name="pincode" placeholder="Pin Code" required>
                     </div>
                     <div class="col">
                         <!-- date -->

                     </div>
                 </div>
                 <div class="form-group">
                    <label for="addnewmember" >Add New Member:</label>
                    <select class="browser-default custom-select" id="newmember" name="newmember">
                      <option value="newmem">-------Add New Member-------</option>
                      <option value="spouse" id="spouse">Spouse</option>
                      <option value="son" id="son">Son</option>
                      <option value="daughter" id="daughter">Daughter</option>
                      <option value="son2" id="son2">Son</option>
                      <option value="daughter2" id="daughter2">Daughter</option>
                      <option value="mother" id="mother">Mother</option>
                      <option value="father" id="father">Father</option>
                      <option value="motherinlaw" id="motherinlaw">Mother In Law</option>
                      <option value="fatherinlaw" id="fatherinlaw">Father In Law</option>
                      <option value="grandmother" id="grandmother">Grand Mother</option>
                      <option value="grandfather" id="grandfather">Grand Father</option>
                    </select>
                 </div>

                 <div class="form-row mb-4" id="hspouse" style="display: none;">
                  <div class="col">
                    
                      <input type="text" class="form-control" value="Spouse" name="spouse" placeholder="Spouse">
                  </div>
                  <div class="col">
                     <select class="browser-default custom-select 18-100" name="spouseage">
                       <option value="age">Age in Years</option>
                      

                     </select>
                 </div>
                </div>

                <div class="form-row mb-4" id="hson" style="display: none;">
                  <div class="col">
                    
                      <input type="text" class="form-control" value="Son" name="son" placeholder="Son">
                  </div>
                  <div class="col">
                     <select class="browser-default custom-select 0-100" name="sonage">
                       <option value="age">Age in Years</option>

                     </select>
                 </div>
                </div>

                <div class="form-row mb-4" id="hdaughter" style="display: none;">
                  <div class="col">
                    
                      <input type="text" class="form-control" value="Daughter" name="daughter" placeholder="Daughter">
                  </div>
                  <div class="col">
                     <select class="browser-default custom-select 0-100" name="daughterage">
                       <option value="age">Age in Years</option>

                     </select>
                 </div>
                </div>

                <div class="form-row mb-4" id="hson2" style="display: none;">
                  <div class="col">
                    
                      <input type="text" class="form-control" value="Son" name="son2" placeholder="Son2">
                  </div>
                  <div class="col">
                     <select class="browser-default custom-select 0-100" name="son2age">
                       <option value="age">Age in Years</option>

                     </select>
                 </div>
                </div>

                <div class="form-row mb-4" id="hdaughter2" style="display: none;">
                  <div class="col">
                    
                      <input type="text" class="form-control" value="Daughter" name="daughter2" placeholder="Daughter2">
                  </div>
                  <div class="col">
                     <select class="browser-default custom-select 0-100" name="daughter2age">
                       <option value="age">Age in Years</option>

                     </select>
                 </div>
                </div>

                <div class="form-row mb-4" id="hmother" style="display: none;">
                  <div class="col">
                    
                      <input type="text" class="form-control" value="Mother" name="mother" placeholder="Mother">
                  </div>
                  <div class="col">
                     <select class="browser-default custom-select 18-100" name="motherage">
                       <option value="age">Age in Years</option>

                     </select>
                 </div>
                </div>

                <div class="form-row mb-4" id="hfather" style="display: none;">
                  <div class="col">
                    
                      <input type="text" class="form-control" value="Father" name="father" placeholder="Father">
                  </div>
                  <div class="col">
                     <select class="browser-default custom-select 18-100" name="fatherage">
                       <option value="age">Age in Years</option>
                       
                     </select>
                 </div>
                </div>

                <div class="form-row mb-4" id="hmotherinlaw" style="display: none;">
                  <div class="col">
                    
                      <input type="text" class="form-control" value="Mother In Law" name="motherinlaw" placeholder="Mother In Law">
                  </div>
                  <div class="col">
                     <select class="browser-default custom-select 18-100" name="motherinlawage">
                       <option value="age">Age in Years</option>
                     </select>
                 </div>
                </div>

                <div class="form-row mb-4" id="hfatherinlaw" style="display: none;">
                  <div class="col">
                    
                      <input type="text" class="form-control" value="Father In Law" name="fatherinlaw" placeholder="Father In Law">
                  </div>
                  <div class="col">
                     <select class="browser-default custom-select 18-100" name="fatherinlawage">
                       <option value="age">Age in Years</option>

                     </select>
                 </div>
                </div>

                <div class="form-row mb-4" id="hgrandmother" style="display: none;">
                  <div class="col">
                    
                      <input type="text" class="form-control" value="Grand Mother" name="grandmother" placeholder="Grand Mother">
                  </div>
                  <div class="col">
                     <select class="browser-default custom-select 18-100" name="grandmotherage">
                       <option value="age">Age in Years</option>
                       
                     </select>
                 </div>
                </div>

                <div class="form-row mb-4" id="hgrandfather" style="display: none;">
                  <div class="col">
                    
                      <input type="text" class="form-control" value="Grand Father" name="grandfather" placeholder="Grand Father">
                  </div>
                  <div class="col">
                     <select class="browser-default custom-select 18-100" name="grandfatherage">
                       <option value="age">Age in Years</option>

                     </select>
                 </div>
                </div>


                  <hr>
                  <input  class="btn btn-success rounded-pill" name="create" type="submit" value="Get Quotation">
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
    $("#datepicker").datepicker({format: 'yyyy-mm-dd'});

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