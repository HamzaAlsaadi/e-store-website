<template>
    <body>
        <HeaderAdmin />

        <form class="contact-form">
            <h1>Add Company</h1>
            <label> Name Company : </label>
            <div class="txtb">
                <input type="text" v-model="namecompany" />
            </div>

            <label> Address Company : </label>
            <div class="txtb">
                <input type="text" v-model="address" />
            </div>

            <button type="button" @click="Addcompany()" class="btn">Add</button>
        </form>
        <div class="attendance-list">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>address</th>
                        <th>created at</th>
                        <th>updated at</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="element in companies" :key="element.id">
                        <td>{{ element.id }}</td>
                        <td>{{ element.company_name }}</td>
                        <td>{{ element.company_address }}</td>
                        <td>{{ element.created_at }}</td>
                        <td>{{ element.updated_at }}</td>
                        <td>
                            <button
                                class="dd"
                                @click="deletecompany(element.id)"
                            >
                                <i class="fa fa-trash"></i>
                            </button>
                        </td>
                        <td>
                            <button><i class="fas fa-edit"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <FooTer />
    </body>
</template>
<script>
import HeaderAdmin from "@/components/HeaderAdmin.vue";
import FooTer from "@/components/footer.vue";
import axios from "axios";

export default {
    name: "CompanyAdmin",
    components: {
        HeaderAdmin,
        FooTer,
    },
    data() {
        return {
            namecompany: "",
            address: "",
            companies: [],
        };
    },
    methods: {
        Addcompany() {
            axios({
                method: "post",
                url: "http://127.0.0.1:8000/api/create-Company",
                data: {
                    company_name: this.namecompany,
                    company_address: this.address,
                },
            })
                .then((response) => {
                    console.log(response);
                    alert(response.data);
                })
                .catch(function (error) {
                    console.log(error.data);
                    console.log(error.response);
                })
                .catch(function () {
                    window.alert("hi");
                });
        },
        getcompany() {
            axios({
                method: "get",
                url: "http://127.0.0.1:8000/api/Company/",
            })
                .then((response) => {
                    console.log(response);
                    this.companies = response.data;
                })
                .catch(function (error) {
                    console.log(error.data);
                    console.log(error.response);
                })
                .catch(function () {
                    window.alert("hi");
                });
        },
        deletecompany(id) {
            axios({
                method: "post",
                url: "http://127.0.0.1:8000/api/delete-Company?id=" + id,
            })
                .then((response) => {
                    console.log(response);
                    window.location.reload();
                })
                .catch(function (error) {
                    console.log(error.data);
                    console.log(error.response);
                })
                .catch(function () {
                    window.alert("hi");
                });
        },
    },
    mounted() {
        this.getcompany();
    },
};
</script>
<style scoped>
* {
    background-color: black;
}

.contact-form {
    box-sizing: border-box;
    border-radius: 8px;
    text-align: center;
    box-shadow: 0 0 20px #000000b3;
    font-family: "Montserrat";
    color: white;
}

.contact-form h1 {
    margin-top: 0;
    font-weight: 200;
}

.txtb {
    border: 1px solid gray;
    margin: 8px 0;
    padding: 12px 18px;
    border-radius: 8px;
    background: white;
}

.txtb label {
    display: block;
    color: #ffffff;
    text-transform: uppercase;
    font-size: 14px;
}

.txtb input {
    width: 100%;
    border: none;
    background: white;
    outline: none;
    font-size: 18px;
    margin-top: 6px;
}

.btn {
    background: #333;
    padding: 14px 0;
    color: black;
    text-transform: uppercase;
    cursor: pointer;
    margin-top: 8px;
    width: 50%;
    border-radius: 8px;
    box-shadow: none;
    transition: 0.5s ease;
}

input[type="submit"]:hover {
    background-color: #979797;
}

.attendance-list {
    width: 100%;
    padding: 10px;
    margin-top: 10px;
    background-color: #000000;
    border-radius: 10px;
    box-shadow: 0 20px 35px rgba(0, 0, 0, 0.1);
}

.table {
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 15px;
    min-width: 100%;
    overflow: hidden;
    border-radius: 5px 5px 0 0;
}

table thead tr {
    color: #fff;
    background: #454545;
    text-align: left;
    font-weight: bold;
}

.table th,
.table td {
    padding: 12px 15px;
}

.table tbody tr {
    border-bottom: 1px solid #ddd;
}

.table tbody tr {
    background: #979797;
}

.table tbody tr:last-of-type {
    border-bottom: 2px solid #ffffff;
}

.table button {
    padding: 6px 20px;
    border-radius: 10px;
    cursor: pointer;
    color: #000000;
    background-color: #454545;
    border: 1px solid #ffffff;
}

.table button:hover {
    background: #373737;
    color: #fff;
    transition: 0.5rem;
}
</style>
