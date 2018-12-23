@php
    $title = __('Posts');
@endphp
@extends('layouts.my')
@section('content')
    <div class="container">
        <h1>{{ $title }}</h1>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>{{ __('song_name') }}</th>
                    <th>{{ __('Singer') }}</th>
                    <th>{{ __('lyrics') }}</th>
                    <th>{{ __('Created') }}</th>
                    <th>{{ __('Updated') }}</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>
                            <a href="{{ url('posts/'.$post->id) }}">{{ $post->song_name }}</a>
                        </td>
                        <td>{{ $post->singer }}</td>
                        <td>{{ $post->lyrics }}</td>
                        <td>{{ $post->created_at }}</td>
                        <td>{{ $post->updated_at }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
