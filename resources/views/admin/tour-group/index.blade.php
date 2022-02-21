@extends('admin.dashboard')

@section('content')
<div class="container">
<hr>
<a href="{{route('admin.page.create')}}" class="btn btn-outline-primary"><i class="fas fa-plus-square-o"></i> Створити сторінку</a>
<br><br>
<table class="table table-striped">
    <thead>
        <th>Назва</th>
        <th class="text-right">Дія</th>

    </thead>
    <tbody>
        @forelse ($pages as $page)
        <tr>
    <td width='50%'>{{$page->title}}</td>

        <td class="text-right">
             <form onsubmit="if(confirm('Видалити?')){ return true }else{ return false }" action="{{route('admin.page.destroy', $page)}}" method="post">

            <input type="hidden" name="_method" value="DELETE">
            @csrf
            <a href="{{route('admin.page.edit', $page)}}" class="btn btn-outline-primary"><i class="fas fa-plus-square-o"></i> Редагувати сторінку</a>
            <button class="btn btn-outline-danger" type="submit"><i class="fas fa-trash-o"></i> Видалити сторінку</button>
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
                    {{ $pages->links() }}
                </ul>
            </td>
        </tr>
    </tfoot>
</table>

</div>
@endsection
