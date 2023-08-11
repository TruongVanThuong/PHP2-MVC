<title>
  HOME
</title>
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

require "../controller/productController.php";
?>


<!--  top nav bar  -->
<?php
include "../inc/navbarTop.php";
?>


<section class="section-banner wow fadeIn" id="trang-chu-section" style="visibility: visible; animation-name: fadeIn;">
  <div id="carousel-example-generic" class="carousel slide banner-carousel" data-ride="carousel">

    <!-- Wrapper for slides -->
    <div class="banner" style="position: relative;">
      <div class="slideShow">

        <img id="anh" name="imgs" src="../public/img/slide/slide-1.png" alt="">
        <button class="btn-1" onclick="Prev()">❮</button>
        <button class="btn-2" onclick="Next()">❯</button>
      </div>
    </div>

  </div>
</section>
<!--Kết thúc slidershow-->


<!-- Gioi Thieu -->
<section style="padding-top: 0px;" class="sect_introduce" id="sect_introduce">
  <div class="container">
    <div class="title-block text-center wow fadeIn" style="visibility: hidden; animation-name: none;">
      <h2 class="text-uppercase">Giới Thiệu</h2>
    </div>

    <div class="info_introduct">
      <div class="trietLy">
        <i class="i">"Lợi ích khách hàng là then chốt</i> <br>
        <i class="i">Chất lượng sản phẩm là trọng tâm</i> <br>
        <i class="i">Thu nhập nhân viên là trách nhiệm</i> <br>
        <i class="i">Sáng tạo đổi mới là tất yếu</i> <br>
        <i class="i">Cam kết hành động là nghĩa vụ."</i>
      </div>

      <div class="tamNhin">
        <h4>TAM NHIN</h4>
        <p>Trở thành đơn vị cung cấp vật liệu và thi công các hạng mục về Đá Granit, Marble cá loại Gạch ốp vỉa hè hàng đầu tại Việt Nam vào năm 2022. Với hơn 10.000 sản phẩm và các chi nhánh của công ty sẽ có mặt tại tất cả các khu vực trọng yếu của nước Việt Nam. Mở rộng hoạt động tại các nước Đông Nam Á như: Campuchia, Lào, Thái Lan, Myanmar…</p>
        <img src="../public/img/pages/gia-tri-cot-loi-1.jpeg" alt="">
      </div>
    </div>

    <div class="link_introduce">
      <a href="./introduce.php">xem them -> ...</a>
    </div>
  </div>
</section>

<!-- END Gioi Thieu -->

<section class="section-grey section-prize section-parallax" id="du-an-section">
  <div class="container-fluid">
    <h2 class="text-uppercase text-center">Tinh hoa kiến trúc trong từng đường nét</h2>
    <div id="prizeCarousel" class="prize-carousel carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">

        <li data-target="#prizeCarousel" data-slide-to="0" class="active"></li>


        <li data-target="#prizeCarousel" data-slide-to="1" class=""></li>


        <li data-target="#prizeCarousel" data-slide-to="2" class=""></li>


        <li data-target="#prizeCarousel" data-slide-to="3" class=""></li>


        <li data-target="#prizeCarousel" data-slide-to="4" class=""></li>

      </ol>
      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">

        <div class="item active">
          <div class="prize-item-holder">
            <div class="col-md-6 text-center">
              <img class="img-responsive center-block" src="//theme.hstatic.net/1000081998/1000533439/14/project_img_1.png?v=38">
              <h6 class="text-uppercase">Thiết kế cảnh quan khu đô thị tốt nhất thế giới 2015</h6>
              <h4 class="text-uppercase">Tổ chức Giải thưởng Bất Động Sản Quốc tế</h4>
            </div>
          </div>
        </div>


        <div class="item">
          <div class="prize-item-holder">
            <div class="col-md-6 text-center">
              <img class="img-responsive center-block" src="//theme.hstatic.net/1000081998/1000533439/14/project_img_2.png?v=38">
              <h6 class="text-uppercase">Dự án xanh hàng đầu Đông Nam Á 2016</h6>
              <h4 class="text-uppercase">Giải thưởng Bất động sản Đông Nam Á</h4>
            </div>
          </div>
        </div>


        <div class="item">
          <div class="prize-item-holder">
            <div class="col-md-6 text-center">
              <img class="img-responsive center-block" src="//theme.hstatic.net/1000081998/1000533439/14/project_img_3.png?v=38">
              <h6 class="text-uppercase">Dự án phát triển phức hợp tốt nhất Việt Nam 2016</h6>
              <h4 class="text-uppercase">Giải thưởng Bất Động Sản Châu Á Thái Bình Dương</h4>
            </div>
          </div>
        </div>


        <div class="item">
          <div class="prize-item-holder">
            <div class="col-md-6 text-center">
              <img class="img-responsive center-block" src="//theme.hstatic.net/1000081998/1000533439/14/project_img_4.png?v=38">
              <h6 class="text-uppercase">Công trình kiến trúc xanh Việt Nam 2012</h6>
              <h4 class="text-uppercase">Hội kiến trúc sư Việt Nam</h4>
            </div>
          </div>
        </div>


        <div class="item">
          <div class="prize-item-holder">
            <div class="col-md-6 text-center">
              <img class="img-responsive center-block" src="//theme.hstatic.net/1000081998/1000533439/14/project_img_5.png?v=38">
              <h6 class="text-uppercase">Dự án phát triển phức hợp tốt nhất Việt Nam 2016</h6>
              <h4 class="text-uppercase">Hội kiến trúc sư Việt Nam</h4>
            </div>
          </div>
        </div>

      </div>

      <!-- Controls -->
      <a class="left carousel-control" href="#prizeCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#prizeCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>
  </div>
