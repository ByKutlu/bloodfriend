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
                <h4 class="title">Kurumlar</h4>
                <p class="category">Hastaneler hakkinda tüm bilgilere düzenleme yapabilirsiniz !</p>

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
                                        <h5 class="modal-title" id="exampleModalLabel">Kurum Ekle</h5>
                                    </div>


                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="col-lg-6 col-md-12">
                                            <div class="form-group">
                                                <label for="recipient-name" class="form-control-label">Name</label>
                                                <input type="text" name="name" class="form-control" id="name">
                                            </div>
                                            <div class="form-group">
                                                <label for="recipient-name" class="form-control-label">Description</label>
                                                <input type="text"name="description" class="form-control" id="description">
                                            </div>
                                            <div class="form-group">
                                                <label for="recipient-name" class="form-control-label">Phone</label>
                                                <input type="text"name="phone" class="form-control" id="phone">
                                            </div>
                                            <div class="form-group">
                                                <label for="recipient-name" class="form-control-label">Fax</label>
                                                <input type="text"name="fax" class="form-control" id="fax">
                                            </div>
                                        </div >

                                        <div class="col-lg-6 col-md-12">
                                            <div class="form-group">
                                                <label for="recipient-name" class="form-control-label">Mail</label>
                                                <input type="text"name="mail" class="form-control" id="mail">
                                            </div>
                                            <div class="form-group">
                                                <label for="recipient-name" class="form-control-label">Il</label><br/>
                                                <select class="form-control city_id"  name="0">
                                                    @foreach($cities as $city)
                                                        <option value="{{$city->city_id}}">{{$city->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="recipient-name" class="form-control-label">Ilçe</label><br/>
                                                <select class="form-control" id="town_id_0" name="town_id">
                                                </select>
                                            </div>
                                        </div >
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <div class=" col-md-12">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Vazgeç</button>
                                        <input type="hidden" id = "_token" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="btn btn-info" id="institution_add">Ekle</button>
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
                    <th>Mail</th>
                    <th>Telefon</th>
                    <th>Faks</th>
                    <th>İşlemler</th>

                </tr></thead>
                <tbody>
                @foreach($institutions as $institution)
                    <tr>
                        <td>{{$institution->institution_id}}</td>
                        <td>{{$institution->name}}</td>
                        <td>{{$institution->description}}</td>
                        <td>{{$institution->mail}}</td>
                        <td>{{$institution->phone}}</td>
                        <td>{{$institution->fax}}</td>
                        <td>
                             <button name="detailedButton" rel="tooltip" data-toggle="modal" data-target="#detayli_{{$institution->institution_id}}" class="btn btn-info btn-simple btn-xs" id="{{$institution->institution_id}}" ><i class="material-icons">description</i> </button>
                        <div class="modal fade bd-example-modal-lg" id="detayli_{{$institution->institution_id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">

                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <br/>
                                        <div class="card-header" data-background-color="red">
                                            <h5 class="modal-title" id="exampleModalLabel">Hastane Bilgileri</h5>
                                        </div>


                                    </div>
                                    <div class="modal-body">
                                        <form method="POST">
                                            <div class="col-lg-6 col-md-12">

                                                <div class="form-group">
                                                    <label>ID : </label>
                                                    <label name="institution_id" id="institution_id">{{$institution->institution_id}}</label>

                                                </div>
                                                <div class="form-group">
                                                    <label>Adi : </label>
                                                    <label name="name">{{$institution->name}}</label>

                                                </div>
                                                <div class="form-group">
                                                    <label for="recipient-name" class="form-control-label">Description : </label>
                                                    <label name="description">{{$institution->description}}</label>

                                                </div>
                                                <div class="form-group">
                                                    <label>Mail : </label>
                                                    <label name="mail">{{$institution->mail}}</label>

                                                </div>

                                            </div >
                                            <div class="col-lg-6 col-md-12">

                                                <div class="form-group">
                                                    <label>Phone : </label>
                                                    <label name="phone">{{$institution->phone}}</label>
                                                </div>
                                                <div class="form-group">
                                                    <label>Fax : </label>
                                                    <label name="fax">{{$institution->fax}}</label>

                                                </div>

                                                <div class="form-group">
                                                    <label>Il : </label>
                                                    <label name="city_id">{{$institution->town->city->name}}</label>
                                                </div>
                                                <div class="form-group">
                                                    <label >Ilçe : </label>
                                                    <label name="town_id">{{$institution->town->name}}</label>
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


                        <button  data-toggle="modal" class="btn btn-success  btn-simple btn-xs btnGuncelle" data-target="#guncelle_{{$institution->institution_id}}" institution_id="{{$institution->institution_id}}" city="{{$institution->town->city->city_id}}" town="{{$institution->town->town_id}}"><i class="material-icons">edit</i>  </button>

                        <div class="modal fade bd-example-modal-lg" id ="guncelle_{{$institution->institution_id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">

                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <br/>
                                        <div class="card-header" data-background-color="red">
                                            <h5 class="modal-title" id="exampleModalLabel">Kurum Güncelleme</h5>
                                        </div>


                                    </div>
                                    <div class="modal-body">
                                        <form method="POST">
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group">
                                                    <label class="form-control-label">Name</label>
                                                    <input type="text" name="name" class="form-control" id="update_name{{$institution->institution_id}}" value="{{$institution->name}}">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-control-label">Description</label>
                                                    <input type="text"name="description" class="form-control" id="update_description{{$institution->institution_id}}" value="{{$institution->description}}">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-control-label">Phone</label>
                                                    <input type="text"name="phone" class="form-control" id="update_phone{{$institution->institution_id}}" value="{{$institution->phone}}">
                                                </div>
                                                <div class="form-group">
                                                    <label  class="form-control-label">Fax</label>
                                                    <input type="text"name="fax" class="form-control" id="update_fax{{$institution->institution_id}}" value="{{$institution->fax}}">
                                                </div>
                                            </div >

                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group">
                                                    <label  class="form-control-label">Mail</label>
                                                    <input type="text"name="mail" class="form-control" id="update_mail{{$institution->institution_id}}" value="{{$institution->mail}}">
                                                </div>
                                                <div class="form-group">
                                                    <label  class="form-control-label">Il</label><br/>
                                                    <select class="form-control city_id"  name="{{$institution->institution_id}}">
                                                        @foreach($cities as $city)
                                                            @if($institution->town->city->name == $city->name)
                                                            <option value="{{$city->city_id}}" selected>{{$city->name}}</option>
                                                            @endif
                                                            <option value="{{$city->city_id}}">{{$city->name}}</option>

                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label  class="form-control-label">Ilçe</label><br/>
                                                    <select class="form-control" id="town_id_{{$institution->institution_id}}" name="town_id">
                                                    </select>
                                                </div>
                                            </div >
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <div class=" col-md-12">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Vazgeç</button>
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <button type="button" class="btn btn-info institution_update" name="{{$institution->institution_id}}">Güncelle</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <button  class="btn btn-danger  btn-simple btn-xs" data-toggle="modal" data-target="#silme_{{$institution->institution_id}}" ><i class="material-icons">delete</i></button></td>

                        <div class="modal fade" id="silme_{{$institution->institution_id}}">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Hastane Sil</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Bu hastane silinecektir. Emin misiniz ?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger institution_delete" name="{{$institution->institution_id}}">Sil</button>
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
        function getTown(city_id,institution_id) {
            if (city_id > 0) {
                $("#town_id_"+institution_id).get(0).options.length = 0;
                $("#town_id_"+institution_id).get(0).options[0] = new Option("Yükleniyor", "-1");
                $.ajax({
                    type: "GET",
                    url: "{{url('getTowns/')}}"+"/"+city_id,
                    contentType: "application/json; charset=utf-8",

                    success: function(msg) {
                        $("#town_id_"+institution_id).get(0).options.length = 0;
                        $("#town_id_"+institution_id).get(0).options[0] = new Option("Seçiniz", "-1");

                        $.each(msg, function(index, town) {
                            $("#town_id_"+institution_id).get(0).options[$("#town_id_"+institution_id).get(0).options.length] = new Option(town.name, town.town_id);
                        });
                        $('.selectpicker').selectpicker('refresh');
                    },
                    async: false,
                    error: function() {
                        $("#town_id_"+institution_id).get(0).options.length = 0;
                        alert("Ilçeler yükelenemedi!!!");
                    }
                });
            }
            else {
                $("#town_id"+institution_id).get(0).options.length = 0;
            }
        }
        $( document ).ready(function() {
            getTown(1,0);


            $('.city_id').on('change', function (e) {
                var city_id = e.target.value;
                var institution_id = e.target.name;
                getTown(city_id,institution_id);
            });
        });

        $(".btnGuncelle").click(function () {
                var institution_id= $(this).attr("institution_id");
                var city= $(this).attr("city");
                var town= $(this).attr("town");
                getTown(city,institution_id);
                $("#town_id_"+institution_id).val(town);
            }
        );


        $("#institution_add").click(function(e) {

            var name = $("#name").val();
            var description = $("#description").val();
            var town_id = $("#town_id_0").val();
            var mail = $("#mail").val();
            var phone = $("#phone").val();
            var fax = $("#fax").val();
            var token = $("#_token").val();
            $.ajax({
                type: "POST",
                url: "{{url('addInstitution')}}",
                data	:  {
                    "name": name,
                    "description": description,
                    "town_id": town_id,
                    "mail": mail,
                    "phone": phone,
                    "fax":fax,
                    "_token":token
                },

                success: function(msg) {
                    console.log(reply);

                },
                async: false,
                error: function() {
                    alert("Ekleme tamamlanamadı!!!");
                }
            });
            location.reload();
        });

        $(".institution_update").click(function(e) {
            var institution_id = this.name;
            var name = $("#update_name"+institution_id).val();
            var description = $("#update_description"+institution_id).val();
            var town_id = $("#town_id_"+this.name).val();
            var mail = $("#update_mail"+institution_id).val();
            var phone = $("#update_phone"+institution_id).val();
            var fax = $("#update_fax"+institution_id).val();
            var token = $("#_token").val();
            $.ajax({
                type: "POST",
                url: "{{url('updateInstitution')}}",
                data	:  {
                    "institution_id":institution_id,
                    "name": name,
                    "description": description,
                    "town_id": town_id,
                    "mail": mail,
                    "phone": phone,
                    "fax":fax,
                    "_token":token
                },

                success: function(msg) {
                    console.log(reply);

                },
                async: false,
                error: function() {
                    alert("Güncelleme tamamlanamadı!!!");
                }
            });
            location.reload();
        });
        $(".institution_delete").click(function(e) {
            var institution_id = this.name;
            var token = $("#_token").val();
            $.ajax({
                type: "POST",
                url: "{{url('deleteInstitution')}}",
                data	:  {
                    "institution_id":institution_id,
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
    </script>

@endsection