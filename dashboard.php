<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liriiko - Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap');
        
        body {
            background-color: #121212;
            color: #1DB954;
            font-family: 'Montserrat', sans-serif;
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
        .sidebar {
            width: 250px;
            height: 100vh;
            background-color: #000;
            padding: 20px;
            position: fixed;
        }
        .sidebar a {
            color: #1DB954;
            text-decoration: none;
            font-weight: bold;
            display: block;
            margin: 15px 0;
        }
        .content {
            margin-left: 260px;
            padding: 20px;
        }
    </style>
</head>
<body>
    <video autoplay muted loop class="video-background">
        <source src="assets/img/dash.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    
    <div class="sidebar">
        <h3>Liriiko</h3>
        <a href="dashboard.php">Home</a>
        <a href="#">Your Library</a>
        <a href="#">Playlists</a>
        <a href="#">Settings</a>
        <a href="logout.php">Logout</a>
    </div>
    
    <div class="content">
        <h1>Welcome to Liriiko</h1>
        <p>Your personalized music dashboard</p>
        <div class="row">
            <div class="col-md-4">
                <div class="card bg-dark text-light p-3">
                    <h5>Recently Played</h5>
                    <p>Track your latest songs</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-dark text-light p-3">
                    <h5>Your Playlists</h5>
                    <p>Access your saved collections</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-dark text-light p-3">
                    <h5>Recommended</h5>
                    <p>Discover new music</p>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