</section>

<!--Kết thúc dự án-->

<section class="section-product grid-section" id="san-pham-section">
  <div class="container">
    <div class="title-block text-center wow fadeIn" style="visibility: hidden; animation-name: none;">
      <h2 class="text-uppercase">
        Sản phẩm
      </h2>
    </div>
    <a class="show_allProd" href="./products.php">>> Xem tat ca</a>
    <div class="row equalizer equalizer-xs wow fadeIn" style="visibility: hidden; animation-name: none;">

      <!-- PHP ========== -->
      <?php
      $echo_selet = selet_product_s();
      ?>
      <!-- END PHP ============ -->
      <!-- <div class="col-md-4 col-sm-6 col-xs-6 ver-block watch">
        <a class="fancybox" rel="gallery1" title="Căn hộ sky45" href="https://hstatic.net/998/1000081998/1/2016/4-11/pr4.jpg">
          <div class="overlay">
            <img class="img-responsive" src="//hstatic.net/998/1000081998/1/2016/4-11/pr4_large.jpg" alt=" Căn hộ sky45 ">
            <div class="button_text hidden-md hidden-xs hidden-sm">
              <h4 class="text-uppercase">Xem hình ảnh</h4>
            </div>
          </div>
        </a>
        <h6 class="text-uppercase"><a class="fancybox" rel="gallery1" title="Căn hộ sky45" href="https://hstatic.net/998/1000081998/1/2016/4-11/pr4.jpg"></a><a href="../products/product_detail.php">Căn hộ sky45</a></h6>
        <p>Căn hộ 45m2 +1 đã hoá giải bài toán không gian một cách khoa học, thông minh, là lựa chọn thích hợp cho những gia đình trẻ với 1 phòng ngủ, 1 nhà vệ sinh, ban công và đặc biệt là một không gian đa năng dễ dàng sáng tạo thành phòng làm việc hay phòng ngủ phụ.</p>
        <p><strong>Diện tích:</strong> 45m2</p>
        <p><strong>Số phòng:</strong> 2 Phòng ngủ</p>
        <a href="../products/product_detail.php"><i class="fa fa-angle-right"></i> xem thêm</a>
      </div>

      <div class="col-md-4 col-sm-6 col-xs-6 ver-block watch">
        <a class="fancybox" rel="gallery1" title="CĂN HỘ SKY45 STUDIO" href="https://hstatic.net/998/1000081998/1/2016/4-11/pr1.jpg">
          <div class="overlay">
            <img class="img-responsive" src="//hstatic.net/998/1000081998/1/2016/4-11/pr1_large.jpg" alt=" CĂN HỘ SKY45 STUDIO ">
            <div class="button_text hidden-md hidden-xs hidden-sm">
              <h4 class="text-uppercase">Xem hình ảnh</h4>
            </div>
          </div>
        </a>
        <h6 class="text-uppercase"><a class="fancybox" rel="gallery1" title="CĂN HỘ SKY45 STUDIO" href="https://hstatic.net/998/1000081998/1/2016/4-11/pr1.jpg"></a><a href="../products/product_detail.php">CĂN HỘ SKY45 STUDIO</a></h6>
        <p>Căn hộ 45m2 studio sở hữu lối thiết kế hiện đại, thời thượng, toàn bộ phần bếp, phòng khách và phòng ngủ không có tường ngăn cách như ở các căn hộ truyền thống. Tất cả đều ở trong một mặt phẳng không gian để chủ nhân thoải mái sử dụng, biến tấu theo ý đồ riêng của mình.</p>
        <p><strong>Diện tích:</strong> 45m2</p>
        <p><strong>Số phòng:</strong> 1 Phòng Ngủ - 1WC</p>
        <a href="../products/product_detail.php"><i class="fa fa-angle-right"></i> xem thêm</a>
      </div>

      <div class="col-md-4 col-sm-6 col-xs-6 ver-block watch">
        <a class="fancybox" rel="gallery1" title="CĂN HỘ SKY50" href="https://hstatic.net/998/1000081998/1/2016/4-11/pr7.jpg">
          <div class="overlay">
            <img class="img-responsive" src="//hstatic.net/998/1000081998/1/2016/4-11/pr7_large.jpg" alt=" CĂN HỘ SKY50 ">
            <div class="button_text hidden-md hidden-xs hidden-sm">
              <h4 class="text-uppercase">Xem hình ảnh</h4>
            </div>
          </div>
        </a>
        <h6 class="text-uppercase"><a class="fancybox" rel="gallery1" title="CĂN HỘ SKY50" href="https://hstatic.net/998/1000081998/1/2016/4-11/pr7.jpg"></a><a href="../products/product_detail.php">CĂN HỘ SKY50</a></h6>
        <p>Căn hộ 50m2 bao gồm 2 phòng ngủ riêng biệt, 1 nhà vệ sinh, ban công thoáng mát rộng mở, một không gian sáng tạo làm cầu nối cân bằng giữa công việc và gia đình, đặc biệt phù hợp với những gia đình trẻ hiện đại.</p>
        <p><strong>Diện tích:</strong> 55m2</p>
        <p><strong>Số phòng:</strong> 2 Phòng Ngủ - 2 WC</p>
        <a href="../products/product_detail.php"><i class="fa fa-angle-right"></i> xem thêm</a>
      </div>

      <div class="col-md-4 col-sm-6 col-xs-6 ver-block watch">
        <a class="fancybox" rel="gallery1" title="CĂN HỘ SKY55" href="https://hstatic.net/998/1000081998/1/2016/4-11/pr10.jpg">
          <div class="overlay">
            <img class="img-responsive" src="//hstatic.net/998/1000081998/1/2016/4-11/pr10_large.jpg" alt=" CĂN HỘ SKY55 ">
            <div class="button_text hidden-md hidden-xs hidden-sm">
              <h4 class="text-uppercase">Xem hình ảnh</h4>
            </div>
          </div>
        </a>
        <h6 class="text-uppercase"><a class="fancybox" rel="gallery1" title="CĂN HỘ SKY55" href="https://hstatic.net/998/1000081998/1/2016/4-11/pr10.jpg"></a><a href="../products/product_detail.php">CĂN HỘ SKY55</a></h6>
        <p>Căn hộ 55m2 có kiến trúc đột phá, trẻ trung với 2 phòng ngủ tiêu chuẩn, 1 nhà vệ sinh, ban công cùng không gian đa năng để học tập, làm việc hoặc biến thành phòng ngủ thứ 3 khi cần thiết.</p>
        <p><strong>Diện tích:</strong> 55m2</p>
        <p><strong>Số phòng:</strong> 2 Phòng Ngủ - 1 WC</p>
        <a href="../products/product_detail.php"><i class="fa fa-angle-right"></i> xem thêm</a>
      </div>

      <div class="col-md-4 col-sm-6 col-xs-6 ver-block watch">
        <a class="fancybox" rel="gallery1" title="CĂN HỘ SKY60" href="https://hstatic.net/998/1000081998/1/2016/4-11/pr13.jpg">
          <div class="overlay">
            <img class="img-responsive" src="//hstatic.net/998/1000081998/1/2016/4-11/pr13_large.jpg" alt=" CĂN HỘ SKY60 ">
            <div class="button_text hidden-md hidden-xs hidden-sm">
              <h4 class="text-uppercase">Xem hình ảnh</h4>
            </div>
          </div>
        </a>
        <h6 class="text-uppercase"><a class="fancybox" rel="gallery1" title="CĂN HỘ SKY60" href="https://hstatic.net/998/1000081998/1/2016/4-11/pr13.jpg"></a><a href="../products/product_detail.php">CĂN HỘ SKY60</a></h6>
        <p>Căn hộ sky60 nằm tại vị trí góc với 2 phòng ngủ rộng với tầm nhìn đẹp, 2 nhà vệ sinh, không gian phòng khách và bếp sang trọng liền với ban công lớn tạo ra sự thông thoáng vượt trội. Các sản phẩm rất phù hợp với gia đình đa thế hệ.</p>
        <p><strong>Diện tích:</strong> 60m2</p>
        <p><strong>Số phòng:</strong> 3 Phòng Ngủ - 1WC</p>
        <a href="../products/product_detail.php"><i class="fa fa-angle-right"></i> xem thêm</a>
      </div>

      <div class="col-md-4 col-sm-6 col-xs-6 ver-block watch">
        <a class="fancybox" rel="gallery1" title="CĂN HỘ SKY65" href="https://hstatic.net/998/1000081998/1/2016/4-11/pr15.jpg">
          <div class="overlay">
            <img class="img-responsive" src="//hstatic.net/998/1000081998/1/2016/4-11/pr15_large.jpg" alt=" CĂN HỘ SKY65 ">
            <div class="button_text hidden-md hidden-xs hidden-sm">
              <h4 class="text-uppercase">Xem hình ảnh</h4>
            </div>
          </div>
        </a>
        <h6 class="text-uppercase"><a class="fancybox" rel="gallery1" title="CĂN HỘ SKY65" href="https://hstatic.net/998/1000081998/1/2016/4-11/pr15.jpg"></a><a href="../products/product_detail.php">CĂN HỘ SKY65</a></h6>
        <p>Các kiến trúc sư tài năng đã khéo léo bố trí căn hộ 65m2 tại vị trí góc với nhiều mặt thoáng mang tới tầm nhìn tươi trẻ, phóng khoáng được chia thành 3 phòng ngủ, 2 phòng vệ sinh, ban công lớn tạo nên chuẩn mực mới trong không gian sống.</p>
        <p><strong>Diện tích:</strong> 65m2</p>
        <p><strong>Số phòng:</strong> 2 Phòng Ngủ - 2 WC</p>
        <a href="../products/product_detail.php"><i class="fa fa-angle-right"></i> xem thêm</a>
      </div> -->

    </div>
  </div>
