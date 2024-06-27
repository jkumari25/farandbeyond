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
                        <h1 class="m-0">Destination</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Destination</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main content -->
        <section class="content">

            {{-- <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                        aria-controls="profile" aria-selected="true">Add Destination</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                        aria-controls="contact" aria-selected="false">List Destinations</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                        aria-controls="home" aria-selected="false">Home</a>
                </li>
            </ul> --}}

            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link {{ $activeTab == 'home' ? 'active' : '' }}" id="home-tab" data-toggle="tab"
                        href="#home" role="tab" aria-controls="home"
                        aria-selected="{{ $activeTab == 'home' ? 'true' : 'false' }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $activeTab == 'profile' ? 'active' : '' }}" id="profile-tab" data-toggle="tab"
                        href="#profile" role="tab" aria-controls="profile"
                        aria-selected="{{ $activeTab == 'profile' ? 'true' : 'false' }}">Add Destination</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $activeTab == 'contact' ? 'active' : '' }}" id="contact-tab" data-toggle="tab"
                        href="#contact" role="tab" aria-controls="contact"
                        aria-selected="{{ $activeTab == 'contact' ? 'true' : 'false' }}">List Destinations</a>
                </li>
            </ul>

            <br>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tab-content" id="myTabContent">


                            {{-- first section --}}
                            {{-- <div class="tab-pane fade show active" id="home" role="tabpanel"
                                aria-labelledby="home-tab"> --}}

                            <div class="tab-pane fade {{ $activeTab == 'home' ? 'show active' : '' }}" id="home"
                                role="tabpanel" aria-labelledby="home-tab">



                                <!-- Section 1 -->
                                <form action="{{ route('destination.section1.update') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-group">
                                        <input type="hidden" class="form-control" id="section1" name="section1"
                                            value="1">

                                        <label class="form-label" for="value1">Hero image</label>
                                        <input type="file" class="@error('value1') is-invalid @enderror form-control"
                                            id="value1" name="value1" accept="image/*" />
                                        @error('value1')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="value2">Hero Tittle</label>
                                        {{-- <input type="text" id="value2" name="value2" class="form-control"></input> --}}
                                        <textarea class="form-control" id="value2" name="value2" rows="3">{{ $section1heading ?? '' }}</textarea>

                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                                <!-- Section 1 -->
                                <hr>

                                <form action="{{ route('destination.section2.update') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="section2" id="section2" value="2">
                                    <div class="form-group">
                                        <label for="value1">Section 2 Content</label>
                                        <textarea class="form-control tinymce-editor" id="value1" name="value1" rows="3">{{ $section2content ?? '' }}</textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>

                            {{-- second section --}}
                            {{-- <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab"> --}}

                            <div class="tab-pane fade {{ $activeTab == 'profile' ? 'show active' : '' }}" id="profile"
                                role="tabpanel" aria-labelledby="profile-tab">



                                <form action="{{ route('destination.section3.update') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="section" id="section" value="3">

                                    <?php 
                                    $noOfSection = 1; 
                                    $k = 0;
                                    $h = 2;

                                    for($i= 1 ; $i<=$noOfSection ; $i++){  
                                        $k = $k+1;  
                                        $h = $h + $i;               
                                    ?>

                                    <div class="form-group">
                                        <label for="section1Heading">Destination Name </label>
                                        <textarea class="form-control" id="name" name="name" rows="3">{{ $editedData['destination_name'] ?? '' }}</textarea>

                                        <label style ="margin-top:20px" for="section1Heading">Destination
                                            {{ $i }} first content </label>
                                        <textarea class="form-control tinymce-editor" id="value{{ $k }}" name="value{{ $k }}"
                                            rows="3">{{ $editedData['content_one'] ?? '' }}</textarea>
                                    </div>

                                    <?php
                                    $m = $k + 1;
                                    $k = $m;
                                    ?>

                                    <div class="form-group">
                                        <label for="section1Heading">Destination {{ $i }} second
                                            content</label>
                                        <textarea class="form-control tinymce-editor" id="value{{ $m }}" name="value{{ $m }}"
                                            rows="3">{{ $editedData['content_two'] ?? '' }}</textarea>
                                    </div>

                                    <?php
                                    $m = $k + 1;
                                    $k = $m;
                                    ?>

                                    <div class="form-group">
                                        <label class="form-label" for="value{{ $m }}">Destination Image
                                            {{ $i }} </label>
                                        <input type="file"
                                            class="@error('value{{ $m }}') is-invalid @enderror form-control"
                                            id="value{{ $m }}" name="value{{ $m }}"
                                            accept="image/*" />
                                        @error('value{{ $m }}')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror

                                        <?php
                                        $m = $k + 1;
                                        $k = $m;
                                        ?>

                                        <label class="form-label" for="value{{ $m }}">Destination Image
                                            {{ $i + 1 }}</label>
                                        <input type="file"
                                            class="@error('value{{ $m }}') is-invalid @enderror form-control"
                                            id="value{{ $m }}" name="value{{ $m }}"
                                            accept="image/*" />
                                        @error('value{{ $m }}')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror


                                        <label class="form-label" for="valuel">landing page Destination </label>
                                        <input type="file" class=" form-control" id="valuel" name="valuel"
                                            accept="image/*" />


                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>

                                    <?php } ?>

                                </form>
                                <!-- Section 1 -->
                                <hr>




                            </div>

                            {{-- third section --}}
                            {{-- <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab"> --}}


                            <div class="tab-pane fade {{ $activeTab == 'contact' ? 'show active' : '' }}" id="contact"
                                role="tabpanel" aria-labelledby="contact-tab">


                                <!-- Modal -->
                                <div class="modal fade" id="addVideoModal" tabindex="-1" role="dialog"
                                    aria-labelledby="addVideoModal" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="addVideoModal">View Destination List</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal -->
                                <!-- Table -->
                                <table class="table mt-2">
                                    <thead>
                                        <tr>
                                            {{-- <th scope="col">S</th> --}}
                                            <th scope="col">Name</th>
                                            <th scope="col">Image1</th>
                                            <th scope="col">Image2</th>
                                            <th scope="col">Landing Page Image</th>
                                            <th scope="col">Description1</th>
                                            <th scope="col">Description2</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($country as $video)
                                            <tr>
                                                <td>{{ $video->destination_name }}</td>
                                                <th scope="row">
                                                    <img src="{{ $video->image_one }}" alt="" srcset=""
                                                        width="250">
                                                </th>
                                                <th scope="row">
                                                    <img src="{{ $video->image_two }}" alt="" srcset=""
                                                        width="250">
                                                </th>
                                                <th scope="row">
                                                    <img src="{{ $video->l_image }}" alt="" srcset=""
                                                        width="250">
                                                </th>
                                                {{-- <td>{!! $video->content_one !!}</td> --}}
                                                <td>
                                                    @php
                                                        $trimmedContent = Str::limit($video->content_one, 200, '...');
                                                        echo $trimmedContent;
                                                    @endphp
                                                </td>
                                                <td>
                                                    @php
                                                        $trimmedContent = Str::limit($video->content_two, 200, '...');
                                                        echo $trimmedContent;
                                                    @endphp
                                                </td>

                                                {{-- <td>{!! $video->content_two !!}</td> --}}
                                                <td>
                                                    <a href="file/destination/delete/{{ $video->id }}"
                                                        class="btn btn-sm btn-danger">Delete</button>

                                                        <a style="margin-top:10%"
                                                            href="{{ route('admin.designation', ['id' => $video->id]) }}"
                                                            class="btn btn-sm btn-success">Edit</a>

                                                        @if ($video->status == 1)
                                                            <a style="margin-top:10%"
                                                                href="file/destination/deactive/{{ $video->id }}"
                                                                class="btn btn-sm btn-danger">Deactive</a>
                                                        @else
                                                            <a style="margin-top:10%"
                                                                href="file/destination/active/{{ $video->id }}"
                                                                class="btn btn-sm btn-success">Active</a>
                                                        @endif
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>

                        </div>
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
    <script>
        $(document).ready(function() {
            var hash = window.location.hash;
            if (hash) {
                $('.nav-link[href="' + hash + '"]').tab('show');
            } else {
                $('.nav-link[href="#{{ $activeTab }}"]').tab('show');
            }

            $('a[data-toggle="tab"]').on('shown.bs.tab', function(e) {
                window.location.hash = e.target.hash;
            });
        });
    </script>
@endsection
