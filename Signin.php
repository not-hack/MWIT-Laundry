<?php
session_start();
include("server/connection/connectionDB.php");

$web_head = "Sign In";

if (isset($_POST['login'])) {
    $userID = $_POST['userID'];
    $password = sha1(md5($_POST['password']));
    $stmt = $connection->prepare("SELECT `userID`, `password`, `ID`, `class` FROM `userdata` WHERE `userID` = ? AND `password` = ?");

    $stmt->bind_param('ss', $userID, $password);
    $stmt->execute();
    $stmt->bind_result($userID, $password, $ID, $Class);

    $result = $stmt->fetch();
    $_SESSION['ID'] = $ID;
    $_SESSION['Class'] = $Class;

    if ($result) {
        if ($Class == 'ADMIN') {

        } else if ($Class == 'USER') {

        } else {
            $err = 'Error';
        }
    } else {
        $err = 'Your ID or password was wrong.';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="extension/plugins/Bootstrap-5.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="extension/plugins/fontawesome-6.5.1/css/all.min.css">
    <link rel="stylesheet" href="extension/plugins/Sweetalert/sweetalert2.min.css">

    <script type="text/javascript" src="extension/plugins/swal.js"></script>

    <?php if (isset($err)) { ?>
        <script type="text/javascript">
            setTimeout(function () {
                swal("Failed", "<?php echo $err; ?>", "error");
            },
                100);
        </script>

    <?php } ?>
    <style>
        html,
        body {
            height: 100%;
        }

        body {
            display: flex;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #f5f5f5;
        }

        .form-signin {
            width: 100%;
            max-width: 400px;
            padding: 15px;
            margin: auto;
        }

        .form-signin .form-floating:focus-within {
            z-index: 2;
        }

        .form-signin input[type="text"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }

        .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }
    </style>
</head>

<body class="text-center">
    <main class="form-signin">
        <form method="post" class="needs-validation" novalidate>
            <h1 class="h4 mb-3 fw-bold">Welcome to <span class="text-info">MWIT Laundry</span></h1>
            <div class="form-floating mb-2 has-validation">
                <input type="text" name="userID" id="userID" class="form-control rounded-0" placeholder="User ID"
                    autocomplete="off" required>
                <label for="userID">User ID</label>
                <div class="invalid-feedback">
                    <span class="text-danger p-1">Please enter your User ID.</span>
                </div>
            </div>
            <div class="form-floating mb-2 has-validation">
                <input type="password" name="password" id="password" class="form-control rounded-0" placeholder="Password" required>
                <label for="password">Password</label>
                <div class="invalid-feedback">
                    <span class="text-danger p-1">Please enter your Password.</span>
                </div>
            </div>
            <button type="submit" name="login" class="w-100 btn btn-lg btn-primary rounded-0">Sign in</button>
        </form>
    </main>

    <script type="text/javascript">
        (function () {
            'use strict'
            var forms = document.querySelectorAll(".needs-validation");
            Array.prototype.slice.call(forms).forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        })();
    </script>
</body>

</html>