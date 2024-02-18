@include('frontend.include.dashboardheader')

@include('frontend.include.dashboardsiderbar')

<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-body">
      <div class="row">

        @foreach($plans as $key => $plan)

        <div class="col-12 col-md-4 col-lg-4">
          <div class="pricing">
            <div class="pricing-title">
            {{$plan->name}}
            </div>
            <div class="pricing-padding">
              <div class="pricing-price">
                <div>${{$plan->min}}</div>
                <div>Minimum</div>
              </div>
              <div class="pricing-details">
                <div class="pricing-item">
                  <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                  <div class="pricing-item-label">Trade up to ${{$plan->max}}</div>
                </div>
                <div class="pricing-item">
                  <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                  <div class="pricing-item-label">Earn {{$plan->RIO}}% ROI</div>
                </div>
                <div class="pricing-item">
                  <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                  <div class="pricing-item-label">Trade {{$plan->duration}} Days</div>
                </div>
                <div class="pricing-item">
                  <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                  <div class="pricing-item-label">{{$plan->payout}}</div>
                </div>
                <div class="pricing-item">
                  <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                  <div class="pricing-item-label">Total {{$plan->RIO * $plan->duration}}% + Capital</div>
                </div>
                <div class="pricing-item">
                  <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                  <div class="pricing-item-label">Live Support</div>
                </div>
              </div>
            </div>
            <div class="pricing-cta">
              <a href="{{route('invest-now', $plan->id)}}">Invest <i class="fa fa-arrow-right"></i></a>
            </div>
          </div>
        </div>

        @endforeach

        <!-- <div class="col-12 col-md-4 col-lg-4">
          <div class="pricing pricing-highlight">
            <div class="pricing-title">
              Gold Plan
            </div>
            <div class="pricing-padding">
              <div class="pricing-price">
                <div>$3,000</div>
                <div>Minimum</div>
              </div>
              <div class="pricing-details">
                <div class="pricing-item">
                  <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                  <div class="pricing-item-label">Trade up to $50,000</div>
                </div>
                <div class="pricing-item">
                  <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                  <div class="pricing-item-label">Earn 30% ROI</div>
                </div>
                <div class="pricing-item">
                  <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                  <div class="pricing-item-label">Trade 5 Days</div>
                </div>
                <div class="pricing-item">
                  <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                  <div class="pricing-item-label">Instant Payout</div>
                </div>
                <div class="pricing-item">
                  <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                  <div class="pricing-item-label">24/7 Support</div>
                </div>
              </div>
            </div>
            <div class="pricing-cta">
              <a href="fund?plan=gold">Invest <i class="fas fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-4 col-lg-4">
          <div class="pricing">
            <div class="pricing-title">
              Elite Plan
            </div>
            <div class="pricing-padding">
              <div class="pricing-price">
                <div>$50,000</div>
                <div>Minimum</div>
              </div>
              <div class="pricing-details">
                <div class="pricing-item">
                  <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                  <div class="pricing-item-label">Trade up to Unlimited</div>
                </div>
                <div class="pricing-item">
                  <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                  <div class="pricing-item-label">Earn 50% ROI</div>
                </div>
                <div class="pricing-item">
                  <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                  <div class="pricing-item-label">Trade 4 Days</div>
                </div>
                <div class="pricing-item">
                  <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                  <div class="pricing-item-label">Instant Payout</div>
                </div>
                <div class="pricing-item">
                  <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                  <div class="pricing-item-label">24/7 Support</div>
                </div>
              </div>
            </div>
            <div class="pricing-cta">
              <a href="fund?plan=elite">Invest <i class="fas fa-arrow-right"></i></a>
            </div>
          </div>
        </div> -->

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