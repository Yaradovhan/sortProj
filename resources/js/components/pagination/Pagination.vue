<template>
    <nav>
        <ul class="pagination justify-content-end">
            <li class="page-item" v-bind:class="{ disabled: meta.current_page === 1 }">
                <a class="page-link" href="#" @click.prevent="switched(meta.current_page -1)">
                    <span>
                        &laquo;
                    </span>
                </a>
            </li>
            <li class="page-item" v-bind:class="{ active: meta.current_page === x }" v-for="x in meta.last_page">
                <a class="page-link" @click.prevent="switched(x)" href="#">
                    {{x}}
                </a>
            </li>
            <li class="page-item" v-bind:class="{ disabled: meta.current_page === meta.last_page }">
                <a class="page-link" href="#" @click.prevent="switched(meta.current_page +1)">
                    <span>
                        &raquo;
                    </span>
                </a>
            </li>
        </ul>
    </nav>
</template>

<script>
    export default {
        props: [
            'meta'
        ],
        methods: {
            switched(page) {
                if (this.pageIsOutOfBounds(page)) {
                    return;
                }
                this.$emit("pagination:switched", page)

                this.$router.replace({
                    query: Object.assign({}, this.$route.query, {page})
                })
            },
            pageIsOutOfBounds(page) {
                return page <= 0 || page > this.meta.last_page;
            }
        },
    }
</script>

<style scoped>

</style>