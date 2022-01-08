<?php
include("db.php");
include("functions/functions.php");
?> 
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta charset="viewport" content="width-device-width , initial-scale-1">
	<title>Insert product</title>

	<style>
		*{margin: 0;padding: 0}
		.insertcontainer{background: #d8d9d4; width: 600px;  margin: 0 auto; margin-top: 50px;padding: 10px; border-radius: 5px; }
		.insertcontainer h1{text-align: center; margin-bottom: 10px;}
		.div1{display: inline-flex;margin: 5px; margin-left: 30px;}
		.div1 input{height: 30px;width: 400px; border-radius: 2px;box-shadow: none;}
		.div1 label{padding-top: 5px; margin-right: 20px;font-size: 20px}
		.div1 select{width: 350px;height: 30px; padding-left: 10px;}
		#imgfile{margin-top: 5px;}
		#submit_btn{width: 550px; height: 35px; background-color: #117ff5}

	</style>
</head>
<body>

	<div class="insertcontainer">
		<form action="" method="post" enctype="multipart/form-data">	
			<h1>Insert Product</h1>
			<div class="div1">
			<label for="">Product Title</label>
			<input type="text" name="product_title" required="">
			</div>
			<div class="div1">
				<label for="">Product Catagory</label>
				<select name="product_cat" id="p_cat_id" class="div1sellect">
					<option value="">Select</option>
						<?php
							$get_p_cat= "select * from  product_categories"; 
							$run_p_cats=mysqli_query($connn,$get_p_cat);
							while ($row_p_cats=mysqli_fetch_array($run_p_cats)) {
								$p_cat_id=$row_p_cats['p_cat_id'];
								$p_cat_title=$row_p_cats['p_cat_title'];
								echo "
								<option value = '$p_cat_id'>$p_cat_title</option>
								";

								echo $p_cat_title;

							}

						?>
				</select>
			</div>
			<div class="div1">
				<label for="">Catagory</label>
				<select name="cat" id="" class="div1sellect">
					<option value="">Select</option>
					<?php
						$get_cat= "select * from  categories"; 
						$run_cats=mysqli_query($connn,$get_cat);
						while ($row_cats=mysqli_fetch_array($run_cats)) {
							$cat_id=$row_cats['cat_id'];
							$cat_title=$row_cats['cat_title'];
							echo "
							<option value = '$cat_id' >$cat_title</option>
							";
						}
						
					?>
				</select>
			</div>
			
			<div class="div1">
				<label for="">Product Image 1</label>
				<input type="file" id="imgfile" name="product_img1" required="">
			</div>
			<div class="div1">
				<label for="">Product Image 2</label>
				<input type="file" id="imgfile" name="product_img2" required="">
			</div>
			<div class="div1">
				<label for="">Product Image 3</label>
				<input type="file" id="imgfile" name="product_img3" required="">
			</div>
			<div class="div1">
				<label for="">Product Image 4</label>
				<input type="file" id="imgfile" name="product_img4">
			</div>
			<div class="div1">
				<label for="">Product Image 5</label>
				<input type="file" id="imgfile" name="product_img5">
			</div>
			<div class="div1">
				<label for="">Product Image 6</label>
				<input type="file" id="imgfile" name="product_img6">
			</div>
			<div class="div1">
				<label for="">Product Color1</label>
				<input type="text" name="product_color1" required="">
			</div>
			<div class="div1">
				<label for="">Product Color2</label>
				<input type="text" name="product_color2" >
			</div>
			<div class="div1">
				<label for="">Product Color3</label>
				<input type="text" name="product_color3" >
			</div>
			<div class="div1">
				<label for="">Product Price</label>
				<input type="text" name="product_price" required="">
			</div>
			<div class="div1">
				<label for="">Product Keywords</label>
				<input type="text" name="product_keywords" style="width: 360px;"required="">
			</div>
			<div class="div1">
				<label for="">Product Desec</label>
				<textarea name="product_desc" id="" cols="40" rows="16"></textarea>
			</div>
			<div class="div1">
				<input id="submit_btn" type="submit" name="submit2" value="Insert Product">
			</div>
		</form>		
	</div>



<script src="tinymce/js/tinymce/tinymce.min.js"></script>
<script>tinymce.init({selector:'textarea'});</script>	
</body>
</html>

<?php
if(isset($_POST['submit2'])) {
	$product_title=$_POST['product_title'];
	$product_cat=$_POST['product_cat'];
	$cat=$_POST['cat'];
	$product_price=$_POST['product_price'];
	$product_keywords=$_POST['product_keywords'];
	$product_desc=$_POST['product_desc'];
	$product_color1=$_POST['product_color1'];
	$product_color2=$_POST['product_color2'];
	$product_color3=$_POST['product_color3'];

	$product_img1 = $_FILES["product_img1"]["name"];
	$product_img2 = $_FILES["product_img2"]["name"];
	$product_img3 = $_FILES["product_img3"]["name"];
	$product_img4 = $_FILES["product_img4"]["name"];
	$product_img5 = $_FILES["product_img5"]["name"];
	$product_img6 = $_FILES["product_img6"]["name"];

    $temp_name1 = $_FILES['product_img1']['tmp_name'];
    $temp_name2 = $_FILES['product_img2']['tmp_name'];
    $temp_name3 = $_FILES['product_img3']['tmp_name'];
    $temp_name4 = $_FILES['product_img4']['tmp_name'];
    $temp_name5 = $_FILES['product_img5']['tmp_name'];
    $temp_name6 = $_FILES['product_img6']['tmp_name'];

   move_uploaded_file($temp_name1, "products/$product_img1");
	move_uploaded_file($temp_name2, "products/$product_img2");
	move_uploaded_file($temp_name3, "products/$product_img3");
	move_uploaded_file($temp_name4, "products/$product_img4");
	move_uploaded_file($temp_name5, "products/$product_img5");
	move_uploaded_file($temp_name6, "products/$product_img6");

	
	
	$insert_product="insert into  products( p_cat_id, cat_id, date, product_title,product_color1,product_color2,product_color3, product_img1, product_img2, product_img3, product_img4, product_img5, product_img6, product_price, product_keywords, product_desc)
	 values('$product_cat','$cat',NOW(),'$product_title','$product_color1','$product_color2','$product_color3','$product_img1','$product_img2','$product_img3','$product_img4','$product_img5','$product_img6','$product_price','$product_keywords','$product_desc')";
	$run_product=mysqli_query($connn,$insert_product);

	if ($run_product) {
		echo "<script>alert('Product has been inserted Sucessfull')</script>";
		echo "<script>window.open('insert_product.php','_self')</script>";
	}
	

}




?>
