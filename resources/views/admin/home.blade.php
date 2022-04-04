@extends('layouts.layoutAdmin')
@section('title')
Anasayfa
@endsection

@section('content')

<section class="my-4">
    <div class="container">
        <h1 class="text-info h4">Hoşgeldiniz, {{Auth::user()->name}}</h1>
    </div>
</section>

@endsection