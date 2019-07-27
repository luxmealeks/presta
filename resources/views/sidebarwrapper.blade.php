 <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="{{route('accueil')}}" class="simple-text">
                        PRESTA BASE
                    </a>
                </div>
                <ul class="nav">
                    <li class="nav-item active">
                        {{-- <a class="nav-link"  href="#"> --}}
                     <a class="nav-link"  href="{{route('accueil')}}">
                            <i class="nc-icon nc-chart-pie-35"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="./user.html">
                            <i class="nc-icon nc-circle-09"></i>
                            <p>User Profile</p>
                        </a>
                    </li>
                      {{-- <li class="nav-item active">
                        <a class="nav-link" href="./typography.html">
                            <i class="nc-icon nc-paper-2"></i>
                            <p>GESTION AGREMENTS</p>
                        </a>
                    </li> --}}
                     <li class="nav-item active">
                        <a class="nav-link" href="{{route('prestataires.tableprestataire')}}">
                            <i class="nc-icon nc-notes"></i>
                            <p>Prestataires</p>
                        </a>
                    </li>
                    <li class="nav-item active">
                        {{-- <a class="nav-link" href="#"> --}}
                        <a class="nav-link" href="{{route('agrements.tableagrement')}}">

                            <i class="nc-icon nc-notes"></i>
                            <p>Agréments</p>
                        </a>
                    </li>


                    <li class="nav-item active">
                        <a class="nav-link" href="./icons.html">
                            <i class="nc-icon nc-atom"></i>
                            <p>Icons</p>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="./maps.html">
                            <i class="nc-icon nc-pin-3"></i>
                            <p>Maps</p>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="./notifications.html">
                            <i class="nc-icon nc-bell-55"></i>
                            <p>Notifications</p>
                        </a>
                    </li>

                </ul>
            </div>
