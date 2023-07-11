        <!-- main-footer -->
        <footer class="main-footer p_relative bg-color-2">
        	<div class="icon-layer"><img src="<?php echo base_url();?>assets/images/icons/download.png" alt=""
        			width="350px"></div>
        	<div class="footer-top p_relative d_block">
        		<div class="auto-container">
        			<div class="row clearfix">
        				<div class="col-lg-4 col-md-6 col-sm-12 footer-column">
        					<div class="footer-widget logo-widget">
        						<figure class="footer-logo"><a href="<?php echo base_url();?>home"><img
        									src="<?php echo base_url();?>uploads/<?php echo $profile->footer_logo;?>"
        									alt=""></a>
        						</figure>
        						<div class="text">
        							<p>Aprtel is a Consultancy firm providing services across various industries and
        								across the Globe, with focus on Oil & Gas.</p>
        						</div>
        					</div>
        				</div>
        				<div class="col-lg-3 col-md-6 col-sm-12 footer-column">
        					<div class="footer-widget links-widget ml_100">
        						<div class="widget-title">
        							<h3>Links</h3>
        						</div>
        						<div class="widget-content">
        							<ul class="links-list clearfix">
        								<li><a href="<?php echo base_url();?>about">About</a></li>
        								<li><a href="<?php echo base_url();?>services">Services</a></li>
        								<li><a href="<?php echo base_url();?>projects">Projects</a></li>
        								<li><a href="<?php echo base_url();?>contact">Location</a></li>
        								<li><a href="<?php echo base_url();?>blogs">Article</a></li>
        							</ul>
        						</div>
        					</div>
        				</div>
        				<div class="col-lg-2 col-md-6 col-sm-12 footer-column">
        					<div class="footer-widget links-widget">
        						<div class="widget-title">
        							<h3>Services</h3>
        						</div>
        						<div class="widget-content">
        							<ul class="links-list clearfix">
        								<?php if((sizeof($service))>0) {foreach($service as $service){?>
        								<li><a
        										href="<?php echo base_url();?>services"><?php echo $service->title; ?></a>
        								</li>
        								<?php }}?>
        							</ul>
        						</div>
        					</div>
        				</div>
        				<div class="col-lg-3 col-md-6 col-sm-12 footer-column">
        					<div class="footer-widget contact-widget">
        						<div class="widget-title">
        							<h3>Contacts</h3>
        						</div>
        						<div class="widget-content">
        							<ul class="info-list clearfix">
        								<li><?php echo $profile->address; ?></li>
        								<li><a href="tel:<?php echo $profile->phone; ?>">+91
        										<?php echo $profile->phone; ?></a></li>
        								<li><a
        										href="mailto:<?php echo $profile->email; ?>"><?php echo $profile->email; ?></a>
        								</li>
        							</ul>
        						</div>
        					</div>
        				</div>
        			</div>
        		</div>
        	</div>
        	<div class="footer-bottom p_relative">
        		<div class="auto-container">
        			<div class="bottom-inner p_relative">
        				<div class="copyright">
        					<p><a href="<?php echo base_url();?>home">Aprtel</a> &copy; 2022 All Right Reserved</p>
        				</div>
        				<ul class="footer-nav">
        					<li><a href="#">Terms of Service</a></li>
        					<li><a href="#">Privacy Policy</a></li>
        				</ul>
        			</div>
        		</div>
        	</div>
        </footer>
        <!-- main-footer end -->



        <!--Scroll to top-->
        <div class="scroll-to-top">
        	<div>
        		<div class="scroll-top-inner">
        			<div class="scroll-bar">
        				<div class="bar-inner"></div>
        			</div>
        			<div class="scroll-bar-text">Go To Top</div>
        		</div>
        	</div>
        </div>
        <!-- Scroll to top end -->

        </div>


        <!-- jequery plugins -->
        <script src="<?php echo base_url();?>assets/js/jquery.js"></script>
        <script src="<?php echo base_url();?>assets/js/popper.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/plugins.js"></script>
        <script src="<?php echo base_url();?>assets/js/owl.js"></script>
        <script src="<?php echo base_url();?>assets/js/wow.js"></script>
        <script src="<?php echo base_url();?>assets/js/validation.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery.fancybox.js"></script>
        <script src="<?php echo base_url();?>assets/js/appear.js"></script>
        <script src="<?php echo base_url();?>assets/js/scrollbar.js"></script>
        <script src="<?php echo base_url();?>assets/js/isotope.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery.nice-select.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery-ui.js"></script>
        <script src="<?php echo base_url();?>assets/js/parallax-scroll.js"></script>


        <!-- main-js -->
        <script src="<?php echo base_url();?>assets/js/script.js"></script>

        </body><!-- End of .page_wrapper -->

        </html>
