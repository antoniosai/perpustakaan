@extends('templates.backend.layout')

@section('title')
Dashboard
@endsection

@section('content')
<div class="container">
    <div class="col-md-12">

        <div class="infobox infobox-green">
            <div class="infobox-icon">
                <i class="ace-icon fa fa-users"></i>
            </div>

            <div class="infobox-data">
                <span class="infobox-data-number">{{ count($user) }}</span>
                <div class="infobox-content">perujuk terdaftar</div>
            </div>

        </div>

        <div class="infobox infobox-blue">
            <div class="infobox-icon">
                <i class="ace-icon fa fa-book"></i>
            </div>

            <div class="infobox-data">
                <span class="infobox-data-number">{{ count($book) }}</span>
                <div class="infobox-content">Buku terdaftar <a href="">detail</a></div>
            </div>

        </div>

        <div class="infobox infobox-pink">
            <div class="infobox-icon">
                <i class="ace-icon fa fa-shopping-cart"></i>
            </div>

            <div class="infobox-data">
                <span class="infobox-data-number">8</span>
                <div class="infobox-content">new orders</div>
            </div>
            <div class="stat stat-important">4%</div>
        </div>

        <div class="infobox infobox-red">
            <div class="infobox-icon">
                <i class="ace-icon fa fa-flask"></i>
            </div>

            <div class="infobox-data">
                <span class="infobox-data-number">7</span>
                <div class="infobox-content">experiments</div>
            </div>
        </div>

        <div class="infobox infobox-orange2">
            <div class="infobox-chart">
                <span class="sparkline" data-values="196,128,202,177,154,94,100,170,224"></span>
            </div>

            <div class="infobox-data">
                <span class="infobox-data-number">6,251</span>
                <div class="infobox-content">pageviews</div>
            </div>

            <div class="badge badge-success">
                7.2%
                <i class="ace-icon fa fa-arrow-up"></i>
            </div>
        </div>

    </div>

    <div class="col-sm-6">
        <div class="widget-box transparent">
            <div class="widget-header widget-header-flat">
                <h4 class="widget-title lighter">
                    <i class="ace-icon fa fa-signal"></i>
                    Rujukan Buku
                </h4>

                <div class="widget-toolbar">
                    <a href="#" data-action="collapse">
                        <i class="ace-icon fa fa-chevron-up"></i>
                    </a>
                </div>
            </div>

            <div class="widget-body">
                <div class="widget-main padding-4">
                    <canvas id="rujukan" height="150px"></canvas>
                </div><!-- /.widget-main -->
            </div><!-- /.widget-body -->
        </div><!-- /.widget-box -->
    </div><!-- /.col -->

    <div class="col-sm-6">
        <div class="widget-box transparent">
            <div class="widget-header widget-header-flat">
                <h4 class="widget-title lighter">
                    <i class="ace-icon fa fa-signal"></i>
                    Kategori
                </h4>

                <div class="widget-toolbar">
                    <a href="#" data-action="collapse">
                        <i class="ace-icon fa fa-chevron-up"></i>
                    </a>
                </div>
            </div>

            <div class="widget-body">
                <div class="widget-main padding-4">
                    <canvas id="category" height="150px"></canvas>
                </div><!-- /.widget-main -->
            </div><!-- /.widget-body -->
        </div><!-- /.widget-box -->
    </div><!-- /.col -->

</div>
@endsection

@section('custom_scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>

<script>
    var ctx = document.getElementById("rujukan");
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: [
                @foreach($user as $listUser)
                "{{ $listUser->name}} ({{ count($listUser->buku) }})",
                @endforeach
            ],
            datasets: [{
                    label: '# no Buku',
                    data: [
                        @foreach($user as $noPerujuk)
                        {{ count($noPerujuk->buku) }},
                        @endforeach
                    ],
                    backgroundColor: [
                        @for($i=0;$i<count($user);$i++)
                        'rgba({{ rand(0,255) }}, {{ rand(0,255) }}, {{ rand(0,255) }}, 0.2)'
                        @endfor
                    ],
                    borderWidth: 2
                }]
        },
        options: {
            scales: {
                yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
            }
        }
    });
</script>

<script>
    var ctx = document.getElementById("category");
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: [
                @foreach($categories as $category)
                "{{ $category->name}} ({{ count($category->buku) }})",
                @endforeach
            ],
            datasets: [{
                    label: '# no Buku',
                    data: [
                        @foreach($categories as $noBuku)
                        {{ count($noBuku->buku) }},
                        @endforeach
                    ],
                    backgroundColor: [
                        @for($i=0;$i<count($user);$i++)
                        'rgba({{ rand(0,255) }}, {{ rand(0,255) }}, {{ rand(0,255) }}, 0.2)'
                        @endfor
                    ],
                    borderWidth: 2
                }]
        },
        options: {
            scales: {
                yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
            }
        }
    });
</script>
@endsection