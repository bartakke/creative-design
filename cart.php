<?php include "header.php" ?>


 <!-- name plate heading with color-->
    <section id="headingContent" class="aboveMargin">
      <div class="container"><!-- Heading Content starts here-->
        <div class="row headingContent">
          <div class="col-sm-12">
            <h1>Cart</h1>
          </div>
          
        </div>
      </div><!-- Heading Content ends here-->
    </section>
<!--end of name plate heading with color-->
  
<section class="container margintop40 marginbottom20" >
	<div class="row">
  		<table class="table table-bordered">
  			<thead class="thead-default">
  			<td class="col-md-1 black thead-default"></td>
		      <td class="col-md-1 black"></td>
		      <td class="col-md-3 black">Product</td>
		      <td class="col-md-2 black">Price</td>
		      <td class="col-md-3 black">Quantity</td>
		      <td class="col-md-2 black">Total</td>
  			</thead>
		  <tbody>
		    <tr>
		      <td class="col-md-1 black">
		      	<a href="#">
		      		<i class="fa fa-times" aria-hidden="true"></i>
		      	</a>
		      </td>
		      <td class="col-md-1 black">
		      	<img src="images/block1.jpg" class="img-responsive"   >
		      </td>
		      <td class="col-md-3 black">
		      	Wooden Laser Cutting Earring 3
		      </td>
		      <td class="col-md-2 black">
		      	₹ 175.00
		      </td>
		      <td class="col-md-3 black">
		      	<div class="quantity ">
						<input type="number" class="form-control productCount" value="1" id="exampleInputName2" placeholder=" ">
					</div>
		      </td>
		      <td class="col-md-2 black">
		      	₹ 175.00
		      </td>
		    </tr>
		    			   
		  </tbody>
		</table>
	</div>
</section>

<section class="container faintgrey marginbottom40" >
	<div class="row ">
		<div class="col-sm-7"></div>
		<div class="col-sm-5 margintop40 " >
			<div class="col-sm-12 marginbottom30 greayBorder">
				<table class="table paddingright20">
					<thead><h3 class="black">Cart Totals</h3></thead>
						<tr>
							<td class="col-md-6 thead-default">Subtotal</td>
							<td class="col-md-6">₹ 175.00</td>
						</tr>
						<tr>	
							<td class="col-md-6 black thead-default">Total</td>
							<td class="col-md-6 black">₹ 175.00</td>

						</tr>	
				</table>
					<div class="paddingbottom20">
						<a href="checkout.php">
							<button type="button" class="btn btn-info text-center ">Proceed to Checkout</button>
						</a>	
					</div>	
			</div>
		</div>
	</div>	
</section>	
  
<?php include "footer.php" ?>
   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   <script src="./js/jquery-2.2.0.min.js" type="text/javascript"></script>
    <!--script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script-->
  <script src="./js/bootstrap.min.js"></script>
  <script src="./slick/slick.js" type="text/javascript" charset="utf-8"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
   
    <script src="js/vegas.min.js"></script>
   <script type="text/javascript">
    $(document).ready(function(){
      
       $(".nav-tabs a").click(function(){
        $(this).tab('show');
    });
        $(".wrapper").vegas({
            animation: 'kenburnsUp',
            transitionDuration: 2000,
            slides: [
                { src: "images/slide-show-1-low.jpg" },
                { src: "images/slide-show-3-low.jpg" },
                { src: "images/slide-show-5-low.jpg" }
            ]
            
        });

       $(".dropdown").hover(            
          function() {
              $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideDown("400");
              $(this).toggleClass('open');        
          },
          function() {
              $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideUp("400");
              $(this).toggleClass('open');       
          }
      );
        $(".center").slick({
      slidesToShow: 5,
      slidesToScroll: 1,
      autoplay: false,
      autoplaySpeed: 2000
      });

        
     $(window).scroll(function () {
            if ($(this).scrollTop() > 50) {
                $('.back-to-top').fadeIn();
            } else {
                $('.back-to-top').fadeOut();
            }
        });
        // scroll body to 0px on click
        $('.back-to-top').click(function () {
            $('.back-to-top').tooltip('hide');
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
        
        $('#back-to-top').tooltip('show');

        // $('#myModal2').appendTo("body");


      $('.collapse').on('shown.bs.collapse', function (e) {
  $('.collapse').not(this).removeClass('in');
});

$('[data-toggle=collapse]').click(function (e) {
  $('[data-toggle=collapse]').parent('li').removeClass('active');
  $(this).parent('li').toggleClass('active');
});
});
</script>