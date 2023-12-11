@extends('adminlte::page')

@section('title', '管理者情報登録')

@section('content_header')
    <h1>管理者情報登録</h1>
@stop

@section('content')
・メールアドレス
・姓
・名
・パスワード
・パスワード再入力
・権限

登録


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
