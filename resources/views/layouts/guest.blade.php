<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Custom fonts for this template-->
    <link href="sb-admin-2/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="sb-admin-2/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://demo.getstisla.com/assets/modules/izitoast/css/iziToast.min.css">

</head>

<body class="bg-gradient-primary" style="overflow: hidden">

    <main>
      {{ $slot }}
    </main>

    <!-- Bootstrap core JavaScript-->
    <script src="sb-admin-2/vendor/jquery/jquery.min.js"></script>
    <script src="sb-admin-2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="sb-admin-2/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="sb-admin-2/js/sb-admin-2.min.js"></script>
    <script src="https://demo.getstisla.com/assets/modules/izitoast/js/iziToast.min.js"></script>

    <script>
        function missLogin(){
            iziToast.error({
                title: 'Login Gagal!',
                message: "Pastikan email dan password benar..",
                position: 'topRight'
            });
        }
        if($('#missLog').data('message') != null){
            missLogin()
        }
    </script>

</body>

</html>