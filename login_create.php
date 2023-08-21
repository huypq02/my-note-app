<?php include 'db.php'; ?>
<?php include 'functions.php'; ?>
<?php
    if(isset($_POST['submit'])){
        createData();
    }
?>

<?php include './includes/header.php' ?>

<body>
    <div class="container">
        <div class="col-sm-6">
            <h1 class="text-center">CREATE</h1>
            <form action="login_create.php" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>

                <input type="submit" name="submit" class="btn btn-primary" value="Create">
            </form>
        </div>
    </div>
</body>

</html>