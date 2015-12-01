@extends('tbs.base')
  @section('title', 'ユーザーの新規作成')
  @section('content')
  <div class="jumbotron">
    <h2 class="text-center">@yield('title')</h2>
    <form class="form-horizontal" method="POST">
      <input type="hidden" name="_token" value="{{csrf_token()}}">
      <div class="form-group">
        <label class="col-sm-2 control-label">お名前</label>
        <div class="col-sm-10">
          <input type="text" name="name" value="{{old('name')}}" class="form-control" placeholder="name">
          @if($errors->first('name'))
            <p class="alert alert-danger">{{$errors->first('name')}}</p>
          @endif
        </div><!-- end_col-sm-10 -->
      </div><!-- end_form-group -->
      <div class="form-group">
        <label class="col-sm-2 control-label">Eメール</label>
        <div class="col-sm-10">
          <input type="text" name="email" value="{{old('email')}}" class="form-control" placeholder="Email">
          @if($errors->first('email'))
            <p class="alert alert-danger">{{$errors->first('email')}}</p>
          @endif
        </div><!-- end_col-sm-10 -->
      </div><!-- end_form-group -->
      <div class="form-group">
        <label class="col-sm-2 control-label">パスワード</label>
        <div class="col-sm-10">
          <input type="password" name="password" class="form-control" placeholder="Password">
          @if($errors->first('password'))
            <p class="alert alert-danger">{{$errors->first('password')}}</p>
          @endif
        </div><!-- col-sm-10 -->
      </div><!-- end_form-group -->
      <div class="form-group">
        <label for="confirm" class="col-sm-2 control-label">パスワードの確認</label>
        <div class="col-sm-10">
          <input type="password" name="password_confirmation" class="form-control" id="confirm" placeholder="Password">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-default">ユーザー登録</button>
        </div>
      </div>
    </form>
  </div><!-- end_jumbotron -->
  @stop