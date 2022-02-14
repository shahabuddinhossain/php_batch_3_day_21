<?php include "pages/header.php"; ?>

<section class="py-5 bg-light">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">Add product Form</div>
                <div class="card-body">
                    <form action="action.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group row"> <!--Row Start-->
                            <label for="" class="col-form-label col-md-3">Product name</label>
                            <div class="col-md-9">
                                <input type="text" name="name" id="" class="form-control">
                            </div>
                        </div>    <!--Row End-->
                        <div class="form-group row"> <!--Row Start-->
                            <label for="" class="col-form-label col-md-3">Product price</label>
                            <div class="col-md-9">
                                <input type="number" name="price" id="" class="form-control">
                            </div>
                        </div>    <!--Row End-->
                        <div class="form-group row"> <!--Row Start-->
                            <label for="" class="col-form-label col-md-3">Product Image</label>
                            <div class="col-md-9">
                                <input type="file" name="image" id="" class="form-control-file">
                            </div>
                        </div>                      <!--Row End-->
                        <div class="form-group row"> <!--Row Start-->
                            <label for="" class="col-form-label col-md-3">Description</label>
                            <div class="col-md-9">
                                <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
                            </div>
                        </div>                      <!--Row End-->
                        <div class="form-group row"> <!--Row Start-->
                            <label for="" class="col-form-label col-md-3"></label>
                            <div class="col-md-9">
                                <input type="submit" name="product_btn" value="submit" class="btn btn-outline-success btn-block">
                            </div>
                        </div>                      <!--Row End-->

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>




<?php include "pages/header.php"; ?>