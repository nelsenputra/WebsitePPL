<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Management Proyek</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        
        <style>
            body {
                font-family: 'Nunito', sans-serif;
                margin: 0; 
                height: 100vh; 
            }
            
            #intro-example {
              background-image: url('/img/background2.jpg');
              background-repeat: no-repeat;
              background-size: cover;
              height: 100vh; 
              width: 100vw; 
            }
            .mask {
                width: 100%; 
                height: 100%; 
                background-color: rgba(0, 0, 0, 0.7);
            }
            nav {
                position: absolute; /* Positioning the nav element absolutely to place it in the top right corner */
                top: 0;
                right: 30px;
                padding: 20px; /* Adds padding for aesthetic spacing */
            }
            .login {
                color: #fff; /* Sets the color of the login link to white */
                text-decoration: none; /* Removes underline from the link */
            }
          </style>
        <style>
            
        </style>
    </head>
    <body>
        <div id="intro-example" class="p-5 text-center" >
            <nav>
                <a href="{{ route('login') }}" class="login btn btn-dark btn-sm">Login</a>
            </nav>
            <div class="mask d-flex justify-content-center align-items-center mt-2">
                <div class="text-white">
                    <h1 class="mb-3">Selamat Datang!</h1>
                    <h5 class="mb-4">
                        Website Pengajuan Proyek PPL
                    </h5>
                    <a class="btn btn-outline-light btn-lg m-2" href="{{ route('form.create') }}">Form Pengajuan Proyek</a>
                    <a class="btn btn-outline-light btn-lg m-2" href="{{ route('proyek') }}">Daftar Proyek PPL</a>
                </div>
            </div>
        </div>
    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>
