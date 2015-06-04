@extends('app')

@section('content')


        <div class="row">
            <div class="col-md-1">No</div>
            <div class="col-md-1">Title</div>
            <div class="col-md-1">Page Slug</div>
            <div class="col-md-1">Created Date</div>
            <div class="col-md-1">Updated Date</div>
            <div class="col-md-1">Status</div>
            <div class="col-md-1">operation</div>
        </div>
@foreach($pages as $page)

            <div class="row">
                <div class="col-md-1">{{$page->id}}</div>
                <div class="col-md-1">{{$page->title}}</div>
                <div class="col-md-1">{{$page->slug}}</div>
                <div class="col-md-1">{{$page->created_at}}</div>
                <div class="col-md-1">{{$page->created_at}}</div>
                <div class="col-md-1">{{$page->active}}</div>
                <div class="col-md-1"><a href="{{ action('PagesController@edit',[$page->id])}}">Edit</a></div>
            </div>

        @endforeach
@endsection



