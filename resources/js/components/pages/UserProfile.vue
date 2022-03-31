<template>
  <div class="container mt-3 sticky-top" style="background-color:white;">
    <div class="card p-3 text-center" style="background-color:#ecf0fa;">
      <div class="d-flex flex-row justify-content-center mb-3 head" style="padding:10px;border-radius:20px;margin-top:10px">
        <div class="image">
          <img v-bind:src="customers.image" class="rounded-circle" width="100" height="100" />
          <span><i class="fas fa-camera"></i></span>
        </div>
        <div class="d-flex flex-column ms-3 user-details">
          <h4 class="mb-0">{{customers.fullname}}</h4>
          <div class="ratings">
            <span>Điểm: {{customers.score}}</span> <i class="bx bx-star ms-1"></i>
          </div>
          <span>Thành Viên Cứng</span>
        </div>
      </div>
      <div style="display:flex">
        <div style="width:50%;padding: 20px 30px">
          <div class="info" style="background-color:white;padding:10px;border-radius:20px;margin:10px 30px">
            <h4>Thông tin Cá Nhân</h4>
          </div> 
          <div style="background-color:white;padding:10px 30px;border-radius:10px;margin:10px 0px"> 
          <div class="row">
                <div class="col-md-12">
          <div class="inputs">
            <label>Tên Tài Khoản</label>
            <input class="form-control" v-model="customers.username" type="text" placeholder="UserName" :disabled="true" />
          </div>
        </div>
        <div class="col-md-12">
          <div class="inputs">
            <label>Tên Đầy Đủ</label>
            <input class="form-control" v-model="customers.fullname" type="text" placeholder="UserName" />
          </div>
        </div>
        <div class="col-md-12">
          <div class="inputs">
            <label>Mật Khẩu</label>
            <input class="form-control" v-model="customers.password" type="password" placeholder="Mật Khẩu" />
          </div>
        </div>
        <div class="col-md-12">
          <div class="inputs">
            <label>Địa Chỉ Email</label>
            <input class="form-control" v-model="customers.email" type="text" placeholder="email" />
          </div>
        </div>
        <div class="col-md-12">
          <div class="inputs">
            <label>Số Điện Thoại</label>
            <input class="form-control" v-model="customers.phone" type="text" placeholder="phone" />
          </div>
        </div>
         <div class="col-md-12">
          <div class="inputs">
            <label>Ngày Tham Gia</label>
            <input class="form-control" v-model="customers.created_at" type="text" placeholder="phone" :disabled="true" />
          </div>
        </div>
      </div>
      <div style="margin-right:190px;" class="mt-3 gap-2 d-flex justify-content-end">
        <b-button style="font-weight:bold;color:black" id="show-btn"  variant="warning"  @click="edit" class="mb-2">Lưu thông tin</b-button>
              <b-modal id="bv-modal-example" hide-footer>
    <template #modal-title>
      Thông báo:
    </template>
    <div class="d-block text-center">
      <h3>Cập nhật Thành Công</h3>
    </div>
    <b-button  class="mt-3" block @click="$bvModal.hide('bv-modal-example')">Đóng</b-button>
  </b-modal>
      </div>
        </div>         
      </div>
       <div style="width:50%;margin: 0px 30px;">
           <div class="rank" style="background-color:white;padding:10px;border-radius:20px;margin:30px 50px">
              <h4>Bảng xếp hạng top 10</h4>
          </div>
          <div style="background-color:white;padding:10px;border-radius:10px;margin:-20px 0px">  
             <b-card-text style="margin-left:115px" class="clearfix" v-for="rank in ranks" v-bind:key="rank.user_id"
            ><img style="float: left; width: 35px; height: 35px; border-radius: 25px; " v-bind:src="rank.image" alt=""><p style=" float: left; margin-left: 10px; color: #333399;">{{ rank.fullname }} - Điểm tich lũy: {{ rank.score }}</p></b-card-text
          >                       
          </div>
        </div>
    </div>
    <div class="history" style="background-color:white;padding:10px;border-radius:20px;margin:50px 200px 20px 200px">
        <h4>
          Lịch sử hoạt động 
        </h4>
    </div>
    <div style="background-color:white;padding:10px;border-radius:20px;margin:0px 30px">
        <div>
          <b-tabs content-class="mt-3" align="center">
            <b-tab title="Danh sách tin rao vặt" active>
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Ngày đăng </th>
                    <th scope="col">Tên bài viết</th>
                    <th scope="col">Lượt  like</th>
                    <th scope="col">Lượt  Xem</th>

                  </tr>
                </thead>
                <tbody>
                  <tr v-for="classifileds in classifiled" v-bind:key="classifileds.id_classifieds">
                    <th scope="row">1</th>
                    <td>{{classifileds.date}}</td>
                    <td>{{classifileds.name_classifieds}}</td>
                    <td>{{classifileds.like}}</td>
                    <td>{{classifileds.view}}</td>

                  </tr>
                </tbody>
              </table>
            </b-tab>
            <b-tab title="Danh sách bài viết">
               <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Ngày đăng </th>
                    <th scope="col">Loại bài </th>
                    <th scope="col">Tên bài viết</th>
                    <th scope="col">Lượt  like</th>
                    

                  </tr>
                </thead>
                <tbody>
                  <tr v-for="topics in topic" v-bind:key="topics.topics">
                    <th></th>
                    <td>{{topics.datetime}}</td>
                    <td>{{topics.category}}</td>
                    <td>{{topics.title}}</td>
                    <td>{{topics.like_topic}}</td>
                    
                  </tr>
                </tbody>
              </table>
              
            </b-tab>
          </b-tabs>
        </div>
    </div>
    </div>
  </div>
