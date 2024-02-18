@include('frontend.include.dashboardheader')

@include('frontend.include.dashboardsiderbar')

<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-body">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Invest Now</h4>
                        </div>
                        <form action="{{route('invest')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">

                                <!-- not vissible forms that sends details to DB -->
                                <div style="display: none;">
                                    <div class="form-group">
                                        <label for="exampleInputPlanName1">Plan Name</label>
                                        <input type="text" readonly value="{{$data->name}}" name="planName" class="form-control2" id="exampleInputPlanName1" placeholder="Plan Name">
                                        @error('planName')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-sm-12 col-md-6">
                                            <label for="exampleInputMin3">Minimum Amount</label>
                                            <input type="number" readonly value="{{$data->min}}" name="min" class="form-control2" id="exampleInputMin3" placeholder="Min">
                                            @error('min')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-sm-12 col-md-6">
                                            <label for="exampleInputmax3">Maximum Amount</label>
                                            <input type="number" readonly value="{{$data->max}}" name="max" class="form-control2" id="exampleInputmax3" placeholder="Max">
                                            @error('max')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-sm-12 col-md-6">
                                            <label for="exampleInputRIO3">Plan ROI</label>
                                            <input type="text" readonly value="{{$data->RIO}}" name="RIO" class="form-control2" id="exampleInputRIO3" placeholder="RIO">
                                            @error('RIO')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-sm-12 col-md-6">
                                            <label for="exampleInputduration3">Plan Duration</label>
                                            <input type="text" readonly value="{{$data->duration}}" name="duration" class="form-control2" id="exampleInputduration3" placeholder="duration">
                                            @error('duration')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputdayd1">Token</label>
                                        <input type="text" value="{{$token}}" name="token" class="form-control2" readonly id="exampleInputdayd1" placeholder="Amount">
                                        @error('token')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                </div>




                                <div class="form-group row mb-4">
                                    <label for="payment_currency1" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Select Method</label>
                                    <div class="col-sm-12 col-md-7">
                                        <select class="form-control selectric" id="payment_currency1" name="method">
                                            <option value="{{old('method')}}">{{old('method')}}</option>
                                            <option value="Bitcoin" style="color: black;">BTC</option>
                                            <option value="Ethereum" style="color: black;">ETH</option>
                                            <option value="Usdt" style="color: black;">USDT</option>
                                            <option value="Bank" style="color: black;">Bank</option>
                                        </select>

                                        @error('method')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>



                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Amount</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="number" id="amount1" class="form-control" placeholder="$" name="amount">

                                        @error('amount')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                    <div class="col-sm-12 col-md-7">
                                        <button type="submit" class="btn btn-primary" id="btn">Deposit</button>

                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <div class="settingSidebar">
        <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
        </a>
        <div class="settingSidebar-body ps-container ps-theme-default">
            <div class=" fade show active">
                <div class="setting-panel-header">Setting Panel
                </div>
                <div class="p-15 border-bottom">
                    <h6 class="font-medium m-b-10">Select Layout</h6>
                    <div class="selectgroup layout-color w-50">
                        <label class="selectgroup-item">
                            <input type="radio" name="value" value="1" class="selectgroup-input-radio select-layout" checked>
                            <span class="selectgroup-button">Light</span>
                        </label>
                        <label class="selectgroup-item">
                            <input type="radio" name="value" value="2" class="selectgroup-input-radio select-layout">
                            <span class="selectgroup-button">Dark</span>
                        </label>
                    </div>
                </div>
                <div class="p-15 border-bottom">
                    <h6 class="font-medium m-b-10">Sidebar Color</h6>
                    <div class="selectgroup selectgroup-pills sidebar-color">
                        <label class="selectgroup-item">
                            <input type="radio" name="icon-input" value="1" class="selectgroup-input select-sidebar">
                            <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip" data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
                        </label>
                        <label class="selectgroup-item">
                            <input type="radio" name="icon-input" value="2" class="selectgroup-input select-sidebar" checked>
                            <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip" data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span>
                        </label>
                    </div>
                </div>
                <div class="p-15 border-bottom">
                    <h6 class="font-medium m-b-10">Color Theme</h6>
                    <div class="theme-setting-options">
                        <ul class="choose-theme list-unstyled mb-0">
                            <li title="white" class="active">
                                <div class="white"></div>
                            </li>
                            <li title="cyan">
                                <div class="cyan"></div>
                            </li>
                            <li title="black">
                                <div class="black"></div>
                            </li>
                            <li title="purple">
                                <div class="purple"></div>
                            </li>
                            <li title="orange">
                                <div class="orange"></div>
                            </li>
                            <li title="green">
                                <div class="green"></div>
                            </li>
                            <li title="red">
                                <div class="red"></div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="p-15 border-bottom">
                    <div class="theme-setting-options">
                        <label class="m-b-0">
                            <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" id="mini_sidebar_setting">
                            <span class="custom-switch-indicator"></span>
                            <span class="control-label p-l-10">Mini Sidebar</span>
                        </label>
                    </div>
                </div>
                <div class="p-15 border-bottom">
                    <div class="theme-setting-options">
                        <label class="m-b-0">
                            <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" id="sticky_header_setting">
                            <span class="custom-switch-indicator"></span>
                            <span class="control-label p-l-10">Sticky Header</span>
                        </label>
                    </div>
                </div>
                <div class="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele">
                    <a href="#" class="btn btn-icon icon-left btn-primary btn-restore-theme">
                        <i class="fas fa-undo"></i> Restore Default
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

@include('frontend.include.dashboardfooter')