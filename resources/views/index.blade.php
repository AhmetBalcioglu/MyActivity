@include('inc/header')

<div class="container" style="background-color:#f2a100; margin-top: 100px; height: 800px">

    @foreach ($etkinlikler as $etkinlik)
    <div class="card mb-3">
        <div class="card-body">
            <h5 class="card-title"><i><b>{{$etkinlik->etkinlikBaslik}}</b></i></h5>
            <p class="card-text">{{$etkinlik->etkinlikAciklama}}</p>
        </div>
    </div>
    @endforeach

</div>
@include('inc/footer')