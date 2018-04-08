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
                                    <form method="POST">
                                        <div class="col-lg-6 col-md-12">
                                            <div class="form-group">
                                                <label for="recipient-name" class="form-control-label">Adı</label>
                                                <input type="text" name="name" class="form-control" id="recipient-name">
                                            </div>
                                            <div class="form-group">
                                                <label for="recipient-name" class="form-control-label">Ayrıntılar</label>
                                                <input type="text"name="description" class="form-control" id="recipient-name">
                                            </div>
                                            <div class="form-group">
                                                <label for="recipient-name" class="form-control-label">Telefon</label>
                                                <input type="text"name="phone" class="form-control" id="recipient-name">
                                            </div>
                                            <div class="form-group">
                                                <label for="recipient-name" class="form-control-label">Faks</label>
                                                <input type="text"name="fax" class="form-control" id="recipient-name">
                                            </div>
                                        </div >

                                        <div class="col-lg-6 col-md-12">
                                            <div class="form-group">
                                                <label for="recipient-name" class="form-control-label">Mail</label>
                                                <input type="text"name="mail" class="form-control" id="recipient-name">
                                            </div>
                                            <div class="form-group">
                                                <label for="recipient-name" class="form-control-label">Il</label><br/>
                                                <select class="form-control" id="city_id">
                                                    @foreach($cities as $city)
                                                        <option value="{{$city->city_id}}">{{$city->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="recipient-name" class="form-control-label">Ilçe</label><br/>
                                                <select class="form-control" id="town_id" name="town_id">
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
                                <th>Ayrıntılar</th>
                                <th>Telefon</th>
                                <th>Faks</th>
                                <th>İşlemler</th>

                            </tr>
                    </thead>
                    <tbody>
                         <tr>
                                <td>1</td>
                                <td>Dokuz Eylül Hastanesi</td>
                                <td>Devlet Hastanesi</td>
                                <td>05545552211</td>
                                <td>05545522233</td>
                             <td>
                                <button button type="button" rel="tooltip" title="" class="btn btn-info btn-simple btn-xs" data-toggle="modal" data-target="#detayli" data-original-title="Detaylar"><i class="material-icons">description</i> </button>
                                <div class="modal fade bd-example-modal-lg" id="detayli" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">

                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <br/>
                                                <div class="card-header" data-background-color="red">
                                                    <h5 class="modal-title" id="exampleModalLabel">Kurum Bilgileri</h5>
                                                </div>


                                            </div>
                                            <div class="modal-body">
                                                <form method="POST">
                                                    <div class="col-lg-6 col-md-12">

                                                        <div class="form-group">
                                                            <label>ID : </label>
                                                            <label name="institution_id">1</label>

                                                        </div>
                                                        <div class="form-group">
                                                            <label>Adi : </label>
                                                            <label name="name">Dokuz Eylül Hastanesi</label>

                                                        </div>
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="form-control-label">Ayrıntılar : </label>
                                                            <label name="description">Devlet Hastanesi</label>

                                                        </div>
                                                        <div class="form-group">
                                                            <label>Mail : </label>
                                                            <label name="mail">dokuz.eylülhastesi@deu.edu.tr</label>

                                                        </div>

                                                    </div >
                                                    <div class="col-lg-6 col-md-12">

                                                        <div class="form-group">
                                                            <label>Telefon : </label>
                                                            <label name="phone">05545552211</label>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Faks : </label>
                                                            <label name="fax">05545552233</label>

                                                        </div>

                                                        <div class="form-group">
                                                            <label>İl : </label>
                                                            <label name="city_id">Izmir</label>
                                                        </div>
                                                        <div class="form-group">
                                                            <label >İlçe : </label>
                                                            <label name="town_id">Balçova</label>
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


                                <button type="button" rel="tooltip" title="" class="btn btn-success btn-simple btn-xs" data-original-title="Güncelle" data-toggle="modal" class="btn btn-success pull-right" data-target="#guncelle" ><i class="material-icons">edit</i> </button>
                                <div class="modal fade bd-example-modal-lg" id ="guncelle" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <br/>
                                                <div class="card-header" data-background-color="red">
                                                    <h5 class="modal-title" id="exampleModalLabel">Kurum Bilgilerini Güncelle</h5>
                                                </div>
                                            </div>
                                            <div class="modal-body">
                                                <form method="POST">
                                                    <div class="col-lg-6 col-md-12">
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="form-control-label">Adı</label>
                                                            <input type="text" name="name" class="form-control" id="recipient-name">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="form-control-label">Ayrıntılar</label>
                                                            <input type="text"name="description" class="form-control" id="recipient-name">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="form-control-label">Telefon</label>
                                                            <input type="text"name="phone" class="form-control" id="recipient-name">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="form-control-label">Faks</label>
                                                            <input type="text"name="fax" class="form-control" id="recipient-name">
                                                        </div>
                                                    </div >

                                                    <div class="col-lg-6 col-md-12">
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="form-control-label">Mail</label>
                                                            <input type="text"name="mail" class="form-control" id="recipient-name">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="form-control-label">Il</label><br/>
                                                            <select class="form-control" id="city_id">
                                                                @foreach($cities as $city)
                                                                    <option value="{{$city->city_id}}">{{$city->name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="form-control-label">Ilçe</label><br/>
                                                            <select class="form-control" id="town_id" name="town_id">
                                                            </select>
                                                        </div>
                                                    </div >
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <div class=" col-md-12">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Vazgeç</button>
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <button type="button" class="btn btn-success">Update</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <button type="button" rel="tooltip" title="" class="btn btn-danger btn-simple btn-xs" data-original-title="Remove" data-toggle="modal" data-target="#silme" data-original-title="Silme" ><i class="material-icons">close</i></button>
                                <div class="modal fade" id="silme">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Kurum Sil</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Bu kurumu silmekten emin misiniz ?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger ">Sil</button>
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Vazgeç</button>
                                            </div>
                                        </div>
                                    </div>
                              </div>
                             </td>
                         </tr>
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