<template>
                <div  style="width:100%; height: 1400px;">
                     <div>
      <ul class="nav justify-content-center" style="background-color: #00ced1">
        <li
         @click="onLoadPage"
          class="nav-item"
          v-for="showcategory in categories"
          v-bind:key="showcategory.category_id"
        >
          <router-link

            class="nav-link"
            style="color: white"
            :to="{
              name: 'forum/topic',
              params: { category_id: showcategory.category_id },
            }"
            >{{ showcategory.category_name }}</router-link
          >
        </li>
      </ul>
    </div>
  <template>
                    <div v-if="user == null" class="user-profile">
                         <!-- <button class="btn btn-secondary" >
                         <a class="nav-link" href="./login_view">Đăng Nhập</a>
                    </button> -->
                    <div>
                        <a class="btn btn-primary btn-lg" style="margin-top: 10px;" href="./login_view" role="button">Đăng Nhập</a>
                     <a class="btn btn-primary btn-lg" style="margin-top: 10px;" href="./login_view" role="button">Đăng Kí</a>
                    </div>
                    </div>
                    <div v-else class="user-profile clearfix" >
                        <!--  <button class="btn btn-secondary" >
                            <a class="nav-link " href="./home#/forum/userprofile">{{fullname}}</a>
                        </button>  -->
                     <div class="clearfix user-profile-detail">
                                 <img style="float: left; with: 50px; height: 50px; border-radius: 25px; margin-right: 10px;" v-bind:src="user_image" alt="">
                         <div style="float: left;"><a  style="margin-top: 35px; text-decoration: none; color: 	#003399;" href="/#/forum/userprofile">{{fullname}} <br/> Điểm: {{user_score}}</a>
                            </div>
                         </div>
                         <b-button variant="success"  style="float: left; margin-left: 10px; "><router-link style="text-decoration: none; color: inherit;" to="/new-topic">Thêm bài viết</router-link></b-button>
                            <a @click.prevent="logOut()"  style="text-decoration: none; color: 	#003399; margin-right: 130px; margin-bottom: 10px;" href="">Đăng Xuất</a>

                         <!-- <button class="btn btn-secondary" >
                            <a @click.prevent="logOut()" class="nav-link " href="">Đăng Xuất</a>
                        </button>   -->

                    </div>
                </template>
                    <div class="card-catagory-topic">

                    <div class="notification">
                         <div class="topic-notification clearfix" v-for="showtopicbyadmin in topicsnotifications" v-bind:key="showtopicbyadmin.topic_id">
          <img
          style="float: left; margin-left: 10px"
          v-bind:src="showtopicbyadmin.user.image"
          alt=""
        />
        <span style="float: left; margin-left: 15px; with: 100%; height: 100%">
          <p style="with: 100%; height: 10%; margin-top: 10px">
                <span v-if="showtopicbyadmin.category == 'Thông báo'" style="max-with: 300px; height: 20px; background-color: red; border-radius: 4px; padding: 2px;">{{showtopicbyadmin.category}}</span>
            <router-link
              style="text-decoration: none; color: 	#003399"
              :to="{
                name: 'forum/detail',
                params: { topic_id: showtopicbyadmin.topic_id },
              }"
              >{{ showtopicbyadmin.title }}</router-link
            >
          </p>
          <p style="font-size: 12px; float: left; color: #CC3366;">
            bởi {{ showtopicbyadmin.user.username }}
          </p>
          <p style="font-size: 12px; float: left; margin-left: 20px">
            1234 lượt xem
          </p>
          <p style="font-size: 12px; float: left; margin-left: 20px">
           {{showtopicbyadmin.like_topic}} lượt thích
          </p>
          <p style="font-size: 12px; float: left; margin-left: 20px">
            123 lượt bình luận
          </p>
        </span>
      </div>
                    </div>


                      <div class="user-topic" v-for="showtopic in topics" v-bind:key="showtopic.topic_id">
                         <img style="float: left; margin-left: 10px;" v-bind:src="showtopic.user.image" alt="">
                        <span style="float: left; margin-left:15px; with:100%;height:100%;">
                            <p style="with:100%; height:10%;margin-top:10px;">
                            <span v-if="showtopic.category == 'Review'" style="max-with: 300px; height: 15px; border-radius: 4px; padding: 2px; background-color: #00FF33;">{{showtopic.category}}</span>
                            <span v-else-if="showtopic.category == 'Xin ý kiến'" style="max-with: 300px; height: 20px; background-color: #FF3366;  border-radius: 4px; padding: 2px;">{{showtopic.category}}</span>
                            <span v-else-if="showtopic.category == 'Góc hỏi đáp'" style="max-with: 300px; height: 20px; background-color: yellow;  border-radius: 4px; padding: 2px;">{{showtopic.category}}</span>
                            <span v-else-if="showtopic.category == 'Tán gẫu'" style="max-with: 300px; height: 20px; background-color: white;  border-radius: 4px; padding: 2px;">{{showtopic.category}}</span>
                            <span v-else-if="showtopic.category == 'Ý kiến riêng'" style="max-with: 300px; height: 20px; background-color: pink;  border-radius: 4px; padding: 2px;">{{showtopic.category}}</span>
                            <span v-else-if="showtopic.category == 'Có thể bạn đã biết !'" style="max-with: 300px; height: 20px; background-color: orange;  border-radius: 4px; padding: 2px;">{{showtopic.category}}</span>
                            <span v-else-if="showtopic.category == 'Tại sao ?'" style="max-with: 300px; height: 20px; background-color: blue;  border-radius: 4px; padding: 2px;">{{showtopic.category}}</span>
                            <span v-else style="max-with: 300px; height: 20px; background-color: #9400D3; border-radius: 4px; padding: 2px;">{{showtopic.category}}</span>
                            <router-link style="text-decoration: none; color: #003399;" :to="{name: 'forum/detail', params: {topic_id: showtopic.topic_id }}">{{showtopic.title}}</router-link></p>
                            <p style="font-size:12px; float: left; color: #CC3366;">bởi {{showtopic.user.username}}</p>
                            <p style="font-size:12px;float: left; margin-left:20px;">1234 lượt xem</p>
                            <p style="font-size:12px;float: left; margin-left:20px;">{{showtopic.like_topic}} lượt thích</p>
                            <p style="font-size:12px;float: left; margin-left:20px;">123 lượt bình luận</p>
                        </span>
                    </div>
                    <router-view/>
                    <router-view/>



                    <div class="">

                    </div>



                </div>

                <div class="card-topic-hot">
            <div class="card-l clearfix">
                   <b-card title="Thành viên nổi bật">
          <b-card-text class="clearfix" v-for="showuser in users" v-bind:key="showuser.user_id"
            ><img style="float: left; width: 50px; height: 50px; border-radius: 25px; " v-bind:src="showuser.image" alt=""><p style=" float: left;margin-top: 5px; margin-left: 10px; color: #333399;">{{ showuser.username }} - score: {{ showuser.score }}</p></b-card-text
          >
        </b-card>
      </div>
      <div class="card-l clearfix" style="margin-top: 10px;">
        <b-card title="Bài viết nổi bật">
          <b-card-text
            v-for="showtopic_like in topics_like"
            v-bind:key="showtopic_like.topic_id"
          ><img style="float: left; width: 50px; height: 50px; border-radius: 25px; " v-bind:src="showtopic_like.user.image" alt="">
           <router-link
              style="text-decoration: none; color: 	#003399; margin-top: 5px; font-size:14px; margin-left: 5px;"
              :to="{
                name: 'forum/detail',
                params: { topic_id: showtopic_like.topic_id },
              }"
              > {{ showtopic_like.title }} - Like : {{ showtopic_like.like_topic }} - Đăng bởi: {{showtopic_like.user.username}}</router-link>

          </b-card-text>
        </b-card>
            </div>
        </div>
                </div>

