@extends('../layout/dashboard_layout')


@section('title', 'Customers')

@section('pgname', 'Customers')
@section('pgname1', 'Customers')

@section('pgsection')
    <section class="section">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <div class="mt-3 d-flex justify-content-between align-items-center">
                        <div class="col-10">
                            <h5 class="card-title">View Customers</h5>
                        </div>
                        <div class="col-2">
                            <a href="{{ route('customers.create') }}" class="btn btn-primary btn-sm">New Customer</a>
                        </div>
                    </div>

                    <!-- Table with stripped rows -->
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Customer Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Total Purchases</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>RGB Mouse</td>
                                <td>Mouse</td>
                                <td>Dell</td>
                                <td>Dell Exlisive store</td>
                                <td>
                                    <button type="button" class="btn btn-primary btn-sm"><i
                                            class="bi bi-pencil-square"></i></button>
                                    <button type="button" class="btn btn-danger btn-sm"><i
                                            class="bi bi-trash"></i></button>
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
