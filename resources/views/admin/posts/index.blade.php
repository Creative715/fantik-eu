@extends('admin.dashboard')

@section('content')
  <div class="container">
    <hr>
<a href="{{route('admin.post.create')}}" class="btn btn-outline-primary"><i class="fas fa-plus-square-o"></i> Створити товар</a>
<table class="table table-striped">
    <thead>
        <th>Назва</th>
        <th class="text-right">Дія</th>

    </thead>
    <tbody>
        @forelse ($posts as $post)
        <tr>
    <td width='50%'>{{$post->title}}</td>

        <td class="text-right">
             <form onsubmit="if(confirm('Видалити?')){ return true }else{ return false }" action="{{route('admin.post.destroy', $post)}}" method="post">

            <input type="hidden" name="_method" value="DELETE">
            @csrf
            <a href="{{route('admin.post.edit', $post)}}" class="btn btn-outline-primary"><i class="fas fa-plus-square-o"></i> Редагувати товар</a>
            <button class="btn btn-outline-danger" type="submit"><i class="fas fa-trash-o"></i> Видалити товар</button>
        </form>
        </td>
    </tr>
        @empty

        @endforelse
    </tbody>
    <tfoot>
        <tr>
            <td colspan="3">
                <ul class="pagination pull-right">
                    {{ $posts->links() }}
                </ul>
            </td>
        </tr>
    </tfoot>
</table>

</div>
@endsection
