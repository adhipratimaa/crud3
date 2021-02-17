<template>
  <div class="container">
     <div class="dashboard-box">
      <h2 class="panel-title">Dashboard</h2>
      <p>Welcome to your dashboard</p>
    </div>
   </div>
</template>



<script>
export default {
    data()
    {
    // variable decleration insode return ok
    return{
      apiLocation:"",

    }
  },
        mounted(){
          if(this.$root.token==null){
           this.$root._router.push('/login');
          }
          console.log(window.apiLocation);
          
        },
        methods:{
          
        },

    }
              </script>


