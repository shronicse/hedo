@extends('back.projects.layout')



@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2> Show projects</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('projects.index') }}"> Back</a>

            </div>

        </div>

    </div>



    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Slug:</strong>

                {{ $project->slug }}

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Details:</strong>

                {{ $project->details }}

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Image:</strong>

                <img src="/image/{{ $project->image }}" width="500px">

            </div>

        </div>

    </div>

@endsection
