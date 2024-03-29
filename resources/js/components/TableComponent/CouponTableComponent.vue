<script setup>
import { ref, onMounted} from 'vue';
import axios from 'axios'
import TableCore from "@/components/TableCore.vue";

const items = ref([])
const headers = ref([])
const loading = ref(false)

headers.value =  [
          { field: 'id',title: 'ID', isUnique: true, sort:false, type: 'number'},
          { field: "title", title: 'Coupon' },
          { field: "discountPercentage", title: 'Discount Parcentage', type: "number" },
          { field: "price", title: 'Amount Discount', type: "number" },
          { title: 'Actions', field: 'actions', sort: false },
        ]
onMounted( async () => {
    const response = await axios.get('https://dummyjson.com/products')
    .then(function (response) {
        items.value = response.data.products;
        loading.value = true;
  }).catch((error) => {
    console.log(error);
  })
});

function editValue(data){
  window.location.href = window.location.origin + '/coupon/edit/'+ data.id
}
function deleteValue(data){
  window.location.href = window.location.origin + '/coupon/delete/'+ data.id
}

</script>

<template>
    <div class="bg-white p-5">
        <TableCore v-if="loading" :items=items :headers=headers @handle-edit="editValue" @handle-delete="deleteValue"/>
    </div>
</template>
