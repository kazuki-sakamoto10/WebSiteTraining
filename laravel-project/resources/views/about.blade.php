@extends('layouts.app')

@section('content')
<h1>投稿画面</h1>
<form action="{{ route('store') }}" method="POST">
@csrf
    <fieldset>
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
        <button type="submit" class="btn btn-primary">
            {{ __('投稿') }}
        </button>
    </fieldset>
</form>
@endsection