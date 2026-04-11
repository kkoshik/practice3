<?php
session_start();
include '../application/connect.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch();
    
    if ($user && password_verify($_POST['password'], $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['role'] = $user['role'];

        if ($user['role'] === 'admin') {
                        header('Location: ../admin.php');
                    } else {
                        header('Location: ../profile.php');
                    }
    } else {
        $error = 'Неверный email или пароль';
            }
        }
    if (!empty($error)) {
        $_SESSION['login_error'] = $error;
        header('Location: ./auth.php');
        exit;
    }
?>



