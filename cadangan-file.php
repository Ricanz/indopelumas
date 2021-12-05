<!-- service_details_start  -->
<div class="service_details_area">
    <div class="container">
        <div class="row">
                <div class="col-lg-4 col-md-4">
                        <div class="service_details_left">
                            <h3>Product</h3>
                            <div class="nav nav-pills" id="v-pills-tab" role="tablist"
                                aria-orientation="vertical">
                                <a class="" href="product_details.php?id=1">Nebula Oil</a>
                                <a class="" href="product_details.php?id=2">Pertamina	</a>
                                <a class="" href="product_details.php?id=3">Shell Oil</a>
                                <a class="" href="product_details.php?id=4">Mobil Oil</a>
                                <a class="" href="product_details.php?id=5">Eni Oil</a>
                                <a class="" href="product_details.php?id=6">Total Oil</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8" style="margin-top: -170px;">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                aria-labelledby="v-pills-home-tab">
                                <div class="service_thumb" align = "center">
                                    <img class="img-fluid" src="<?php echo $d["foto"] ?>" alt="">
                                </div>
                                <br><br>
                                <div class="accordion_area">
                                    <div class="faq_ask">
                                        <h3>Deskripsi</h3>
                                        <?php echo $d["deskripsi"]; ?>
                                    </div>
                                </div>
  <?php
  } ?>
                            </div>
                        </div>
                    </div>
        </div>
    </div>
</div>
<!-- service_details_start  -->
