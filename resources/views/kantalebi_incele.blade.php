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
                                    <th>İşlemler</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>

                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

@section("javascript")
    <script>
        $(".blood_request_delete").click(function(e) {
            var blood_request_id = this.name;
            $.ajax({
                type: "POST",
                url: "{{url('deleteBloodRequest')}}",
                data	:  {
                    "blood_request_id":blood_request_id,
                    "_token" : "{{ csrf_token() }}"
                },
                success: function(msg) {
                    console.log(reply);
                },
                async: false,
                error: function() {
                    alert("Silme İşlemi Başarısız!!!");
                }
            });
            location.reload();
        });

        $(".updateBloodRequest").click(function(e) {
            var bloodRequestId = this.name;
            var bloodGroup = $("#blood_group_"+bloodRequestId).val();
            var bloodType = $("#blood_type_"+bloodRequestId).val();
            $("#select_blood_group_"+bloodRequestId).val(bloodGroup);
            $("#select_blood_type_"+bloodRequestId).val(bloodType);
        });

        $(".blood_request_make_inactive").click(function(e) {
            var blood_request_id = this.name;
            $.ajax({
                type: "POST",
                url: "{{url('makeInactiveBloodRequest')}}",
                data	:  {
                    "blood_request_id":blood_request_id,
                    "_token" : "{{ csrf_token() }}"
                },
                success: function(msg) {
                    console.log(reply);

                },
                async: false,
                error: function() {
                    alert("Kan Talebi Kapatma İşlemi Başarısız!!!");
                }
            });
            location.reload();
        });
    </script>
@endsection