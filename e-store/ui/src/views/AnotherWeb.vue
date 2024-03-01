<template>
    <HeaderAllCategories />
    <body>
        <div class="container">
            <div class="search-bar text-center">
                <input
                    v-model="name"
                    type="search"
                    placeholder="Search your product"
                    class="search"
                />
                <button @click="getorders" class="search-button">
                    <i class="fa fa-search"></i>
                </button>
            </div>
            <div class="row justify-content-md-center">
                <div class="col-md-5">
                    <div class="beautiful-title">Search Product in Gsm</div>
                    <table class="table">
                        <tr>
                            <th class="text-center">Product Image</th>
                            <td>
                                <img
                                    src="src\assets\product-1.jpg"
                                    id="img1"
                                    alt=""
                                />
                            </td>
                        </tr>
                        <tr>
                            <th>Name iphone</th>
                            <td>N/A</td>
                        </tr>
                        <tr>
                            <th>Company</th>
                            <td>N/A</td>
                        </tr>
                        <tr>
                            <th>Price</th>
                            <td>N/A</td>
                        </tr>
                        <tr>
                            <th class="text-center">Netwoek technology</th>
                            <td>N/A</td>
                        </tr>
                        <tr>
                            <th>SIM</th>
                            <td>N/A</td>
                        </tr>
                        <tr>
                            <th>Demenation</th>
                            <td>N/A</td>
                        </tr>
                        <tr>
                            <th>Weight</th>
                            <td>N/A</td>
                        </tr>
                        <tr>
                            <th>Bulid</th>
                            <td>N/A</td>
                        </tr>
                        <tr>
                            <th>Size</th>
                            <td>N/A</td>
                        </tr>
                        <tr>
                            <th>Display</th>
                            <td>N/A</td>
                        </tr>
                        <tr>
                            <th>Resoulation</th>
                            <td>N/A</td>
                        </tr>
                        <tr>
                            <th>Chiapest</th>
                            <td>N/A</td>
                        </tr>
                        <tr>
                            <th>Cpu</th>
                            <td>N/A</td>
                        </tr>
                        <tr>
                            <th>GPY</th>
                            <td>N/A</td>
                        </tr>
                        <tr>
                            <th>Camera</th>
                            <td>N/A</td>
                        </tr>
                        <tr>
                            <th>Camera f</th>
                            <td>N/A</td>
                        </tr>
                        <tr>
                            <th>Feature Camera</th>
                            <td>N/A</td>
                        </tr>
                        <tr>
                            <th>Video</th>
                            <td>N/A</td>
                        </tr>
                        <tr>
                            <th>Sensores</th>
                            <td>N/A</td>
                        </tr>
                        <tr>
                            <th>Battarey</th>
                            <td>N/A</td>
                        </tr>
                        <tr>
                            <th>Charghing</th>
                            <td>N/A</td>
                        </tr>
                        <tr>
                            <th>Usb</th>
                            <td>N/A</td>
                        </tr>
                        <tr>
                            <th>model</th>
                            <td>N/A</td>
                        </tr>
                        <tr>
                            <th>Colores</th>
                            <td>N/A</td>
                        </tr>
                        <tr>
                            <th>Timestamps</th>
                            <td>N/A</td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-5">
                    <div class="beautiful-title">Search Product in Mobo</div>
                    <table class="table">
                        <tr>
                            <th class="text-center">Product Image</th>
                            <td>
                                <img
                                    src="src\assets\product-1.jpg"
                                    id="img1"
                                    alt=""
                                />
                            </td>
                        </tr>
                        <tr>
                            <th>Product Name</th>
                            <td>N/A</td>
                        </tr>
                        <tr>
                            <th>Company</th>
                            <td>N/A</td>
                        </tr>
                        <tr>
                            <th>Product Price</th>
                            <td>N/A</td>
                        </tr>
                        <tr>
                            <th class="text-center">Display Pattern</th>
                            <td>N/A</td>
                        </tr>
                        <tr>
                            <th>Resolution Pattern</th>
                            <td>N/A</td>
                        </tr>
                        <tr>
                            <th>Number Of Camera</th>
                            <td>N/A</td>
                        </tr>
                        <tr>
                            <th>PPI Pattern</th>
                            <td>N/A</td>
                        </tr>
                        <tr>
                            <th>Inches Pattern</th>
                            <td>N/A</td>
                        </tr>
                        <tr>
                            <th>Camera Pattern</th>
                            <td>N/A</td>
                        </tr>
                        <tr>
                            <th>Capacity Pattern</th>
                            <td>N/A</td>
                        </tr>
                        <tr>
                            <th>Date</th>
                            <td>N/A</td>
                        </tr>
                        <tr>
                            <th>Screen Size</th>
                            <td>N/A</td>
                        </tr>
                        <tr>
                            <th>Chipset</th>
                            <td>N/A</td>
                        </tr>
                        <tr>
                            <th>Process Pattern</th>
                            <td>N/A</td>
                        </tr>
                        <tr>
                            <th>Process Type</th>
                            <td>N/A</td>
                        </tr>
                        <tr>
                            <th>Gpu Pattern</th>
                            <td>N/A</td>
                        </tr>
                        <tr>
                            <th>OS</th>
                            <td>N/A</td>
                        </tr>
                        <tr>
                            <th>Space limit Pattern</th>
                            <td>N/A</td>
                        </tr>
                        <tr>
                            <th>UFS</th>
                            <td>N/A</td>
                        </tr>
                        <tr>
                            <th>Microsd Pattern</th>
                            <td>N/A</td>
                        </tr>
                        <tr>
                            <th>Speakers Pattern</th>
                            <td>N/A</td>
                        </tr>
                        <tr>
                            <th>Fingerprint Pattern</th>
                            <td>N/A</td>
                        </tr>
                        <tr>
                            <th>Other Sensors Pattern</th>
                            <td>N/A</td>
                        </tr>
                        <tr>
                            <th>Weight Pattern</th>
                            <td>N/A</td>
                        </tr>
                        <tr>
                            <th>Sim Pattern</th>
                            <td>N/A</td>
                        </tr>
                        <tr>
                            <th>Usb Pattern</th>
                            <td>N/A</td>
                        </tr>
                        <tr>
                            <th>Bluetooth Pattern</th>
                            <td>N/A</td>
                        </tr>
                        <tr>
                            <th>Refresh Rate Pattern</th>
                            <td>N/A</td>
                        </tr>
                        <tr>
                            <th>Timestamps</th>
                            <td>N/A</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </body>
    <FooTer />
