<script setup>
import { onMounted } from 'vue'
const props = defineProps(['name'])
onMounted(() => {
    console.log("Mounded Vue 3 SFC")
})
</script>

<template>
    <div class="bg-white py-3">
        <span>Hello</span>
    </div>
</template>
