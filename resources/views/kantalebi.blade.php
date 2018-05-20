@extends('main_template')

@section('head')
    <link rel="stylesheet" media="screen"  type="text/css" href="{{asset('js/multiselect/css/multi-select.css')}}">
@endsection

@section('title')

@endsection

@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header" data-background-color="red">
                <h4 class="title">Kan Talebi</h4>
                <p class="category">Kan Talebi Oluşturabilirsiniz !</p>
            </div>
            <form method="POST">
                <div class="card-content table-responsive">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="col-md-12">
                                <div class="form-group label-floating">
                                     <label class="control-label">Kaç ünite talep ediyorsun ?</label>
                                      <input type="number" name="unit_number" class="form-control" id="unit_num">
                                 </div>
                             </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group label-floating">
                                    <label class="control-label"><h5>Kan Grubunu Seçiniz !</h5></label>
                                </div>
                                <ul class="nav nav-pills nav-pills-danger" id="bloodGroups"> <br>
                                    <li class="active"><a href="#pill1" data-toggle="tab">A RH(+)</a></li>
                                    <li><a href="#pill2"  data-toggle="tab">A RH(-)</a></li>
                                    <li><a href="#pill3" data-toggle="tab">B RH(+)</a></li>
                                    <li><a href="#pill4" data-toggle="tab">B RH(-)</a></li>
                                    <li><a href="#pill5" data-toggle="tab">0 RH(+)</a></li>
                                    <li><a href="#pill6" data-toggle="tab">0 RH(-)</a></li>
                                    <li><a href="#pill7" data-toggle="tab">AB RH(+)</a></li>
                                    <li><a href="#pill8" data-toggle="tab">AB RH(-)</a></li>
                                </ul>
                                <input type="hidden" name="blood_group" class="form-control" id="blood_group" value="A RH(+)">
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group label-floating">
                                    <label class="control-label"><h5>Kan Tipini Seçiniz !</h5></label>
                                </div>
                                <ul class="nav nav-pills nav-pills-warning" id="bloodTypes"> <br>
                                    <li class="active"><a href="#pill1" data-toggle="tab">TAM KAN</a></li>
                                    <li><a href="#pill2" data-toggle="tab">TRAMBOSİT</a></li>
                                    <li><a href="#pill3" data-toggle="tab">KÖK HÜCRE</a></li>
                                </ul>
                                <input type="hidden" name="blood_type" class="form-control" id="blood_type" value="TAM KAN">
                            </div>
                        </div>
                         <div class="col-lg-6 col-md-12">
                             <div class="col-md-12">
                                 <div class="form-group">
                                     <div class="col-lg-9 col-md-9">
                                         <select class="form-control" id='il_ekle_select' style="margin-top: 4px;">
                                             @foreach($cities as $city)
                                                 <option value="{{$city->city_id}}">{{$city->name}}</option>
                                             @endforeach
                                         </select>
                                     </div>
                                     <div class="col-lg-3 col-md-3">
                                         <button type="button" id="il_ekle_button" class="btn btn-md btn-warning" style="margin-top: 0px;">Ekle</button>
                                     </div>
                                 </div>
                                 <div class="form-group" style="margin-left:12px">
                                     <label class="form-control-label">İlçeler</label>
                                     <select id='secilen_ilceler' multiple='multiple' name="secilen_ilceler[]" data-rule-multiselectOnay="true">
                                     </select>
                                 </div>
                             </div>
                         </div>
                     </div>
                    <input type="hidden" id="employee_id" value="{{$isActive["employee_id"]}}">
                    <input type="hidden" id="institution_id" value="{{$isActive["institution_id"]}}">
                    <input type="hidden" id="user_id" value="{{$isActive["user_id"]}}">
                    <input type="hidden" id="town_id" value="{{$isActive["townIdOfInstitution"]}}">
                    <input type="hidden" id = "_token" name="_token" value="{{ csrf_token() }}">
                </div>
                <div class="card-footer">
                    <button type="submit" id="requestButton" class="btn btn-info pull-right">Kan Talep Et</button>
                    <button type="button" id="sendNotification" >aaa</button>
                    <div class="clearfix"></div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section("javascript")
