<template>
    <div class="page-wrapper" style="min-height: 875px;">
        <div class="container-fluid mt-lg-5 mt-md-5 pt-lg-2 pt-md-2">
            <div class="pl-1 pr-1">
                <breadcrums :breadcrumbUrl="breadcrumbUrl"></breadcrums>
                <div class="d-datos-principal ml-n3 mr-n3">
                    <p>Routes prototyped in vuejs</p>
                    <ul>
                        <li>Empresas</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</template>

<script lang="ts">
import {defineComponent} from 'vue'
import Breadcrums from '@/components/Breadcrums.vue';
import {useCore} from "@/modules/shared/use/useCore";

export default defineComponent({
    components: {Breadcrums},
    setup() {
        const {ERP_URL} = useCore();
        const breadcrumbUrl = ERP_URL + '/api/company/breadcrumbs';

        return {
            breadcrumbUrl
        }
    }
});

</script>

<style scoped>

</style>
