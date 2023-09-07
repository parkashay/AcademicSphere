


@extends('layouts.page')
@section('title', 'Learning Materials')
@section('content')

    <section class="section-sm mt-5">
        <div class="container p-3" style="background-color: #fff;">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <div data-toggle="tooltip" data-placement="left" title="Home"><a href="/"><i
                                class="fa-solid fa-house"></i></a></div>
                </li>

                <li class="breadcrumb-item active" aria-current="page">Learning Materials</li>
            </ol>
                @if (session()->has('message'))
                    <div class="mb-2" style="color:blue;"> {{session('message')}}! </div>
                @endif
            <div class="input-group">
                <form action="{{route('learning.search')}}" method="GET" style="width: 100%">
                    <input type="search" name="search" class="form-control rounded" placeholder="Search your learning material here..." aria-label="Search" aria-describedby="search-addon" />
                </form>
              </div>

            <div class="row justify-content-center mt-2">
            
                @foreach ($learningMaterials as $learningMaterial)
                    <!-- course item -->
                    <div class="col-lg-4 col-sm-6 mb-2">
                        <div class="card p-0 rounded-0 hover-shadow">
                            <div class="card-body">
                                <ul class="list-inline mb-3 ">
                                    <li class="list-inline-item mr-3 home-post-date">
                                        <?php
                                        $dateTime = new DateTime(substr($learningMaterial->created_at, 0, 10));
                                        $formattedDate = $dateTime->format('F j, Y');
                                        print_r($formattedDate);
                                        ?>
                                    </li>
                                    <li class="list-inline-item mr-3 my-1 ">
                                       {{$learningMaterial->course}}
                                    </li>
                                    <li class="list-inline-item">
                                        @foreach ($learningMaterial->keywords as $keyword)
                                            <span class="category-badge mb-4"><a
                                                    href="/search?search={{ $keyword }}">{{ strtoupper($keyword) }}</a></span>
                                        @endforeach
                                    </li>
                                </ul>
                                <a href="/learning-materials/single/{{ $learningMaterial->id }}" class="home-page-post-title text-capitalize">
                                    {{ $learningMaterial->title }}
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- /course item -->
                @endforeach
            </div>

            <nav aria-label="Page navigation example">
                <ul class="pagination ">

                    <div class="mi-auto mt-4">
                        {{ $learningMaterials->links('vendor.pagination.custom') }}
                    </div>
                </ul>
            </nav>
        </div>
    </section>


@endsection
