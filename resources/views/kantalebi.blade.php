@extends('main_template')

@section('title')

@endsection
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header" data-background-color="red">
                <h4 class="title">Kan Talebi</h4>
                <p class="category">Kan Talebi Oluşturabilirsiniz !</p>
            </div>
            <div class="card-content table-responsive">

                     <form>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group label-floating">
                                     <label class="control-label">Kaç ünite talep ediyorsun ?</label>
                                      <input type="text" name="unit_number" class="form-control" id="unit_num">
                                 </div>
                             </div>
                         </div>

                         <div class="row">
                            <div class="col-md-3">
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
                              <div class="col-md-2">
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
                            <input type="hidden" id="employee_id" value="{{$isActive["employee_id"]}}">
                            <input type="hidden" id="institution_id" value="{{$isActive["institution_id"]}}">
                            <input type="hidden" id="user_id" value="{{$isActive["user_id"]}}">
                            <input type="hidden" id="town_id" value="{{$isActive["townIdOfInstitution"]}}">
                         <input type="hidden" id = "_token" name="_token" value="{{ csrf_token() }}">
                            <button type="submit" id="requestButton"class="btn btn-info pull-right">Kan Talep Et</button>
                             <div class="clearfix"></div>
                      </form>


                 </div>
               </div>
             </div>
         </div>
    </div>
@endsection

@section("javascript")
    <script>
        $("#bloodGroups").on('click','li',function () {
            $("#blood_group").val($(this).text());
            }
        );
        $("#bloodTypes").on('click','li',function () {
                $("#blood_type").val($(this).text());
            }
        );
        $("#requestButton").click(function(e) {
            var town_id = $("#town_id").val();
            var blood_type = $("#blood_type").val();
            var blood_group =$("#blood_group").val();
            var institution_id = $("#institution_id").val();
            var is_active = 1;
            var employee_id = $("#employee_id").val();
            var user_id = $("#user_id").val();
            var unit_number= $("#unit_num").val();

            var d = new Date();
            var month = d.getMonth()+1;
            var day = d.getDate();
            var date = d.getFullYear() + '-' +
                (month<10 ? '0' : '') + month + '-' +
                (day<10 ? '0' : '') + day;

            var token = $("#_token").val();
            $.ajax({
                type: "POST",
                url: "{{url('addBloodRequest')}}",
                data	:  {
                    "institution_id":institution_id,
                    "blood_type": blood_type,
                    "blood_group": blood_group,
                    "town_id": town_id,
                    "is_active": is_active,
                    "employee_id": employee_id,
                    "user_id":user_id,
                    "unit_number":unit_number,
                    "date":date,
                    "_token":token
                },

                success: function(msg) {
                    console.log(reply);

                },
                async: false,
                error: function() {
                    alert("Kan Talebi Gerçekleştirilemedi!!!");
                }
            });
            }
        );
    </script>

@endsection