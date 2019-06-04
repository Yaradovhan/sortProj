<template>
    <div class="media">
        <a class="mr-3" href="#"><img src="https://via.placeholder.com/84x84&text=..." alt="course.name"></a>
        <div class="media-body">
            <!--<div v-if="course.subject">Vue восхитителен!</div>-->
            <!--v-if ($course->subjects->count())-->
            <!--<ul class="list-inline">-->
            <!--@foreach($course->subjects as $subject)-->
            <!--<li class="list-inline-item">-->
            <!--<span class="btn btn-sm btn-outline-dark" style="color: {{$subject->colour_theme}}">{{$subject->name}}</span>-->
            <!--</li>-->
            <!--@endforeach-->
            <!--</ul>-->
            <!--@endif-->
            <ul class="list-inline" v-if="course.subjects">
                <li v-for="subject in course.subjects"
                    class="list-inline-item btn btn-sm btn-outline-dark"
                    v-bind:style="{color: subject.colour_theme}"
                >{{subject.name}}</li>
                <!--<span class="btn btn-sm btn-outline-dark" style="color: {{subject.colour_theme}}">{{$subject->name}}</span>-->
            </ul>
            <h5>{{course.name}}</h5>
            <ul class="list-inline">
                <span class="btn btn-primary btn-sm">
                <li class="list-inline-item">{{course.formattedAccess}}</li>
                </span>
                <span class="btn btn-primary btn-sm">
                <li class="list-inline-item">{{course.formattedDifficulty}}</li>
                </span>
                <span class="btn btn-primary btn-sm">
                <li class="list-inline-item">{{course.formattedType}}</li>
                </span>
                <span class="btn btn-primary btn-sm">
                <li class="list-inline-item">{{course.formattedStarted}}</li>
                </span>
            </ul>
        </div>
    </div>
</template>

<script>
    export default {

        data() {
            return {

            }

        },

        props: [
            'course'
        ]
    }
</script>