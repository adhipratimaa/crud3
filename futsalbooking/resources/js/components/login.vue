<template>
  <div class="container">
     <div class="login-box">
      <h2 class="panel-title">Login</h2>
        <input v-model="login.email" type="email" name="email" placeholder="Email" />
        <input v-model="login.password" type="password" name="password" placeholder="Password" />
        <button @click="loginUser">Login</button>
    </div>

    <div class="register-box">
      <h2 class="panel-title">Register</h2>
        <input v-model="register.name" type="text" name="name" placeholder="Full Name" />
        <input v-model="register.email" type="email" name="email" placeholder="Email" />
        <input v-model="register.password" type="password" name="password" placeholder="Password" />
        <input v-model="register.c_password" type="password" name="c_password" placeholder="Confirm password" />
        <button @click="registerUser">Register</button>
    </div>

    <div>{{taskMessage}}</div>
   </div>
</template>

<script>
export default {
    data()
    {
    // variable decleration insode return ok
    return{
      apiLocation:"",
      taskMessage:"",
      register:{
        url:"",
        name:"",
        password:"",
        email:"",
        c_password:"",
      },
      login:{
        url:"",
        email:"",
        password:"",
      },

    }
  },
        mounted(){
          this.apiLocation=window.apiLocation;
          this.register.url=this.apiLocation+"player/register";
          this.login.url=this.apiLocation+"authentication/login";
        },
        methods:{
          loginUser:function(){
            console.log("Logging in");
            this.taskMessage="Logging In";
            var form=new Form(this.login);
            var _this=this;
            form.post(this.login.url).then(function(result){
                if(result.status==200){
                          console.log(result);
                          _this.taskMessage="Successfully Logged In";
                          _this.$root.token=result.data.success.token;
                }else if(result.status==401){
                          console.log(result);
                         _this.taskMessage="Failed to Login";
                }else{
                        console.log(result);
                         _this.taskMessage="Server is not responding";
                }
                  
              }).catch(function(error){
                    console.log(error.message);
                    _this.taskMessage="Failed to Login";
              });
          },
          registerUser:function(){
            console.log("Registering");
            this.taskMessage="Registering";
            var form=new Form(this.register);
            var _this=this;
            form.post(this.register.url).then(function(result){
                if(result.status==200){
                          console.log(result);
                          _this.taskMessage="Successfully Registered";
                }else{
                          console.log(result);
                          _this.taskMessage="Could not register";
                }
                  
              }).catch(function(error){
                    console.log(error.message);
                    _this.taskMessage="Could not register";
              });;
          }
        },

      }
</script>


