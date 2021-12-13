@extends('layouts/main')
@section('container')
@foreach ($cat as $row)
<ul>
    <li>
            <a class="text-decoration-none" href="/category/{{ $row->slug }}"> <h1 >{{ $row->name }}</h1></a>
    </li>
</ul>

@endforeach
@endsection