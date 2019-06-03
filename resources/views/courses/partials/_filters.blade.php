<p>
    <a href="{{route('courses.index')}}">Clear all filters</a>
</p>

@include('courses.partials._filter_list',[
    'map'=> ['free'=>'Free', 'premium'=>'Premium'],
    'key' => 'access'
])

@include('courses.partials._filter_list',[
    'map'=> ['beginner'=>'Beginner', 'intermediate'=>'Intermediate', 'advanced'=>'Advanced'],
    'key' => 'difficulty'
])

@include('courses.partials._filter_list',[
    'map'=> ['theory'=>'Theory', 'project'=>'Project', 'snippet'=>'Snippet'],
    'key' => 'type'
])

@auth
    @include('courses.partials._filter_list',[
        'map'=> ['true'=>'Started', 'false'=>'Not started'],
        'key' => 'started'
    ])
@endauth

@include('courses.partials._filter_list',[
    'map'=> $subjects,
    'key' => 'subject'
])


{{--<div class="row">--}}
{{--    <div class="col-4">--}}
{{--        <div class="list-group" id="list-tab" role="tablist">--}}
{{--            <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Home</a>--}}
{{--            <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Profile</a>--}}
{{--            <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Messages</a>--}}
{{--            <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Settings</a>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="col-8">--}}
{{--        <div class="tab-content" id="nav-tabContent">--}}
{{--            <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">...</div>--}}
{{--            <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">...</div>--}}
{{--            <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">...</div>--}}
{{--            <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">...</div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
