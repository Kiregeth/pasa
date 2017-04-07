@extends('layouts.admin_app',['select' => 'dashboard'])

@section('content')
    <div class="row">
        <div class="col-lg-12">

            <!-- Traffic sources -->
            <div class="panel panel-flat">
                <div class="container">
                            <div class="panel panel-default">
                                <div class="panel-heading">Admin Dashboard</div>

                                <div class="panel-body">
                                    You are logged in as {{Auth::user()->name}}!
                                </div>
                            </div>
                </div>
            </div>
            <!-- /traffic sources -->
        </div>
    </div>
@endsection