<script src="{{asset('js/multiselect/js/jquery.multi-select.js')}}"></script>
<script>
    $('#secilen_ilceler').multiSelect({selectableOptgroup: true});
    function fillTowns(city_id,city_name) {
        $.ajax({
            type: "GET",
            url: "{{url('getTowns')}}/"+city_id,
            contentType: "application/json; charset=utf-8",

            success: function(msg) {
                $('<optgroup/>').attr('label', city_name).appendTo($('#secilen_ilceler'));
                $.each(msg, function(index, town) {
                    $('#secilen_ilceler').multiSelect('addOption', { value: town.town_id, text: town.name,nested: city_name});
                });
            },
            async: false,
            error: function(e) {
                console.log(e);
                alert("Ilçeler yükelenemedi!!!");
            }
        });
    }
    $( document ).ready(function() {
        //KURUMUN ILCESI SECILIR
        var secilen_ilceler=$('#secilen_ilceler');
        secilen_ilceler.empty().multiSelect('refresh');
        fillTowns("{{$cityOfInstitution->city_id}}","{{$cityOfInstitution->name}}");
        secilen_ilceler.multiSelect('select', "{{$townOfInstitution->town_id}}");
        //SECILI IL SILINIR
        $("#il_ekle option[value='{{$cityOfInstitution->city_id}}']").remove();
    });

    $("#il_ekle_button").click(function () {
        var selected_il = $('#il_ekle_select');
        var selected_il_val = selected_il.find(":selected").val();
        var selected_il_text = selected_il.find(":selected").text();
        //SECILEN IL SILINIR
        $("#il_ekle option[value='"+selected_il_val+"']").remove();
        fillTowns(selected_il_val,selected_il_text);
        alert(selected_il_text + " ilinin ilçeleri listeye eklendi!");
    });

    $("#bloodGroups").on('click','li',function () {
        $("#blood_group").val($(this).text());
    });

    $("#bloodTypes").on('click','li',function () {
            $("#blood_type").val($(this).text());
    });

    //SAVE BLOOD REQUEST
    $("#requestButton").click(function(e) {
        e.preventDefault();
            var selected_il = $('#secilen_ilceler').val();
            if (selected_il.length > 0) {
                var town_id = $("#town_id").val();
                var blood_type = $("#blood_type").val();
                var blood_group = $("#blood_group").val();
                var institution_id = $("#institution_id").val();
                var is_active = 1;
                var employee_id = $("#employee_id").val();
                var user_id = $("#user_id").val();
                var unit_number = $("#unit_num").val();

                var d = new Date();
                var month = d.getMonth() + 1;
                var day = d.getDate();
                var date = d.getFullYear() + '-' +
                    (month < 10 ? '0' : '') + month + '-' +
                    (day < 10 ? '0' : '') + day;


                $.ajax({
                    type: "POST",
                    url: "{{url('addBloodRequest')}}",
                    headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}"
                    },
                    data: {
                        "institution_id": institution_id,
                        "blood_type": blood_type,
                        "blood_group": blood_group,
                        "towns": selected_il,
                        "is_active": is_active,
                        "employee_id": employee_id,
                        "user_id": user_id,
                        "unit_number": unit_number,
                        "date": date
                    },
                    success: function (msg) {
                        console.log(msg);
                    },
                    async: false,
                    error: function (e) {
                        console.log(e);
                        alert("Kan Talebi Gerçekleştirilemedi!!!");
                    }
                });
                //$('#sendNotification').click();
            }
            else
            {
                alert("Talebin gönderilmesi için az bir ilçe seçiniz");
            }
        }
    );

    //SEND NOTIFICATION
    $("#sendNotification").click(function(e) {
        var selected_il = $('#secilen_ilceler').val();
        if(selected_il.length>0){
        var bloodGroup = $("#blood_group").val();
        if(bloodGroup=="0 RH(+)"){
            bloodGroup="0RHPozitif";
        }
        else if(bloodGroup=="A RH(+)"){
            bloodGroup="ARHPozitif";
        }
        else if(bloodGroup=="B RH(+)"){
            bloodGroup="BRHPozitif";
        }
        else if(bloodGroup=="AB RH(+)"){
            bloodGroup="ABRHPozitif";
        }
        else if(bloodGroup=="0 RH(-)"){
            bloodGroup="0RHNegatif";
        }
        else if(bloodGroup=="A RH(-)"){
            bloodGroup="ARHNegatif";
        }
        else if(bloodGroup=="B RH(-)"){
            bloodGroup="BRHNegatif";
        }
        else if(bloodGroup=="AB RH(-)"){
            bloodGroup="ABRHNegatif";
        }

        var conditionString = "'"+bloodGroup+"' in topics";
        conditionString += " && (";
        var i;
        for (i = 0; i < selected_il.length; i++) {
            conditionString += "'"+ selected_il[i] + "' in topics";
            if(i!=selected_il.length-1){
                conditionString += " || ";
            }
        }
        conditionString += ")";

        alert(conditionString);
        /*$.ajax({
            type : 'POST',
            url : "https://fcm.googleapis.com/fcm/send",
            headers : {
                Authorization : 'key=AAAAJ3sUI6w:APA91bESa-UinRxItfbcH_dtM4qR8lcGCn26HI5xp4BWhuNQTh2h6j4y4wyU4QhNh2SmzEJzk1-hx6ynd9VSQgVHP6gEDyAZFGdffba44YAKwUllR7Agzywf9Vh-RH_b_WOyS9VtM4uE'
            },
            contentType : 'application/json',
            data : JSON.stringify({
                "condition": conditionString,
                "notification" : {
                    "body" : "This is a Firebase Cloud Messaging Topic Message!",
                    "sound" : "default",
                    "title" : "FCM Message"
                }

            }),
            success : function(response) {
                console.log(response);
            },
            error : function(xhr, status, error) {
                console.log(xhr.error);
            }
        });*/
    }
    else
        {
            alert("Bildirim gönderilmesi için az bir ilçe seçiniz");
        }
    });

</script>
@endsection