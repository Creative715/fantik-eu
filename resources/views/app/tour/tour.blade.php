@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title"> {{ $tour->title }}</h3>
                <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Tour:  {{ $tour->title }}</text></svg>
                <hr>
                <p class="card-text"> {!! $tour->content !!}</p>
        <div class="mt-3">
            <span class="badge bg-secondary">{{ $tour->state->likes }} <i class="far fa-thumbs-up"></i></span>
            <span class="badge bg-secondary">{{ $tour->state->views }}<i class="far fa-eye"></i></span>
        </div>
        <small class="text-muted">{{$tour->createdAtForHumans()}}</small>
        <hr>
        <h3>Leave feedback</h3>
                <form>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Name</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Massage</label>
                        <textarea type="text" class="form-control"></textarea>
                    </div>
                    <button type="submit" class="btn btn-outline-secondary">Submit</button>
                </form>
        @foreach($tour->comments as $comment)
            <div class="toast-header">
                <strong>{{ $comment->subject }}</strong>
                <small class="text-muted">{{$comment->createdAtForHumans()}}</small>
            </div>
            <div class="toast-body">{{ $comment->body }}</div>
        @endforeach
        </div>
    </div>
    </div>
@endsection
