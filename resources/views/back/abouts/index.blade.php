@extends('back.layouts.master')
@section('title','Abouts')
@section('content')

    <div class="card shadow mb-4">
        <div class="card-header d-flex align-items-center justify-content-end py-3">
            {{--                <h6 class="m-0 font-weight-bold text-primary">About Table</h6>--}}
            <a href="{{route('adminabouts.create')}}" class="btn btn-md w-25 btn-info">+ Add</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th width="20%">Title</th>
                        <th>Image</th>
                        <th >Description</th>
                        <th width="10%" class="text-end">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>{{$about_item->title}}</td>
                        <td>
                            <div class="admin-img-box">
                                <img src="{{asset('front/assets/img')}}/{{$about_item->image}}">
                            </div>
                        </td>
                        <td>{{ Illuminate\Support\Str::limit($about_item->description, 150) }}</td>

                        <td>
                            <div>

                                <a title="Edit" href="{{route('admin.')}}" class="btn btn-info btn-circle btn-sm mr-2">
                                    <i class="fas fa-pen"></i>
                                </a>
                                <a title="Delete" href="#" class="btn btn-danger btn-circle btn-sm">
                                    <i class="fas fa-trash"></i>
                                </a>

                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
