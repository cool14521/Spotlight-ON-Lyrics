@php
    $title = __('User') . ': ' . $user->name;
@endphp
@extends('layouts.my')
@section('content')
    <div class="container">
        <h1>{{ $title }}</h1>

        {{-- 編集・削除ボタン --}}
        <div>
            <a href="{{ url('users/'.$user->id.'/edit') }}" class="btn btn-primary">
                {{ __('Edit') }}
            </a>
            {{-- 削除ボタンは後で正式なものに置き換えます --}}
            @component('components.btn-del')
                @slot('table', 'users')
                @slot('id', $user->id)
            @endcomponent
        </div>

        {{-- ユーザー1件の情報 --}}
        <dl class="row">
            <dt class="col-md-2">{{ __('ID') }}</dt>
            <dd class="col-md-10">{{ $user->id }}</dd>
            <dt class="col-md-2">{{ __('Name') }}</dt>
            <dd class="col-md-10">{{ $user->name }}</dd>
            <dt class="col-md-2">{{ __('E-Mail Address') }}</dt>
            <dd class="col-md-10">{{ $user->email }}</dd>
        </dl>
        {{-- ユーザーの記事一覧 --}}
        <h2>{{ __('Posts') }}</h2>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>{{ __('song_name') }}</th>
                    <th>{{ __('Singer') }}</th>
                    <th>{{ __('Lyrics') }}</th>
                    <th>{{ __('Created') }}</th>
                    <th>{{ __('Updated') }}</th>

                    {{-- 記事の編集・削除ボタンのカラム --}}
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach ($user->posts as $post)
                    <tr>
                        <td>
                            <a href="{{ url('posts/' . $post->id) }}">
                                {{ $post->song_name }}
                            </a>
                        </td>
                        <td>{{ $post->singer }}</td>
                        <td>{{ $post->lyrics }}</td>
                        <td>{{ $post->created_at }}</td>
                        <td>{{ $post->updated_at }}</td>
                        <td nowrap>
                            <a href="{{ url('posts/' . $post->id . '/edit') }}" class="btn btn-primary">
                                {{ __('Edit') }}
                            </a>
                            @component('components.btn-del')
                                @slot('table', 'posts')
                                @slot('id', $post->id)
                            @endcomponent
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        {{ $user->posts->links() }}
    </div>
@endsection
