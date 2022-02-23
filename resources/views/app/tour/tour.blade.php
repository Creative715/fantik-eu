@extends('layouts.app')
@section('content')
<div id="app">
    <div class="container">
        <div class="card">
            <div class="card-body">
                <tour-component></tour-component>

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
</div>
@endsection

