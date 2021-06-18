Hello

<ul>
@foreach($movie as $m)
<li>{{$m->name}}</li>
@endforeach
</ul>
{{ $movie->links()}}
