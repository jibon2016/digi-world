<script setup>
import { ref, onMounted} from 'vue';
import axios from 'axios'
import TableCore from "@/components/TableCore.vue";

const items = ref([])
const headers = ref([])

headers.value =  [
        { field: 'id',title: 'ID', isUnique: true, sort:false, type: 'number'},
        { key: "image", title: 'Logo' },
        { key: "thumbnail", title: 'Logo' },
        { title: 'Actions', key: 'actions', sortable: false },
    ]
onMounted( async () => {
    const response = await axios.get('https://dummyjson.com/image/400x200/008080/ffffff?text=Digi-World')
    .then(function (response) {
        items.value = response.data;
        console.log(response);
  }).catch((error) => {
    console.log(error);
  })
});
</script>

<template>
    <div class="bg-white p-6">
        <div class="w-full flex flex-col float-start">
            <h3 class="block uppercase text-gray-700 text-xs font-bold mb-2">
                Brand Name
            </h3>
            <input class="appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" value="Digi World" type="text">
        </div>
        <div class="px-4 flex items-center">
            <div class="w-full md:w-1/2 mb-6 md:mb-6">
                <h3 class="text-xl py-3  ">Company Logo</h3>
                <img src="https://dummyjson.com/image/400x200/008080/ffffff?text=Digi-World" alt="">
            </div>
        
            <div class="w-full md:w-1/2 mb-6 md:mb-6">
                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                        Change logo
                    </label>
                    <input class="appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="file">
                </div>
            </div>
            
        </div>
        <div class="flex flex-wrap mb-6 w-full">
            <div class="w-full md:w-1/3 px-5 mb-6 md:mb-6">
                <button class="bg-indigo-500 px-5 text-white py-2 ">Save</button>
            </div>
        </div>
        <!-- <TableCore :items=items :headers=headers /> -->
    </div>
</template>
