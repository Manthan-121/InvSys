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
            <div class="col-12" id="catshow">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Categories List</h5>
                        {{-- <input type="text" id="customSearch" class="form-control mb-3" placeholder="Search..."> --}}

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
                                        <td class="d-flex justify-content-center">

                                            <button type="button" class="btn btn-primary btn-sm edit-category"
                                                data-id="{{ $category->category_id }}"
                                                data-name="{{ $category->category_name }}"
                                                data-description="{{ $category->description }}">
                                                <i class="bi bi-pencil-square"></i>
                                            </button>


                                            <form id="deleteCategoryForm">
                                                @csrf
                                                @method('DELETE')
                                                <button type="button" class="btn btn-danger btn-sm deleteCategory"
                                                    data-id="{{ $category->category_id }}">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                            </form>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>


                    </div>
                </div>
            </div>

        </div>
    </section>


    {{-- edit popup models --}}
    <div class="modal fade" id="editCategoryModal" tabindex="-1" aria-labelledby="editCategoryModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editCategoryModalLabel">Edit Category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="editCategoryForm">
                        @csrf
                        @method('PUT')
                        <input type="hidden" id="editCategoryId">
                        <input type="hidden" id="editupdatedat">

                        <div class="mb-3">
                            <label for="editCategoryName" class="form-label">Category Name</label>
                            <input type="text" class="form-control" id="editCategoryName" name="category_name" required>
                        </div>

                        <div class="mb-3">
                            <label for="editDescription" class="form-label">Description</label>
                            <textarea class="form-control" id="editDescription" name="description" rows="2"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary btn-sm">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

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
    <div id="upd_alert" class="position-fixed top-3 end-0 p-3" style="z-index: 1050; display: none;">
        <div id="" class="alert alert-primary alert-dismissible fade show shadow-lg rounded-3 p-3" role="alert"
            style="min-width: 280px; max-width: 400px;">
            Category updated successfully!
        </div>
    </div>

    <div id="del_alert" class="position-fixed top-3 end-0 p-3" style="z-index: 1050; display: none;">
        <div id="" class="alert alert-danger alert-dismissible fade show shadow-lg rounded-3 p-3"
            role="alert" style="min-width: 280px; max-width: 400px;">
            Category deleted successfully!
        </div>
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
        $(document).ready(function() {
            // Open Edit Modal and Populate Data
            $('.edit-category').click(function() {
                let id = $(this).data('id');
                let name = $(this).data('name');
                let description = $(this).data('description');


                $('#editCategoryId').val(id);
                $('#editCategoryName').val(name);
                $('#editDescription').val(description);
                $('#editCategoryModal').modal('show');
            });


            // update alert message
            if (localStorage.getItem("category_updated") === "true") {
                // Show the alert after 1 second (to ensure the page loads properly)
                setTimeout(function() {
                    $("#upd_alert").fadeIn().delay(3000).fadeOut();
                }, 1000);

                // Remove the flag from localStorage to avoid showing the alert again on future reloads
                localStorage.removeItem("category_updated");
            }

            // Handle Update Form Submission
            $('#editCategoryForm').submit(function(e) {
                e.preventDefault();
                let id = $('#editCategoryId').val();
                let formData = {
                    _token: '{{ csrf_token() }}',
                    // _method: 'PUT',
                    category_name: $('#editCategoryName').val(),
                    description: $('#editDescription').val(),
                };

                // console.log(id);

                $.ajax({
                    url: `/categories/${id}`,
                    type: 'PUT',
                    data: formData,
                    success: function(response) {
                        // alert(response.message);
                        // $('#editCategoryModal').modal('hide');
                        // $("#upd_alert").fadeIn().delay(3000).fadeOut();
                        localStorage.setItem("category_updated", "true");
                        location.reload(); // Reload page to update the table
                    },
                    error: function(xhr) {
                        // consolle.log(id);
                        alert('Error updating category.');
                    }
                });
            });

            $(document).on("click", ".deleteCategory", function() {
                let categoryId = $(this).data("id");

                if (confirm("Are you sure you want to delete this category?")) {
                    $.ajax({
                        url: "/categories/" + categoryId, // Ensure the correct route
                        type: "POST",
                        data: {
                            _token: '{{ csrf_token() }}',
                            _method: "DELETE",
                        },
                        success: function(response) {
                            // alert("Category deleted successfully!");
                            localStorage.setItem("category_deleted", "true");
                            location.reload(); // Reload after deletion
                        },
                        error: function(xhr) {
                            console.error(xhr.responseText);
                            alert("Error deleting category!");
                        },
                    });
                }
            });
            // delete alert message
            if (localStorage.getItem("category_deleted") === "true") {
                // Show the alert after 1 second (to ensure the page loads properly)
                setTimeout(function() {
                    $("#del_alert").fadeIn().delay(3000).fadeOut();
                }, 1000);

                // Remove the flag from localStorage to avoid showing the alert again on future reloads
                localStorage.removeItem("category_deleted");
            }
        });
    </script>

@endsection
