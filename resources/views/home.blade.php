@extends('main_template')

@section('title')
    Blood Friend
@endsection
@section('content')





    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header" data-background-color="red">
                    <i class="material-icons">favorite</i>
                </div>
                <div class="card-content">
                    <p class="category">Kan Sayısı</p>
                    <h3 class="title">303/500
                        <small></small>
                    </h3>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        Stokta bulunan kan sayısı
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header" data-background-color="red">
                    <i class="material-icons">opacity</i>
                </div>
                <div class="card-content">
                    <p class="category">Tam Kan</p>
                    <h3 class="title">128/303</h3>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        Stokta bulunan tam kan sayısı
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header" data-background-color="red">
                    <i class="material-icons">whatshot</i>
                </div>
                <div class="card-content">
                    <p class="category">Tramposit</p>
                    <h3 class="title">100/303</h3>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        Stokta bulunan tramposit sayısı
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header" data-background-color="red">
                    <i class="material-icons">group_work</i>
                </div>
                <div class="card-content">
                    <p class="category">Kök Hücre</p>
                    <h3 class="title">75/303</h3>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        Stokta bulunan kök hücre sayısı
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header card-chart" data-background-color="green">
                    <div class="ct-chart" id="dailySalesChart"></div>
                </div>
                <div class="card-content">
                    <h4 class="title">Günlere göre Toplam Kan Sayısı</h4>
                    <p class="category">
                        Bugün <span class="text-success"><i class="fa fa-long-arrow-up"></i> 55% </span> artış gösterdi </p>
                </div>

            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header card-chart" data-background-color="orange">
                    <div class="ct-chart" id="emailsSubscriptionChart"></div>
                </div>
                <div class="card-content">
                    <h4 class="title">Aylara göre Toplam Kan Sayısı</h4>
                    <p class="category">Geçen aylarda toplanan kan ünite sayıları</p>
                </div>

            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header card-chart" data-background-color="red">
                    <div class="ct-chart" id="completedTasksChart"></div>
                </div>
                <div class="card-content">
                    <h4 class="title">Completed Tasks</h4>
                    <p class="category">Last Campaign Performance</p>
                </div>
            </div>
        </div>
    </div>






@endsection

@section('javascript')

    <script type="text/javascript">
        $(document).ready(function() {

            // Javascript method's body can be found in assets/js/demos.js
            demo.initDashboardPageCharts();

        });
    </script>
@endsection