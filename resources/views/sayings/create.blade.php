@extends('layouts.layout')

@section('content')

{!! Form::open(['url' => 'sayings']) !!}

    <div class="container">
        <h1 class="header">sayings</h1>
        <div class="input-field">
            {!! Form::text('saying', old('saying'), ['class' => 'validate', 'placeholder' => '例）リンガーハット']) !!}
            @if($errors->has('saying'))
                <p class="error">{{ $errors->first('saying') }}</p>
            @endif
            <label for="store_name" class="active">saying<span class="required">※</span></label>
        </div>
        <div class="input-field">
            {!! Form::text('quote', old('quote'), ['class' => 'validate', 'placeholder' => '例）リンガーハット']) !!}
            @if($errors->has('quote'))
                <p class="error">{{ $errors->first('quote') }}</p>
            @endif
            <label for="store_name" class="active">quote</label>
        </div>
        <div class="input-field">
            {!! Form::text('content', old('content'), ['class' => 'validate', 'placeholder' => '例）リンガーハット']) !!}
            @if($errors->has('content'))
                <p class="error">{{ $errors->first('content') }}</p>
            @endif
            <label for="store_name" class="active">content</label>
        </div>

        <div class="btn-box">
            <a class="modal-trigger" href="#modal-registration1"><input class="btn-flat main-btn" type="submit" name="" value="登録"></a>
        </div>
                
        <a class="btn-flat sub-btn" href="{{ $_SERVER['HTTP_REFERER'] }}">戻る</a>
    </div>

{{ Form::close() }}

@endsection