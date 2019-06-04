@extends('layouts.app')

{{--@section('content')--}}
    {{--<div class="container">--}}
        {{--<div class="row justify-content-center">--}}
            {{--<div class="col-md-3">--}}
                {{--@include('courses.partials._filters')--}}
            {{--</div>--}}
            {{--<div class="col-md-9">--}}
                {{--<div class="card">--}}
                    {{--<div class="card-body">--}}
                        {{--@if($courses->count())--}}
                            {{--@each('courses.partials._course', $courses, 'course')--}}
                        {{--@else--}}
                            {{--No courses found--}}
                        {{--@endif--}}
                            {{--{{$courses->appends(request()->query())->links()}}--}}

                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="row">--}}
            {{--<div class="col-4">--}}
                {{--<div class="list-group" id="list-tab" role="tablist">--}}
                    {{--<a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list"--}}
                       {{--href="#list-home" role="tab" aria-controls="home">Home</a>--}}
                    {{--<a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list"--}}
                       {{--href="#list-profile" role="tab" aria-controls="profile">Profile</a>--}}
                    {{--<a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list"--}}
                       {{--href="#list-messages" role="tab" aria-controls="messages">Messages</a>--}}
                    {{--<a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list"--}}
                       {{--href="#list-settings" role="tab" aria-controls="settings">Settings</a>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-8">--}}
                {{--<div class="tab-content" id="nav-tabContent">--}}
                    {{--<div class="tab-pane fade show active" id="list-home" role="tabpanel"--}}
                         {{--aria-labelledby="list-home-list">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad--}}
                        {{--adipisci, consequatur cum doloribus facere hic incidunt inventore ipsa ipsum laudantium nemo--}}
                        {{--officiis possimus quod reprehenderit saepe suscipit tempore ut veritatis?--}}
                    {{--</div>--}}
                    {{--<div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">--}}
                        {{--Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aspernatur corporis dicta--}}
                        {{--dolor doloremque doloribus excepturi, illum necessitatibus neque nihil nobis, praesentium quod--}}
                        {{--sapiente unde ut. Perferendis qui suscipit vitae.--}}
                    {{--</div>--}}
                    {{--<div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">--}}
                        {{--Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus consequuntur, delectus--}}
                        {{--doloremque eius est excepturi fugit ipsa iste mollitia natus numquam obcaecati odio perferendis--}}
                        {{--ratione rerum sint soluta tempora voluptas.--}}
                    {{--</div>--}}
                    {{--<div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">--}}
                        {{--Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, commodi eius maiores nemo nulla--}}
                        {{--similique tenetur voluptatibus voluptatum. Labore minima nesciunt reiciendis velit? Adipisci--}}
                        {{--ducimus itaque natus pariatur perferendis quos.--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}

    {{--</div>--}}
{{--@endsection--}}
