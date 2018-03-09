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
                <li class="active" data-color="red">
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
    Çalışanlar
@endsection
@section('content')
<div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="red">
                                    <h4 class="title">Çalışanlar</h4>
                                    <p class="category">Hastane çalışanları hakkında tüm bilgilere düzenleme yapabilirsiniz !</p>
                                </div>
                                <div class="card-content table-responsive">
                                    <div class="card-content">

                                        <form>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">ID</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Name</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Surname</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Username</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Password</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Gender</label>
                                                        <input type="email" class="form-control">
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Blood Group</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Date of Birth</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Phone Number</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Mail</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Address</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>


                                            <button type="submit" class="btn btn-danger pull-right">Delete</button>
                                            <button type="submit" class="btn btn-success pull-right">Update </button>
                                            <button type="submit" class="btn btn-info pull-right">Add</button>
                                            <div class="clearfix"></div>

                                        </form>

                                    </div>

                                    <table class="table">
                                        <thead class="text-danger">
                                            <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Surname</th>
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>Gender</th>
                                            <th>Blood Group</th>
                                            <th>Date of Birth</th>
                                            <th>Phone</th>
                                            <th>Mail</th>
                                            <th>Address</th>
                                        </tr></thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Emrah</td>
                                                <td>Emrem</td>
                                                <td>emrahemrem</td>
                                                <td>12345</td>
                                                <td>Bay</td>
                                                <td>A Rh(+)</td>
                                                <td>01.01.1992</td>
                                                <td>05545552211</td>
                                                <td>emrahemremm@gmail.com</td>
                                                <td>Bornova İzmir</td>
                                            </tr>

                                            <tr>
                                                <td>2</td>
                                                <td>Osman</td>
                                                <td>Kutlu</td>
                                                <td>osmankutlu</td>
                                                <td>12345</td>
                                                <td>Bay</td>
                                                <td>A Rh(-)</td>
                                                <td>01.01.1995</td>
                                                <td>05545552211</td>
                                                <td>kutluosman@gmail.com</td>
                                                <td>Tavşanlı Kütahya</td>
                                            </tr>
                                            
                                            <tr>
                                                <td>3</td>
                                                <td>Sercan</td>
                                                <td>Oktay</td>
                                                <td>sercanoktay</td>
                                                <td>12345</td>
                                                <td>Bay</td>
                                                <td>0 Rh(+)</td>
                                                <td>01.01.1994</td>
                                                <td>05545552211</td>
                                                <td>sercankutlu@gmail.com</td>
                                                <td>Buca İzmir</td>
                                            </tr>
                                            
                                            
                                            
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>



                        
@endsection