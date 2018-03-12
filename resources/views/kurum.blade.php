@extends('main_template')

@section('title')
    Kurumlar
@endsection
@section('content')


    <div class="col-md-12">
        <div class="card">
            <div class="card-header" data-background-color="red">
                <h4 class="title">Kurumlar</h4>
                <p class="category">Hastaneler hakkinda tüm bilgilere düzenleme yapabilirsiniz !</p>
            </div>
            <div class="card-content table-responsive">
                <div class="card-content">


                    <button class="btn btn-info pull-right" data-toggle="modal" data-target="#ekle">EKLE</button>

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
                                                <label for="recipient-name" class="form-control-label">Name</label>
                                                <input type="text" name="name" class="form-control" id="recipient-name">
                                            </div>
                                            <div class="form-group">
                                                <label for="recipient-name" class="form-control-label">Description</label>
                                                <input type="text"name="description" class="form-control" id="recipient-name">
                                            </div>
                                            <div class="form-group">
                                                <label for="recipient-name" class="form-control-label">Phone</label>
                                                <input type="text"name="phone" class="form-control" id="recipient-name">
                                            </div>
                                            <div class="form-group">
                                                <label for="recipient-name" class="form-control-label">Fax</label>
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
                </div>

            </div>
            <table class="table">
                <thead class="text-danger">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Mail</th>
                    <th>Phone</th>
                    <th>Fax</th>
                    <th>Detayli Görme</th>
                    <th>Güncelle Islemi</th>
                    <th>Silme Islemi</th>

                </tr></thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Dokuz Eylül Hastanesi</td>
                    <td>Devlet Hastanesi</td>
                    <td>dokuz.eylülhastesi@deu.edu.tr</td>
                    <td>05545552211</td>
                    <td>05545522233</td>
                    <td>
                        <button type="submit" data-toggle="modal" data-target="#detayli" class="btn btn-info pull-right">Detayli </button></td>
                    <div class="modal fade bd-example-modal-lg" id="detayli" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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
                                                <label name="institution_id">1</label>

                                            </div>
                                            <div class="form-group">
                                                <label>Adi : </label>
                                                <label name="name">Dokuz Eylül Hastanesi</label>

                                            </div>
                                            <div class="form-group">
                                                <label for="recipient-name" class="form-control-label">Description : </label>
                                                <label name="description">Devlet Hastanesi</label>

                                            </div>
                                            <div class="form-group">
                                                <label>Mail : </label>
                                                <label name="mail">dokuz.eylülhastesi@deu.edu.tr</label>

                                            </div>

                                        </div >
                                        <div class="col-lg-6 col-md-12">

                                            <div class="form-group">
                                                <label>Phone : </label>
                                                <label name="phone">05545552211</label>
                                            </div>
                                            <div class="form-group">
                                                <label>Fax : </label>
                                                <label name="fax">05545552233</label>

                                            </div>

                                            <div class="form-group">
                                                <label>Il : </label>
                                                <label name="city_id">Izmir</label>
                                            </div>
                                            <div class="form-group">
                                                <label >Ilçe : </label>
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


                    <td><button type="submit" data-toggle="modal" class="btn btn-success pull-right" data-target="#guncelle">Güncelle </button></td>
                    <div class="modal fade bd-example-modal-lg" id ="guncelle" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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
                                                <label for="recipient-name" class="form-control-label">Name</label>
                                                <input type="text" name="name" class="form-control" id="recipient-name">
                                            </div>
                                            <div class="form-group">
                                                <label for="recipient-name" class="form-control-label">Description</label>
                                                <input type="text"name="description" class="form-control" id="recipient-name">
                                            </div>
                                            <div class="form-group">
                                                <label for="recipient-name" class="form-control-label">Phone</label>
                                                <input type="text"name="phone" class="form-control" id="recipient-name">
                                            </div>
                                            <div class="form-group">
                                                <label for="recipient-name" class="form-control-label">Fax</label>
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


                    <td><button type="submit" class="btn btn-danger pull-right" data-toggle="modal" data-target="#silme" >Sil</button></td>

                    <div class="modal fade" id="silme">
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
                                    <button type="button" class="btn btn-danger ">Sil</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Vazgeç</button>
                                </div>
                            </div>
                        </div>
                    </div>


                </tr>


                </tbody>
            </table>

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