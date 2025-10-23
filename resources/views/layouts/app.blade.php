<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>@yield('title') - GreenLeaf</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  
  <link rel="icon" type="image/png" href="{{ asset('Logo Leaf.jpg') }}">
  <style>
    body { background-color: #f2f8f3; }
    .card { border-radius: 12px; }
  </style>
</head>
<body>
  <x-navbar />

  <div class="container mt-4 mb-5">
    @yield('content')
  </div>

  <x-footer />
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>