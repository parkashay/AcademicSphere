@extends('layouts.page')
@section('title', $singleStaff->fullname)
@section('content')

   
    <section class="page-title-section overlay" data-background="{{ asset('images/backgrounds/page-title.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <ul class="list-inline custom-breadcrumb">
                        <li class="list-inline-item"><a class="h2 text-white font-secondary"
                                href="/staffs/single/{{ $singleStaff->id }}"> {{ $singleStaff->fullname }} </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
  

    <!-- teacher details -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-5 mb-5">
                    <img class="img-fluid w-100" src="{{ asset('storage/' . $singleStaff->profile_image) }}" alt="teacher">
                </div>
                <div class="col-md-6 mb-5">
                    <h3>{{ $singleStaff->fullname }}</h3>
                    <h6 class="text-color"> {{ $singleStaff->designation }} </h6>
                    <div class="row">
                        <div class="col-md-6 mb-5 mb-md-0">
                            {!! $singleStaff->content !!}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /teacher details -->

@endsection
