
@extends('front.master')
@section('content')

    <div class="about">
        <!-- about-top -->
        <div class="agileits-about-top">
            <div class="container">
                <div class="agileits-about-top-heading">
                    <h3>Who we are</h3>
                </div>
                <div class="agileinfo-top-grids">
                    <div class="col-sm-4 wthree-top-grid">
                        <img src="{{ asset('') }}images/a1.jpg" alt="" />
                        <h4>Curabitur non blandit justo</h4>
                        <p>Pellentesque auctor euismod lectus a pretium. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur ut elit at est tempus volutpat.nascetur ridiculus mus. Curabitur ut elit at est tempus volutpat.</p>
                    </div>
                    <div class="col-sm-4 wthree-top-grid">
                        <img src="{{ asset('') }}images/a2.jpg" alt="" />
                        <h4>Curabitur non blandit justo</h4>
                        <p>Pellentesque auctor euismod lectus a pretium. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur ut elit at est tempus volutpat.nascetur ridiculus mus. Curabitur ut elit at est tempus volutpat.</p>
                    </div>
                    <div class="col-sm-4 wthree-top-grid">
                        <img src="{{ asset('') }}images/a3.jpg" alt="" />
                        <h4>Curabitur non blandit justo</h4>
                        <p>Pellentesque auctor euismod lectus a pretium. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur ut elit at est tempus volutpat.nascetur ridiculus mus. Curabitur ut elit at est tempus volutpat.</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
        <!-- //about-top -->

        <!-- choose -->
        <div class="w3-agileits-choose">
            <div class="container">
                <div class="agileits-about-top-heading agileits-w3layouts-choose-heading">
                    <h3>Why choose us?</h3>
                </div>
                <div class="agile-choose-grids">
                    <div class="col-sm-4 agile-choose-grid">
                        <div class="choose-icon">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </div>
                        <div class="choose-info">
                            <h4>Suspendisse ornare vitae ex nec aliquam</h4>
                            <p>Nunc et massa ut purus porta euismod quis eu erat. Nam ornare faucibus elit sed tempor. Quisque iaculis odio nibh, et auctor tellus rhoncus vel. Maecenas arcu neque, semper eu commodo ut, pharetra vitae erat.</p>
                        </div>
                    </div>
                    <div class="col-sm-4 agile-choose-grid">
                        <div class="choose-icon">
                            <i class="fa fa-cogs" aria-hidden="true"></i>
                        </div>
                        <div class="choose-info">
                            <h4>Suspendisse ornare vitae ex nec aliquam</h4>
                            <p>Nunc et massa ut purus porta euismod quis eu erat. Nam ornare faucibus elit sed tempor. Quisque iaculis odio nibh, et auctor tellus rhoncus vel. Maecenas arcu neque, semper eu commodo ut, pharetra vitae erat.</p>
                        </div>
                    </div>
                    <div class="col-sm-4 agile-choose-grid">
                        <div class="choose-icon">
                            <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
                        </div>
                        <div class="choose-info">
                            <h4>Suspendisse ornare vitae ex nec aliquam</h4>
                            <p>Nunc et massa ut purus porta euismod quis eu erat. Nam ornare faucibus elit sed tempor. Quisque iaculis odio nibh, et auctor tellus rhoncus vel. Maecenas arcu neque, semper eu commodo ut, pharetra vitae erat.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //choose -->
        <!-- team -->
        <div class="team">
            <div class="container">
                <div class="agile_team_grids">
                    <div class="col-md-3 agile_team_grid">
                        <div class="agile_team_grid_main">
                            <img src="{{ asset('') }}images/t2.jpg" alt=" " class="img-responsive">
                            <div class="p-mask">
                                <ul class="top-links two">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="agile_team_grid1">
                            <h3>Riya John</h3>
                            <p>Lorem ipsum</p>
                        </div>
                    </div>
                    <div class="col-md-3 agile_team_grid">
                        <div class="agile_team_grid_main">
                            <img src="{{ asset('') }}images/t1.jpg" alt=" " class="img-responsive">
                            <div class="p-mask">
                                <ul class="top-links two">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="agile_team_grid1">
                            <h3>Williamson </h3>
                            <p>Consectetur </p>
                        </div>
                    </div>
                    <div class="col-md-3 agile_team_grid three">
                        <div class="agile_team_grid_main">
                            <img src="{{ asset('') }}images/t3.jpg" alt=" " class="img-responsive">
                            <div class="p-mask">
                                <ul class="top-links two">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="agile_team_grid1">
                            <h3>Rosy John</h3>
                            <p>Suscipit</p>
                        </div>
                    </div>
                    <div class="col-md-3 agile_team_grid four">
                        <div class="agile_team_grid_main">
                            <img src="{{ asset('') }}images/t4.jpg" alt=" " class="img-responsive">
                            <div class="p-mask">
                                <ul class="top-links two">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="agile_team_grid1">
                            <h3>David Pal</h3>
                            <p>Malesuada </p>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
        <!-- //team -->
    </div>
@endsection

<!-- footer -->


