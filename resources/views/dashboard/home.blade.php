@extends('layouts.dashboard')
@include('vendors.datetime')
@section('content')

    {{-- Content body start --}}
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="form-head d-flex align-items-center mb-sm-4 mb-3">
                <div class="mr-auto">
                    <h2 class="text-black font-w600">Dashboard</h2>
                    <p class="mb-0">{{ env('APP_NAME') }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="media align-items-center">
                                <div class="media-body mr-3">
                                    <h2 class="fs-34 text-black font-w600">{{ $workers }}</h2>
                                    <span>Workers</span>
                                </div>
                                <i class="fas fa-user-hard-hat fa-3x"></i>
                            </div>
                        </div>
                        <div class="progress  rounded-0" style="height:4px;">
                            <div class="progress-bar rounded-0 bg-secondary progress-animated"
                                style="width: 100%; height:4px;" role="progressbar">
                                <span class="sr-only">100% Complete</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3  col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="media align-items-center">
                                <div class="media-body mr-3">
                                    <h2 class="fs-34 text-black font-w600">{{ $investors }}</h2>
                                    <span>Total Investors</span>
                                </div>
                                <i class="fas fa-users fa-3x"></i>
                            </div>
                        </div>
                        <div class="progress  rounded-0" style="height:4px;">
                            <div class="progress-bar rounded-0 bg-secondary progress-animated"
                                style="width: 100%; height:4px;" role="progressbar">
                                <span class="sr-only">100% Complete</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3  col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="media align-items-center">
                                <div class="media-body mr-3">
                                    <h2 class="fs-34 text-black font-w600">Rs. {{ $investments }}</h2>
                                    <span>Total Investment</span>
                                </div>
                                <i class="fas fa-sack-dollar fa-3x"></i>
                            </div>
                        </div>
                        <div class="progress  rounded-0" style="height:4px;">
                            <div class="progress-bar rounded-0 bg-secondary progress-animated"
                                style="width: 100%; height:4px;" role="progressbar">
                                <span class="sr-only">100% Complete</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3  col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="media align-items-center">
                                <div class="media-body mr-3">
                                    <h2 class="fs-34 text-black font-w600">Rs. 0000</h2>
                                    <span>Total Earning</span>
                                </div>
                                <i class="fad fa-usd-circle fa-3x"></i>
                            </div>
                        </div>
                        <div class="progress  rounded-0" style="height:4px;">
                            <div class="progress-bar rounded-0 bg-secondary progress-animated"
                                style="width: 100%; height:4px;" role="progressbar">
                                <span class="sr-only">100% Complete</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3  col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="media align-items-center">
                                <div class="media-body mr-3">
                                    <h2 class="fs-34 text-black font-w600">Rs. {{ $expense }}</h2>
                                    <span>Total Expenditure &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;( Kharcha )</span>
                                </div>
                                <i class="fas fa-hand-holding-usd fa-3x"></i>
                            </div>
                        </div>
                        <div class="progress  rounded-0" style="height:4px;">
                            <div class="progress-bar rounded-0 bg-secondary progress-animated"
                                style="width: 100%; height:4px;" role="progressbar">
                                <span class="sr-only">100% Complete</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3  col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="media align-items-center">
                                <div class="media-body mr-3">
                                    <h2 class="fs-34 text-black font-w600">{{ $bricks_produced }}</h2>
                                    <span>Total Bricks Produced</span>
                                </div>
                                <i class="fas fa-cubes fa-3x"></i>
                            </div>
                        </div>
                        <div class="progress  rounded-0" style="height:4px;">
                            <div class="progress-bar rounded-0 bg-secondary progress-animated"
                                style="width: 100%; height:4px;" role="progressbar">
                                <span class="sr-only">100% Complete</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3  col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="media align-items-center">
                                <div class="media-body mr-3">
                                    <h2 class="fs-34 text-black font-w600">{{ $bricks_produced }}</h2>
                                    <span>Total Bricks Sold</span>
                                </div>
                                <i class="fas fa-cube fa-3x"></i>
                            </div>
                        </div>
                        <div class="progress  rounded-0" style="height:4px;">
                            <div class="progress-bar rounded-0 bg-secondary progress-animated"
                                style="width: 100%; height:4px;" role="progressbar">
                                <span class="sr-only">100% Complete</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3  col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="media align-items-center">
                                <div class="media-body mr-3">
                                    <h2 class="fs-34 text-black font-w600">{{ $investments }}</h2>
                                    <span>Total Investment</span>
                                </div>
                                <i class="fas fa-sack-dollar fa-3x"></i>
                            </div>
                        </div>
                        <div class="progress  rounded-0" style="height:4px;">
                            <div class="progress-bar rounded-0 bg-secondary progress-animated"
                                style="width: 100%; height:4px;" role="progressbar">
                                <span class="sr-only">100% Complete</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-xl-6">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-header d-sm-flex d-block pb-0 border-0">
                                    <div class="mr-auto pr-3">
                                        <h4 class="text-black fs-20 mb-0">Worker Percentage</h4>
                                    </div>
                                    <div class="card-action card-tabs mt-3 mt-sm-0 mt-3 mb-sm-0 mb-3 mt-sm-0">
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-toggle="tab" href="#Daily" role="tab">
                                                    Daily
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#Weekly" role="tab">
                                                    Weekly
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#Monthly" role="tab">
                                                    Monthly
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="Daily" role="tabpanel">
                                            <div class="d-flex flex-wrap align-items-center px-4 bg-light">
                                                <div class="mr-auto d-flex align-items-center py-3">
                                                    <span class="heart-ai bg-primary mr-3">
                                                        <i class="fa fa-heart-o" aria-hidden="true"></i>
                                                    </span>
                                                    <div>
                                                        <p class="fs-18 mb-2">Total Patient</p>
                                                        <span class="fs-26 text-primary font-w600">562,084</span>
                                                    </div>
                                                </div>
                                                <ul class="users pl-3 py-2">
                                                </ul>
                                            </div>
                                            <div class="row align-items-center">
                                                <div class="col-xl-6 col-xxl-12 col-md-6">
                                                    <div id="radialBar"></div>
                                                </div>
                                                <div class="col-xl-6 col-xxl-12 col-md-6">
                                                    <div class="d-flex mb-4 align-items-center">
                                                        <span class="mr-auto pr-3 font-w500 fs-30 text-black">
                                                            <svg class="mr-3" width="8" height="30"
                                                                viewBox="0 0 8 30" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <rect width="7.65957" height="30" fill="#BDA25C" />
                                                            </svg>
                                                            64%
                                                        </span>
                                                        <span>New Patient</span>
                                                    </div>
                                                    <div class="d-flex  mb-4 align-items-center">
                                                        <span class="mr-auto pr-3 font-w500 fs-30 text-black">
                                                            <svg class="mr-3" width="8" height="30"
                                                                viewBox="0 0 8 30" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <rect width="7.65957" height="30" fill="#209F84" />
                                                            </svg>
                                                            73%
                                                        </span>
                                                        <span>Recovered</span>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <span class="mr-auto pr-3 font-w500 fs-30 text-black">
                                                            <svg class="mr-3" width="8" height="30"
                                                                viewBox="0 0 8 30" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <rect width="7.65957" height="30" fill="#323232" />
                                                            </svg>
                                                            48%
                                                        </span>
                                                        <span>In Treatment</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="Weekly" role="tabpanel">
                                            <div class="d-flex flex-wrap align-items-center px-4  bg-light">
                                                <div class="mr-auto py-3 d-flex align-items-center">
                                                    <span class="heart-ai bg-primary mr-3">
                                                        <i class="fa fa-heart-o" aria-hidden="true"></i>
                                                    </span>
                                                    <div>
                                                        <p class="fs-18 mb-2">Total Patient</p>
                                                        <span class="fs-26 text-primary font-w600">786,360</span>
                                                    </div>
                                                </div>
                                                <ul class="users pl-3 py-2">
                                                </ul>
                                            </div>
                                            <div class="row align-items-center">
                                                <div class="col-xl-6 col-xxl-12 col-md-6">
                                                    <div id="radialBar2"></div>
                                                </div>
                                                <div class="col-xl-6 col-xxl-12 col-md-6">
                                                    <div class="d-flex mb-4 align-items-center">
                                                        <span class="mr-auto pr-3 font-w500 fs-30 text-black">
                                                            <svg class="mr-3" width="8" height="30"
                                                                viewBox="0 0 8 30" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <rect width="7.65957" height="30" fill="#BDA25C" />
                                                            </svg>
                                                            40%
                                                        </span>
                                                        <span>New Patient</span>
                                                    </div>
                                                    <div class="d-flex  mb-4 align-items-center">
                                                        <span class="mr-auto pr-3 font-w500 fs-30 text-black">
                                                            <svg class="mr-3" width="8" height="30"
                                                                viewBox="0 0 8 30" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <rect width="7.65957" height="30" fill="#209F84" />
                                                            </svg>
                                                            81%
                                                        </span>
                                                        <span>Recovered</span>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <span class="mr-auto pr-3 font-w500 fs-30 text-black">
                                                            <svg class="mr-3" width="8" height="30"
                                                                viewBox="0 0 8 30" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <rect width="7.65957" height="30" fill="#323232" />
                                                            </svg>
                                                            50%
                                                        </span>
                                                        <span>In Treatment</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="Monthly" role="tabpanel">
                                            <div class="d-flex flex-wrap align-items-center px-4  bg-light">
                                                <div class="mr-auto py-3 d-flex align-items-center">
                                                    <span class="heart-ai bg-primary mr-3">
                                                        <i class="fa fa-heart-o" aria-hidden="true"></i>
                                                    </span>
                                                    <div>
                                                        <p class="fs-18 mb-2">Total Patient</p>
                                                        <span class="fs-26 text-primary font-w600">356,730</span>
                                                    </div>
                                                </div>
                                                <ul class="users pl-3 py-2">
                                                </ul>
                                            </div>
                                            <div class="row align-items-center">
                                                <div class="col-xl-6 col-xxl-12 col-md-6">
                                                    <div id="radialBar3"></div>
                                                </div>
                                                <div class="col-xl-6 col-xxl-12 col-md-6">
                                                    <div class="d-flex mb-4 align-items-center">
                                                        <span class="mr-auto pr-3 font-w500 fs-30 text-black">
                                                            <svg class="mr-3" width="8" height="30"
                                                                viewBox="0 0 8 30" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <rect width="7.65957" height="30" fill="#BDA25C" />
                                                            </svg>
                                                            90%
                                                        </span>
                                                        <span>New Patient</span>
                                                    </div>
                                                    <div class="d-flex  mb-4 align-items-center">
                                                        <span class="mr-auto pr-3 font-w500 fs-30 text-black">
                                                            <svg class="mr-3" width="8" height="30"
                                                                viewBox="0 0 8 30" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <rect width="7.65957" height="30" fill="#209F84" />
                                                            </svg>
                                                            75%
                                                        </span>
                                                        <span>Recovered</span>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <span class="mr-auto pr-3 font-w500 fs-30 text-black">
                                                            <svg class="mr-3" width="8" height="30"
                                                                viewBox="0 0 8 30" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <rect width="7.65957" height="30" fill="#323232" />
                                                            </svg>
                                                            30%
                                                        </span>
                                                        <span>In Treatment</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-xxl-12 col-md-6">
                            <div class="card">
                                <div class="card-header border-0 pb-0">
                                    <h3 class="fs-20 text-black mb-0">Visitors</h3>
                                    <div class="dropdown ml-auto">
                                        <div class="btn-link" data-toggle="dropdown">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M13.0001 12C13.0001 11.4477 12.5523 11 12.0001 11C11.4478 11 11.0001 11.4477 11.0001 12C11.0001 12.5523 11.4478 13 12.0001 13C12.5523 13 13.0001 12.5523 13.0001 12Z"
                                                    stroke="#2E2E2E" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M6.00006 12C6.00006 11.4477 5.55235 11 5.00006 11C4.44778 11 4.00006 11.4477 4.00006 12C4.00006 12.5523 4.44778 13 5.00006 13C5.55235 13 6.00006 12.5523 6.00006 12Z"
                                                    stroke="#2E2E2E" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M20.0001 12C20.0001 11.4477 19.5523 11 19.0001 11C18.4478 11 18.0001 11.4477 18.0001 12C18.0001 12.5523 18.4478 13 19.0001 13C19.5523 13 20.0001 12.5523 20.0001 12Z"
                                                    stroke="#2E2E2E" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </div>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item text-black" href="javascript:;">Info</a>
                                            <a class="dropdown-item text-black" href="javascript:;">Details</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body pb-0">
                                    <ul class="users-sm mb-3">
                                    </ul>
                                    <div class="d-flex align-items-center">
                                        <svg class="mr-3" width="30" height="19" viewBox="0 0 30 19" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M28.8124 0.990788C29.6459 1.71558 29.734 2.97884 29.0092 3.81236L20.2578 13.8765C18.859 15.4851 16.4444 15.7141 14.7681 14.397L10.6176 11.1359L3.37074 17.9564C2.56639 18.7134 1.30064 18.6751 0.543606 17.8707C-0.213427 17.0664 -0.175071 15.8006 0.629276 15.0436L7.8761 8.22306C9.317 6.86692 11.5329 6.76809 13.0888 7.99059L17.2394 11.2517L25.9908 1.18764C26.7156 0.354128 27.9788 0.265993 28.8124 0.990788Z"
                                                fill="#007A64" />
                                        </svg>
                                        <div>
                                            <p class="fs-12 mb-0">Customer</p>
                                            <span class="fs-22 text-black font-w600">765 Person</span>
                                        </div>
                                    </div>
                                    <div id="lineChart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card appointment-schedule">
                                <div class="card-header pb-0 border-0">
                                    <h3 class="fs-20 text-black mb-0">Calendar</h3>
                                    <div class="dropdown ml-auto">
                                        <div class="btn-link p-2 bg-light" data-toggle="dropdown">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z"
                                                    stroke="#2E2E2E" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z"
                                                    stroke="#2E2E2E" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z"
                                                    stroke="#2E2E2E" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </div>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item text-black" href="javascript:;">Info</a>
                                            <a class="dropdown-item text-black" href="javascript:;">Details</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-xl-12 col-xxl-12 col-md-6">
                                            <div class="appointment-calender">
                                                <input type="text" class="form-control d-none" id="datetimepicker1"
                                                    style="">
                                                <div class="bootstrap-datetimepicker-widget bottom"
                                                    style="inset: 41px auto auto 0px;">
                                                    <ul class="list-unstyled">
                                                        <li class="collapse show">
                                                            <div class="datepicker">
                                                                <div class="datepicker-days" style="">
                                                                    <table class="table-condensed">
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="prev"
                                                                                    data-action="previous"><i
                                                                                        class="fa fa-chevron-left"></i>
                                                                                </th>
                                                                                <th class="picker-switch"
                                                                                    data-action="pickerSwitch" colspan="5"
                                                                                    title="Select Month">August 2021</th>
                                                                                <th class="next"
                                                                                    data-action="next"><i
                                                                                        class="fa fa-chevron-right"></i>
                                                                                </th>
                                                                            </tr>
                                                                            <tr>
                                                                                <th class="dow">Su</th>
                                                                                <th class="dow">Mo</th>
                                                                                <th class="dow">Tu</th>
                                                                                <th class="dow">We</th>
                                                                                <th class="dow">Th</th>
                                                                                <th class="dow">Fr</th>
                                                                                <th class="dow">Sa</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td data-action="selectDay"
                                                                                    data-day="08/01/2021"
                                                                                    class="day weekend">1</td>
                                                                                <td data-action="selectDay"
                                                                                    data-day="08/02/2021"
                                                                                    class="day">2</td>
                                                                                <td data-action="selectDay"
                                                                                    data-day="08/03/2021"
                                                                                    class="day">3</td>
                                                                                <td data-action="selectDay"
                                                                                    data-day="08/04/2021"
                                                                                    class="day">4</td>
                                                                                <td data-action="selectDay"
                                                                                    data-day="08/05/2021"
                                                                                    class="day">5</td>
                                                                                <td data-action="selectDay"
                                                                                    data-day="08/06/2021"
                                                                                    class="day">6</td>
                                                                                <td data-action="selectDay"
                                                                                    data-day="08/07/2021"
                                                                                    class="day weekend">7</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td data-action="selectDay"
                                                                                    data-day="08/08/2021"
                                                                                    class="day weekend">8</td>
                                                                                <td data-action="selectDay"
                                                                                    data-day="08/09/2021"
                                                                                    class="day">9</td>
                                                                                <td data-action="selectDay"
                                                                                    data-day="08/10/2021"
                                                                                    class="day">10
                                                                                </td>
                                                                                <td data-action="selectDay"
                                                                                    data-day="08/11/2021"
                                                                                    class="day">11
                                                                                </td>
                                                                                <td data-action="selectDay"
                                                                                    data-day="08/12/2021"
                                                                                    class="day">12
                                                                                </td>
                                                                                <td data-action="selectDay"
                                                                                    data-day="08/13/2021"
                                                                                    class="day">13
                                                                                </td>
                                                                                <td data-action="selectDay"
                                                                                    data-day="08/14/2021"
                                                                                    class="day weekend">14</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td data-action="selectDay"
                                                                                    data-day="08/15/2021"
                                                                                    class="day weekend">15</td>
                                                                                <td data-action="selectDay"
                                                                                    data-day="08/16/2021"
                                                                                    class="day">16
                                                                                </td>
                                                                                <td data-action="selectDay"
                                                                                    data-day="08/17/2021"
                                                                                    class="day">17
                                                                                </td>
                                                                                <td data-action="selectDay"
                                                                                    data-day="08/18/2021"
                                                                                    class="day">18
                                                                                </td>
                                                                                <td data-action="selectDay"
                                                                                    data-day="08/19/2021"
                                                                                    class="day">19
                                                                                </td>
                                                                                <td data-action="selectDay"
                                                                                    data-day="08/20/2021"
                                                                                    class="day">20
                                                                                </td>
                                                                                <td data-action="selectDay"
                                                                                    data-day="08/21/2021"
                                                                                    class="day weekend">21</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td data-action="selectDay"
                                                                                    data-day="08/22/2021"
                                                                                    class="day weekend">22</td>
                                                                                <td data-action="selectDay"
                                                                                    data-day="08/23/2021"
                                                                                    class="day active today">23</td>
                                                                                <td data-action="selectDay"
                                                                                    data-day="08/24/2021"
                                                                                    class="day">24
                                                                                </td>
                                                                                <td data-action="selectDay"
                                                                                    data-day="08/25/2021"
                                                                                    class="day">25
                                                                                </td>
                                                                                <td data-action="selectDay"
                                                                                    data-day="08/26/2021"
                                                                                    class="day">26
                                                                                </td>
                                                                                <td data-action="selectDay"
                                                                                    data-day="08/27/2021"
                                                                                    class="day">27
                                                                                </td>
                                                                                <td data-action="selectDay"
                                                                                    data-day="08/28/2021"
                                                                                    class="day weekend">28</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td data-action="selectDay"
                                                                                    data-day="08/29/2021"
                                                                                    class="day weekend">29</td>
                                                                                <td data-action="selectDay"
                                                                                    data-day="08/30/2021"
                                                                                    class="day">30
                                                                                </td>
                                                                                <td data-action="selectDay"
                                                                                    data-day="08/31/2021"
                                                                                    class="day">31
                                                                                </td>
                                                                                <td data-action="selectDay"
                                                                                    data-day="09/01/2021"
                                                                                    class="day new">1
                                                                                </td>
                                                                                <td data-action="selectDay"
                                                                                    data-day="09/02/2021"
                                                                                    class="day new">2
                                                                                </td>
                                                                                <td data-action="selectDay"
                                                                                    data-day="09/03/2021"
                                                                                    class="day new">3
                                                                                </td>
                                                                                <td data-action="selectDay"
                                                                                    data-day="09/04/2021"
                                                                                    class="day new weekend">4</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td data-action="selectDay"
                                                                                    data-day="09/05/2021"
                                                                                    class="day new weekend">5</td>
                                                                                <td data-action="selectDay"
                                                                                    data-day="09/06/2021"
                                                                                    class="day new">6
                                                                                </td>
                                                                                <td data-action="selectDay"
                                                                                    data-day="09/07/2021"
                                                                                    class="day new">7
                                                                                </td>
                                                                                <td data-action="selectDay"
                                                                                    data-day="09/08/2021"
                                                                                    class="day new">8
                                                                                </td>
                                                                                <td data-action="selectDay"
                                                                                    data-day="09/09/2021"
                                                                                    class="day new">9
                                                                                </td>
                                                                                <td data-action="selectDay"
                                                                                    data-day="09/10/2021"
                                                                                    class="day new">10
                                                                                </td>
                                                                                <td data-action="selectDay"
                                                                                    data-day="09/11/2021"
                                                                                    class="day new weekend">11</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                                <div class="datepicker-months" style="display: none;">
                                                                    <table class="table-condensed">
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="prev"
                                                                                    data-action="previous"><i
                                                                                        class="fa fa-chevron-left"></i>
                                                                                </th>
                                                                                <th class="picker-switch"
                                                                                    data-action="pickerSwitch" colspan="5"
                                                                                    title="Select Year">2021</th>
                                                                                <th class="next"
                                                                                    data-action="next"><i
                                                                                        class="fa fa-chevron-right"></i>
                                                                                </th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td colspan="7"><span
                                                                                        data-action="selectMonth"
                                                                                        class="month">Jan</span><span
                                                                                        data-action="selectMonth"
                                                                                        class="month">Feb</span><span
                                                                                        data-action="selectMonth"
                                                                                        class="month">Mar</span><span
                                                                                        data-action="selectMonth"
                                                                                        class="month">Apr</span><span
                                                                                        data-action="selectMonth"
                                                                                        class="month">May</span><span
                                                                                        data-action="selectMonth"
                                                                                        class="month">Jun</span><span
                                                                                        data-action="selectMonth"
                                                                                        class="month">Jul</span><span
                                                                                        data-action="selectMonth"
                                                                                        class="month active">Aug</span><span
                                                                                        data-action="selectMonth"
                                                                                        class="month">Sep</span><span
                                                                                        data-action="selectMonth"
                                                                                        class="month">Oct</span><span
                                                                                        data-action="selectMonth"
                                                                                        class="month">Nov</span><span
                                                                                        data-action="selectMonth"
                                                                                        class="month">Dec</span>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                                <div class="datepicker-years" style="display: none;">
                                                                    <table class="table-condensed">
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="prev"
                                                                                    data-action="previous"><i
                                                                                        class="fa fa-chevron-left"></i>
                                                                                </th>
                                                                                <th class="picker-switch"
                                                                                    data-action="pickerSwitch" colspan="5"
                                                                                    title="Select Decade">2016-2027</th>
                                                                                <th class="next"
                                                                                    data-action="next"><i
                                                                                        class="fa fa-chevron-right"></i>
                                                                                </th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td colspan="7"><span
                                                                                        data-action="selectYear"
                                                                                        class="year">2016</span><span
                                                                                        data-action="selectYear"
                                                                                        class="year">2017</span><span
                                                                                        data-action="selectYear"
                                                                                        class="year">2018</span><span
                                                                                        data-action="selectYear"
                                                                                        class="year">2019</span><span
                                                                                        data-action="selectYear"
                                                                                        class="year">2020</span><span
                                                                                        data-action="selectYear"
                                                                                        class="year active">2021</span><span
                                                                                        data-action="selectYear"
                                                                                        class="year">2022</span><span
                                                                                        data-action="selectYear"
                                                                                        class="year">2023</span><span
                                                                                        data-action="selectYear"
                                                                                        class="year">2024</span><span
                                                                                        data-action="selectYear"
                                                                                        class="year">2025</span><span
                                                                                        data-action="selectYear"
                                                                                        class="year">2026</span><span
                                                                                        data-action="selectYear"
                                                                                        class="year">2027</span>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                                <div class="datepicker-decades" style="display: none;">
                                                                    <table class="table-condensed">
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="prev"
                                                                                    data-action="previous"><i
                                                                                        class="fa fa-chevron-left"></i>
                                                                                </th>
                                                                                <th class="picker-switch"
                                                                                    data-action="pickerSwitch" colspan="5">
                                                                                    2000-2107</th>
                                                                                <th class="next"
                                                                                    data-action="next"><i
                                                                                        class="fa fa-chevron-right"></i>
                                                                                </th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td colspan="7"><span
                                                                                        data-action="selectDecade"
                                                                                        class="decade"
                                                                                        data-selection="2005">2000 -
                                                                                        2011</span><span
                                                                                        data-action="selectDecade"
                                                                                        class="decade active"
                                                                                        data-selection="2017">2012 -
                                                                                        2023</span><span
                                                                                        data-action="selectDecade"
                                                                                        class="decade"
                                                                                        data-selection="2029">2024 -
                                                                                        2035</span><span
                                                                                        data-action="selectDecade"
                                                                                        class="decade"
                                                                                        data-selection="2041">2036 -
                                                                                        2047</span><span
                                                                                        data-action="selectDecade"
                                                                                        class="decade"
                                                                                        data-selection="2053">2048 -
                                                                                        2059</span><span
                                                                                        data-action="selectDecade"
                                                                                        class="decade"
                                                                                        data-selection="2065">2060 -
                                                                                        2071</span><span
                                                                                        data-action="selectDecade"
                                                                                        class="decade"
                                                                                        data-selection="2077">2072 -
                                                                                        2083</span><span
                                                                                        data-action="selectDecade"
                                                                                        class="decade"
                                                                                        data-selection="2089">2084 -
                                                                                        2095</span><span
                                                                                        data-action="selectDecade"
                                                                                        class="decade"
                                                                                        data-selection="2101">2096 -
                                                                                        2107</span><span></span><span></span><span></span>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="picker-switch accordion-toggle">
                                                            <table class="table-condensed">
                                                                <tbody>
                                                                    <tr>
                                                                        <td><a data-action="togglePicker"
                                                                                title="Select Time"><i
                                                                                    class="fa fa-clock-o"></i></a></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </li>
                                                        <li class="collapse">
                                                            <div class="timepicker">
                                                                <div class="timepicker-picker">
                                                                    <table class="table-condensed">
                                                                        <tr>
                                                                            <td><a href="#" tabindex="-1"
                                                                                    title="Increment Hour"
                                                                                    class="btn"
                                                                                    data-action="incrementHours"><i
                                                                                        class="fa fa-chevron-up"></i></a>
                                                                            </td>
                                                                            <td class="separator"></td>
                                                                            <td><a href="#" tabindex="-1"
                                                                                    title="Increment Minute"
                                                                                    class="btn"
                                                                                    data-action="incrementMinutes"><i
                                                                                        class="fa fa-chevron-up"></i></a>
                                                                            </td>
                                                                            <td class="separator"></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><span class="timepicker-hour"
                                                                                    data-time-component="hours"
                                                                                    title="Pick Hour"
                                                                                    data-action="showHours">09</span></td>
                                                                            <td class="separator">:</td>
                                                                            <td><span class="timepicker-minute"
                                                                                    data-time-component="minutes"
                                                                                    title="Pick Minute"
                                                                                    data-action="showMinutes">38</span></td>
                                                                            <td><button class="btn btn-primary"
                                                                                    data-action="togglePeriod" tabindex="-1"
                                                                                    title="Toggle Period">PM</button></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><a href="#" tabindex="-1"
                                                                                    title="Decrement Hour"
                                                                                    class="btn"
                                                                                    data-action="decrementHours"><i
                                                                                        class="fa fa-chevron-down"></i></a>
                                                                            </td>
                                                                            <td class="separator"></td>
                                                                            <td><a href="#" tabindex="-1"
                                                                                    title="Decrement Minute"
                                                                                    class="btn"
                                                                                    data-action="decrementMinutes"><i
                                                                                        class="fa fa-chevron-down"></i></a>
                                                                            </td>
                                                                            <td class="separator"></td>
                                                                        </tr>
                                                                    </table>
                                                                </div>
                                                                <div class="timepicker-hours" style="display: none;">
                                                                    <table class="table-condensed">
                                                                        <tr>
                                                                            <td data-action="selectHour"
                                                                                class="hour">12
                                                                            </td>
                                                                            <td data-action="selectHour"
                                                                                class="hour">01
                                                                            </td>
                                                                            <td data-action="selectHour"
                                                                                class="hour">02
                                                                            </td>
                                                                            <td data-action="selectHour"
                                                                                class="hour">03
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td data-action="selectHour"
                                                                                class="hour">04
                                                                            </td>
                                                                            <td data-action="selectHour"
                                                                                class="hour">05
                                                                            </td>
                                                                            <td data-action="selectHour"
                                                                                class="hour">06
                                                                            </td>
                                                                            <td data-action="selectHour"
                                                                                class="hour">07
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td data-action="selectHour"
                                                                                class="hour">08
                                                                            </td>
                                                                            <td data-action="selectHour"
                                                                                class="hour">09
                                                                            </td>
                                                                            <td data-action="selectHour"
                                                                                class="hour">10
                                                                            </td>
                                                                            <td data-action="selectHour"
                                                                                class="hour">11
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                </div>
                                                                <div class="timepicker-minutes" style="display: none;">
                                                                    <table class="table-condensed">
                                                                        <tr>
                                                                            <td data-action="selectMinute"
                                                                                class="minute">00
                                                                            </td>
                                                                            <td data-action="selectMinute"
                                                                                class="minute">05
                                                                            </td>
                                                                            <td data-action="selectMinute"
                                                                                class="minute">10
                                                                            </td>
                                                                            <td data-action="selectMinute"
                                                                                class="minute">15
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td data-action="selectMinute"
                                                                                class="minute">20
                                                                            </td>
                                                                            <td data-action="selectMinute"
                                                                                class="minute">25
                                                                            </td>
                                                                            <td data-action="selectMinute"
                                                                                class="minute">30
                                                                            </td>
                                                                            <td data-action="selectMinute"
                                                                                class="minute">35
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td data-action="selectMinute"
                                                                                class="minute">40
                                                                            </td>
                                                                            <td data-action="selectMinute"
                                                                                class="minute">45
                                                                            </td>
                                                                            <td data-action="selectMinute"
                                                                                class="minute">50
                                                                            </td>
                                                                            <td data-action="selectMinute"
                                                                                class="minute">55
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-header border-0 pb-0">
                                    <h3 class="fs-20 text-black mb-0 mr-2">Revenue Summary</h3>
                                    <div class="dropdown mt-sm-0 mt-3">
                                        <button type="button" class="btn bg-light text-primary dropdown-toggle"
                                            data-toggle="dropdown" aria-expanded="false">
                                            2020
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="javascript:void(0);">2020</a>
                                            <a class="dropdown-item" href="javascript:void(0);">2021</a>
                                            <a class="dropdown-item" href="javascript:void(0);">2022</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body pt-0">
                                    <div id="chartBar"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Content body end --}}
    {{-- Main wrapper end --}}
@endsection
