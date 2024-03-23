<section class="py-5">@extends('frontend/layout/main')

    @section('content')

    <div class="container px-5 my-5">
        <div class="row gx-5">

            <div class="col-lg-12">
                <!-- Post content-->
                <article>
                    <!-- Post header-->
                    <header class="mb-4">
                        <!-- Post title-->
                        <h1 class="fw-bolder mb-1">{{$page->judul_page}}</h1>
                        <!-- Post meta content-->
                        <div class="text-muted fst-italic mb-2">{{$page->created_at}}</div>
                        <!-- Post categories-->
                        <a class="badge bg-secondary text-decoration-none link-light" href="#!">Web Design</a>
                        <a class="badge bg-secondary text-decoration-none link-light" href="#!">Freebies</a>
                    </header>

                    <section class="mb-5">
                        <p class="fs-5 mb-4">{!! $page->isi_page !!}</p>
                         </section>
                </article>
                <!-- Comments section-->

            </div>
        </div>
    </div>
</section>
@endsection
