<template>
    <section class="vh-100" style="background-color: #eeeeee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-8">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img
                src="https://s.meta.com.vn/img/thumb.ashx/Data/image/2021/09/27/4.png"
                alt="login form"
                class="img-fluid" style="border-radius: 1rem 0 0 1rem;"
              />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form action="/api/login" method="POST" @submit.prevent="loginUser()" >

                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                    <span class="h1 fw-bold mb-0">Logo</span>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;text-align:center">Sign into your account</h5>

                  <div class="form-outline mb-4">
                    <input type="text" id="form2Example17"  v-model="username" class="form-control form-control-lg" />
                    <label class="form-label" for="form2Example17">Email address</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password"  v-model="password" id="form2Example27" class="form-control form-control-lg" />
                    <label class="form-label" for="form2Example27">Password</label>
                  </div>

                  <div class="pt-1 mb-4">
                    <input class="btn btn-primary btn-lg btn-block" style="width: 100%;" type="submit" value="Login" />

                     <a   href="./api/login-google"  class="btn btn-lg btn-block btn-primary" style="background-color: #dd4b39;text-decoration:none" ><i class="fab fa-google me-2"></i> Sign in with google</a>
                  </div>
                  <div style="text-align:center">
                    <a class="small text-muted" href="#!" style="text-align:center">Forgot password?</a><br>
                    <p class="mb-5 pb-lg-2" style="color: #393f81;margin-top:20px">Don't have an account? <a href="./registration_view" style="color: #393f81;">Register here</a></p>
                </div>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</template>
<script>

    export default {
        data(){
                return {
                    username:'',
                    password:''
                }
        },
        mounted() {

        },
        methods:{
            loginUser(){
                axios.post('/api/login',{username: this.username, password: this.password}).then((res) => {
                  console.log(res)
                    if(res.data === "Login failed"){
                        alert("Sai tên đăng nhập hoặc mật khẩu");
                    } else{

                          sessionStorage.setItem('userId',res.data.dataId);
                          sessionStorage.setItem('userName',res.data.dataName);
                          sessionStorage.setItem('userImage',res.data.dataImage);
                          sessionStorage.setItem('userScore',res.data.dataScore);
                        window.location.href = "https://tech4rum.org/home#/forum";
                    }
                })
            }
        }

    }
</script>


