@extends('layouts.apph')

@section('content')
            <div class="container">
                <div class="row justify-content-center">
                 <div class="card">
                            <div class="card-header">Dashboard</div>
                            <div class="card-body">
                                
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif

                                <h2>Selamat datang user {{ Auth::user()->name }} </h2>
                                <div class="row">                             

                                    <div class="col-sm-4">
                                        <div class="card border-c">
                                          <img class="card-img-top border-img-c" src="{{asset('asset/image/img/img-01.jpg')}}" >
                                          <div class="card-body">
                                            <p class="card-text tx-center">link</p>
                                          </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="card border-c">
                                          <img class="card-img-top border-img-c" src="{{asset('asset/image/img/img-02.jpg')}}">
                                          <div class="card-body">
                                            <p class="card-text tx-center">link</p>
                                          </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="card border-c">
                                          <img class="card-img-top border-img-c" src="{{asset('asset/image/img/img-03.jpg')}}">
                                          <div class="card-body">
                                            <p class="card-text tx-center">link</p>
                                        </div>
                                    </div>

                                </div>
                    
                            </div>
                            <div style="margin-top: 15px;">
                                <div class="card">
                                    <div class="card-body">

                                        <h2>Collapsible Sidebar Using Bootstrap 4</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                                        <div class="line"></div>
                                        
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
            </div>
            
@endsection
