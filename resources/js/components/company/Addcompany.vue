<template id="add-company">
    <div>
        <h3 class="text-center">Add new Company</h3>

        <form v-on:submit.prevent="createCompany">

            <div class="form-group">
                <label for="add-name">Company's name</label>
                <input id="add-name" v-model="company.name" required>
            </div>

            <div class="form-group">
                <label for="add-email">Company's email</label>
                <input id="add-email" v-model="company.email" required>
            </div>

            <div class="form-group">
                <label for="add-number">Company's phone number</label>
                <input id="add-number" type="number" v-model="company.number" required>
            </div>

            <div class="form-group">
                <label for="add-country">Country</label>
                <input id="add-country" v-model="company.country" required>
            </div>

            <div class="form-group">
                <label for="add-state">State</label>
                <input id="add-state" v-model="company.state" required>
            </div>

            <div class="form-group">
                <label for="add-address">Address</label>
                <input id="add-address" v-model="company.address" required>
            </div>

            <div class="form-group">
                <label for="add-type">Sector</label>
                <input id="add-type" v-model="company.type" required>
            </div>

            <div class="form-group">
                <label for="add-profile">Profile</label>
                <textarea  id="add-profile" v-model="company.profile" cols="30" rows="10"></textarea>
            </div>

            <div class="form-group">
                <label for="add-YOE">Year of establishment</label>
                <input id="add-YOE" type="date" v-model="company.YOE" required>
            </div>

            <div class="form-group">
                <label for="preview" v-if="company.image">Preview of image</label>
                <div id="preview">
                    <img :src="company.image" class="img-responsive">
                </div>
            </div>

            <div class="form-group">
                <label for="add-image">Upload Image</label>
                <input type="file" v-on:change="onFileChange" class="form-control">
            </div>


            <button type="submit" class="btn btn-xs btn-primary">Create Company</button>
            <router-link class="btn btn-xs btn-warning" v-bind:to="'/'">Cancel</router-link>
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

    onFileChange(e) {
                let files = e.target.files || e.dataTransfer.files;
                if (!files.length)
                    return;
                this.createImage(files[0]);
            },

    createImage(file) {
        let reader = new FileReader();
        let vm = this;
        reader.onload = (e) => {
            vm.company.image = e.target.result;
        };
        reader.readAsDataURL(file);
    },

        createCompany: function(){
        let uri = "http://localhost:8000/companies/";
        Axios.post(uri, this.company)
        .then((response) => {
            this.$router.push({name: 'Listcompany'})
        }).catch(error => console.log(error));
    }
    },
}


</script>

<style>
 img{
        max-height: 50px;
    }
</style>