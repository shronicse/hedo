@extends('back.products.layout')



@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Laravel 8 CRUD Example from scratch - ItSolutionStuff.com</h2>

            </div>

            <div class="pull-right">
                <div>
                    <div class="mx-auto pull-right">
                        <div class="">
                            <form action="{{ route('products.index') }}" method="GET" role="search">

                                <div class="input-group">
                        <span class="input-group-btn mr-2 mt-1">
                            <button class="btn btn-info" type="submit" title="Search projects">
                                <span class="fa fa-search"></span>
                            </button>
                        </span>
                                    <input type="text" class="form-control mr-2" name="term" placeholder="Search here" id="term">
                                    <a href="{{ route('products.index') }}" class=" mt-1">
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
                <a class="btn btn-success" href="{{ route('products.create') }}"> Create New Product</a>


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

            <th>Details</th>

            <th width="280px">Action</th>

        </tr>

        @foreach ($products as $product)

            <tr>

                <td>{{ ++$i }}</td>
                <td><img src="/image/{{ $product->image }}" width="100px"></td>

                <td>{{ $product->name }}</td>

                <td>{{ $product->detail }}</td>

                <td>

                    <form action="{{ route('products.destroy',$product->id) }}" method="POST">



                        <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>



                        <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>



                        @csrf

                        @method('DELETE')



                        <button type="submit" class="btn btn-danger">Delete</button>

                    </form>

                </td>

            </tr>

        @endforeach

    </table>



    {!! $products->links() !!}



@endsection
