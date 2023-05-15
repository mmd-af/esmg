<div class="container-fluid bg-primary-2 reveal-content pb-5">
    <div class="container">
        <div class="row bg-white p-5" style="border-radius: 30px">
            <div class="col-sm-12 col-md-8">
                <h1 class="text-primary-1 animateForLanding">مقایسه محصول</h1>
                <img class="img-fluid" src="http://127.0.0.1:8000/img/favicons/favicon.ico" alt="esmg logo">
                <p>
                    محصولات الکتریکی متنوعی از جمله مبدل های DC-DC و AC-DC توسط این شرکت طراحی و تولید می شوند. مبدل های
                    تولیدی این شرکت کارآمد، قابل اعتماد و بادوام هستند و کاربرد وسیعی در صنایع مختلف دارند. از نظر کیفیت
                    و
                    عملکرد، مبدل های ما نسبت به رقبای خارجی دارای عملکرد قابل قبولی میباشند. برای اطمینان از ایمنی و
                    عملکرد
                    مناسب محصول در طول روند تولید از روش های مهندسی پیشرفته استفاده می شود.با توجه به عملکرد محصولات در
                    شرایط سخت کاربرد محصولات مناسب استفاده در صنایع مختلف شامل صنایع نفت و گاز، حمل ونقل، خدمات شهری می
                    باشند.آموزش های لازم و مشاوره های مورد نیاز در خصوص نحوه استفاده ایمن و موثر از مبدل ها به مشتریان
                    این
                    شرکت به صورت کامل ارئه می گردد و همچنین با توجه به کیفیت ساخت محصولات و قابلیت رقابت با نمونه خارجی
                    امکان ارائه گارانتی معتبر و طولانی مدت وجود دارد.
                </p>
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
