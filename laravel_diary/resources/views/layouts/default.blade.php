<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <style>
    <link rel="stylesheet" href="{{ secure_asset('css/styles.css') }}">
     .error {
          color: red;
        }
        .success {
          color: green;
        }
    </style>
</head>
<body>
    @if (session()->has('success'))
        <div class="success">
            {{ session()->get('success') }}
        </div>
    @endif  
     @foreach($errors->all() as $error)
      <p class="error">{{ $error }}</p>
    @endforeach
    @yield('content')
</body>
</html>