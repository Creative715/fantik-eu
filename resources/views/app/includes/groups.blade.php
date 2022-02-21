@foreach($tour_groups as $tour_group)
    <li><a href="">{{ $tour_group->title }}</a></li>
    <li><hr class="dropdown-divider"></li>
@endforeach
