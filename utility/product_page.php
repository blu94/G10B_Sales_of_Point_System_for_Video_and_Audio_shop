<?php
  include("../dataconn/dataconn.php");
  $product_id = $_REQUEST['product_id'];
  $product_sql = "select * from product where product_id = ".$product_id." ";
  $product_exe = mysql_query($product_sql);
  $product_row = mysql_num_rows($product_exe);
  $product_image = "";
  do {
    $product_image = $product_row['Product_Pic'];
    $product_name = $product_row['Product_Name'];
    $product_price = $product_row['Product_Price'];
    $product_rent_price = $product_row['Product_Rent_Price'];
    $product_describe = $product_row['Product_Description'];
    $product_stock = $product_row['Product_Stock'];
  }while($product_row = mysql_fetch_array($product_exe));
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sales of Point System for Video and Audio shop
	</title>
	<link rel="icon" href="images/favicon.png" type="image/x-icon" sizes="16x16">
	<link href="../css/main.css" rel="stylesheet" type="text/css" />
  <link href="../css/product.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="../css/font/elegantlux/elegant_luxmager.css" type="text/css" charset="utf-8" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="../js/main.js"></script>

</head>
<body>
	<div class="cont section group">

		<?php include('../utility/header.php');?>
		<?php include("../utility/navigation.php");?>
    <div class="cont_element col span_2_of_2 ">
      <div id="" class="product_content_div">
				<div class="col span_1_of_5 " style="">
					<?php
						if(isset($_POST['buy_btn'])){
							$buy_url = "../user/buy_product.php";
						}

						$product_out_of_stock_buy = "";
						$product_out_of_stock_rent = "";
						$product_out_of_stock_buy_css = "";
						$product_out_of_stock_rent_css = "";
						$product_out_of_stock_status = "";

						if($product_stock == 0){
							$product_out_of_stock_buy = "disabled='disabled'";
							$product_out_of_stock_rent = "disabled='disabled'";
							$product_out_of_stock_buy_css = "product_disabled";
							$product_out_of_stock_rent_css = "product_disabled";
							$product_out_of_stock_status = "Out Of Stock!";
						}

						else{
							$product_out_of_stock_buy = "";
							$product_out_of_stock_rent = "";
							$product_out_of_stock_buy_css = "";
							$product_out_of_stock_rent_css = "";
							$product_out_of_stock_status = "";
						}

					?>
					<img src="<?php echo $product_image;?>" id="" class="product_picture"/>
          <a href="../visitor/login.php" id="" class="">
            <input type="button" id="" class="product_btn buy_btn <?php echo $product_out_of_stock_buy_css;?>" value="BUY">
          </a>
          <a href="../visitor/login.php" id="" class="">
            <input type="button"  id="" class="product_btn rent_btn <?php echo $product_out_of_stock_buy_css;?>" value="RENT">
          </a>
				</div>
				<div class="col span_4_of_5 product_content_name" style="">
					<?php echo $product_name; ?>
				</div>

				<div class="col span_4_of_5 product_content_price" style="">
					<span id="" class="buy_title">Buy :</span> RM <?php echo $product_price; ?>
					<span id="" class="rent_title"> / Rent :</span> RM <?php echo $product_rent_price; ?>
				</div>
				<div class="col span_4_of_5 product_content_quantity_div" style="">
					<div id="" class="product_content_quantity_function_title">Stock</div>
					<div id="" class="product_content_quantity_function_operation">
						<input type="number" id="product_quantity_value" name="product_quantity_value" value="<?php echo $product_stock;?>" disabled="disabled" class="quantity_value_input"/>
					</div>
					<span id="" class="out_of_stock_status"><?php echo $product_out_of_stock_status;?></span>
				</div>
				<div class="col span_4_of_5 product_content_description" style="">
					<?php echo $product_describe; ?>
				</div>
			</div>
		</div>
		<?php include("../utility/footer.php");?>

	</div>
</body>
</html>
