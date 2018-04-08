@extends('main_template')

@section('title')

@endsection
@section('content')


    <div class="col-md-12">
        <div class="card">
            <div class="card-header" data-background-color="red">
                <h4 class="title">Kan Talep Listesi</h4>
                <p class="category">Talep edilen tüm kanlar hakkında tüm bilgilere görebilir ve düzenleme yapabilirsiniz !</p>

            </div>
            <div class="card-content table-responsive">
             <div class="card-content">
                <table class="table">
                <thead class="text-danger">
                <tr>
                    <th>ID</th>
                    <th>Çalışan Adı</th>
                    <th>Çalışan Soyadı</th>
                    <th>Kan Ünite Sayısı</th>
                    <th>Kan Grubu</th>
                    <th>Kan Tipi</th>
                    <th>İşlemler</th>
                </tr></thead>
                <tbody>
                <tr>

                    <td>1</td>
                    <td>Emrah</td>
                    <td>Emrem</td>
                    <td>4</td>
                    <td>A Rh(+)</td>
                    <td>Tam Kan</td>



                    <td><button type="button" rel="tooltip" title="" class="btn btn-success btn-simple btn-xs" data-original-title="Güncelle" data-toggle="modal" class="btn btn-success pull-right" data-target="#guncelle" ><i class="material-icons">edit</i> </button>
                        <div class="modal fade" id="guncelle">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">

                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button><br/>
                                    <div class="card-header" data-background-color="red">
                                        <h5 class="modal-title" id="exampleModalLabel">Kan Talep Bilgilerini Güncelle</h5>
                                    </div>

                                    <div class="modal-body">
                                        <form method="POST">
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group">
                                                    <label for="recipient-name" class="form-control-label">Çalışan Adı</label>
                                                    <input type="text" name="name" class="form-control" id="recipient-name">
                                                </div>
                                                <div class="form-group">
                                                    <label for="recipient-name" class="form-control-label">Çalışan Soyadı</label>
                                                    <input type="text"name="surname" class="form-control" id="recipient-name">
                                                </div>
                                                <div class="form-group">
                                                    <label for="recipient-name" class="form-control-label">Kan Ünite Sayısı</label>
                                                    <input type="text"name="username" class="form-control" id="recipient-name">
                                                </div>
                                            </div >
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group">
                                                    <label for="recipient-name" class="form-control-label">Kan Grubu</label>
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
                                                <div class="form-group">
                                                    <label for="recipient-name" class="form-control-label">Kan Tipi</label>
                                                    <select class="form-control" id="blood_type">
                                                        <option value="Tam Kan">Tam Kan</option>
                                                        <option value="Tramposit">Tramposit</option>
                                                        <option value="Kök Hücre">Kök Hücre</option>
                                                      </select>
                                                </div>
                                            </div >
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <div class=" col-md-12">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Vazgeç</button>
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <button type="button" class="btn btn-success">Güncelle</button>
                                        </div>
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
                                    <h5 class="modal-title">Kan Talebi Sil</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Kan talebi silinecektir. Emin misiniz ?</p>
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
        </div>
    </div>
    </div>




@endsection

