@extends('back.events.layout')



@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2> Show events</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('events.index') }}"> Back</a>

            </div>

        </div>

    </div>



    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Slug:</strong>

                {{ $event->slug }}

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Details:</strong>

                {{ $event->details }}

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Image:</strong>

                    <img src="/image/{{ $event->image }}" width="500px">

                </div>

            </div>

        </div>

    </div>

@endsection
