<?php
require 'category.php';
    if (isset($_POST['name'])) {
        $name = $_POST['name'];
    $addCategories = new category();
    $addCategories->addCategories($name);
    header('Location: category.php');
}
?>
<div class="container register">
    <div class="row">
        <div class="col-md-3 register-left">
            <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
            <h3>Welcome</h3>
            <p> Let's go, Please Add New Category </p>
        </div>
        <div class="col-md-9 register-right">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <h3 class="register-heading">Add New Category</h3>
                    <form method="post">
                        <div class="row register-form">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="id" class="form-control" placeholder="ID"/>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Not write "/>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder=" Not write "/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Category New"/>
                                </div>
                                <div class="form-group">
                                    <input type="text" minlength="10" maxlength="10" class="form-control"
                                           placeholder="Not write"/>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Not write"/>
                                </div>
                                <input type="submit" class="btnRegister" value="Add"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../css/addnewcategory.css">