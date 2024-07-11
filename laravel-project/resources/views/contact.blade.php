@extends('layouts.app')

@section('content')
        {{-- 投稿 --}}
        <div class="bg-white rounded-md mt-1 mb-5 p-3">
        <div class="card-header">
            <a href="{{ route('home') }}">ホーム画面へ</a>
        </div>
        <div class="card-header">
            <a href="{{ route('about') }}">投稿画面へ</a>
        </div>

        @foreach ($posts as $posts)
            {{-- スレッド --}}
            <div>
                <td><br>なまえ：{{ $posts->user_name }}</td>
                <td><br>タイトル：{{ $posts->title }}</td>
                <td><br>{{ $posts->content}}</td>
                <br>
            </div>
        @endforeach

@endsection