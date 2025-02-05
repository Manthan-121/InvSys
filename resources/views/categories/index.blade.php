@extends('../layout/dashboard_layout')

@section('title', 'Manage Categories')
@section('pgname', 'Manage Categories')
@section('pgname1', 'Categories')

@section('pgsection')
    <section class="section">

        <div class="row">
            <!-- Card for Create & Update Form -->
            <div class="col-12">
                <div class="card">

                    <div class="card-body">

                        <h5 class="card-title">Category Form</h5>

                        <form id="categoryForm" method="POST" action="{{ route('categories.store') }}">
                            @csrf
                            <input type="hidden" id="categoryId" name="categoryId">

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="categoryName" class="form-label">Category Name</label>
                                    <input type="text" class="form-control" id="categoryName" name="category_name"
                                        required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea class="form-control" id="description" name="description" rows="2"></textarea>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary btn-sm">Save</button>
                            {{-- <button type="reset" class="btn btn-secondary btn-sm">Reset</button> --}}
                        </form>
                    </div>
                </div>
            </div>

            <!-- Card for Category Table -->
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Categories List</h5>

                        <table class="table datatable" id="myTable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Category Name</th>
                                    <th>Description</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $key => $category)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $category->category_name }}</td>
                                        <td>{{ $category->description }}</td>
                                        <td>
                                            <button type="button" class="btn btn-primary btn-sm"><i
                                                    class="bi bi-pencil-square"></i></button>
                                            <button type="button" class="btn btn-danger btn-sm"><i
                                                    class="bi bi-trash"></i></button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>

        </div>
    </section>


@endsection

@section('pgalertmsg')
    <!-- Alert Box (Floating Top-Right) -->
    <div id="alertBox" class="position-fixed top-3 end-0 p-3" style="z-index: 1050; display: none;">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show shadow-lg rounded-3 p-3" role="alert"
                style="min-width: 280px; max-width: 400px;">
                {{ session('success') }}
            </div>
        @endif
    </div>

    <!-- Auto-Dismiss Alert (JS) -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let alertBox = document.getElementById("alertBox");

            if (alertBox.children.length > 0) {
                alertBox.style.display = "block";
                setTimeout(() => {
                    alertBox.style.opacity = "0";
                    setTimeout(() => alertBox.style.display = "none", 500);
                }, 3000);
            }
        });
    </script>
@endsection

@section('pgscripts')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const table = new simpleDatatables.DataTable("#myTable");

            // Attach search event manually
            document.querySelector("input[type='search']").addEventListener("input", function(e) {
                table.search(e.target.value);
            });
        });
    </script>
@endsection
