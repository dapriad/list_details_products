<section >
    <div class="container">
        <div id="list_prod" class="row text-center pad-row">
            <ol class="breadcrumb">
                <li class="active" >Products</li>
            </ol>
            <?php
            //var_dump($arrData);
            if (isset($arrData) && !empty($arrData)) {
                foreach ($arrData as $product) {
                    //echo $productos['id'] . " " . $productos['nombre'] . "</br>";
                    //echo $productos['descripcion'] . " " . $productos['precio'] . "</br>";
                    ?>   
                    <a id="prod" href="index.php?module=frontend_products&idProduct=<?php echo $product['id_prod'] ?>" >
                        <p><?php echo $product['id_prod'] ?></p>
                        <img class="prodImg" src=<?php echo $product['avatar'] ?> alt="product" >
                        <p><?php echo $product['prod_name'] ?></p>
                        <p id="p2"><?php echo $product['price'] ?>€</p>
                    </a>
                    <?php
                }
            }
            ?> 
        </div>
    </div>
</section>