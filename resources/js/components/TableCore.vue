<script setup>
import {ref, reactive} from 'vue';
import Vue3Datatable from '@bhplugin/vue3-datatable';
import '@bhplugin/vue3-datatable/dist/style.css';
const props = defineProps({
    items: {
        type: Array,
        required: true
    },
    headers: {
        type: Array,
        required: true
    }
})

const rows = ref(null);

const loading = ref(false);
const total_rows = ref(0);

const params = reactive({
    current_page: 1,
    pagesize: 10,
    search: '',
    column_filters: [],
});

const changeServer = (data) => {
        params.current_page = data.current_page;
        params.pagesize = data.pagesize;
        params.column_filters = data.column_filters;
        params.search = data.search;
    };
    rows.value = props.items;

</script>

<template>
    <div>
        <div class="mb-5">
            <input v-model="params.search" type="text" class="form-input max-w-xs w-full" placeholder="Search..." />
        </div>
        <Vue3Datatable :rows="rows" :columns="props.headers" :sortable="true" :loading="loading" :totalRows="total_rows" :pageSize="params.pagesize" :search="params.search" @change="changeServer">
            <template #thumbnail="data">
                <div class="flex items-center gap-2">
                    <img :src="data.value.thumbnail" class="w-32 min-h-24" style="max-height: 36px;" alt="user-profile" />
                </div>
            </template>
            <template #image="data">
                <div class="flex items-center gap-2">
                    <img :src="data.value.image" class=" rounded-full w-32 min-h-24" style="max-height: 36px;" alt="user-profile" />
                </div>
            </template>
            <template #rating="data">
                <div class="flex items-center justify-center text-warning">
                    <div v-for="i in Math.floor(data.value.rating ?? Math.floor(Math.random() * 5))" :key="i + data.value.id">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="16"
                            height="16"
                            viewBox="0 0 24 24"
                            fill="#e2a03f"
                            stroke="#e2a03f"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="feather feather-star f-icon-line"
                        >
                            <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                        </svg>
                    </div>
                </div>
            </template>
            <template #actions="data">
                <div class="flex space-x-2">
                    <button type="button" class="bg-blue-500 px-3 py-1 rounded text-white hover:bg-gray-50 hover:text-gray-900 hover:border-blue-500" @click="$emit('handleEdit', data.value)">Edit</button>
                    <button type="button" class="bg-red-500 px-3 py-1 rounded text-white hover:bg-gray-50 hover:text-gray-900 hover:border-red-500" @click="$emit('handleDelete', data.value)">Delete</button>
                </div>
            </template>
        </Vue3Datatable>
    </div>
</template>
<style>
.bh-pagesize{
    padding: .375rem 1.5rem !important;
}
.bg-blue-500{
    --tw-bg-opacity: 1;
    background-color: rgb(59 130 246 / var(--tw-bg-opacity));
}
.hover\:border-blue-500:hover{
    --tw-bg-opacity: 1;
    border-width: 1px;
    border-color: rgb(59 130 246 / var(--tw-bg-opacity));
}
.bg-red-500{
    --tw-bg-opacity: 1;
    background-color: rgb(239 68 68 / var(--tw-bg-opacity));
}
.hover\:border-red-500:hover{
    --tw-bg-opacity: 1;
    border-width: 1px;
    border-color: rgb(239 68 68 / var(--tw-bg-opacity));
}
.min-h-24 {
    min-height: 6rem/* 96px */;
}
</style>
