<template>
    <div style="width: 100%; height:100%; background-color: #ecf0fa;">
        <b-container class="bv-example-row">
            <b-row >
                <b-col style="padding:10px;"  cols="9">
                    <div style="background-color:white;padding:10px;border-radius:20px" v-for="classified in classifieds" v-bind:key="classified.id_classifieds">
                         <div style="display:flex;margin-bottom:20px">
                            <img width="60px" height="60px" style="border-radius:50%;-moz-border-radius:50%;-webkit-border-radius:50%;" v-bind:src="classified.user.image" alt="">
                            <div style="margin-left:7px;font-size: 15px;line-height: 1;color: rgb(170, 170, 170);margin-top:7px">
                                <p style="margin-bottom:6px">
                                   {{classified.user.fullname}}
                                </p>
                                <p>
                                  {{classified.date}} <span>Ha Noi</span>
                                </p>
                            </div>
                        </div>
                        <h3>
                            {{classified.name_classifieds}}
                        </h3>
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
                                        <span>&emsp;&emsp;&emsp;</span>DIỄN ĐÀN RAO VẶT
                                    </p>
                                </div>
                            </div>

                            <div style="margin-top:20px">
                                <div style="background-color:white;padding:10px;border-radius:20px;border:5px solid #ecf0fa;">
                                    <b-container class="bv-example-row">
                                        <b-row>
                                        <b-col>
                                            <p><span><i class="fas fa-chart-area"></i></span><span> Khu vực:</span> {{classified.area}}</p>
                                            <p><span><i class="fas fa-star-half-alt"></i></span><span> Tình trạng:</span> {{classified.status_pro}}</p>
                                            <p><span><i class="fas fa-money-bill-wave-alt"></i></span><span> Giá:</span> {{classified.price_pro}}</p>
                                        </b-col>
                                        <b-col>
                                            <p><span><i class="fas fa-map-marked"></i></span><span> Địa chỉ:</span> {{classified.addr_pro}}</p>
                                            <p><span><i class="fas fa-phone"></i></span><span> Số điện thoại:</span> {{classified.phone_pro}}</p>
                                            <p><span><i class="fas fa-id-card-alt"></i></span><span> Thông tin liên hệ:</span> {{classified.contact_pro}}</p>
                                        </b-col>
                                        </b-row>
                                    </b-container>
                                </div>
                                <div style="align-items:center;text-align: center;">

                                    <img width="100%" height="600px" v-bind:src="classified.image"  alt="">
                                </div>
                                <p style="margin-top:10px;text-align: justify">
                                    {{classified.description}}
                                </p>

                            </div>
                    </div>
                    <div style="background-color:white;padding:10px;border-radius:20px;margin-top:10px" v-for="classified in classifieds" v-bind:key="classified.id_classifieds">
                        <b-container style="margin-top:10px" class="bv-example-row">
                            <b-row>
                                <b-col class="khang" style="text-align:center"><span><i class="far fa-eye"></i>&nbsp;&nbsp; {{classified.view}} lượt xem</span></b-col>
                                <template v-if="classified.id_classifieds != classified.status_like">
                                    <b-col   v-on:click="clickLike(classified.id_classifieds)"   class="khang" style="text-align:center;"><span><i class="far fa-thumbs-up"></i>&nbsp;&nbsp;Like</span></b-col >
                                </template>
                                <template v-else>
                                    <b-col v-on:click="clickdisLike(classified.id_classifieds)"   class="khang" style="text-align:center;color: rgb(134, 93, 248);font-weight:bold"><span><i class="far fa-thumbs-up"></i>&nbsp;&nbsp;Like</span></b-col >
                                </template>
                                <b-col class="khang" style="text-align:center"> <span><i class="far fa-comment"></i>&nbsp;&nbsp;Chia sẻ</span></b-col>
                            </b-row>
                        </b-container>
                    </div>
                    <div style="background-color:white;padding:10px;border-radius:20px;margin-top:10px">
                         <div style="display:flex;">
                            <img width="40px" height="40px" style="border-radius:50%;-moz-border-radius:50%;-webkit-border-radius:50%;" v-bind:src="imageUser" alt="">
                            <div style="margin-left:17px;font-size: 15px;width:100%">
                                <div style="padding :0px;width:100%">
                                    <form action="" method="POST" @submit.prevent="clickComment()" >
                                    <b-input-group style="margin-top: 0px !important;" class="mt-3" >
                                        <template #append>
                                            <input type="submit" value="✍" style="border:none;background: none; cursor: pointer;" >
                                        </template>
                                        <b-form-input  v-model="comment" style="border-radius:20px"></b-form-input>
                                    </b-input-group>
                                    </form>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div style="background-color:white;padding:10px;border-radius:20px;margin-top:10px">
                        <ul style="list-style-type:none;">
                            <li style="background-color:#f0f2f5;padding:10px;border-radius:20px;margin-top:10px" v-for="comment in comments" v-bind:key="comment.id_comment">
                                <div style="display:flex;">
                                <img v-bind:src="comment.user.image" width="40px" height="40px" style="border-radius:50%;-moz-border-radius:50%;-webkit-border-radius:50%;" />
                                    <div style="margin-left:17px;font-size: 15px;width:100%">
                                        <div style="padding :0px;width:100%">
                                            <p style="margin:0px;padding:0px;font-weight:bold" >{{comment.user.fullname}}</p>
                                            <p style="margin:0px;padding:0px">{{comment.comment.comment}}</p>
                                        </div>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                </b-col>
                <b-col style="padding:10px 10px 10px 0px"  cols="3">
                    <div>
                         <div style="background-color:white;padding:10px;border-radius:20px">
                             <img style="border-radius:5px" width="100%" src="https://cdn.chanhtuoi.com/uploads/2017/04/tiki-1.png" alt="">
                        </div>
                        <div style="background-color:white;padding:10px;border-radius:20px;margin-top:10px">
                            <img style="border-radius:5px" width="100%" src="data:image/jpeg;base64,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" alt="">
                        </div>
                        <div style="background-color:white;padding:10px;border-radius:20px;margin-top:10px">
                              <div style="border-left:5px solid #ff8906;">
                                <P style="font-size: 15px;margin-left:10px;font-weight:bold">
                                    REVIEW NỔI BẬT
                                </P>
                            </div>
                            <div>
                        <img width="100%" src="https://znews-photo.zadn.vn/w660/Uploaded/dqvpxpck/2020_05_26/thumb_grande2019.jpg" alt="">

                        <p style="width:100%;text-align: justify">Asus ra mắt ROG Flow Z13 (2022): Tablet chơi game cạnh tranh với Microsoft Surface Pro</p>
                    </div>
                    <ul style="width:300px;list-style-type:none;padding:0px">

                        <li style="cursor: pointer" v-on:click="getDetail(classifiedgoods.id_classifieds)" v-for="classifiedgoods in classifiedgood" v-bind:key="classifiedgoods.id_classifieds">
                            <div style="display:flex;width:100%">
                                <div>
                                    <img height="57px" style="border-radius: 6px;margin-top:8px" width="100px" v-bind:src="classifiedgoods.image" alt="">
                                </div>
                                <div>
                                    <p style="margin:0px 10px;color: #333;font-size: 14px;font-weight: 600;line-height: 1.35;text-align: justify">{{classifiedgoods.name_classifieds}}</p>
                                </div>
                            </div >
                            <b-container style="margin-top: 0px;" class="bv-example-row">
                                <b-row>
                                     <b-col class="khang" style="text-align:center"><span><i class="far fa-thumbs-up"></i>&nbsp;&nbsp;Like</span></b-col >
                                        <b-col class="khang" style="text-align:center"> <span><i class="far fa-comment"></i>&nbsp;&nbsp;Bình luận</span></b-col>

                                </b-row>
                            </b-container>
                             <hr>
                        </li>


                    </ul>

                    </div>
                     <div style="background-color:white;padding:10px;border-radius:20px;margin-top:10px">
                         <img width="100%" style="border-radius:5px" src="https://image.winudf.com/v2/image1/Y29tLmxhemFkYS5hbmRyb2lkX3NjcmVlbl92aS1WTl84XzE2NDEwOTg4MjRfMDI0/screen-8.jpg?fakeurl=1&type=.jpg" alt="">
                    </div>
                </div>


           </b-col>
            </b-row>
        </b-container>
    </div>