</template>

<style>
body {
  background-color: blue;
}
.history{
  background: #E55D87;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #5FC3E4, #E55D87);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #5FC3E4, #E55D87); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

}
.head{
  background: #ADA996;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #EAEAEA, #DBDBDB, #F2F2F2, #ADA996);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #EAEAEA, #DBDBDB, #F2F2F2, #ADA996); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

  
}
.info{
  background: #3CA55C;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #B5AC49, #3CA55C);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #B5AC49, #3CA55C); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
}
.rank{
  background: #314755;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #26a0da, #314755);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #26a0da, #314755); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

}
.card {
  border: none;
}

.image {
  position: relative;
}

.image span {
  background-color: blue;
  color: #fff;
  padding: 6px;
  height: 30px;
  width: 30px;
  border-radius: 50%;
  font-size: 13px;
  position: absolute;
  display: flex;
  justify-content: center;
  align-items: center;
  top: -0px;
  right: 0px;
}

.user-details h4 {
  color: blue;
}

.ratings {
  font-size: 30px;
  font-weight: 600;
  display: flex;
  justify-content: left;
  align-items: center;
  color: #f9b43a;
}

.user-details span {
  text-align: left;
}

.inputs label {
  display: flex;
  margin-left: 3px;
  font-weight: 500;
  font-size: 13px;
  margin-bottom: 4px;
}

.inputs input {
  font-size: 14px;
  height: 40px;
  border: 2px solid #ced4da;
}

.inputs input:focus {
  box-shadow: none;
  border: 2px solid blue;
}

.about-inputs label {
  display: flex;
  margin-left: 3px;
  font-weight: 500;
  font-size: 13px;
  margin-bottom: 4px;
}

.about-inputs textarea {
  font-size: 14px;
  height: 100px;
  border: 2px solid #ced4da;
  resize: none;
}

.about-inputs textarea:focus {
  box-shadow: none;
}

.btn {
  font-weight: 600;
}

.btn:focus {
  box-shadow: none;
}
</style>
<script>
import axios from "axios";
export default {
  data() {
    return {
      user: sessionStorage.getItem("userId"),
      fullname: sessionStorage.getItem("userName"),
      customers: [],
      customer: {
        user_id: "",
        fullname: "",
        username: "",
        image: "",
        password: "",
        email: "",
        phone: "",
        score: "",
        created_at: ""
      },
      ranks:[],
      classifiled:[],
      topic:[]
    };
  },
  created() {
    this.fetchCustomers();
  },
  methods: {
    fetchCustomers: function () {
      axios.get("/api/get-user-by-id/" + this.user).then((res) => {
        this.customers = res.data.customer;
        this.ranks = res.data.rank;
        this.classifiled = res.data.classifiled;
        this.topic = res.data.topic;
      });
    },

    edit() {
      this.dialogVisible = false
      axios.put('/api/update-user/' + this.user, {
        fullname: this.customers.fullname,
        username: this.customers.username,
        password: this.customers.password,
        image: this.customers.image,
        email: this.customers.email,
        phone: this.customers.phone,
        score: this.customers.score
      })
        .then(res => {
          if (res.data === 'Update success') {
             this.$bvModal.show('bv-modal-example')
   /*          setTimeout(this.fetchCustomers, 10000) */
          } else {
            this.$message({
              message: 'Có lỗi xảy ra vui lòng thử lại!',
              type: 'warning'
            })
            setTimeout(this.fetchCustomers, 0)
          }
        })
    },
    cancel(){
      this.fetchCustomers()
    }
  },
};
</script>
