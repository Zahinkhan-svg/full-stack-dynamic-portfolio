<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Zahin Muntaha Khan - Portfolio')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            color: #333;
            padding-top: 76px; /* Account for fixed navbar */
        }
        .navbar {
            background: rgba(255, 255, 255, 0.95) !important;
            backdrop-filter: blur(10px);
            box-shadow: 0 2px 20px rgba(0,0,0,0.1);
        }
        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }
        .card:hover {
            transform: translateY(-5px);
        }
        .btn-custom {
            background: linear-gradient(45deg, #667eea, #764ba2);
            border: none;
            border-radius: 25px;
            padding: 12px 30px;
            color: white;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        .btn-custom:hover {
            transform: scale(1.05);
            color: white;
        }
        .section-title {
            color: #333;
            font-weight: 700;
            margin-bottom: 50px;
            position: relative;
        }
        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 50px;
            height: 3px;
            background: linear-gradient(45deg, #667eea, #764ba2);
        }
        .skill-tag {
            background: linear-gradient(45deg, #667eea, #764ba2);
            color: white;
            border-radius: 20px;
            padding: 8px 16px;
            margin: 5px;
            display: inline-block;
            transition: all 0.3s ease;
        }
        .skill-tag:hover {
            transform: scale(1.1);
        }
        .project-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            transition: all 0.3s ease;
        }
        .project-card:hover {
            box-shadow: 0 20px 40px rgba(0,0,0,0.2);
        }
        .social-links a {
            color: #667eea;
            font-size: 24px;
            margin: 0 10px;
            transition: all 0.3s ease;
        }
        .social-links a:hover {
            color: #764ba2;
            transform: scale(1.2);
        }
        footer {
            background: #333;
            color: white;
            padding: 20px 0;
            text-align: center;
        }
    </style>
</head>
<body>
    @include('partial.header')

    @yield('content')

    @include('partial.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>