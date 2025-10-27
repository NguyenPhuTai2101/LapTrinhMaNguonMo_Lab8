<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>@yield('title','Lab 01')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f8fafc;
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
        }

        header {
            background: linear-gradient(90deg, #2563eb, #3b82f6);
            color: white;
            padding: 1rem 2rem;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        }

        nav a {
            color: #fff;
            text-decoration: none;
            margin-right: 1rem;
            font-weight: 500;
            transition: all 0.2s ease-in-out;
        }

        nav a:hover {
            color: #ffe082;
            transform: scale(1.05);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 1rem;
            background: white;
            border-radius: 12px;
            overflow: hidden;
            animation: fadeInUp 0.6s ease-in-out;
        }

        th {
            background-color: #e2e8f0;
            color: #334155;
            padding: 12px;
            text-align: left;
        }

        td {
            border-top: 1px solid #e5e7eb;
            padding: 10px 12px;
        }

        tr:hover {
            background-color: #f9fafb;
            transition: background 0.3s ease;
        }

        footer {
            text-align: center;
            color: #6b7280;
            padding: 1rem;
            margin-top: 2rem;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .page-container {
            max-width: 960px;
            margin: 2rem auto;
            padding: 1.5rem;
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            animation: fadeInUp 0.5s ease-in-out;
        }

        svg {
            display: none;
        }
    </style>
</head>

<body>
    <header>
        <nav>
            <a href="/products">🛍️ Products</a>
            <a href="/students">👨‍🎓 Students</a>
        </nav>
    </header>

    <main class="page-container">
        @yield('content')
    </main>

    <footer>
        <hr>
        <small>&copy; HUIT – Khoa CNTT</small>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
