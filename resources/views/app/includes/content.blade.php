<div class="album py-5 bg-light">
    <div class="container">
<h2>Hot Tours</h2>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            @foreach($tours as $tour)
            <div class="col">
                <div class="card shadow-sm">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Tour:  {{ $tour->title }}</text></svg>

                    <div class="card-body">
                        <div class="card-title">{{ $tour->title }}</div>
                        <p class="card-text">{{ $tour->getContentPreview() }}</p>
                        <p class="lead">Price: $ {{ $tour->price }}</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="{{ route('tour.show', $tour->slug) }}" class="btn btn-group-lg btn-outline-secondary">View</a>
                            </div>
                            <div class="mt-3">
                                <span class="badge bg-secondary">{{ $tour->state->likes }} <i class="far fa-thumbs-up"></i></span>
                                <span class="badge bg-secondary">{{ $tour->state->views }}<i class="far fa-eye"></i></span>
                            </div>
                            <small class="text-muted">{{$tour->createdAtForHumans()}}</small>
                        </div>
                        <div class="mt-4">
                            Tour Groups:
                            @foreach ($tour->tour_groups as $tour_group)
                                <a href="{{ route('tour.group', $tour_group->id) }}" class="badge bg-info">{{$tour_group->title}}</a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="mx-auto my-4" style="width: max-content">{{ $tours->links() }}</div>
    </div>
</div>

