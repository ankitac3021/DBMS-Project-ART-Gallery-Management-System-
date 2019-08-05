<?php
	$page="index";
	$title="Home";
	require_once('header.php');
?>		
		<div class="container-fluid">
		  <div class="row slider">
			<div class="col-lg-14">			
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
				  <ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
				  </ol>
				  <div class="carousel-inner" role="listbox">
					<div class="item active">
					  <img src="images/pp.jpg" alt="Chania">
					</div>
					<div class="item">
					  <img src="images/imag1.jpg" alt="Chania">
					</div>
					<div class="item">
					  <img src="images/hhh.jpg" alt="Flower">
					</div>
				  </div>
				  
				  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				  </a>
				  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				  </a>
				</div>
			</div>
		  </div>
		
		  <div class="row home_info">
			<div class="col-md-9 recent_product">
                <div class="panel panel-default">
				    <div class="panel-heading"> <font color="sky blue" >Recent Products </font></div>
				        <div class="panel-body">
                            <div class="container recent_product_container">
                              <div class="row recent_img">
                                <div class="col-md-4"><img src="one.jpg" class="img-thumbnail home_img" alt="Cinque Terre" height="100px" width="100px"></div>
                                <div class="col-md-4"><img src="face.jpg" class="img-thumbnail home_img" alt="Cinque Terre"></div>
                                <div class="col-md-4"><img src="islamic.jpg" class="img-thumbnail home_img" alt="Cinque Terre"></div>
                              </div>
                                <div class="row recent_img_desc">
                                    <div class="col-md-4"> <font color="Blue" > <B> Modern Art </B> </font> </div>
                                    <div class="col-md-4"> <font color="Blue" > <B> The Face </B> </font> </div>
                                    <div class="col-md-4"> <font color="Blue" > <B> Islamic Art </B> </font> </div>
									
                                </div>
                                <!--<div class="row recent_img_desc">
                                    <div class="col-md-4"><button type="button" class="btn-add-cart"> <font color="sky blue" ><B> Add Cart </B> </font> </button></div>
                                    <div class="col-md-4"><button type="button" class="btn-add-cart"> <font color="sky blue" > <B> Add Cart </B> </font> </button></div>
                                    <div class="col-md-4"><button type="button" class="btn-add-cart"> <font color="sky blue" > <B> Add Cart </B> </font> </button></div>
                                </div>-->
                            </div>
                        </div>
                </div>
			</div>
			<div class="col-md-3 my_cart">
				<h3><font color="blue" > <B> &nbsp &nbsp &nbsp Hello Sir/Madam </h3>
				<div class="cart_items" padding="2">
				<ol>
				 <img src="anki.png" alt="Taj Mahal" class="my_cart_items"> <span class="my_cart_items_title"><br> &nbsp Welcome to the <br> &nbsp ART GAllery <br> &nbsp Happy to see you :)</span>  <span ></span>
               </ol>
					<!--<ol>
                        <li> <img src="one.jpg" alt="Taj Mahal" class="my_cart_items"> <span class="my_cart_items_title">The Face</span> <span class="my_cart_items_price">Rs. 10000 </span></li>
						<li> <img src="face.jpg" alt="Taj Mahal" class="my_cart_items"> <span class="my_cart_items_title">The Face</span> <span class="my_cart_items_price">Rs. 10000</span></li>
						<li> <img src="islamic.jpg" alt="Taj Mahal" class="my_cart_items"> <span class="my_cart_items_title">The Face</span> <span class="my_cart_items_price">Rs. 10000</span></li>
                    </ol>-->
				</div>
			</div>	
		  </div>
<?php

	require('footer.php');
?>	
