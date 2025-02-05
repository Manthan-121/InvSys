@extends('../layout/dashboard_layout')

@section('title', 'Add Supplier')
@section('pgname', 'Add Supplier')
@section('pgname1', 'Suppliers / Add Supplier')

@section('pgsection')
    <section class="section">
        <div class="row">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Add New Supplier</h5>
                    <!-- General Form Elements -->
                    <form class="row">
                        <!-- Left Column -->
                        <div class="col-12 col-md-6 mb-3">
                            <label for="supplierName" class="form-label">Supplier Name </label>
                            <input type="text" class="form-control" id="supplierName" required>
                        </div>
                    
                        <div class="col-12 col-md-6 mb-3">
                            <label for="contactPerson" class="form-label">Contact Person</label>
                            <input type="text" class="form-control" id="contactPerson">
                        </div>
                    
                        <div class="col-12 col-md-6 mb-3">
                            <label for="phone" class="form-label">Phone </label>
                            <input type="text" class="form-control" id="phone" required>
                        </div>
                    
                        <div class="col-12 col-md-6 mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email">
                        </div>
                    
                        <div class="col-12 mb-3">
                            <label for="address" class="form-label">Address</label>
                            <textarea class="form-control" id="address" rows="3"></textarea>
                        </div>
                    
                        <!-- Submit Button -->
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-sm">Add</button>
                        </div>
                    </form>
                    
                    
                    
                    <!-- End General Form Elements -->
                </div>
            </div>
        </div>

        </div>
    </section>
@endsection
