@include('frontend.include.dashboardheader')

@include('frontend.include.dashboardsiderbar')

<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-body">
      <div class="row mt-sm-4">
        <div class="col-12 col-md-12 col-lg-4">
          <div class="card author-box">
            <div class="card-body">
              <div class="author-box-center">
                <img alt="image" src="../assets/images/profile/{{ $user->image }}" class="rounded-circle author-box-picture" />
                <br />
                <div class="clearfix"></div>
                <div class="author-box-name">
                  <a id="fullname" href="#"></a>
                </div>
                <div id="email" class="author-box-job">{{ Auth::user()->email }}</div>
                <div id="phone" class="author-box-job my-2">{{ Auth::user()->name }} {{ Auth::user()->lname }}</div>
                <div id="phone" class="author-box-job">{{ Auth::user()->phone_number }}</div>

              </div>

              <div class="text-center">
                <div class="author-box-description">
                  <span id="bio"> </span>
                </div>
                <!-- <div class="mb-2 mt-3">
                        <div class="text-small font-weight-bold">Follow Hasan On</div>
                      </div>
                      <a href="#" class="btn btn-social-icon mr-1 btn-facebook">
                        <i class="fab fa-facebook-f"></i>
                      </a>
                      <a href="#" class="btn btn-social-icon mr-1 btn-twitter">
                        <i class="fab fa-twitter"></i>
                      </a>
                      <a href="#" class="btn btn-social-icon mr-1 btn-github">
                        <i class="fab fa-github"></i>
                      </a>
                      <a href="#" class="btn btn-social-icon mr-1 btn-instagram">
                        <i class="fab fa-instagram"></i>
                      </a> -->
                <div class="w-100 d-sm-none"></div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header">
              <h4>Refferals Details</h4>
            </div>
            <div class="card-body">
              <div class="py-1">

                @foreach($utilities as $key => $item)
                <p class="clearfix">
                  <span class="float-left">
                    Refferal Link
                  </span>
                  <span id="email" class="float-right text-muted">
                    {{$item->site_link}}/register/{{Auth::user()->referral_id}}
                  </span>
                </p>
                @endforeach

                <p class="clearfix">
                  <span class="float-left">
                    Refferal Code
                  </span>
                  <span class="float-right text-muted">
                    <a>{{Auth::user()->referral_id}}</a>
                  </span>
                </p>

              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-12 col-lg-8">
          <div class="card">
            <div class="padding-20">
              <ul class="nav nav-tabs" id="myTab2" role="tablist">
                <li class="nav-item">
                  <a class="nav-link" id="profile-tab2" data-toggle="tab" href="#settings" role="tab" aria-selected="false">Edit Profile</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" id="profile-tab2" data-toggle="tab" href="#security" role="tab" aria-selected="false">Security</a>
                </li>
              </ul>

              <div class="tab-content tab-bordered" id="myTab3Content">
                <div class="tab-pane fade show active" id="settings" role="tabpanel" aria-labelledby="home-tab2">

                  <form action="{{route('update_user', $user->id)}}" method="POST" enctype="multipart/form-data" class="needs-validation">
                    @csrf
                    <div class="card-header">
                      <h4>Edit Profile</h4>
                    </div>
                    <div class="card-body">
                      <div class="row">

                        <div class="form-group col-md-6 col-12">
                          <label>First Name</label>
                          <input id="first-name" name="name" type="text" class="form-control" value="{{ $user->name }}">
                          @error('name')
                          <span class="text-danger">{{ $message }}</span>
                          @enderror
                        </div>

                        <div class="form-group col-md-6 col-12">
                          <label>Last Name</label>
                          <input id="last-name" type="text" name="lname" class="form-control" value="{{ $user->lname }}">
                          @error('lname')
                          <span class="text-danger">{{ $message }}</span>
                          @enderror
                        </div>

                      </div>

                      <div class="row">

                        <div class="form-group col-md-6 col-12">
                          <label>Email</label>
                          <input type="email" id="email" name="email" class="form-control" value="{{ $user->email }}">
                          @error('email')
                          <span class="text-danger">{{ $message }}</span>
                          @enderror
                        </div>

                        <div class="form-group col-md-6 col-12">
                          <label>Phone</label>
                          <input id="phone-edit" type="tel" name="phone_number" class="form-control" value="{{ $user->phone_number }}">
                          @error('phone_number')
                          <span class="text-danger">{{ $message }}</span>
                          @enderror
                        </div>

                      </div>

                      <div class="row">

                        <img src="../assets/images/profile/{{ $user->image }}" alt="{{ $user->name }} image" style="height:120px; width:120px; object-fit:cover; border-radius:100%;">

                        <div class="form-group col-12">
                          <label>Profile Picture</label>
                          <input type="file" class="form-control" name="image">
                        </div>
                      </div>

                    </div>
                    <div class="card-footer text-right">
                      <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                  </form>

                </div>

                <!-- <div class="tab-pane fade show active" id="wallets" role="tabpanel" aria-labelledby="home-tab2">
                  <form id="account-settings-form" method="post" class="needs-validation">
                    <div class="card-header">
                      <h4>Edit Wallets</h4>
                    </div>
                    <div class="card-body">
                      <div class="row">
                        <div class="form-group col-md-12 col-12">
                          <label>BTC</label>
                          <input id="btc_user" type="text" class="form-control">
                        </div>
                      </div>

                      <div class="row">
                        <div class="form-group col-md-12 col-12">
                          <label>USDT</label>
                          <input id="eth_user" type="text" class="form-control">
                        </div>
                      </div>

                      <div class="row">
                        <div class="form-group col-md-12 col-12">
                          <label>ETH</label>
                          <input id="usdt_user" type="text" class="form-control">
                        </div>
                      </div>

                    </div>
                    <div class="card-footer text-right">
                      <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                  </form>

                </div> -->

                <div class="tab-pane fade" id="security" role="tabpanel" aria-labelledby="profile-tab2">

                  <form action="{{route('update_pass', $user->id)}}" method="POST" enctype="multipart/form-data" class="needs-validation">

                    @csrf

                    <div class="card-header">
                      <h4>Security settings</h4>
                    </div>
                    <div class="card-body">
                      <div class="row">

                        <div class="form-group col-12">
                          <label>Current Password</label>
                          <input id="current-password" type="password" class="form-control" value="{{ old('old_password') }}" name="old_password">
                          @error('old_password')
                          <span class="text-danger">{{ $message }}</span>
                          @enderror
                        </div>

                        <div class="form-group col-md-6 col-12">
                          <label>New Password</label>
                          <input id="current-password" type="password" class="form-control" name="password" value="{{ old('password') }}">
                          @error('password')
                          <span class="text-danger">{{ $message }}</span>
                          @enderror
                        </div>

                        <div class="form-group col-md-6 col-12">
                          <label>Confirm Password</label>
                          <input id="current-password" type="password" class="form-control" name="confirm_password" value="{{ old('confirm_password') }}">
                          @error('confirm_password')
                          <span class="text-danger">{{ $message }}</span>
                          @enderror
                        </div>

                      </div>


                    </div>
                    <div class="card-footer text-right">
                      <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                  </form>
                </div>

              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="col-md-12 col-lg-6 col-xl-12">
    <div class="card">
      <div class="card-header">
        <h4>Refferals: ({{$number}})</h4>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table id="recent_investment" class="table table-hover mb-0">
            <thead>
              <tr>
                <th>S/N</th>
                <th>Name</th>
                <th>Email</th>
                <th>Date</th>
              </tr>
            </thead>
            <tbody>
              @foreach($data as $key => $datas)

              <tr>
                <td> {{$key + 1}} </td>

                <td> {{$datas->name}} {{$datas->lname}}</td>

                <td>{{$datas->email}}</td>


                <td>{{$datas->created_at->format('jS F Y')}}</td>

              </tr>

              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>


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