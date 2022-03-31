<template>
        <div style="margin-top:10px; width: 100%; height: 100%; background-color: #ecf0fa;">
            <b-row>
                <b-col cols="8" style="margin-top:20px;">
                    <div style="border-left:5px solid #ff8906;margin-left:15px">
                            <p style="font-size: 18px;margin-left:10px;font-weight:bold">
                                TIN TỨC
                            </p>
                        </div>
                        <div style="display:flex;" v-for="newss in new_new1 " v-bind:key="newss.news_id">
                             <router-link style="color:black" class="nav-link " :to="{name: 'forum/newdetail', params: {news_id: newss.news_id}}">
                            <div>
                                <img width="500px"  v-bind:src="newss.img" alt="">
                                <h5>
                                   {{newss.title}}
                                </h5>
                            </div>
                            </router-link>
                            <div>
                                <ul style="list-style: none; padding: 0px;">
                                   <router-link style="color:black" class="nav-link " :to="{name: 'forum/newdetail', params: {news_id: newss.news_id}}">
                                    <li v-for="newss in new_new2 " v-bind:key="newss.news_id">
                                        <img width="265px" height="149"  v-bind:src="newss.img" alt="">
                                        <a href="" style="cursor: pointer;text-decoration:none;font-weight:bold;color:black;font-family: sans-serif;font-size: 14px;">{{newss.title}}</a>
                                    </li>
                                     </router-link>
                                </ul>

                            </div>
                        </div>
                    <ul style="list-style: none;">

                        <li style="list-type-style:none;margin-top:15px" v-for="newss in news " v-bind:key="newss.news_id" >
                            <div style="display:flex">
                                <div style="width:265px;height:149px;margin:0px">
                                     <img width="265px" height="149" v-bind:src="newss.img" alt="">
                                </div>
                                <div style="margin-left:10px" >
                                    <router-link style="color:black" class="nav-link " :to="{name: 'forum/newdetail', params: {news_id: newss.news_id}}">
                                        <h5>
                                            {{newss.title}}
                                        </h5>
                                     </router-link >
                                    <p style="font-size: 13px; color: #4d4d4d; line-height: 18px; font-family: Arial;">
                                        {{ newss.header}}...
                                    </p>
                                    <p style="font-size: 11px;line-height: 1;color: #aaa;">1 ngày trước</p>
                                    <div style="float:right">
                                         <li class="nav-item  nav-a">
                                            <router-link class="nav-link " :to="{name: 'forum/newdetail', params: {news_id: newss.news_id}}"><strong><i class="far fa-eye"></i> Xem thêm...</strong></router-link>
                                        </li>
                                    </div>
                                </div>
                            </div>
                            <hr>
                        </li>
                    </ul>
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

                                                <p style="font-size: 11px;line-height: 1;color: #aaa;">7 giờ trước</p>
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
                                        <div style="margin-left:10px;margin-top:0px">

                                            <router-link class="nav-link " :to="{name: 'forum/newdetail', params: {news_id: newss.news_id}}">
                                                <a href="" style="cursor: pointer;text-decoration:none;font-weight:bold;color:black;font-family: sans-serif;font-size: 14px;">
                                                    {{newss.title}}
                                                </a>
                                            </router-link>

                                                <P style="font-size: 11px;line-height: 1;color: #aaa;">{{newss.datetime}}</P>
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
                            <img width="360px" height="360px"  src="https://channel.mediacdn.vn/thumb_w/640/2019/1/15/photo-2-15475467995991400166809.jpg" alt="">
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
            new_new1:[],
            new_new2:[],
        }
    },
    created() {
        this.fetchData();
        this.loadNews();
    },
    methods: {

    fetchData: function() {
      fetch('./api/get-all-news')
        .then(res => res.json())
        .then(res => {
            var data= res.res
            var result = []
            data.forEach(element => {
                element.news.header = element.news.header.substr(0,150);
                result.push(element.news)

            });
            this.news = result;

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

            let data3 = res.res3
            var result3 = []
            data3.forEach(element => {
                result3.push(element.news)
            });
            this.new_new1 = result3;

            let data4 = res.res4
            var result4 = []
            data4.forEach(element => {
                result4.push(element.news)
            });
            this.new_new2 = result4;

        });

        },
        loadNews: function (){
            axios.get('/api/get-detail',{params: {news_id: this.$route.params.news_id}}).then(res =>{
                console.log(res.data);
            })
        }
    }
}
</script>
