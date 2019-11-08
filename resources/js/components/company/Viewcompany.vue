<template id="show-company">
  <div>
      <h3 class="text-center">{{ company.name }} <strong>Details</strong></h3>
      <div class="row">
          <div class="col-3">
            <div>
                <img :src="'../storage/' + company.image" class="img-responsive">
            </div>
          </div>

          <div class="col-9">
            <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col" class="text-center" colspan="2">{{ company.name }}</th>
                </tr>
            </thead>
            <tbody>               
                <tr>
                    <td>Name</td>
                    <td>{{ company.name }}</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>{{ company.email }}</td>
                </tr>
                <tr>
                    <td>Phone number</td>
                    <td>{{ company.number }}</td>
                </tr>
                <tr>
                    <td>Country</td>
                    <td>{{ company.contry }}</td>
                </tr>
                <tr>
                    <td>State</td>
                    <td>{{ company.state }}</td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td>{{ company.address }}</td>
                </tr>
                <tr>
                    <td>Sector</td>
                    <td>{{ company.type }}</td>
                </tr>
                <tr>
                    <td>Profile</td>
                    <td>{{ company.Profile }}</td>
                </tr>
                <tr>
                    <td>Year of establishment</td>
                    <td>{{ company.YOE }}</td>
                </tr>
            </tbody>
        </table>
          </div>

      </div>
      
  </div>
</template>

<script>
import Axios from 'axios';
export default {
data: function() {
    return {
        image: null,
        company: [],
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
            console.log(response.data);
        }).catch(error => console.log(error));
}
}
</script>

<style>

</style>