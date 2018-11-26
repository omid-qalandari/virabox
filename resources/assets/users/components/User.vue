<template>
    <div class="m-grid m-grid--hor m-grid--root m-page">
        <custom-header></custom-header>

        <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">

            <custom-sidebar></custom-sidebar>

            <!-- Content section -->
            <div class="m-grid__item m-grid__item--fluid m-wrapper">

                <!-- BEGIN: Subheader -->
                <div class="m-subheader ">
                    <div class="d-flex align-items-center">
                        <div class="mr-auto">
                            <h3 class="m-subheader__title "></h3>
                        </div>
                    </div>
                </div>
                <!-- END: Subheader -->

                <!-- Begin:: ContentSection -->
                <div class="m-content">
                </div>
                <!-- END:: ContentSection -->

            </div>
        </div>

        <custom-footer></custom-footer>
    </div>
</template>

<script>
    import CustomHeader from '../components/CustomHeader'
    import CustomSidebar from '../components/CustomSidebar'
    import CustomFooter from '../components/CustomFooter'

    export default {
        components: {
            CustomSidebar, CustomHeader, CustomFooter
        }
    }
</script>

<style>

</style>