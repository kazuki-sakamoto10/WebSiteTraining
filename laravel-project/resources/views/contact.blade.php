@extends('layouts.app')

@section('content')
        {{-- 投稿 --}}
        <div class="bg-white rounded-md mt-1 mb-5 p-3">

        @foreach ($posts as $posts)
            {{-- スレッド --}}
            <div>
                <td><br>なまえ：{{ $posts->user_name }}</br></td>
                <td><br>タイトル：{{ $posts->title }}</td></td>
                <td><br>{{ $posts->content}}<br></td>
            </div>
        @endforeach

@endsection