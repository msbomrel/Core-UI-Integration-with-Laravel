<footer class="app-footer">
    <div>
        <a href="https://coreui.io">CoreUI</a>
        <span>&copy; 2018 creativeLabs.</span>
    </div>
    <div class="ml-auto">
        <span>Powered by</span>
        <a href="https://coreui.io">CoreUI</a>
    </div>
</footer>
<!-- CoreUI and necessary plugins-->
<script src="{{url('backend/js/jquery.min.js')}}"></script>
<script src="{{url('backend/js/popper.min.js')}}"></script>
<script src="{{url('backend/js/bootstrap.min.js')}}"></script>
<script src="{{url('backend/js/pace.min.js')}}"></script>
<script src="{{url('backend/js/perfect-scrollbar.min.js')}}"></script>
<script src="{{url('backend/js/coreui.min.js')}}"></script>
<!-- Plugins and scripts required by this view-->
{{--<script src="../node_modules/chart.js/dist/Chart.min.js"></script>--}}
{{--<script src="../node_modules/@coreui/coreui-plugin-chartjs-custom-tooltips/dist/js/custom-tooltips.min.js"></script>--}}
{{--<script src="js/main.js"></script>--}}
@yield('scripts')
