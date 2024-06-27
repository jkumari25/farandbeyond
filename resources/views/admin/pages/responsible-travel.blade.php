@extends('admin.layouts.app')

@section('page-content')
    <div class="content-wrapper">
        @if (\Session::has('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {!! \Session::get('error') !!}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        @if (\Session::has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {!! \Session::get('success') !!}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Responsible Travel</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Responsible Travel</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-md-12">
                        <?php
                    for ($i = 1; $i <= $noOfSections; $i++) {
                    ?>
                        <!-- Section 1 -->
                        <form action="{{ route('admin.responsible.updatesection') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <input type="hidden" class="form-control " id="section" name="section"
                                    value="{{ $i }}">
                                <label for="section{{ $i }}Image">Section {{ $i }} Image</label>
                                <input type="file" name="section{{ $i }}Image"
                                    id="section{{ $i }}Image" class="form-control">
                            </div>
                            <?php
                            if ($i == 3) {
                            ?>
                            <div class="form-group">
                                <label for="section{{ $i }}Image2">Section {{ $i }} Image2</label>
                                <input type="file" name="section{{ $i }}Image2"
                                    id="section{{ $i }}Image2" class="form-control">
                            </div>
                            <?php
                            }
                            ?>
                            <?php
                            if (!in_array($i, [2, 3])) {
                            ?>
                            <div class="form-group">
                                <label for="section{{ $i }}Heading">Section {{ $i }} Heading</label>
                                <input type="text" class="form-control" id="section{{ $i }}Heading"
                                    name="section{{ $i }}Heading"
                                    value="{{ $pageData['section1heading'] ?? '' }}"></input>
                            </div>
                            <?php } ?>
                            <div class="form-group">
                                <label for="section{{ $i }}Content">Section {{ $i }} Content</label>
                                <?php $valueText = 'section' . $i . 'content'; ?>
                                <textarea class="form-control tinymce-editor" id="section{{ $i }}Content"
                                    name="section{{ $i }}Content" rows="3">{{ $pageData[$valueText] ?? '' }}</textarea>

                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                        <!-- Section 1 -->
                        <hr>
                        <?php
                    }
                    ?>

                    </div>
                </div>
            </div>
            <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    </div>
    </div>
@endsection

@section('scripts')
    <script src="https://cdn.tiny.cloud/1/h2i627qpk2x44z2vkshvrgsesr6onkskwiw0mzd81z5ct9mj/tinymce/5/tinymce.min.js"
        referrerpolicy="origin"></script>
    <script type="text/javascript">
        tinymce.init({
            selector: 'textarea.tinymce-editor',
            height: 300,
            menubar: true,
            apikey: 'h2i627qpk2x44z2vkshvrgsesr6onkskwiw0mzd81z5ct9mj',
            plugins: [
                'advlist autolink lists link image charmap print preview anchor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime media table paste code help wordcount', 'image'
            ],
            toolbar: 'undo redo | formatselect | ' +
                'bold italic backcolor | alignleft aligncenter ' +
                'alignright alignjustify | bullist numlist outdent indent | ' +
                'removeformat | help',
            content_css: '//www.tiny.cloud/css/codepen.min.css'
        });
    </script>
@endsection