</section>
<script>
  $(document).ready(function() {
    $(".fancybox").fancybox({
      openEffect: 'none',
      closeEffect: 'none'
    });
  });
</script>

<!-- <div id="_atssh" style="visibility: hidden; height: 1px; width: 1px; position: absolute; top: -9999px; z-index: 100000;"><iframe id="_atssh791" title="AddThis utility frame" style="height: 1px; width: 1px; position: absolute; top: 0px; z-index: 100000; border: 0px; left: 0px;" src="https://s7.addthis.com/static/sh.f48a1a04fe8dbf021b4cda1d.html#rand=0.7809535352917811&amp;iit=1676655096992&amp;tmr=load%3D1676655095771%26core%3D1676655095930%26main%3D1676655096964%26ifr%3D1676655096996&amp;cb=0&amp;cdn=0&amp;md=0&amp;kw=&amp;ab=-&amp;dh=lux-residence.myharavan.com&amp;dr=https%3A%2F%2Flux-residence.myharavan.com%2Fproducts%2Fcan-ho-sky45-studio&amp;du=https%3A%2F%2Flux-residence.myharavan.com%2F&amp;href=https%3A%2F%2Flux-residence.myharavan.com%2F&amp;dt=Lux%20Residence&amp;dbg=0&amp;cap=tc%3D0%26ab%3D0&amp;inst=1&amp;jsl=1&amp;prod=undefined&amp;lng=en&amp;ogt=site_name%2Curl%2Cimage%2Cimage%2Ctitle%2Ctype%3Dwebsite&amp;pc=men&amp;pub=ra-54aa0592190a1461&amp;ssl=1&amp;sid=63efb9f73edc670c&amp;srf=0.01&amp;ver=300&amp;xck=0&amp;xtr=0&amp;og=type%3Dwebsite%26title%3DLux%2520Residence%26image%3Dhttps%253A%252F%252Ftheme.hstatic.net%252F1000081998%252F1000533439%252F14%252Flogo.png%253Fv%253D38%26url%3Dhttps%253A%252F%252Flux-residence.myharavan.com%252F%26site_name%3DLux%2520Residence&amp;csi=undefined&amp;rev=v8.28.8-wp&amp;ct=1&amp;xld=1&amp;xd=1"></iframe></div> -->
<!-- <style id="service-icons-0"></style> -->
<!--Kết thúc sản phẩm-->

