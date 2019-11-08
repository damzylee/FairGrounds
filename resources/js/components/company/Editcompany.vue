<template id="company-edit">
   <div>
        <h3 class="text-center">Edit Company</h3>

        <form v-on:submit.prevent="createCompany">

            <div class="form-group">
                <label for="edit-name">Company's name</label>
                <input id="edit-name" v-model="company.name" required>
            </div>

            <div class="form-group">
                <label for="edit-email">Company's email</label>
                <input id="edit-email" v-model="company.email" required>
            </div>

            <div class="form-group">
                <label for="edit-number">Company's phone number</label>
                <input id="edit-number" type="number" v-model="company.number" required>
            </div>

            <div class="form-group">
                <label for="edit-country">Country</label>
                <input id="edit-country" v-model="company.country" required>
            </div>

            <div class="form-group">
                <label for="edit-state">State</label>
                <input id="edit-state" v-model="company.state" required>
            </div>

            <div class="form-group">
                <label for="edit-address">Address</label>
                <input id="edit-address" v-model="company.address" required>
            </div>

            <div class="form-group">
                <label for="edit-type">Sector</label>
                <input id="edit-type" v-model="company.type" required>
            </div>

            <div class="form-group">
                <label for="edit-profile">Profile</label>
                <textarea  id="edit-profile" v-model="company.profile" cols="30" rows="10"></textarea>
            </div>

            <div class="form-group">
                <label for="edit-YOE">Year of establishment</label>
                <input id="edit-YOE" type="date" v-model="company.YOE" required>
            </div>

            <div class="form-group">
                <label for="preview" v-if="company.image">Preview of image</label>
                <div id="preview">
                    <img :src="company.image" class="img-responsive">
                </div>
            </div>

            <div class="form-group">
                <label for="edit-image">Upload Image</label>
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
        let uri = `http://localhost:8000/companies/${this.$route.params.id}`;

        Axios.patch(uri, this.company)
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
        ValidJson = moyo.replace("<!-- ","");
        myArray = JSON.parse(ValidJson);
        this.company = myArray.data;
    }).catch(error => console.log(error));
}
}


</script>

<style>
 img{
        max-height: 50px;
    }
</style>
}
</script>

<style>

</style>