@extends("layouts.main")
@section("content")
<ul>
@foreach($dramaMovie as $m)
<li>{{$m->name}}</li>
@endforeach
</ul>
{{ $dramaMovie->links()}}
@endsection