<?php include("connection.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SAF Dress Shop</title>
    <link href="layout/css/bootstrap.min.css" rel="stylesheet">
    <link href="layout/css/font-awesome.min.css" rel="stylesheet">
    <link href="layout/css/prettyPhoto.css" rel="stylesheet">
    <link href="layout/css/price-range.css" rel="stylesheet">
    <link href="layout/css/animate.css" rel="stylesheet">
	<link href="layout/css/main.css" rel="stylesheet">
	<link href="layout/css/responsive.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/CZGD7638.PNG">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head><!--/head-->
<body>
	<?php include("include/header.php"); ?>
	<section id="slider"><!--slider-->
	<div class="container">
	<div class="row">
	<div class="col-sm-12">
	<div id="slider-carousel" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
<li data-target="#slider-carousel" data-slide-to="0" class=""></li>
<li data-target="#slider-carousel" data-slide-to="1" class=""></li>
<li data-target="#slider-carousel" data-slide-to="2" class="active"></li>
	</ol>
	    <div class="carousel-inner">
		<div class="item">
		<div class="col-sm-6">
<h1><span>SHAF</span>-SHOP</h1>
<h2>Cosmetics</h2>
<p>SHAF Shop offers you only one Brand products in Cosmetics "Oriflame". Like 'Skin Care, Beauty Care, Facial Products & Nail Art'
</p>
<a href="cosmetics.php" class="btn btn-default get">Get it now
</a>
		</div>
		<div class="col-sm-6">
<img src="images/cos1.jpg" class="girl img-responsive" alt="">
		</div></div>

		<div class="item">
		<div class="col-sm-6">
<h1><span>SHAF</span>-SHOP</h1>
<h2>Women’s Clothing</h2>
<p>We bring to your doorsteps a wide range of professional brands, like: Nishat-Linen, MariaB, Gul-Ahmed, Khaadi, Asim-Jofa and many, many more. </p>
<a href="clothes.php" class="btn btn-default get">Get it now
</a>
		</div>
		<div class="col-sm-6">
<img src="images/girl2.jpg" class="girl img-responsive" alt="">
		</div></div>
							
		<div class="item active">
		<div class="col-sm-6">
<h1><span>SHAF</span>-SHOP</h1>
<h2>Women’s Clothing</h2>
<p>Women’s clothing offered by SHAF Shop is ideal for all occasions, seasons and moods, such as: Weddings, Eid, Parties, Casual Gatherings, and anything else you can possibly imagine.</p>
<a href="clothes.php" class="btn btn-default get">Get it now
</a>
		</div>
		<div class="col-sm-6">
<img src="images/Pakistani-girls-dresses1.png" class="girl img-responsive" alt="">
		</div>
		</div>
		</div>
						
<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
<i class="fa fa-angle-left"></i></a>
<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next"><i class="fa fa-angle-right"></i>
		</a>
		</div></div>
		</div></div>
	    </section><!--/slider-->
	<br/><br/>
	<div class="col-sm-12">
		<div class="features_items"><!--features_items-->
<center><h2 class="title text-center">New Items</h2></center>
		<?php 
$cosmetics=mysqli_query($connection,"select product_id, product_name, image, price, c_price from products  where product_type like '%dress%' order by rand() ,time Desc LIMIT 0,12")or die("Query 1 is inncorrect..........");
while(list($product_id,$product_name,$image,$price,$c_price)=mysqli_fetch_array($cosmetics))
{
echo"
<div class='col-sm-3'>
		<div class='product-image-wrapper'>
		<div class='single-products'>
		<div class='productinfo text-center'>
<a href='product_details.php?id=$product_id' class='thumbnail'><img src='images/products/$image' alt='' style='width:250px; height:250px'></a>
<h2>Rs: $price <span><strike><p>Rs: $c_price</p></strike></span></h2>
<p>$product_name</p>
<a href='link_cart.php?id=$product_id' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Add to cart</a>
		</div>
		<img src='images/new.jpg' class='new' alt=''></div>
		</div></div>
";
}
 ?>
        </div><!--features_items-->
					
			<div class="tab-pane fade  in" id="facial">
<?php 
$facial=mysqli_query($connection,"select product_id, product_name, image, price, c_price from products where product_type like '%facial%' order by rand() LIMIT 0,4")or die("Query 3 is inncorrect..........");
while(list($product_id,$product_name,$image,$price,$c_price)=mysqli_fetch_array($facial))
{
echo"<div class='col-sm-3'>
			<div class='product-image-wrapper'>
			<div class='single-products'>
			<div class='productinfo text-center'>
    <a href='product_details.php?id=$product_id' class='thumbnail'>
<img src='images/products/$image' alt='' style='width:200px; height:150px'></a>
<h2>Rs: $price <span><strike><p>Rs: $c_price</p></strike></span></h2>
<p>$product_name</p>
<a href='link_cart.php?id=$product_id' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Add to cart</a>
			</div></div>
			</div></div>";
}
?>
            
		    </div>
			
			
            <?php 
$nailart=mysqli_query($connection,"select product_id, product_name, image, price, c_price from products where product_type like '%nailart%' order by rand() LIMIT 0,4")or die("Query 4 is inncorrect..........");
while(list($product_id,$product_name,$image,$price,$c_price)=mysqli_fetch_array($nailart))
{
echo"<div class='col-sm-3'>
			<div class='product-image-wrapper'>
			<div class='single-products'>
			<div class='productinfo text-center'>
    <a href='product_details.php?id=$product_id' class='thumbnail'>
<img src='images/products/$image' alt='' style='width:200px; height:150px'></a>
<h2>Rs: $price <span><strike><p>Rs: $c_price</p></strike></span></h2>
<p>$product_name</p>
<a href='link_cart.php?id=$product_id' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Add to cart</a>
			</div></div>
			</div></div>";
}
?>
			</div>
			<div class="tab-pane fade" id="facebeauty">
			<?php 
$facebeauty=mysqli_query($connection,"select product_id, product_name, image, price, c_price from products where product_type like '%facebeauty%' order by rand() LIMIT 0,4")or die("Query 5 is inncorrect..........");
while(list($product_id,$product_name,$image,$price,$c_price)=mysqli_fetch_array($facebeauty))
{
echo"<div class='col-sm-3'>
			<div class='product-image-wrapper'>
			<div class='single-products'>
			<div class='productinfo text-center'>
    <a href='product_details.php?id=$product_id' class='thumbnail'>
<img src='images/products/$image' alt='' style='width:200px; height:150px'></a>
<h2>Rs: $price <span><strike><p>Rs: $c_price</p></strike></span></h2>
<p>$product_name</p>
<a href='link_cart.php?id=$product_id' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Add to cart</a>
			</div></div>
			</div></div>";
}
?>
		</div>
        <div class="tab-pane fade" id="skincare">
			<?php 
$skincare=mysqli_query($connection,"select product_id, product_name, image, price, c_price from products where product_type like '%skincare%' order by rand() LIMIT 0,4")or die("Query 6 is inncorrect..........");
while(list($product_id,$product_name,$image,$price,$c_price)=mysqli_fetch_array($skincare))
{
echo"<div class='col-sm-3'>
			<div class='product-image-wrapper'>
			<div class='single-products'>
			<div class='productinfo text-center'>
    <a href='product_details.php?id=$product_id' class='thumbnail'>
<img src='images/products/$image' alt='' style='width:200px; height:150px'></a>
<h2>Rs: $price <span><strike><p>Rs: $c_price</p></strike></span></h2>
<p>$product_name</p>
<a href='link_cart.php?id=$product_id' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Add to cart</a>
			</div></div>
			</div></div>";
}
?>
		</div>
        <div class="tab-pane fade" id="lawn">
			<?php 
$lawn=mysqli_query($connection,"select product_id, product_name, image, price, c_price from products where product_type like '%lawn%' order by rand() LIMIT 0,4")or die("Query 7 is inncorrect..........");
while(list($product_id,$product_name,$image,$price,$c_price)=mysqli_fetch_array($lawn))
{
echo"<div class='col-sm-3'>
			<div class='product-image-wrapper'>
			<div class='single-products'>
			<div class='productinfo text-center'>
    <a href='product_details.php?id=$product_id' class='thumbnail'>
<img src='images/products/$image' alt='' style='width:200px; height:150px'></a>
<h2>Rs: $price <span><strike><p>Rs: $c_price</p></strike></span></h2>
<p>$product_name</p>
<a href='link_cart.php?id=$product_id' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Add to cart</a>
			</div></div>
			</div></div>";
}
?>
		</div>
        <div class="tab-pane fade" id="linen">
			<?php 
$linen=mysqli_query($connection,"select product_id, product_name, image, price, c_price from products where product_type like '%linen%' order by rand() LIMIT 0,4")or die("Query 8 is inncorrect..........");
while(list($product_id,$product_name,$image,$price,$c_price)=mysqli_fetch_array($linen))
{
echo"<div class='col-sm-3'>
			<div class='product-image-wrapper'>
			<div class='single-products'>
			<div class='productinfo text-center'>
    <a href='product_details.php?id=$product_id' class='thumbnail'>
<img src='images/products/$image' alt='' style='width:200px; height:150px'></a>
<h2>Rs: $price <span><strike><p>Rs: $c_price</p></strike></span></h2>
<p>$product_name</p>
<a href='link_cart.php?id=$product_id' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Add to cart</a>
			</div></div>
			</div></div>";
}
?>
		</div>
         <div class="tab-pane fade" id="cotton">
			<?php 
$cotton=mysqli_query($connection,"select product_id, product_name, image, price, c_price from products where product_type like '%cotton%' order by rand() LIMIT 0,4")or die("Query 9 is inncorrect..........");
while(list($product_id,$product_name,$image,$price,$c_price)=mysqli_fetch_array($cotton))
{
echo"<div class='col-sm-3'>
			<div class='product-image-wrapper'>
			<div class='single-products'>
			<div class='productinfo text-center'>
    <a href='product_details.php?id=$product_id' class='thumbnail'>
<img src='images/products/$image' alt='' style='width:200px; height:150px'></a>
<h2>Rs: $price <span><strike><p>Rs: $c_price</p></strike></span></h2>
<p>$product_name</p>
<a href='link_cart.php?id=$product_id' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Add to cart</a>
			</div></div>
			</div></div>";
}
?>
		</div>
        </div>
        
        
	</div></div>				
	
</div>
</section><br>
	
<?php include("include/footer.php"); ?>
    <script src="layout/js/jquery.js"></script>
	<script src="layout/js/bootstrap.min.js"></script>
	<script src="layout/js/jquery.scrollUp.min.js"></script>
	<script src="layout/js/price-range.js"></script>
    <script src="layout/js/jquery.prettyPhoto.js"></script>
    <script src="layout/js/main.js"></script>
<a id="scrollUp" href="#top" style="display: none; position: fixed; z-index: 2147483647;">
<i class="fa fa-angle-up">
</i></a>
</body>
</html>