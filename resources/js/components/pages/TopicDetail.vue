<template>
    <div style="with: 100%; height: 1600px; background-color: #40E0D0;">
        <div>
            <p>Diễn đàn/ Bài viết/ Chi tiết bài viết</p>
        </div>
          <div class="topic-detail clearfix"  v-for="showtopic in topics" v-bind:key="showtopic.topic_id">
              <div class="user-image-topic-detail">
                <img style="with: 50px; height: 50px; border-radius: 25px; margin-top: 5px; margin-left: 10px;" v-bind:src="showtopic.user.image" alt="">
              </div>
              <div class="topic-detail-content clearfix">
                  <p style="border-bottom: 1px solid black; with: 98%; margin-left: 10px;">Đăng bởi <span style="color: #FF3366;">{{showtopic.user.username}}</span> vào lúc <span style="color: #FF3366;">{{showtopic.datetime}}</span></p>
                  <h3 style="margin-left: 20px;">{{showtopic.title}}</h3>
                    <span v-for="showimage in images" v-bind:key="showimage.image_id">
                       <img style="with: 240px; height: 320px; margin-left: 20px;" v-bind:src="showimage.image" alt="">
                   </span>
                  <p v-html="showtopic.content"  class="topic-content-show"></p>
                  <b-col   v-on:click="clickLike(showtopic.topic_id)"   class="khang" style="text-align:center;"><span><i class="far fa-thumbs-up"></i>&nbsp;&nbsp;Like</span></b-col >
              </div>
          </div>
          <div class="comment-topic clearfix">
                <textarea style="width: 85%; height: 70px; float: left; margin-left: 70px;" type="text" v-model="comment"></textarea>

                <b-button style="float: left; margin-left: 10px; margin-top: 1.5%;" @click="onCreateComments" variant="success">Bình luận</b-button>
          </div>

           <div class="topic-detail-comment clearfix" v-for="showcomment in comments" v-bind:key="showcomment.comment_id">
                 <div class="user-image-comment">
                <img style="with: 50px; height: 50px; border-radius: 25px; margin-top: 5px; margin-left: 10px;" v-bind:src="showcomment.user.image" alt="">
              </div>
               <div class="topic-comment">
                     <p>Đăng bởi <span style="color: #FF3366;">{{showcomment.user.username}}</span> vào lúc <span style="color: #FF3366;">{{showcomment.datetime}}</span></p>
                  <p>{{showcomment.comment}}</p>
                  <p></p>
              </div>
              </div>
    </div>
</template>
<script>
import axios from 'axios';
// import VueCryptojs from 'vue-cryptojs'
export default {
    data() {
        return {
            user: sessionStorage.getItem("userId"),
            topics: [],
            comments: [],
            reply:[],
            images: [],
            comment: "",
            topic_id: "",
            user_id: "",
            }
    },
    mounted(){
        this.loadTopics();
        this.loadComments();
        this.loadReply();
        this.loadImages();
       },
    methods: {
        loadTopics: function(){
            axios.get('api/get-all-topics-by-id',{params: { topic_id: this.$route.params.topic_id }}).then(res=>{
                // console.log(res.data);
                // const decryptedText = this.$CryptoJS.AES.decrypt(res.data.content, "Secret Passphrase").toString(this.CryptoJS.enc.Utf8)

            //     var html = VueCryptojs.AES.decrypt(res.data.content, get_id()).toString(CryptoJS.enc.Utf8)
            // CKEDITOR.instances['editor'].setData(html)
                this.topics = res.data;
            })
        },
          loadImages: function(){
               axios.get('api/show-image',{params: { topic_id: this.$route.params.topic_id }}).then(res=>{
                // console.log(res.data);
                this.images = res.data;
        })
          },
        loadComments: function(){
            axios.get('api/show-comment',{params: { topic_id: this.$route.params.topic_id }}).then(res=>{
                // console.log(res.data);
                this.comments = res.data;
            })
        },
           loadReply: function(){
               axios.get('api/get-all-reply-by-comment_id?comment_id=2').then(res=>{
                // console.log(res.data);
                this.reply = res.data;
        })
          },
            clickLike ( id ){
            axios.post('/api/get-like-topic',{topic_id: id}).then(res =>{
                console.log(res.data.res);
                location.reload();
            })
        },
         onCreateComments: function(){
         if (sessionStorage.getItem('userId') == null){
                window.location.href='https://tech4rum.org/login_view';
            }else{
            axios.post('api/add-comment',{comment: this.comment, topic_id: this.$route.params.topic_id , user_id: this.user,}).then(res=>{
            location.reload()
            })
            }
        },


    }

}
</script>
