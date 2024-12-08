@include('inc/header')

<div class="container" style="background-color:#f2a100; margin-top: 100px; height: 800px">
    @foreach ($etkinlikler as $etkinlik)
    <div class="row">
        <div class="col-md-6"></div>
        <div class="card mb-1 mt-5 col-md-6">
            <div class="card-body">
                <h5 class="card-title"><i><b>{{$etkinlik->etkinlikBaslik}}</b></i></h5>
                <p class="card-text">{{$etkinlik->etkinlikAciklama}}</p>
            </div>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button class="btn btn-primary">Düzenle</button>
            <button class="btn btn-danger">Sil</button>
        </div>
    </div>
    @endforeach

</div>
@include('inc/footer')