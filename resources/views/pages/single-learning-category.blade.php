@extends('layouts.page')
@section('title', $singleMaterial->title)
@section('content')
    <main class="cd-main-contentS">
        <section class="component-main component-main-posts">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <div data-toggle="tooltip" data-placement="left" title="Home"><a href="/"><i
                                class="fa-solid fa-house"></i></a></div>
                </li>
                <li class="breadcrumb-item" aria-current="page"><a href="/courses">Courses</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $singleMaterial->title }}</li>
            </ol>

            <div class="tiles-container">
                <div class="post-descriptive">
                    <h1 class="post-title">{{ $singleMaterial->title }}</h1>
                    
                    <div class="post-text-image">

                        <div class="content-text">
                           
                            {!!$singleMaterial->content!!}
                        </div>
                    </div>


                </div>
            </div>
        </section>
    </main>
@endsection
