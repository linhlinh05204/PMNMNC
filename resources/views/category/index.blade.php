@extends('layouts.admin')

@section('content')
<h2>Danh sách Category</h2>

<a href="{{route('category.create')}}" class="btn btn-primary mb-3">Thêm mới</a>

<table class="table table-bordered">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Parent</th>
    <th>Action</th>
</tr>

@foreach($categories as $c)
<tr>
    <td>{{$c->id}}</td>
    <td>{{$c->name}}</td>
    <td>{{$c->parent->name ?? 'None'}}</td>
    <td>
        <a href="{{route('category.edit',$c->id)}}" class="btn btn-warning">Edit</a>
        <form action="{{ route('category.destroy',$c->id) }}" method="POST" class="delete-form" style="display:inline">
        @csrf
        @method('DELETE')
        <button type="button" class="btn btn-danger btn-delete">
            Delete
        </button>
        </form>

    </td>
</tr>
@endforeach
</table>
@endsection

@section('scripts')
<script>
document.querySelectorAll('.btn-delete').forEach(btn => {
    btn.addEventListener('click', function() {

        let form = this.closest('.delete-form');

        Swal.fire({
            title: 'Bạn chắc chắn muốn xoá?',
            text: "Không thể hoàn tác!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Xoá',
            cancelButtonText: 'Huỷ'
        }).then((result) => {
            if (result.isConfirmed) {
                form.submit();
            }
        });

    });
});
</script>
@endsection