<section class="section-customer section-grey section-parallax" id="nhan-xet-section">
  <div class="container text-center">
    <div class="row">
      <div class="owl-carousel people-carousel wow fadeIn owl-theme" style="display: block; opacity: 1; visibility: hidden; animation-name: none;">

        <div class="owl-wrapper-outer">
          <div class="owl-wrapper" style="width: 4680px; left: 0px; display: block; transition: all 800ms ease 0s; transform: translate3d(-1170px, 0px, 0px);">
            <div class="owl-item" style="width: 390px;">
              <div class="col-md-12">
                <h6 class="text-uppercase">Anh Trần Văn Tuấn</h6>
                <h4 class="text-uppercase">30 tuổi, Doanh nghiệp xuất nhập khẩu tại Tây Ninh</h4>
                <p class="margin-top-30">Mình mới chuyển về làm cho một hãng phân phối ô tô mới ở khu vực Quận 1. Khi qua Lux Residence tham gia sự kiện bán hàng thấy môi trường sống bên này rất tốt. Vợ chồng mình quyết định mua một căn hộ tại khu Lux Residence để về sinh sống vì hai vợ chồng cũng đang muốn có em bé trong 2 năm tới.</p>
              </div>
            </div>
            <div class="owl-item" style="width: 390px;">
              <div class="col-md-12">
                <h6 class="text-uppercase">Bác Hải Đăng</h6>
                <h4 class="text-uppercase">Về Hưu</h4>
                <p class="margin-top-30">Hai bác năm nay đều ngoài 60 rồi. Có mấy người bạn rủ sang chơi Lux Residence chơi và thấy bên này thích quá. Hai bác quyết định sẽ bán căn nhà trong phố để mua ở đây vì các con cũng ra ở riêng hết, hai ông bà ở căn hộ 45m2 là vừa đủ. Số tiền bán nhà còn lại các bác sẽ lập một quỹ học bổng gia đình để hỗ trợ các cháu đi học đại học sau này. </p>
              </div>
            </div>
            <div class="owl-item" style="width: 390px;">
              <div class="col-md-12">
                <h6 class="text-uppercase">Anh Nguyễn Văn Bình</h6>
                <h4 class="text-uppercase">40 Tuổi, Nhân viên kinh doanh vàng bạc tại TP. Hồ Chí Minh</h4>
                <p class="margin-top-30">Các khoản đầu tư của tôi tập trung nhiều trong lĩnh vực bất động sản, đặc biệt là các căn hộ cho thuê. Bay có nhiều diện tích nhỏ 45m2 – 50m2, với thiết kế hiện đại, tiện ích đầy đủ và không gian tốt rất dễ để cho người nước ngoài thuê. Đó là lý do tôi đã mua 4 căn hộ tại Lux Residence với số vốn đầu tư chỉ tương đương một căn hộ trong trung tâm thành phố.</p>
              </div>
            </div>
            <div class="owl-item active" style="width: 390px;">
              <div class="col-md-12">
                <h6 class="text-uppercase">Chị Phạm Ngọc Thảo Nguyên</h6>
                <h4 class="text-uppercase">35 Tuổi, Nhân viên văn phòng tại TP. Hồ Chí Minh</h4>
                <p class="margin-top-30">Với mức thu nhập hơn 10 triệu/ tháng, mình đã nghĩ sẽ không bao giờ mua được nhà nếu không có sự trợ của người thân. Sau khi tham quan dự án căn hộ Lux Residence, mình đã rất ngạc nhiên vì giờ đây không những có thể mua được căn hộ hiện đại, sang trọng mà lại được tận hưởng đầy đủ các tiện ích rất đẳng cấp và khác biệt của khu đô thị.</p>
              </div>
            </div>
            <div class="owl-item active" style="width: 390px;">
              <div class="col-md-12">
                <h6 class="text-uppercase">Chị Trần Hoàng Lan</h6>
                <h4 class="text-uppercase">35 Tuổi</h4>
                <p class="margin-top-30">Tôi làm việc tại Quận 1, chồng tôi làm việc tại Quận 3, khi chúng tôi chuyển về Lux Residence sống, mỗi tôi chỉ cần chạy xe 30’ mà không bị tắc đường. Căn hộ Lux Residence 55m2 chúng tôi mua không thể vừa lòng hơn vì giá tiền rất vừa phải, phương thức trả theo tiến độ hợp lý, lại có phòng ngủ phụ dành cho bé sau này. Tôi rất mong sớm được nhận nhà.</p>
              </div>
            </div>
            <div class="owl-item active" style="width: 390px;">
              <div class="col-md-12">
                <h6 class="text-uppercase">Chị Phan Thị Hồng</h6>
                <h4 class="text-uppercase">42 Tuổi, Kinh doanh tại Quận 3</h4>
                <p class="margin-top-30">Vợ chồng mình có một cháu và đang ở cùng bố mẹ chồng. Cũng định chuyển ra ở riêng nhưng nói thật là ở ông bà có con nhỏ rất tiện vì hai vợ chồng cũng bận. Khi cả nhà cùng ông bà sang thăm Lux Residence, cả nhà đã đồng ý mua 2 căn hộ cạnh nhau ở Lux Residence để dọn về sinh sống.</p>
              </div>
            </div>
          </div>
        </div>
















        <div class="owl-controls clickable">
          <div class="owl-pagination">
            <div class="owl-page"><span class=""></span></div>
            <div class="owl-page active"><span class=""></span></div>
          </div>
        </div>
      </div>
    </div>
    <div class="people-carousel-dots"></div>
  </div>
