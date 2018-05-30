@extends('main_template')

@section('title')

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
                    <i class="material-icons">whatshot</i>
                </div>
                <div class="card-content">
                    <p class="category">Kan Bağışları</p>
                    <h3 class="title">{{$attendanceCompletedCount}}</h3>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        Toplam bağışlanan ünite sayısı
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
                    <p class="category">Kabul Edilenler</p>
                    <h3 class="title">{{$acceptedCount}}</h3>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        Toplam kabul edilen teklif sayısı
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
                    <p class="category">Red Edilenler</p>
                    <h3 class="title">{{$rejectedCount}}</h3>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        Toplam red edilen teklif sayısı
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header" data-background-color="red">
                    <i class="material-icons">person</i>
                </div>
                <div class="card-content">
                    <p class="category">Çalışan Sayısı</p>
                    <h3 class="title">{{$employeeCount}}
                        <small></small>
                    </h3>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        Bu kurumdaki toplam çalışan sayısı
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header card-chart" data-background-color="green">
                    <div class="ct-chart" id="dailySalesChart"></div>
                </div>
                <div class="card-content">
                    <h4 class="title">Taleplere göre olumlu dönüşler</h4>
                    <p class="category">
                         Gelen bildirime olumlu cevap verenlerin sayısı</p>
                </div>

            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header card-chart" data-background-color="red">
                    <div class="ct-chart" id="completedTasksChart"></div>
                </div>
                <div class="card-content">
                    <h4 class="title">Taleplere göre yapılan bağışlar</h4>
                    <p class="category">Olumlu dönüş yapanlar arasından kan vermeye gelenlerin sayısı</p>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
    <script type="text/javascript">
        $(document).ready(function() {

            // Javascript method's body can be found in assets/js/demos.js
            //demo.initDashboardPageCharts();

            /* ----------==========     Daily Sales Chart initialization    ==========---------- */

            var dailyLabels=[];
            var acceptedCount=[];
            var rejectedCount=[];
            @for ($i = count($bloodRequests)-1; $i >= 0; $i--)
                dailyLabels.push({{$bloodRequests[$i]->blood_request_id}});
                acceptedCount.push({{$bloodRequests[$i]->acceptedCount()}});
                rejectedCount.push({{$bloodRequests[$i]->completedCount()}});
            @endfor

            dataDailySalesChart = {
                labels: dailyLabels,
                series: [
                    acceptedCount
                ]
            };

            optionsDailySalesChart = {
                lineSmooth: Chartist.Interpolation.cardinal({
                    tension: 0
                }),
                low: 0,
                high: 5, // creative tim: we recommend you to set the high sa the biggest value + something for a better look
                chartPadding: {
                    top: 0,
                    right: 0,
                    bottom: 0,
                    left: 0
                }
            };

            var dailySalesChart = new Chartist.Line('#dailySalesChart', dataDailySalesChart, optionsDailySalesChart);

            md.startAnimationForLineChart(dailySalesChart);

            /* ----------==========     Completed Tasks Chart initialization    ==========---------- */

            dataCompletedTasksChart = {
                labels: dailyLabels,
                series: [
                    rejectedCount
                ]
            };

            optionsCompletedTasksChart = {
                lineSmooth: Chartist.Interpolation.cardinal({
                    tension: 0
                }),
                low: 0,
                high: 5, // creative tim: we recommend you to set the high sa the biggest value + something for a better look
                chartPadding: {
                    top: 0,
                    right: 0,
                    bottom: 0,
                    left: 0
                }
            };

            var completedTasksChart = new Chartist.Line('#completedTasksChart', dataCompletedTasksChart, optionsCompletedTasksChart);

            // start animation for the Completed Tasks Chart - Line Chart
            md.startAnimationForLineChart(completedTasksChart);
        });
    </script>
@endsection