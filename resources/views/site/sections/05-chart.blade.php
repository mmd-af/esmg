<div class="container-fluid bg-primary-2 reveal-content pb-5">
    <div class="container">
        <div class="row bg-white p-5" style="border-radius: 30px">
            <div class="col-sm-12 col-md-8">
                <h1 class="text-primary-1 animateForLanding">مقایسه محصول</h1>
                <img class="img-fluid" src="http://127.0.0.1:8000/img/favicons/favicon.ico" alt="">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias facilis fugit maiores pariatur, porro
                praesentium repellat. Dignissimos eligendi enim est eum, facere numquam odit quas quos ratione, tempore
                velit vero.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti, necessitatibus reprehenderit?
                Aperiam deleniti dicta eius facere nulla obcaecati possimus rerum sint sunt ut! Doloribus hic minima
                possimus praesentium quasi sint!
            </div>
            <div class="col-sm-12 col-md-4 content-zoom">
                <canvas id="radarChart"></canvas>
            </div>
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
                    data: [65, 59, 75, 81, 56, 55, 40],
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
                        data: [28, 48, 65, 60, 70, 55, 70],
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
