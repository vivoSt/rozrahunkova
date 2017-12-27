@extends('app')
@section('content')




@foreach($fetus as $us1)

<div class="panel panel-default">
    <div class="panel-body"><h3>{{$us1->id }} {{$us1->fname }} - {{$us1->quality }} {{$us1->coast }} </h3></div>
</div>









@endforeach
@endsection