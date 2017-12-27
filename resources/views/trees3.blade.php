@extends('app')
@section('content')




@foreach($fetus as $us1)

<div class="panel panel-default">
    <div class="panel-body"><h3>{{$us1->id }} {{$us1->fname }} -  {{$us1->coast }}грн </h3></div>
</div>









@endforeach
<<<<<<< HEAD
@endsection
=======
@endsection
>>>>>>> 47b5215c47ecb6b80cbfbc8da39fbee9b640059c
