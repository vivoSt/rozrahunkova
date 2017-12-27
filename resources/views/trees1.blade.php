@extends('app')
@section('content')



@foreach($trees as $us)

<div class="panel panel-default">
    <div class="panel-body"><h3>{{$us->id }} {{$us->name }} - {{$us->height }}м  </h3></div>
</div>









@endforeach

@endsection