<?php include 'pages/include/header.php'; ?>
<section class="mt-custom">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title text-center">Login</h3>
                        <div class="card-body">
                            <div class="form-group row">
                                <label  class="col-form-label col-md-4"></label>
                                <div class="col-md-8">
                                    <h4 class="text-success"> <?php echo isset($result)? $result:' '?></h4>
                                </div>
                            </div>
                            <form action="action.php" method="post" enctype="multipart/form-data">
                                <div class="form-group row">
                                    <label  class="col-form-label col-md-4">Email</label>
                                    <div class="col-md-8">
                                        <input type="email" name="email" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label  class="col-form-label col-md-4">Password</label>
                                    <div class="col-md-8">
                                        <input type="password" name="password" class="form-control" />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label  class="col-form-label col-md-4"></label>
                                    <div class="col-md-8">
                                        <input type="submit" name="loginBtn" class=" btn btn-success btn-block" value="login">
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'pages/include/footer.php'; ?>

