<?php
// include database configuration file
include 'dbConfig.php';
?>

<div class="container">
     <div id="products" class="row list-group">
        <?php
        //get rows query
        $query = $db->query("SELECT * FROM products ORDER BY id DESC LIMIT 91,19");
        if($query->num_rows > 0){ 
            while($row = $query->fetch_assoc()){
        ?>

				
		
        <div class="item col-lg-3"   >
                <div class="thumbnail" >
				    <div class="thumbnail">
					<img src="<?php echo $row["image"]; ?>"></div>
                    <h5 class="list-group-item-heading"><?php echo $row["name"]; ?></h5>
                    <div class="row">
                        <div class="col-md-6">
                            <p class="lead"><?php echo '$'.$row["price"]; ?></p>
                        </div>
                        <div class="col-md-6">
                            <a class="btn btn-success" href="cartAction.php?action=addToCart&id=<?php echo $row["id"]; ?>">Add to cart</a>
                        </div>
						</div>
            </div>
        </div>
		
		
        
        <?php } }else{ ?>
        <p>Product(s) not found.....</p>
        <?php } ?>
    </div>
</div>
