@foreach ($tour_groups as $tour_group)

    <option value="{{$tour_group->id ?? ''}}"

            @isset($tour->id)
            @foreach ($tour->tour_groups as $TourGroupTours)
            @if ($tour_group->id == $TourGroupTours->id)
            selected=""
        @endif
        @endforeach
        @endisset

    >
        {!! $delimiter or '' !!}{{$tour_group->title ?? ''}}
    </option>

@endforeach
