<footer class="section-footer wow fadeIn mainfooter-toolbar " style="visibility: hidden; animation-name: none;">
  <div class="container">
    <div class="row">

      <div class="col-md-4 col-sm-12">
        <h5 class="text-uppercase">Đăng ký nhận tin</h5>
        <p>Quý khách hãy đăng ký nhận bản tin cập nhật hàng tháng về các đợt mở bán sản phẩm mới nhất.</p>

        <form accept-charset="UTF-8" action="/account/contact" class="contact-form" method="post">
          <input name="form_type" type="hidden" value="customer">
          <input name="utf8" type="hidden" value="✓">

          <input required="required" class="" placeholder="Email của bạn" name="contact[email]" type="email" size="18" value="">
          <button type="submit" name="submitNewsletter" class="btn btn-white">Gửi</button>




          <input id="09b311b03a2d441ea88bb9c1b0cc1822" name="g-recaptcha-response" type="hidden" value="">

          <script>
            grecaptcha.ready(function() {
              grecaptcha.execute('6LdD18MUAAAAAHqKl3Avv8W-tREL6LangePxQLM-', {
                action: 'submit'
              }).then(function(token) {
                document.getElementById('09b311b03a2d441ea88bb9c1b0cc1822').value = token;
              });
            });
          </script>
        </form>

        <div class="clearfix"></div>
      </div>


      <div class="col-md-4 col-sm-12">
        <h5 class="text-uppercase">Địa chỉ liên hệ</h5>
        <p>Công ty Ajax</p>

        <p class="info-text">
          <span>
            <img src="http://hstatic.net/998/1000081998/10/2016/4-8/loc-icon.png">
          </span> Hoa Phat, Cam Le, Da Nang.
        </p>


        <p class="info-text">
          <span>
            <img src="http://hstatic.net/998/1000081998/10/2016/4-8/mobile-icon.png">
          </span>
          <strong>Điện thoại:</strong> 1900.636.099
        </p>


        <p class="info-text">
          <span>
            <img src="http://hstatic.net/998/1000081998/10/2016/4-8/fax-icon.png">
          </span>
          <strong>Fax:</strong> 1900.636.099
        </p>


        <p class="info-text">
          <span>
            <img src="http://hstatic.net/998/1000081998/10/2016/4-8/mail-icon.png">
          </span>
          <strong>Email:</strong> thuongtvpd05551@fpt.edu.vn
        </p>

      </div>


      <div class="col-md-4 col-sm-12">
        <h5 class="text-uppercase">Kết nối với chúng tôi</h5>
        <div>
          <div id="sns_facebook_16999696191449829151" class="sns-facebook">
            <div id="fb-root" class=" fb_reset">
              <div class="facebook-fanbox" style="overflow-x : hidden;">
                <div class="fb-like-box fb_iframe_widget">
                  <span style="vertical-align: bottom; width: 262px; height: 130px;">
                    <iframe name="f3a1ec4d4440e74" width="262px" height="1000px" data-testid="fb:like_box Facebook Social Plugin" title="fb:like_box Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v12.0/plugins/like_box.php?app_id=363772567412181&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df2cc97fd3705a28%26domain%3Dlux-residence.myharavan.com%26is_canvas%3Dfalse%26origin%3Dhttps%253A%252F%252Flux-residence.myharavan.com%252Ff26c91ebb92083c%26relation%3Dparent.parent&amp;color_scheme=light&amp;container_width=360&amp;header=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Fharavan.official&amp;locale=vi_VN&amp;sdk=joey&amp;show_border=false&amp;show_faces=true&amp;stream=false&amp;width=262" style="border: none; visibility: visible; width: 262px; height: 130px;" class="">
                    </iframe>
                  </span>
                </div>
              </div>
            </div>
          </div>


        </div>
      </div>

    </div>
  </div>
  <div class="container text-center">
    <hr>
    <h6 class="text-uppercase">thuongtvpd05551@fpt.edu.vn <a target="_blank" href=".">FPT Polytechnic</a></h6>
  </div>
</footer>

<script>
  if ($(window).width() >= 768) {
    var chatbot_src = "https://assets.harafunnel.com/widget/108520260558644.js";
    $("head").append('<!-- harafunnel --><script src="' + chatbot_src + '" ' + 'async="async"><\/script>');
  } else {

    (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s);
      js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk/xfbml.customerchat.js#xfbml=1&version=v2.0";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

  }
</script>


<!--Scroll to Top-->
<div class="visible-xs" style="display: block; position: fixed; right: 0; bottom: 0; z-index: 20;">
  <a href="#" class="scrollToTop scrollToTop-left" style="display: inline;">
    <i class="fa fa-chevron-up"></i>
  </a>
</div>

<script>
  jQuery(document).ready(function() {
    //Check to see if the window is top if not then display button
    jQuery(window).scroll(function() {
      if ($(this).scrollTop() > 100) {
        $('.scrollToTop').fadeIn();
      } else {
        $('.scrollToTop').fadeOut();
      }
    });

    //Click event to scroll to top
    jQuery('.scrollToTop').click(function() {
      $('html, body').animate({
        scrollTop: 0
      }, 600);
      return false;
    });

  });
</script>

<script>
  new WOW().init();
</script>

</body>

</html>