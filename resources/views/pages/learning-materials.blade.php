@extends('layouts.page')
@section('title', 'Study Materials')
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
                <div class="mb-2" style="color:blue; text-align:center"> {{ session('message') }}! </div>
            @endif
            @if ($errors->any())
                <div style="color:red; text-align:center">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div>
                <form action="/validate-code" method="post" class="access-code-form">
                    @csrf
                    <input type="text" name="access_code" placeholder="ACCESS CODE" required>
                    <input type="submit" value="SUBMIT">
                </form>
            </div>
            <div class="input-group">
                <form action="{{ route('learning.search') }}" method="GET" style="width: 100%">
                    <input type="search" name="search" class="form-control rounded"
                        placeholder="Search your learning material here..." aria-label="Search"
                        aria-describedby="search-addon" />
                </form>
            </div>

            <div class="row justify-content-center mt-2">

                @foreach ($learningMaterialsGroups as $learningMaterialGroup)
                    <!-- course item -->
                    <div class="col-lg-4 col-sm-6 mb-2">
                        <div class="card p-0 rounded-0 hover-shadow">
                            <a href="/learning-materials/{{ $learningMaterialGroup }}"
                                class="home-page-post-title text-capitalize">
                                <div class="card-body">

                                    {{ $learningMaterialGroup }}

                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- /course item -->
                @endforeach
            </div>

            {{-- <nav aria-label="Page navigation example">
                <ul class="pagination ">

                    <div class="mi-auto mt-4">
                        {{ $learningMaterialGroup->links('vendor.pagination.custom') }}
                    </div>
                </ul>
            </nav> --}}
        </div>
    </section>


@endsection
