<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package レナ_Devs_PRO
 */

?>


    <!--======= Contact Info =========-->
    <section class="contact-info">
      <div class="container"> 
        
        <!--Address-->
        <ul class="row">
          <li class="col-md-3"> <i class="ion-ios-location-outline"></i>
            <h5>Address</h5>
            <p>1800 Abbot Kinney Blvd. Unit D & E
              Venice, CA 90291</p>
          </li>
          
          <!-- Hot line -->
          <li class="col-md-3"> <i class="ion-iphone"></i>
            <h5>Hotline</h5>
            <p>+00-0122-123-0089</p>
          </li>
          
          <!--Email Contact-->
          <li class="col-md-3"> <i class="ion-ios-email-outline"></i>
            <h5>Email contact</h5>
            <p>medikal@gmail.com</p>
            <p> contact@medikalclinic.com</p>
          </li>
          
          <!--Website-->
          <li class="col-md-3"> <i class="ion-earth"></i>
            <h5>Website</h5>
            <p>www.medikalclinic.com </p>
          </li>
        </ul>
      </div>
    </section>
  </div>
  <!--======= FOOTER =========-->
  <footer>
    <div class="container"> 
      
      <!-- Row -->
      <div class="row"> 
        
        <!-- Latest Tweet -->
        <div class="col-md-3">
          <div class="latest-tweet">
            <h5>Latest tweets</h5>
            <ul>
              
              <!--Tweet 1 -->
              <li>
                <p><span>@medikal</span> Sweets and Bakers 
                  WordPress Theme' on @EnvatoMarket by themefore<a href="#."> http://t.co/we8Kf0</a></p>
                <span class="date"> - Thursday April 9, 2015</span> </li>
              
              <!--Tweet 2 -->
              <li>
                <p><span>@medikal</span> In hendrerit in molestie consequat in <a href="#."> http://t.co/we8Kf0</a></p>
                <span class="date"> - Thursday April 9, 2015</span> </li>
              
              <!--Tweet 3 -->
              <li>
                <p><span>@medikal</span> Duis autem vel eum iriure <span>@medikal</span> dolor in hendrerit in molestie consequat <a href="#."> http://t.co/we8Kf0</a></p>
                <span class="date"> - Thursday April 9, 2015</span> </li>
            </ul>
          </div>
        </div>
        
        <!-- About Us -->
        <div class="col-md-6">
          <div class="small-info"> <img src="images/logo-white.png" alt="">
            <p>We work in a friendly and efficient using the latest technologies and sharing our expertise to make a diagnosis and implement cutting-edge therapies.</p>
            <ul class="social_icons">
              <li class="facebook"><a href="#."><i class="fa fa-facebook"></i> </a></li>
              <li class="twitter"><a href="#."><i class="fa fa-twitter"></i> </a></li>
              <li class="linkedin"><a href="#."><i class="fa fa-linkedin"></i> </a></li>
            </ul>
            
            <!-- News Letter -->
            <h5>register newsletter</h5>
            <form>
              <input type="email" placeholder="Enter your email here" required>
              <button type="submit"> Subscribe</button>
            </form>
          </div>
        </div>
        
        <!-- Patient Guide -->
        <div class="col-md-3">
          <div class="links text-right">
            <h5>Patient Guide</h5>
            <ul>
              <li><a href="#."> Choosing a doctor</a></li>
              <li><a href="#."> Health journals</a></li>
              <li><a href="#."> Insurance converage</a></li>
              <li><a href="#."> Talking to your doctor</a></li>
              <li><a href="#."> Medikal error</a></li>
            </ul>
            
            <!-- Timing -->
            <div class="timing">
              <h5>opening hours</h5>
              <p>Mon to Fri <span> 8:00 am to 7:00pm</span></p>
              <p>Sun & Sat <span>9:00 am to 5:00pm</span></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Rights -->
    <div class="rights">
      <p>© 2015 Medikal. Made with by M_Adnan </p>
    </div>
  </footer>
</div>
<!-- Wrap End --> 

<?php wp_footer(); ?>

</body>
</html>
