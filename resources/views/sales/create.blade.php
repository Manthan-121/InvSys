@extends('../layout/dashboard_layout')

@section('title', 'Add Sale')
@section('pgname', 'Add Sale')
@section('pgname1', 'Sales / Add Sale')

@section('pgsection')
    <section class="section">
        <div class="row">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Add New Sale</h5>
                    <!-- General Form Elements -->
                    <form class="row">
                        <!-- Customer Selection -->
                        <div class="col-12 col-md-6 mb-3">
                            <label for="customer" class="form-label">Customer</label>
                            <select class="form-select" id="customer">
                                <option value="">Walk-in Customer</option>
                                <!-- Customers from database go here -->
                            </select>
                        </div>
                    
                        <!-- Product Selection -->
                        <div class="col-12 col-md-6 mb-3">
                            <label for="product" class="form-label">Product <span class="text-danger">*</span></label>
                            <select class="form-select" id="product" required onchange="updatePrice()">
                                <option value="">Select Product</option>
                                <!-- Products from database go here -->
                            </select>
                        </div>
                    
                        <!-- Quantity Input -->
                        <div class="col-12 col-md-6 mb-3">
                            <label for="quantity" class="form-label">Quantity <span class="text-danger">*</span></label>
                            <input type="number" class="form-control" id="quantity" min="1" value="1" required oninput="calculateSubtotal()">
                        </div>
                    
                        <!-- Price (Auto-filled) -->
                        <div class="col-12 col-md-6 mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="number" class="form-control" id="price" step="0.01" required readonly>
                        </div>
                    
                        <!-- Subtotal (Auto-calculated) -->
                        <div class="col-12 col-md-6 mb-3">
                            <label for="subtotal" class="form-label">Subtotal</label>
                            <input type="number" class="form-control" id="subtotal" step="0.01" readonly>
                        </div>
                    
                        <!-- Total Amount (Auto-calculated) -->
                        <div class="col-12 col-md-6 mb-3">
                            <label for="totalAmount" class="form-label">Total Amount</label>
                            <input type="number" class="form-control" id="totalAmount" step="0.01" readonly>
                        </div>
                    
                        <!-- Payment Method -->
                        <div class="col-12 mb-3">
                            <label for="paymentMethod" class="form-label">Payment Method</label>
                            <select class="form-select" id="paymentMethod" required>
                                <option value="cash">Cash</option>
                                <option value="card">Card</option>
                                <option value="online">Online</option>
                            </select>
                        </div>
                    
                        <!-- Submit Button -->
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-sm">Complete Sale</button>
                        </div>
                    </form>
                    
                    <script>
                        function updatePrice() {
                            // Fetch the selected product's price (This should be dynamically fetched from DB)
                            let productPrice = 100; // Example price, replace with actual DB price
                            document.getElementById('price').value = productPrice;
                            calculateSubtotal();
                        }
                    
                        function calculateSubtotal() {
                            let quantity = document.getElementById('quantity').value;
                            let price = document.getElementById('price').value;
                            let subtotal = quantity * price;
                            document.getElementById('subtotal').value = subtotal;
                            document.getElementById('totalAmount').value = subtotal; // Modify if tax/discount is applied
                        }
                    </script>
                    
                    
                    
                    <!-- End General Form Elements -->
                </div>
            </div>
        </div>

        </div>
    </section>
@endsection
