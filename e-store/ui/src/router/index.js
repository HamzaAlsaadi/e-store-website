import { createRouter, createWebHistory } from "vue-router";
import HomeView from "../views/HomeView.vue";
import help from "../views/Help.vue";
import SignUp from "../views/SignUp.vue";
import AllCategories from "../views/AllCategories";
import ForgotPassword from "../views/ForgotPassword";
import RePassword from "../views/RePassword";
import UserAccount from "../views/UserAccount";
import ProfileView from "../views/ProfileView";
import DetailsProduct from "../views/DetailsProduct";
import CheckOut from "../views/CheckOut";
import ComPare from "../views/Compare";
import SamSung from "../views/Samsung";
import ApPle from "../views/Apple";
import AsUs from "../views/Asus";
import GooGle from "../views/Google";
import HoNor from "../views/Honor";
import HtC from "../views/Htc";
import HuaWei from "../views/Huawei";
import InfInix from "../views/Infinix";
import LenOvo from "../views/Lenovo";
import AlAg from "../views/Lg";
import MeIzu from "../views/Meizu";
import MotoRola from "../views/Motorola";
import NoKia from "../views/Nokia";
import OnePlus from "../views/Oneplus";
import OpPo from "../views/Oppo";
import ReaLme from "../views/Realme";
import SoNy from "../views/Sony";
import TecNo from "../views/Tecno";
import ViVo from "../views/Vivo";
import XiaOmi from "../views/Xiaomi";
import ZtE from "../views/Zte";
import CompanyAdmin from "../views/CompanyAdmin";
import LatestProduct from "../views/LatestProduct";
import Admin from "../views/Admin";
import OfferProduct from "../views/OfferProduct";

const routes = [
    {
        path: "/OfferProduct",
        name: "OfferProduct",
        component: OfferProduct,
    },
    {
        path: "/AdmIn",
        name: "AdmIn",
        component: Admin,
    },
    {
        path: "/LatestProduct",
        name: "LatestProduct",
        component: LatestProduct,
    },
    {
        path: "/CompanyAdmin",
        name: "CompanyAdmin",
        component: CompanyAdmin,
    },
    {
        path: "/Apple",
        name: "Apple",
        component: ApPle,
    },
    {
        path: "/Asus",
        name: "Asus",
        component: AsUs,
    },
    {
        path: "/Google",
        name: "google",
        component: GooGle,
    },
    {
        path: "/Honor",
        name: "Honor",
        component: HoNor,
    },
    {
        path: "/Htc",
        name: "Htc",
        component: HtC,
    },
    {
        path: "/Huawei",
        name: "Huawei",
        component: HuaWei,
    },
    {
        path: "/Infinix",
        name: "Infinix",
        component: InfInix,
    },
    {
        path: "/Lenovo",
        name: "Lenovo",
        component: LenOvo,
    },
    {
        path: "/Lg",
        name: "Lg",
        component: AlAg,
    },
    {
        path: "/Meizu",
        name: "Meizu",
        component: MeIzu,
    },
    {
        path: "/Motorola",
        name: "Motorola",
        component: MotoRola,
    },
    {
        path: "/Nokia",
        name: "Nokia",
        component: NoKia,
    },
    {
        path: "/Oneplus",
        name: "Oneplus",
        component: OnePlus,
    },
    {
        path: "/Oppo",
        name: "Oppo",
        component: OpPo,
    },
    {
        path: "/Realme",
        name: "Realme",
        component: ReaLme,
    },
    {
        path: "/Sony",
        name: "Sony",
        component: SoNy,
    },
    {
        path: "/Tecno",
        name: "Tecno",
        component: TecNo,
    },
    {
        path: "/Vivo",
        name: "Vivo",
        component: ViVo,
    },
    {
        path: "/Xiaomi",
        name: "Xiaomi",
        component: XiaOmi,
    },
    {
        path: "/Zte",
        name: "Zte",
        component: ZtE,
    },
    {
        path: "/Samsung",
        name: "Samsung",
        component: SamSung,
    },
    {
        path: "/Compare",
        name: "Compare",
        component: ComPare,
    },
    {
        path: "/CheckOut",
        name: "CheckOut",
        component: CheckOut,
    },
    {
        path: "/DetailsProduct",
        name: "DetailsProduct",
        component: DetailsProduct,
    },
    {
        path: "/ProfileView",
        name: "ProfileView",
        component: ProfileView,
    },
    {
        path: "/UserAccount",
        name: "UserAccount",
        component: UserAccount,
    },
    {
        path: "/RePassword",
        name: "Repassword",
        component: RePassword,
    },
    {
        path: "/ForgotPassword",
        name: "ForgotPassword",
        component: ForgotPassword,
    },
    {
        path: "/",
        name: "home",
        component: HomeView,
    },
    {
        path: "/AllCategories",
        name: "AllCategories",
        component: AllCategories,
    },
    {
        path: "/about",
        name: "about",
        // route level code-splitting
        // this generates a separate chunk (about.[hash].js) for this route
        // which is lazy-loaded when the route is visited.
        component: () =>
            import(/* webpackChunkName: "about" */ "../views/AboutView.vue"),
    },
    {
        path: "/help",
        name: "help",
        component: help,
    },
    {
        path: "/SignUp",
        name: "SignUp",
        component: SignUp,
    },
];

const router = createRouter({
    history: createWebHistory(process.env.BASE_URL),
    routes,
});

export default router;
