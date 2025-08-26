{{-- <!DOCTYPE html>
<html>
<head>
    <title>Students List</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    
    <!-- Header -->
    <div class="row mb-3">
        <div class="col-12 bg-warning-subtle py-3">
            <h1 class="text-center">@yield('title')</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-8">

            @if (session('status'))
            <div class="alert alert-success">
                {{session('status')}}

            </div>
                
            @endif
        </div>
    </div>

    <div class="col-8">
        @yield('content');
    </div>

 

</div>

<!-- Bootstrap JS Bundle CDN -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> --}}


<!DOCTYPE html>
<html>
<head>
    <title>@yield('title') | Students List</title>

    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #F8F9FA;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        header {
            background: linear-gradient(90deg, #1A2A80, #3B38A0);
            color: white;
            padding: 20px 0;
            border-radius: 0 0 15px 15px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.15);
        }
        header h1 {
            font-weight: bold;
            letter-spacing: 1px;
        }
        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.08);
        }
        .btn-primary {
            background-color: #1A2A80;
            border: none;
        }
        .btn-primary:hover {
            background-color: #3B38A0;
        }
        .btn-warning {
            background-color: #7A85C1;
            border: none;
            color: white;
        }
        .btn-warning:hover {
            background-color: #3B38A0;
        }
        .btn-danger {
            background-color: #B22222;
            border: none;
        }
        .table thead {
            background-color: #7A85C1;
            color: white;
        }
        .container {
            max-width: 1000px;
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header class="text-center">
        <h1>@yield('title')</h1>
    </header>

    <div class="container mt-5">
        <!-- Flash messages -->
        @if (session('status'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('status') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        <!-- Main Content -->
        <div class="card p-4 mt-3">
            @yield('content')
        </div>
    </div>

    <!-- Bootstrap JS Bundle CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
