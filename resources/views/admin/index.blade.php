@extends('layouts.admin')

@section('admin-content')

    <div id="content">

        <div class="row">

            <div class="col-md-6 information">
                <div class="label">
                    <span class="last-month-bg">Last month</span>
                </div>
                <div class="information-body">
                    <div class="information-icon">
                        <i class="fa fa-shopping-cart"></i>
                    </div>
                    <div class="information-text">
                        <div class="number last-month">213</div>
                        <div class="text">Orders</div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 information">
                <div class="label">
                    <span class="last-month-bg">Last month</span>
                </div>
                <div class="information-body">
                    <div class="information-icon">
                        <i class="fa fa-eye"></i>
                    </div>
                    <div class="information-text">
                        <div class="number last-month">11456</div>
                        <div class="text">Visits</div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 information">
                <div class="label">
                    <span class="overall-bg">Overall</span>
                </div>
                <div class="information-body">
                    <div class="information-icon">
                        <i class="fa fa-users"></i>
                    </div>
                    <div class="information-text">
                        <div class="number overall">5871</div>
                        <div class="text">Users</div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 information">
                <div class="label">
                    <span class="overall-bg">Overall</span>
                </div>
                <div class="information-body">
                    <div class="information-icon">
                        <i class="fa fa-credit-card"></i>
                    </div>
                    <div class="information-text">
                        <div class="number overall">19549 &euro;</div>
                        <div class="text">Sales</div>
                    </div>
                </div>
            </div>
        </div>


    </div>


@endsection