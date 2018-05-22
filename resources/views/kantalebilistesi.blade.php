@extends('main_template')

@section('title')

@endsection
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header" data-background-color="red">
                <h4 class="title">Kan Talep Listesi</h4>
                <p class="category">Talep edilen tüm kanlar hakkında tüm bilgilere görebilir ve düzenleme yapabilirsiniz !</p>
            </div>
            <div class="card-content table-responsive">
             <div class="card-content">
                <table class="table">
                <thead class="text-danger">
                    <tr>
                        <th>ID</th>
                        <th>Kan Grubu</th>
                        <th>Kan Tipi</th>
                        <th>Ünite Sayısı</th>
                        <th>İşlemler</th>
                        <th>Durum</th>
                        <th>Talebi İncele</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($bloodRequests as $bloodRequest)
                    @if($bloodRequest->institution_id == $isActive["institution_id"])
                <tr>
                    <td>{{$bloodRequest->blood_request_id}}</td>
                    <td>{{$bloodRequest->blood_group}}</td>
                    <td>{{$bloodRequest->blood_type}}</td>
                    <td>{{$bloodRequest->unit_number}}</td>
                    <td>
                        <!-- BAŞLANGIÇ: DETAYLI KODLARI -->
                        <button data-toggle="modal" rel="tooltip" data-target="#detayli_{{$bloodRequest->blood_request_id}}" class="btn btn-info btn-simple btn-xs"><i class="material-icons">description</i> </button>
                        <div class="modal fade bd-example-modal-md" id="detayli_{{$bloodRequest->blood_request_id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-md">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <br/>
                                        <div class="card-header" data-background-color="red">
                                            <h5 class="modal-title" id="exampleModalLabel">Talep Detayları -
                                                @if($bloodRequest->is_active)
                                                    Aktif
                                                @else
                                                    Kapatıldı
                                                @endif
                                             </h5>
                                        </div>
                                    </div>
                                    <div class="modal-body">
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
                                        <div class="clearfix"></div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- BİTİŞ: DETAYLI KODLARI -->
                        <button type="button" rel="tooltip" title="" class="btn btn-danger btn-simple btn-xs"  data-toggle="modal" data-target="#silme_{{$bloodRequest->blood_request_id}}"  ><i class="material-icons">close</i></button>
                        <div class="modal fade" id="silme_{{$bloodRequest->blood_request_id}}">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Kan Talebi Sil</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Kan talebi silinecektir. Emin misiniz ?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger blood_request_delete" name="{{$bloodRequest->blood_request_id}}">Sil</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Vazgeç</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    </td>
                    <td>
                        @if($bloodRequest->is_active)
                            Aktif
                        @else
                            Kapatıldı
                        @endif
                    </td>
                    <td><a href="{{url('kantalebi_incele/'.$bloodRequest->blood_request_id)}}" >Talebi İncele</a></td>
                </tr>
                @endif
                    @endforeach
                </tbody>
            </table>
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
</script>
@endsection