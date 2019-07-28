@extends('default')
@section('content')
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card strpied-tabled-with-hover">
                                <div class="card-header ">
                                    <h4 class="card-title">Enregistrement des agréments</h4>
                                    <p class="card-category">Here is a subtitle for this table</p>
                                </div>
                                <div class="card-body table-full-width table-responsive">
                                    <table class="table table-hover table-striped" id="table-agrement">
                                        <thead>
                                            <th>ID</th>
                                            <th>Références</th>
                                            <th>Classe d'agrément</th>
                                            <th>Date d'enregistrement</th>
                                             <th>Action</th>
                                        </thead>
                                        <tbody>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
@endsection

@push('scripts')
      <script type="text/javascript">
      $(document).ready(function () {
          $('#table-agrement').DataTable( {
            "processing": true,
            "serverSide": true,
            "ajax": "{{route('agrements.list')}}",
            columns: [
                { data: 'id', name: 'id' },
                { data: 'reference', name: 'reference' },
                { data: 'classe', name: 'classe' },
                { data: 'created_at', name: 'created_at' },

                { data: null ,orderable: false, searchable: false}

                ],
                "columnDefs": [
                        {
                        "data": null,
                        "render": function (data, type, row) {
                        url_e =  "{!! route('agrements.edit',':id')!!}".replace(':id', data.id);
                        url_d =  "{!! route('agrements.destroy',':id')!!}".replace(':id', data.id);
                        return '<a href='+url_e+'  class="btn btn-primary" ><i class="material-icons">edit</i></a>'+
                        '<div class="btn btn-danger delete btn-delete-client" data-href='+url_d+'><i class="material-icons">delete</i></div>';
                        },
                        "targets": 4
                        },
                    // {
                    //     "data": null,
                    //     "render": function (data, type, row) {
                    //         url =  "{!! route('agrements.edit',':id')!!}".replace(':id', data.id);
                    //         return check_status(data,url);
                    //     },
                    //     "targets": 1
                    // }
                ],
                  dom: 'lBfrtip',
                buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
                ],
                "lengthMenu": [ 10, 25, 50, 75, 100 ]

          });
      });
      </script>
      @endpush
