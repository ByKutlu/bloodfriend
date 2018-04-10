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
                                <div class="modal-body">
                                    <form method="POST">
                                        <div class="col-lg-4 col-md-12">
                                            <div class="form-group">
                                                <label for="recipient-name" class="form-control-label">Name</label>
                                                <input type="text" name="name" class="form-control" id="recipient-name">
                                            </div>
                                            <div class="form-group">
                                                <label for="recipient-name" class="form-control-label">Suname</label>
                                                <input type="text"name="surname" class="form-control" id="recipient-name">
                                            </div>
                                            <div class="form-group">
                                                <label for="recipient-name" class="form-control-label">Username</label>
                                                <input type="text"name="username" class="form-control" id="recipient-name">
                                            </div>
                                            <div class="form-group">
                                                <label for="recipient-name" class="form-control-label">Password</label>
                                                <input type="text"name="password" class="form-control" id="recipient-name">
                                            </div>
                                        </div >
                                        <div class="col-lg-4 col-md-12">

                                            <div class="form-group">
                                                <label for="recipient-name" class="form-control-label">Gender</label>
                                                <input type="text"name="gender" class="form-control" id="recipient-name">
                                            </div>
                                            <div class="form-group">
                                                <label for="recipient-name" class="form-control-label">Blood Group</label>
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
                                            <div class="form-group">
                                                <label for="recipient-name" class="form-control-label">Date of Birth</label>
                                                <input type="text"name="date_of_birth" class="form-control" id="recipient-name">
                                            </div>
                                            <div class="form-group">
                                                <label  class="form-control-label">Mail</label>
                                                <input type="text"name="mail" class="form-control" id="recipient-name">
                                            </div>
                                        </div >
                                        <div class="col-lg-4 col-md-12">
                                            <div class="form-group">
                                                <label  class="form-control-label">Phone</label>
                                                <input type="text"name="phone" class="form-control" id="recipient-name">
                                            </div>
                                            <div class="form-group">
                                                <label  class="form-control-label">İl</label><br/>
                                                <select class="form-control" id="city_id">
                                                    @foreach($cities as $city)
                                                        <option value="{{$city->city_id}}">{{$city->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">İlçe</label><br/>
                                                <select class="form-control" id="town_id" name="town_id">
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label  class="form-control-label">Role</label><br/>
                                                <select class="form-control" name="role">
                                                    <option value="normal" selected>Normal</option>
                                                    <option value="manager" selected>Kurum Yöneticisi</option>
                                                </select>
                                            </div>

                                        </div >
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <div class=" col-md-12">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Vazgeç</button>
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="button" class="btn btn-info">Ekle</button>
                                    </div>
                                </div>
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

                            <button  data-toggle="modal" rel="tooltip" data-target="#detaylı" class="btn btn-info btn-simple btn-xs"><i class="material-icons">description</i> </button>
                            <div class="modal fade bd-example-modal-lg" id="detaylı" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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
                                                        <label name="user_id">1</label>

                                                    </div>
                                                    <div class="form-group">
                                                        <label>Adı : </label>
                                                        <label name="name">Emrah</label>

                                                    </div>
                                                    <div class="form-group">
                                                        <label for="recipient-name" class="form-control-label">Soyadı : </label>
                                                        <label name="surname">Emrem</label>

                                                    </div>
                                                    <div class="form-group">
                                                        <label>Kullanıcı Adı : </label>
                                                        <label name="username">emrahemrem</label>

                                                    </div>

                                                </div >
                                                <div class="col-lg-4 col-md-12">

                                                    <div class="form-group">
                                                        <label>Cinsiyet : </label>
                                                        <label name="gender">Bay</label>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Kan Grubu : </label>
                                                        <label name="blood_group">A Rh(+)</label>

                                                    </div>
                                                    <div class="form-group">
                                                        <label>Doğum Tarihi : </label>
                                                        <label name="date_of_birth">1992</label>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Mail : </label>
                                                        <label name="mail">emrahemremm@gamil.com</label>
                                                    </div>
                                                </div >
                                                <div class="col-lg-4 col-md-12">
                                                    <div class="form-group">
                                                        <label>Telefon No : </label>
                                                        <label name="phone">05555112233</label>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>İl : </label>
                                                        <label name="city_id">İzmir</label>
                                                    </div>
                                                    <div class="form-group">
                                                        <label >İlçe : </label>
                                                        <label name="town_id">Konak</label>
                                                    </div>
                                                    <div class="form-group">
                                                        <label >Kurum : </label>
                                                        <label name="institution_id">Dokuz Eylül Hastanesi</label>
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


                            <button  data-toggle="modal" rel="tooltip" class="btn btn-success btn-simple btn-xs" data-target="#guncelle"><i class="material-icons">edit</i> </button>
                            <div class="modal fade bd-example-modal-lg" id="guncelle" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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
                                        <div class="modal-body">
                                            <form method="POST">
                                                <div class="col-lg-4 col-md-12">
                                                    <div class="form-group">
                                                        <label for="recipient-name" class="form-control-label">Name</label>
                                                        <input type="text" name="name" class="form-control" id="recipient-name">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="recipient-name" class="form-control-label">Suname</label>
                                                        <input type="text"name="surname" class="form-control" id="recipient-name">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="recipient-name" class="form-control-label">Username</label>
                                                        <input type="text"name="username" class="form-control" id="recipient-name">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="recipient-name" class="form-control-label">Password</label>
                                                        <input type="text"name="password" class="form-control" id="recipient-name">
                                                    </div>
                                                </div >
                                                <div class="col-lg-4 col-md-12">

                                                    <div class="form-group">
                                                        <label for="recipient-name" class="form-control-label">Gender</label>
                                                        <input type="text"name="gender" class="form-control" id="recipient-name">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="recipient-name" class="form-control-label">Blood Group</label>
                                                        <select class="form-control" id="blood_type">
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
                                                        <label for="recipient-name" class="form-control-label">Date of Birth</label>
                                                        <input type="text"name="date_of_birth" class="form-control" id="recipient-name">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="recipient-name" class="form-control-label">Mail</label>
                                                        <input type="text"name="mail" class="form-control" id="recipient-name">
                                                    </div>
                                                </div >
                                                <div class="col-lg-4 col-md-12">
                                                    <div class="form-group">
                                                        <label for="recipient-name" class="form-control-label">Phone</label>
                                                        <input type="text"name="phone" class="form-control" id="recipient-name">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="recipient-name" class="form-control-label">İl</label><br/>
                                                        <select class="form-control" id="city_id">
                                                            @foreach($cities as $city)
                                                                <option value="{{$city->city_id}}">{{$city->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="recipient-name" class="form-control-label">İlçe</label><br/>
                                                        <select class="form-control" id="town_id" name="town_id">
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="recipient-name" class="form-control-label">Kurum</label><br/>
                                                        <select class="form-control" id="institution_id" name="institution_id">
                                                        </select>
                                                    </div>

                                                </div >
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <div class=" col-md-12">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Vazgeç</button>
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <button type="button" class="btn btn-success">Güncelle</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>


                            <button  class="btn btn-danger btn-simple btn-xs" rel="tooltip"  name="user_id" data-toggle="modal" data-target="#silme" ><i class="material-icons">delete</i></button></td>

                        <div class="modal fade" id="silme">
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
                                        <button type="button" class="btn btn-danger " >Sil</button>
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