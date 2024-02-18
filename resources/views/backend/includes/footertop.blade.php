@foreach($utilities as $item)
<footer class="footer">
    <div class="d-sm-flex justify-content-center justify-content-sm-between">
        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © {{$item->site_name}}
            2023</span>
        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"><a href="{{$item->site_link}}" target="_blank">{{$item->site_name}}</a></span>
    </div>
</footer>
@endforeach