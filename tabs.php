<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Case</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<style>
   .tabs>li.active>a, .tabs>li.active>a:focus, .tabs>li.active>a:hover{
      border: none;
      border-bottom: 1px solid #ddd;

   }

  .tabs>li.active>a::before {
    content: "\f099"; 
    float: right;
  }
   .tabs {
    border-bottom: none;
}

   .tabs>li{
      float: none;
   }

   .tabs>li>a{
      color: #ddd;
   }
</style>

<div class="container">
  
  <div class="col-sm-5">
     <ul class="nav nav-tabs tabs">
       
       <li><a href="#menu1">Description</a></li>
       <li><a href="#menu2">Additional Information</a></li>
       <li><a href="#menu3">Reviews (0)</a></li>
     </ul>
  </div>
  <div class="col-sm-7">
     <div class="tab-content">
       
       <div id="menu1" class="tab-pane fade">
         <h3>Menu 1</h3>
         <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
       </div>
       <div id="menu2" class="tab-pane fade">
         <h3>Menu 2</h3>
         <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
       </div>
       <div id="menu3" class="tab-pane fade">
         <h3>Menu 3</h3>
         <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
       </div>
     </div>
   </div>  
</div>

<script>
$(document).ready(function(){
    $(".nav-tabs a").click(function(){
        $(this).tab('show');
    });
});
</script>

</body>
</html>

