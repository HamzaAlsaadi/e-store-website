<template>
    <!-- Header-->
    <HeaderPage name="ssssss" />
    <!-- AllBroducts-->
    <AllProducts />
    <!-- OtherCompany-->

    <OtherCompany />
    <!-- FooTer -->

    <FooTer />
</template>

<script>
// @ is an alias to /src
import HeaderPage from "@/components/Header.vue";
import AllProducts from "@/components/AllProducts.vue";
import FooTer from "@/components/footer.vue";
import OtherCompany from "@/components/OtherCompany.vue";

export default {
    components: {
        HeaderPage,
        AllProducts,
        OtherCompany,
        FooTer,
    },
};
</script>
<style></style>
