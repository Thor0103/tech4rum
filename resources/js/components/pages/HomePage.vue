<template>
    <div style="width: 100%; height: 1400px; padding: 20px; background-color: #ECF0F5;" class="clearfix">
        <div style="width: 26%; height: 100%; float: left;">
            <div style="width: 100%; height: 48%; border-radius: 5px;  background-color: white;">
                <div style="width: 100%; height: 3%; background-color: white; border-top: 5px solid #003399; text-align: center;" >
                    <p><i>MSI Pulsating Power</i></p>
                </div>
                <div style=" margin-top:20px; width: 275px; height: 550px;"> <a href="https://vn.msi.com/Landing/11th-rtx30-gl/nb"><img style="margin-left: 15px; width: 275px; height: 550px;" src="https://photo.techrum.vn/images/2021/12/07/897E756C-B6F1-46D4-9673-B81B42D367249f89f4433ff28425.jpg" alt=""></a></div>
            </div>
            <div style="width: 100%; height: 13%; background-color: white; margin-top: 20px; border-radius: 5px;">
                <div style="width: 100%; height: 3%; background-color: white; border-top: 5px solid #003399; " >
                    <p style="text-align: center;"><i><i class="far fa-chart-bar"></i> Thống kê diễn đàn</i></p>
                    <div class="clearfix">
                        <div style="width: 50%; height: 100%; float: left;  margin-left: 10px;">
                            <p style="with: 100%; height: 10px;"><i>Chủ đề:</i></p>
                            <p style="with: 100%; height: 10px;"><i>Bài viết:</i></p>
                            <p style="with: 100%; height: 10px;"><i>Thành viên:</i></p>
                            <p style="with: 100%; height: 10px;"><i>Thành viên mới nhất:</i></p>
                        </div>
                        <div style="width: 40%; height: 100%; float: right;  ">
                            <p style="with: 100%; height: 10px;text-align: center;"><i>7</i></p>
                            <p style="with: 100%; height: 10px;text-align: center;"><i>{{topic_count}}</i></p>
                            <p style="with: 100%; height: 10px;text-align: center;"><i>{{user_count}}</i></p>
                            <p style="with: 100%; height: 10px;text-align: center;color: blue"><i>{{new_user.username}}</i></p>
                        </div>
                    </div>
                </div>
            </div>
            <div style="width: 100%; height: 17%; background-color: white; margin-top: 20px; border-radius: 5px;">
                <div style="width: 100%; height: 3%; background-color: white; border-top: 5px solid #003399; " >
                    <p style="text-align: center;"><i><i class="fas fa-users"></i> Thành viên Tech4Team</i></p>
                    <div class="clearfix">
                        <div style="margin-left: 10px;">
                            <p style="with: 100%; height: 10px;"><i>Nguyễn Văn Thành Chương</i></p>
                            <p style="with: 100%; height: 10px;"><i>Nguyễn Huỳnh Trọng Thoại</i></p>
                            <p style="with: 100%; height: 10px;"><i>Đặng Hoàng Khang</i></p>
                            <p style="with: 100%; height: 10px;"><i>Nguyễn Thanh Hào</i></p>
                            <p style="with: 100%; height: 10px;"><i>Nguyễn Thanh Phú</i></p>
                            <p style="with: 100%; height: 10px;"><i>Nguyễn Minh Dự</i></p>
                        </div>
                    </div>
                </div>
            </div>
            <div style="width: 100%; height: 17%; background-color: white; margin-top: 20px; border-radius: 5px;">
                <div style="width: 100%; height: 3%; background-color: white; border-top: 5px solid #003399; " >
                    <p style="text-align: center;"><i><i class="fab fa-medapps"></i> Theo dõi chúng tôi</i></p>
                    <div class="clearfix">
                        <div style="margin-left: 10px;">
                            <iframe width="285" height="160" src="https://www.youtube.com/embed/JALyRlFwT4g" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div  style="width: 72%; height: 100%;  border-radius: 5px; float: left; margin-left: 20px; " class="clearfix">
            <div style="width: 100%; height: 3%; background-color: white; border-top: 5px solid #003399; text-align: center;" >
                <p><i>Nội dung Quảng Cáo</i></p>
            </div>
            <div >
                <a-carousel arrows autoplay >
                    <div
                        slot="prevArrow"
                        slot-scope=""
                        class="custom-slick-arrow"
                        style="left: 10px;zIndex: 1;"
                        >
                        <a-icon type="left-circle" />
                    </div>
                    <div slot="nextArrow" slot-scope="" class="custom-slick-arrow" style="right: 10px">
                        <a-icon type="right-circle" />
                    </div>
                    <div><img style="width: 100%; height: 100%;" src="https://photo.techrum.vn/images/2021/03/20/Galaxy-A32-7-of-3401e300fa4bc027a7.jpg" alt=""></div>
                    <div><img style="width: 100%; height: 100%;" src="https://photo.techrum.vn/images/2021/03/20/Galaxy-A32-13-of-34483313717aeca89e.jpg" alt=""></div>
                    <div><img style="width: 100%; height: 100%;" src="https://photo.techrum.vn/images/2021/03/20/Galaxy-A32-27-of-3438b105d61a1052a6.jpg" alt=""></div>
                    <div><img style="width: 100%; height: 100%;" src="https://photo.techrum.vn/images/2021/03/13/Galaxy-A32-1-of-366ab8e74dadca4c2e.jpg" alt=""></div>
                </a-carousel>
            </div>

                <div style="width: 49%; height: 40%; float: left; margin-top: 20px;">
                <div style="width: 100%; height: 15%; background-image: linear-gradient(to right, #FF3366 , #FFFFCC); padding: 10px;">
                    <a style="color: white;">Tổng hợp ứng dụng Android trả phí đang được miễn phí và giảm giá (10.01.2022)</a>
                </div>
                <div style="width: 100%; height: 50%; background-color: white;">
                    <img  style="width: 100%; height: 100%;" src="https://photo.techrum.vn/images/2022/01/10/ung-dung-android-mien-phi-10-01-2022-TECHRUM-covere9caf06caaf3a334.jpg" alt="">
                </div>
                <div style="width:100%; height:25%; background-color: white; padding: 10px;">
                    <p>Tiếp tục làm mới danh sách app/game Android đang được miễn phí và giảm giá trên cửa hàng Play Store, mời các bạn cùng tham khảo và nhanh tay tải về trước khi thời gian ưu đãi kết thúc nhé.</p>
                </div>
                <div style="width:100%; height:10%; background-color: white; border-top: 1px solid #ECF0F5; padding-top: 5px; ">
                    <b-button style="float: right; margin-right: 10px;" variant="warning"><i class="fas fa-sign-out-alt"></i> Xem tiếp...</b-button>
                </div>
            </div>
            <div style="width: 49%; height: 40%; float: right; margin-top: 20px;">
                <div style="width: 100%; height: 15%; background-image: linear-gradient(to right, #FF3366 , #FFFFCC); padding: 10px;">
                    <a style="color: white;">Tổng hợp ứng dụng iOS trị giá "42 đô" đang được miễn phí trên App Store (10/01/2022)</a>
                </div>
                <div style="width: 100%; height: 50%; background-color: white;">
                    <img  style="width: 100%; height: 100%;" src="https://photo.techrum.vn/images/2022/01/10/ung-dung-ios-mien-phi-10-01-2022-TECHRUM-cover3468a6fa9eb12f13.jpg" alt="">
                </div>
                <div style="width:100%; height:25%; background-color: white; padding: 10px;">
                    <p>Đang miễn phí một số ứng dụng hữu ích khác cho iPhone, iPad và iPod touch, mời các bạn cùng tham khảo và nhanh tay tải ngay trước khi chương trình ưu đãi này kết thúc nhé.</p>
                </div>
                <div style="width:100%; height:10%; background-color: white; border-top: 1px solid #ECF0F5; padding-top: 5px; ">
                    <b-button style="float: right; margin-right: 10px;" variant="warning"><i class="fas fa-sign-out-alt"></i> Xem tiếp...</b-button>
                </div>
            </div>
            <div style="width: 100%; height: 21%; background-color: white; float: right; margin-top: 20px;">
                <div style="width: 100%; height: 13%; border-top: 5px solid #003399;">
                     <p style="text-align: center;"><i><i class="fab fa-medapps"></i> Có thể bạn quan tâm</i></p>
                </div>
                <div style="width: 100%; height: 87%;" class="clearfix">
                    <div style="width: 49%; height: 100%;  float: left;">
                        <div style="width: 100%; height: 33%;  ">
                            <img style="width: 35%; height:90%; float: left; margin-left: 10px; margin-top: 3px;" src="https://i.pinimg.com/564x/cd/14/6c/cd146c57915abee5f5eb7919390a0245.jpg" alt="">
                            <span style="float: left; width: 60%;height:70%; text-align: center; margin-top: 17px;"><h5>Mobile & Tablet</h5></span>
                        </div>
                          <div style="width: 100%; height: 33%;  ">
                            <img style="width: 35%; height:90%; float: left; margin-left: 10px; margin-top: 3px;" src="https://i.pinimg.com/564x/b5/42/fa/b542fa470263eab39f106d1d156640e4.jpg" alt="">
                            <span style="float: left; width: 60%;height:70%; text-align: center; margin-top: 17px;"><h5>PC & Laptop</h5></span>
                        </div>
                         <div style="width: 100%; height: 33%;  ">
                            <img style="width: 35%; height:90%; float: left; margin-left: 10px; margin-top: 3px;" src="https://i.pinimg.com/564x/67/89/58/678958f4b0fdeabaa8e567880419399a.jpg" alt="">
                            <span style="float: left; width: 60%;height:70%; text-align: center; margin-top: 17px;"><h5>Phần mềm & Games</h5></span>
                        </div>

                    </div>
                    <div style="width: 49%; height: 100%;  float: right;">
                         <div style="width: 100%; height: 33%;  ">
                            <img style="width: 35%; height:90%; float: left; margin-left: 10px; margin-top: 3px;" src="https://i.pinimg.com/564x/f4/75/55/f47555f288a0dcc37b30e264eb5831bf.jpg" alt="">
                            <span style="float: left; width: 60%;height:70%; text-align: center; margin-top: 17px;"><h5>Tivi - Tủ Lạnh & Đồ gia dụng</h5></span>
                        </div>
                          <div style="width: 100%; height: 33%;  ">
                            <img style="width: 35%; height:90%; float: left; margin-left: 10px; margin-top: 3px;" src="https://i.pinimg.com/564x/7d/87/a0/7d87a053ad566765366919bdbfa53403.jpg" alt="">
                            <span style="float: left; width: 60%;height:70%; text-align: center; margin-top: 17px;"><h5>Xe cộ</h5></span>
                        </div>
                         <div style="width: 100%; height: 33%;  ">
                            <img style="width: 35%; height:90%; float: left; margin-left: 10px; margin-top: 3px;" src="https://cdn.tgdd.vn/Files/2020/11/09/1305680/tiktok-1590678793_800x450.jpg" alt="">
                            <span style="float: left; width: 60%;height:70%; text-align: center; margin-top: 17px;"><h5>Mạng xã hội</h5></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import axios from 'axios';
