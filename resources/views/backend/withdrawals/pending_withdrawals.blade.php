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
                        <h4 class="card-title">Pending Withdrawals: ({{$invest_num}})</h4>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th> S/N </th>
                                        <th> Investor </th>
                                        <th> Amount </th>
                                        <th> Wallet Type </th>
                                        <th> Address </th>
                                        <th> Status </th>
                                        <th> Action </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data as $key => $plan)
                                    <tr>
                                        <td> {{$key + 1}} </td>

                                        <?php
                                        $user = \App\Models\User::findorfail($plan->user_id);
                                        ?>
                                        <td> {{$user->name}} </td>

                                        <td> $@convert($plan->amount) </td>

                                        <td> {{$plan->currency}} </td>

                                        <td> {{$plan->address}} </td>

                                        <td>
                                            @if($plan->status == 0)
                                            <a href="{{route('withdraw-pending', $plan->id)}}" class="badge badge-outline-warning">Pending</a>
                                            @else
                                            <a href="{{route('withdraw-done', $plan->id)}}" class="badge badge-outline-success">Done</a>
                                            @endif
                                        </td>

                                        <td>
                                            <!-- <a href="{{route('edit_plan', $plan->id)}}" class="badge badge-outline-primary">Edit</a> -->

                                            <a href="{{route('delete_withdrawal', $plan->id)}}" onclick="confirmation(event)" class="badge badge-outline-danger">Delete</a>
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

        <div class="mt-3 text-center">
            {{ $data->onEachSide(2)->links('pagination::bootstrap-4') }}
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