</section>
<script>
  jQuery(document).ready(function($) {
    var posTabProduct = $(".people-carousel");
    posTabProduct.owlCarousel({
      items: 3,
      itemsDesktop: [1199, 3],
      itemsDesktopSmall: [991, 3],
      itemsTablet: [767, 1],
      itemsMobile: [480, 1],
      autoPlay: true,
      stopOnHover: false,
      addClassActive: true,

    });
  });
</script>


<!--Kết thúc nhận xét-->

<section class="section-feature" id="tien-ich-section">
  <div class="title-block text-center wow fadeIn" style="visibility: hidden; animation-name: none;">
    <h2 class="text-uppercase">Tiện ích</h2>
  </div>

  <a class="fancybox_gallery" rel="gallery1" href="//theme.hstatic.net/1000081998/1000533439/14/utilities_img_text.jpg?v=38">
    <img class="img-fullWidth wow fadeIn" src="//theme.hstatic.net/1000081998/1000533439/14/utilities_img_text.jpg?v=38" alt="" style="visibility: hidden; animation-name: none;">
  </a>

  <div class="container">

    <div class="row wow fadeIn margin-top-30" style="visibility: hidden; animation-name: none;">

      <div class="col-md-4 col-sm-6 hor-block">
        <img class="img-responsive" src="//theme.hstatic.net/1000081998/1000533439/14/utilities_img_1.jpg?v=38">
        <h4 class="text-uppercase">Bãi để xe 7 tầng</h4>
      </div>


      <div class="col-md-4 col-sm-6 hor-block">
        <img class="img-responsive" src="//theme.hstatic.net/1000081998/1000533439/14/utilities_img_2.jpg?v=38">
        <h4 class="text-uppercase">Nhà câu lạc bộ</h4>
      </div>


      <div class="col-md-4 col-sm-6 hor-block">
        <img class="img-responsive" src="//theme.hstatic.net/1000081998/1000533439/14/utilities_img_3.jpg?v=38">
        <h4 class="text-uppercase">Phòng GYM</h4>
      </div>


      <div class="col-md-4 col-sm-6 hor-block">
        <img class="img-responsive" src="//theme.hstatic.net/1000081998/1000533439/14/utilities_img_4.jpg?v=38">
        <h4 class="text-uppercase">Bể bơi</h4>
      </div>


      <div class="col-md-4 col-sm-6 hor-block">
        <img class="img-responsive" src="//theme.hstatic.net/1000081998/1000533439/14/utilities_img_5.jpg?v=38">
        <h4 class="text-uppercase">Vườn cảnh quan</h4>
      </div>


      <div class="col-md-4 col-sm-6 hor-block">
        <img class="img-responsive" src="//theme.hstatic.net/1000081998/1000533439/14/utilities_img_6.jpg?v=38">
        <h4 class="text-uppercase">Bến xe bus</h4>
      </div>


      <div class="col-md-4 col-sm-6 hor-block">
        <img class="img-responsive" src="//theme.hstatic.net/1000081998/1000533439/14/utilities_img_7.jpg?v=38">
        <h4 class="text-uppercase">Nhà trẻ</h4>
      </div>


      <div class="col-md-4 col-sm-6 hor-block">
        <img class="img-responsive" src="//theme.hstatic.net/1000081998/1000533439/14/utilities_img_8.jpg?v=38">
        <h4 class="text-uppercase">Siêu thị</h4>
      </div>


      <div class="col-md-4 col-sm-6 hor-block">
        <img class="img-responsive" src="//theme.hstatic.net/1000081998/1000533439/14/utilities_img_9.jpg?v=38">
        <h4 class="text-uppercase">Cổng ra vào</h4>
      </div>

    </div>


    <div class="row margin-top-30 wow fadeIn hidden-xs" style="visibility: hidden; animation-name: none;">

      <div class="col-md-4 col-sm-6 img-block">
        <img class="img-responsive" src="//hstatic.net/998/1000081998/1/2016/4-11/6_large.jpg">
        <a class="fancybox_gallery" rel="gallery1" title="An ninh 24/24" href="https://hstatic.net/998/1000081998/1/2016/4-11/6.jpg">
          <div class="overlay">
            <h4 class="text-uppercase">An ninh 24/24</h4>
          </div>
        </a>
      </div>

      <div class="col-md-4 col-sm-6 img-block">
        <img class="img-responsive" src="//hstatic.net/998/1000081998/1/2016/4-11/2_large.jpg">
        <a class="fancybox_gallery" rel="gallery1" title="Công viên mặt nước" href="https://hstatic.net/998/1000081998/1/2016/4-11/2.jpg">
          <div class="overlay">
            <h4 class="text-uppercase">Công viên mặt nước</h4>
          </div>
        </a>
      </div>

      <div class="col-md-4 col-sm-6 img-block">
        <img class="img-responsive" src="//hstatic.net/998/1000081998/1/2016/4-11/5_large.jpg">
        <a class="fancybox_gallery" rel="gallery1" title="Dịch vụ" href="https://hstatic.net/998/1000081998/1/2016/4-11/5.jpg">
          <div class="overlay">
            <h4 class="text-uppercase">Dịch vụ</h4>
          </div>
        </a>
      </div>

      <div class="col-md-4 col-sm-6 img-block">
        <img class="img-responsive" src="//hstatic.net/998/1000081998/1/2016/4-11/1_large.jpg">
        <a class="fancybox_gallery" rel="gallery1" title="Gần các khu đô thị" href="https://hstatic.net/998/1000081998/1/2016/4-11/1.jpg">
          <div class="overlay">
            <h4 class="text-uppercase">Gần các khu đô thị</h4>
          </div>
        </a>
      </div>

      <div class="col-md-4 col-sm-6 img-block">
        <img class="img-responsive" src="//hstatic.net/998/1000081998/1/2016/4-11/3_large.jpg">
        <a class="fancybox_gallery" rel="gallery1" title="Nhà câu lạc bộ" href="https://hstatic.net/998/1000081998/1/2016/4-11/3.jpg">
          <div class="overlay">
            <h4 class="text-uppercase">Nhà câu lạc bộ</h4>
          </div>
        </a>
      </div>

      <div class="col-md-4 col-sm-6 img-block">
        <img class="img-responsive" src="//hstatic.net/998/1000081998/1/2016/4-11/7_large.jpg">
        <a class="fancybox_gallery" rel="gallery1" title="Phố thương mại" href="https://hstatic.net/998/1000081998/1/2016/4-11/7.jpg">
          <div class="overlay">
            <h4 class="text-uppercase">Phố thương mại</h4>
          </div>
        </a>
      </div>

      <div class="col-md-4 col-sm-6 img-block">
        <img class="img-responsive" src="//hstatic.net/998/1000081998/1/2016/4-11/8_large.jpg">
        <a class="fancybox_gallery" rel="gallery1" title="Siêu thị" href="https://hstatic.net/998/1000081998/1/2016/4-11/8.jpg">
          <div class="overlay">
            <h4 class="text-uppercase">Siêu thị</h4>
          </div>
        </a>
      </div>

      <div class="col-md-4 col-sm-6 img-block">
        <img class="img-responsive" src="//hstatic.net/998/1000081998/1/2016/4-11/4_large.jpg">
        <a class="fancybox_gallery" rel="gallery1" title="Trung tâm thể thao" href="https://hstatic.net/998/1000081998/1/2016/4-11/4.jpg">
          <div class="overlay">
            <h4 class="text-uppercase">Trung tâm thể thao</h4>
          </div>
        </a>
      </div>

      <div class="col-md-4 col-sm-6 img-block">
        <img class="img-responsive" src="//hstatic.net/998/1000081998/1/2016/4-11/9_large.jpg">
        <a class="fancybox_gallery" rel="gallery1" title="Trường học" href="https://hstatic.net/998/1000081998/1/2016/4-11/9.jpg">
          <div class="overlay">
            <h4 class="text-uppercase">Trường học</h4>
          </div>
        </a>
      </div>

    </div>

  </div>
