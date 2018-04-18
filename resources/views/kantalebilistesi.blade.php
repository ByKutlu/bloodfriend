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
                    <th>Çalışan Adı</th>
                    <th>Çalışan Soyadı</th>
                    <th>Kan Ünite Sayısı</th>
                    <th>Kan Grubu</th>
                    <th>Kan Tipi</th>
                    <th>İşlemler</th>
                </tr></thead>
                <tbody>
                @foreach($bloodRequests as $bloodRequest)
                    @if($bloodRequest->institution_id == $isActive["institution_id"])
                <tr>

                    <td>{{$bloodRequest->blood_request_id}}</td>
                    <td>{{$bloodRequest->user->name}}</td>
                    <td>{{$bloodRequest->user->surname}}</td>
                    <td>{{$bloodRequest->unit_number}}</td>
                    <td>{{$bloodRequest->blood_group}}</td>
                    <td>{{$bloodRequest->blood_type}}</td>

                    <td><button type="button" rel="tooltip" title="" class="btn btn-success btn-simple btn-xs updateBloodRequest"  data-toggle="modal" class="btn btn-success pull-right" data-target="#guncelle_{{$bloodRequest->blood_request_id}}" name="{{$bloodRequest->blood_request_id}}"><i class="material-icons">edit</i> </button>
                        <div class="modal fade" id="guncelle_{{$bloodRequest->blood_request_id}}">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">

                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button><br/>
                                    <div class="card-header" data-background-color="red">
                                        <h5 class="modal-title" id="exampleModalLabel">Kan Talep Bilgilerini Güncelle</h5>
                                    </div>

                                    <div class="modal-body">
                                        <form>
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group">
                                                    <label for="recipient-name" class="form-control-label">Çalışan Adı</label>
                                                    <input type="text" name="name" class="form-control" id="deneme-name_{{$bloodRequest->blood_request_id}}" readonly value="{{$bloodRequest->user->name}}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="recipient-name" class="form-control-label" >Çalışan Soyadı</label>
                                                    <input type="text"name="surname" class="form-control" id="recipient-name" readonly value="{{$bloodRequest->user->surname}}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="recipient-name" class="form-control-label">Kan Ünite Sayısı</label>
                                                    <input type="number"name="unit_number" class="form-control" id="unit_number_{{$bloodRequest->blood_request_id}}" value="{{$bloodRequest->unit_number}}">
                                                </div>
                                            </div >
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group">
                                                    <label for="recipient-name" class="form-control-label">Kan Grubu</label>
                                                    <select class="form-control" id="select_blood_group_{{$bloodRequest->blood_request_id}}">
                                                        <option value="A RH(+)">A RH(+)</option>
                                                        <option value="A RH(-)">A RH(-)</option>
                                                        <option value="B RH(+)">B RH(+)</option>
                                                        <option value="B RH(-)">B RH(-)</option>
                                                        <option value="0 RH(+)">0 RH(+)</option>
                                                        <option value="0 RH(-)">0 RH(-)</option>
                                                        <option value="AB RH(+)">AB RH(+)</option>
                                                        <option value="AB RH(-)">AB RH(-)</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="recipient-name" class="form-control-label">Kan Tipi</label>
                                                    <select class="form-control" id="select_blood_type_{{$bloodRequest->blood_request_id}}">
                                                        <option value="TAM KAN">TAM KAN</option>
                                                        <option value="TRAMBOSİT">TRAMBOSİT</option>
                                                        <option value="KÖK HÜCRE">KÖK HÜCRE</option>
                                                      </select>
                                                </div>
                                                <input type="hidden" id="blood_group_{{$bloodRequest->blood_request_id}}" value="{{$bloodRequest->blood_group}}">
                                                <input type="hidden" id="blood_type_{{$bloodRequest->blood_request_id}}" value="{{$bloodRequest->blood_type}}">

                                            </div >
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <div class=" col-md-12">
                                            @if($bloodRequest->is_active==1)
                                                <button type="button" class="btn btn-warning blood_request_make_inactive" name="{{$bloodRequest->blood_request_id}}">Talebi Kapat</button>
                                            @endif
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Vazgeç</button>
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}" id="_token">
                                            <button type="button" class="btn btn-success blood_request_update" name="{{$bloodRequest->blood_request_id}}">Güncelle</button>
                                        </div>
                                    </div>
                                    <input type="hidden" id="employee_id" value="{{$isActive["employee_id"]}}">
                                    <input type="hidden" id="institution_id" value="{{$isActive["institution_id"]}}">
                                    <input type="hidden" id="user_id" value="{{$isActive["user_id"]}}">
                                    <input type="hidden" id="town_id" value="{{$isActive["townIdOfInstitution"]}}">

                                </div>
                            </div>

                        </div>
                    </div>


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

                </tr>
                @endif
                    @endforeach
                </tbody>
            </table>
            </div>
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
        var token = $("#_token").val();

        $.ajax({
            type: "POST",
            url: "{{url('deleteBloodRequest')}}",
            data	:  {
                "blood_request_id":blood_request_id,
                "_token" : token
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

    $(".blood_request_update").click(function(e) {
        var bloodRequestId = this.name;
        var town_id = $("#town_id").val();
        var bloodType = $("#select_blood_type_"+bloodRequestId).val();
        var bloodGroup = $("#select_blood_group_"+bloodRequestId).val();
        var institution_id = $("#institution_id").val();
        var isActive = 1;
        var unit_number = $("#unit_number_"+bloodRequestId).val();
        var employee_id = $("#employee_id").val();
        var user_id = $("#user_id").val();

        var d = new Date();
        var month = d.getMonth()+1;
        var day = d.getDate();
        var date = d.getFullYear() + '-' +
            (month<10 ? '0' : '') + month + '-' +
            (day<10 ? '0' : '') + day;

        var token = $("#_token").val();
        $.ajax({
            type: "POST",
            url: "{{url('updateBloodRequest')}}",
            data	:  {
                "blood_request_id":bloodRequestId,
                "town_id":town_id,
                "blood_type":bloodType,
                "blood_group":bloodGroup,
                "date":date,
                "institution_id":institution_id,
                "is_active":isActive,
                "unit_number":unit_number,
                "employee_id":employee_id,
                "user_id":user_id,
                "_token" : token
            },

            success: function(msg) {
                console.log(reply);

            },
            async: false,
            error: function() {
                alert("Güncelleme İşlemi Başarısız!!!");
            }
        });
        location.reload();



    });
    $(".blood_request_make_inactive").click(function(e) {
        var blood_request_id = this.name;
        var token = $("#_token").val();
        $.ajax({
            type: "POST",
            url: "{{url('makeInactiveBloodRequest')}}",
            data	:  {
                "blood_request_id":blood_request_id,
                "_token" : token
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