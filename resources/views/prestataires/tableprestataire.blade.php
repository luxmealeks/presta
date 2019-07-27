@extends('default')
@section('content')
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card strpied-tabled-with-hover">
                                <div class="card-header ">
                                    <h4 class="card-title">Gestion des prestataires</h4>
                                    <p class="card-category">Liste des prestataires enregistrés
                                    <a href="{{route('prestataires.createprestataire')}}">   <button type="submit" class="btn btn-info btn-fill pull-right">Nouveau prestataire</button></a>
                                    </p>
                                </div>
                                <div class="card-body table-full-width table-responsive">
                                    <table class="table table-hover table-striped" id="table-prestataire">
                                        <thead>
                                            <th>ID</th>
                                            <th>NINEA</th>
                                            <th>N°RC</th>
                                            <th>Raison sociale</th>
                                            <th>Tel</th>
                                            <th>BP</th>
                                            <th>E-mail</th>
                                        </thead>
                                        <tbody>
                                            {{-- <tr>
                                                <td>1</td>
                                                <td>Dakota Rice</td>
                                                <td>$36,738</td>
                                                <td>Niger</td>
                                                <td>Oud-Turnhout</td>
                                                <td>Oud-Turnhout</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Minerva Hooper</td>
                                                <td>$23,789</td>
                                                <td>Curaçao</td>
                                                <td>Sinaai-Waas</td>
                                                <td>Oud-Turnhout</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Sage Rodriguez</td>
                                                <td>$56,142</td>
                                                <td>Netherlands</td>
                                                <td>Baileux</td>
                                                <td>Oud-Turnhout</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Philip Chaney</td>
                                                <td>$38,735</td>
                                                <td>Korea, South</td>
                                                <td>Overland Park</td>
                                                <td>Oud-Turnhout</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Doris Greene</td>
                                                <td>$63,542</td>
                                                <td>Malawi</td>
                                                <td>Feldkirchen in Kärnten</td>
                                                <td>Oud-Turnhout</td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>Mason Porter</td>
                                                <td>$78,615</td>
                                                <td>Chile</td>
                                                <td>Gloucester</td>
                                                <td>Oud-Turnhout</td>
                                            </tr> --}}
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
          $('#table-prestataire').DataTable( {
            "processing": true,
            "serverSide": true,
            "ajax": "{{route('prestataires.list')}}",
            columns: [
                { data: 'id', name: 'id' },
                { data: 'ninea', name: 'ninea' },
                { data: 'raisonSociale', name: 'raisonSociale' },
                { data: 'registreCommerce', name: 'registreCommerce' },
                { data: 'telephone', name: 'telephone' },
                { data: 'bp', name: 'bp' },
                { data: 'email', name: 'email' },
                { data: null ,orderable: false, searchable: false}

                ],
                "columnDefs": [
                        {
                        "data": null,
                        "render": function (data, type, row) {
                        url_e =  "{!! route('prestataires.edit',':id')!!}".replace(':id', data.id);
                        url_d =  "{!! route('prestataires.destroy',':id')!!}".replace(':id', data.id);
                        return '<a href='+url_e+'  class="btn btn-primary" ><i class="material-icons">edit</i></a>'+
                        '<div class="btn btn-danger delete btn-delete-client" data-href='+url_d+'><i class="material-icons">delete</i></div>';
                        },
                        },
                        "targets": 6
                        },
                    // {
                    //     "data": null,
                    //     "render": function (data, type, row) {
                    //         url =  "{!! route('prestataires.edit',':id')!!}".replace(':id', data.id);
                    //         return check_status(data,url);
                    //     },
                    //     "targets": 1
                    // }
                ],

          });
      });
      </script>


      @endpush
