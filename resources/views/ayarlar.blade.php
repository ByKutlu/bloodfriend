@extends('main_template')

@section('title')

@endsection
@section('content')
<div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="red">
                                    <h4 class="title">Ayarlar</h4>
                                    <p class="category">Profilinizi Düzenleyebilirsiniz !</p>
                                </div>
                                <div class="card-content">
                                    <form method="POST">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Adı</label>
                                                    <input type="text" name="name" class="form-control" id="recipient-name">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Surname</label>
                                                    <input type="text" name="surname" class="form-control" id="recipient-name">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Cinsiyet</label>
                                                    <select class="form-control" id="gender_type">
                                                        <option value="bay">Bay</option>
                                                        <option value="bayan">Bayan</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Şifre</label>
                                                    <input type="text" name="password" class="form-control" id="recipient-name">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Telefon</label>
                                                    <input type="text"name="phone" class="form-control" id="recipient-name">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Kan Grubu</label>
                                                    <select class="form-control" id="blood_group">
                                                        <option value="A Rh(+)">A Rh(+)</option>
                                                        <option value="A Rh(-)">A Rh(-)</option>
                                                        <option value="B Rh(+)">B Rh(+)</option>
                                                        <option value="B Rh(-)">B Rh(-)</option>
                                                        <option value="0 Rh(+)">0 Rh(+)</option>
                                                        <option value="0 Rh(-)">0 Rh(-)</option>
                                                        <option value="AB Rh(+)">AB Rh(+)</option>
                                                        <option value="AB Rh(-)">AB Rh(-)</option>
                                                    </select>
                                                </div>
                                            </div>


                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Mail</label>
                                                    <input type="email" name="mail" class="form-control">

                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <label  class="control-label">İl</label><br/>
                                                <select class="form-control" id="city_id">
                                                    @foreach($cities as $city)
                                                        <option value="{{$city->city_id}}">{{$city->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label  class="control-label">İlçe</label><br/>
                                                <select class="form-control" id="town_id_0" name="town_id">
                                                </select>
                                            </div>
                                        </div>
                                        

                                        <button type="submit" class="btn btn-success pull-right">Güncelle</button>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection


@section("javascript")
    <script>
        $( document ).ready(function() {
            getTown(1);
            function getTown(city_id) {
                if (city_id > 0) {
                    $("#town_id").get(0).options.length = 0;
                    $("#town_id").get(0).options[0] = new Option("Yükleniyor", "-1");
                    $.ajax({
                        type: "GET",
                        url: "{{url('getTowns/')}}"+"/"+city_id,
                        contentType: "application/json; charset=utf-8",

                        success: function(msg) {
                            $("#town_id").get(0).options.length = 0;
                            $("#town_id").get(0).options[0] = new Option("Seçiniz", "-1");

                            $.each(msg, function(index, town) {
                                $("#town_id").get(0).options[$("#town_id").get(0).options.length] = new Option(town.name, town.town_id);
                            });
                            $('.selectpicker').selectpicker('refresh');
                        },
                        async: false,
                        error: function() {
                            $("#town_id").get(0).options.length = 0;
                            alert("Ilçeler yükelenemedi!!!");
                        }
                    });
                }
                else {
                    $("#town_id").get(0).options.length = 0;
                }
            }

            $('#city_id').on('change', function (e) {
                var city_id = e.target.value;
                getTown(city_id);
            });
        });

    </script>






@endsection