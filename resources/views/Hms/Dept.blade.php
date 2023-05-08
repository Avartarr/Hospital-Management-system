
<x-Master>
@section('content')


<div class="main-content">
    <div class="container">
        <div class="row" style="padding: 30px">
            <div class="col-lg-6">
                <div class="card box-margin">
                    <div class="card-body">
                        <div class="shortcode-html">
                            <!-- Table Striped Rows -->
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>S/N</th>
                                            <th>DEPARTMENT
                                                <button class="btn btn-info" style="margin-left: 170px"
                                            data-toggle="modal" data-target="#myModal">Add </button>
                                            </th>

                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($dept as $key => $gt)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $gt->dept }}</td>
                                        </tr>
                                    @endforeach


                                    </tbody>
                                </table>
                            </div>
                            <!-- End Table Striped Rows -->
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card box-margin">
                    <div class="card-body">
                        <div class="shortcode-html">
                            <!-- Table Striped Rows -->
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>S/N</th>
                                            <th>SPECIALTY
                                                <button class="btn btn-info" style="margin-left: 170px"
                                                    data-toggle="modal" data-target="#myModal3">Add </button>
                                            </th>

                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($get as $key => $gr)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $gr->spe }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- End Table Striped Rows -->
                        </div>

                    </div>
                </div>
            </div>
        </div>


    </div>

    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">ADD DEPARTMENT</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form action="{{ route('Store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="dept">Department:</label>
                            <input type="dept" class="form-control" id="dept" placeholder="Enter Department"
                                name="dept">
                        </div>


                        <div class="modal-footer">
                            <button type="submit" class="btn btn-info">Submit</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="myModal3">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">ADD SPECIALTY</h4>
                    <button type="button" class="close" data-dismiss="modal3">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form action="{{ route('Store2') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="spe">Specialty:</label>
                            <input type="spe" class="form-control" id="spe" placeholder="Enter Specialty"
                                name="spe">
                        </div>


                        <div class="modal-footer">
                            <button type="submit" class="btn btn-info">Submit</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

</x-Master>















{{-- <html lang="en">

<head>
    <title>Medix</title>
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="sidebar">

        <h4 style="color: #4DB4D7"> <img src="images/images.png" alt="logo"
                style="width:70px; height: 70px; margin-right:0; ">
            MEDIX</h4>

        <a class="active" href="{{ route('home') }}">EMPLOYEE DATA</a>
        <a class="" href="{{ route('Dept') }}">DEPARTMENTS</a>
        <a class="" href="#">SPECIALTY</a>
        <a class="" href="#">ROLES AND PERMISSION</a>
    </div>
    <div class="main-content">
        <div class="container">
            <div class="row" style="padding: 30px">
                <div class="col-sm-6">

                    <table class="table table-striped">
                        <thead>

                            <tr>DEPARTMENT
                                <button class="btn btn-info" style="margin-left: 300px" style="margin-left: 800px"
                                    data-toggle="modal" data-target="#myModal">Add </button>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dept as $key => $gt)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $gt->dept }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row" style="padding: 30px">
                <div class="col-sm-6">
                    <table class="table table-striped">
                        <thead>
                            <tr>SPECIALTY
                                <button class="btn btn-info" style="margin-left: 300px" style="margin-left: 800px"
                                    data-toggle="modal" data-target="#myModal3">Add </button>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($get as $key => $gr)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $gr->spe }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="modal fade" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">ADD DEPARTMENT</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <form action="{{ route('Store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="dept">Department:</label>
                                <input type="dept" class="form-control" id="dept" placeholder="Enter Department"
                                    name="dept">
                            </div>


                            <div class="modal-footer">
                                <button type="submit" class="btn btn-info">Submit</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="myModal3">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">ADD SPECIALTY</h4>
                        <button type="button" class="close" data-dismiss="modal3">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <form action="{{ route('Store2') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="spe">Specialty:</label>
                                <input type="spe" class="form-control" id="spe" placeholder="Enter Specialty"
                                    name="spe">
                            </div>


                            <div class="modal-footer">
                                <button type="submit" class="btn btn-info">Submit</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal footer -->
</body>

</html> --}}
