@extends('layouts.layout')

@section('content')

<div class="container">
    <div class="flex">
        <h1 class="header">名言一覧</h1>
        <div class="btn-box">
            <a class="btn-flat main-btn" href="">新規登録</a>
        </div>
    </div>
    <div class="box pd20">
        test
        @foreach ($sayings as $saying)
        <p>{{{ $saying->saying }}}</p>
        <p>{{{ $saying->quote }}}</p>
        <p>{{{ $saying->content }}}</p>
        <p>{{{ $saying->created_at }}}</p>
        @endforeach
    </div>
    <div class="table-box flex">
        <div class="scroll-box three">
            
        </div>
    </div>
</div>

@endsection