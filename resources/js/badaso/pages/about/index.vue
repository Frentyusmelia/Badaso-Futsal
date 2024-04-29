<template>
    <div>
        <vs-row>
            <vs-col vs-lg="12">
                <vs-card>
                    <h1>About</h1>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quia, libero maxime porro doloremque, nihil iste similique illo laudantium iusto explicabo dicta corporis beatae dolorum? Earum excepturi dolores consequuntur ut quae.</p>
                </vs-card>
            </vs-col>
        </vs-row>
    </div>
</template>

<script>
export default {
    mounted() {
        this.$openLoader();
        this.$closeLoader();
    },
};
</script>
