<template>
    <div style="background-color:white;">
        <div style="text-align:center;margin: 20px 0px">
            <h4>Tạo bảng tin rao vặt</h4>
        </div>

        <div class="form-group" style="background-color:white;padding:10px;border-radius:20px;border:5px solid #ecf0fa;">
             <label style="margin-bottom:10px">Tiêu đề tin tức</label>
            <b-form-input required v-model="name" placeholder="Nhập tiêu đề"></b-form-input>
        </div>
        <div style="background-color:white;padding:10px;border-radius:20px;border:5px solid #ecf0fa;">
            <b-container class="bv-example-row">
                <b-row>
                <b-col>
                    <p><span><i class="fas fa-chart-area"></i></span><span> Khu vực:</span> <b-form-input required v-model="city" placeholder="Nhập thông tin khu vực"></b-form-input></p>
                    <p><span><i class="fas fa-star-half-alt"></i></span><span> Tình trạng:</span> <b-form-input required v-model="status" placeholder="Nhập thông tin trình trạng sản phẩm"></b-form-input></p>
                    <p><span><i class="fas fa-money-bill-wave-alt"></i></span><span> Giá:</span> <b-form-input required v-model="price" placeholder="Nhập thông tin giá"></b-form-input></p>
                </b-col>
                <b-col>
                    <p><span><i class="fas fa-map-marked"></i></span><span> Địa chỉ:</span> <b-form-input required v-model="address" placeholder="Nhập thông tin địa chỉ"></b-form-input></p>
                    <p><span><i class="fas fa-phone"></i></span><span> Số điện thoại:</span> <b-form-input required v-model="phone" placeholder="Nhập thông tin số điện thoại"></b-form-input></p>
                    <p><span><i class="fas fa-id-card-alt"></i></span><span> Thông tin liên hệ:</span> <b-form-input required v-model="contact" placeholder="Nhập thông tin liên hệ"></b-form-input></p>
                </b-col>
                </b-row>
            </b-container>
        </div>
         <div class="form-group" style="background-color:white;padding:10px;border-radius:20px;border:5px solid #ecf0fa;">
                <label style="margin-bottom:10px">Mô tả thông tin rao vặt</label>
                <textarea style="width: 100%; height: 40%;" v-model="editorData" :config="editorConfig" ></textarea>
            </div>
            <div class="form-group" style="background-color:white;padding:10px;border-radius:20px;border:5px solid #ecf0fa;margin-bottom:20px">
                <label style="margin-bottom:10px">Ảnh sản phẩm</label>
                <input type="file">
            </div>
            <div class="form-group" style="background-color:white;padding:10px;border-radius:20px;border:5px solid #ecf0fa;margin-bottom:20px;text-align:center">
                <b-button variant="success" @click="addClass()">Tạo tin mới</b-button>
            </div>
    </div>

</template>
<script>

export default {
  data() {
      return {
        name:'',
        city:'',
        status:'',
        price:'',
        address:'',
        phone:'',
        contact:'',
        editorData:'',


      }
  },
  methods: {
      addClass (){
           if (sessionStorage.getItem('userId') == null){
                window.location.href='https://tech4rum.org/login_view';
            }else{
        axios.post('api/get-create-class',{name: this.name, city: this.city, status: this.status,
         price: this.price, address: this.address, phone: this.phone, contact: this.contact, editorData: this.editorData,id_user: sessionStorage.getItem('userId') })
            .then(res => {
               window.location.href='https://tech4rum.org/home#/product';
            });
            }
      }


  }
}
</script>
