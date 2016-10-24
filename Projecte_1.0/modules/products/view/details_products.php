<section >
    <div class="container">
        <div id="details_prod" class="row text-center pad-row">
            <ol class="breadcrumb">
                <li><a href="index.php?module=products">Products</a></li>
                <li class="active">Details Product</li>
            </ol>
            <?php
            //print_r($producto);
            //die();
            echo "<br>";
            echo "<br>";
            if (isset($arrData) && !empty($arrData)) {
                ?>   
                <div id="details" class="col-md-4  col-sm-4">
                    <!--<i class="fa fa-desktop fa-5x"></i>-->
                    <!--<img src="view/img/product.jpg" alt="product" height="70" width="70">-->
                    <img class="prodImg" src="<?php echo $arrData['avatar'] ?>" alt="product"> 

                    <div id="container">
                        <h4> <strong><?php echo $arrData['prod_name'] ?></strong> </h4>
                        <br />
                        <p>
                            <strong>Dischaarge Date: <br/></strong><?php echo $arrData['dis_date'] ?>
                        </p>
                        <p>
                            <strong>Expiration Date: <br/></strong><?php echo $arrData['exp_date'] ?>
                        </p>
                        <p>
                            <strong>Status:</strong> <?php echo $arrData['status'] ?>
                        </p>
                        <p>
                            <strong>Country:</strong> <?php echo $arrData['country'] ?>
                            <strong>  Province:</strong> <?php echo $arrData['province'] ?>
                            <strong>  Population:</strong> <?php echo $arrData['population'] ?>
                        </p>
                        <h2> <strong>Price: <?php echo $arrData['price'] ?>€</strong> </h5>    
                    </div>
                </div>
                <?php
            }
            ?> 
        </div>
    </div>
</section>

