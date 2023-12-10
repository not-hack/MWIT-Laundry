<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="shortcut icon" href="" type="image/x-icon">
    <link rel="icon" href="" sizes="32x32"> -->
    <title>MWIT Laundry - <?php echo $web_head; ?></title>
    <link rel="stylesheet" href="extension/plugins/Bootstrap-5.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="extension/plugins/fontawesome-6.5.1/css/all.min.css">
    <link rel="stylesheet" href="extension/plugins/Sweetalert/sweetalert2.min.css">


    <script type="text/javascript" src="extension/plugins/swal.js"></script>

    <?php if (isset($success)) { ?>
        <script type="text/javascript">
            setTimeout(function () {
                swal("Success", "<?php echo $success; ?>", "success");
            },
                100);
        </script>

    <?php } ?>

    <?php if (isset($err)) { ?>
        <script type="text/javascript">
            setTimeout(function () {
                swal("Failed", "<?php echo $err; ?>", "error");
            },
                100);
        </script>

    <?php } ?>
    <?php if (isset($info)) { ?>
        <script type="text/javascript">
            setTimeout(function () {
                swal("Success", "<?php echo $info; ?>", "warning");
            },
                100);
        </script>

    <?php } ?>
</head>