<?php
if (isset($_SESSION['customer_id'])) {
    $query_result = $ob_app->select_all_wishlist_by_user_id();
}
if (isset($_GET['c_status'])) {
    $product_id = $_GET['product_id'];
    $message = $ob_app->delete_wish_product_by_user_id($product_id);
}
$manufacture_result = $ob_admin->select_all_manufacturer();
if (isset($_POST['cart_btn'])) {

    $ob_app->save_cart_product_info($_POST);
}
?>

<div class="men">
    <div class="container">
        <div class="col-md-3 sidebar">
            <div class="block block-layered-nav">
                <div class="block-title">
                    <strong><span>Shop By</span></strong>
                </div>

                <div class="block-content">
                    <dl id="narrow-by-list">                        
                        <dt class="even">Manufacturer</dt>
                        <dd class="even">
                            <ol>
                                <?php while ($manufacture = mysqli_fetch_assoc($manufacture_result)) { ?>
                                    <li>
                                        <a href="manufacture.php?manufacture_id=<?php echo $manufacture['manufacture_id']; ?>""><?php echo $manufacture['manufacture_name']; ?></a>
                                    </li>   
                                <?php } ?>

                            </ol>
                        </dd>                        
                    </dl>

                </div>
            </div>

        </div>
        <div class="col-md-9">
            <div class="mens-toolbar">
                <div class="sort">

                </div>
                <div class="pager">   
                    <div class="limiter visible-desktop">
                        <label>Show</label>
                        <select>
                            <option value="" selected="selected">
                                9                </option>
                            <option value="">
                                15                </option>
                            <option value="">
                                30                </option>
                        </select> per page        
                    </div>
                    <ul class="dc_pagination dc_paginationA dc_paginationA06">
                        <li><a href="#" class="previous">Pages</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
            <?php if (isset($_SESSION['customer_id'])) { ?>
                <div class="span_2">
                    <?php while ($wishlist_info = mysqli_fetch_assoc($query_result)) { ?>
                        <div class="col_1_of_single1 span_1_of_single1">
                            <a href="product_details.php?product_id=<?php echo $wishlist_info['product_id']; ?>">
                                <img src="admin/<?php echo $wishlist_info['product_image']; ?>" height="200" width="200" alt=""/>
                                <h3><?php echo $wishlist_info['product_name']; ?></h3>
                                <h4><?php echo $wishlist_info['product_price']; ?></h4>
                            </a>  
                            <ul class="list2">                          
                                <li class="list2_left">
                                    <form action="" method="post">
                                        <input type="hidden" name="product_quantity" value="1"> 
                                        <input type="hidden" name="product_id" value="<?php echo $wishlist_info['product_id']; ?>"> 
                                        <input  type="submit" class="btn btn-success" name="cart_btn" value="Add To Cart">
                                    </form>
                                </li>
                                <li class="list2_right"><span class="m_2"><a href="?c_status=delete&product_id=<?php echo $wishlist_info['product_id']; ?>" class="link1"> Delete </a></span></li>
                            </ul>
                        </div>                   
                    <?php }
                    ?>
                    <div class="clearfix"></div>
                </div>
            <?php } else { ?>
                <h3 style="color:red;">Please Login For Add Product To WishList</h3>
            <?php } ?>
        </div>
    </div>
</div>