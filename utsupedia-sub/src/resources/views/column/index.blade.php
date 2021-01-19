@extends('layouts.pediaapp')
@section('title', 'コラム一覧')

@section('content')
    <h1 style="margin-top: 30px; border-bottom: solid 3px #c0c0c0;">
        コラム
    </h1>
    <div class="mb-4">
        @auth
            <a href="column/create" class="btn btn-primary" style="margin-top:30px;">
                新規作成
            </a>
        @endauth
    </div>
    <div class="cotainer mt-4">
    @foreach ($items as $item)
    <div class="card mb-4">
        <div class="card-header">
            {{ $item->title }}
        </div>
        <div class="card-body">
            <p class="card-text">
                {!! nl2br(e(Str::limit($item->contents, 200))) !!}
            </p>
            <a class="card-link" href="/column/{{ $item->id }}">
                続きを見る
            </a>
        </div>
        <div class="card-footer">
            <span class="mr-2">
                投稿日時 {{ $item->created_at }}
            </span>
        </div>
    </div>
    @endforeach
    </div>
@endsection