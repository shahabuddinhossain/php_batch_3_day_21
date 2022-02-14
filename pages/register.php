<?php include "pages/header.php"; ?>

<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h1 class="text-center text-monospace">Registration Form</h1>
                    </div>
                    <div class="card-body">
                        <h4 class="text-center text-success my-2"><?php echo isset($message)?$message:''; ?></h4>
                        <form action="action.php" method="post">
                            <div class="form-group row">    <!--row-->
                                <label for="" class="col-md-3 col-form-label">Full Name</label>
                                <div class="col-md-9">
                                    <input type="text" name="full_name" id="" class="form-control">
                                </div>
                            </div>    <!--row-->

                            <div class="form-group row">    <!--row-->
                                <label for="" class="col-md-3 col-form-label">Email Address</label>
                                <div class="col-md-9">
                                    <input type="email" name="email" id="" class="form-control">
                                </div>
                            </div>    <!--row-->

                            <div class="form-group row">    <!--row-->
                                <label for="" class="col-md-3 col-form-label">Phone Number</label>
                                <div class="col-md-9">
                                    <input type="text" name="mobile" id="" class="form-control">
                                </div>
                            </div>    <!--row-->




                            <div class="form-group row">    <!--Row-->
                                <label for="" class="col-md-3 col-form-label"></label>
                                <div class="col-md-9">
                                    <input type="submit" name="register_btn" id="" class="btn btn-outline-success btn-block" value="submit">
                                </div>
                            </div>      <!--Row-->

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>









<?php include "pages/footer.php"; ?>
