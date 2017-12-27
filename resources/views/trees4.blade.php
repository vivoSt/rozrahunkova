@extends('app')
@section('content')



@foreach($orderby as $us22)


<div class="panel panel-default">
    <div class="panel-body"><h3>{{ $us22->id }} {{ $us22->name }} {{ $us22->height }}м   {{ $us22->fname }} {{ $us22->quality }}   {{ $us22->coast }}грн    </h3></div>
</div>





@endforeach
@endsection