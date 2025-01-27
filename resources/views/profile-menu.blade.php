<ul class="profile-menu">
    <li class="d-none d-md-block">
        <a href="profile.html" class="name">{{ Auth::user()->name }}</a>
        @if (auth()->user()->hasRole('student'))
            <span class="score">Target score: 7.5</span>
        @endif

    </li>
    <li class="profile_ic dropdown">
        <a href="#" class="dropdown-toggle" role="button" id="profile_dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
{{--            <img src="images/header/profile_ic.jpg" alt="">--}}

            @if(Auth::user()->image)
                <img src="images/header/{{ Auth::user()->image }}" />
            @else
                <img alt="{{Auth::user()->name}}" src="images/header/profile_ic.jpg" />
            @endif

        </a>
        <div class="dropdown-menu" aria-labelledby="profile_dropdown">
            <a href="#" class="dropdown-item d-md-none">{{Auth::user()->name}}
                @if (auth()->user()->hasRole('student'))
                    <span class="score d-block text-left">Target score: 7.5</span></a>
                @endif


            <a class="dropdown-item" href="/my-profile">Profile Settings</a>
            <a class="dropdown-item" href="/my-interests">My interests</a>
            <a class="dropdown-item" href="/billing">My-Plans</a>
            <a class="dropdown-item" href="/my-testimonials"> My Testimonals</a>
            <a class="dropdown-item" href="/my-proile-edit">My Account</a>
            <a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>


        </div>
    </li>
</ul>





{{--<p>My name: {{Auth::user()->name}}</p>--}}
{{--<p>My Email: {{Auth::user()->email}}</p>--}}
{{--<p>My Role: {{Auth::user()->role}}</p>--}}
{{--<img alt="{{Auth::user()->name}}" src="{{Auth::user()->image}}"/>--}}


{{--@if (auth()->check())--}}
{{--    @if (auth()->user()->hasRole('admin'))--}}
{{--        <h1>Hello from the admin</h1>--}}
{{--    @endif--}}
{{--    @if (auth()->user()->hasRole('marker'))--}}
{{--        <h1>Hello from the marker</h1>--}}
{{--    @endif--}}


{{--    @if (auth()->user()->hasRole('student'))--}}
{{--        <h1>Hello from the student</h1>--}}
{{--    @endif--}}
{{--@endif--}}