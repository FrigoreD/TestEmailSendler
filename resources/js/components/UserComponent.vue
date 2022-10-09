<template>
    <form class="form" @submit.prevent="userContact" method="POST" novalidate="novalidate">
        <div class="contact-form-success alert alert-success  mt-4" v-if="success">
            <strong>Success!</strong>
        </div>
        <div class="contact-form-error alert alert-danger mt-4" v-if="error">
            <strong>Error!</strong>
            <span class="mail-error-message test-1 d-block"></span>
        </div>
        <div class="input-container ic1">
            <input name="username" id="username" class="input" type="text" placeholder=" " />
            <div class="cut"></div>
            <label for="username" class="placeholder">Username</label>
        </div>
        <div class="input-container ic2">
            <input name="email" id="email" class="input" type="text" placeholder=" " />
            <div class="cut"></div>
            <label for="email" class="placeholder">Email</label>
        </div>
        <button type="text" class="submit">Создать пользователя</button>
    </form>
</template>

<script>
export default {
    name: "UserComponent",
    // data(){
    //     return{
    //         success: false,
    //         error: false,
    //         formData: {
    //             username: null,
    //             email: null,
    //         }
    //     }
    // },
    // methods:{
    //     storeContact(){
    //         axios.post('/user',this.formData)
    //             .then((res)=>{
    //             this.onSuccess(res.data.message)
    //         })
    //             .catch((error)=>{
    //                 this.onFailure(error.response.data.message)
    //             })
    //     },
    //     onSuccess(message){
    //         this.success = true;
    //     },
    //     onFailure(message){
    //         this.error = true;
    //     }
    // }
}
</script>

<style scoped>

</style>
