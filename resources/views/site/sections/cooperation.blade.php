<section class="pb-lg-0 pt-md-8 py-0">
    <div class="container">
        <div class="row align-items-center justify-content-xl-between py-5 border-klean">
            @foreach ($projects as $project)
                <div class="col-auto col-md-4 col-lg-auto my-3 text-xl-start">
                    <img class="" width="100px" src="{{ asset('upload/projects/' . $project->logo_image) }}" alt="{{ $project->project_name }}">
                </div>
            @endforeach
        </div>
    </div>
    <!-- end of .container-->
</section>
