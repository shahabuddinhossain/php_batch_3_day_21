<?php include "header.php" ?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto mt-5 ">
                <div class="card bg-dark text-white">
                    <div class="card-header">
                        <h2>Login</h2>
                    </div>
                    <div class="card-body">
                        <h3 class="text-danger text-center"> <?php echo isset($message)? $message:'' ; ?> </h3>
                        <form action="action.php" method="POST">
                            <div class="form-group row">
                                <label for="" class="col-form-label col-md-3">Email:</label>
                                <div class="col-md-9">
                                    <input type="email" name="email" id="" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-form-label col-md-3">Password</label>
                                <div class="col-md-9">
                                    <input type="password" name="password" id="" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-form-label col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" name="login_btn" id="" class="btn btn-outline-success btn-block">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
















<?php include "footer.php"?>
