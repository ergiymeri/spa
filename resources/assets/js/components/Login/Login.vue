<template>
    <div class="container">
        <br>
        <br>
        <div class="row justify-content-center">
            <div class="col-md-5">
                <form @submit.prevent="login">
                <div class="card">
                    <div class="card-header">
                        <h3>Login</h3>
                        <div class="text-muted">
                            <small>Fill your credentials to login.</small>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="p-4">
                            <input type="text" class="form-control form-control-alternative" v-model="form.email" placeholder="E-Mail Address">
                            <br>
                            <input type="password" class="form-control form-control-alternative" v-model="form.password" placeholder="Password">
                            <br>
                            <input type="submit" class="btn btn-default btn-block" value="Submit">
                        </div>
                    </div>
                </div>
                </form> 
            </div> 
        </div>    
    </div>
</template>

<script>
export default {
    data() {
        return {
            form: {
                email: null,
                password: null
            }
        }
    },

    methods: {
        login() {
            axios.post('/api/auth/login', this.form)
            .then(res => console.log(res.data))
            .catch(error => console.log(error.response.data))
        }
    }
}
</script>