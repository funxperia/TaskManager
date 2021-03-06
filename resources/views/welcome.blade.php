@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @if($projects)
            @foreach($projects as $project)
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <ul class="icon-bar">
                            <li>{!! Form::open(['route' => ['projects.destroy',$project -> id],'method' => 'DELETE']) !!} <button type="submit" class="btn"><i class="fa fa-btn fa-close"></i></button>{!! Form::close() !!}</li>
                            <li>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#editModal-{{$project -> id}}">
                                    <i class="fa fa-btn fa-cog"></i>
                                </button>
                            </li>
                        </ul>
                        <a href="{{route('projects.show',$project -> name)}}">
                        <img src="{{asset('thumbnails/'.$project -> thumbnail)}}" alt="{{$project -> name}}">
                        </a>
                        <div class="caption">
                            <a href="{{route('projects.show',$project -> name)}}"><h4 class="text-center">{{$project -> name}}</h4></a>
                        </div>
                    </div>
                    @include('projects._editModal')
                </div>

            @endforeach
        @endif
        <div class="col-md-10 col-md-offset-1">
            @include('projects._createProjectModel')
        </div>
    </div>
</div>
@endsection
@section('customJS')
    <script>
        $(document).ready(function(){
            $('.icon-bar').hide();
            $('.thumbnail').hover(function(){
                $(this).find('.icon-bar').toggle();
            });
        });
    </script>
@endsection
