<template>
    <div class="container">
        <transition name="fade">
            <div>
                <router-link to="/">List</router-link>
                <router-view></router-view>
            </div>
        </transition>
    </div>
</template>

<script>
export default {
    mounted(){
        console.log('component mounted');
    }

}
</script>

<style>

</style>