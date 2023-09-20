@extends('layouts.page')
@section('title', 'Faculty')
@section('content')

    <main class="cd-main-contentS fixed-bg-lg">
        <section class="component-main component-main-posts">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <div data-toggle="tooltip" data-placement="left" title="Home"><a href="/"><i
                                class="fa-solid fa-house"></i></a></div>
                </li>
                <li class="breadcrumb-item active" aria-current="page">SOE</li>
                <li class="breadcrumb-item active" aria-current="page">Faculty</li>
            </ol>
            <div class="box-posts-container">
                @foreach ($faculty as $staff)
               
                    <div class="box-post soe-staffs-profile-45952hgfdf">
                        <a href="/staffdetails/{{ $staff->id }}">
                            <div class=" post-img">
                                <img src="{{ asset('storage/' . $staff->profile_image) }}" alt="{{ $staff->profile_image }}">
                            </div>
                        </a>
                        <div class="box-post-title">
                            <a href="staffdetails/{{ $staff->id }}">{{ $staff->fullname }}</a>
                        </div>
                        <div class="box-post-date">
                            {{ $staff->designation }}
                        </div>
                        <div class="flex-center" >
                            <a  href="staffdetails/{{ $staff->id }}" class="btn btn-md btn-primary text-white">View Details</a>
                        </div>
                    </div>
                @endforeach
            </div>
            <nav aria-label="Page navigation example">
                <ul class="pagination ">
                    <div class="mi-auto mt-4">
                        {{ $faculty->links('vendor.pagination.custom') }}
                    </div>
                </ul>
            </nav>
        </section>
       
    </main>

@endsection
