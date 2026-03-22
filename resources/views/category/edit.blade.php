@extends('layouts.admin')

@section('content')
<h2>Edit Category</h2>

<form action="{{route('category.update',$category->id)}}" method="POST" enctype="multipart/form-data">
@csrf

Name: <input name="name" value="{{$category->name}}"><br><br>
Description:
<textarea name="description">{{$category->description}}</textarea><br><br>

Parent:
<select name="parent_id">
    <option value="">None</option>
    @foreach($parents as $p)
        <option value="{{$p->id}}" 
        {{$category->parent_id==$p->id?'selected':''}}>
        {{$p->name}}
        </option>
    @endforeach
</select><br><br>

<button type="submit">Update</button>
</form>
@endsection