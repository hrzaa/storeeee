 @extends('layouts.admin')
 @section('title')
     Store Dashboard Page
 @endsection
 @section('content')
     <!-- SECTION CONTENT -->
            <div class="section-content section-dashboard-home" data-aos="fade-up">
              <div class="container-fluid">
                <div class="dashboard-heading">
                  <h2 class="dashboard-title">Admin Dashboard</h2>
                  <p class="dashboard-subtitle">
                    666 Store Administrator Panel
                  </p>
                  <div class="dashboard-content">
                    <div class="row">
                      <div class="col-md-4">
                        <div class="card mb-2">
                          <div class="card-body">
                            <div class="dashboard-card-title">
                              Customers
                            </div>
                            <div class="dashboard-card-subtitle">
                              15.209
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="card mb-2">
                          <div class="card-body">
                            <div class="dashboard-card-title">
                              Revenue
                            </div>
                            <div class="dashboard-card-subtitle">
                              15.209
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="card mb-2">
                          <div class="card-body">
                            <div class="dashboard-card-title">
                              Transaction 
                            </div>
                            <div class="dashboard-card-subtitle">
                              15.209
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row mt-3">
                      <div class="col-12 mt-2">
                        <h5 class="mb-3">
                          Recent Transaction
                        </h5>
                        <a href="/dashboard-transaction_details.html" class="card card-list d-block">
                          <div class="card-body">
                            <div class="row">
                              <div class="col-md-1">
                                <img src="/images/dashboard-icon-product-1.png" alt="">
                              </div>
                              <div class="col-md-4">
                                Sirup Marzan
                              </div>
                              <div class="col-md-3">
                                Hareza Yoan
                              </div>
                              <div class="col-md-3">
                                31 December 2022
                              </div>
                              <div class="col-md-1 d-none d-md-block">
                                <img src="/images/dashboard-arrow-right.svg" alt="">
                              </div>
                            </div>
                          </div>
                        </a>
                        <a href="/dashboard-transaction_details.html" class="card card-list d-block">
                          <div class="card-body">
                            <div class="row">
                              <div class="col-md-1">
                                <img src="/images/dashboard-icon-product-1.png" alt="">
                              </div>
                              <div class="col-md-4">
                                Sirup Marzan
                              </div>
                              <div class="col-md-3">
                                Hareza Yoan
                              </div>
                              <div class="col-md-3">
                                31 December 2022
                              </div>
                              <div class="col-md-1 d-none d-md-block">
                                <img src="/images/dashboard-arrow-right.svg" alt="">
                              </div>
                            </div>
                          </div>
                        </a>
                        <a href="/dashboard-transaction_details.html" class="card card-list d-block">
                          <div class="card-body">
                            <div class="row">
                              <div class="col-md-1">
                                <img src="/images/dashboard-icon-product-1.png" alt="">
                              </div>
                              <div class="col-md-4">
                                Sirup Marzan
                              </div>
                              <div class="col-md-3">
                                Hareza Yoan
                              </div>
                              <div class="col-md-3">
                                31 December 2022
                              </div>
                              <div class="col-md-1 d-none d-md-block">
                                <img src="/images/dashboard-arrow-right.svg" alt="">
                              </div>
                            </div>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
 @endsection
 