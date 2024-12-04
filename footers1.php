<?php
$sql = "SELECT * FROM information";
$result2 = mysqli_query($conn, $sql) or die("query unsuccessful");
if (mysqli_num_rows($result2) > 0) {
    ?>     <?php
         while ($row = mysqli_fetch_assoc($result2)) {
             ?>
        <div class="container-fluid bg-dark text-secondary mt-5 pt-5">
            <div class="row px-xl-5 pt-5">
                <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                    <h5 class="text-secondary text-uppercase mb-4"></h5>
                    <p class="mb-4"></p>
                    <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i><?php echo $row['location'];?></p>
                    <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i><?php echo $row['email'];?>
                    </p>
                    <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>+91 <?php echo $row['mobile_no'];?>
                    </p>
                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="row">
                        <!-- <div class="col-md-4 mb-5">
                            <h5 class="text-secondary text-uppercase mb-4">Quick Shop</h5>
                            <div class="d-flex flex-column justify-content-start">
                                <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a>
                                <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Shop</a>
                                <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Shop
                                    Detail</a>
                                <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Shopping
                                    Cart</a>
                                <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Checkout</a>
                                <a class="text-secondary" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                            </div>
                        </div> -->
                        <div class="col-md-4 mb-5">
                            <h5 class="text-secondary text-uppercase mb-4">Quick Shop</h5>
                            <div class="d-flex flex-column justify-content-start">
                                <a class="text-secondary mb-2" href="index.php"><i class="fa fa-angle-right mr-2"></i>Home</a>
                                <a class="text-secondary mb-2" href="cart.php"><i class="fa fa-angle-right mr-2"></i>Our Shop</a>
                                <a class="text-secondary mb-2" href="shop.php"><i class="fa fa-angle-right mr-2"></i>Shop
                                    Detail</a>
                                <a class="text-secondary mb-2" href="New-Collection.php"><i class="fa fa-angle-right mr-2"></i>Shopping
                                    Cart</a>
                                <a class="text-secondary" href="contact.php"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                            </div>
                        </div>
                        
                        <div class="col-md-4 mb-5">
                            <h6 class="text-secondary text-uppercase mt-4 mb-3">Follow Us</h6>
                            <div class="d-flex">
                                <a class="btn btn-primary btn-square mr-2" href="<?php echo $row['twitter_link'];?>"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-primary btn-square mr-2" href="<?php echo $row['facebook_link'];?>"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-primary btn-square mr-2" href="<?php echo $row['linkedin_link'];?>"><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-primary btn-square" href="<?php echo $row['instagram_link'];?>"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4">
                <a href="" class="text-decoration-none">
                    <span class="h1 text-uppercase text-white bg-dark px-2">Rare</span>
                    <span class="h1 text-uppercase text-dark bg-primary px-2 ml-n1">Nomad</span>
                </a>
            </div>
                    </div>
                    
                </div>
                
            </div>
            <div class="row border-top mx-xl-5 py-4" style="border-color: rgba(256, 256, 256, .1) !important;">
                <div class="col-md-6 px-xl-0">
                    <p class="mb-md-0 text-center text-md-left text-secondary">
                        &copy; <a class="text-primary" href="#"></a>All rights reserved © Rare.Nomad 2024
                        <a class="text-primary" href="#"></a>
                        <br> <a href="#" target="_blank"></a>
                    </p>
                </div>
                <div class="col-md-6 px-xl-0 text-center text-md-right">
                    <img class="img-fluid" src="img/payments.png" alt="">
                </div>
            </div>
        </div>
    <?php } ?>
    </div>
    <?php
} else {
    echo '<p>No Record found</p>';
}
?>

<a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="mail/jqBootstrapValidation.min.js"></script>
<script src="mail/contact.js"></script>
<!-- Template Javascript -->
<script src="js/main.js"></script>
</body>

</html>