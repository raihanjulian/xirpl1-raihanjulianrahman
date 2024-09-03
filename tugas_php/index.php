<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index.php</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            color: #333;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        header {
            background: #808080;
            color: #ffffff;
            padding: 15px;
            text-align: center;
        }
        .main {
            display: flex;
            flex: 1;
        }
        .sidebar {
            background: #808080;
            background: ;
            color: #ffffff;
            width: 250px;
            padding: 20px;
            box-shadow: 2px 0 4px rgba(0, 0, 0, 0.1);
        }
        .sidebar a {
            color: #ffffff;
            text-decoration: none;
            display: block;
            margin-bottom: 10px;
            font-size: 1.1rem;
        }
        .sidebar a:hover {
            text-decoration: underline;
        }
        .content {
            flex: 1;
            background-image: url('old-trafford-stadium.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        footer {
            background: #333;
            color: #ffffff;
            text-align: center;
            padding: 10px;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>
    <header>
        <h1>Raihan Julian Rahman</h1>
    </header>
    <div class="main">
        <aside class="sidebar">
            <h2>Menu</h2>
            <a href="profile.php">Profil</a>
        </aside>
        <main class="content">
            <h2>Hallowww</h2>
            <p>Perkenalkan nama saya Raihan Julian Rahman, Saya berasal dari kelas XI RPL 1.</p>
        </main>
    </div>
    <footer>
    https://www.instagram.com/rayhanjry
    </footer>
</body>
</html>