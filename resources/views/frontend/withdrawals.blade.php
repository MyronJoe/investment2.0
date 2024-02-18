<!-- links -->
@include('frontend.include.links')
<!-- /links -->

<!-- HEADER -->
@include('frontend.include.header')
<!-- /HEADER -->

<!-- Dashboard Section Starts Here -->
<div class="dashbaord-section padding-top padding-bottom" style="overflow: hidden;">
    <br>
    <div class="container">
        <div class="row">
            @include('frontend.include.dashboardsiderbar')
            <div class="col-lg-8 col-xl-8 col-xxl-9">
                <div class="dashboard__wrapper">
                    @include('frontend.include.dashboardheader')

                    <div class="d-flex flex-wrap align-items-center justify-content-between mt-5 mb-4">
                        <h3 class="title">Withdrawals</h3>
                    </div>
                    <div style="overflow: auto;">
                        <table class="table transection__table dashboard__table">
                            <thead>
                                <tr>
                                    <th>Amount</th>
                                    <th>Wallet Address</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $key => $datas)
                                <tr style="border-bottom: 1px solid gold;">
                                    <td data-label="Amount:"><span class="amount">$@convert($datas->amount)</span></td>

                                    <td data-label="Wallet: "> <span class="amount" style="margin-left:10px">   {{$datas->address}}</span></td>

                                    @if($datas->status == 0)
                                    <td data-label="Status:">
                                        <span class="currency" style="color: red">Processing</span>
                                    </td>
                                    @else
                                    <td data-label="Status:"><span class="currency" style="color: green">Done</span></td>
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
</div>
<!-- Dashboard Section Ends Here -->

<!-- Footer Section Starts Here -->
@include('frontend.include.footer')
<!-- Footer Section Ends Here -->

@include('frontend.include.footerlink')