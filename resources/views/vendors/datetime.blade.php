@push('extended_css')
    <!-- Datetime -->
    <link href="{{ asset('vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet') }}">
    <link rel="stylesheet" href="{{ asset('vendor/chartist/css/chartist.min.css') }}">
@endpush

@push('extended_scripts')
    <!-- Datetime -->
    <script src="{{ asset('vendor/bootstrap-datetimepicker/js/moment.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js') }}"></script>
    <script src="{{ asset('vendor/chart.js/Chart.bundle.min.js') }}"></script>
    <!-- Chart piety plugin files -->
    <script src="{{ asset('vendor/peity/jquery.peity.min.js') }}"></script>

    <!-- Apex Chart -->
    <script src="{{ asset('vendor/apexchart/apexchart.js') }}"></script>

    <!-- Dashboard 1 -->
    <script src="{{ asset('js/dashboard/dashboard-1.js') }}"></script>
@endpush
