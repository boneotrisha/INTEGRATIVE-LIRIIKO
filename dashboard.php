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
        .playlist-container {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
        }
        .playlist {
            text-align: center;
        }
        .playlist img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid #1DB954;
        }
        .playlist p {
            margin-top: 10px;
            color: #fff;
            font-size: 14px;
        }
        .search-bar {
            margin-bottom: 20px;
        }
        .search-bar input {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: none;
            background-color: #222;
            color: white;
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
        
        <div class="search-bar">
            <input type="text" id="search" placeholder="Search for playlists...">
        </div>
        
        <h2>Your Playlists</h2>
        <div class="playlist-container">
            <div class="playlist">
                <img src="assets/img/b.jpg" alt="Playlist 1">
                <p>Chill Vibes</p>
            </div>
            <div class="playlist">
                <img src="assets/img/l.jpg" alt="Playlist 2">
                <p>Workout Mix</p>
            </div>
            <div class="playlist">
                <img src="assets/img/r.jpg" alt="Playlist 3">
                <p>Top Hits</p>
            </div>
            <div class="playlist">
                <img src="assets/img/l.jpg" alt="Playlist 4">
                <p>Old School</p>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
