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
                        <h4 class="card-title">Active Investments: ({{$invest_num}})</h4>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th> S/N </th>

                                        <th> Invest </th>
                                        <th> Day </th>
                                        <th> Daily Income </th>
                                        <th> Investor </th>
                                        <th> Plan Name </th>
                                        <th> Capital </th>
                                        <th> Profit </th>
                                        <th> Daily Payout </th>
                                        <th> Total </th>
                                        <!-- <th> Min </th>
                                        <th> Max </th>
                                        <th> RIO </th> -->
                                        <th> Duration </th>
                                        <th> Status </th>
                                        <th> Prove </th>
                                        <th> Method </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data as $key => $plan)
                                    <tr>
                                        <td> {{$key + 1}} </td>

                                        <td> <a href="{{route('make_investment', $plan->id)}}" class="badge badge-outline-success">Invest</a> </td>
                                        <td> day{{$plan->day_num}} </td>
                                        <td> $@convert($plan->daily_income) </td>

                                        <?php

                                        $user = \App\Models\User::findorfail($plan->investor);

                                        ?>


                                        <td> {{$user->name}} </td>
                                        <td> {{$plan->planName}} </td>
                                        <td> $@convert($plan->amount) </td>
                                        <td> $@convert($plan->profit) </td>
                                        <td> $@convert($plan->daily_percent) </td>
                                        <td> $@convert($plan->total) </td>
                                        <!-- <td> $@convert($plan->min) </td>
                                        <td> $@convert($plan->max) </td>
                                        <td> {{$plan->RIO}}% </td> -->
                                        <td> {{$plan->duration}}days</td>
                                        

                                        <td>
                                            @if($plan->status == 0)
                                            <a href="{{route('change-pending', $plan->id)}}" class="badge badge-outline-warning">Pending</a>
                                            @elseif($plan->status == 2)
                                            <a href="{{route('change-pending', $plan->id)}}" class="badge badge-outline-warning">Done</a>
                                            @else
                                            <a href="{{route('change-done', $plan->id)}}" class="badge badge-outline-success">Active</a>
                                            @endif

                                        </td>

                                        @if($plan->prove_img)
                                        <td><a href="{{route('view_prove', $plan->id)}}"><img style="height: 100px; width:100px; border-radius:0px; object-fit:cover;" src="../backend/uploads/{{$plan->prove_img}}" alt="{{$plan->planName}}" /></a></td>
                                        @else
                                        <td class="text-danger">No Prove Yet</td>
                                        @endif
                                        <td>{{$plan->method}}</td>
                                        <td>
                                            <!-- <a href="{{route('edit_plan', $plan->id)}}" class="badge badge-outline-primary">Edit</a> -->

                                            <!-- <a href="{{route('delete_investment', $plan->id)}}" onclick="confirmation(event)" class="badge badge-outline-danger">Delete</a> -->
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