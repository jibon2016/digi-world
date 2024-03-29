<script setup>
import { ref, onMounted} from 'vue';
import axios from 'axios'
import TableCore from "@/components/TableCore.vue";

const items = ref([])
const headers = ref([])
const loading = ref(false)

headers.value =  [
          { field: 'id',title: 'ID', isUnique: true, sort:false, type: 'number'},
          { field: 'title', title: 'Order No', type:"number", cellRenderer: () => Math.floor(Math.random() * 1111111 ) },
          { field: 'price', title: 'Order Price (tk)', type: "number" },
          { field: 'discountPercentage', title: 'Order Discount (%)', type: "number" },
          { field: 'stock', title: 'Order Qunatity', type:"number" },
          { field: 'actions', title: 'Actions', sort: false },
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
  window.location.href = window.location.origin + '/product/edit/'+ data.id
}
function deleteValue(data){
  window.location.href = window.location.origin + '/product/delete/'+ data.id
}

</script>

<template>
    <div class="bg-white p-5">
        <TableCore v-if="loading" :items=items :headers=headers @handle-edit="editValue" @handle-delete="deleteValue" />
    </div>
</template>
