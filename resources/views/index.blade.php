
<!--   <link rel="stylesheet" href="{{asset('./css/style.css')}}"> 
  <link rel="stylesheet" href="{{asset('./css/bootstap.min.css')}}">
  <link rel="stylesheet" href="{{asset('./js/jquery.min.js') }}">
  <link rel="stylesheet" href="{{asset('./js/bootstap.min.js')}}"> -->
  <!-- My links -->

<!-- Scripts -->




   <div class="container-fluid" id="slider"><!-- container Begin -->
    {{-- ================================================================= --}}

     @include('partials.header')


    {{-- ===================================================================== --}}

       

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<div class="container-fluid">
    <div class="carousel slide" data-ride="carousel" id="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide to="0" class="active"></li>
            <li data-target="#carousel" data-slide to="1"></li>
            <li data-target="#carousel" data-slide to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="item active">
                <img src="{{asset('./images/1.jpg')}}">
            </div>
            <div class="item">
                <img src="{{asset('./images/2.jpg')}}">
            </div>
            <div class="item">
                <img src="{{asset('./images/3.jpg')}}">
            </div>
        </div>
        <a class="carousel-control left" href="#carousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="carousel-control right" href="#carousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>
</div>













       
   </div><!-- container Finish -->
   
   <div id="advantages"><!-- #advantages Begin -->
       
       <div class="container"><!-- container Begin -->
           
           <div class="same-height-row"><!-- same-height-row Begin -->
               
               <div class="col-sm-4"><!-- col-sm-4 Begin -->
                   
                   <div class="box same-height"><!-- box same-height Begin -->
                       
                       <div class="icon"><!-- icon Begin -->
                           
                           <i class="fa fa-heart"></i>
                           
                       </div><!-- icon Finish -->
                       
                       <h3><a href="#">Best Offer</a></h3>
                       
                       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                       
                   </div><!-- box same-height Finish -->
                   
               </div><!-- col-sm-4 Finish -->
               
               <div class="col-sm-4"><!-- col-sm-4 Begin -->
                   
                   <div class="box same-height"><!-- box same-height Begin -->
                       
                       <div class="icon"><!-- icon Begin -->
                           
                           <i class="fa fa-tag"></i>
                           
                       </div><!-- icon Finish -->
                       
                       <h3><a href="#">Best Prices</a></h3>
                       
                       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                       
                   </div><!-- box same-height Finish -->
                   
               </div><!-- col-sm-4 Finish -->
               
               <div class="col-sm-4"><!-- col-sm-4 Begin -->
                   
                   <div class="box same-height"><!-- box same-height Begin -->
                       
                       <div class="icon"><!-- icon Begin -->
                           
                           <i class="fa fa-thumbs-up"></i>
                           
                       </div><!-- icon Finish -->
                       
                       <h3><a href="#">100% Original</a></h3>
                       
                       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                       
                   </div><!-- box same-height Finish -->
                   
               </div><!-- col-sm-4 Finish -->
               
           </div><!-- same-height-row Finish -->
           
       </div><!-- container Finish -->
       
   </div><!-- #advantages Finish -->
   
   <div id="hot"><!-- #hot Begin -->
       
       <div class="box"><!-- box Begin -->
           
           <div class="container"><!-- container Begin -->
               
               <div class="col-md-12"><!-- col-md-12 Begin -->
                   
                   <h2>
                       Our Latest Jwellery
                   </h2>
                   
               </div><!-- col-md-12 Finish -->
               
           </div><!-- container Finish -->
           
       </div><!-- box Finish -->
       
   </div><!-- #hot Finish -->
   
   <div id="content" class="container"><!-- container Begin -->
       
       <div class="row"><!-- row Begin -->
          
        
           
       </div><!-- row Finish -->
       
   </div><!-- container Finish -->
    
    @include('partials.footer');
    
  
    
</body>
</html>