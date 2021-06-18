@extends("layouts.main")
@section("content")
<ul>
@foreach($horrorMovie as $m)
<li>{{$m->name}}</li>
@endforeach
</ul>
{{ $horrorMovie->links()}}
@endsection