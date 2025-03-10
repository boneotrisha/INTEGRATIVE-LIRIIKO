<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liriiko - Spotify Clone</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap');
        
        body {
            background-color: #121212;
            color: #1DB954;
            font-family: 'Montserrat', sans-serif;
            overflow-y: auto;
            overflow-x: hidden;
            height: 100vh;
        }
        .video-background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
        }
        .navbar {
            background-color: #000;
        }
        .navbar-brand, .nav-link {
            color: #1DB954 !important;
            font-weight: bold;
        }
        .btn-primary {
            background-color: #1DB954;
            border: none;
            font-weight: bold;
        }
        .btn-primary:hover {
            background-color: #17a74b;
        }
        .container {
            margin-top: 20px;
            position: relative;
            z-index: 1;
        }
        h1, p {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <video autoplay muted loop class="video-background">
        <source src="assets/img/ok.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="index.php">Liriiko</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                    <li class="nav-item"><a class="nav-link" href="register.php">Sign Up</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="card p-4 text-center" style="max-width: 400px; width: 100%; background-color: #000; border: 1px solid #1DB954;">
            <h5 class="text-light">Login to Your Account</h5>
            <form action="login.php" method="POST">
                <div class="mb-3">
                    <label for="email" class="form-label text-light">Email</label>
                    <input type="email" class="form-control bg-dark text-light" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label text-light">Password</label>
                    <input type="password" class="form-control bg-dark text-light" id="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Login</button>
            </form>
            <p class="small mt-3 text-light">Don't have an account? <a href="register.php" class="text-success">Create one</a></p>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
