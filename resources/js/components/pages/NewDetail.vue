<template>
        <div style="margin-top:10px;width: 100%; height: 100%; background-color: #ecf0fa;">
            <b-row>
                <b-col cols="8" style="margin-top:20px;">
                    <div style="margin-left:20px;margin-top:20px" v-for="newss in news" v-bind:key="newss.news_id">
                        <div>
                            <h2>
                                {{newss.title}}
                            </h2>
                            <p><span style="color: #fda13e;text-transform: uppercase;font-weight:bold">MyPage </span> <span style="font-family: SFD-SemiBold; font-size: 14px; color: #777;"><b-icon icon="alarm" aria-hidden="true"></b-icon></span>  <span style="font-family: SFD-SemiBold;font-size: 14px;color: #777;">2022-01-15 20:37:44</span></p>
                            <div style="display:flex">
                                <img width="40px" height="40px" style="border-radius:50%;-moz-border-radius:50%;-webkit-border-radius:50%;" src="https://cf.shopee.vn/file/c334cf4e82cb98927c753175f65b8e02" alt="">
                                <div style="margin-left:7px;font-size: 12px;line-height: 1;color: rgb(170, 170, 170);margin-top:7px">
                                    <p style="margin-bottom:3px">
                                        {{newss.admin.fullname}}
                                    </p>
                                    <p>
                                        {{newss.admin.username}}@gmail.com
                                    </p>
                                </div>
                            </div>

                            <div style="background-color:white;padding:5px 10px;display:flex">
                                <div>
                                   <b-icon style="margin:0px 40px;" icon="share" aria-hidden="true"></b-icon>
                                    <b-icon style="margin-right:40px;" icon="brush" aria-hidden="true"></b-icon>

                                </div>
                                <span>|</span>
                                <div style="margin-left:80px">
                                    <b-icon style="margin-right:40px;" icon="facebook" aria-hidden="true"></b-icon>
                                    <b-icon style="margin-right:40px;" icon="twitter" aria-hidden="true"></b-icon>
                                    <b-icon style="margin-right:40px;" icon="mailbox" aria-hidden="true"></b-icon>
                                    <b-icon style="margin-right:80px;" icon="printer" aria-hidden="true"></b-icon>
                                </div>
                                 <span>|</span>
                                <div style="margin-left:16px">
                                    <p style="margin:0px;color: rgb(170, 170, 170);width:100%">
                                        <span>&emsp;&emsp;&emsp;</span>DIỄN ĐÀN CÔNG NGHỆ
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Contain -->
                        <div style="margin-top:20px">
                            <p style="text-align: justify">
                                {{newss.header}}
                            </p>
                            <div>
                                <img width="800px"  v-bind:src="newss.img" alt="">
                            </div>
                            <p style="border-top: 1px dotted #d9d9d9;margin-top:20px;text-align: justify;max-height:2000px">
                                {{newss.content}}
                            
                            </p>
                            <hr>
                        </div>
                         <div style="background-color:white;padding:10px;border-radius:20px;margin-top:10px">
                         <div style="display:flex;">
                            <img width="40px" height="40px" style="border-radius:50%;-moz-border-radius:50%;-webkit-border-radius:50%;" src="https://cf.shopee.vn/file/c334cf4e82cb98927c753175f65b8e02" alt="">
                            <div style="margin-left:17px;font-size: 15px;width:100%">
                                <div style="padding :0px;width:100%">
                                    <b-input-group style="margin-top: 0px !important;" class="mt-3">
                                        <template #append>
                                            <b-input-group-text style="border:none;background: none; cursor: pointer;" ><strong class="text-danger"><i class="far fa-paper-plane"></i></strong></b-input-group-text>
                                        </template>
                                        <b-form-input style="border-radius:20px"></b-form-input>
                                    </b-input-group>
                            </div>
                        </div>
                    </div>
                    
                    </div>
                         <div style="background-color:white;padding:10px;border-radius:20px;margin-top:10px">
                        <ul style="list-style-type:none;">
                            <li style="background-color:#f0f2f5;padding:10px;border-radius:20px;margin-top:10px">
                                <div style="display:flex;">
                                <img width="40px" height="40px" style="border-radius:50%;-moz-border-radius:50%;-webkit-border-radius:50%;" src="data:image/jpeg;base64,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" alt="">
                                    <div style="margin-left:17px;font-size: 15px;width:100%">
                                        <div style="padding :0px;width:100%">
                                            <p style="margin:0px;padding:0px;font-weight:bold" >Nguyễn Văn Thành Chương</p>
                                            <p style="margin:0px;padding:0px">Phía sau hộp, rất nhiều tính năng nổi bật của 2 tai nghe cũng Jabra liệt kê rõ ràng, đi kèm thêm</p>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li style="background-color:#f0f2f5;padding:10px;border-radius:20px;margin-top:10px">
                                <div style="display:flex;">
                                <img width="40px" height="40px" style="border-radius:50%;-moz-border-radius:50%;-webkit-border-radius:50%;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSt_-Qwan4ZBUC0oXcteoqDjvCAygR5f-BPqw&usqp=CAU" alt="">
                                    <div style="margin-left:17px;font-size: 15px;width:100%">
                                        <div style="padding :0px;width:100%">
                                            <p style="margin:0px;padding:0px;font-weight:bold" >Nguyễn Minh Dự</p>
                                            <p style="margin:0px;padding:0px">Các thiết kế mặt sau nhìn cũng rất trực quan, khoa học, đúng với truyền thống của một hãng tai nghe danh tiếng. 😎😎</p>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li style="background-color:#f0f2f5;padding:10px;border-radius:20px;margin-top:10px">
                                <div style="display:flex;">
                                <img width="40px" height="40px" style="border-radius:50%;-moz-border-radius:50%;-webkit-border-radius:50%;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRdSdQDhGIjpLnTbQBuPyr0ebe1r0iiTTo10g&usqp=CAU" alt="">
                                    <div style="margin-left:17px;font-size: 15px;width:100%">
                                        <div style="padding :0px;width:100%">
                                            <p style="margin:0px;padding:0px;font-weight:bold" >Nguyễn Thanh Phú</p>
                                            <p style="margin:0px;padding:0px">Các thiết kế mặt sau nhìn cũng rất trực quan, khoa học, đúng với truyền thống của một hãng tai nghe danh tiếng. 😎😎😎</p>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li style="background-color:#f0f2f5;padding:10px;border-radius:20px;margin-top:10px">
                                <div style="display:flex;">
                              <img width="40px" height="40px" style="border-radius:50%;-moz-border-radius:50%;-webkit-border-radius:50%;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRdSdQDhGIjpLnTbQBuPyr0ebe1r0iiTTo10g&usqp=CAU" alt="">
                                    <div style="margin-left:17px;font-size: 15px;width:100%">
                                        <div style="padding :0px;width:100%">
                                            <p style="margin:0px;padding:0px;font-weight:bold" >Đặng Hoàng Khang</p>
                                            <p style="margin:0px;padding:0px">Các thiết kế mặt sau nhìn cũng rất trực quan, khoa học, đúng với truyền thống của một hãng tai nghe danh tiếng. 😎😎😎😎😎😎</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    </div>
                </b-col>
                <b-col cols="4" >
                    <div style="margin-top:20px" >
                        <div style="border-left:5px solid #ff8906">
                            <P style="font-size: 18px;margin-left:10px;font-weight:bold">

                                    TIN  MỚI NHẤT

                            </P>
                        </div>
                        <div>
                            <ul style="list-style: none;"  >
                                <li v-for="newss in new_news " v-bind:key="newss.news_id" >
                                    <div style="display:flex;margin-right:5px">
                                        <div >
                                            <img width="142px" height="80px" v-bind:src="newss.img" alt="">
                                        </div>
                                        <div style="margin-left:10px">

                                            <router-link class="nav-link " :to="{name: 'forum/newdetail', params: {news_id: newss.news_id}}">
                                                <a href="" style="cursor: pointer;text-decoration:none;font-weight:bold;color:black;font-family: sans-serif;font-size: 14px;">
                                                    {{newss.title}}
                                                </a>
                                            </router-link>

                                                <P style="font-size: 11px;line-height: 1;color: #aaa;">4 năm trước</P>
                                        </div>
                                    </div>
                                    <br>
                                </li>

                            </ul>


                        </div>
                    </div>

                    <div style="margin-top:20px" >
                        <div style="border-left:5px solid #ff8906">
                            <P style="font-size: 18px;margin-left:10px;font-weight:bold">
                                ĐANG ĐƯỢC QUAN TÂM
                            </P>
                        </div>
                        <div>
                            <ul style="list-style: none;"  >
                                <li v-for="newss in hotnews " v-bind:key="newss.news_id" >
                                    <div style="display:flex;margin-right:5px">
                                        <div >
                                            <img width="142px" height="80px" v-bind:src="newss.img" alt="">
                                        </div>
                                        <div style="margin-left:10px">

                                            <router-link class="nav-link " :to="{name: 'forum/newdetail', params: {news_id: newss.news_id}}">
                                                <a href="" style="cursor: pointer;text-decoration:none;font-weight:bold;color:black;font-family: sans-serif;font-size: 14px;">
                                                    {{newss.title}}
                                                </a>
                                            </router-link>

                                                <P style="font-size: 11px;line-height: 1;color: #aaa;">4 năm trước</P>
                                        </div>
                                    </div>
                                    <br>
                                </li>

                            </ul>
                        </div>
                        <div style="margin-left:30px">
                            <div style="border-left:5px solid #ff8906">
                                <P style="font-size: 18px;margin-left:10px;font-weight:bold">
                                    GIỚI THIỆU
                                </P>
                            </div>
                            <img width="360px" height="380px"  src="https://channel.mediacdn.vn/thumb_w/640/2019/1/15/photo-2-15475467995991400166809.jpg" alt="">
                        </div>
                    </div>
                </b-col>
            </b-row>

        </div>
</template>
<script>

export default {
  data() {
      return {

            news:[],
            hotnews:[],
            new_news:[],
      }
  },created() {
      this.loadNew();
      this.fetchData();
      this.loadNews();
  },
  methods: {
      fetchData: function() {
      fetch('./api/get-all-news')
        .then(res => res.json())
        .then(res => {

            let data1 = res.res1
            var result1 = []
            data1.forEach(element => {

                result1.push(element.news)

            });

            this.hotnews = result1;

            let data2 = res.res2
            var result2 = []
            data2.forEach(element => {

                result2.push(element.news)

            });

            this.new_news = result2;

        });

        },
        loadNew(){
            axios.get('api/get-detail', {params: { news_id: this.$route.params.news_id }}).then((res) => {
                        this.news = res.data;
            })
        },
        loadNews: function (){
            axios.get('/api/get-detail',{params: {news_id: this.$route.params.news_id}}).then(res =>{
                console.log(res.data);
            })
        }
  },
}
</script>
