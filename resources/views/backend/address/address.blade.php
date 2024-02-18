@include('backend.includes.head')

@include('backend.includes.sidebar')

@include('backend.includes.header')

<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper row">

        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Wallet Addresses</h4>
                    <!-- <p class="card-description"> Basic form elements </p> -->
                    @foreach($address as $key => $item)
                    <form class="forms-sample" action="{{route('update_address', $item->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <h4 class="card-title" style="color: red;">Bitcoin Section</h4>

                        <div class="form-group">
                            <label for="exampleInputName1">Wallet Address</label>
                            <input type="text" name="bit_address" class="form-control text-light" id="exampleInputemail1" placeholder="Wallet Address" value="{{ $item->bit_address }}">
                            @error('bit_address')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
<!-- 
                        <div class="form-group">
                            <label for="exampleInputName2">Network</label>
                            <input type="text" name="bit_network" class="form-control text-light" id="exampleInputemail2" placeholder="Network" value="{{ $item->bit_network }}">

                            @error('bit_network')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div> -->

                        <h4 class="card-title" style="color: red;">Ethereum Section</h4>

                        <div class="form-group">
                            <label for="exampleInputName3">Wallet Address</label>
                            <input type="text" name="eth_address" class="form-control text-light" id="exampleInputemail3" placeholder="Wallet Address" value="{{ $item->eth_address }}">
                            @error('eth_address')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- <div class="form-group">
                            <label for="exampleInputName4">Network</label>
                            <input type="text" name="eth_network" class="form-control text-light" id="exampleInputemail4" placeholder="Network" value="{{ $item->eth_network }}">

                            @error('eth_network')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div> -->

                        <h4 class="card-title" style="color: red;">Usdt Section</h4>

                        <div class="form-group">
                            <label for="exampleInputName5">Wallet Address</label>
                            <input type="text" name="usd_address" class="form-control text-light" id="exampleInputemail5" placeholder="Wallet Address" value="{{ $item->usd_address }}">
                            @error('usd_address')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- <div class="form-group">
                            <label for="exampleInputName6">Network</label>
                            <input type="text" name="usd_network" class="form-control text-light" id="exampleInputemail6" placeholder="Network" value="{{ $item->usd_network }}">

                            @error('usd_network')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div> -->

                        <h4 class="card-title" style="color: red;">Bank Section</h4>

                        <div class="form-group">
                            <label for="exampleInputName5">Account Number</label>
                            <input type="text" name="bank" class="form-control text-light" id="exampleInputemail5" placeholder="Account Number" value="{{ $item->bank }}">
                            @error('bank')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputName6">Bank Name</label>
                            <input type="text" name="bank_name" class="form-control text-light" id="exampleInputemail6" placeholder="Bank Name" value="{{ $item->bank_name }}">

                            @error('bank_name')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <br>
                        <button type="submit" class="btn btn-primary mr-2">Update Details</button>
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