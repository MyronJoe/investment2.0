@include('backend.includes.head')

@include('backend.includes.sidebar')

@include('backend.includes.header')

<style>
    .form-control {
        color: white !important;
    }
</style>
<div class="row" style="width: 100%;">
    <div class="col-12 grid-margin stretch-card" style="width: 100%;">
        <div class="card" style="width: 100%;">
            <div class="card-body" style="width: 100%;">
                <br>
                <br>
                <br>
                <h4 class="card-title">Update Admin</h4>
                <form class="forms-sample" action="{{route('update_user', $user->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputname1">Name</label>
                        <input type="text" value="{{ $user->name }}" name="name" class="form-control" id="exampleInputname1" placeholder="Name">
                        @error('name')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>


                    <div class="row">
                        <div class="form-group col-sm-12 col-md-6">
                            <label for="exampleInputemail3">Email</label>
                            <input type="text" value="{{ $user->email }}" name="email" class="form-control" id="exampleInputemail3" placeholder="Email">
                            @error('email')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-12 col-md-6">
                            <label for="exampleInputphone_number3">Phone Number</label>
                            <input type="tel" value="{{ $user->phone_number }}" name="phone_number" class="form-control" id="exampleInputphone_number3" placeholder="Phone Number">
                            @error('phone_number')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <img src="../assets/images/profile/{{ $user->image }}" alt="{{ $user->name }} image" style="height:120px; width:120px; object-fit:cover; border-radius:100%;">

                        <p style="margin-bottom:11px;">*Image: {{ $user->image }}</p>

                        <input type="file" name="image" class="form-control form--control">
                    </div>


                    <div class="row">
                        <div class="form-group col-sm-12 col-md-6">
                            <label for="exampleInputpassword3">Password</label>
                            <input type="password" value="{{old('password')}}" name="password" class="form-control" id="exampleInputpassword3" placeholder="Password">
                            @error('password')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-12 col-md-6">
                            <label for="exampleInputconfirm_password3">Confirm Password</label>
                            <input type="password" value="{{old('confirm_password')}}" name="confirm_password" class="form-control" id="exampleInputconfirm_password3" placeholder="Confirm Password">
                            @error('confirm_password')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary mr-2">Update Admin</button>
                </form>
            </div>
        </div>
    </div>
</div>

@include('backend.includes.footer')