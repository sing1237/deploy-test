<!-- footer -->
    <footer>
      <div class="container">
          <div class="row">
          <div class="col-lg-4 footer-col footer-copyright">
              <p>Copyright Scoped Insights, 2019</p>
            </div>
          <div class="col-lg-4  footer-col footer-sm">
              <ul>
                  <li><a href="<?php the_field('facebook_link',5); ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                  <li><a href="<?php the_field('insta_link',5); ?>" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                  <li><a href="<?php the_field('linkedin_link',5); ?>" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
              </ul>
          </div>
          <div class="col-lg-4  footer-col footer-policy">
              <p><a href="#">Privacy Policy</a></p>
            </div>

        </div> 
      </div>
    </footer>


    <div class="search-main" style="display: none;">
            <a href="javascript:void(0);" class="search-close-btn" id="close_btn">
                    <svg class="close_svg" width="14" height="14" viewBox="0 0 14 14">
                        <defs>
                        </defs>
                        <g id="Icon_-_Close" data-name="Icon - Close" transform="translate(1 1)">
                            <path id="Shape" d="M12 0L0 12" class="cls-1"/>
                            <path id="Shape-2" d="M0 0l12 12" class="cls-1" data-name="Shape"/>
                        </g>
                    </svg>
            </a>
       <form>
           <div class="search-form">
            <input  type="text" class="form-control" placeholder="Search Here..."/>
            <button class="search_btn" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
           </div>
       </form> 
    </div>


	<!-- jQuery first, then Bootstrap JS. -->
        
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/jquery.min.js"></script>
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/popper.min.js"></script>
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/aos.js"></script>
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/custom.js"></script>
		<script>
		jQuery(document).ready(function(){
			jQuery('body').addClass('full-height');
		})
		</script>
 
<?php wp_footer(); ?>

</body>
</html>
