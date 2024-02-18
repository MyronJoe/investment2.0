@include('backend.includes.head')

@include('backend.includes.sidebar')

@include('backend.includes.header')

<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper row">

        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Update Site Settings</h4>
                    <!-- <p class="card-description"> Basic form elements </p> -->
                    @foreach($utilities as $key => $item)
                    <form class="forms-sample" action="{{route('update_settings', $item->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <!-- <div class="form-group">
                            <label for="exampleInputName1">Wallet Address</label>
                            <input type="text" name="wallet_address" class="form-control text-light" id="exampleInputemail1" placeholder="Email" value="{{ $item->wallet_address }}">

                            @error('wallet_address')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div> -->

                        <div class="form-group">
                            <label for="exampleInputName1">Site Link</label>
                            <input type="text" name="site_link" class="form-control text-light" id="exampleInputemail1" placeholder="Email" value="{{ $item->site_link }}">

                            @error('site_link')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputName1">Email</label>
                            <input type="email" name="email" class="form-control text-light" id="exampleInputemail1" placeholder="Email" value="{{ $item->email }}">

                            @error('email')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail3">Address</label>
                            <input type="text" name="address" class="form-control text-light" id="exampleInputaddress3" placeholder="Address" value="{{ $item->address }}">

                            @error('address')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>


                        <div class="form-group">
                            <label for="exampleInputCity1">Phone Number</label>
                            <input type="text" name="phone" class="form-control text-light" id="exampleInputphone1" placeholder="Phone Number" value="{{ $item->phone }}">

                            @error('phone')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <img src="../frontend/assets/uploads/{{$item->whitelogo}}" alt="whiteLogo" width="100px">
                            <br>
                            <label for="image" class="mt-1">White Logo</label>
                            <div class="input-group col-xs-12">
                                <input type="file" class="form-control text-light file-upload-info" placeholder="Upload White Logo" name="whitelogo">
                            </div>

                            @error('whitelogo')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <img src="../frontend/assets/uploads/{{$item->darkLogo}}" alt="blackLogo" width="100px">
                            <br>
                            <label for="image">Dark Logo</label>
                            <div class="input-group col-xs-12">
                                <input type="file" class="form-control text-light file-upload-info" placeholder="Upload Dark Logo" name="darklogo" id="image">
                            </div>

                            @error('darklogo')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <img src="../frontend/assets/uploads/{{$item->faveicon}}" alt="faveicon" width="100px">
                            <br>
                            <label for="image">Fave Icon</label>
                            <div class="input-group col-xs-12">
                                <input type="file" class="form-control text-light file-upload-info" placeholder="Upload Fave Icon" name="faveicon" id="image">
                            </div>

                            @error('faveicon')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>


                        <h4 class="card-title">SEO Section</h4>

                        <div class="form-group">
                            <label for="exampleInputCity1">Page Title</label>
                            <input type="text" name="title" class="form-control text-light" id="exampleInputtitle1" placeholder="Page Title" value="{{ $item->title }}">

                            @error('title')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputCity1">Site Name</label>
                            <input type="text" name="site_name" class="form-control text-light" id="exampleInputsite_name1" placeholder="Site Name" value="{{ $item->site_name }}">

                            @error('site_name')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>



                        <div class="form-group">
                            <label for="exampleTextarea1">Page Description</label>
                            <textarea class="form-control text-light" name="description" id="exampleTextarea1" rows="4">{{$item->description}}</textarea>
                        </div>


                        <br>
                        <button type="submit" class="btn btn-primary mr-2">Update Settings</button>
                        <!-- <button class="btn btn-dark">Cancel</button> -->
                    </form>
                    @endforeach
                </div>
            </div>
        </div>



    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    @include('Backend.includes.footertop')
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