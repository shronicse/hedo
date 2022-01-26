@extends('dashboard');
@section('maincontent');

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div align="center">

                <h2>All Members</h2>

            </div>

            <div>
                <div class="mx-auto pull-right">
                    <div class="">
                        <form action="{{ route('members.index') }}" method="GET" role="search">

                            <div class="input-group">
                        <span class="input-group-btn mr-2 mt-1">
                            <button class="btn btn-info" type="submit" title="Search projects">
                                <span class="fa fa-search"></span>
                            </button>
                        </span>
                                <input type="text" class="form-control mr-2" name="term" placeholder="Search here" id="term">
                                <a href="{{ route('members.index') }}" class=" mt-1">
                            <span class="input-group-btn">
                                <button class="btn btn-danger" type="button" title="Refresh page">
                                    <span class="fa fa-refresh"></span>
                                </button>
                            </span>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>



    @if ($message = Session::get('success'))

        <div class="alert alert-success">

            <p>{{ $message }}</p>

        </div>

    @endif



    <table class="table table-bordered">

        <tr>

            <th>No</th>
            <th>Image</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>

            <th width="280px">Action</th>

        </tr>

        @foreach ($members as $member)

            <tr>

                <td>{{ ++$i }}</td>
                <td><img src="/image/{{ $member->image }}" width="100px"></td>

                <td>{{ $member->name }}</td>
                <td>{{ $member->email }}</td>
                <td>{{ $member->phone }}</td>
                <td>{{ $member->address }}</td>

                <td>

                    <form action="{{ route('members.destroy',$member->id) }}" method="POST">



                        <a class="btn btn-info" href="{{ route('members.show',$member->id) }}">Show</a>



                        <a class="btn btn-primary" href="{{ route('members.edit',$member->id) }}">Edit</a>



                        @csrf

                        @method('DELETE')



                        <button type="submit" class="btn btn-danger">Delete</button>

                    </form>

                </td>

            </tr>

        @endforeach

    </table>


    {!! $members->links() !!}



@endsection
