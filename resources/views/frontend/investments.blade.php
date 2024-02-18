<!-- links -->
@include('frontend.include.links')
<!-- /links -->

<!-- HEADER -->
@include('frontend.include.header')
<!-- /HEADER -->

<!-- Dashboard Section Starts Here -->
<div class="dashbaord-section padding-top padding-bottom">
    <br>
    <div class="container">
        <div class="row">
            @include('frontend.include.dashboardsiderbar')
            <div class="col-lg-8 col-xl-8 col-xxl-9">
                <div class="dashboard__wrapper">
                    @include('frontend.include.dashboardheader')

                    <div class="d-flex flex-wrap align-items-center justify-content-between mt-5 mb-4">
                        <h3 class="title">Investments</h3>
                        <!-- <select class="nice-select btn--round">
                            <option>Last Month</option>
                            <option>Last 3 Months</option>
                            <option>Last 6 Months</option>
                        </select> -->
                    </div>
                    <table class="table transection__table dashboard__table">
                        <thead>
                            <tr>
                                <th>Plan Name</th>
                                <th>Amount</th>
                                <th>Max</th>
                                <th>Min</th>
                                <th>Roi</th>
                                <th>Duration</th>
                                <th>Total</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $key => $datas)
                            <tr style="border-bottom: 1px solid gold;">
                                <td data-label="Plan Name">
                                    <div class="user d-flex flex-wrap align-items-center">
                                        <!-- <div class="thumb">
                                            <img src="assets/images/dashboard/item1.png" alt="dashboard">
                                        </div> -->
                                        <p class="name">{{$datas->planName}}</p>
                                    </div>
                                </td>
                                <td data-label="Amount"><span class="amount">$@convert($datas->amount)</span></td>
                                <td data-label="Min"><span class="amount">$@convert($datas->min)</span></td>
                                <td data-label="Max"><span class="wallet">$@convert($datas->max)</span></td>
                                <td data-label="ROI"><span class="date">{{$datas->RIO}}%</span></td>
                                <td data-label="Duration"><span class="currency">{{$datas->duration}}days</span></td>
                                <td data-label="Total"><span class="currency">{{$datas->RIO * $datas->duration}}% + Capital</span></td>
                                @if($datas->status == 0)
                                <td data-label="Status">
                                    <span class="currency" style="color: red">Pending</span>

                                    <a href="{{route('pending', $datas->id)}}" style="border:1px solid red; padding:0px 12px;">Continue</a>
                                </td>
                                @elseif($datas->status == 2)
                                <td data-label="Status"><span class="currency" style="color: green">Done</span></td>
                                @else
                                <td data-label="Status"><span class="currency" style="color: green">Active</span></td>
                                @endif
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Dashboard Section Ends Here -->

<!-- Footer Section Starts Here -->
@include('frontend.include.footer')
<!-- Footer Section Ends Here -->
