@extends('default')
@section('content')
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Modification profil utilisateur</h4>
                                </div>
                                <div class="card-body">
                                    <form>
                                         <div class="col-md-6 px-1">
                                                <div class="form-group">
                                                    <label>Prenom</label>
                                                    <input type="text" class="form-control" placeholder="prenom" >
                                                </div>
                                            </div>
                                       <div class="col-md-6 pr-1">
                                                <div class="form-group">
                                                    <label>Nom</label>
                                                    <input type="text" class="form-control" placeholder="nom">
                                                </div>
                                            </div>
                                         <div class="col-md-6 pl-1">
                                                <div class="form-group">
                                                    <label>Service</label>
                                                    <input type="text" class="form-control" placeholder="Raison sociale">
                                                </div>
                                            </div>
                                            <div class="col-md-6 pr-1">
                                                <div class="form-group">
                                                    <label for="exampleInputTelephone">Telephone</label>
                                                    <input type="number" class="form-control" placeholder="Telephone">
                                                </div>
                                            </div>
                                            <div class="col-md-6 pr-1">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Email address</label>
                                                    <input type="email" class="form-control" placeholder="Email">
                                                </div>
                                            </div>



                                             <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Addresse</label>
                                                    <input type="text" class="form-control" placeholder="Adresse précise du prestataire">
                                                </div>
                                            </div>

                                        <div class="row">

                                        </div>
                                        <div class="row">

                                        </div>

                                        <button type="submit" class="btn btn-info btn-fill pull-right">Enregistrer</button>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-user">
                                <div class="card-image">
                                    <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" alt="...">
                                </div>
                                <div class="card-body">
                                    <div class="author">
                                        <a href="#">
                                            <img class="avatar border-gray" src="{{asset('assets/img/faces/face-3.jpg')}}"" alt="...">
                                            <h5 class="title">Mike Andrew</h5>
                                        </a>
                                        <p class="description">
                                            michael24
                                        </p>
                                    </div>
                                    <p class="description text-center">
                                        "Lamborghini Mercy
                                        <br> Your chick she so thirsty
                                        <br> I'm in that two seat Lambo"
                                    </p>
                                </div>
                                <hr>
                                <div class="button-container mr-auto ml-auto">
                                    <button href="#" class="btn btn-simple btn-link btn-icon">
                                        <i class="fa fa-facebook-square"></i>
                                    </button>
                                    <button href="#" class="btn btn-simple btn-link btn-icon">
                                        <i class="fa fa-twitter"></i>
                                    </button>
                                    <button href="#" class="btn btn-simple btn-link btn-icon">
                                        <i class="fa fa-google-plus-square"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
