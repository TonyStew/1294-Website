        <div class="body-container footer" style="">
            <footer class="container">
                <div class="row"><h2 id="sponsor-title">At Top Gun Robotics, We Love Our Sponosors</h2></div>
                <div class="row" class="sponsors">
                    <div class="col-sm-4" style="background-image: url();">
                         <img class="img-responsive center-block" id="sponsor-orora" alt="Orora Logo" src="http://orora.com/logo20.png"/>
                    </div>
                    <div class="col-sm-4" style="background-image: url()">                        
                       <img class="img-responsive center-block" id="sponsor-SAE" alt="SAE Northwest Logo" src="https://www.sae.org/images/sections/ms049/NWL_317138991_SAE_Northwest_Logo.jpg"/>
                    </div>
                    <div class="col-sm-4" style="background-image: url('')">
                        <img class="img-responsive center-block" id="sponsor-boeing" alt="Boeing Logo" src="http://www.iptv.org/medialib/media/Boeing_RGB_blue_std_P.JPG"/>
                    </div>
                    <hr>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3 col-md-offset-3 col-lg-offset-3">
                        <div class="">
                            <div class="fb-like fb_iframe_widget" style="padding: 0px 30px 0px 30px;" data-width="450" data-href="https://www.facebook.com/topgunrobotics/" data-layout="standard" data-action="like" data-show-faces="true" data-share="true" fb-xfbml-state="rendered"></div>
                            <hr>
                        </div>

                        <div class="footer-links">
                            <a class="footer-links" title="Contact Us" href="/contact/">Contact Us</a> | <a class="footer-links" title="US First Robotics" href="http://usfirst.org/">US First</a> | <a class="footer-links" title="Washingotn First Robotics" href="http://firstwa.org/">First WA</a>
                        </div>

                    </div>
                </div>
            </footer>
        </div>
        <?php
            /*To Add extra footer tags such as scripts, just set the $ExtraFooterTags Variable before the include statement at the top of the document*/
            if (!empty($ExtraFooterTags)) {
                echo $ExtraFooterTags;
            }
        ?>

        <script src="/subtrees/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="/js/main.min.js"></script>
        <script src="/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <script type="text/javascript" src="/fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
        <script type="text/javascript" src="/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
        <script type="text/javascript">
            $(document).ready(function() {
	            $(".fancybox").fancybox();
                $(".various").fancybox({
		            maxWidth	: 2000,
		            maxHeight	: 2000,
		            fitToView	: false,
		            width		: '80%',
		            height		: '80%',
		            autoSize	: true,
		            closeClick	: false,
		            openEffect	: 'none',
		            closeEffect	: 'none'
	            });
                $(".icds").fancybox({
		            maxWidth	: 800,
		            maxHeight	: 600,
		            fitToView	: false,
		            width		: '70%',
		            height		: '70%',
		            autoSize	: false,
		            closeClick	: false,
		            openEffect	: 'none',
		            closeEffect	: 'none',
                    href        : '#ics-link',
                    modal       : true
	            });
            });
            $('.add-tooltip').tooltip();
        </script>
        <script>
            /*Google Analytics Goes Here*/
        </script>
    </body>
</html>