</template>
<style scoped>
    .khang:hover {
    color: rgb(134, 93, 248);
    cursor: pointer;
    font-weight: bold;
    }
</style>
<script>
export default {
    data() {
        return {
            classifieds:[],
            comment:'',
            comments:[],
            classifiedgood:[],
            imageUser: sessionStorage.getItem("userImage"),
        }
    },
    created() {
        this.loadClassifiled();
        this.loadClassifileds()
        this.loadComment()
        this.loadClassgoo()
    },
    methods: {
         loadClassifiled: function(){
            axios.get('/api/get-declassifiled', {params: {id_classifieds: this.$route.params.id_classifieds}}).then(res =>{
                console.log(res.data)
            })
        },
        loadClassifileds: function(){
            axios.get('/api/get-declassifiled', {params: {id_classifieds: this.$route.params.id_classifieds}}).then(res =>{
                this.classifieds = res.data
                console.log(res.data)
            })
        },
           clickdisLike ( id ){
            axios.post('/api/dislike-classifieds',{id: id}).then(res =>{
                console.log(res.data.res);
                location.reload();
            })
        },
        clickLike ( id ){
            axios.post('/api/like-classifieds',{id: id}).then(res =>{
                console.log(res.data.res);
                location.reload();
            })
        },
        clickComment (){
            if (sessionStorage.getItem('userId') == null){
                window.location.href='https://tech4rum.org/login_view';
            }else{
                axios.post('/api/get-commentclass',{comment: this.comment , id: sessionStorage.getItem('userId'), id_classifieds: this.$route.params.id_classifieds }).then(res =>{
                console.log(res.data.data);
                location.reload();
             })
            }

        },
        loadComment (){
             axios.post('/api/get-comment',{id_classifieds: this.$route.params.id_classifieds}).then(res =>{


                this.comments = res.data.data
                console.log(res.data.data)
            })
        },
        loadClassgoo (){
             axios.get('/api/get-classgood').then(res =>{


                this.classifiedgood = res.data.data

            })
        },
        getDetail (id){
            axios.get('/api/get-declassifiled', id).then(res =>{
                this.classifieds = res.data
                console.log(res.data)
            })
        }


    },
}
</script>
