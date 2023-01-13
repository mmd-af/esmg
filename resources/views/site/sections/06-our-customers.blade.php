<div class="container-fluid py-3 bg-white reveal-content">
    <div class="container">
        <h1 class="text-primary-1">مشتریان ما:</h1>
        <div class="row">
            @foreach ($projects as $project)
                <div class="col-xs-6 col-md-4 col-lg-3 text-center p-5 content-zoom">
                    <img class="img-fluid w-50 rounded-circle border border-3 border-primary-1" src="{{ asset('upload/projects/' . $project->logo_image) }}"
                         alt="{{ $project->project_name }}">
                </div>
            @endforeach
        </div>
    </div>
</div>
