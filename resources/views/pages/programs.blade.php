@extends('layouts.page')

@section('title', 'Programs - School of Engineering')

@section('content')

   <!-- page title -->
   <section class="page-title-section overlay" data-background="{{asset('images/backgrounds/page-title.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <ul class="list-inline custom-breadcrumb">
                    <li class="list-inline-item"><a class="h2 text-white font-secondary"
                            href="@@page-link">Prorgams</a></li>
                    <li class="list-inline-item text-white h3 font-secondary @@nasted"></li>
                </ul>
                <p class="text-lighten">Programs provided in Pokhara University School of Engineering</p>
            </div>
        </div>
    </div>
</section>
<!-- /page title -->

    {{-- programs --}}
    <section class="section">
        <div class="container">
            <!-- program list -->
            <div class="row justify-content-center">
                @foreach ($programs as $program)
                    <!-- program item -->
                    <div class="col-lg-4 col-sm-6 mb-5">
                        <div class="card p-0 border-primary rounded-0 hover-shadow">
                            <div class="card-body">
                                <ul class="list-inline mb-2">
                                    <li class="list-inline-item"><i class="ti-user mr-1 text-color"></i> {{$program->coordinator}} </li>
                                </ul>
                                <a href="/programs/single/{{ $program->id }}">
                                    <h4 class="card-title">{{ $program->title }}</h4>
                                </a>
                                <p class="card-text mb-4">
                                    {!! Str::limit($program->content, 50) !!}
                                </p>
                                <a href="/programs/single/{{ $program->id }}" class="btn btn-primary btn-sm">See Details</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- /program list -->

        </div>
    </section>
@endsection
