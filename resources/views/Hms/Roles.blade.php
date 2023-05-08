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
                                                <th>ROLES
                                                    <button class="btn btn-info" style="margin-left: 170px"
                                                data-toggle="modal" data-target="#myModal">Add </button>
                                                </th>

                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach ($get as $key => $gt)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $gt->role }}</td>
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
                                                <th>PERMISSION
                                                    <button class="btn btn-info" style="margin-left: 170px"
                                                        data-toggle="modal" data-target="#myModal3">Add </button>
                                                </th>

                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach ($perr as $key => $pe)
                                                <tr>
                                                    <td>{{ $key + 1 }}</td>
                                                    <td>{{ $pe->per }}</td>
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
                        <h4 class="modal-title">ADD ROLE</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <form action="{{ route('role_p') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="role">Role:</label>
                                <input type="role" class="form-control" id="role" placeholder="Enter Role"
                                    name="role">
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
                        <h4 class="modal-title">ADD PERMISSION</h4>
                        <button type="button" class="close" data-dismiss="modal3">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <form action="{{ route('per_p') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="per">Permission:</label>
                                <input type="per" class="form-control" id="per" placeholder="Enter permission"
                                    name="per">
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
