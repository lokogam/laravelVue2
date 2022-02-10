<template>
<div>

     <div class="wrapper">

        <narvar-2/>
        <div class=" main">
        <header-2/>
        </div>

     </div>
</div>
</template>

<script>
    import { defineComponent } from 'vue'
    import Header2 from '@/Admin2/Header2.vue'
import Narvar2 from '../../admin2/Narvar2.vue'

    export default defineComponent({
        components: {
                Header2,
                Narvar2,
                
                },
    })
</script>