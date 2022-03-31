<template>
    <div style="width: 100%; height:100%; background-color: #ecf0fa; margin-top: 5px;">
        <div style="padding:20px">
        <div class="header" style="width:100%;background-color:white;border-radius:10px">
            <div style="width:60%;height:547px;display:flex">
                <div>
                    <img style="padding:20px;width:740px;height:334px"   src="https://cdn.vnreview.vn/655360_70849780665844_477054902468608?wt=4e27521d5e20986f99e399e759d36514&rt=3427a9d6a8b0a295d57fb9b9809d5422&width=728" alt="">

                    <ul style="list-style-type: none;padding-left:0p;display:flex">
                        <li style="margin: 0pxpx;">
                            <img width="200px" height="100px"  src="data:image/jpeg;base64,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" alt="">
                            <p style="">
                                Tivi cỗ 30 năm về trước 😎
                            </p>
                        </li>
                        <li style="margin-left:40px;">
                            <img width="200px" height="100px"   src="data:image/jpeg;base64,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" alt="">
                            <p style="">
                                Thanh lý tủ lạnh cũ😎
                            </p>
                        </li>

                        <li style="margin-left:40px;">
                            <img width="200px" height="100px"   src="https://thumuabanghe.net/wp-content/uploads/2018/05/ghe-xoay-truong-phong-cu-gia-re.png" alt="">
                            <p style="">
                                Bán ghê gaming chơi game 😎
                            </p>
                        </li>
                    </ul>
                 </div>
                 <div style="margin:0px;padding:0px;box-shadow:50px">

                    <div style="display:flex;margin-top:20px">
                        <a href="https://juno.vn/products/sneakers-phoenix">
                            <img width="280px" style="margin-right:5px;" src="data:image/jpeg;base64,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" alt="">
                        </a>
                        <a href="https://juno.vn/">
                            <img width="135px" height="165px" src="https://1ty.vn/datafiles/3/2019-05-16/80905975-juno.png" alt="">
                        </a>
                    </div>
                     <div style="margin-top:5px">
                         <a href="http://sieubanre.vn/">
                            <img width="420px" src="http://sieubanre.vn/upload/images/GiaReSo1-04(1).png" alt="">
                         </a>
                     </div>
                 </div>
                </div>
            </div>
        </div>
       <div style="padding:0px 10px 10px 10px;display:flex">
           <div style="width:75%">
               <div style="width:100%; height:60px;padding:10px;border: 2px solid white;border-radius: 12px;background-color:white;display:flex">
                       <b-pagination
                        v-model="currentPage"
                        :total-rows="rows"
                        :per-page="perPage"
                        aria-controls="my-table"
                        ></b-pagination>
                
                            <div style="margin-left:80px">
                                <b-icon style="margin-right:40px;" icon="facebook" aria-hidden="true"></b-icon>
                                <b-icon style="margin-right:40px;" icon="twitter" aria-hidden="true"></b-icon>                      
                            </div>
                            <span>|</span>
                        <div style="margin-left:16px">
                            <p style="margin:0px;color: rgb(170, 170, 170);width:100%">
                                <span>&emsp;&emsp;&emsp;</span>DIỄN ĐÀN RAO VẶT
                            </p>
                        </div>  
                        <div style="margin-left:56px">
                            <b-button pill variant="outline-secondary">
                                 <router-link style="text-decoration: none; color: inherit;" to="/newclass">Thêm tin mới</router-link>
                            </b-button>
                        </div>                     
               </div>
                    <ul style="list-style-type: none;margin-top:10px;padding:0px" id="my-table"
                        :classifield="classifield"
                        :per-page="perPage"
                        :current-page="currentPage"
                        small>
                    <li style="margin-bottom:10px" v-for="classifields in classifield" v-bind:key="classifields.classifiled.id_classifieds">
                        <div style="width:100%;width:100%; padding:10px;border: 2px solid white;border-radius: 12px;background-color:white;">
                          <div style="display:flex">
                                <div>
                                    <img style="border-radius: 6px" width="200px" height="120px"  v-bind:src="classifields.classifiled.image" alt="">
                            </div>
                            <div>
                                <router-link :to="{name:'forum/productdetail', params: {id_classifieds: classifields.classifiled.id_classifieds }}" style="text-decoration:none" >
                                    <p v-on:click="clickView(classifields.classifiled.id_classifieds)" style="margin-left:20px;color: #333;font-size: 20px;font-weight: 600;line-height: 1.35;">{{classifields.classifiled.name_classifieds}}</p>
                                </router-link>

                                <div style="display:flex;margin-left:20px">
                                      <img width="40px" height="40px" style="border-radius:50%;-moz-border-radius:50%;-webkit-border-radius:50%;"  v-bind:src="classifields.user.image" alt="">
                                    <div style="margin-left:7px;font-size: 17px;line-height: 1;color: #ff8906;margin-top:7px;display:flex">
                                        <p style="margin-top:5px">
                                            {{classifields.user.fullname}} <span style="color:black">&nbsp;&nbsp;&nbsp;&nbsp;{{classifields.classifiled.date}}&nbsp;<b-icon icon="alarm" aria-hidden="true"></b-icon></span>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            </div >
                                <b-container style="margin-top:10px" class="bv-example-row">
                                   <b-row>
                                        <b-col  style="text-align:center"><span><i class="far fa-eye"></i>&nbsp;&nbsp;{{classifields.classifiled.view}} lượt</span></b-col>

                                        <b-col   style="text-align:center"><span><i class="far fa-thumbs-up"></i>&nbsp;&nbsp;{{classifields.classifiled.like}} lượt</span></b-col >

                                        <b-col  style="text-align:center"> <span><i class="far fa-comment"></i>&nbsp;&nbsp;10 lượt bình luận</span></b-col>
                                    </b-row>
                                    <hr>
                                    <b-row>
                                        <template v-if="classifields.classifiled.id_classifieds != classifields.classifiled.status_like">
                                            <b-col   v-on:click="clickLike(classifields.classifiled.id_classifieds)"   class="khang" style="text-align:center;"><span><i class="far fa-thumbs-up"></i>&nbsp;&nbsp;Like</span></b-col >
                                        </template>
                                       <template v-else>
                                           <b-col v-on:click="clickdisLike(classifields.classifiled.id_classifieds)"   class="khang" style="text-align:center;color: rgb(134, 93, 248);font-weight:bold"><span><i class="far fa-thumbs-up"></i>&nbsp;&nbsp;Like</span></b-col >
                                       </template>
                                        <b-col class="khang" style="text-align:center"> <span><i class="far fa-comment"></i>&nbsp;&nbsp;Bình luận</span></b-col>
                                    </b-row>
                                </b-container>
                          </div>

                    </li>
                </ul>
           </div>
           <div style="padding: 0px 10px">
               <div style="width:100%;width:100%; padding:10px;border: 2px solid white;border-radius: 12px;background-color:white;">
                   <div style="border-left:5px solid #ff8906;">
                        <P style="font-size: 15px;margin-left:10px;font-weight:bold">
                           SẢN PHẨM NỔI BẬT
                        </P>
                    </div>
                    <div>
                        <img width="300px" src="https://cdn.vnreview.vn/655360_141218524776630_469298191532032?wt=05bb4de1dea2c78a26a98443cdda429e&rt=35da4faa1bcd53925bfdeb91b05ae020&width=728" alt="">

                        <p style="width:300px;text-align: justify">Asus ra mắt ROG Flow Z13 (2022): Tablet chơi game cạnh tranh với Microsoft Surface Pro</p>
                    </div>
                    <ul style="width:300px;list-style-type:none;padding:0px">
                       
                        <li v-for="classifiedgoods in classifiedgood" v-bind:key="classifiedgoods.id_classifieds">
                             <router-link :to="{name:'forum/productdetail', params: {id_classifieds: classifiedgoods.id_classifieds }}" style="color:black;text-decoration:none" >
                            <div style="display:flex">
                                <div>
                                    <img height="57px" style="border-radius: 6px;margin-top:8px" width="100px" v-bind:src="classifiedgoods.image" alt="">
                                </div>
                                <div>
                                    <p style="margin-left:10px;color: #333;font-size: 14px;font-weight: 600;line-height: 1.35;text-align: justify">{{classifiedgoods.name_classifieds}}</p>
                                </div>
                            </div >
                            <b-container style="margin-top: -10px;" class="bv-example-row">
                                <b-row>
                                     <b-col class="khang" style="text-align:center"><span><i class="far fa-thumbs-up"></i>&nbsp;&nbsp;Like</span></b-col >
                                        <b-col class="khang" style="text-align:center"> <span><i class="far fa-comment"></i>&nbsp;&nbsp;Bình luận</span></b-col>
                                </b-row>
                            </b-container>
                             <hr>
                              </router-link>
                        </li>
                      
                    </ul>
               </div>
           </div>
       </div>
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
            classifield:[],

            perPage: 2,
            currentPage: 1,
            classifiedgood:[]
            
        }
    },created() {
        this.fetchData();
        this.loadClassifiled();
        this.loadClassgoo()
    },
    methods: {
        fetchData: function(){
                fetch('api/get-classifieds').then(res => res.json()).then(res => {
                this.classifield = res.data;
                console.log(res)
            });
        },
        clickLike ( id ){
            axios.post('/api/like-classifieds',{id: id}).then(res =>{
                console.log(res.data.res);
                location.reload();
            })
        },
        clickdisLike ( id ){
            if (sessionStorage.getItem('userId') == null){
                window.location.href='https://tech4rum.org/login_view';
            } else {
                    axios.post('/api/dislike-classifieds',{id: id}).then(res =>{
                    console.log(res.data.res);
                    location.reload();
                })

            }
        },
        clickView( id ){
            axios.post('/api/view-classifieds',{id: id}).then(res =>{
                location.reload();
            })
        },
        loadClassifiled: function(){
            axios.get('/api/get-declassifiled', {params: {id_classifieds: this.$route.params.id_classifieds}}).then(res =>{
                console.log(res.data)
            })
        },
           loadClassgoo (){
             axios.get('/api/get-classgood').then(res =>{
                 
               
                this.classifiedgood = res.data.data
             
            })
        },
        
    },computed: {
      rows() {
        return this.classifield.length
      }
    }
}
</script>
