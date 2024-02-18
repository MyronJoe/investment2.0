<div class="sidebar-item link">
    <div class="title">
        <h4>What We DO</h4>
    </div>
    <ul>
        <li><a href="{{route('realestate')}}">Real Estate</a></li>
        <li><a href="{{route('stock')}}">Stock and Options</a></li>
        <li><a href="{{route('forex')}}">Forex Trading</a></li>
        <li><a href="{{route('cryptocurrency')}}">Crypto Currency</a></li>

    </ul>
</div>
<!-- End Single Item -->
<!-- Single Item -->
<div class="sidebar-item contact address" style="background-image: url('frontend/assets/images/contact-bg.png');">
    <div class="title">
        <h4>Help Center?</h4>
    </div>
    <ul>
        @foreach($utilities as $key => $data)
        <li>
            {{$data->address}}<br>
        </li>
        <li>{{$data->email}}</li>
        @endforeach
    </ul>
</div>
<!-- End Single Item -->