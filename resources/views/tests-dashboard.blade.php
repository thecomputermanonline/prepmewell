
@extends('layouts.dashboard-layout')

@section('content')


    @if (auth()->user()->hasRole('student'))

<div class="account-settings profile style2 style3">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="title-head-holder">
                    <div class="title-head less-indent pt-0">
                        <h2>Take Test</h2>
                        <time datetime="2018-02-16">23:14, Thursday, Feb 26, 2018</time>
                    </div>
                </div>
                <div class="tabs-holder style2">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="listening-tab" data-toggle="tab" href="#listening" role="tab" aria-controls="listening" aria-selected="true">Listening Test</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="reading-tab" data-toggle="tab" href="#reading" role="tab" aria-controls="reading" aria-selected="false">Reading Test</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="speaking-tab" data-toggle="tab" href="#speaking" role="tab" aria-controls="speaking" aria-selected="false">Speaking Test</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="writing-tab" data-toggle="tab" href="#writing" role="tab" aria-controls="writing" aria-selected="false">Writing Test</a>
                        </li>
                    </ul>
                    <div class="tab-content take-test" id="myTabContent">
                        <div class="tab-pane fade show active" id="listening" role="tabpanel" aria-labelledby="listening-tab">
                            <div class="five-columns">
                                <div class="col-holder">
                                    <a href="#" class="score-card">
                                        <div class="heading">
                                            <strong class="title font-weight-medium d-block">Mock Test: Vol 1</strong>
                                        </div>
                                        <span class="sub-title d-block">Band Score:</span>
                                        <span class="obt-score">5.5</span>
                                        <ul>
                                            <li>
                                                <span class="title-text">Time (60:00)</span>
                                                <span class="info-text">03:46</span>
                                            </li>
                                            <li>
                                                <span class="title-text">Accuracy</span>
                                                <span class="info-text">48%</span>
                                            </li>
                                        </ul>
                                    </a>
                                </div>
                                <div class="col-holder">
                                    <a href="#" class="score-card">
                                        <div class="heading">
                                            <strong class="title font-weight-medium d-block">Mock Test: Vol 2</strong>
                                        </div>
                                        <span class="sub-title d-block">Band Score:</span>
                                        <span class="obt-score">4.5</span>
                                        <ul>
                                            <li>
                                                <span class="title-text">Time (60:00)</span>
                                                <span class="info-text red">60:00</span>
                                            </li>
                                            <li>
                                                <span class="title-text">Accuracy</span>
                                                <span class="info-text">32%</span>
                                            </li>
                                        </ul>
                                    </a>
                                </div>
                                <div class="col-holder">
                                    <a href="#" class="score-card">
                                        <div class="heading">
                                            <strong class="title font-weight-medium d-block">Mock Test: Vol 3</strong>
                                        </div>
                                        <span class="sub-title d-block">Band Score:</span>
                                        <span class="obt-score">6.5</span>
                                        <ul>
                                            <li>
                                                <span class="title-text">Time (60:00)</span>
                                                <span class="info-text">58:32</span>
                                            </li>
                                            <li>
                                                <span class="title-text">Accuracy</span>
                                                <span class="info-text">71%</span>
                                            </li>
                                        </ul>
                                    </a>
                                </div>
                                <div class="col-holder">
                                    <a href="#" class="score-card">
                                        <div class="heading">
                                            <strong class="title font-weight-medium d-block">Mock Test: Vol 4</strong>
                                        </div>
                                        <span class="sub-title d-block">Band Score:</span>
                                        <span class="obt-score">7.0</span>
                                        <ul>
                                            <li>
                                                <span class="title-text">Time (60:00)</span>
                                                <span class="info-text">50:01</span>
                                            </li>
                                            <li>
                                                <span class="title-text">Accuracy</span>
                                                <span class="info-text">79%</span>
                                            </li>
                                        </ul>
                                    </a>
                                </div>
                                <div class="col-holder">
                                    <a href="#" class="score-card">
                                        <div class="heading">
                                            <strong class="title font-weight-medium d-block">Mock Test: Vol 5</strong>
                                        </div>
                                        <span class="sub-title d-block">Band Score:</span>
                                        <span class="obt-score">7.5</span>
                                        <ul>
                                            <li>
                                                <span class="title-text">Time (60:00)</span>
                                                <span class="info-text">58:32</span>
                                            </li>
                                            <li>
                                                <span class="title-text">Accuracy</span>
                                                <span class="info-text">71%</span>
                                            </li>
                                        </ul>
                                    </a>
                                </div>
                                <div class="col-holder">
                                    <a href="#" class="score-card blue">
                                        <div class="heading">
                                            <strong class="title font-weight-medium d-block">Mock Test: Vol 6</strong>
                                        </div>
                                        <span class="sub-title d-block">Band Score:</span>
                                        <span class="obt-score">0.0</span>
                                        <ul>
                                            <li>
                                                <span class="title-text">Time (60:00)</span>
                                                <span class="info-text">00:00</span>
                                            </li>
                                            <li>
                                                <span class="title-text">Accuracy</span>
                                                <span class="info-text">0%</span>
                                            </li>
                                        </ul>
                                    </a>
                                </div>
                                <div class="col-holder">
                                    <a href="#" class="score-card blue">
                                        <div class="heading">
                                            <strong class="title font-weight-medium d-block">Mock Test: Vol 7</strong>
                                        </div>
                                        <span class="sub-title d-block">Band Score:</span>
                                        <span class="obt-score">0.0</span>
                                        <ul>
                                            <li>
                                                <span class="title-text">Time (60:00)</span>
                                                <span class="info-text">00:00</span>
                                            </li>
                                            <li>
                                                <span class="title-text">Accuracy</span>
                                                <span class="info-text">0%</span>
                                            </li>
                                        </ul>
                                    </a>
                                </div>
                                <div class="col-holder">
                                    <a href="#" class="score-card blue">
                                        <div class="heading">
                                            <strong class="title font-weight-medium d-block">Mock Test: Vol 8</strong>
                                        </div>
                                        <span class="sub-title d-block">Band Score:</span>
                                        <span class="obt-score">0.0</span>
                                        <ul>
                                            <li>
                                                <span class="title-text">Time (60:00)</span>
                                                <span class="info-text">00:00</span>
                                            </li>
                                            <li>
                                                <span class="title-text">Accuracy</span>
                                                <span class="info-text">0%</span>
                                            </li>
                                        </ul>
                                    </a>
                                </div>
                                <div class="col-holder">
                                    <a href="#" class="score-card blue">
                                        <div class="heading">
                                            <strong class="title font-weight-medium d-block">Mock Test: Vol 9</strong>
                                        </div>
                                        <span class="sub-title d-block">Band Score:</span>
                                        <span class="obt-score">0.0</span>
                                        <ul>
                                            <li>
                                                <span class="title-text">Time (60:00)</span>
                                                <span class="info-text">00:00</span>
                                            </li>
                                            <li>
                                                <span class="title-text">Accuracy</span>
                                                <span class="info-text">0%</span>
                                            </li>
                                        </ul>
                                    </a>
                                </div>
                                <div class="col-holder">
                                    <a href="listening-pre-vol-50.html" class="score-card blue">
                                        <div class="heading">
                                            <strong class="title font-weight-medium d-block">Mock Test: Vol 50</strong>
                                        </div>
                                        <span class="sub-title d-block">Band Score:</span>
                                        <span class="obt-score">0.0</span>
                                        <ul>
                                            <li>
                                                <span class="title-text">Time (60:00)</span>
                                                <span class="info-text">00:00</span>
                                            </li>
                                            <li>
                                                <span class="title-text">Accuracy</span>
                                                <span class="info-text">0%</span>
                                            </li>
                                        </ul>
                                    </a>
                                </div>
                            </div>
                            <nav aria-label="Page navigation">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <i class="fas fa-chevron-left"></i>
                                        </a>
                                    </li>
                                    <li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="dots" href="#">...</a></li>
                                    <li class="page-item"><a class="page-link" href="#">10</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="next">
                                            <i class="fas fa-chevron-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="tab-pane fade pt-0" id="reading" role="tabpanel" aria-labelledby="reading-tab">
                            <ul class="nav nav-tabs" id="reading-inner-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link" id="academic-tab" data-toggle="tab" href="#academic" role="tab" aria-controls="academic" aria-selected="false">Academic</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" id="general-tab" data-toggle="tab" href="#general" role="tab" aria-controls="profile" aria-selected="true">General</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="ReadingInnerTabContent">
                                <div class="tab-pane fade" id="academic" role="tabpanel" aria-labelledby="academic-tab">
                                    <div class="five-columns">
                                        <div class="col-holder">
                                            <a href="#" class="score-card">
                                                <div class="heading">
                                                    <strong class="title font-weight-medium d-block">Mock Test: Vol 1</strong>
                                                </div>
                                                <span class="sub-title d-block">Band Score:</span>
                                                <span class="obt-score">5.5</span>
                                                <ul>
                                                    <li>
                                                        <span class="title-text">Time (60:00)</span>
                                                        <span class="info-text">03:46</span>
                                                    </li>
                                                    <li>
                                                        <span class="title-text">Accuracy</span>
                                                        <span class="info-text">48%</span>
                                                    </li>
                                                </ul>
                                            </a>
                                        </div>
                                        <div class="col-holder">
                                            <a href="#" class="score-card">
                                                <div class="heading">
                                                    <strong class="title font-weight-medium d-block">Mock Test: Vol 2</strong>
                                                </div>
                                                <span class="sub-title d-block">Band Score:</span>
                                                <span class="obt-score">4.5</span>
                                                <ul>
                                                    <li>
                                                        <span class="title-text">Time (60:00)</span>
                                                        <span class="info-text red">60:00</span>
                                                    </li>
                                                    <li>
                                                        <span class="title-text">Accuracy</span>
                                                        <span class="info-text">32%</span>
                                                    </li>
                                                </ul>
                                            </a>
                                        </div>
                                        <div class="col-holder">
                                            <a href="#" class="score-card">
                                                <div class="heading">
                                                    <strong class="title font-weight-medium d-block">Mock Test: Vol 3</strong>
                                                </div>
                                                <span class="sub-title d-block">Band Score:</span>
                                                <span class="obt-score">6.5</span>
                                                <ul>
                                                    <li>
                                                        <span class="title-text">Time (60:00)</span>
                                                        <span class="info-text">58:32</span>
                                                    </li>
                                                    <li>
                                                        <span class="title-text">Accuracy</span>
                                                        <span class="info-text">71%</span>
                                                    </li>
                                                </ul>
                                            </a>
                                        </div>
                                        <div class="col-holder">
                                            <a href="#" class="score-card">
                                                <div class="heading">
                                                    <strong class="title font-weight-medium d-block">Mock Test: Vol 4</strong>
                                                </div>
                                                <span class="sub-title d-block">Band Score:</span>
                                                <span class="obt-score">7.0</span>
                                                <ul>
                                                    <li>
                                                        <span class="title-text">Time (60:00)</span>
                                                        <span class="info-text">50:01</span>
                                                    </li>
                                                    <li>
                                                        <span class="title-text">Accuracy</span>
                                                        <span class="info-text">79%</span>
                                                    </li>
                                                </ul>
                                            </a>
                                        </div>
                                        <div class="col-holder">
                                            <a href="#" class="score-card">
                                                <div class="heading">
                                                    <strong class="title font-weight-medium d-block">Mock Test: Vol 5</strong>
                                                </div>
                                                <span class="sub-title d-block">Band Score:</span>
                                                <span class="obt-score">7.5</span>
                                                <ul>
                                                    <li>
                                                        <span class="title-text">Time (60:00)</span>
                                                        <span class="info-text">58:32</span>
                                                    </li>
                                                    <li>
                                                        <span class="title-text">Accuracy</span>
                                                        <span class="info-text">71%</span>
                                                    </li>
                                                </ul>
                                            </a>
                                        </div>
                                        <div class="col-holder">
                                            <a href="#" class="score-card blue">
                                                <div class="heading">
                                                    <strong class="title font-weight-medium d-block">Mock Test: Vol 6</strong>
                                                </div>
                                                <span class="sub-title d-block">Band Score:</span>
                                                <span class="obt-score">0.0</span>
                                                <ul>
                                                    <li>
                                                        <span class="title-text">Time (60:00)</span>
                                                        <span class="info-text">00:00</span>
                                                    </li>
                                                    <li>
                                                        <span class="title-text">Accuracy</span>
                                                        <span class="info-text">0%</span>
                                                    </li>
                                                </ul>
                                            </a>
                                        </div>
                                        <div class="col-holder">
                                            <a href="#" class="score-card blue">
                                                <div class="heading">
                                                    <strong class="title font-weight-medium d-block">Mock Test: Vol 7</strong>
                                                </div>
                                                <span class="sub-title d-block">Band Score:</span>
                                                <span class="obt-score">0.0</span>
                                                <ul>
                                                    <li>
                                                        <span class="title-text">Time (60:00)</span>
                                                        <span class="info-text">00:00</span>
                                                    </li>
                                                    <li>
                                                        <span class="title-text">Accuracy</span>
                                                        <span class="info-text">0%</span>
                                                    </li>
                                                </ul>
                                            </a>
                                        </div>
                                        <div class="col-holder">
                                            <a href="#" class="score-card blue">
                                                <div class="heading">
                                                    <strong class="title font-weight-medium d-block">Mock Test: Vol 8</strong>
                                                </div>
                                                <span class="sub-title d-block">Band Score:</span>
                                                <span class="obt-score">0.0</span>
                                                <ul>
                                                    <li>
                                                        <span class="title-text">Time (60:00)</span>
                                                        <span class="info-text">00:00</span>
                                                    </li>
                                                    <li>
                                                        <span class="title-text">Accuracy</span>
                                                        <span class="info-text">0%</span>
                                                    </li>
                                                </ul>
                                            </a>
                                        </div>
                                        <div class="col-holder">
                                            <a href="#" class="score-card blue">
                                                <div class="heading">
                                                    <strong class="title font-weight-medium d-block">Mock Test: Vol 9</strong>
                                                </div>
                                                <span class="sub-title d-block">Band Score:</span>
                                                <span class="obt-score">0.0</span>
                                                <ul>
                                                    <li>
                                                        <span class="title-text">Time (60:00)</span>
                                                        <span class="info-text">00:00</span>
                                                    </li>
                                                    <li>
                                                        <span class="title-text">Accuracy</span>
                                                        <span class="info-text">0%</span>
                                                    </li>
                                                </ul>
                                            </a>
                                        </div>
                                        <div class="col-holder">
                                            <a href="academic-reading-pre-vol-50.html" class="score-card blue">
                                                <div class="heading">
                                                    <strong class="title font-weight-medium d-block">Mock Test: Vol 50</strong>
                                                </div>
                                                <span class="sub-title d-block">Band Score:</span>
                                                <span class="obt-score">0.0</span>
                                                <ul>
                                                    <li>
                                                        <span class="title-text">Time (60:00)</span>
                                                        <span class="info-text">00:00</span>
                                                    </li>
                                                    <li>
                                                        <span class="title-text">Accuracy</span>
                                                        <span class="info-text">0%</span>
                                                    </li>
                                                </ul>
                                            </a>
                                        </div>
                                    </div>
                                    <nav aria-label="Page navigation">
                                        <ul class="pagination justify-content-center">
                                            <li class="page-item disabled">
                                                <a class="page-link" href="#" aria-label="Previous">
                                                    <i class="fas fa-chevron-left"></i>
                                                </a>
                                            </li>
                                            <li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="dots" href="#">...</a></li>
                                            <li class="page-item"><a class="page-link" href="#">10</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="next">
                                                    <i class="fas fa-chevron-right"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="tab-pane fade show active" id="general" role="tabpanel" aria-labelledby="general-tab">
                                    <div class="five-columns">
                                        <div class="col-holder">
                                            <a href="#" class="score-card">
                                                <div class="heading">
                                                    <strong class="title font-weight-medium d-block">Mock Test: Vol 1</strong>
                                                </div>
                                                <span class="sub-title d-block">Band Score:</span>
                                                <span class="obt-score">5.5</span>
                                                <ul>
                                                    <li>
                                                        <span class="title-text">Time (60:00)</span>
                                                        <span class="info-text">03:46</span>
                                                    </li>
                                                    <li>
                                                        <span class="title-text">Accuracy</span>
                                                        <span class="info-text">48%</span>
                                                    </li>
                                                </ul>
                                            </a>
                                        </div>
                                        <div class="col-holder">
                                            <a href="#" class="score-card">
                                                <div class="heading">
                                                    <strong class="title font-weight-medium d-block">Mock Test: Vol 2</strong>
                                                </div>
                                                <span class="sub-title d-block">Band Score:</span>
                                                <span class="obt-score">4.5</span>
                                                <ul>
                                                    <li>
                                                        <span class="title-text">Time (60:00)</span>
                                                        <span class="info-text red">60:00</span>
                                                    </li>
                                                    <li>
                                                        <span class="title-text">Accuracy</span>
                                                        <span class="info-text">32%</span>
                                                    </li>
                                                </ul>
                                            </a>
                                        </div>
                                        <div class="col-holder">
                                            <a href="#" class="score-card">
                                                <div class="heading">
                                                    <strong class="title font-weight-medium d-block">Mock Test: Vol 3</strong>
                                                </div>
                                                <span class="sub-title d-block">Band Score:</span>
                                                <span class="obt-score">6.5</span>
                                                <ul>
                                                    <li>
                                                        <span class="title-text">Time (60:00)</span>
                                                        <span class="info-text">58:32</span>
                                                    </li>
                                                    <li>
                                                        <span class="title-text">Accuracy</span>
                                                        <span class="info-text">71%</span>
                                                    </li>
                                                </ul>
                                            </a>
                                        </div>
                                        <div class="col-holder">
                                            <a href="#" class="score-card">
                                                <div class="heading">
                                                    <strong class="title font-weight-medium d-block">Mock Test: Vol 4</strong>
                                                </div>
                                                <span class="sub-title d-block">Band Score:</span>
                                                <span class="obt-score">7.0</span>
                                                <ul>
                                                    <li>
                                                        <span class="title-text">Time (60:00)</span>
                                                        <span class="info-text">50:01</span>
                                                    </li>
                                                    <li>
                                                        <span class="title-text">Accuracy</span>
                                                        <span class="info-text">79%</span>
                                                    </li>
                                                </ul>
                                            </a>
                                        </div>
                                        <div class="col-holder">
                                            <a href="#" class="score-card">
                                                <div class="heading">
                                                    <strong class="title font-weight-medium d-block">Mock Test: Vol 5</strong>
                                                </div>
                                                <span class="sub-title d-block">Band Score:</span>
                                                <span class="obt-score">7.5</span>
                                                <ul>
                                                    <li>
                                                        <span class="title-text">Time (60:00)</span>
                                                        <span class="info-text">58:32</span>
                                                    </li>
                                                    <li>
                                                        <span class="title-text">Accuracy</span>
                                                        <span class="info-text">71%</span>
                                                    </li>
                                                </ul>
                                            </a>
                                        </div>
                                        <div class="col-holder">
                                            <a href="#" class="score-card blue">
                                                <div class="heading">
                                                    <strong class="title font-weight-medium d-block">Mock Test: Vol 6</strong>
                                                </div>
                                                <span class="sub-title d-block">Band Score:</span>
                                                <span class="obt-score">0.0</span>
                                                <ul>
                                                    <li>
                                                        <span class="title-text">Time (60:00)</span>
                                                        <span class="info-text">00:00</span>
                                                    </li>
                                                    <li>
                                                        <span class="title-text">Accuracy</span>
                                                        <span class="info-text">0%</span>
                                                    </li>
                                                </ul>
                                            </a>
                                        </div>
                                        <div class="col-holder">
                                            <a href="#" class="score-card blue">
                                                <div class="heading">
                                                    <strong class="title font-weight-medium d-block">Mock Test: Vol 7</strong>
                                                </div>
                                                <span class="sub-title d-block">Band Score:</span>
                                                <span class="obt-score">0.0</span>
                                                <ul>
                                                    <li>
                                                        <span class="title-text">Time (60:00)</span>
                                                        <span class="info-text">00:00</span>
                                                    </li>
                                                    <li>
                                                        <span class="title-text">Accuracy</span>
                                                        <span class="info-text">0%</span>
                                                    </li>
                                                </ul>
                                            </a>
                                        </div>
                                        <div class="col-holder">
                                            <a href="#" class="score-card blue">
                                                <div class="heading">
                                                    <strong class="title font-weight-medium d-block">Mock Test: Vol 8</strong>
                                                </div>
                                                <span class="sub-title d-block">Band Score:</span>
                                                <span class="obt-score">0.0</span>
                                                <ul>
                                                    <li>
                                                        <span class="title-text">Time (60:00)</span>
                                                        <span class="info-text">00:00</span>
                                                    </li>
                                                    <li>
                                                        <span class="title-text">Accuracy</span>
                                                        <span class="info-text">0%</span>
                                                    </li>
                                                </ul>
                                            </a>
                                        </div>
                                        <div class="col-holder">
                                            <a href="#" class="score-card blue">
                                                <div class="heading">
                                                    <strong class="title font-weight-medium d-block">Mock Test: Vol 9</strong>
                                                </div>
                                                <span class="sub-title d-block">Band Score:</span>
                                                <span class="obt-score">0.0</span>
                                                <ul>
                                                    <li>
                                                        <span class="title-text">Time (60:00)</span>
                                                        <span class="info-text">00:00</span>
                                                    </li>
                                                    <li>
                                                        <span class="title-text">Accuracy</span>
                                                        <span class="info-text">0%</span>
                                                    </li>
                                                </ul>
                                            </a>
                                        </div>
                                        <div class="col-holder">
                                            <a href="general-reading-pre-vol-50.html" class="score-card blue">
                                                <div class="heading">
                                                    <strong class="title font-weight-medium d-block">Mock Test: Vol 50</strong>
                                                </div>
                                                <span class="sub-title d-block">Band Score:</span>
                                                <span class="obt-score">0.0</span>
                                                <ul>
                                                    <li>
                                                        <span class="title-text">Time (60:00)</span>
                                                        <span class="info-text">00:00</span>
                                                    </li>
                                                    <li>
                                                        <span class="title-text">Accuracy</span>
                                                        <span class="info-text">0%</span>
                                                    </li>
                                                </ul>
                                            </a>
                                        </div>
                                    </div>
                                    <nav aria-label="Page navigation">
                                        <ul class="pagination justify-content-center">
                                            <li class="page-item disabled">
                                                <a class="page-link" href="#" aria-label="Previous">
                                                    <i class="fas fa-chevron-left"></i>
                                                </a>
                                            </li>
                                            <li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="dots" href="#">...</a></li>
                                            <li class="page-item"><a class="page-link" href="#">10</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="next">
                                                    <i class="fas fa-chevron-right"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="speaking" role="tabpanel" aria-labelledby="speaking-tab">
                            <div class="five-columns">
                                <div class="col-holder">
                                    <a href="#" class="score-card">
                                        <div class="heading">
                                            <strong class="title font-weight-medium d-block">Mock Test: Vol 1</strong>
                                        </div>
                                        <span class="sub-title d-block">Band Score:</span>
                                        <span class="obt-score">5.5</span>
                                        <ul>
                                            <li>
                                                <span class="title-text">Time (60:00)</span>
                                                <span class="info-text">03:46</span>
                                            </li>
                                            <li>
                                                <span class="title-text">Accuracy</span>
                                                <span class="info-text">48%</span>
                                            </li>
                                        </ul>
                                    </a>
                                </div>
                                <div class="col-holder">
                                    <a href="#" class="score-card">
                                        <div class="heading">
                                            <strong class="title font-weight-medium d-block">Mock Test: Vol 2</strong>
                                        </div>
                                        <span class="sub-title d-block">Band Score:</span>
                                        <span class="obt-score">4.5</span>
                                        <ul>
                                            <li>
                                                <span class="title-text">Time (60:00)</span>
                                                <span class="info-text red">60:00</span>
                                            </li>
                                            <li>
                                                <span class="title-text">Accuracy</span>
                                                <span class="info-text">32%</span>
                                            </li>
                                        </ul>
                                    </a>
                                </div>
                                <div class="col-holder">
                                    <a href="#" class="score-card">
                                        <div class="heading">
                                            <strong class="title font-weight-medium d-block">Mock Test: Vol 3</strong>
                                        </div>
                                        <span class="sub-title d-block">Band Score:</span>
                                        <span class="obt-score">6.5</span>
                                        <ul>
                                            <li>
                                                <span class="title-text">Time (60:00)</span>
                                                <span class="info-text">58:32</span>
                                            </li>
                                            <li>
                                                <span class="title-text">Accuracy</span>
                                                <span class="info-text">71%</span>
                                            </li>
                                        </ul>
                                    </a>
                                </div>
                                <div class="col-holder">
                                    <a href="#" class="score-card">
                                        <div class="heading">
                                            <strong class="title font-weight-medium d-block">Mock Test: Vol 4</strong>
                                        </div>
                                        <span class="sub-title d-block">Band Score:</span>
                                        <span class="obt-score">7.0</span>
                                        <ul>
                                            <li>
                                                <span class="title-text">Time (60:00)</span>
                                                <span class="info-text">50:01</span>
                                            </li>
                                            <li>
                                                <span class="title-text">Accuracy</span>
                                                <span class="info-text">79%</span>
                                            </li>
                                        </ul>
                                    </a>
                                </div>
                                <div class="col-holder">
                                    <a href="#" class="score-card">
                                        <div class="heading">
                                            <strong class="title font-weight-medium d-block">Mock Test: Vol 5</strong>
                                        </div>
                                        <span class="sub-title d-block">Band Score:</span>
                                        <span class="obt-score">7.5</span>
                                        <ul>
                                            <li>
                                                <span class="title-text">Time (60:00)</span>
                                                <span class="info-text">58:32</span>
                                            </li>
                                            <li>
                                                <span class="title-text">Accuracy</span>
                                                <span class="info-text">71%</span>
                                            </li>
                                        </ul>
                                    </a>
                                </div>
                                <div class="col-holder">
                                    <a href="#" class="score-card blue">
                                        <div class="heading">
                                            <strong class="title font-weight-medium d-block">Mock Test: Vol 6</strong>
                                        </div>
                                        <span class="sub-title d-block">Band Score:</span>
                                        <span class="obt-score">0.0</span>
                                        <ul>
                                            <li>
                                                <span class="title-text">Time (60:00)</span>
                                                <span class="info-text">00:00</span>
                                            </li>
                                            <li>
                                                <span class="title-text">Accuracy</span>
                                                <span class="info-text">0%</span>
                                            </li>
                                        </ul>
                                    </a>
                                </div>
                                <div class="col-holder">
                                    <a href="#" class="score-card blue">
                                        <div class="heading">
                                            <strong class="title font-weight-medium d-block">Mock Test: Vol 7</strong>
                                        </div>
                                        <span class="sub-title d-block">Band Score:</span>
                                        <span class="obt-score">0.0</span>
                                        <ul>
                                            <li>
                                                <span class="title-text">Time (60:00)</span>
                                                <span class="info-text">00:00</span>
                                            </li>
                                            <li>
                                                <span class="title-text">Accuracy</span>
                                                <span class="info-text">0%</span>
                                            </li>
                                        </ul>
                                    </a>
                                </div>
                                <div class="col-holder">
                                    <a href="#" class="score-card blue">
                                        <div class="heading">
                                            <strong class="title font-weight-medium d-block">Mock Test: Vol 8</strong>
                                        </div>
                                        <span class="sub-title d-block">Band Score:</span>
                                        <span class="obt-score">0.0</span>
                                        <ul>
                                            <li>
                                                <span class="title-text">Time (60:00)</span>
                                                <span class="info-text">00:00</span>
                                            </li>
                                            <li>
                                                <span class="title-text">Accuracy</span>
                                                <span class="info-text">0%</span>
                                            </li>
                                        </ul>
                                    </a>
                                </div>
                                <div class="col-holder">
                                    <a href="#" class="score-card blue">
                                        <div class="heading">
                                            <strong class="title font-weight-medium d-block">Mock Test: Vol 9</strong>
                                        </div>
                                        <span class="sub-title d-block">Band Score:</span>
                                        <span class="obt-score">0.0</span>
                                        <ul>
                                            <li>
                                                <span class="title-text">Time (60:00)</span>
                                                <span class="info-text">00:00</span>
                                            </li>
                                            <li>
                                                <span class="title-text">Accuracy</span>
                                                <span class="info-text">0%</span>
                                            </li>
                                        </ul>
                                    </a>
                                </div>
                                <div class="col-holder">
                                    <a href="speaking-pre-vol-50.html" class="score-card blue">
                                        <div class="heading">
                                            <strong class="title font-weight-medium d-block">Mock Test: Vol 50</strong>
                                        </div>
                                        <span class="sub-title d-block">Band Score:</span>
                                        <span class="obt-score">0.0</span>
                                        <ul>
                                            <li>
                                                <span class="title-text">Time (60:00)</span>
                                                <span class="info-text">00:00</span>
                                            </li>
                                            <li>
                                                <span class="title-text">Accuracy</span>
                                                <span class="info-text">0%</span>
                                            </li>
                                        </ul>
                                    </a>
                                </div>
                            </div>
                            <nav aria-label="Page navigation">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <i class="fas fa-chevron-left"></i>
                                        </a>
                                    </li>
                                    <li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="dots" href="#">...</a></li>
                                    <li class="page-item"><a class="page-link" href="#">10</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="next">
                                            <i class="fas fa-chevron-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="tab-pane fade pt-0" id="writing" role="tabpanel" aria-labelledby="writing-tab">
                            <div class="tabs-filter">
                                <ul class="nav nav-tabs" id="reading-inner-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link" id="writing-academic-tab" data-toggle="tab" href="#writing-academic" role="tab" aria-controls="writing-academic" aria-selected="false">Academic</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" id="writing-general-tab" data-toggle="tab" href="#writing-general" role="tab" aria-controls="writing-general" aria-selected="true">General</a>
                                    </li>
                                </ul>
                                <div class="form-group mb-0">
                                    <select class="custom-select" id="Target">
                                        <option selected>Sort by: All</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div>
                            <div class="tab-content" id="ReadingInnerTabContent">
                                <div class="tab-pane fade" id="writing-academic" role="tabpanel" aria-labelledby="writing-academic-tab">
                                    <div class="five-columns">
                                        <div class="col-holder">
                                            <a href="#" class="score-card">
                                                <div class="heading">
                                                    <strong class="title font-weight-medium d-block">Mock Test: Vol 31</strong>
                                                    <span class="sub-heading">Opinion Essay</span>
                                                </div>
                                                <span class="sub-title d-block">Band Score:</span>
                                                <span class="obt-score">5.5</span>
                                                <ul>
                                                    <li>
                                                        <span class="title-text">Time (60:00)</span>
                                                        <span class="info-text">58:13</span>
                                                    </li>
                                                    <li>
                                                        <span class="title-text">Errors</span>
                                                        <span class="info-text">320</span>
                                                    </li>
                                                </ul>
                                            </a>
                                        </div>
                                        <div class="col-holder">
                                            <a href="#" class="score-card">
                                                <div class="heading">
                                                    <strong class="title font-weight-medium d-block">Mock Test: Vol 32</strong>
                                                    <span class="sub-heading">Discussion Essay</span>
                                                </div>
                                                <span class="sub-title d-block">Band Score:</span>
                                                <span class="obt-score">4.5</span>
                                                <ul>
                                                    <li>
                                                        <span class="title-text">Time (60:00)</span>
                                                        <span class="info-text red">60:00</span>
                                                    </li>
                                                    <li>
                                                        <span class="title-text">Errors</span>
                                                        <span class="info-text">320</span>
                                                    </li>
                                                </ul>
                                            </a>
                                        </div>
                                        <div class="col-holder">
                                            <a href="#" class="score-card">
                                                <div class="heading">
                                                    <strong class="title font-weight-medium d-block">Mock Test: Vol 33</strong>
                                                    <span class="sub-heading">Solution Essay</span>
                                                </div>
                                                <span class="sub-title d-block">Band Score:</span>
                                                <span class="obt-score">6.5</span>
                                                <ul>
                                                    <li>
                                                        <span class="title-text">Time (60:00)</span>
                                                        <span class="info-text">58:13</span>
                                                    </li>
                                                    <li>
                                                        <span class="title-text">Errors</span>
                                                        <span class="info-text">320</span>
                                                    </li>
                                                </ul>
                                            </a>
                                        </div>
                                        <div class="col-holder">
                                            <a href="#" class="score-card">
                                                <div class="heading">
                                                    <strong class="title font-weight-medium d-block">Mock Test: Vol 34</strong>
                                                    <span class="sub-heading">Direct Questions Essay</span>
                                                </div>
                                                <span class="sub-title d-block">Band Score:</span>
                                                <span class="obt-score">7.0</span>
                                                <ul>
                                                    <li>
                                                        <span class="title-text">Time (60:00)</span>
                                                        <span class="info-text">58:13</span>
                                                    </li>
                                                    <li>
                                                        <span class="title-text">Errors</span>
                                                        <span class="info-text">320</span>
                                                    </li>
                                                </ul>
                                            </a>
                                        </div>
                                        <div class="col-holder">
                                            <a href="#" class="score-card">
                                                <div class="heading">
                                                    <strong class="title font-weight-medium d-block">Mock Test: Vol 35</strong>
                                                    <span class="sub-heading">Adv. and disadv. Essay</span>
                                                </div>
                                                <span class="sub-title d-block">Band Score:</span>
                                                <span class="obt-score">7.5</span>
                                                <ul>
                                                    <li>
                                                        <span class="title-text">Time (60:00)</span>
                                                        <span class="info-text">58:13</span>
                                                    </li>
                                                    <li>
                                                        <span class="title-text">Errors</span>
                                                        <span class="info-text">320</span>
                                                    </li>
                                                </ul>
                                            </a>
                                        </div>
                                        <div class="col-holder">
                                            <a href="#" class="score-card blue">
                                                <div class="heading">
                                                    <strong class="title font-weight-medium d-block">Mock Test: Vol 36</strong>
                                                    <span class="sub-heading">Opinion Essay</span>
                                                </div>
                                                <span class="sub-title d-block">Band Score:</span>
                                                <span class="obt-score">0.0</span>
                                                <ul>
                                                    <li>
                                                        <span class="title-text">Time (60:00)</span>
                                                        <span class="info-text">00:00</span>
                                                    </li>
                                                    <li>
                                                        <span class="title-text">Errors</span>
                                                        <span class="info-text">0</span>
                                                    </li>
                                                </ul>
                                            </a>
                                        </div>
                                        <div class="col-holder">
                                            <a href="academic-writing-pre-vol-50.html" class="score-card blue">
                                                <div class="heading">
                                                    <strong class="title font-weight-medium d-block">Mock Test: Vol 50</strong>
                                                    <span class="sub-heading">Discussion Essay</span>
                                                </div>
                                                <span class="sub-title d-block">Band Score:</span>
                                                <span class="obt-score">0.0</span>
                                                <ul>
                                                    <li>
                                                        <span class="title-text">Time (60:00)</span>
                                                        <span class="info-text">00:00</span>
                                                    </li>
                                                    <li>
                                                        <span class="title-text">Errors</span>
                                                        <span class="info-text">0</span>
                                                    </li>
                                                </ul>
                                            </a>
                                        </div>
                                        <div class="col-holder">
                                            <a data-fancybox data-src="#unlock-test-popup" href="javascript:;" class="lightbox score-card locked">
                                                <div class="heading">
                                                    <strong class="title font-weight-medium d-block">Mock Test: Vol 38</strong>
                                                    <span class="sub-heading">Solution Essay</span>
                                                </div>
                                                <span class="sub-title d-block">Band Score:</span>
                                                <span class="obt-score">0.0</span>
                                                <ul>
                                                    <li>
                                                        <span class="title-text">Time (60:00)</span>
                                                        <span class="info-text">00:00</span>
                                                    </li>
                                                    <li>
                                                        <span class="title-text">Errors</span>
                                                        <span class="info-text">0</span>
                                                    </li>
                                                </ul>
                                            </a>
                                        </div>
                                        <div class="col-holder">
                                            <a href="#" class="score-card locked">
                                                <div class="heading">
                                                    <strong class="title font-weight-medium d-block">Mock Test: Vol 39</strong>
                                                    <span class="sub-heading">Direct Questions Essay</span>
                                                </div>
                                                <span class="sub-title d-block">Band Score:</span>
                                                <span class="obt-score">0.0</span>
                                                <ul>
                                                    <li>
                                                        <span class="title-text">Time (60:00)</span>
                                                        <span class="info-text">00:00</span>
                                                    </li>
                                                    <li>
                                                        <span class="title-text">Errors</span>
                                                        <span class="info-text">0</span>
                                                    </li>
                                                </ul>
                                            </a>
                                        </div>
                                        <div class="col-holder">
                                            <a href="#" class="score-card locked">
                                                <div class="heading">
                                                    <strong class="title font-weight-medium d-block">Mock Test: Vol 40</strong>
                                                    <span class="sub-heading">Adv. and disadv. Essay</span>
                                                </div>
                                                <span class="sub-title d-block">Band Score:</span>
                                                <span class="obt-score">0.0</span>
                                                <ul>
                                                    <li>
                                                        <span class="title-text">Time (60:00)</span>
                                                        <span class="info-text">00:00</span>
                                                    </li>
                                                    <li>
                                                        <span class="title-text">Errors</span>
                                                        <span class="info-text">0</span>
                                                    </li>
                                                </ul>
                                            </a>
                                        </div>
                                    </div>
                                    <nav aria-label="Page navigation">
                                        <ul class="pagination justify-content-center">
                                            <li class="page-item disabled">
                                                <a class="page-link" href="#" aria-label="Previous">
                                                    <i class="fas fa-chevron-left"></i>
                                                </a>
                                            </li>
                                            <li class="page-item d-none" aria-current="page"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item active"><a class="page-link" href="#">4</a></li>
                                            <li class="page-item"><a class="dots" href="#">...</a></li>
                                            <li class="page-item"><a class="page-link" href="#">10</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="next">
                                                    <i class="fas fa-chevron-right"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="tab-pane fade show active" id="writing-general" role="tabpanel" aria-labelledby="general-tab">
                                    <div class="five-columns">
                                        <div class="col-holder">
                                            <a href="#" class="score-card">
                                                <div class="heading">
                                                    <strong class="title font-weight-medium d-block">Mock Test: Vol 31</strong>
                                                    <span class="sub-heading">Opinion Essay</span>
                                                </div>
                                                <span class="sub-title d-block">Band Score:</span>
                                                <span class="obt-score">5.5</span>
                                                <ul>
                                                    <li>
                                                        <span class="title-text">Time (60:00)</span>
                                                        <span class="info-text">58:13</span>
                                                    </li>
                                                    <li>
                                                        <span class="title-text">Errors</span>
                                                        <span class="info-text">320</span>
                                                    </li>
                                                </ul>
                                            </a>
                                        </div>
                                        <div class="col-holder">
                                            <a href="#" class="score-card">
                                                <div class="heading">
                                                    <strong class="title font-weight-medium d-block">Mock Test: Vol 32</strong>
                                                    <span class="sub-heading">Discussion Essay</span>
                                                </div>
                                                <span class="sub-title d-block">Band Score:</span>
                                                <span class="obt-score">4.5</span>
                                                <ul>
                                                    <li>
                                                        <span class="title-text">Time (60:00)</span>
                                                        <span class="info-text red">60:00</span>
                                                    </li>
                                                    <li>
                                                        <span class="title-text">Errors</span>
                                                        <span class="info-text">320</span>
                                                    </li>
                                                </ul>
                                            </a>
                                        </div>
                                        <div class="col-holder">
                                            <a href="#" class="score-card">
                                                <div class="heading">
                                                    <strong class="title font-weight-medium d-block">Mock Test: Vol 33</strong>
                                                    <span class="sub-heading">Solution Essay</span>
                                                </div>
                                                <span class="sub-title d-block">Band Score:</span>
                                                <span class="obt-score">6.5</span>
                                                <ul>
                                                    <li>
                                                        <span class="title-text">Time (60:00)</span>
                                                        <span class="info-text">58:13</span>
                                                    </li>
                                                    <li>
                                                        <span class="title-text">Errors</span>
                                                        <span class="info-text">320</span>
                                                    </li>
                                                </ul>
                                            </a>
                                        </div>
                                        <div class="col-holder">
                                            <a href="#" class="score-card">
                                                <div class="heading">
                                                    <strong class="title font-weight-medium d-block">Mock Test: Vol 34</strong>
                                                    <span class="sub-heading">Direct Questions Essay</span>
                                                </div>
                                                <span class="sub-title d-block">Band Score:</span>
                                                <span class="obt-score">7.0</span>
                                                <ul>
                                                    <li>
                                                        <span class="title-text">Time (60:00)</span>
                                                        <span class="info-text">35:17</span>
                                                    </li>
                                                    <li>
                                                        <span class="title-text">Errors</span>
                                                        <span class="info-text">0</span>
                                                    </li>
                                                </ul>
                                            </a>
                                        </div>
                                        <div class="col-holder">
                                            <a href="#" class="score-card">
                                                <div class="heading">
                                                    <strong class="title font-weight-medium d-block">Mock Test: Vol 35</strong>
                                                    <span class="sub-heading">Adv. and disadv. Essay</span>
                                                </div>
                                                <span class="sub-title d-block">Band Score:</span>
                                                <span class="obt-score">7.5</span>
                                                <ul>
                                                    <li>
                                                        <span class="title-text">Time (60:00)</span>
                                                        <span class="info-text">56:28</span>
                                                    </li>
                                                    <li>
                                                        <span class="title-text">Errors</span>
                                                        <span class="info-text">0</span>
                                                    </li>
                                                </ul>
                                            </a>
                                        </div>
                                        <div class="col-holder">
                                            <a href="#" class="score-card blue">
                                                <div class="heading">
                                                    <strong class="title font-weight-medium d-block">Mock Test: Vol 36</strong>
                                                    <span class="sub-heading">Opinion Essay</span>
                                                </div>
                                                <span class="sub-title d-block">Band Score:</span>
                                                <span class="obt-score">0.0</span>
                                                <ul>
                                                    <li>
                                                        <span class="title-text">Time (60:00)</span>
                                                        <span class="info-text">00:00</span>
                                                    </li>
                                                    <li>
                                                        <span class="title-text">Errors</span>
                                                        <span class="info-text">0</span>
                                                    </li>
                                                </ul>
                                            </a>
                                        </div>
                                        <div class="col-holder">
                                            <a href="general-writing-pre-vol-50.html" class="score-card blue">
                                                <div class="heading">
                                                    <strong class="title font-weight-medium d-block">Mock Test: Vol 50</strong>
                                                    <span class="sub-heading">Discussion Essay</span>
                                                </div>
                                                <span class="sub-title d-block">Band Score:</span>
                                                <span class="obt-score">0.0</span>
                                                <ul>
                                                    <li>
                                                        <span class="title-text">Time (60:00)</span>
                                                        <span class="info-text">00:00</span>
                                                    </li>
                                                    <li>
                                                        <span class="title-text">Errors</span>
                                                        <span class="info-text">0</span>
                                                    </li>
                                                </ul>
                                            </a>
                                        </div>
                                        <div class="col-holder">
                                            <a data-fancybox data-src="#unlock-test-popup" href="javascript:;" class="score-card locked lightbox">
                                                <div class="heading">
                                                    <strong class="title font-weight-medium d-block">Mock Test: Vol 38</strong>
                                                    <span class="sub-heading">Solution Essay</span>
                                                </div>
                                                <span class="sub-title d-block">Band Score:</span>
                                                <span class="obt-score">0.0</span>
                                                <ul>
                                                    <li>
                                                        <span class="title-text">Time (60:00)</span>
                                                        <span class="info-text">00:00</span>
                                                    </li>
                                                    <li>
                                                        <span class="title-text">Errors</span>
                                                        <span class="info-text">0</span>
                                                    </li>
                                                </ul>
                                            </a>
                                        </div>
                                        <div class="col-holder">
                                            <a href="#" class="score-card locked">
                                                <div class="heading">
                                                    <strong class="title font-weight-medium d-block">Mock Test: Vol 39</strong>
                                                    <span class="sub-heading">Direct Questions Essay</span>
                                                </div>
                                                <span class="sub-title d-block">Band Score:</span>
                                                <span class="obt-score">0.0</span>
                                                <ul>
                                                    <li>
                                                        <span class="title-text">Time (60:00)</span>
                                                        <span class="info-text">00:00</span>
                                                    </li>
                                                    <li>
                                                        <span class="title-text">Errors</span>
                                                        <span class="info-text">0</span>
                                                    </li>
                                                </ul>
                                            </a>
                                        </div>
                                        <div class="col-holder">
                                            <a href="#" class="score-card locked">
                                                <div class="heading">
                                                    <strong class="title font-weight-medium d-block">Mock Test: Vol 40</strong>
                                                    <span class="sub-heading">Adv. and disadv. Essay</span>
                                                </div>
                                                <span class="sub-title d-block">Band Score:</span>
                                                <span class="obt-score">0.0</span>
                                                <ul>
                                                    <li>
                                                        <span class="title-text">Time (60:00)</span>
                                                        <span class="info-text">00:00</span>
                                                    </li>
                                                    <li>
                                                        <span class="title-text">Errors</span>
                                                        <span class="info-text">0</span>
                                                    </li>
                                                </ul>
                                            </a>
                                        </div>
                                    </div>
                                    <nav aria-label="Page navigation">
                                        <ul class="pagination justify-content-center">
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Previous">
                                                    <i class="fas fa-chevron-left"></i>
                                                </a>
                                            </li>
                                            <li class="page-item d-none" aria-current="page"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item active"><a class="page-link" href="#">4</a></li>
                                            <li class="page-item"><a class="dots" href="#">...</a></li>
                                            <li class="page-item"><a class="page-link" href="#">10</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="next">
                                                    <i class="fas fa-chevron-right"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
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