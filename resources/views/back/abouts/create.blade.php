@extends('back.layouts.master')
@section('title','Abouts')
@section('content')

    <div class="card shadow mb-4">
        <div class="card-header  py-3">
            <h6 class="m-0 font-weight-bold text-primary">Add New Element</h6>
        </div>
        <div class="card-body">
            <ul>
                @if($errors->any())
                    @foreach($errors->all() as $error)
                        <li class='text-danger'>{{$error}}</li>
                    @endforeach

                @endif
            </ul>

            <form action="{{route('adminabouts.store')}}" method='post' enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="title" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Image</label>
                    <input type="file" name="image" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Description</label><br>
                    <textarea id="description" name="description" class="form-control" rows="4"></textarea>
                </div>

                <div class="form-group">
                    <button class="btn btn-md btn-primary" type="submit">Add</button>
                </div>

            </form>
        </div>
    </div>

@endsection

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet"/>
@endsection
@section('js')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#description').summernote({
                'height': 300,
            });
        });
    </script>
@endsection
