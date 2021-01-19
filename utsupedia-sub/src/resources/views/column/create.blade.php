@extends('layouts.pediaapp')
@section('title', 'コラム作成')

@section('content')
<div class="container mt-4">
    <div class="border p-4">
        <h1 class="h5 mb-4">
            コラムの新規作成
        </h1>

        <form method="POST" action="{{ route('column.store') }}">
            @csrf

            <fieldset class="mb-4">
                <div class="form-group">
                    <label for="title">
                        コラムタイトル
                    </label>
                    <input id="title" name="title" class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}"
                        value="{{ old('title') }}"type="text">
                    @if ($errors->has('title'))
                        <div class="invalid-feedback">
                            {{ $errrors->first('title') }}
                        </div>
                    @endif
                </div>

                <div class="form-group">
                    <label for="contents">
                        本文
                    </label>

                    <textarea id="contents" name="contents" class="form-control "{{ $errors->has('contents') ? 'is-invalid' : ''}} rows="4">
                        {{ old('contents') }}
                        @if ($errors->has('contents'))
                            <div class="invalid-feedback">
                                {{ $errors->first('contents') }}
                            </div>
                        @endif
                    </textarea>
                </div>

                <div class="mt-5">
                    <a class="btn btn-secondary" href="/column">
                        キャンセル
                    </a>

                    <button type="submit" class="btn btn-primary">
                        投稿する
                    </button>
                </div>
            </fieldset>
        </form>
    </div>
</div>

@endsection