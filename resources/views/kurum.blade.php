@extends('main_template')

@section('title')
    Kurumlar
@endsection
@section('content')
<div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="red">
                                    <h4 class="title">Kurumlar</h4>
                                    <p class="category">Hastaneler hakkında tüm bilgilere düzenleme yapabilirsiniz !</p>
                                </div>
                                <div class="card-content table-responsive">


                                    <div class="card-content">

                                        <form action="{{url("addInstitution")}}" method="post">
                                            <div class="row">

                                                <div class="col-md-3">
                                                    <div class="form-group label-floating is-empty">
                                                        <label class="control-label">Name</label>
                                                        <input type="text" class="form-control" name="name">
                                                        <span class="material-input"></span></div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group label-floating is-empty">
                                                        <label class="control-label">Description</label>
                                                        <input type="text" class="form-control" name="description">
                                                        <span class="material-input"></span></div>
                                                </div>

                                                <div class="col-md-3">
                                                <div class="form-group">
                                                    <select class="form-control" id="city_id">
                                                        @foreach($cities as $city)
                                                        <option value="{{$city->city_id}}">{{$city->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                </div>
                                                <div class="col-md-3">
                                                <div class="form-group">
                                                    <select class="form-control" id="town_id" name="town_id">
                                                    </select>
                                                </div>
                                                </div>



                                                <div class="col-md-3">
                                                    <div class="form-group label-floating is-empty">
                                                        <label class="control-label">Address</label>
                                                        <input type="text" class="form-control" name="address">
                                                        <span class="material-input"></span></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group label-floating is-empty">
                                                        <label class="control-label">Phone</label>
                                                        <input type="text" class="form-control" name="phone">
                                                        <span class="material-input"></span></div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group label-floating is-empty">
                                                        <label class="control-label">Mail</label>
                                                        <input type="text" class="form-control" name="mail">
                                                        <span class="material-input"></span></div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group label-floating is-empty">
                                                        <label class="control-label" >Fax</label>
                                                        <input type="text" class="form-control" name="fax">
                                                        <span class="material-input"></span>
                                                    </div>
                                                </div>

                                            </div>
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <button type="submit" name="kurum_delete" class="btn btn-danger pull-right">Delete</button>
                                            <button type="submit" name="kurum_update" class="btn btn-success pull-right">Update</button>
                                            <button type="submit" name="kurum_add" class="btn btn-info pull-right">Add</button>


                                            <div class="clearfix"></div>
                                        </form>
                                    </div>
                                    <table class="table">
                                        <thead class="text-danger">
                                            <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>il</th>
                                            <th>ilçe</th>
                                            <th>Phone</th>
                                            <th>Mail</th>
                                            <th>Fax</th>
                                        </tr></thead>
                                        <tbody>
                                        @foreach($institutions as $institution)
                                            <tr>
                                                <td>{{$institution->institution_id}}</td>
                                                <td>{{$institution->name}}</td>
                                                <td>{{$institution->description}}</td>
                                                <td>{{$institution->town->city->name}}</td>
                                                <td>{{$institution->town->name}}</td>
                                                <td>{{$institution->mail}}</td>
                                                <td>{{$institution->phone}}</td>
                                                <td>{{$institution->fax}}</td>
                                            </tr>
                                        @endforeach
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