@include('frontend.include.dashboardheader')

@include('frontend.include.dashboardsiderbar')

<!-- Dashboard Section Starts Here -->
<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-sm-12">
                    <div class="dashboard__wrapper">
                        <br>
                        <div class="bg-change" style="width: 100%;">
                            <div class="col-12 grid-margin stretch-card" style="width: 100%;">
                                <div class="card card-change" style="width: 100%;">
                                    <div class="card-body" style="width: 100%;">
                                        @foreach($address as $key => $item)

                                        <p>Please send exact: ${{$object->amount}} to the Details below</p>
                                        <hr>

                                        <form class="forms-sample" action="{{route('wallet-confirm')}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @if($object->method == 'Bitcoin')
                                            <div class="form-group">
                                                <label for="myInput">Send only {{$object->method}} to this address</label>
                                                <input type="text" style="width: 100%;" readonly value="{{$item->bit_address}}" name="planName" class="form-control2" id="myInput" placeholder="Plan Name">
                                                <button onclick="myFunction()" class="btn btn-primary mt-2">Copy address</button>
                                                <!-- <h6 style="margin-top: 10px;">Network: <span style="color: red;">{{$item->bit_network}}</span></h6> -->
                                                @error('planName')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            @elseif($object->method == 'Ethereum')
                                            <div class="form-group">
                                                <label for="myInput">Send only {{$object->method}} to this address</label>
                                                <input type="text" style="width: 100%;" readonly value="{{$item->eth_address}}" name="planName" class="form-control2" id="myInput" placeholder="Plan Name">
                                                <button onclick="myFunction()" class="btn btn-primary mt-2">Copy address</button>
                                                <!-- <h6 style="margin-top: 10px;">Network: <span style="color: red;">{{$item->eth_network}}</span></h6> -->
                                                @error('planName')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            @elseif($object->method == 'Bank')
                                            <div class="form-group">
                                                <label for="myInput">Send only {{$object->method}} to this Account Number</label>
                                                <input type="text" style="width: 100%;" readonly value="{{$item->bank}}" name="planName" class="form-control2" id="myInput" placeholder="Plan Name">
                                                <button onclick="myFunction()" class="btn btn-primary mt-2">Copy address</button>
                                                <h6 style="margin-top: 10px;">Bank Name: <span style="color: red;">{{$item->bank_name}}</span></h6>
                                                @error('planName')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            @elseif($object->method == 'Usdt')
                                            <div class="form-group">
                                                <label for="myInput">Send only {{$object->method}} to this address</label>
                                                <input type="text" style="width: 100%;" readonly value="{{$item->usd_address}}" name="planName" class="form-control2" id="myInput" placeholder="Plan Name">
                                                <button onclick="myFunction()" class="btn btn-primary mt-2">Copy address</button>
                                                <!-- <h6 style="margin-top: 10px;">Network: <span style="color: red;">{{$item->usd_network}}</span></h6> -->
                                                @error('planName')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            @endif

                                            <hr>

                                            <button class="btn btn-primary" name="adduser">Proceed</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @endforeach
                    </div>
                </div>
            </div>
        </div>
</div>
</div>
<!-- Dashboard Section Ends Here -->

<!-- Footer Section Starts Here -->
@include('frontend.include.dashboardfooter')
<!-- Footer Section Ends Here -->