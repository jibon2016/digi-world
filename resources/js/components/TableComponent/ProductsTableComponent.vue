<script setup>
import { ref, onMounted} from 'vue';
import axios from 'axios'
import TableCore from "@/components/TableCore.vue";

const items = ref([])
const headers = ref([])
const loading = ref(false)

// defineProps({
//   products: Object,
// })

headers.value =  [
          { field: 'id',title: 'ID', isUnique: true, sort:false, type: 'number'},
          { field: 'title', title: 'Title' },
          { field: 'price', title: 'Price (tk)', type: 'number' },
          { field: 'discountPercentage', title: 'Discount (%)' , type: 'number' },
          { field: 'rating', title: 'Rating',sort: false, minWidth: '120px', headerClass: 'justify-center', cellClass: 'justify-center' },
          { field: 'stock', title: 'Stock' , },
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
        <TableCore v-if="loading" :items=items :headers=headers @handle-edit="editValue" @handle-delete="deleteValue"/>
    </div>
</template>
