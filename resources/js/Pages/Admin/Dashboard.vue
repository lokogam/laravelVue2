<template>

    <header-1/>
    <narvar/>
    <footer-1/>

</template>

<script>
    import { defineComponent } from 'vue'
import Footer1 from '../../Admin/Footer1.vue'
import Header1 from '../../Admin/Header1.vue'
    
    import Narvar from '@/Admin/Narvar.vue'
    // import Narvar from '../../Admin/Narvar.vue'
     

    export default defineComponent({
        components: {
                Narvar,
                Header1,
                Footer1,
                },
    })
</script>