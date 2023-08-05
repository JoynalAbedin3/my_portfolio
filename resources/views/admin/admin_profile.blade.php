@extends('admin.admin_master')
@section('admin')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-xl-6">
                    <!-- Simple card -->
                    <div class="card">
                        <br><br>
                        <center>
                            <img class="rounded-circle avatar-xl" src="{{ asset('/') }}/backend/assets/images/small/img-1.jpg"
                            alt="Card image cap">
                        </center><br>   <br><br>
                       
                        <div class="card-body">
                            <h4 class="card-title">Name : {{$adminData->name}}</h4>   <br> 
                            <h4 class="card-title">User Emain : {{$adminData->email}}</h4>   <br> 
                            <h4 class="card-title">User name : {{$adminData->user}}</h4>   <br> 
                             
                            <a href="#" class="btn btn-primary waves-effect waves-light">Button</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
@endsection
