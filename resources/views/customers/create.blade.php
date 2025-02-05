@extends('../layout/dashboard_layout')

@section('title', 'Customer')
@section('pgname', 'Add Customer')
@section('pgname1', 'Customers / Add Customer')

@section('pgsection')
    <section class="section">
        <div class="row">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Add New Customer</h5>
                    <!-- General Form Elements -->
                    <form class="row">
                        <!-- Left Column -->
                        <div class="col-12 col-md-6 mb-3">
                            <label for="customerName" class="form-label">Customer Name</label>
                            <input type="text" class="form-control" id="customerName" required>
                        </div>
                    
                        <div class="col-12 col-md-6 mb-3">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="text" class="form-control" id="phone">
                        </div>
                    
                        <div class="col-12 col-md-6 mb-3">
                            <label for="address" class="form-label">Address</label>
                            <textarea class="form-control" id="address" rows="3"></textarea>
                        </div>
                        <div class="col-12 col-md-6 mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email">
                        </div>
                    
                    
                        <!-- Submit Button -->
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-sm">Add Customer</button>
                        </div>
                    </form>
                    
                    
                    
                    <!-- End General Form Elements -->
                </div>
            </div>
        </div>

        </div>
    </section>
@endsection
