<x-master>
    @section('content')


    <div class="col-12">
        <div class="mb-30">
            <h4 class="card-title">LIST OF AVAILABLE DRUGS
                <button class="btn btn-info" style="margin-left: 900px" style="margin-left: 800px"
            data-toggle="modal" data-target="#myModal">Add </button>
            </h4>


            <div class="modal fade" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Add Drugs</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <form action="#" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <label for="name">Name:</label>
                                    <input type="name" class="form-control" id="name" placeholder="Enter Drug Name"
                                        name="name">
                                </div>
                                <div class="form-group">
                                    <label for="qty">Quantity:</label>
                                    <input type="qty" class="form-control" id="qty" placeholder="Enter Quantiity"
                                        name="qty">
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



            <div class="row">
                <div class="col-lg-12">
                    <div class="card box-margin">
                        <div class="card-body">
                            <div class="shortcode-html">
                                <!-- Table Striped Rows -->
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Quantity</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            {{-- @foreach ($get as $key =>$gt ) --}}

                                            <tr>
                                                {{-- <td>{{ $key + 1 }}</td>
                                                <td>{{ $gt->name }}</td>
                                                <td >{{ $gt->qty }}</td> --}}

                                                <td></td>
                                            </tr>
                                            {{-- @endforeach --}}
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
    </div>

    <div class="col-12">
        <div class="mb-30">
            <h4 class="card-title">LIST OF DISPOSABLES
                <button class="btn btn-info" style="margin-left: 900px" style="margin-left: 800px"
            data-toggle="modal" data-target="#myModal">Add </button>
            </h4>


            <div class="modal fade" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Add Drugs</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <form action="#" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <label for="name">Name:</label>
                                    <input type="name" class="form-control" id="name" placeholder="Enter Drug Name"
                                        name="name">
                                </div>
                                <div class="form-group">
                                    <label for="qty">Quantity:</label>
                                    <input type="qty" class="form-control" id="qty" placeholder="Enter Quantiity"
                                        name="qty">
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



            <div class="row">
                <div class="col-lg-12">
                    <div class="card box-margin">
                        <div class="card-body">
                            <div class="shortcode-html">
                                <!-- Table Striped Rows -->
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Quantity</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            {{-- @foreach ($get as $key =>$gt ) --}}

                                            <tr>
                                                {{-- <td>{{ $key + 1 }}</td> --}}
                                                {{-- <td>{{ $gt->name }}</td>
                                                <td >{{ $gt->qty }}</td> --}}

                                                <td></td>

                                            </tr>
                                            {{-- @endforeach --}}
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
    </div>


    @endsection
</x-master>
