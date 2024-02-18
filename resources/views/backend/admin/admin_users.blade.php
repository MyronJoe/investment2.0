@include('backend.includes.head')

@include('backend.includes.sidebar')

@include('backend.includes.header')

<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">

        <div class="row ">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <div style="display: flex; align-items:center; justify-content:space-between;">
                            <h4 class="card-title">Admin: ({{$num}})</h4>

                            <a href="{{route('create_admin')}}" class="btn btn-outline-warning">Create Admin</a>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th> S/N </th>
                                        <th> Name </th>
                                        <th> Email </th>
                                        <th> Phone </th>
                                        <th> Action </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data as $key => $plan)
                                    <tr>
                                        <td> {{$key + 1}} </td>
                                        <td> {{$plan->name}} </td>
                                        <td> {{$plan->email}} </td>
                                        <td> {{$plan->phone_number}} </td>

                                        <td>
                                            <a href="{{route('edit_user', $plan->id)}}" class="badge badge-outline-primary">Edit</a>

                                            <a href="{{route('delete_admin', $plan->id)}}" class="badge badge-outline-danger" onclick="confirmation(event)">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    
    @include('backend.includes.footertop')
    <!-- partial -->
</div>
<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->

<script>
    function confirmation(e) {
        e.preventDefault();
        var link = e.currentTarget.getAttribute('href');
        Swal.fire({
            title: 'Are you sure?',
            text: "To Deleted This Data!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            cancelButtonText: 'No',
            confirmButtonText: 'Yes, Delete!'
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                    'Deleted!',
                    'Data Deleted Successfully.',
                    'success'
                )
                window.location.href = link
            }
        });

    }
</script>


@include('backend.includes.footer')