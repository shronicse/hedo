@extends('dashboard')

@section('maincontent')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div align="center">

                <h2>All contacts</h2>

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

        @foreach ($contacts as $contact)

            <tr>

                <td>{{ ++$i }}</td>
                <td><img src="/image/{{ $contact->image }}" width="100px"></td>
                <td>{{ $contact->name }}</td>
                <td>{{ $contact->email }}</td>
                <td>{{ $contact->phone }}</td>
                <td>{{ $contact->address }}</td>

                <td>

                    <form action="{{ route('contacts.destroy',$contact->id) }}" method="POST">



                        <a class="btn btn-info" href="{{ route('contacts.show',$contact->id) }}">Show</a>



                        <a class="btn btn-primary" href="{{ route('contacts.edit',$contact->id) }}">Add</a>



                        @csrf

                        @method('DELETE')



                        <button type="submit" class="btn btn-danger">Delete</button>

                    </form>

                </td>

            </tr>

        @endforeach

    </table>



    {!! $contacts->links() !!}



@endsection
