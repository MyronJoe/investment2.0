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
                <h4 class="card-title">Edit User Balance</h4>
                <form class="forms-sample" action="{{route('update_amount', $data->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputPlanName1">Previous Balance</label>
                        <input type="text" readonly value="{{$data->balance}}" name="planName" class="form-control" style="background: none;" id="exampleInputPlanName1" placeholder="Balance">
                        @error('planName')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputcredit_action">Select Action</label>
                        <div>
                            <label for="exampleInputcredit_action1">Credit User</label>
                            <input type="radio" name="action" value="credit" class="" id="exampleInputcredit_action1" placeholder="Credit User">
                        </div>
                        <div>
                            <label for="exampleInputcredit_action2">Debit User</label>
                            <input type="radio" name="action" value="debit" class="" id="exampleInputcredit_action2" placeholder="Credit User">
                        </div>
                        @error('action')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputcredit_user1">Credit User</label>
                        <input type="text" value="{{ old('credit_user') }}" name="credit_user" class="form-control" id="exampleInputcredit_user1" placeholder="Credit User">
                        @error('credit_user')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>


                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

@include('backend.includes.footer')