@extends("layouts.main")
@section("content")
<ul>
@foreach($comedyMovie as $m)
<li>{{$m->name}}</li>
@endforeach
</ul>
{{ $comedyMovie->links()}}
@endsection