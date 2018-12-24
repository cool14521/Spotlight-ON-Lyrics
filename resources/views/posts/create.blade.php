@php
    $title = __('Create Post');
@endphp
@extends('layouts.my')
@section('content')
    <div class="container">
        <h1>{{ $title }}</h1>
        <form action="{{ url('posts') }}" method="post">
            @csrf
            @method('POST')
            <div class="form-group">
                <label for="song_name">{{ __('song_name') }}</label>
                <input id="song_name" type="text" class="form-control" name="song_name" required autofocus>
            </div>
            <div class="form-group">
                <label for="singer">{{ __('Singer') }}</label>
                <textarea id="singer" class="form-control" name="singer" rows="8" required></textarea>
            </div>
            <div class="form-group">
                <label for="lyrics">{{ __('Lyrics') }}</label>
                <textarea id="lyrics" class="form-control" name="lyrics" rows="8" required></textarea>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">{{ __('Submit') }}</button>
        </form>
    </div>
@endsection
