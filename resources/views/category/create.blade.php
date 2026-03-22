@extends('layouts.admin')

@section('content')

<h2>Create Category</h2>
<form action="{{route('category.store')}}" class="card card-warning" method="POST" enctype="multipart/form-data">
@csrf
Name: <input name="name"><br><br>
Description:
<textarea name="description"></textarea><br><br>
Parent:
<select name="parent_id">
    <option value="">None</option>
    @foreach($parents as $p)
        <option value="{{$p->id}}">{{$p->name}}</option>
    @endforeach
</select><br><br>
<button type="submit" class="btn btn-block bg-gradient-primary btn-sm">Create</button>
</form>
@endsection