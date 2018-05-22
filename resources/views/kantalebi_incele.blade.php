@extends('main_template')

@section('title')

@endsection
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header" data-background-color="red">
                <h4>Talep Detayları -
                    @if($bloodRequest->is_active)
                        Aktif
                    @else
                        Kapatıldı
                    @endif
                </h4>
            </div>
            <div class="card-content table-responsive">
                <div class="card-content">

                    <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="form-group">
                            <label>Talep Ekleyen : </label>
                            <label>{{$bloodRequest->user->name}} {{$bloodRequest->user->surname}}</label>
                        </div>
                        <div class="form-group">
                            <label>Kan Grubu : </label>
                            <label>{{$bloodRequest->blood_group}}</label>
                        </div>
                        <div class="form-group">
                            <label>Kan Tipi : </label>
                            <label>{{$bloodRequest->blood_type}}</label>
                        </div>
                        <div class="form-group">
                            <label>Ünite Sayısı : </label>
                            <label>{{$bloodRequest->unit_number}}</label>
                        </div>
                    </div >
                    <div class="col-lg-6 col-md-12">
                        <div class="form-group">
                            <label>Talep Tarihi : </label>
                            <label>{{date('d M Y',strtotime($bloodRequest->date))}}</label>
                        </div>
                        <div class="form-group">
                            <label>Talep Gönderilen İlçeler : </label>
                            <ul>
                                @foreach($bloodRequest->bloodRequestTowns as $bloodRequestTown)
                                    <li>
                                        {{$bloodRequestTown->town->city->name}} / {{$bloodRequestTown->town->name}}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    </div>

                    <div class="row">
                    <h3>Talebe Olumlu Cevap Verenler:</h3>

                        <table class="table">
                            <thead class="text-danger">
                                <tr>
                                    <th>Adı Soyadı</th>
                                    <th>Cinsiyet</th>
                                    <th>Telefon</th>
                                    <th>Konum</th>
                                    <th>Katıldı mı?</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($acceptedRequests as $acceptedRequest)
                                <?php $acceptedDonor = $acceptedRequest->user; ?>
                                <tr>
                                    <td>
                                        {{$acceptedDonor->name}} {{$acceptedDonor->surname}}
                                    </td>
                                    <td>
                                        {{$acceptedDonor->gender}}
                                    </td>
                                    <td>
                                        {{$acceptedDonor->phone}}
                                    </td>
                                    <td>
                                        {{$acceptedDonor->town->city->name}} / {{$acceptedDonor->town->name}}
                                    </td>
                                    <td>
                                        @if($acceptedRequest->status)
                                            <a href="#" class="btn btn-success" disabled>Tamamlandı</a>
                                        @else
                                            <a href="#" class="btn btn-success" accepted_request_id="{{$acceptedRequest->accepted_request_id}}" id="attendanceCompleted">Katıldı</a>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="row">
                        <div class=" col-md-12">
                            @if($bloodRequest->is_active==1)
                                <button type="button" class="btn btn-warning" id="blood_request_make_inactive" name="{{$bloodRequest->blood_request_id}}">Talebi Kapat</button>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section("javascript")
    <script>
        $("#blood_request_make_inactive").click(function(e) {
            var blood_request_id = this.name;
            $.ajax({
                type: "POST",
                url: "{{url('makeInactiveBloodRequest')}}",
                data	:  {
                    "blood_request_id":blood_request_id,
                    "_token" : "{{ csrf_token() }}"
                },
                success: function(msg) {
                    console.log(msg);

                },
                async: false,
                error: function() {
                    alert("Kan Talebi Kapatma İşlemi Başarısız!!!");
                }
            });
            location.reload();
        });
        $("#attendanceCompleted").click(function(e) {
            e.preventDefault();
            var accepted_request_id = $(this).attr("accepted_request_id");
            $.ajax({
                type: "POST",
                url: "{{url('attendanceCompleted')}}",
                data	:  {
                    "accepted_request_id":accepted_request_id,
                    "_token" : "{{ csrf_token() }}"
                },
                success: function(msg) {
                    console.log(msg);
                    return true;
                },
                async: false,
                error: function(e) {
                    console.log(e);
                }
            });
            location.reload();
        });
    </script>
@endsection