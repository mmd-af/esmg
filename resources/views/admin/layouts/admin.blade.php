<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>esmg.co.ir - @yield('title') </title>

    <link href="{{ asset('/css/admin.css') }}" rel="stylesheet">

</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
@include('admin.sections.sidebar')
<!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
        @include('admin.sections.topbar')
        <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

                @yield('content')

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
    @include('admin.sections.footer')
    <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
@include('admin.sections.scroll_top')
<!-- Bootstrap core JavaScript-->
<script src="{{ asset('/js/admin.js') }}"></script>
<script src="{{asset('/js/ckeditor/ckeditor.js')}}"></script>
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>

<script>
    function getMessages() {
        let setMessage = document.getElementById('getMessages');
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: 'GET',
            url: '{{ route('admin.messages.ajax.getMessage') }}',
            success: function (response) {
                setMessage.innerHTML = '';
                response.forEach((data) => {
                    {{--let catLink = '{{ route('site.categories.show', ':slug') }}';--}}
                    {{--catLink = catLink.replace(':slug', data.slug);--}}
                    let messageData = `
        <a class="dropdown-item d-flex justify-content-between" href="#">
                    <div>
                        <div class="small text-gray-500">${data.phone}</div>
                        <span class="font-weight-bold">${data.description}</span>
                    </div>

                    <div class="mr-3">
                        <div class="icon-circle bg-primary">
                            <i class="fas fa-file-alt text-white"></i>
                        </div>
                    </div>

                </a>`;
                    setMessage.innerHTML += messageData;
                })
            }
        });
    }
</script>

<script>
    let editor = document.querySelector('#editor');
    if (editor) {
        var options = {
            filebrowserImageBrowseUrl: '/filemanager?type=Images',
            filebrowserBrowseUrl: '/filemanager?type=Files',
        };
        CKEDITOR.replace(editor, options);
    }

    $('#logo').filemanager('image');
    $('#primaryImage').filemanager('image');
</script>
@include('sweet::alert')
@yield('script')
</body>

</html>
