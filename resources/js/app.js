import './bootstrap';
import { createApp } from 'vue/dist/vue.esm-bundler.js';
import Alpine from 'alpinejs';

import LoginComponent from "@/components/LoginComponent.vue";
import ProductsTableComponent from "@/components/TableComponent/ProductsTableComponent.vue";
import CategoriesTableComponent from "@/components/TableComponent/CategoriesTableComponent.vue";
import CouponTableComponent from "@/components/TableComponent/CouponTableComponent.vue";
import BrandTableComponent from "@/components/TableComponent/BrandTableComponent.vue";
import OrderTableComponent from "@/components/TableComponent/OrderTableComponent.vue";
import ReviewTableComponent from "@/components/TableComponent/ReviewTableComponent.vue";
import UserTableComponent from "@/components/TableComponent/UserTableComponent.vue";
import OfferTableComponent from "@/components/TableComponent/OfferTableComponent.vue";
import ShoppingRuleTableComponent from "@/components/TableComponent/ShoppingRuleTableComponent.vue";
import SettingsTableComponent from "@/components/TableComponent/SettingsTableComponent.vue";

window.Alpine = Alpine;

Alpine.start();

// Vue Init
createApp({
    components: {
        LoginComponent,
        CategoriesTableComponent,
        ProductsTableComponent,
        CouponTableComponent,
        BrandTableComponent,
        OrderTableComponent,
        ReviewTableComponent,
        UserTableComponent,
        OfferTableComponent,
        SettingsTableComponent,
        ShoppingRuleTableComponent,
    }
})
.mount('#app')
