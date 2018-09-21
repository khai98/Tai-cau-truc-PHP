<?php
require __DIR__ . '/../class/category.php';

$displayTables = new Category();
$displayCategories = $displayTables->getAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>MegaMenu Design</title>
</head>
<body>
<div class="container">
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/js.js"></script>
    <h1>Library Manager</h1>
    <div class="col-md-12">
        <!-- menu-->
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <!--                    <a class="navbar-brand" href="book.php">Book</a>-->
                </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Book</a></li>
                    <li class="active"><a href="#">Categories List</a></li>
                    <li class="active"><a href="#">Reader</a></li>
                    <li class="active"><a href="#">BorrowOrder</a></li>
                    <li class="active"><a href="#">Auther</a></li>
                    <li class="active"><a href="#">Category</a></li>

                </ul>
            </div>
        </nav>
        <div class="container" style="margin: 25px auto;">
            <table id="example" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0"
                   width="100%">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>name</th>
                    <th>Update</th>
                    <th>Delete</th>
                    <th>Add New</th>
                </tr>
                <?php foreach ($displayCategories as $displayCategory) : ?>
                    <tr>
                        <td> <?php echo $displayCategory['id'] ?></td>
                        <td> <?php echo $displayCategory['name'] ?></td>
                        <td><a href="update.php?id=<?php echo $displayCategory['id'] ?>">Update</a></td>
                        <td><a onclick="return confirm('bạn có muốn xóa không ? có thì OK không thì cancel ! ')"
                               href="delete.php?id=<?php echo $displayCategory['id'] ?>">Delete</a></td>
                        <td><a href="addnew.php">Add New </a></td>
                    </tr>
                <?php endforeach; ?>
                </thead>
            </table>
        </div>
    </div>
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>