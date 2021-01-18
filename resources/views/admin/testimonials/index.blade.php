@extends('layouts.app')
@push('page_css')

@endpush
@section('third_party_stylesheets')

@endsection

@section('content')
    <div class="container-fluid">

        <section class="content">
            <div class="container-fluid">
                <br>

                <div class="row">
                    {{-- Flash message --}}
                    <div id="alert">
                        @include('admin.partials.flash')
                    </div>
                    {{-- Flash message end--}}
                    <div class="col-xl-12">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card"  style="width:100%">
                                <div class="card-header ">
                                    <h4 class="mb-0" style="float:left">Testimonials</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id='data'  class="table table-striped table-bordered second" style="width:100%"">
                                        <thead>
                                        <tr>
                                            <th>S/N</th>
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>State</th>
                                            <th>Response</th>
                                            <th>Date Lodged</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if (count($testimonials)>0)

                                            @foreach ($testimonials as $testimonial)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $testimonial->name }}</td>
                                                    <td>{{ $testimonial->phone_number }}</td>
                                                    <td>{{ $testimonial->state }}</td>
                                                    <td>{{ $testimonial->response }}</td>
                                                    <td>{{ $testimonial->created_at }}</td>
                                                    <td><span class="right badge badge-success">{{ $testimonial->complaint_status }}</span></td>
                                                    <td>
                                                        <!--modal begin-->

                                                        <button class="btn btn-primary btn-sm btn-block" data-toggle="modal" data-target="{{ '#Modal' . $testimonial->id }}" >View</button>

                                                        <div class="modal fade" id="{{ 'Modal' . $testimonial->id }}" tabindex="-1" role="dialog"
                                                             aria-labelledby="ModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="ModalLabel">Complaints Review
                                                                        </h5>
                                                                        <button type="button" class="close" data-dismiss="modal"
                                                                                aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="card">
                                                                            <div class="card-header">
                                                                                <h3 class="card-title">
                                                                                    <i class="fas fa-text-width"></i>

                                                                                </h3>
                                                                            </div>
                                                                            <!-- /.card-header -->
                                                                            <div class="card-body">
                                                                                <dl class="row">
                                                                                    <dt class="col-sm-4">Name</dt>
                                                                                    <dd class="col-sm-8">{{ $testimonial->name}}.</dd>
                                                                                    <dt class="col-sm-4">Phone Number</dt>
                                                                                    <dd class="col-sm-8">{{ $testimonial->phone_number }}</dd>
                                                                                    <dt class="col-sm-4">Email</dt>
                                                                                    <dd class="col-sm-8">{{ $testimonial->state }}</dd>
                                                                                    <dt class="col-sm-4">Response</dt>
                                                                                    <dd class="col-sm-8"><textarea class="form-control" readonly>{{ $testimonial->complaint }} </textarea></dd>
                                                                                    <dt class="col-sm-4">Date Lodged</dt>
                                                                                    <dd class="col-sm-8">{{ $testimonial->created_at }}</dd>
                                                                                    <dt class="col-sm-4">Attachements</dt>
                                                                                    <dd class="col-sm-8"><button class="btn btn-secondary">view attachments</button></dd>

                                                                                </dl>
                                                                            </div>
                                                                            <!-- /.card-body -->
                                                                        </div>
                                                                        <!-- /.card -->

                                                                        <div class="modal-footer">
                                                                            <p>
                                                                                <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                    </td>
                                                </tr>
                                            @endforeach

                                        @endif

                                        </tbody>
                                        <tfoot>

                                        </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end data table  -->
                        <!-- ============================================================== -->
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection
@section('third_party_scripts')

@endsection

