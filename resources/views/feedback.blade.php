@extends('layouts.dashboard-layout')

@section('content')


@if (auth()->user()->hasRole('student'))
    <div class="account-settings profile feedback-section style2 style3">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title-head-holder">
                        <div class="title-head less-indent pt-0">
                            <h2>Writing Test Feedbacks</h2>
                            <time datetime="2018-02-16">23:14, Thursday, Feb 26, 2018</time>
                        </div>
                    </div>
                    <div class="default-tabs">
                        <div class="tab-nav-search">
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">Any</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Academic</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">General</a>
                                </li>
                            </ul>
                            <div class="search-form">
                                <input type="text" placeholder="Search">
                                <button type="sumbit">Search</button>
                            </div>
                        </div>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active">
                                <div class="feedback-block">
                                    <div class="title-holder">
                                        <div class="title-text">
                                            <h2>Academic Writing Mock Test: Vol 5</h2>
                                            <div class="marked-by">
                                                <span>Marked by: <a href="#" class="username">Ukfinest</a></span>
                                                <div class="tool_tip style2">
                                                    <a href="#" class="render-tooltip" data-original-title="" title="">
                                                        <img src="images/icons/info_ic.svg" alt="">
                                                    </a>
                                                    <div class="custom-tooltip" role="tooltip">
                                                        <div class="arrow"></div>
                                                        <div class="tooltip-inner">
                                                            <div class="username-holder">
                                                                <a href="#" class="title font-weight-medium">Swissking</a>
                                                                <ul class="rating-list">
                                                                    <li><img src="images/icons/star-full.svg" width="10" height="10"></li>
                                                                    <li><img src="images/icons/star-full.svg" width="10" height="10"></li>
                                                                    <li><img src="images/icons/star-full.svg" width="10" height="10"></li>
                                                                    <li><img src="images/icons/star-half.svg" width="10" height="10"></li>
                                                                    <li><img src="images/icons/star-empty.svg" width="10" height="10"></li>
                                                                </ul>
                                                            </div>
                                                            <ul class="marker-detail">
                                                                <li>Writing Band Score: 9.0</li>
                                                                <li>Occupation: Teacher</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#" class="btn">View Feedback</a>
                                    </div>
                                    <div class="marked-numbers">
                                        <span class="submit-time">Submitted: 23:14, 26/02/19</span>
                                        <ul>
                                            <li>
                                                <span class="title">Task<br>Achievement</span>
                                                <span class="marks">6.0</span>
                                            </li>
                                            <li>
                                                <span class="title">Coherence<br>and Cohesion</span>
                                                <span class="marks">7.5</span>
                                            </li>
                                            <li>
                                                <span class="title">Lexical<br>Resource</span>
                                                <span class="marks">7.0</span>
                                            </li>
                                            <li>
                                                <span class="title">Gramma<br>and Accuracy</span>
                                                <span class="marks">7.5</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="feedback-block">
                                    <div class="title-holder">
                                        <div class="title-text">
                                            <h2>General Writing Mock Test: Vol 4</h2>
                                            <div class="marked-by">
                                                <span>Marked by: <a href="#" class="username">SwissKing</a></span>
                                                <div class="tool_tip style2">
                                                    <a href="#" class="render-tooltip" data-original-title="" title="">
                                                        <img src="images/icons/info_ic.svg" alt="">
                                                    </a>
                                                    <div class="custom-tooltip" role="tooltip">
                                                        <div class="arrow"></div>
                                                        <div class="tooltip-inner">
                                                            <div class="username-holder">
                                                                <a href="#" class="title font-weight-medium">SwissKing</a>
                                                                <ul class="rating-list">
                                                                    <li><img src="images/icons/star-full.svg" width="10" height="10"></li>
                                                                    <li><img src="images/icons/star-full.svg" width="10" height="10"></li>
                                                                    <li><img src="images/icons/star-full.svg" width="10" height="10"></li>
                                                                    <li><img src="images/icons/star-half.svg" width="10" height="10"></li>
                                                                    <li><img src="images/icons/star-empty.svg" width="10" height="10"></li>
                                                                </ul>
                                                            </div>
                                                            <ul class="marker-detail">
                                                                <li>Writing Band Score: 9.0</li>
                                                                <li>Occupation: Teacher</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#" class="btn">View Feedback</a>
                                    </div>
                                    <div class="marked-numbers">
                                        <span class="submit-time">Submitted: 09:45, 28/02/19</span>
                                        <ul>
                                            <li>
                                                <span class="title">Task<br>Achievement</span>
                                                <span class="marks">6.0</span>
                                            </li>
                                            <li>
                                                <span class="title">Coherence<br>and Cohesion</span>
                                                <span class="marks">7.5</span>
                                            </li>
                                            <li>
                                                <span class="title">Lexical<br>Resource</span>
                                                <span class="marks">7.0</span>
                                            </li>
                                            <li>
                                                <span class="title">Gramma<br>and Accuracy</span>
                                                <span class="marks">7.5</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="feedback-block">
                                    <div class="title-holder">
                                        <div class="title-text">
                                            <h2>Academic Writing Mock Test: Vol 50</h2>
                                            <div class="marked-by">
                                                <span>Marked by: <a href="#" class="username">Juicy_jane</a></span>
                                                <div class="tool_tip style2">
                                                    <a href="#" class="render-tooltip" data-original-title="" title="">
                                                        <img src="images/icons/info_ic.svg" alt="">
                                                    </a>
                                                    <div class="custom-tooltip" role="tooltip">
                                                        <div class="arrow"></div>
                                                        <div class="tooltip-inner">
                                                            <div class="username-holder">
                                                                <a href="#" class="title font-weight-medium">Juicy_jane</a>
                                                                <ul class="rating-list">
                                                                    <li><img src="images/icons/star-full.svg" width="10" height="10"></li>
                                                                    <li><img src="images/icons/star-full.svg" width="10" height="10"></li>
                                                                    <li><img src="images/icons/star-full.svg" width="10" height="10"></li>
                                                                    <li><img src="images/icons/star-half.svg" width="10" height="10"></li>
                                                                    <li><img src="images/icons/star-empty.svg" width="10" height="10"></li>
                                                                </ul>
                                                            </div>
                                                            <ul class="marker-detail">
                                                                <li>Writing Band Score: 9.0</li>
                                                                <li>Occupation: Teacher</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#" class="btn">View Feedback</a>
                                    </div>
                                    <div class="marked-numbers">
                                        <span class="submit-time">Submitted: 09:45, 28/02/19</span>
                                        <ul>
                                            <li>
                                                <span class="title">Task<br>Achievement</span>
                                                <span class="marks">6.0</span>
                                            </li>
                                            <li>
                                                <span class="title">Coherence<br>and Cohesion</span>
                                                <span class="marks">7.5</span>
                                            </li>
                                            <li>
                                                <span class="title">Lexical<br>Resource</span>
                                                <span class="marks">7.0</span>
                                            </li>
                                            <li>
                                                <span class="title">Gramma<br>and Accuracy</span>
                                                <span class="marks">7.5</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="feedback-block">
                                    <div class="title-holder">
                                        <div class="title-text">
                                            <h2>General Writing Mock Test: Vol 5</h2>
                                            <div class="marked-by">
                                                <span>Marked by: <a href="#" class="username">Tony_stark</a></span>
                                                <div class="tool_tip style2">
                                                    <a href="#" class="render-tooltip" data-original-title="" title="">
                                                        <img src="images/icons/info_ic.svg" alt="">
                                                    </a>
                                                    <div class="custom-tooltip" role="tooltip">
                                                        <div class="arrow"></div>
                                                        <div class="tooltip-inner">
                                                            <div class="username-holder">
                                                                <a href="#" class="title font-weight-medium">Tony_stark</a>
                                                                <ul class="rating-list">
                                                                    <li><img src="images/icons/star-full.svg" width="10" height="10"></li>
                                                                    <li><img src="images/icons/star-full.svg" width="10" height="10"></li>
                                                                    <li><img src="images/icons/star-full.svg" width="10" height="10"></li>
                                                                    <li><img src="images/icons/star-half.svg" width="10" height="10"></li>
                                                                    <li><img src="images/icons/star-empty.svg" width="10" height="10"></li>
                                                                </ul>
                                                            </div>
                                                            <ul class="marker-detail">
                                                                <li>Writing Band Score: 9.0</li>
                                                                <li>Occupation: Teacher</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#" class="btn">View Feedback</a>
                                    </div>
                                    <div class="marked-numbers">
                                        <span class="submit-time">Submitted: 23:14, 26/02/19</span>
                                        <ul>
                                            <li>
                                                <span class="title">Task<br>Achievement</span>
                                                <span class="marks">6.0</span>
                                            </li>
                                            <li>
                                                <span class="title">Coherence<br>and Cohesion</span>
                                                <span class="marks">7.5</span>
                                            </li>
                                            <li>
                                                <span class="title">Lexical<br>Resource</span>
                                                <span class="marks">7.0</span>
                                            </li>
                                            <li>
                                                <span class="title">Gramma<br>and Accuracy</span>
                                                <span class="marks">7.5</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade pt-0">

                            </div>
                            <div class="tab-pane fade">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="popup-holder">
        <div id="unlock-test-popup" class="lightbox popup-report">
            <div class="box text-center">
                <h2>Unlock Mock Test</h2>
                <p>This essay is locked because it is not available in your current plan. you can add this test to your current plan or upgrade to a bigger plan.</p>
                <div class="btn-holder d-md-flex">
                    <span class="font-weight-medium mr-3">Add Script For ₦2800</span>
                    <a href="plans-upgrade.html" class="btn full">Upgrade Plan</a>
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