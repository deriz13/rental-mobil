<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>EShopper - Bootstrap Shop Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- jQuery UI CSS -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
      
    <!-- Libraries Stylesheet -->
    <link href="{{ url('assets/users/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ url('assets/users/css/style.css') }}  " rel="stylesheet">
    <script src="https://www.google.com/recaptcha/api.js"></script>
</head>

<body>
    <!-- Topbar Start -->
    
    <!-- Topbar End -->


    <!-- Navbar Start -->
    @include('users.layouts.navbar')
    <!-- Navbar End -->


    <!-- Featured Start -->
    @yield('content_users')
    <!-- Vendor End -->


    <!-- Footer Start -->
    
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url('assets/users/lib/easing/easing.min.js') }} "></script>
    <script src="{{ url('assets/users/lib/owlcarousel/owl.carousel.min.js') }}  "></script>

    <!-- jQuery UI JavaScript -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    
    <!-- Contact Javascript File -->
    <script src="{{ url('assets/users/mail/jqBootstrapValidation.min.js') }}"></script>
    <script src="{{ url('assets/users/mail/contact.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ url('assets/users/js/main.js?v=1') }}  "></script>

    

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Ambil referensi elemen pemberitahuan
            var errorAlert = document.getElementById("errorAlert");

            // Tentukan berapa lama pemberitahuan akan ditampilkan (dalam milidetik)
            var timeoutDuration = 2000; 

            // Setelah waktu tertentu, sembunyikan pemberitahuan
            setTimeout(function() {
                if (errorAlert) {
                    errorAlert.remove(); // Hapus elemen pemberitahuan
                }
            }, timeoutDuration);
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Ambil referensi elemen pemberitahuan berhasil
            var successAlert = document.getElementById("successAlert");

            // Tentukan berapa lama pemberitahuan akan ditampilkan (dalam milidetik)
            var timeoutDuration = 2000; 

            // Setelah waktu tertentu, sembunyikan pemberitahuan berhasil
            setTimeout(function() {
                if (successAlert) {
                    successAlert.remove(); // Hapus elemen pemberitahuan berhasil
                }
            }, timeoutDuration);
        });
    </script>
    <script>
    setTimeout(function() {
        var successMessage = document.getElementById('success-message');
        if (successMessage) {
            successMessage.style.display = 'none';
        }

        var errorMessage = document.getElementById('error-message');
        if (errorMessage) {
            errorMessage.style.display = 'none';
        }
    }, 1000);
</script>
</body>

</html>