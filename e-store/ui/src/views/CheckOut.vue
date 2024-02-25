<template>
    <HeaderAllCategories />
    <div class="container mt-5 p-3 rounded cart">
        <div class="row no-gutters">
            <div class="col-md-8">
                <div class="product-details mr-2">
                    <div class="d-flex flex-row align-items-center">
                        <button
                            class="btn btn-primary btn-block d-flex justify-content-between mt-3"
                            type="button"
                        >
                            <router-link
                                to="/"
                                style="text-decoration: none; color: white"
                                ><i
                                    class="fa fa-long-arrow-left"
                                    style="margin: 5px 10px 0px 0px"
                                ></i
                                ><span class="ml-2">Continue Shopping</span>
                            </router-link>
                        </button>
                    </div>
                    <hr />
                    <h6 class="mb-0">Shopping cart</h6>
                    <div class="d-flex justify-content-between">
                        <span
                            >You have
                            {{ Object.keys($store.state.Order).length }} items
                            in your cart</span
                        >
                    </div>

                    <div
                        class="d-flex justify-content-between align-items-center mt-3 p-2 items rounded"
                        v-for="(product, index) in $store.state.Order"
                        :key="product.id"
                    >
                        <div class="d-flex flex-row">
                            <img
                                class="rounded"
                                :src="product.img"
                                width="40"
                            />
                            <div class="ml-2">
                                <span class="font-weight-bold d-block"
                                    >{{ product.name }}&nbsp;</span
                                >
                            </div>
                        </div>
                        <div class="d-flex flex-row align-items-center">
                            <span
                                class="d-block"
                                style="margin: 0px 257px 0px 0px"
                                ><button
                                    @click="
                                        if (
                                            $store.state.Order[index]['count'] >
                                            0
                                        ) {
                                            $store.state.Order[index][
                                                'count'
                                            ]--;
                                        }
                                        total_price();
                                    "
                                    class="btn btn-primary"
                                    type="button"
                                    style="
                                        margin: 0px 10px 0px 10px;
                                        padding: 0px 7px 0px 6px;
                                    "
                                >
                                    <span class="ml-2">-</span>
                                </button>
                                {{ product.count
                                }}<button
                                    @click="
                                        $store.state.Order[index]['count']++;
                                        total_price();
                                    "
                                    class="btn btn-primary"
                                    type="button"
                                    style="
                                        margin: 0px 0px 0px 10px;
                                        padding: 0px 5px 0px 5px;
                                    "
                                >
                                    <span class="ml-2">+</span>
                                </button></span
                            ><span class="d-block ml-5 font-weight-bold"
                                >${{ product.Price }}</span
                            ><button
                                @click="deleteproduct(index)"
                                class="btn btn-primary"
                                type="button"
                                style="
                                    margin: 0px 0px 0px 10px;
                                    padding: 0px 5px 0px 5px;
                                    background-color: white;
                                "
                            >
                                <span class="ml-2"
                                    ><i
                                        class="fa fa-trash-o ml-3 text-black-50"
                                    ></i
                                ></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="payment-info">
                    <div
                        class="d-flex justify-content-between align-items-center"
                    >
                        <span>Card details</span
                        ><img
                            class="rounded"
                            src="https://i.imgur.com/WU501C8.jpg"
                            width="30"
                        />
                    </div>
                    <span class="type d-block mt-3 mb-1">Card type</span
                    ><label class="radio">
                        <input
                            type="radio"
                            name="card"
                            value="payment"
                            checked
                        />
                        <span
                            ><img
                                width="30"
                                src="https://img.icons8.com/color/48/000000/mastercard.png"
                        /></span>
                    </label>

                    <label class="radio">
                        <input type="radio" name="card" value="payment" />
                        <span
                            ><img
                                width="30"
                                src="https://img.icons8.com/officel/48/000000/visa.png"
                        /></span>
                    </label>

                    <label class="radio">
                        <input type="radio" name="card" value="payment" />
                        <span
                            ><img
                                width="30"
                                src="https://img.icons8.com/ultraviolet/48/000000/amex.png"
                        /></span>
                    </label>

                    <label class="radio">
                        <input type="radio" name="card" value="payment" />
                        <span
                            ><img
                                width="30"
                                src="https://img.icons8.com/officel/48/000000/paypal.png"
                        /></span>
                    </label>
                    <div>
                        <label class="credit-card-label">Name on card</label
                        ><input
                            type="text"
                            class="form-control credit-inputs"
                            placeholder="Name"
                        />
                    </div>
                    <div>
                        <label class="credit-card-label">Card number</label
                        ><input
                            type="text"
                            class="form-control credit-inputs"
                            placeholder="0000 0000 0000 0000"
                        />
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label class="credit-card-label">Date</label
                            ><input
                                type="text"
                                class="form-control credit-inputs"
                                placeholder="12/24"
                            />
                        </div>
                        <div class="col-md-6">
                            <label class="credit-card-label">CVV</label
                            ><input
                                type="text"
                                class="form-control credit-inputs"
                                placeholder="342"
                            />
                        </div>
                    </div>
                    <hr class="line" />
                    <div class="d-flex justify-content-between information">
                        <span>Subtotal</span><span>${{ totalprice }}</span>
                    </div>
                    <div class="d-flex justify-content-between information">
                        <span>Shipping</span><span>$20.00</span>
                    </div>
                    <div class="d-flex justify-content-between information">
                        <span>Total(Incl. taxes)</span
                        ><span>${{ totalprice + 20 }}</span>
                    </div>
                    <button
                        @click="checkout()"
                        class="btn btn-primary btn-block d-flex justify-content-between mt-3"
                        type="button"
                    >
                        <span>${{ totalprice + 20 }}</span
                        ><span
                            >Checkout<i class="fa fa-long-arrow-right ml-1"></i
                        ></span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <FooTer />
