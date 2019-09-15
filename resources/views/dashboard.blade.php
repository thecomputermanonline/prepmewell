@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!

                        <p>My name: {{Auth::user()->name}}</p>
                        <p>My Email: {{Auth::user()->email}}</p>
                        <p>My Role: {{Auth::user()->role}}</p>
                        <img alt="{{Auth::user()->name}}" src="{{Auth::user()->image}}"/>

{{--                        @role('admin', 'admin')--}}

{{--                        <h1>Hello from the admin</h1>--}}

{{--                        @endrole--}}

{{--                        @role('Admin')--}}

{{--                        <h1>Hello from the marker</h1>--}}

{{--                        @endrole--}}

{{--                        @role('student')--}}

{{--                        <h1>Hello from the student</h1>--}}

{{--                        @endrole--}}

                        @if (auth()->check())
                            @if (auth()->user()->hasRole('admin'))
                                <h1>Hello from the admin</h1>
                            @endif
                            @if (auth()->user()->hasRole('marker'))
                                    <h1>Hello from the marker</h1>
                                @endif


                                @if (auth()->user()->hasRole('student'))
                                <h1>Hello from the student</h1>
                            @endif
                        @endif


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
