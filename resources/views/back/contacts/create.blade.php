
@extends('front.master')
@section('content')
    <div class="about-heading">
        <div class="container">
            <h2>To be a member</h2>
        </div>
    </div>
    </div>
    <!-- //banner -->
    <!-- contact -->
    <div class="contact-top">
        <!-- container -->
        <div class="container">
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d158858.18237072596!2d-0.10159865000003898!3d51.52864165000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1436514341845" allowfullscreen></iframe>
            </div>
            <div class="mail-grids">
                <div class="col-md-6 mail-grid-left">
                    <h3>Address</h3>
                    <h5>Cras porttitor imperdiet volutpat nulla malesuada lectus eros <span>ut convallis felis consectetur ut </span></h5>
                    <h4>Headquarters</h4>
                    <p>123 T. Globel Place.
                        <span>CG 09-123</span>
                        London, Ba. 4567
                    </p>
                    <h4>Get In Touch</h4>
                    <p>Telephone: +1 234 567 9871
                        <span>FAX: +1 234 567 9871</span>
                        E-mail: <a href="mailto:info@example.com">mail@example.com</a>
                    </p>
                </div>
                <div class="col-md-6 contact-form">
                    @if ($message = Session::get('success'))

                        <div class="alert alert-success">

                            <p>{{ $message }}</p>

                        </div>

                    @endif
                    @if ($errors->any())

                        <div class="alert alert-danger">

                            <strong style="color: red">Whoops!</strong> There were some problems with your input.<br><br>

                            <ul>

                                @foreach ($errors->all() as $error)

                                    <li style="color: blue">{{ $error }}</li>

                                @endforeach

                            </ul>

                        </div>

                    @endif

                    <form action="{{ route('contacts.store') }}" method="POST" enctype="multipart/form-data">

                        @csrf
                        <input type="text" name="name" placeholder="Name" required="">
                        <input type="email" name="email" placeholder="Email" required="">
                        <input type="text" name="phone" placeholder="Number" required="">
                        <textarea name="address" placeholder="Address" required=""></textarea>
                        <input type="file" name="image"  placeholder="image" required="">

                        <label>Want to be a member ?</label>
                        <input type="submit" value="SEND">
                    </form>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <!-- //container -->
    </div>
    <!-- //contact -->
@endsection

