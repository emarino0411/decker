@extends('layouts.app')

@section('title')
    Homepage
@endsection

@section('content')
    <!-- Container fluid  -->
    <div class="container-fluid">
        <!-- Start Page Content -->
        <div class="row">
            <div class="col-lg-6">
                <div class="card card-outline-primary">
                    <div class="card-header">
                        <h4 class="m-b-0 text-white">Update Truck Record</h4>
                    </div>
                    <div class="card-body">
                        <form action="#">
                            <div class="form-body">
                                <h3 class="card-title m-t-15">Truck Info</h3>
                                <hr>
                                <div class="row p-t-20">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Truck Name</label>
                                            <input type="text" id="firstName" class="form-control" placeholder="John doe">
                                            <small class="form-control-feedback"> This is inline help </small> </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group has-danger">
                                            <label class="control-label">Plate Number</label>
                                            <input type="text" id="lastName" class="form-control form-control-danger" placeholder="12n">
                                            <small class="form-control-feedback"> This field has error. </small> </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <div class="row p-t-20">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Manufacturer</label>
                                            <input type="text" id="firstName" class="form-control" placeholder="John doe">
                                            <small class="form-control-feedback"> This is inline help </small> </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group has-danger">
                                            <label class="control-label">Year Model</label>
                                            <input type="text" id="lastName" class="form-control form-control-danger" placeholder="12n">
                                            <small class="form-control-feedback"> This field has error. </small> </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <!--/row-->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Type</label>
                                            <select class="form-control custom-select">
                                                <option value="">Male</option>
                                                <option value="">Female</option>
                                            </select>
                                            <small class="form-control-feedback"> Select truck type </small> </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Category</label>
                                            <select class="form-control custom-select">
                                                <option value="">Small</option>
                                                <option value="">Medium</option>
                                            </select>
                                            <small class="form-control-feedback"> Select truck category</small> </div>
                                    </div>
                                    <!--/span-->
                                </div>
                               
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                                <button type="button" class="btn btn-inverse">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
        <!-- Row -->
    </div>
    <!-- End Container fluid  -->
@endsection
