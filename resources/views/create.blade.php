@extends('app')
@section('content')
<center><h1>Добавить дерево</h1></center>
<form class="form-horizontal" action="{{route('treescontrol.store')}}" method="post">
{{ csrf_field() }}
<label for="">Название</label>
<input type="text" name="name" placeholder="Назание дерева" value="" class="form-control" required>
<hr />
<label for=""> Рост </label>
<input type="text" name="height" placeholder="высота в метрах" value="" class="form-control" required>
<hr />
<label for="">Состояние здоровья</label>
<input type="text" name="stan" placeholder="Здорове або Хворе" value="" class="form-control" required>
<hr />
<label for="">возраст</label>
<input type="text" name="age" placeholder="сколько этому ебаному дереву лет" value="" class="form-control" required>
<hr />


<input class="btn btn-primary" type="submit" value="Добавить">
</form>


@endsection
