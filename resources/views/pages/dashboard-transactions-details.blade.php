 @extends('layouts.dashboard')
 @section('title')
     Store Dashboard Transactions Detail
 @endsection
 @section('content')
    <!-- SECTION CONTENT -->
    <div class="section-content section-dashboard-home" data-aos="fade-up">
      <div class="container-fluid">
        <div class="dashboard-heading">
          <h2 class="dashboard-title">#STORE666</h2>
          <p class="dashboard-subtitle">
            Transactions  /   Details
          </p>
        </div>
        <div class="dashvoard-content" id="transactionDetails">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-12 col-md-4">
                      <img src="/images/product-details-dashboard.png" class="w-100 mb-3" alt="">
                    </div>
                    <div class="col-12 col-md-8">
                      <div class="row">
                        <div class="col-12 col-md-6">
                          <div class="product-title">Customer Name</div>
                          <div class="product-subtitle">Hareza Yoan</div>
                        </div>
                        <div class="col-12 col-md-6">
                          <div class="product-title">Product Name</div>
                          <div class="product-subtitle">Sirup Marjan</div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-12 col-md-6">
                          <div class="product-title">Date of Transactions</div>
                          <div class="product-subtitle">31 December 2022</div>
                        </div>
                        <div class="col-12 col-md-6">
                          <div class="product-title">Payment Status</div>
                          <div class="product-subtitle text-danger">Pending</div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-12 col-md-6">
                          <div class="product-title">Total Ammount</div>
                          <div class="product-subtitle">$280.090</div>
                        </div>
                        <div class="col-12 col-md-6">
                          <div class="product-title">Mobile</div>
                          <div class="product-subtitle">+62666-666</div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12 mt-4">
                      <h5>Shipping Informations</h5>
                    </div>
                    <div class="col-12">
                      <div class="row">
                        <div class="col-12 col-md-6">
                          <div class="product-title">Address 1</div>
                          <div class="product-subtitle">Banaran</div>
                        </div>
                        <div class="col-12 col-md-6">
                          <div class="product-title">Address 2</div>
                          <div class="product-subtitle">Matesih</div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-12 col-md-6">
                          <div class="product-title">Province</div>
                          <div class="product-subtitle">Central Java</div>
                        </div>
                        <div class="col-12 col-md-6">
                          <div class="product-title">City</div>
                          <div class="product-subtitle">Karangayar</div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-12 col-md-6">
                          <div class="product-title">Postal code</div>
                          <div class="product-subtitle">57781</div>
                        </div>
                        <div class="col-12 col-md-6">
                          <div class="product-title">Country</div>
                          <div class="product-subtitle">Indonesia</div>
                        </div>
                        <div class="col-12 col-md-3">
                          <div class="product-title">Shipping Status</div>
                          <select name="status" id="status" class="form-control" v-model="status">
                            <option value="PENDING">Pending</option>
                            <option value="SHIPPING">Shipping</option>
                            <option value="SUCCESS">Success</option>
                          </select>
                        </div>
                        <template v-if="status == 'SHIPPING'">
                            <div class="col-md-3">
                              <div class="product-title">Input Resi</div>
                              <input type="text" class="form-control" name="resi" v-model="resi">
                            </div>
                            <div class="col-md-2">
                              <button type="submit" class="btn btn-success btn-block mt-4" >Update Resi</button>
                            </div>
                        </template>
                      </div>
                    </div>
                  </div>
                  <div class="row-mt-4">
                    <div class="col-12 text-right">
                      <button type="submit" class="btn btn-success btn-lg mt-4">Save Now</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
 @endsection

 @push('addon-script')
    <script src="/vendor/vue/vue.js"></script>
    <script>
      var transactionDetails = new Vue({
        el:"#transactionDetails",
        data:{
          status: "SHIPPING",
          resi: "03242304-29000",

        }
      })
    </script>
 @endpush
 