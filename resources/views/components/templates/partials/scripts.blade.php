<!-- base:jquery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<!-- base:js -->
<script src="{{ asset('dist/vendors/js/vendor.bundle.base.js') }}"></script>

<!-- inject:js -->
<script src="{{ asset('dist/js/off-canvas.js') }}"></script>
<script src="{{ asset('dist/js/hoverable-collapse.js') }}"></script>
<!-- <script src="{{ asset('dist/js/template.js') }}"></script> -->
<script src="{{ asset('dist/js/settings.js') }}"></script>
<script src="{{ asset('dist/js/todolist.js') }}"></script>
<!-- endinject -->

<script>
    $('#logout').click(function (e) {
        e.preventDefault()
        $.ajax({
            type: 'POST',
            url: '/logout',
            data: {
                '_token': "{{ csrf_token() }}"
            },
            success: function (response) {
                window.location.href = '/'
            },
        });
    });
</script>

@stack('extra-scripts')