export default {
    data(){
        return{
            user_count: '',
            topic_count: '',
            new_user: '',

        }

    },
     mounted(){
        this.loadUserCount();
        this.loadTopicCount();
        this.loadNewUser();

     },
     methods: {
         loadUserCount: function(){
            axios.get('api/get-all-user-count').then(res=>{
                // console.log(res.data);
                this.user_count = res.data;
            })
         },
             loadTopicCount: function(){
            axios.get('api/get-all-topic-count').then(res=>{
                // console.log(res.data);
                this.topic_count = res.data;
            })
         },
            loadNewUser: function(){
            axios.get('api/get-all-new-user').then(res=>{
                // console.log(res.data);
                this.new_user = res.data;
            })
         },


     }
};
</script>
<style scoped>
/* For demo */
.ant-carousel >>> .slick-slide {
  text-align: center;
  height: 420px;
  line-height: 420px;
  background: #364d79;
  overflow: hidden;
}

.ant-carousel >>> .custom-slick-arrow {
  width: 25px;
  height: 25px;
  font-size: 30px;
  color: #fff;
  background-color: rgba(31, 45, 61, 0.11);
  opacity: 0.3;
}
.ant-carousel >>> .custom-slick-arrow:before {
  display: none;
}
.ant-carousel >>> .custom-slick-arrow:hover {
  opacity: 0.5;
}

.ant-carousel >>> .slick-slide h3 {
  color: #fff;
}
</style>
