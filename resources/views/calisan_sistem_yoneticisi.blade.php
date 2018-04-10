@extends('main_template')

@section('title')

@endsection

@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header" data-background-color="red">
                <ul class="nav nav-tabs pull-right " data-tabs="tabs">
                    <li class="pull-right">
                        <a href=""  data-toggle="modal" data-target="#ekle" data-toggle="tab" aria-expanded="false">
                            <i class="material-icons">note_add</i>EKLE</i>
                        </a>
                    </li>
                </ul>
                <h4 class="title">Çalışanlar</h4>
                <p class="category">Hastane çalışanları hakkında tüm bilgilere düzenleme yapabilirsiniz !</p>
            </div>
            <div class="card-content table-responsive">
                <div class="card-content">
                    <div class="modal fade bd-example-modal-lg" id ="ekle" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">

                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <br/>
                                    <div class="card-header" data-background-color="red">
                                        <h5 class="modal-title" id="exampleModalLabel">Çalışan Ekle</h5>
                                    </div>
                                </div>
                                <form action="{{url('addEmployee')}}" method="POST">
                                    <div class="modal-body">
                                        <div class="col-lg-4 col-md-12">
                                            <div class="form-group">
                                                <label class="form-control-label">İsim</label>
                                                <input type="text" name="name" class="form-control" >
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">Soyisim</label>
                                                <input type="text"name="surname" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">Kullanıcı Adı</label>
                                                <input type="text"name="username" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">Şifre</label>
                                                <input type="password"name="password" class="form-control">
                                            </div>
                                        </div >
                                        <div class="col-lg-4 col-md-12">

                                            <div class="form-group">
                                                <label class="form-control-label">Cinsiyet</label>
                                                <select class="form-control" name="gender">
                                                    <option value="Bay" selected>Bay</option>
                                                    <option value="Bayan">Bayan</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">Kan Grubu</label>
                                                <select class="form-control" name="blood_group">
                                                    <option value="A Rh(+)" selected>A Rh(+)</option>
                                                    <option value="A Rh(-)">A Rh(-)</option>
                                                    <option value="B Rh(+)">B Rh(+)</option>
                                                    <option value="B Rh(-)">B Rh(-)</option>
                                                    <option value="0 Rh(+)">0 Rh(+)</option>
                                                    <option value="0 Rh(-)">0 Rh(-)</option>
                                                    <option value="AB Rh(+)">AB Rh(+)</option>
                                                    <option value="AB Rh(-)">AB Rh(-)</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">Doğum Tarihi</label>
                                                <input type="date"name="date_of_birth" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label  class="form-control-label">Mail</label>
                                                <input type="text"name="mail" class="form-control">
                                            </div>
                                        </div >
                                        <div class="col-lg-4 col-md-12">
                                            <div class="form-group">
                                                <label  class="form-control-label">Telefon</label>
                                                <input type="text"name="phone" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label  class="form-control-label">İl</label><br/>
                                                <select class="form-control city_id" id="city_id" name="0">
                                                    @foreach($cities as $city)
                                                        <option value="{{$city->city_id}}">{{$city->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">İlçe</label><br/>
                                                <select class="form-control" id="town_id_0" name="town_id">
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label  class="form-control-label">Kurum</label><br/>
                                                <select class="form-control" name="institution">
                                                    @foreach($institutions as $institution)
                                                        <option value="{{$institution->institution_id}}">{{$institution->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div >
                                    </div>
                                    <div class="modal-footer">
                                        <div class=" col-md-12">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Vazgeç</button>
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <button type="submit" class="btn btn-info">Ekle</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <table class="table">
                        <thead class="text-danger">
                        <tr>
                            <th>ID</th>
                            <th>Adı</th>
                            <th>Soyadı</th>
                            <th>Cinsiyet</th>
                            <th>Kan Grubu</th>
                            <th>Telefon</th>
                            <th>İşlemler</th>
                        </tr></thead>
                        <tbody>
                        @foreach($employees as $employee)
                            <?php $person = $employee->user; ?>
                            <tr>
                                <td>{{$person->user_id}}</td>
                                <td>{{$person->name}}</td>
                                <td>{{$person->surname}}</td>
                                <td>{{$person->gender}}</td>
                                <td>{{$person->blood_group}}</td>
                                <td>{{$person->phone}}</td>
                                <td>
                                    <!-- BAŞLANGIÇ: DETAYLI KODLARI -->
                                    <button data-toggle="modal" rel="tooltip" data-target="#detayli_{{$person->user_id}}" class="btn btn-info btn-simple btn-xs"><i class="material-icons">description</i> </button>
                                    <div class="modal fade bd-example-modal-lg" id="detayli_{{$person->user_id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    <br/>
                                                    <div class="card-header" data-background-color="red">
                                                        <h5 class="modal-title" id="exampleModalLabel">Çalışan Bilgileri</h5>
                                                    </div>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="POST">
                                                        <div class="col-lg-4 col-md-12">
                                                            <div class="form-group">
                                                                <label>ID : </label>
                                                                <label>{{$person->user_id}}</label>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Adı : </label>
                                                                <label>{{$person->name}}</label>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="form-control-label">Soyadı : </label>
                                                                <label>{{$person->surname}}</label>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Kullanıcı Adı : </label>
                                                                <label>{{$person->username}}</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-12">
                                                            <div class="form-group">
                                                                <label>Cinsiyet : </label>
                                                                <label>{{$person->gender}}</label>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Kan Grubu : </label>
                                                                <label>{{$person->blood_group}}</label>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Doğum Tarihi : </label>
                                                                <label>{{$person->date_of_birth}}</label>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Mail : </label>
                                                                <label>{{$person->email}}</label>
                                                            </div>
                                                        </div >
                                                        <div class="col-lg-4 col-md-12">
                                                            <div class="form-group">
                                                                <label>Telefon : </label>
                                                                <label>{{$person->phone}}</label>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>İl : </label>
                                                                <label>{{$person->town->city->name}}</label>
                                                            </div>
                                                            <div class="form-group">
                                                                <label >İlçe : </label>
                                                                <label>{{$person->town->name}}</label>
                                                            </div>
                                                            <div class="form-group">
                                                                <label >Kurum : </label>
                                                                <label>{{$person->employee->institution->name}}</label>
                                                            </div>
                                                        </div >
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <div class=" col-md-12">
                                                        <button type="button" class="btn btn-info" data-dismiss="modal">Tamam</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- BİTİŞ: DETAYLI KODLARI -->
                                    <!-- BAŞLANGIÇ: GÜNCELLE KODLARI -->
                                    <button  data-toggle="modal" rel="tooltip" class="btn btn-success btn-simple btn-xs btnGuncelle" data-target="#guncelle_{{$person->user_id}}" user_id="{{$person->user_id}}" city="{{$person->town->city->city_id}}" town="{{$person->town->town_id}}" blood_group="{{$person->blood_group}}" institution="{{$person->employee->institution->institution_id}}" gender="{{$person->gender}}">
                                        <i class="material-icons">edit</i>
                                    </button>
                                    <div class="modal fade bd-example-modal-lg" id="guncelle_{{$person->user_id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    <br/>
                                                    <div class="card-header" data-background-color="red">
                                                        <h5 class="modal-title" id="exampleModalLabel">Çalışan Bilgilerini Güncelle</h5>
                                                    </div>
                                                </div>
                                                <form action="{{url('updateEmployee')}}" method="POST">
                                                    <div class="modal-body">
                                                        <div class="col-lg-4 col-md-12">
                                                            <div class="form-group">
                                                                <label class="form-control-label">İsim</label>
                                                                <input type="text" name="name" class="form-control" value="{{$person->name}}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="form-control-label">Soyisim</label>
                                                                <input type="text" name="surname" class="form-control" value="{{$person->surname}}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="form-control-label">Kullanıcı Adı</label>
                                                                <input type="text" name="username" class="form-control" value="{{$person->username}}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="form-control-label">Şifre</label>
                                                                <input type="password" name="password" class="form-control">
                                                            </div>
                                                        </div >
                                                        <div class="col-lg-4 col-md-12">
                                                            <div class="form-group">
                                                                <label class="form-control-label">Cinsiyet</label>
                                                                <select class="form-control" name="gender" id="gender_{{$person->user_id}}">
                                                                    <option value="Bay" selected>Bay</option>
                                                                    <option value="Bayan">Bayan</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="form-control-label">Kan Grubu</label>
                                                                <select class="form-control" name="blood_group" id="blood_group_{{$person->user_id}}">
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
                                                            <div class="form-group">
                                                                <label class="form-control-label">Doğum Tarihi</label>
                                                                <input type="date" name="date_of_birth" class="form-control" value="{{$person->date_of_birth}}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="form-control-label">Mail</label>
                                                                <input type="text" name="email" class="form-control" value="{{$person->email}}">
                                                            </div>
                                                        </div >
                                                        <div class="col-lg-4 col-md-12">
                                                            <div class="form-group">
                                                                <label class="form-control-label">Telefon</label>
                                                                <input type="text" name="phone" class="form-control" value="{{$person->phone}}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label  class="form-control-label">İl</label><br/>
                                                                <select class="form-control city_id" id="city_id" name="{{$person->user_id}}">
                                                                    @foreach($cities as $city)
                                                                        @if($person->town->city->name == $city->name)
                                                                            <option value="{{$city->city_id}}" selected>{{$city->name}}</option>
                                                                        @endif
                                                                        <option value="{{$city->city_id}}">{{$city->name}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="form-control-label">İlçe</label><br/>
                                                                <select class="form-control" id="town_id_{{$person->user_id}}" name="town_id">
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="form-control-label">Kurum</label><br/>
                                                                <select class="form-control" name="institution" id="institution_{{$person->user_id}}">
                                                                    @foreach($institutions as $institution)
                                                                        <option value="{{$institution->institution_id}}">{{$institution->name}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div >
                                                    </div>
                                                    <div class="modal-footer">
                                                        <div class=" col-md-12">
                                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Vazgeç</button>
                                                            <input type="hidden" name="user_id" value="{{$person->user_id}}">
                                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                            <button type="submit" class="btn btn-success">Güncelle</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- BİTİŞ: GÜNCELLE KODLARI -->
                                    <button  class="btn btn-danger btn-simple btn-xs" rel="tooltip"  user_id="{{$person->user_id}}" data-toggle="modal" data-target="#silme_{{$person->user_id}}" ><i class="material-icons">delete</i></button></td>
                                <div class="modal fade" id="silme_{{$person->user_id}}">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Çalışan Sil</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Bu kişi silinecektir. Emin misiniz ?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <form action="{{url('deleteEmployee')}}" method="POST">
                                                    <input type="hidden" name="user_id" value="{{$person->user_id}}">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <button type="submit" class="btn btn-danger " >Sil</button>
                                                </form>
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Vazgeç</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </tr>
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
        function getTown(city_id,user_id) {
            if (city_id > 0) {
                $("#town_id_"+user_id).get(0).options.length = 0;
                $("#town_id_"+user_id).get(0).options[0] = new Option("Yükleniyor", "-1");
                $.ajax({
                    type: "GET",
                    url: "{{url('getTowns/')}}"+"/"+city_id,
                    contentType: "application/json; charset=utf-8",

                    success: function(msg) {
                        $("#town_id_"+user_id).get(0).options.length = 0;
                        $("#town_id_"+user_id).get(0).options[0] = new Option("Seçiniz", "-1");

                        $.each(msg, function(index, town) {
                            $("#town_id_"+user_id).get(0).options[$("#town_id_"+user_id).get(0).options.length] = new Option(town.name, town.town_id);
                        });
                        $('.selectpicker').selectpicker('refresh');
                    },
                    async: false,
                    error: function() {
                        $("#town_id_"+user_id).get(0).options.length = 0;
                        alert("Ilçeler yükelenemedi!!!");
                    }
                });
            }
            else {
                $("#town_id_"+user_id).get(0).options.length = 0;
            }
        }
        $(".btnGuncelle").click(function () {
                var user_id= $(this).attr("user_id");
                var city= $(this).attr("city");
                var town= $(this).attr("town");
                var blood_group= $(this).attr("blood_group");
                var institution= $(this).attr("institution");
                var gender= $(this).attr("gender");
                getTown(city,user_id);
                $("#town_id_"+user_id).val(town);
                $("#blood_group_"+user_id).val(blood_group);
                $("#institution_"+user_id).val(institution);
                $("#gender_"+user_id).val(gender);
            }
        );

        $( document ).ready(function() {
            getTown(1,0);
            $('.city_id').on('change', function (e) {
                var city_id = e.target.value;
                var user_id = e.target.name;
                getTown(city_id,user_id);
            });
        });
    </script>
@endsection