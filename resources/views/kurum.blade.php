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
                <li class="active" data-color="red">
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

                                        <form>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group label-floating is-empty">
                                                        <label class="control-label">ID</label>
                                                        <input type="text" class="form-control">
                                                        <span class="material-input"></span></div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group label-floating is-empty">
                                                        <label class="control-label">Name</label>
                                                        <input type="text" class="form-control">
                                                        <span class="material-input"></span></div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group label-floating is-empty">
                                                        <label class="control-label">Description</label>
                                                        <input type="text" class="form-control">
                                                        <span class="material-input"></span></div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group label-floating is-empty">
                                                        <label class="control-label">Address</label>
                                                        <input type="text" class="form-control">
                                                        <span class="material-input"></span></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group label-floating is-empty">
                                                        <label class="control-label">Phone</label>
                                                        <input type="text" class="form-control">
                                                        <span class="material-input"></span></div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group label-floating is-empty">
                                                        <label class="control-label">Mail</label>
                                                        <input type="text" class="form-control">
                                                        <span class="material-input"></span></div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group label-floating is-empty">
                                                        <label class="control-label">Fax</label>
                                                        <input type="text" class="form-control">
                                                        <span class="material-input"></span>
                                                    </div>
                                                </div>

                                            </div>
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
                                            <th>Address</th>
                                            <th>Phone</th>
                                            <th>Mail</th>
                                            <th>Fax</th>
                                        </tr></thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Dokuz Eylül Üniversitesi Hastanesi</td>
                                                <td>İzmir de bulunan hastane</td>
                                                <td>İzmir Balçova</td>
                                                <td>02324122222</td>
                                                <td>info@dokuzylulhastanesi.org</td>
                                                <td>02323737579</td>
                                            </tr>
                                            <tr>
                                            <td>2</td>
                                                <td>Ege Üniversitesi Hastanesi</td>
                                                <td>İzmir de bulunan hastane</td>
                                                <td>İzmir Bornova</td>
                                                <td>02323737272</td>
                                                <td>info@egeuniversitesihastanesi.org</td>
                                                <td>02323737274</td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>



                        
@endsection