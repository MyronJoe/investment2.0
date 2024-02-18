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
                    <br>
                    <hr>
                    @foreach($utilities as $key => $item)
                    <form class="forms-sample" >
                        <div class="form-group">
                            <label for="myInput">Referral Link</label>
                            <input type="text" readonly value="{{$item->site_link}}/register/{{Auth::user()->referral_id}}" name="planName" class="form-control2" id="myInput" placeholder="Plan Name">
                            <button onclick="myFunction()">Copy Link</button>

                        </div>
                    </form>
                    @endforeach
                    <hr>
                    <div class="d-flex flex-wrap align-items-center justify-content-between mt-5 mb-4">
                        <h3 class="title">Refferals: ({{$number}})</h3>
                    </div>
                    <div style="overflow: auto;">
                        <table class="table transection__table dashboard__table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $key => $datas)
                                <tr style="border-bottom: 1px solid gold;">

                                    <td data-label="Name:">
                                        <div class="user d-flex flex-wrap align-items-center">
                                            <div class="thumb">
                                                <img src="assets/images/profile/{{$datas->image}}" alt="{{$datas->name}}">
                                            </div>
                                            <p class="name">{{$datas->name}}</p>
                                        </div>
                                    </td>

                                    <td data-label="Email: "><span class="amount">{{$datas->email}}</span></td>

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
<script>
    function myFunction() {
        // Get the text field
        var copyText = document.getElementById("myInput");

        // Select the text field
        copyText.select();
        copyText.setSelectionRange(0, 99999); // For mobile devices

        // Copy the text inside the text field
        navigator.clipboard.writeText(copyText.value);

        // Alert the copied text
        alert("Copied the text: " + copyText.value);
    }
</script>

@include('frontend.include.footerlink')