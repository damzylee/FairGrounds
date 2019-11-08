<template id="company-list">
    <div class="row">
        <div>
            <router-link to="/add-company" class="btn btn-primary btn-xs">
                Add new Post
            </router-link>
        <br><br>
        </div>

        <table class="table text-center table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Company Name</th>
                    <th scope="col">Company Email</th>
                    <th scope="col">Company Number</th>
                    <th scope="col">Company Country</th>
                    <th class="col-md-2" scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                
                <tr v-for="(company, index) in filteredCompanies" v-bind:key="company.id">
                    <td>{{ index + 1 }}</td>
                    <td>{{ company.name }}</td>
                    <td>{{ company.email }}</td>
                    <td>{{ company.number }}</td>
                    <td>{{ company.country }}</td>
                    <td>
                       <router-link class="btn btn-info btn-xs" v-bind:to="{name: 'Viewcompany', params: {id: company.id}}">Show</router-link>
                       <router-link class="btn btn-warning btn-xs" v-bind:to="{name: 'Editcompany', params: {id: company.id}}">Edit</router-link>
                       <router-link class="btn btn-danger btn-xs" v-bind:to="{name: 'Deletecompany', params: {id: company.id}}">Delete</router-link>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    import Axios from 'axios';
export default {
    name:'',

    data(){
        return{
            companies: [],
        }
    },

    created: function(){
        let uri = "http://localhost:8000/companies/";
        Axios.get(uri)
        .then((response) => {
            let ValidJson = '';
            let myArray = '';
            let moyo = response.data;
            ValidJson = moyo.replace("<!-- ","");
            myArray = JSON.parse(ValidJson);
            this.companies = myArray.data;
        }).catch(error => console.log(error));
    },

    computed: {
        filteredCompanies: function(){
            if(this.companies) {
                // console.log(this.companies);
                return this.companies;
            }
        }
    }
}
</script>

<style scoped>
    .table th, .table td {
    padding: 1.7rem;
    vertical-align: top;
    border-top: 1px solid #dee2e6;
}
</style>