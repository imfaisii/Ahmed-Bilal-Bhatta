@extends('layouts.dashboard')
@include('vendors.dt')
@include('vendors.toaster')
@include('vendors.validate')
@include('vendors.sweet')
@section('content')

    {{-- Modals here --}}
    @if (Route::is('worker.index'))
        @include('worker.modals.new_worker')
    @elseif (Route::is('worker.borrow.index'))
        @include('worker.modals.borrow')
    @elseif (Route::is('worker.bricksDone.index'))
        @include('worker.modals.bricks-done')
    @endif

    {{-- Content body start --}}
    <div class="content-body">
        <div class="container-fluid">
            <div class="page-titles">
                <h4>Workers Area</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Workers</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Details</a></li>
                </ol>
            </div>
            @if (Route::is('worker.history'))
                <div class="col-12 historyClass">
                    <div class="col-md-4">
                        <label>Name : </label>
                        <h4>{{ $workers->name }}</h4>
                    </div>
                    <div class="col-md-4">
                        <label>Phone No : </label>
                        <h4>{{ $workers->phoneNo }}</h4>
                    </div>
                    <div class="col-md-4">
                        <label>CNIC : </label>
                        <h4>{{ $workers->cnic }}</h4>
                    </div>
                </div>
            @endif
            <!-- row -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Worker
                            @if (Route::is('worker.borrow.index'))
                                Borrowing and Return
                            @elseif(Route::is('worker.bricksDone.index'))
                                Bricks done by particular Worker
                            @elseif(Route::is('worker.bricksDone.view'))
                                Bricks done record
                            @endif
                            Details
                        </h4>
                        @if (Route::is('worker.index'))
                            <a href="javascript:void(0)" class="btn btn-primary mr-3 pull-right openNewWorkerModal">+ New
                                Worker</a>
                        @endif
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            @if (Route::is('worker.index'))
                                @include('worker.datatables.workersDetails',['worker'=>$workers])
                            @elseif(Route::is('worker.borrow.index'))
                                @include('worker.datatables.borrowNreturnDetails',['worker'=>$workers])
                            @elseif(Route::is('worker.history'))
                                @include('worker.datatables.borrowNreturnHistoryBorrowed',['worker'=>$workers])
                            @elseif(Route::is('worker.bricksDone.index'))
                                @include('worker.datatables.bricksDone',['worker'=>$workers])
                            @elseif(Route::is('worker.bricksDone.view'))
                                @include('worker.datatables.workdoneHistory',['worker'=>$workers,'name'=>$workerName])
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @if (Route::is('worker.history'))
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Worker @if (Route::is('worker.borrow.index'))Borrowing and Return @endif Details
                            </h4>
                            @if (Route::is('worker.index'))
                                <a href="javascript:void(0)" class="btn btn-primary mr-3 pull-right openNewWorkerModal">+
                                    New
                                    Worker</a>
                            @endif
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                @include('worker.datatables.workersDetailsHistoryReturned',['worker'=>$workers])
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
    {{-- Content body ends --}}

@section('extended_scripts_blade')
    {{-- Modals here --}}
    @if (Route::is('worker.index'))
        <script src="{{ asset('js/worker/addWorker.js') }}"></script>
        <script src="{{ asset('js/worker/editWorker.js') }}"></script>
    @elseif (Route::is('worker.borrow.index'))
        <script src="{{ asset('js/worker/borrowNreturn.js') }}"></script>
    @elseif (Route::is('worker.bricksDone.index'))
        <script src="{{ asset('js/worker/bricksDone.js') }}"></script>
    @endif

@endsection
@endsection