</template>

<script>
import axios from 'axios';
   export default {
       data() {
           return {
                 user: sessionStorage.getItem("userId"),
                fullname: sessionStorage.getItem("userName"),
                user_image: sessionStorage.getItem("userImage"),
                user_score: sessionStorage.getItem("userScore"),

             topics:[],
             topics_like:[],
                   topicsnotifications: [],
                 users:[],
             loading: true,
             selected: {
                  topics:[],
                    categories:[],
                    topics_like:[],
                 users:[],
             },
           }
       },

       mounted(){
           this.loadTopics();
           this.loadCategories();
                this.loadTopics_like();
               this.loadUsers();
                   this.loadTopicsByAdmin();



       },

       watch: {
           selected: {
               handler: function(){
                   this.loadTopics();
                    this.loadTopics_like();
                  this.loadUsers();
                      this.loadTopicsByAdmin();

               },
               deep: true,
           }
       },
       methods: {
             logOut() {
                sessionStorage.removeItem("userId");
                sessionStorage.removeItem("userName");
                sessionStorage.removeItem("userImage");
                sessionStorage.removeItem("userScore");
                window.location.href = "/#/forum";
                 location.reload();
                },
             onLoadPage(){
                    location.reload();
                },
             loadCategories: function(){
               axios.get('/api/get-all-categorys').then(res => {
                // console.log(res.data);
                this.categories = res.data;
               });
           },
           loadUsers: function(){
                   axios.get('/api/get-all-user-score-desc').then(res => {
                    //console.log(res.data);
                    this.users = res.data.data;
                   });
               },
                loadTopicsByAdmin: function(){
         axios.get("api/get-all-topics/?category_id=7").then((res) => {
        //console.log(res.data);
        this.topicsnotifications = res.data.data;
    });
    },
                 loadTopics_like: function(){
                   axios.get('/api/get-all-topic-like-desc').then(res => {
                    console.log(res.data);
                    this.topics_like = res.data.data;
                   });
               },

           loadTopics: function(){
               axios.get('api/get-all-topics',{params: {category_id: this.$route.params.category_id}}).then(res => {
                   console.log(res.data);
                this.topics = res.data.data;
               });

           }
       },
   };

</script>
