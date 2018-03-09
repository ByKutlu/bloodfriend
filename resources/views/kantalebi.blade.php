@extends('main_template')
@section('nav')
<ul class="nav">
                <li>
                    <a href="http://localhost/bloodfriend/public/">
                        <i class="material-icons">home</i>
                        <p>Ana Sayfa</p>
                    </a>
                </li>
                <li class="active" data-color="red">
                    <a href="http://localhost/bloodfriend/public/kantalebi">
                        <i class="material-icons">favorite</i>
                        <p>Kan Talebi</p>
                    </a>
                </li>
                <li>
                    <a href="http://localhost/bloodfriend/public/kantalebilistesi">
                    <i class="material-icons">assignment</i>
                        <p>Kan Talep Listesi</p>
                    </a>
                </li>
                <li>
                    <a href="http://localhost/bloodfriend/public/calisan">
                        <i class="material-icons">person</i>
                        <p>Çalışanlar</p>
                    </a>
                </li>
                <li>
                    <a href="http://localhost/bloodfriend/public/kurum">
                    <i class="material-icons">account_balance</i>
                        <p>Kurumlar</p>
                    </a>
                </li>
                <li>
                    <a href="http://localhost/bloodfriend/public/hakkimizda">
                    <i class="material-icons">new_releases</i>
                        <p>Hakkımızda</p>
                    </a>
                </li>
                <li>
                    <a href="http://localhost/bloodfriend/public/ayarlar">
                        <i class="material-icons">settings</i>
                        <p>Ayarlar</p>
                    </a>
                </li>
                
            </ul>
@endsection
@section('title')
    Kan Talep
@endsection
@section('content')
<div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-10">
                            <div class="card">
                                <div class="card-header" data-background-color="red">
                                    <h4 class="title">Kan Talep</h4>
                                    <p class="category">Kan Talebi Oluşturun !</p>
                                </div>
                                <div class="card-content">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Çalışan Adı</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Çalışan Soyadı</label>
                                                    <input type="email" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-10">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Kaç ünite talep ediyorsun ?</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                        
                                            <div class="col-md-10">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Kaç ünite talep ediyorsun ?</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label"><h5>Kan Grubunu Seçiniz !</h5></label>
                                                    </div> <ul class="nav nav-pills nav-pills-danger"> <br>
                                                <li class="active"><a href="#pill1" data-toggle="tab">A RH(+)</a></li>
                                                <li><a href="#pill2" data-toggle="tab">A RH(-)</a></li>
                                                <li><a href="#pill3" data-toggle="tab">B RH(+)</a></li>
                                                <li><a href="#pill4" data-toggle="tab">B RH(-)</a></li>
                                                <li><a href="#pill5" data-toggle="tab">0 RH(+)</a></li>
                                                <li><a href="#pill6" data-toggle="tab">0 RH(-)</a></li>
                                                <li><a href="#pill7" data-toggle="tab">AB RH(+)</a></li>
                                                <li><a href="#pill8" data-toggle="tab">AB RH(-)</a></li>
                                                </ul>
                                            </div>
                                        <div class="col-md-2">
                                                <div class="form-group label-floating">
                                                    <label class="control-label"><h5>Kan Tipini Seçiniz !</h5></label>
                                                    </div> <ul class="nav nav-pills nav-pills-warning"> <br>
                                                <li class="active"><a href="#pill1" data-toggle="tab">Tam Kan</a></li>
                                                <li><a href="#pill2" data-toggle="tab">Tramposit</a></li>
                                                <li><a href="#pill3" data-toggle="tab">Kök Hücre</a></li>
                                                </ul>
                                            </div>
                                            </div>
                                        <button type="submit" class="btn btn-info pull-right">Kan Talep Et</button>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection