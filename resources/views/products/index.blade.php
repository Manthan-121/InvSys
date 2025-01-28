@extends('../layout/dashboard_layout')


@section('title', 'Products')

@section('pgname','Products')

@section('pgsection')
<section class="section">
    <div class="row">
        <div class="card">
          <div class="card-body">
            <div class="mt-3 d-flex justify-content-between align-items-center">
              <div class="col-10">
                <h5 class="card-title">View Products</h5>
              </div>
              <div class="col-2">
                <button type="button" class="btn btn-primary btn-sm">New Product</button>
              </div>
            </div>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Product Name</th>
                    <th>Category</th>
                    <th>Brand</th>
                    <th>Price</th>
                    <th>Stock Quantity</th>
                    <th>Supplier</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>RGB Mouse</td>
                    <td>Mouse</td>
                    <td>Dell</td>
                    <td>350</td>
                    <td>20</td>
                    <td>Dell Exlisive store</td>
                    <td>
                      <button type="button" class="btn btn-primary btn-sm "><i class="bi bi-star"></i></button>
                    </td>
                  </tr>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->
            </daaaaiv>
          </div>
        </div>
    </div>
  </section>

  
@endsection