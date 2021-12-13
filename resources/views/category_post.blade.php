{{-- @dd($blog) --}}
@extends('layouts.main')
@section('container')
<h1 class="mb-5">Post Category : {{ $category }}</h1>
@foreach ($blog as $row)
<article class="mb-5">
     <a href="/detail/{{ $row['slug'] }}">
          <h2>{{ $row['title'] }}</h2>
     </a>
     <h5>{{ $row['excerpt'] }}</h5>
     <p>{{ $row['body'] }}</p>
</article>
@endforeach
@endsection