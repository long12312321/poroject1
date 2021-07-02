<template>
  
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="font-login/images/img-01.png" alt="IMG">
				</div>
				<form class="login100-form validate-form" v-on:submit.prevent="login()">
					<span class="login100-form-title">
						Member Login
					</span>
						
					<div >{{checkLogin}}</div>
					<div class="form-group" >
						<input  v-model="user.email" class="input100" type="text" name="email" placeholder="Email">
						<div v-if="errors.email">{{errors.email[0]}}</div>
                       
					</div>
					

					<div class="form-group" >
						<input  v-model="user.pass" class="input100" type="password" name="pass" placeholder="Password">
						<div v-if="errors.pass">{{errors.pass[0]}}</div>
					</div>
					
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" name="login">
							Login
						</button>
					</div>
                    	<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2">
							Username / Password?
						</a>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
                    </form>

				
				
			</div>
		</div>
	</div>
    
</template>

<script>
export default {
    data(){
        return{
            user:{
                email:'',
                pass:'',
                name:'',
                role:''
               
            },
            errors:{},
			checkLogin:'',
        }
    },
    methods:{
        login:function(){
             axios
                .post('http://127.0.0.1:8000/api/login',this.user)
                .then(response => {
                    if(response.data === ""){
						this.checkLogin ="Account or Password wrong";
                    }else{
                        console.log("dang nhap thanh cong   ");
                        console.log(response.data.id);
                        // localStorage.setItem('lang',this.user.email);
                        this.$router.push({name: 'home'});
                    }
                    console.log(response)
                })
                .catch(error => {
                    this.errors = error.response.data.errors  
                    console.log(error.response.data)
                   
                })
             	
        }
    }

}
</script>


<style>

</style>