</section>
<script>
  $(document).ready(function() {
    $(".fancybox_gallery").fancybox({
      openEffect: 'none',
      closeEffect: 'none'
    });
  });
</script>

<!--Kết thúc tiện ích-->

<section class="section-grey section-small section_7 section-parallax" id="can-ho-section">
  <div class="container text-center">
    <div class="title-block text-center wow fadeIn" style="visibility: hidden; animation-name: none;">
      <h2 class="text-uppercase">Tùy chọn căn hộ của bạn</h2>
    </div>

    <a class="btn btn-white btn-big text-uppercase wow fadeIn" href=".views/product_detail.php" style="visibility: hidden; animation-name: none;">Xem chi tiết</a>

  </div>
</section>

<!--Kết thúc tùy chọn căn hộ-->

<section class="section-contact" id="lien-he-section">
  <div class="container">
    <div class="title-block text-center wow fadeIn" style="visibility: hidden; animation-name: none;">
      <h2 class="text-uppercase">Liên hệ</h2>
    </div>
    <div class="row">
      <div class="col-sm-8 wow fadeIn" style="visibility: hidden; animation-name: none;">

        <div class="map-container">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.310729061172!2d106.6539626784669!3d10.787496261978522!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752ecbb6275cc3%3A0x634b1cfb9f2ed0be!2zNTYgVsOibiBDw7RpLCBwaMaw4budbmcgNywgVMOibiBCw6xuaCwgSOG7kyBDaMOtIE1pbmgsIFZpZXRuYW0!5e0!3m2!1sen!2s!4v1446015505979" width="800" height="350" frameborder="0" style="border:0" allowfullscreen=""></iframe>
        </div>


        <h5 class="text-uppercase">Thông tin liên hệ</h5>
        <form accept-charset="UTF-8" action="/contact" class="contact-form" method="post">
          <input name="form_type" type="hidden" value="contact">
          <input name="utf8" type="hidden" value="✓">

          <div id="message">

          </div>
          <div class="row">
            <div class="col-lg-12 text-center">
              <p id="error5" class="error_all"></p>
              <p id="error6" class="error_all"></p>
              <p id="error7" class="error_all"></p>
              <p id="error8" class="error_all"></p>
            </div>
            <div class="form-group">
              <div class="col-sm-6">
                <input name="contact[email]" required="" type="email" id="contact_email" value="" class="form-control" placeholder="Vui lòng nhập địa chỉ email">
              </div>
              <div class="col-sm-6">
                <input name="contact[name]" required="" type="name" id="contact_name" value="" class="form-control" placeholder="Vui lòng nhập tên">
              </div>
              <div class="col-sm-6">
                <input name="contact[phone]" required="" type="tel" id="contact_phone" value="" class="form-control" placeholder="Vui lòng nhập số điện thoại">
              </div>
            </div>
            <div class="col-lg-12">
              <textarea required="" rows="6" name="contact[body]" class="form-control" placeholder="Viết bình luận" id="contact_body" value=""></textarea>
            </div>
            <div class="action_bottom col-lg-12">
              <a href="#" class="btn btn-pink text-uppercase">Đăng ký</a>
            </div>
          </div>


          <input id="7b8d3f1e3f9d40a3a5bfa3f93cf7c7ef" name="g-recaptcha-response" type="hidden" value="03AFY_a8VkXrcW6W8E2tGBjzwInx9umcY2nZfwxJ1dxK50LhNVtTd2sIBnlXqyVEqyMmBvTjdn5vq_eaknKDLNY5trjKYXXRR6bfruRaxgtMW1QbERSGgYQM8Nala4q0R_SDY11OxLFpDfTG0QMPTMoh5YG-hPoZDhYKDQVCDCgUm2oG6NGh33KRBhBB8h1a3oSzLHuSh-ExJYvws9SAffF57vPf5wYOvy4R_KJThttBiOgqbFpT4KFq6klq-7_3mwA1rOovZfHIyzdCvJQrQcPTh2JUXnvWfTI3DjMFmgePsuhVUchNqfjOVllHMCJalkWVswLHa3eVQCagHf-T9jiKGuvdKzBpHkyE4eg1WpSONeKjRr20Jl9oNHuuMt_3VEoVSlk13pMvXgsTcuGIIXPjztN8-PDW1zujFg8vsmLVxvOCAK6i7-QjD63L8MZRm2ShRkItTnBywsN_05A9omPsio5iLl9q9BUYQkDTGbdeQhQfsnTjoq1PaaU2dBph6MEJoR1JCS82aICBwgYKA2i_XPV6__uxelO2m62WoWqy0VZ0DkjGqXPxhswOPFqddI-Q4slu1fxRL0Dk5VABQ0eLII0ASut0gSWw">
          <script src="https://www.google.com/recaptcha/api.js?render=6LdD18MUAAAAAHqKl3Avv8W-tREL6LangePxQLM-"></script>
          <script>
            grecaptcha.ready(function() {
              grecaptcha.execute('6LdD18MUAAAAAHqKl3Avv8W-tREL6LangePxQLM-', {
                action: 'submit'
              }).then(function(token) {
                document.getElementById('7b8d3f1e3f9d40a3a5bfa3f93cf7c7ef').value = token;
              });
            });
          </script>
        </form>

      </div>

      <div class="col-sm-4 wow fadeIn" data-wow-delay=".5s" style="visibility: hidden; animation-delay: 0.5s; animation-name: none;">

        <h5 class="text-uppercase">Công ty Haravan</h5>

        <p class="info-text">
          <span>
            <img src="http://hstatic.net/998/1000081998/10/2016/4-8/loc-icon.png">
          </span> 56 Vân Côi, P.7, Q.Tân Bình, TP. Hồ Chí Minh
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
          <strong>Email:</strong> hi@haravan.com
        </p>



        <h5 class="text-uppercase">Chi nhánh Hà Nội</h5>

        <p class="info-text">
          <span>
            <img src="http://hstatic.net/998/1000081998/10/2016/4-8/loc-icon.png">
          </span> 170 Đê La Thành, P.Ô Chợ Dừa, Q.Đống Đa, HN
        </p>


        <p class="info-text">
          <span>
            <img src="http://hstatic.net/998/1000081998/10/2016/4-8/mobile-icon.png">
          </span>
          <strong>Điện thoại:</strong> 04.7300.8626
        </p>


        <p class="info-text">
          <span>
            <img src="http://hstatic.net/998/1000081998/10/2016/4-8/fax-icon.png">
          </span>
          <strong>Fax:</strong> 04.7300.8626
        </p>


        <p class="info-text">
          <span>
            <img src="http://hstatic.net/998/1000081998/10/2016/4-8/mail-icon.png">
          </span>
          <strong>Email:</strong> hi@haravan.com
        </p>



        <h5 class="text-uppercase margin-top-30">Tham quan nhà mẫu</h5>
        <p>Quý Khách hàng có nhu cầu tham quan nhà mẫu vui lòng liên hệ chuyên viên tư vấn khách hàng</p>

        <p class="info-text">
          <span>
            <img src="http://hstatic.net/998/1000081998/10/2016/4-8/loc-icon.png">
          </span> 56 Vân Côi, P.7, Q.Tân Bình, TP. Hồ Chí Minh
        </p>


        <p class="info-text">
          <span>
            <img src="http://hstatic.net/998/1000081998/10/2016/4-8/mobile-icon.png">
          </span>
          <strong>Điện thoại:</strong> 1900.636.099
        </p>


        <p class="info-text">
          <span>
            <img src="http://hstatic.net/998/1000081998/10/2016/4-8/mail-icon.png">
          </span>
          <strong>Email:</strong> hi@haravan.com
        </p>


        <p class="info-text">
          <span>
            <img src="http://hstatic.net/998/1000081998/10/2016/4-8/clock-icon.png">
          </span> Mở cửa từ 8:00 tới 20:00
        </p>


      </div>

    </div>
  </div>
