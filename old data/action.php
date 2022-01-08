<?php 

$conn=mysqli_connect('localhost','root',"","website");

if(isset($_POST['query'])){
	$inpText=$_POST['query'];
	$query="select product_title from products where product_title LIKE '%$inpText%'";
	$result=$conn->query($query);
	if($result->num_rows>0){
		while($row==$result->fetch_assoc()){
			echo"
			<div class='searcha' id="show_list"></div>
				<a href=''>.$rows['product_title'].</a>
			</div>		
			";
		}
	}
	else{
		echo"<a href=''>No Product found</a>";
	}
}

?>