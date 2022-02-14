<?php include "pages/header.php"; ?>

<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h1>Sum of Series</h1>
                    </div>
                    <div class="card-body">
                        <form action="action.php" method="post">
                            <div class="form-group row">    <!--row-->
                                <label for="" class="col-md-3 col-form-label">Starting Number</label>
                                <div class="col-md-9">
                                    <input type="number" name="starting_number" id="" class="form-control" value="<?php echo isset($result['startingNumber'])? $result['startingNumber'] :''; ?>">
                                </div>
                            </div>    <!--row-->

                            <div class="form-group row">    <!--row-->
                                <label for="" class="col-md-3 col-form-label">Ending Number</label>
                                <div class="col-md-9">
                                    <input type="number" name="ending_number" id="" class="form-control" value="<?php echo isset($result['endingNumber'])? $result['endingNumber'] :''; ?>">
                                </div>
                            </div>    <!--row-->

                            <div class="form-group row">    <!--row-->
                                <label for="" class="col-md-3 col-form-label">Result</label>
                                <div class="col-md-9">
                                    <textarea name="" id=""  rows="10" class="form-control"><?php echo isset($result['result'])? $result['result'] :''; ?></textarea>
                                </div>
                            </div>    <!--row-->
                            <div class="form-group row">    <!--Row-->
                                <label for="" class="col-md-3 col-form-label"></label>
                                <div class="col-md-9">
                                    <input type="submit" name="series_btn" id="" class="btn btn-outline-success btn-block" value="submit">
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
