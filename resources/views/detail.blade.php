@extends('layouts/main')
@section('container')
<h2>{{ $content["title"] }}</h2>
<p>By teddy juanda in  <a class="text-decoration-none" href="/category/{{ $content->category->slug }}"> {{ $content->category->name }}</a></p>
<h5>{{ $content["penulis"] }}</h5>
<p>{{ $content["body"] }}</p>
<a  class="text-decoration-none" href="/blog">BACK TO POST</a>
    
@endsection