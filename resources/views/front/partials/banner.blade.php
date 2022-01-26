<-- banner -->

<div class="w3layouts-banner-slider">
    <div class="container">
        <div class="slider">
            <div class="callbacks_container">
                <ul class="rslides callbacks callbacks1" id="slider4">
                    <li>
                        <div class="agileits-banner-info">
                            <h3>Lorem ipsum dolor sit amet <span>Nulla massa magna</span></h3>
                            <div class="w3-button">
                                <a href="single.html">More</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="agileits-banner-info">
                            <h3>Donec posuere cursus nibh<span>Ut molestie lectus</span></h3>
                            <div class="w3-button">
                                <a href="single.html">More</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <script src="js/responsiveslides.min.js"></script>
            <script>
                // You can also use "$(window).load(function() {"
                $(function () {
                    // Slideshow 4
                    $("#slider4").responsiveSlides({
                        auto: true,
                        pager:true,
                        nav:true,
                        speed: 500,
                        namespace: "callbacks",
                        before: function () {
                            $('.events').append("<li>before event fired.</li>");
                        },
                        after: function () {
                            $('.events').append("<li>after event fired.</li>");
                        }
                    });

                });
            </script>
        </div>
    </div>
</div>
</div>
