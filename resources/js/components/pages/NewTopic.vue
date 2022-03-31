<template>
    <div class="new-topic" >
        <div class="alert alert-success" v-if="isSuccess">Thêm bài viết thành công !</div>
            <div class="form-group">
                <label>Tiêu đề</label>
                <input type="text" class="form-control" v-model="title" placeholder="Nhập tiêu đề bài viết">
            </div>
             <div class="form-group">
                <label>Hình ảnh</label>
                <input type="file" class="form-control" id="image">
            </div>
             <div class="form-group">
                <label>Nội dung</label>
                <ckeditor v-model="editorData" :config="editorConfig" ></ckeditor>
            </div>
            <div class="form-group">
                <label>Thể loại tiêu đề</label>
                <!-- <input type="text" class="form-control"  v-model="category"> -->
                <select class="form-select" v-model="category" aria-label="Default select example" >
                    <option selected>Vui lòng chọn thể loại tiêu đề !</option>
                    <option  value="Review">Review</option>
                    <option value="Xin ý kiến">Xin ý kiến</option>
                    <option value="Góc hỏi đáp">Góc hỏi đáp</option>
                     <option  value="Review">Tán gẫu</option>
                    <option value="Xin ý kiến">Ý kiến riêng</option>
                    <option value="Có thể bạn đã biết !">Có thể bạn đã biết !</option>
                    <option value="Tại sao ?">Tại sao ?</option>

                </select>
            </div>
            <!-- <div class="form-group">
                <label>User ID</label>
                <input type="text" class="form-control"  v-model="user_id">
            </div> -->
            <div class="form-group">
                <label>Thể loại bài viết</label>
                <select class="form-select" v-model="category_id" aria-label="Default select example" >
                    <option selected>Vui lòng chọn thể loại bài viết !</option>
                    <option  value="1">Mobile & Tablet</option>
                    <option value="2">PC & Laptop</option>
                    <option value="3">Phần mềm & Games</option>
                     <option  value="4">Tivi - Tủ lạnh & Đồ gia dụng</option>
                    <option value="5">Xe cộ</option>
                    <option value="6">Mạng xã hội</option>


                </select>
            </div>
            <div class="mt-3" >
                    <b-button variant="success" @click="onCreatePost">Thêm bài viết</b-button>
            </div>
    </div>
</template>
<script>
import axios from "axios";
export default {
    data(){
        return {
            user: sessionStorage.getItem("userId"),
            fullname: sessionStorage.getItem("userName"),
            title: "",
            content: "",
            category: "",
            user_id: "",
            category_id: "",
            isSuccess: false,
               editorData: '<p>Nhập nội dung bài viết !</p>',
                editorConfig: {
                    // The configuration of the editor.
                }
        }
    },
    mounted(){
    },

    methods: {
        onCreatePost(){

            axios.post('api/get-create-new-topic',{title: this.title, content: this.editorData, category: this.category, user_id: this.user, category_id: this.category_id},)
            .then(res => {
                this.isSuccess = true;
                location.reload();
                // console.log(res);
            });

        },




        }

}

</script>
