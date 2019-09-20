@extends('layouts.dashboard-layout')

@section('content')

    @if (auth()->user()->hasRole('student'))

        <div class="account-settings profile style2 style3">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="title-head-holder">
                            <div class="title-head less-indent pt-0">
                                <h2>Discussions in the prep forum</h2>
                                <time datetime="2018-02-16">23:14, Thursday, Feb 26, 2018</time>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    @endif

    @if (auth()->user()->hasRole('marker'))

        <div class="user-selection marker-reg">
            <h1>Thank you for your interest in marking!</h1>
            <p>We will contact you by the mail provided on how to complete your registration and provide basic requirements that qualifies you to be a marker.</p>
            <div class="btns-holder">
                <a href="#" class="btn full">Check My Mail</a>
            </div>
        </div>

    @endif