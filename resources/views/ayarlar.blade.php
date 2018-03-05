@extends('main_template')
@section('nav')
<ul class="nav">
                <li>
                    <a href="http://localhost/bloodfriend/public/">
                        <i class="material-icons">home</i>
                        <p>Ana Sayfa</p>
                    </a>
                </li>
                <li>
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
                <li class="active" data-color="red">
                    <a href="http://localhost/bloodfriend/public/ayarlar">
                        <i class="material-icons">settings</i>
                        <p>Ayarlar</p>
                    </a>
                </li>
                
            </ul>
@endsection
@section('title')
    Ayarlar
@endsection
@section('content')
<div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="red">
                                    <h4 class="title">Profili Düzenle</h4>
                                    <p class="category">Profilinizi Tamamlayın !</p>
                                </div>
                                <div class="card-content">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Name</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Surname</label>
                                                    <input type="email" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Gender</label>
                                                    <input type="email" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Username</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Password</label>
                                                    <input type="email" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Blood Group</label>
                                                    <input type="email" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Date of Birth</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Phone Number</label>
                                                    <input type="email" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Mail</label>
                                                    <input type="email" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-md-12">
                                            <div class="form-group label-floating">
                                                    <label class="control-label">Address</label>
                                                    <input type="email" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-success pull-right">Update Profile</button>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection