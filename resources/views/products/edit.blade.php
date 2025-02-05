@extends('../layout/dashboard_layout')

@section('title', 'Add Products')
@section('pgname', 'Edit Product')
@section('pgname1', 'Products / Edit Product')

@section('pgsection')
    <section class="section">
        <div class="row">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Edit Product</h5>
                    <!-- General Form Elements -->
                    <form class="row">
                        <!-- Left Column -->
                        <div class="col-12 col-md-6 mb-3">
                            <label for="productName" class="form-label">Product Name</label>
                            <input type="text" class="form-control" id="productName" required>
                        </div>
                    
                        <div class="col-12 col-md-6 mb-3">
                            <label for="category" class="form-label">Category</label>
                            <select class="form-select" id="category" required>
                                <option value="">Select Category</option>
                                <!-- Categories from database go here -->
                            </select>
                        </div>
                    
                        <div class="col-12 col-md-6 mb-3">
                            <label for="brand" class="form-label">Brand</label>
                            <input type="text" class="form-control" id="brand">
                        </div>
                    
                        <div class="col-12 col-md-6 mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="number" class="form-control" id="price" step="0.01" required>
                        </div>
                    
                        <!-- Right Column -->
                        <div class="col-12 col-md-6 mb-3">
                            <label for="stockQuantity" class="form-label">Stock Quantity</label>
                            <input type="number" class="form-control" id="stockQuantity" required>
                        </div>
                    
                        <div class="col-12 col-md-6 mb-3">
                            <label for="supplier" class="form-label">Supplier</label>
                            <select class="form-select" id="supplier">
                                <option value="">Select Supplier</option>
                                <!-- Suppliers from database go here -->
                            </select>
                        </div>
                    
                        <div class="col-12 mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="description" rows="3"></textarea>
                        </div>
                    
                        <!-- Submit Button -->
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-sm">Update</button>
                        </div>
                    </form>
                    
                    
                    <!-- End General Form Elements -->
                </div>
            </div>
        </div>

        </div>
    </section>
@endsection
