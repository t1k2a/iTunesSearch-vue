@extends('layouts.pediaapp')
@section('title', 'うつペディア')

@section('content')

    <h2>メールを送信しました</h2>
    <h3>名前：{{$contactData['name']}}</h3>
    <h3>内容：{{$contactData['content']}}</h3>
@endsection