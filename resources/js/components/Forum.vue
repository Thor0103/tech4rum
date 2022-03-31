
<template>
    <div>
        <div class="header-one">
        <b-img class="logo"  src="https://scontent.fsgn5-10.fna.fbcdn.net/v/t1.15752-9/269599230_480993520112857_2137023804348553327_n.png?_nc_cat=107&ccb=1-5&_nc_sid=ae9488&_nc_ohc=OFMPstjBx5QAX-OmOIE&_nc_ht=scontent.fsgn5-10.fna&oh=03_AVIPBCzdN-e3f12mg1ZFVy_NDyemTOJNQc4SesW4LWPCIw&oe=61EA757B" fluid alt="Responsive image"></b-img>
        </div>
        <div class="menu-rum clearfix">
          <div class="menu-nav">
                <ul class="nav nav-menu justify-content-center">
                <li class="nav-item nav-a">
                    <router-link class="nav-link" to="/home"><strong><i class="fas fa-home"></i> Trang Chủ</strong></router-link>
                </li>
              <li class="nav-item  nav-a">
                    <router-link class="nav-link" to="/new"><strong><i class="far fa-newspaper"></i> Tin Tức</strong></router-link>
                </li>
                <li class="nav-item  nav-a">
                    <router-link class="nav-link " to="/forum"><strong><i class="fab fa-forumbee"></i> Diễn Đàn</strong></router-link>
                </li>
               <li class="nav-item  nav-a">
                    <router-link to="/product" class="nav-link "><strong><i class="fab fa-buysellads"></i> Rao vặt</strong></router-link>
                </li>
                
            </ul>
          </div>

        </div>

            <div class="card-ds">
                <router-view></router-view>

            </div>

            <div class="footers">
                <footer class="footer-section">
        <div class="container">
            <div class="footer-cta pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="cta-text">
                                <h4>Địa chỉ</h4>
                                <span>441/51 Điện Biên Phủ, p25, q.Bình Thạnh, TP.HCM</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fas fa-phone"></i>
                            <div class="cta-text">
                                <h4>Điện thoại</h4>
                                <span>+8436.321.9942</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="far fa-envelope-open"></i>
                            <div class="cta-text">
                                <h4>Email</h4>
                                <span>Tech4rum@contact.com</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-content pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 mb-50">
                        <div class="footer-widget">
                            <div class="footer-logo">
                                <a href="http://tech4rum.org/#/home"><img src="https://scontent.fsgn5-10.fna.fbcdn.net/v/t1.15752-9/269599230_480993520112857_2137023804348553327_n.png?_nc_cat=107&ccb=1-5&_nc_sid=ae9488&_nc_ohc=OFMPstjBx5QAX-OmOIE&_nc_ht=scontent.fsgn5-10.fna&oh=03_AVIPBCzdN-e3f12mg1ZFVy_NDyemTOJNQc4SesW4LWPCIw&oe=61EA757B" class="img-fluid" alt="logo"></a>
                            </div>
                            <div class="footer-text">
                                <p>Chúng tôi luôn cố gắng hết mình, phát triển và chạy đua với công nghệ mới !</p>
                            </div>
                            <div class="footer-social-icon">
                                <span>Follow us</span>
                                <a href="http://facebook.com/nvthanhchuong"><i class="fab fa-facebook-f facebook-bg"></i></a>
                                <a href="#"><i class="fab fa-twitter twitter-bg"></i></a>
                                <a href="#"><i class="fab fa-google-plus-g google-bg"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>Hợp tác phát triển</h3>
                            </div>
                            <ul>
                                <li><a href="#">Trang chủ</a></li>
                                <li><a href="#">Dịch vụ</a></li>
                                <li><a href="#">portfolio</a></li>
                                <li><a href="#">Liên hệ</a></li>
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Tech4Team</a></li>
                                <li><a href="#">Tin tức</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>Đăng ký </h3>
                            </div>
                            <div class="footer-text mb-25">
                                <p>Đừng bỏ lỡ đăng ký nguồn cấp dữ liệu mới của chúng tôi, vui lòng điền vào biểu mẫu bên dưới.</p>
                            </div>
                            <div class="subscribe-form">
                                <form action="#">
                                    <input type="text" placeholder="Địa chỉ Email">
                                    <button><i class="fab fa-telegram-plane"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 text-center text-lg-left">
                        <div class="copyright-text">
                            <p>Copyright &copy; Tech4Team</p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 d-none d-lg-block text-right">
                        <div class="footer-menu">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Terms</a></li>
                                <li><a href="#">Privacy</a></li>
                                <li><a href="#">Policy</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
            </div>
    </div>
</template>

