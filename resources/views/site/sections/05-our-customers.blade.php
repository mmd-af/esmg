<section>
    <div class="container py-3">
        <h1 class="text-primary-1">مشتریان ما:</h1>
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
