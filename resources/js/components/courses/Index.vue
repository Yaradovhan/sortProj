<template>
    <div class="row justify-content-center">
        <div class="col-md-3">
            <filters endpoint="/api/courses/filters"></filters>
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-body">
                    <template v-if="courses.length">
                        <course v-for="course in courses" :course="course" :key="course.id"></course>
                        <pagination :meta="meta"></pagination>
                    </template>
                    <template v-else>
                        No result
                    </template>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

    import Course from './partials/Course';
    import Pagination from '../pagination/Pagination';
    import Filters from './partials/Filters';

    export default {

        components: {
            Course, Pagination, Filters
        },

        watch: {
            '$route.query': {
                handler(query) {
                    this.getCourses(1, query)
                },
                deep: true
            }
        },

        data() {
            return {
                courses: [],
                meta: {},
            }
        },
        mounted() {
            this.getCourses()
        },
        methods: {
            getCourses(page = this.$route.query.page, query = this.$route.query) {
                axios.get('/api/courses', {
                    params: {
                        page,
                        ...query
                    }
                }).then((response) => {
                    this.courses = response.data.data
                    this.meta = response.data.meta
                })
            }
        }
    }
</script>