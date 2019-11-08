<template id="company-delete">
<div>

  <h3>Delete company {{ company.name }}</h3>
  <form v-on:submit.prevent="deletePost">
      <p>The action cannot be undone</p>
      <button class="btn btn-xs btn-danger" type="submit" name="button"></button>
      <router-link class="btn btn-xs btn-primary" v-bind:to="'/'">Back</router-link>
  </form>
</div>
</template>

<script>
import Axios from 'axios';
export default {
name:'',

data: function() {
    return {
        image: null,
        company: {
            name: '',
            email: '',
            number: '',
            country: '',
            state: '',
            address: '',
            type: '',
            profile: '',
            YOE: '',
            image: ''
        }
    }
},

methods: {

        deletePost: function(){
        let uri = `http://localhost:8000/companies/${this.$route.params.id}`;

        Axios.delete(uri, this.company)
        .then((response) => {
            this.$router.push({name: 'Listcompany'})
        }).catch(error => console.log(error));
    }
    },

created: function(){
let uri = `http://localhost:8000/companies/${this.$route.params.id}`;

    Axios.get(uri)
    .then((response) => {
        let ValidJson = '';
        let myArray = '';
        let moyo = response.data;
        console.log(moyo);
        ValidJson = moyo.replace("<!-- ","");
        myArray = JSON.parse(ValidJson);
        this.company = myArray.data;
        console.log(myArray.data);
    }).catch(error => console.log(error));
}

}
</script>

<style>

</style>