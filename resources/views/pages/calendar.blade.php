@extends('layouts.page')
@section('title', 'Academic Calendar')
@section('content')

    <section class="section-sm mt-5">
        <div class="container p-3" style="background-color: #fff;">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <div data-toggle="tooltip" data-placement="left" title="Home"><a href="/"><i
                                class="fa-solid fa-house"></i></a></div>
                </li>

                <li class="breadcrumb-item active" aria-current="page">Academic Calendar</li>
            </ol>
            <div class="row justify-content-center mt-2">
                @foreach ($calendars as $calendar)
                    <div class="col-lg-4 col-sm-6 mb-2">
                        <div class="card p-0 rounded-0 hover-shadow">
                            <div class="card-body">
                                <ul class="list-inline mb-3 ">
                                    <li class="list-inline-item mr-3 home-post-date">
                                        Calendar of Year, {{ $calendar->year }}
                                    </li>

                                </ul>
                                <div>
                                    <?php
                                    $string = '/';
                                    ?>
                                    <a href="{{ asset('storage') . $string . $calendar->file }}">Academic Calendar,
                                        {{ $calendar->year }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <nav aria-label="Page navigation example">
                <ul class="pagination ">

                    <div class="mi-auto mt-4">
                        {{ $calendars->links('vendor.pagination.custom') }}

                    </div>
                </ul>
            </nav>
        </div>
    </section>