</template>
<script>
import HeaderAllCategories from "@/components/HeaderAllCategories.vue";
import FooTer from "@/components/footer.vue";

import store from "@/store";
export default {
    name: "CheckOut",
    components: { HeaderAllCategories, FooTer },

    data() {
        return {
            totalprice: 0,
        };
    },
    methods: {
        total_price() {
            this.totalprice = 0;
            if (Object.keys(store.state.Order).length > 0) {
                for (
                    var index = 0;
                    index < Object.keys(store.state.Order).length;
                    index++
                ) {
                    this.totalprice +=
                        store.state.Order[index]["Price"] *
                        store.state.Order[index]["count"];
                }
            }
        },
        deleteproduct(index) {
            var i = index;
            console.log(index);
            if (Object.keys(store.state.Order).length == 1) {
                delete store.state.Order[i];
                this.total_price();
                store.state.counter--;
                console.log(store.state.Order);
                return;
            }
            for (i = 0; i < Object.keys(store.state.Order).length - 1; i++) {
                store.state.Order[i] = store.state.Order[i + 1];
            }
            delete store.state.Order[i];
            store.state.counter--;
            this.total_price();
        },
        checkout() {
            var F_cart = {};
            for (
                var index = 0;
                index < Object.keys(store.state.Order).length;
                index++
            ) {
                F_cart[index] = {
                    productID: store.state.Order[index]["id"],
                    Amount: store.state.Order[index]["count"],
                };
            }
            console.log(F_cart);
        },
    },
    mounted() {
        this.total_price();
    },
};
</script>
<style scoped>
.payment-info {
    background: blue;
    padding: 10px;
    border-radius: 6px;
    color: #fff;
    font-weight: bold;
}

.product-details {
    padding: 10px;
}

body {
    background: #eee;
}

.cart {
    background: #fff;
}

.p-about {
    font-size: 12px;
}

.table-shadow {
    -webkit-box-shadow: 5px 5px 15px -2px rgba(0, 0, 0, 0.42);
    box-shadow: 5px 5px 15px -2px rgba(0, 0, 0, 0.42);
}

.type {
    font-weight: 400;
    font-size: 10px;
}

label.radio {
    cursor: pointer;
}

label.radio input {
    position: absolute;
    top: 0;
    left: 0;
    visibility: hidden;
    pointer-events: none;
}

label.radio span {
    padding: 1px 12px;
    border: 2px solid #ada9a9;
    display: inline-block;
    color: #8f37aa;
    border-radius: 3px;
    text-transform: uppercase;
    font-size: 11px;
    font-weight: 300;
}

label.radio input:checked + span {
    border-color: #fff;
    background-color: blue;
    color: #fff;
}

.credit-inputs {
    background: rgb(102, 102, 221);
    color: #fff !important;
    border-color: rgb(102, 102, 221);
}

.credit-inputs::placeholder {
    color: #fff;
    font-size: 13px;
}

.credit-card-label {
    font-size: 9px;
    font-weight: 300;
}

.form-control.credit-inputs:focus {
    background: rgb(102, 102, 221);
    border: rgb(102, 102, 221);
}

.line {
    border-bottom: 1px solid rgb(102, 102, 221);
}

.information span {
    font-size: 12px;
    font-weight: 500;
}

.information {
    margin-bottom: 5px;
}

.items {
    -webkit-box-shadow: 5px 5px 4px -1px rgba(0, 0, 0, 0.25);
    box-shadow: 5px 5px 4px -1px rgba(0, 0, 0, 0.08);
}

.spec {
    font-size: 11px;
}
</style>
