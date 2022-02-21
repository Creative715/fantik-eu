@extends('admin.dashboard')

@section('content')
  <div class="container">
    <hr>
<a href="{{route('admin.tour.create')}}" class="btn btn-outline-primary"><i class="fas fa-plus-square-o"></i> Create Tour</a>
<table class="table table-striped">
    <thead>
        <th>Title</th>
        <th class="text-right">Дія</th>

    </thead>
    <tbody>
        @forelse ($tours as $tour)
        <tr>
    <td width='50%'>{{$tour->title}}</td>

        <td class="text-right">
             <form onsubmit="if(confirm('Видалити?')){ return true }else{ return false }" action="{{route('admin.tour.destroy', $tour)}}" method="tour">

            <input type="hidden" name="_method" value="DELETE">
            @csrf
            <a href="{{route('admin.tour.edit', $tour)}}" class="btn btn-outline-primary"><i class="fas fa-plus-square-o"></i> Edit</a>
            <button class="btn btn-outline-danger" type="submit"><i class="fas fa-trash-o"></i> Delete</button>
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
                    {{ $tours->links() }}
                </ul>
            </td>
        </tr>
    </tfoot>
</table>

</div>
@endsection
