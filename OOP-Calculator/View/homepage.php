<?php require 'includes/header.php'?>
    <!-- this is the view, try to put only simple if's and loops here.
    Anything complex should be calculated in the model -->
    <section>
        <form method="post">
            <div class="input-group mb-3">
                <select name="productId" class="custom-select" >

                    <option selected disabled value="">Choose a product</option>
                    <?php
                    /**
                     * @var Product[] $product
                     */
                    foreach ($products as $product) {
                        $name = ucwords($product->getName());
                        $price = $product->getPrice()/100;
                        $selected = '';
                        if(isset($_POST['productId'])) {
                            $id = (int)htmlspecialchars(trim($_POST['productId']));
                            if($products->getId() === $id) {
                                $selected = 'selected';
                            }
                        }
                        echo "
                <option value='{$product->getId()}' {$selected}>{$name} | &euro;{$price}</option>
                ";
                    }
                    ?>
                </select>
                <select name="customerId" class="custom-select" >
                    <option selected disabled value="">Choose a customer</option>
                    <?php
                    /**
                     * @var Customer[] $customers
                     */
                    foreach ($customers as $customer) {
                        // . " " . concatinating: two strings together
                        $name = ucwords($customer->getFirstName() . " " . $customer->getLastName());
                        $selected = '';
                        if(isset($_POST['customerId'])) {
                            $id = (int)htmlspecialchars(trim($_POST['customerId']));
                            if($customer->getId() === $id) {
                                $selected = 'selected';
                            }
                        }
                        echo "
                <option value='{$customer->getId()}' {$selected}>{$name}</option>
                ";
                    }
                    ?>
                </select>
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit">Submit</button>
                </div>
            </div>
        </form>


    </section>
<?php require 'includes/footer.php'?>