@extends('layouts.dashboard-layout')

@section('content')


    <div class="container">



        <div class="two-items">
            <h2 class="heading">Dashboard</h2>
            <div class="date">23:14, Thursday, Feb 26, 2018</div>
        </div>

        <div class="inner chart-con">
            <div class="chart-head">
                <div class="heading">Line Chart</div>

                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="first-tab" data-toggle="tab" href="#first" role="tab" aria-controls="first" aria-selected="true">1 - 20</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="second-tab" data-toggle="tab" href="#second" role="tab" aria-controls="second" aria-selected="false">20 - 40</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="third-tab" data-toggle="tab" href="#third" role="tab" aria-controls="third" aria-selected="false">40 - 60</a>
                    </li>
                </ul>
            </div>

            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="first" role="tabpanel" aria-labelledby="first-tab">
                    <div id="chart-container"></div>
                </div>

                <div class="tab-pane fade" id="second" role="tabpanel" aria-labelledby="second-tab">
                    <div id="chart-container1"></div>
                </div>

                <div class="tab-pane fade" id="third" role="tabpanel" aria-labelledby="third-tab">
                    <div id="chart-container2"></div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="dashboard-info d-flex">
                    <div class="data">
                        <div class="heading">Test Taken</div>
                        <p class="body">Total test taken from all categories in history.</p>
                    </div>

                    <div class="number-dashboard">100</div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="dashboard-info d-flex">
                    <div class="data">
                        <div class="heading">Average Score</div>
                        <p class="body">Average band score awarded on all tests taken.</p>
                    </div>

                    <div class="number-dashboard">8.5</div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="dashboard-info d-flex">
                    <div class="data">
                        <div class="heading">Average Accuracy</div>
                        <p class="body">Average accuracy rate from all test taken.</p>
                    </div>

                    <div class="number-dashboard">92%</div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="dashboard-info d-flex">
                    <div class="data">
                        <div class="heading">Average Time</div>
                        <p class="body">Average time spent on a question.</p>
                    </div>

                    <div class="number-dashboard">19m</div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="dashboard-info big">
                    <div class="img">
                        <img src="images/headphone.svg" alt="" width="51" height="50px">
                    </div>

                    <div class="heading">Listening Test</div>
                    <p class="body">Detailed Performance</p>

                    <ul class="info-list">
                        <li>
                            <span>Total test taken:</span>
                            <span>0</span>
                        </li>

                        <li>
                            <span>Total questions:</span>
                            <span>0</span>
                        </li>

                        <li>
                            <span>Correct questions:</span>
                            <span>0</span>
                        </li>

                        <li>
                            <span>Incorrect questions:</span>
                            <span>0</span>
                        </li>

                        <li>
                            <span>Unanswered questions:</span>
                            <span>0</span>
                        </li>

                        <li>
                            <span>Average time:</span>
                            <span>0</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="dashboard-info big">
                    <div class="img">
                        <img src="images/read-icon.svg" alt="" width="51" height="50px">
                    </div>

                    <div class="heading">Reading Test</div>
                    <p class="body">Detailed Performance</p>

                    <ul class="info-list">
                        <li>
                            <span>Total test taken:</span>
                            <span>0</span>
                        </li>

                        <li>
                            <span>Total questions:</span>
                            <span>0</span>
                        </li>

                        <li>
                            <span>Correct questions:</span>
                            <span>0</span>
                        </li>

                        <li>
                            <span>Incorrect questions:</span>
                            <span>0</span>
                        </li>

                        <li>
                            <span>Unanswered questions:</span>
                            <span>0</span>
                        </li>

                        <li>
                            <span>Average time:</span>
                            <span>0</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="dashboard-info big">
                    <div class="img">
                        <img src="images/microphone.svg" alt="" width="33" height="50px">
                    </div>

                    <div class="heading">Speaking Test</div>
                    <p class="body">Detailed Performance</p>

                    <ul class="info-list">
                        <li>
                            <span>Total test taken:</span>
                            <span>35</span>
                        </li>

                        <li>
                            <span>Total questions:</span>
                            <span>178</span>
                        </li>

                        <li>
                            <span>Correct questions:</span>
                            <span>100</span>
                        </li>

                        <li>
                            <span>Incorrect questions:</span>
                            <span>60</span>
                        </li>

                        <li>
                            <span>Unanswered questions:</span>
                            <span>18</span>
                        </li>

                        <li>
                            <span>Average time:</span>
                            <span>37m</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="dashboard-info big">
                    <div class="img">
                        <img src="images/docs.svg" alt="" width="55" height="50">
                    </div>

                    <div class="heading">Writing Test</div>
                    <p class="body">Detailed Performance</p>

                    <ul class="info-list">
                        <li>
                            <span>Total test taken:</span>
                            <span>7</span>
                        </li>

                        <li>
                            <span>Task achievement:</span>
                            <span>8.5</span>
                        </li>

                        <li>
                            <span>Coherence and cohesion:</span>
                            <span>9.0</span>
                        </li>

                        <li>
                            <span>Lexical resource:</span>
                            <span>8.5</span>
                        </li>

                        <li>
                            <span>Grammar and accuracy:</span>
                            <span>7.0</span>
                        </li>

                        <li>
                            <span>Average time:</span>
                            <span>45m</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>





@endsection
