<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>login</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
  <linl href="{{ asset('/css/signin.css') }}" rel="stylesheet">

  <!-- Fonts -->
  <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>
  <div class="container">
    <form method="POST" action="{{ url('auth/login') }}" accept-charset="UTF-8" class="form-signin">
      @if(Session::has('warning'))
        <p class="alert alert-danger">{!! Session::get('warning') !!}</p>
      @else
        <h2 class="form-siginin-heading" style="text-align: center">adminsystem</h2>
      @endif
      <input type="hidden" name="_token" value="{{csrf_token()}}">
      <input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="ユーザ名" required autofocus>
      <input type="password" name="password" class="form-control" placeholder="パスワード" required>
      <label class="checkbox">
        <input type="checkbox" name="remember_me" value="1" checked=""> ログイン状態を保持する
      </label>
      <button type="submit" class="btn btn-lg btn-primary btn-block">ログイン</button><br>
      <p><a href="{{ url('auth/remind') }}">パスワードを忘れた方はこちら</a></p>
    </form>
  </div><!-- container -->
  <!-- Scripts -->
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>