</section>
<script>
  $('.map-container').click(function() {
    $(this).find('iframe').css("pointer-events", "auto");
  });
  $(".map-container").mouseleave(function() {
    $(this).find('iframe').css("pointer-events", "none");
  });
</script>
<script>
  $(document).ready(function() {
    $('.action_bottom a').click(function(e) {
      e.preventDefault();
      $(".error_all").html("");
      var email = $('#contact_email').val();
      var hovaten = $('#contact_name').val();
      var sodienthoai = $('#contact_phone').val();
      var content = $('#contact_body').val();
      var contact_user_email = $('#contact_email').val();
      $('#contact_body').val(content);
      if (!validEmail(contact_user_email)) {
        //alert('Bạn chưa nhập email hoặc email chưa đúng định dạng!');
        $("#error5").html("* Bạn chưa nhập email hoặc email chưa đúng định dạng!");
        $('#contact_email').val(' ');
        return false;
      } else if (hovaten.length == 0) {
        //alert('Bạn chưa chọn ngày nhận phòng!');
        $("#error6").html("* Bạn chưa nhập họ và tên!");
      } else if (sodienthoai.length == 0) {
        //alert('Bạn chưa chọn ngày trả phòng!');
        $("#error7").html("* Bạn chưa nhập số điện thoại!");
      } else if (content.length == 0) {
        //alert('Bạn chưa nhập nội dung!');
        $("#error7").html("* Bạn chưa nhập nội dung!");
      } else {
        $(this).parents('form').submit();
      }

    })

  })

  function validEmail(v) {
    var r = new RegExp("[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?");
    return (v.match(r) == null) ? false : true;
  }
</script>
<!--Kết thúc liên hệ-->



<!-- footer -->
<?php
include "../inc/footer.php";
?>