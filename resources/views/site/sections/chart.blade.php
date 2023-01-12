<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            اینجا چی بنویسیم؟
        </div>
        <div class="col-md-6 bg-secondary">
            <canvas id="radarChart"></canvas>
        </div>
    </div>
</div>


@section('script')
    <script>
        var ctxR = document.getElementById("radarChart").getContext('2d');
        var myRadarChart = new Chart(ctxR, {
            type: 'radar',
            data: {
                labels: ["Price", "Quality", "Appearance", "Usability", "Durability", "Support", "Efficiency"],
                datasets: [{
                    label: "Similar Products",
                    data: [65, 59, 90, 81, 56, 55, 40],
                    backgroundColor: [
                        'rgba(105, 0, 132, .2)',
                    ],
                    borderColor: [
                        'rgba(200, 99, 132, .7)',
                    ],
                    borderWidth: 2
                },
                    {
                        label: "ESMG Product",
                        data: [28, 48, 40, 19, 96, 27, 100],
                        backgroundColor: [
                            'rgba(0, 250, 220, .2)',
                        ],
                        borderColor: [
                            'rgba(0, 213, 132, .7)',
                        ],
                        borderWidth: 2
                    }
                ]
            },
            options: {
                responsive: true
            }
        });
    </script>
@endsection
