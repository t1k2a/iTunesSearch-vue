@extends('layouts.pediaapp')

@section('content')
    <div class="container mt-4">
        <div class="border p-4">
            <h1 class="h5 mb-4">
                編集
            </h1>

            <form action="/pediaUpdate" method="POST">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{$item->id}}">
                <fieldset class="mb-4">
                    <div class="form-group">
                        <label for="title">
                            タイトル
                        </label>
                        <input type="text" id="title" name="title"
                            class="form-control {{$errors->has('title') ? 'is-valid' : '' }}"
                            value="{{ old('title') ?: $item->title }}"
                        >
                    @if ($errors->first('title'))
                        <div class="invalid-feedback">
                            {{ $errors->first('title') }}
                        </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="contents">
                            本文
                        </label>

                        <textarea id="contents" name="contents"
                            class="form-control {{ $errors->has('body') ? 'is-valid' : '' }}"
                            rows="4"
                        >{{ old('contents') ?: $item->contents }}</textarea>
                        @if ($errors->has('contents'))
                            <div class="invalida-feedback">
                                {{ $errors->first('contents') }}
                            </div>
                        @endif
                    </div>

                    <div class="mt-5">
                        <a class="btn btn-secondary" href="/pedia/{{$item->id}}" >
                            キャンセル
                        </a>

                        <button type="submit" class="btn btn-primary">
                            更新する
                        </button>                    
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
@endsection
