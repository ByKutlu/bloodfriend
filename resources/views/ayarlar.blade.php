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
                                    <form>
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

                                            </div>
                                            <div class="col-md-4">
                                                <label  class="control-label">İlçe</label><br/>
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