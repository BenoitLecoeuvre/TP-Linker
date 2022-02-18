@extends('layouts.base')

@section('content')
    <h3>{{ $url->name }}</h3>
    <a href="{{ $url->url }}">{{ $url->url }}</a>
@endsection

<a href="/">Retour à l'accueil</a>