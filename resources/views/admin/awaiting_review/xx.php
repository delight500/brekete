<div class="modal fade" id="{{ 'Modal' . $complaint->id }}" tabindex="-1" role="dialog"
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
                  <dd class="col-sm-8">{{ $complaint->name}}.</dd>
                  <dt class="col-sm-4">Phone Number</dt>
                  <dd class="col-sm-8">{{ $complaint->phone_number }}</dd>
                  <dt class="col-sm-4">Email</dt>
                  <dd class="col-sm-8">{{ $complaint->email }}</dd>


                </dl>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
 <div class="modal-footer">

                                    <form action="{{'/admin/awaiting/valid/' . $complaint->id}}" method="post" >

                                    @csrf

                                                <button type="submit" class="btn btn-success" >Valid</button>
                                            </a>
                                    </form>

                                    <form action="{{'/admin/awaiting/invalid/' . $complaint->id}}" method="post" >

                                    @csrf

                                                <button type="submit" class="btn btn-danger" >Invalid</button>
                                            </a>
                                    </form>
                                     <form action="{{'/admin/awaiting/flagged/' . $complaint->id}}" method="post" >

                                    @csrf

                                                <button type="submit" class="btn btn-warning" >Flagged</button>
                                            </a>
                                    </form>

                                               <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                                               </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>