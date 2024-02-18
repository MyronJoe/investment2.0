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

                                    <p>Kindly Upload Proof Of Payment</p>
                                    <hr>

                                    <form class="forms-sample" action="{{route('prove-confirm')}}" method="POST" enctype="multipart/form-data">
                                        @csrf

                                        <div class="form-group" style="display: none;">
                                            <label for="myInput">Token</label>
                                            <input type="text" readonly value="{{$object->token}}" name="token" class="form-control2" id="myInput" placeholder="Plan Name">
                                            @error('planName')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="myInput">Amount</label>
                                            <input type="text" readonly style="width: 100%;" value="${{$object->amount}}" name="planName" class="form-control2" id="myInput" placeholder="Plan Name">
                                            @error('planName')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-sm-12">
                                                <label for="exampleInputMin3" style="display: block;">Upload Investment proof</label>
                                                <input type="file" required class="form-control2" value="{{old('image')}}" name="image" class="" id="exampleInputMin3" placeholder="Min">
                                                @error('image')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                        </div>

                                        <hr>

                                        <button class="btn btn-primary" name="adduser">Proceed</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Dashboard Section Ends Here -->

@include('frontend.include.dashboardfooter')