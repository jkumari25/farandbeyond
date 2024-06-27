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
                        <h1 class="m-0">Our Services</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="">Home</a></li>
                            <li class="breadcrumb-item active">OUR SERVICES</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link {{ $activeTab == 'home' ? 'show active' : '' }}" id="home-tab" data-toggle="tab"
                    href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ $activeTab == 'contact' ? 'show active' : '' }}" id="contact-tab" data-toggle="tab"
                    href="#contact" role="tab" aria-controls="contact" aria-selected="false">Services</a>
            </li>
        </ul>


        <!-- Main content -->
        <section class="content">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade {{ $activeTab == 'home' ? 'show active' : '' }}" id="home" role="tabpanel"
                    aria-labelledby="home-tab">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h3> Section 1 </h3>
                            </div>
                            <div class="col-md-12">
                                <form action="{{ route('admin.save.services1') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <input type="hidden" class="form-control" id="pageName" name="pageName"
                                            value="landingPage">
                                        <input type="hidden" class="form-control" id="section1" name="section1"
                                            value="1">


                                        <label class="form-label" for="value1">Hero Image</label>
                                        <input type="file" class="@error('value1') is-invalid @enderror form-control"
                                            id="value1" name="value1" accept="image/*" />
                                        @error('value1')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Hero Image Tittle</label>
                                        <textarea class="form-control" id="value2" name="value2" rows="3">{{ $pageData['section1tittle'] ?? '' }}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1"> Description </label>
                                        <textarea class="form-control tinymce-editor" id="valueD" name="valueD" rows="3">{{ $pageData['section1content'] ?? '' }}</textarea>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>


                    <!-- /.row (main row) -->
                </div>
                <div class="tab-pane fade {{ $activeTab == 'contact' ? 'show active' : '' }}" id="contact" role="tabpanel"
                    aria-labelledby="contact-tab">
                    <button type="button" class="btn btn-primary mt-3" data-toggle="modal" data-target="#exampleModal">
                        Add Service
                    </button>

                    <!-- Table Content -->
                    <table class="table mt-2">
                        <thead>
                            <tr>
                                <th scope="col">Photo</th>
                                <th scope="col">Content</th>
                                <th scope="col">Action</th>
                                <th scope="col">View</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($multiServices as $service)
                                <tr>
                                    <th>
                                        <img src="{{ $service->image_path }}" alt="" srcset=""
                                            width="250">
                                    </th>
                                    <td>{!! $service->content_value !!}</td>
                                    <td>
                                        <a href="multi-service/delete/{{ $service->id }}"
                                            class="btn btn-sm btn-danger">Delete</button>

                                            <a style="margin-top:10%"
                                                href="{{ route('admin.service', ['id' => $service->id]) }}"
                                                class="btn btn-sm btn-success">Edit</a>

                                            @if ($service->status == 1)
                                                <a style="margin-top:10%"
                                                    href="multi-service/deactive/{{ $service->id }}"
                                                    class="btn btn-sm btn-danger">Deactive</a>
                                            @else
                                                <a style="margin-top:10%" href="multi-service/active/{{ $service->id }}"
                                                    class="btn btn-sm btn-success">Active</a>
                                            @endif


                                    </td>
                                    <td>
                                        @if ($service->view_home == 1)
                                            <a style="margin-top:10%"
                                                href="{{ route('admin.service', ['id' => $service->id]) }}"
                                                class="btn btn-sm btn-danger">Home Page</a>
                                        @else
                                            <a style="margin-top:10%"
                                                href="{{ route('admin.service', ['id' => $service->id]) }}"
                                                class="btn btn-sm btn-success">Services Page</a>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!-- Table Content -->
                </div>
                <!-- /.container-fluid -->
            </div>
        </section>
    </div>


    <!-- Modal  -->
    <div class="modal fade {{ $activeTab == 'exampleModal' ? 'show active' : '' }}" id="exampleModal" tabindex="-1"
        role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Service</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('admin.save.services') }}" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        @csrf
                        <input type="hidden" name="section" id="section" value="2">
                        <div class="form-group">
                            <label for="value1">Select Tour Photo</label>
                            <input type="file" class="form-control" id="value1" name="value1">

                            @if (isset($editData))
                                <input type="hidden" class="form-control" id="id" name="id"
                                    value="{{ $editData->id }}">
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="value2">Section Content</label>
                            <textarea class="form-control tinymce-editor" id="value2" name="value2" rows="3">{{ $editData->content_value ?? '' }}</textarea>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" name="flexCheckIndeterminate"
                                id="flexCheckIndeterminate">
                            <label class="form-check-label" for="flexCheckIndeterminate">
                                <b>Show in The Home Page</b>
                            </label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal -->
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

    <script>
        $(document).ready(function() {
            @if ($activeTab == 'exampleModal')
                $('#exampleModal').modal('show');
            @endif
        });
    </script>
    @if (isset($editData))
        <script>
            var checkbox = document.getElementById('flexCheckIndeterminate');
            checkbox.checked = {{ $editData['view_home'] }} === 1;
        </script>
    @endif
@endsection
