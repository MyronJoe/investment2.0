@include('backend.includes.head')

@include('backend.includes.sidebar')

@include('backend.includes.header')

<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">

        <div class="row ">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Message form {{$message->name}}</h4>
                        <form class="forms-sample">
                            <div class="form-group">
                                <label for="exampleInputName1">Name</label>
                                <input type="text" disabled value="{{$message->name}}" style="background: none; color:gray;" class="form-control" id="exampleInputName1" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Email address</label>
                                <input type="email" disabled value="{{$message->email}}" style="background: none; color:gray;" class="form-control" id="exampleInputEmail3" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword4">Phone Number</label>
                                <input type="text" style="background: none; color:gray;" class="form-control" disabled value="{{$message->phone}}" id="exampleInputPassword4" placeholder="Password">
                            </div>

                            <div class="form-group">
                                <label for="exampleTextarea1">Message Details</label>
                                <textarea style="background: none; color:gray;" class="form-control" disabled id="exampleTextarea1" rows="4">{{$message->content}}</textarea>
                            </div>
                            <a href="{{route('all_messages')}}" class="btn btn-primary mr-2">Go Back</a>
                        </form>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    @include('backend.includes.footertop')
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