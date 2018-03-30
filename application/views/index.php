<!DOCTYPE html>
<html lang="en">
<head>
  <title>e-HealthCare : Welcome</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <script> 
   $(document).ready(function(){
    $("#flip").click(function(){
        $("#panel").slideToggle("slow");
    });
    });
</script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 50px;
      background-color: #c9dbe6;
      height: 150%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #337ab7;
      color: white;
      padding: 15px;
    }
    
    /*for the left side drop down*/

    #panel, #flip {
    padding: 15px;
    text-align: center;
    background-color: #337ab7;
    border: solid 1px #fff;
}

#panel {
    padding: 50px;
    display: none;
}
    /* On small screens, set he7ight to 'auto' for sidenav and grid */
    @media screen and (max-width: 150px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>

    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="<?php echo base_url();?>about">About</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo site_url('login_page'); ?>"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="<?php echo base_url(); ?>/healthSchemes">Health Schemes</a></li>
        <li class="active"><a href="#">Health Programmes</a></li>
        <li class="active"><a href="<?php echo site_url('status'); ?>">Track Application Status</a></li>  </ul>   

<div class="container">
  <form>
    <div class="form-group">
      
    </div>
  </form>
</div>

<div class="container">
  <form>
    <div class="form-group">
      
    </div>
  </form>
</div>

<div class="container">
  <form>
    <div class="form-group">
      
    </div>
  </form>
</div>

<div class="container">
  <form>
    <div class="form-group">
      
    </div>
  </form>
</div>

<div class="container">
  <form>
    <div class="form-group">
      
    </div>
  </form>
</div>


<div class="container-fluid text-center">
            <ul class="nav nav-pills nav-stacked">
            <li class="active"><a href="#">Whats New</a></li></ul>

<marquee behavior="scroll" direction="up" scrollamount="2" onmouseover="this.stop()" onmouseout="this.start()" height="144.16" width="144.16">
  <p align="justify"> 


The government of punjab has launched the programme for the welfare of the people.


  </p>
                   
</div>
                      </marquee>
      </div>          
</ul>
</div>

 
    <div class="col-sm-8 text-left" style="background-color:white">


       <h1 class="text-center">Government of Punjab</h1>
  <h2 class="text-center text-info">Department of e-healthcare</h2>


  <img src="logo1.jpg" class="img-responsive img-rounded  center-block"  width="" height=""> 

      <hr>
    </div>
    <div class="col-sm-2 sidenav">
      
<ul class="nav nav-pills nav-stacked">
    <li class="active"><a href="#">Achievements</a></li>      
     

<marquee behavior="scroll" direction="up" scrollamount="2" onmouseover="this.stop()" onmouseout="this.start()" height="144.16" width="144.16">
                    
                    <p align="justify"> The Governement of Punjab has successfully launched various schemes in order to improve the life span of the people.</p>
                    <p align="justify"> The total number of hospitals being empanelled are 112123.</p>



</div>
                      </marquee>
    </div>
  </div>
</ul>
</div>
</div>
<script id="gs-sdk" src='//www.buildquickbots.com/botwidget/v3/demo/static/js/sdk.js?v=3' key="9f402e66-c215-486f-943c-bf9b8abd2185" ></script>

<footer class="container-fluid text-center">
  <p> </p>
</footer>

</body>
</html>