</template>
<script>
import axios from "axios";
import HeaderAllCategories from "@/components/HeaderAllCategories.vue";
import FooTer from "@/components/footer.vue";
export default {
    name: "AnotherWeb",
    components: {
        HeaderAllCategories,
        FooTer,
    },
    data() {
        return {
            name: "",
            gsm: {},
            arena: {},
            products: [],
        };
    },
    methods: {
        getorders() {
            axios({
                method: "get",
                url: "http://127.0.0.1:8000/api/IR?mobile_name=" + this.name,
            })
                .then((response) => {
                    this.products = response.data;
                    this.gsm = this.products[0];
                    this.arena = this.products[1];
                    console.log(this.gsm);
                    console.log(this.arena);
                })
                .catch(function (error) {
                    console.log(error);
                })
                .catch(function () {
                    window.alert("hi");
                });
        },
    },
};
</script>
<style scoped>
body {
    background-color: #000000;
    margin: 0;
    padding: 0;
}
.search-bar {
    display: flex;
    align-items: center;
    justify-content: center;
}

.search {
    width: 50%;
    height: 35px;
    padding: 10px;
    border: 2px;
    border-radius: 10px 0 0 10px;
    background-color: #191919;
    color: #ffffff;
    font-size: 16px;
    margin-top: 30px;
}

.search-button {
    height: 35px;
    border: 2px;
    width: 35px;
    border-radius: 0 10px 10px 0;
    background-color: #252424;
    color: #ffffff;
    padding: 10px;
    cursor: pointer;
    margin-top: 30px;
}

.beautiful-title {
    font-size: 1rem;
    text-align: center;
    color: #fff;
    background-color: #191919;
    padding: 10px;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
    margin: 0;
    margin-top: 15px;
}

.table {
    color: #ffffff;
    text-align: center;
    justify-content: center;
    border-radius: 0 0 10px 10px;
    overflow: hidden;
}

.table th,
.table td {
    padding: 20px;
    font-size: 0.75rem;
    background-color: #1a1a1a;
    color: #ffffff;
}

img {
    width: 100%;
    max-height: 25vh;
    object-fit: contain;
    border-radius: 1vw;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

@media (max-width: 767px) {
    .beautiful-title {
        font-size: 1rem;
    }
    .table th,
    .table td {
        font-size: 0.75rem;
        padding: 10px;
    }

    img {
        max-height: 15vh;
    }
}
</style>
