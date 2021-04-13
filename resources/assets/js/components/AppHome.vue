<template>
    <div>
        <navbar></navbar>
         <router-view></router-view>
    </div>
</template>

<script>
import navbar from './Navbar'
import Login from './Login/Login'

export default {
    components:{navbar,Login}
}
</script>

<style>

</style>