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

        {{-- Heading Panel --}}
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Home Page</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/login">Home</a></li>
                            <li class="breadcrumb-item active">Home Page</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main content -->
        <section class="content">

            {{-- section1 --}}
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h3> Landing Page Banner Section </h3>
                    </div>
                    <div class="col-md-12">
                        <form action="{{ route('section1.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <input type="hidden" class="form-control" id="pageName" name="pageName"
                                    value="landingPage">
                                <input type="hidden" class="form-control" id="section1" name="section1" value="1">

                                <label class="form-label" for="value1">Hero Video</label>
                                <input type="file" class="@error('value1') is-invalid @enderror form-control"
                                    id="value1" name="value1" accept="video/*" />
                                @error('value1')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Hero Tittle</label>
                                <textarea class="form-control" id="value2" name="value2" rows="3">{{ $pageData['section1heading'] ?? '' }}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>

            {{-- section2 --}}
            <div class="container-fluid" style="margin-top: 30px">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h3> Description Section </h3>
                    </div>
                    <div class="col-md-12">
                        <form action="{{ route('section2.update') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="hidden" class=" form-control " id="pageName" name="pageName"
                                    value="landinPage">
                                <input type="hidden" class=" form-control " id="section2" name="section2" value="2">

                                <label for="exampleFormControlTextarea1"></label>
                                <textarea class="form-control tinymce-editor" id="value1" name="value1" rows="3">{{ $pageData['section2title'] ?? '' }}</textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>



            {{-- section 6 --}}
            <div class="container-fluid" style="margin-top: 30px">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h3> Section 6 Inspirational Adventures</h3>
                    </div>
                    <div class="col-md-12">
                        <form action="{{ route('section6.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <input type="hidden" class="form-control" id="pageName" name="pageName"
                                    value="landingPage">
                                <input type="hidden" class="form-control" id="section6" name="section6"
                                    value="6">

                                {{-- <label class="form-label" for="value1">section 6 image 1</label>
                                <input type="file" class="@error('value1') is-invalid @enderror form-control"
                                    id="value1" name="value1" accept="image/*" />
                                @error('value1')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror


                                <label class="form-label" for="value3">section 6 image 2</label>
                                <input type="file" class="form-control" id="value3" name="value3"
                                    accept="image/*" />

                                <label class="form-label" for="value4">section 6 image 3</label>
                                <input type="file" class="form-control" id="value4" name="value4"
                                    accept="image/*" /> --}}


                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Example textarea</label>
                                <textarea class="form-control tinymce-editor" id="value2" name="value2" rows="3">{{ $pageData['section6content'] ?? '' }}</textarea>

                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>

            {{-- section 7 --}}
            <div class="container-fluid" style="margin-top: 30px">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h3> Section 7 Responsible Travel</h3>
                    </div>
                    <div class="col-md-12">
                        <form action="{{ route('section6.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <input type="hidden" class="form-control" id="pageName" name="pageName"
                                    value="landingPage">
                                <input type="hidden" class="form-control" id="section7" name="section7"
                                    value="7">

                                <label class="form-label" for="value1">section 7 Image 1</label>
                                <input type="file" class="@error('value1') is-invalid @enderror form-control"
                                    id="value1" name="value1" accept="image/*" />
                                @error('value1')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <label class="form-label" for="value3">section 7 image 2</label>
                                <input type="file" class="form-control" id="value3" name="value3"
                                    accept="image/*" />


                                <label class="form-label" for="value4">section 7 image 3</label>
                                <input type="file" class="form-control" id="value4" name="value4"
                                    accept="image/*" />


                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Example textarea</label>
                                <textarea class="form-control tinymce-editor" id="value2" name="value2" rows="3">{{ $pageData['section7content'] ?? '' }}</textarea>

                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>

        </section>
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
