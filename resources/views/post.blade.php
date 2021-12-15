{{-- @dd($blog) --}}
@extends('layouts.main')
@section('container')
@foreach ($blog as $row)
<article class="mb-5 border-bottom">
     <a class="text-decoration-none" href="/detail/{{ $row['slug'] }}">
          <h2>{{ $row['title'] }}</h2>
     </a>
<p>By <a class="text-decoration-none" href="/Categories">{{ $row->user->name }}</a> in  <a class="text-decoration-none" href="/category/{{ $row->category->slug }}"> {{ $row->category->name }}</a></p>
     <h5>{{ $row['excerpt'] }}</h5>
     <p>{{ $row['body'] }}</p>
     <a href="/detail/{{ $row['slug'] }}"  class="text-decoration-none" >Red More</a>
</article>
@endforeach
@endsection