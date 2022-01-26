@extends('layouts.admin')

@section('title')
  My Orders
@endsection

@section('content')
  <div class="card">
      <div class="card-body">


      <div class="col-xl-4 col-lg-12">
              <div class="card card-chart">
                <div class="card-header card-header-success">
                  <div class="ct-chart" id="dailySalesChart"></div>
                </div>
                <div class="card-body">
                  <h4 class="card-title">Total Orders</h4>
                  <p class="card-category">
                    <span class="text-success"><i class="fa fa-long-arrow-up"></i> 55% </span> increase in today sales.</p>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">access_time</i> updated 4 minutes ago
                  </div>
                </div>
              </div>
            </div>










      
      <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
        <div class="card card-stats">
                  <div class="card-header card-header-warning card-header-icon">
                    <div class="card-icon">
                      <i class="material-icons">content_copy</i>
                    </div>
                    <p class="card-category">Orders</p>
                    <h3 class="card-title">49/50
                      <small>GB</small>
                    </h3>
                  </div>
                  <div class="card-footer">
                    <div class="stats">
                      <i class="material-icons text-warning">warning</i>
                      <a href="#pablo" class="warning-link">Get More Space...</a>
                    </div>
                  </div>
                </div>
          </div>
      </div>
  </div>

@endsection