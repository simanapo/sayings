@extends('layouts.layout')

@section('content')

<div class="container">
    <div class="flex">
        <h1 class="header">名言一覧</h1>
        <div class="btn-box">
            <a class="btn-flat main-btn" href="{{ action('SayingsController@create', Request::all()) }}">新規登録</a>
        </div>
    </div>

        @foreach ($sayings as $saying)
            
        

    <table class="company">
<tbody>
<tr>
<th class="arrow_box">名言</div></th>
<td>{{{ $saying->saying }}}</td>
</tr>
<tr>
<th class="arrow_box">引用元</th>
<td>
{{{ $saying->quote }}}
</td>
</tr>
<tr>
<th>名言にまつわるストーリー</th>
<td>
{{{ $saying->content }}}
</td>
</tr>
</tbody>
</table>
@endforeach
    <div class="table-box flex">
        <div class="scroll-box three">
            
        </div>
    </div>
</div>

@endsection