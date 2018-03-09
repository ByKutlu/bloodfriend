@extends('main_template')

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

            
            <button class="btn btn-info pull-right" data-toggle="modal" data-target=".bd-example-modal-lg">EKLE</button>

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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
                            <input type="text"name="blood_group" class="form-control" id="recipient-name">
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
                            <select class="form-control" id="sel1">
                                <option>Adana</option>
                                <option>Afyon</option>
                                <option>Aydın</option>
                                <option>İzmir</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="form-control-label">İlçe</label><br/>
                            <button class="btn btn-warning btn-sm" type="button"> LÜTFEN İLÇESİNİ SEÇİNİZ </button>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="form-control-label">Kurum</label><br/>
                            <button class="btn btn-warning btn-sm" type="button"> LÜTFEN Kurumunu SEÇİNİZ </button>
                        </div>
                        
                        </div >
                        </form>
                    </div>
                    <div class="modal-footer">
                    <div class=" col-md-12">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Vazgeç</button>
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
                                            <th>Surname</th>
                                            <th>Gender</th>
                                            <th>Blood Group</th>
                                            <th>Phone</th>
                                            <th>Detaylı Görme</th>
                                            <th>Güncelle İşlemi</th>
                                            <th>Silme İşlemi</th>
                                            
                                        </tr></thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Emrah</td>
                                                <td>Emrem</td>
                                                <td>Bay</td>
                                                <td>A Rh(+)</td>
                                                <td>05545552211</td>
                                                <td><button type="submit" class="btn btn-info pull-right">Detaylı </button></td>
                                                <td><button type="submit" class="btn btn-success pull-right">Güncelle </button></td>
                                                <td><button type="submit" class="btn btn-danger pull-right">Sil</button></td>
                                            </tr>
                                            
                                            

                                            <tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Osman</td>
                                                <td>Kutlu</td>
                                                <td>Bay</td>
                                                <td>0 Rh(+)</td>
                                                <td>05545552211</td>
                                                <td><button type="submit" class="btn btn-info pull-right">Detaylı </button></td>
                                                <td><button type="submit" class="btn btn-success pull-right">Güncelle </button></td>
                                                <td><button type="submit" class="btn btn-danger pull-right">Sil</button></td>
                                            </tr>
                                            </tr>
                                            
                                            <tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Necdet</td>
                                                <td>Güray</td>
                                                <td>Bayan</td>
                                                <td>AB Rh(+)</td>
                                                <td>09000707517</td>
                                                <td><button type="submit" class="btn btn-info pull-right">Detaylı </button></td>
                                                <td><button type="submit" class="btn btn-success pull-right">Güncelle </button></td>
                                                <td><button type="submit" class="btn btn-danger pull-right">Sil</button></td>
                                            </tr>
                                            </tr>
                                            
                                            
                                            
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>



                        
@endsection