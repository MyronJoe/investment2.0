

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
                            <h4 class="card-title">All User Accouts</h4>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th> S/N </th>
                                            <th> Name </th>
                                            <th> Email </th>
                                            <th> Phone </th>
                                            <th> Content </th>
                                            <th> View </th>
                                            <th> Action </th>
                                        </tr>
                                    </thead>
                                    <tbody>


                                        @foreach($message as $key => $message)
                                        <tr>
                                            <td>{{$key + 1}}</td>
                                            <td>{{$message->name}}</td>
                                            <td>{{$message->email}}</td>
                                            <td>{{$message->phone}}</td>
                                            <td>{{ Str::limit($message->content, 10) }}</td>
                                            <td>
                                                <a href="{{route('view_message', $message->id)}}" class="badge btn-warning">Details</a>
                                            </td>
                                            <td>
                                                <a href="{{route('delete-message', $message->id)}}" class="badge badge-danger" onclick="confirmation(event)">Delete</a>
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