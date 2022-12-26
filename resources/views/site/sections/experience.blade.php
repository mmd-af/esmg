<section class="my-5" id="pricingTable">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-8">
                <div class="row my-2">
                    <h1>چرا ارم صنعت موج گستر...؟</h1>
                    <img style="border-radius: 30px" height="800px"
                         src="https://dl.musicalacademy.ir/musicalacademy/storage/photos/videocourses/guitarLesonMohammadAfshar.jpg"
                         alt="">
                </div>
            </div>
            <div class="col-sm-12 col-lg-4">
                <div class="row">
                    <div class="col-sm-12 mb-3" onmouseover="testFakhi(1)" onmouseleave="testFakhi2(1)" id="expBox1">
                        <div class="card card-span shadow py-4 h-100 border-top border-4 border-primary-1" style="border-radius: 30px">
                            <div class="card-body">
                                <div class="text-center"><i class="fa fa-cogs fa-2x" aria-hidden="true"></i>
                                    <h3 class="mt-2">تجربه و تخصص</h3>
                                    <p style="font-size: 18px">شرکت ارم صنعت موج گستر با دارا بودن تیمی توانمند از
                                        متخصصین و
                                        سابقه فعالیت صنعتی قابل
                                        توجه، توانایی اجرای خدمات تخصصی در زمینه تولید تجهیزات صنعتی را دارد.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 mb-3" onmouseover="testFakhi(2)" onmouseleave="testFakhi2(2)" id="expBox2">
                        <div class="card card-span shadow py-4 h-100 border-top border-4 border-primary-1" style="border-radius: 30px">
                            <div class="card-body">
                                <div class="text-center"><i class="fa fa-users fa-2x" aria-hidden="true"></i>
                                    <h3 class="mt-2">کار تیمی مؤثر</h3>
                                    <p style="font-size: 18px">فرهنگ سازمانی شرکت ارم صنعت به گونه‌ای پایه‌گذاری شده است
                                        که
                                        تعهد کاری در اولویت
                                        قرار بگیرد. بدین ترتیب همواره سعی ما بر آن است تا در فرایند اجرای هر طرح نهایت
                                        تمرکز و توجه را در راستای رسیدن به هدف مطلوب به کار گیریم.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 mb-3" onmouseover="testFakhi(3)" onmouseleave="testFakhi2(3)" id="expBox3">
                        <div class="card card-span shadow py-4 h-100 border-top border-4 border-primary-1" style="border-radius: 30px">
                            <div class="card-body">
                                <div class="text-center"><i class="fa fa-handshake fa-2x" aria-hidden="true"></i>
                                    <h5 class="mt-3">رضایت مشتری</h5>
                                    <p style="font-size: 18px">شرکت ارم صنعت همواره در تلاش است تا با ارائه خدمات تخصصی
                                        به
                                        بهترین شکل ممکن،
                                        رضایت و وفاداری مشتریان خود را تضمین نماید.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@section('script')
    <script>
        function testFakhi(id) {
            let expBox = document.getElementById(`expBox${id}`);
            // expBox.style.transitionDelay= '250ms';
            expBox.style.scale = 1.1;
        }

        function testFakhi2(id) {
            let expBox = document.getElementById(`expBox${id}`);
            expBox.style.scale = 1;
        }
    </script>
@endsection
