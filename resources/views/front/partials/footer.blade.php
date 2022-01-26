
<footer>
    <div class="container">
        <div class="agileits-w3layouts-footer-grids">
            <div class="col-md-4 footer-left">
                <h3>
                    <a href="index.html">HEDO <span>Organization</span></a>
                </h3>
                <div class="footer-social-grids">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 footer-left">
                <h4>Navigation</h4>
                <div class="col-md-6 footer-grid-left">
                    <ul>
                        <li><a class="active" href="{{route('home')}}">Home</a></li>
                        <li><a href="{{route('about')}}">About</a></li>
                        <li><a href="{{route('gallery')}}">Gallery</a></li>
                        <li><a href="{{route('health')}}">Health</a></li>
                    </ul>
                </div>
                <div class="col-md-6 footer-grid-left">
                    <ul>
                        <li><a href="{{ route('education')}}l">Education</a></li>
                        <li><a href="{{url('projects')}}">Project</a></li>
                        <li><a href="{{ route('contact')}}">Contact</a></li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="col-md-4 footer-left">
                <h4>Newsletter</h4>
                <p>Subscribe With Us</p>
                <form action="#" method="post">
                    <input type="email" placeholder="Subscribe" name="Subscribe" required="">
                    <button class="btn1">Go</button>
                </form>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</footer>
<!-- copyright -->
<div class="copyright">
    <div class="container">
        <p>© 2021 HEDO Organization. All rights reserved | Design by <a href="#">SHRITBD</a></p>
    </div>
</div>
<!-- //copyright -->
<script src="{{ asset('') }}js/responsiveslides.min.js"></script>
<script src="{{ asset('') }}js/SmoothScroll.min.js"></script>
<script type="{{ asset('') }}text/javascript" src="js/move-top.js"></script>
<script type="{{ asset('') }}text/javascript" src="js/easing.js"></script>
<!-- here stars scrolling icon -->
<script type="text/javascript">
    $(document).ready(function() {
        /*
            var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
            };
        */

        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<!-- //here ends scrolling icon -->
</body>
</html>
