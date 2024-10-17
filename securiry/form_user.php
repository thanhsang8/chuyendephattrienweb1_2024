<?php
// Start the session
session_start();
require_once 'models/UserModel.php';
$userModel = new UserModel();

$user = NULL; //Add new user
$_id = NULL;
$errors = [];

if (!empty($_GET['id'])) {
    $_id = base64_encode($_GET['id']);
    $user = $userModel->findUserById($_id);//Update existing user
}


if (!empty($_POST['submit'])) {
    // validate tên
    if (empty($_POST['name'])) {
        $errors['name'] = "Tên không được để trống";
    } elseif (!preg_match('/^[A-Za-z0-9]{5,15}$/', $_POST['name'])) {
        $errors['name'] = "Tên phải chứa các ký tự A-Z, a-z, 0-9 và có độ dài từ 5 đến 15 ký tự";
    }

    // Validate mật khẩu
    if (empty($_POST['password'])) {
        $errors['password'] = "Mật khẩu không được để trống";
    } elseif (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[~!@#$%^&*()])[A-Za-z\d~!@#$%^&*()]{5,10}$/', $_POST['password'])) {
        $errors['password'] = "Mật khẩu phải có từ 5 đến 10 ký tự, gồm chữ thường chữ hoa số và kí tự đặc biệt";
    }

    //nếu ko có lỗi thì thêm user
    if (empty($errors)) {
        if (!empty($_id)) {
            $userModel->updateUser($_POST, $_id);
        } else {
            $userModel->insertUser($_POST); 
        }
        header('location: list_users.php');
        exit;
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>User form</title>
    <?php include 'views/meta.php' ?>
</head>
<body>
    <?php include 'views/header.php'?>

    <div class="container">
           
    <?php if ($user || !isset($_id)) { ?>
            <div class="alert alert-warning" role="alert">
                User form
            </div>
            <form method="POST">
                <input type="hidden" name="id" value="<?php echo $_id ?>">
                
                <div class="form-group">
                    <label for="name">Name</label>
                    <input class="form-control" name="name" placeholder="Name" value='<?php if (!empty($user[0]['name'])) echo $user[0]['name'] ?>'>
                    <?php if (!empty($errors['name'])): ?>
                        <div class="alert alert-danger"><?php echo $errors['name']; ?></div>
                    <?php endif; ?>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                    <?php if (!empty($errors['password'])): ?>
                        <div class="alert alert-danger"><?php echo $errors['password']; ?></div>
                    <?php endif; ?>
                </div>

                <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
            </form>
        <?php } else { ?>
            <div class="alert alert-success" role="alert">
                User not found!
            </div>
        <?php } ?>
    </div>
</body>
</html>