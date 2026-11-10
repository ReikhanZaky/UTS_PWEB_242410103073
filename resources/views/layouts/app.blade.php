<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kopiko Giveaway - @yield('title')</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Poppins', sans-serif; }
        body { background-color: #121212; color: #e0e0e0; min-height: 100vh; display: flex; flex-direction: column; }
        .container { max-width: 1000px; margin: 40px auto; padding: 20px; flex: 1; width: 100%; }
        .card { background: #1e1e1e; padding: 40px; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.5); border: 1px solid #333; text-align: center; }
        h2 { color: #FFD700; margin-bottom: 20px; font-weight: 700; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; border-radius: 8px; overflow: hidden; }
        th { background: #FFD700; color: #121212; padding: 15px; text-align: left; font-weight: 600; text-transform: uppercase; letter-spacing: 1px; }
        td { padding: 15px; border-bottom: 1px solid #333; }
        tr:nth-child(even) { background-color: #252525; }
        tr:hover { background-color: #2a2a2a; transition: 0.3s; }
        input { width: 100%; padding: 12px; background: #2a2a2a; border: 1px solid #444; color: white; border-radius: 8px; margin-bottom: 15px; }
        input:focus { outline: none; border-color: #FFD700; }
        .btn { background: #FFD700; color: #121212; padding: 12px 25px; border: none; border-radius: 8px; font-weight: 700; cursor: pointer; width: 100%; transition: 0.3s; text-decoration: none; display: inline-block;}
        .btn:hover { background: #e6c200; transform: translateY(-2px); }
        .btn-danger { background: #e74c3c; color: white; margin-top: 20px;}
        .btn-danger:hover { background: #c0392b; }
    </style>
</head>
<body>
    <x-navbar />
    <div class="container">
        @yield('content')
    </div>
    <x-footer />
</body>
</html>
