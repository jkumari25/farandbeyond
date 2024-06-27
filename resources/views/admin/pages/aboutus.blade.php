@extends('admin.layouts.app')

@section('page-content')

    <div class="content-wrapper">
        @if (\Session::has('error'))
            <div class="alert alert-danger">
                <ul>
                    <li>{!! \Session::get('error') !!}</li>
                </ul>
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
                        <h1 class="m-0">About us Page</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/login">Home</a></li>
                            <li class="breadcrumb-item active">About Us</li>
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
                        <h3> Hero Section </h3>
                    </div>
                    <div class="col-md-12">
                        <form action="{{ route('about.section1.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <input type="hidden" class="form-control" id="pageName" name="pageName"
                                    value="landingPage">
                                <input type="hidden" class="form-control" id="section1" name="section1" value="1">

                                <label class="form-label" for="value1">Hero Image</label>
                                <input type="file" class="@error('value1') is-invalid @enderror form-control"
                                    id="value1" name="value1" accept="image/*" />
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
                        <form action="{{ route('about.section2.update') }}" method="POST">
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

            {{-- section 3/4 --}}
            <div class="container-fluid" style="margin-top: 30px">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h3> About Us Description 1 </h3>
                    </div>
                    <div class="col-md-12">
                        <form action="{{ route('about.section3.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <input type="hidden" class="form-control" id="pageName" name="pageName"
                                    value="landingPage">
                                <input type="hidden" class="form-control" id="section3" name="section3"
                                    value="3">

                                <label class="form-label" for="value1">Description 1 image</label>
                                <input type="file" class="@error('value1') is-invalid @enderror form-control"
                                    id="value1" name="value1" accept="image/*" />
                                @error('value1')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Description 1 content</label>
                                <textarea class="form-control tinymce-editor" id="value2" name="value2" rows="3">{{ $pageData['section3content'] ?? '' }}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="container-fluid" style="margin-top: 30px">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h3> About Us Description 2 </h3>
                    </div>
                    <div class="col-md-12">
                        <form action="{{ route('about.section4.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Description 2 content</label>
                                <textarea class="form-control tinymce-editor" id="value2" name="value2" rows="4">{{ $pageData['section4content'] ?? '' }}</textarea>

                                <input type="hidden" class="form-control" id="pageName" name="pageName"
                                    value="landingPage">
                                <input type="hidden" class="form-control" id="section4" name="section4"
                                    value="4">

                            </div>
                            <div class="form-group">
                                <label class="form-label" for="value1">Description 1 image</label>
                                <input type="file" class="@error('value1') is-invalid @enderror form-control"
                                    id="value1" name="value1" accept="image/*" />
                                @error('value1')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>

            {{-- section 5 --}}
            <div class="container-fluid" style="margin-top: 30px">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h3> About Us Description 3 </h3>
                    </div>
                    <div class="col-md-12">
                        <form action="{{ route('about.section5.update') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Description 3 content 1</label>
                                <textarea class="form-control tinymce-editor" id="value2" name="value2" rows="4">{{ $pageData['section5content'] ?? '' }}</textarea>
                                <input type="hidden" class="form-control" id="pageName" name="pageName"
                                    value="landingPage">
                                <input type="hidden" class="form-control" id="section5" name="section5"
                                    value="5">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="value1">Description 3 image 1</label>
                                <input type="file" class="@error('value1') is-invalid @enderror form-control"
                                    id="value1" name="value1" accept="image/*" />
                                @error('value1')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="value3">Description 3 image 2</label>
                                <input type="file" class="@error('value3') is-invalid @enderror form-control"
                                    id="value3" name="value3" accept="image/*" />
                                @error('value3')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Description 3 content 1</label>
                                <textarea class="form-control tinymce-editor" id="value4" name="value4" rows="4">{{ $pageData['section5content2'] ?? '' }}</textarea>
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
                        <h3> Our Team Section </h3>
                    </div>
                    <div class="col-md-12">
                        <form action="{{ route('about.section6.update') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label class="form-label" for="value1">Member 1 Image</label>
                                <input type="file" class="@error('value1') is-invalid @enderror form-control"
                                    id="value1" name="value1" accept="image/*" />
                                @error('value1')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Member 1 Description</label>
                                <textarea class="form-control tinymce-editor" id="value2" name="value2" rows="4">{{ $pageData['section6content'] ?? '' }}</textarea>
                                <input type="hidden" class="form-control" id="pageName" name="pageName"
                                    value="landingPage">
                                <input type="hidden" class="form-control" id="section6" name="section6"
                                    value="6">
                            </div>


                            <div class="form-group">
                                <label class="form-label" for="value3">Member 2 Image</label>
                                <input type="file" class="@error('value3') is-invalid @enderror form-control"
                                    id="value3" name="value3" accept="image/*" />
                                @error('value3')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Member 2 Description</label>
                                <textarea class="form-control tinymce-editor" id="value4" name="value4" rows="4">{{ $pageData['section6content2'] ?? '' }}</textarea>
                            </div>



                            <div class="form-group">
                                <label class="form-label" for="value5">Member 3 Image</label>
                                <input type="file" class="@error('value5') is-invalid @enderror form-control"
                                    id="value5" name="value5" accept="image/*" />
                                @error('value5')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Member 3 Description</label>
                                <textarea class="form-control tinymce-editor" id="value6" name="value6" rows="4">{{ $pageData['section6content3'] ?? '' }}</textarea>
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
