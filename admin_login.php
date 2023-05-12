<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Login</title>
</head>
<body style="background-color: aliceblue">
<? include "include/header.php"?>
<div class="container">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-3">

            </div>
            <div class="col-md-6 rounded mt-5 p-5 bg-dark text-white rounded">
                <form method="post">
                    <div class="form-group">
                        <label class="form-label">Username</label>
                        <input type="text" placeholder="Enter Username" name="name" class="form-control" autocomplete="off" >
                    </div>
                    <div class="form-group">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" placeholder="Type your Password" class="form-control">
                    </div>
                    <input type="submit" name="login" class="btn btn-primary mt-4">
                </form>
            </div>
            <div class="col-md-3">

            </div>
        </div>
    </div>
</div>
</body>
</html>