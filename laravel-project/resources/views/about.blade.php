@extends('layouts.app')

@section('content')
<a>投稿画面</a>
    <div>
        <div>なまえ</div>
        <input value="testname" name="user_name" id="user_name" placeholder="タイトルの入力欄"/>
        <div>タイトル</div>
        <input value="test" name="title" id="title" placeholder="タイトルの入力欄"/>
    </div>
    <br>
    <div>
        <textarea name="content" id="content" placeholder="内容の入力"></textarea>
    </div>
    <a href="{{ route('about.store') }}" class="btn btn-outline-secondary" role="button">
        {{ __('投稿') }}
    </a>
@endsection