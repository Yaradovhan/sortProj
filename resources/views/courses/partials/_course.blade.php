<ul class="list-unstyled">
    <li class="media">
        <a class="mr-3" href="#"><img src="https://via.placeholder.com/64x64&text=..." alt="{{$course->name}}"></a>
        <div class="media-body">
            @if ($course->subjects->count())
                <ul class="list-inline">
                    @foreach($course->subjects as $subject)
                        <li class="list-inline-item">
                            <span class="border rounded border-info">{{$subject->name}}</span>
                        </li>
                    @endforeach
                </ul>
            @endif
            <h5 class="mt-0 mb-1">{{$course->name}}</h5>
            <ul class="list-inline">
                <span class="btn btn-primary btn-sm">
                <li class="list-inline-item">{{$course->formattedAccess}}</li>
                    {{--<a href=""></a>--}}
                </span>
                <span class="btn btn-primary btn-sm">
                <li class="list-inline-item">{{$course->formattedDifficulty}}</li>
                </span>
                <span class="btn btn-primary btn-sm">
                <li class="list-inline-item">{{$course->formattedType}}</li>
                </span>
                <span class="btn btn-primary btn-sm">
                <li class="list-inline-item">{{$course->formattedStarted}}</li>
                </span>
            </ul>
        </div>

    </li>
</ul>
