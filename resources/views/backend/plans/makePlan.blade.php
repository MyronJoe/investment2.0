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
                <h4 class="card-title">Create Investment Plan</h4>
                <form class="forms-sample" action="{{route('make_plan')}}" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="form-group">
                        <label for="exampleInputPlanName1">Plan Name</label>
                        <input type="text" value="{{old('planName')}}" name="planName" class="form-control" id="exampleInputPlanName1" placeholder="Plan Name">
                        @error('planName')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="row">
                        <div class="form-group col-sm-12 col-md-6">
                            <label for="exampleInputMin3">Min</label>
                            <input type="number" value="{{old('min')}}" name="min" class="form-control" id="exampleInputMin3" placeholder="Min">
                            @error('min')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-12 col-md-6">
                            <label for="exampleInputmax3">Max</label>
                            <input type="number" value="{{old('max')}}" name="max" class="form-control" id="exampleInputmax3" placeholder="Max">
                            @error('max')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-sm-12 col-md-6">
                            <label for="exampleInputRIO3">RIO</label>
                            <input type="text" value="{{old('RIO')}}" name="RIO" class="form-control" id="exampleInputRIO3" placeholder="RIO">
                            @error('RIO')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-12 col-md-6">
                            <label for="exampleInputpayout3">Payout</label>
                            <input type="text" value="{{old('payout')}}" name="payout" class="form-control" id="exampleInputpayout3" placeholder="Payout">
                            @error('payout')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputdayd1">Duration</label>
                        <input type="text" value="{{old('duration')}}" name="duration" class="form-control" id="exampleInputdayd1" placeholder="Duration">
                        @error('duration')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary mr-2">Add Plan</button>
                </form>
            </div>
        </div>
    </div>
</div>

@include('backend.includes.footer')