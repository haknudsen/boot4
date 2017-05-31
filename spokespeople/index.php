<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Our Spokespeople</title>
<link href="../dist/css/bootstrap.css" rel="stylesheet">
</head>
<body>
<div class="jumbotron-fluid">
  <div class="row">
    <div class="col-md-6 push-3 text-center">
      <h1><span class="white thin">OUR</span> <strong>SPOKESPEOPLE</strong></h1>
      <h2>We have a wide range of Video <span class="orange">Spokespeople</span> to choose from</h2>
      <div class="section-header">
        <h2 class="sub-heading2"> No matter what term you wish to use – <br>
          <span class="h3">Video Spokesperson</span>, <span class="h3">Virtual Spokesperson</span>, <span class="h3">Website Spokesperson</span>, <span class="h3">Web Spokesperson</span>, <br>
          <span class="h3"><a href="../Website_Spokesperson/">Spokesmodel</a></span>, <span class="h3"><a href="../Website_Spokesperson/">Walk On Actor</a></span>, <span class="h3"><a href="../Website_Spokesperson/">Virtual Actor</a></span>, <span class="h3"><a href="../Website_Spokesperson/">Person on Website</a></span>, <span class="h3"><a href="../Website_Spokesperson/">Online Spokesperson</a></span> <br>
          We have the <span class="white"><strong>BEST</strong></span> in the business. </h2>
        <br/>
      </div>
    </div>
  </div>
  <hr>
</div>
<div class="container">
  <div class="container">
    <div class="row">
      <section class="col-12">
        <h2>Services</h2>
        <h2>Pest Control</h2>
        <div> We offer the latest advances in safe and effective prevention and treatment of fleas, ticks, worms, heart worm, and other parasites. </div>
        <div class="card">
          <div class="card-header">
            <h5><a href="#women">Women Spokespeople</a></h5>
          </div>
          <!-- card header -->
          
          <div id="women">
            <div class="card-block">
              <p>Our therapeutic women treatments help battle fleas, allergic dermatitis, and other challenging skin conditions.</p>
            </div>
          </div>
          <!-- collapse --> 
          
        </div>
        <!-- card -->
        
        <div class="card">
          <div class="card-header" id="maleheading">
            <h5 class="mb-0"><a href="#male">Male Spokespeople</a></h5>
          </div>
          <!-- card header -->
          
          <div id="male">
            <div class="card-block">
              <p>Wellness and senior exams, ultrasound, x-ray, and dental cleanings are just a few of our general health services.</p>
            </div>
          </div>
          <!-- card collapse --> 
          
        </div>
        <!-- card --> 
        
      </section>
    </div>
    <!-- row --> 
  </div>
  <!-- content container --> 
</div>
<hr>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="../dist/js/jquery-1.11.3.min.js"></script> 
<script src="../dist/js/tether.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="../dist/js/bootstrap.js"></script> 
<script>
$(document).ready(function(){
    $.ajax({
        dataType: "json",
        url: "http://www.websitetalkingheads.com/spokespeople/femaleactors.json",
        error:function(err){
            console.log('err');
            console.log(err);
        },
        success: function(spokespeople) {
            console.log(spokespeople);
        }
}); 
}); 
</script>
</body>
</html>
