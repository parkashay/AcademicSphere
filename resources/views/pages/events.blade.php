@extends('layouts.page')
@section('title', 'Events - School of Engineering')
@section('content')
    <!-- events -->
    <section class="section-sm mt-5 ">

        <div class="container p-3" style="background-color: #fff;">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <div data-toggle="tooltip" data-placement="left" title="Home"><a href="/"><i
                                class="fa-solid fa-house"></i></a></div>
                </li>

                <li class="breadcrumb-item active" aria-current="page">Upcoming Events </li>
            </ol>

            @foreach ($events as $event)
                <li class="d-table mb-4 w-100 border-bottom hover-shadow">
                    <div class="d-md-table-cell text-center p-4 .event-date text-white mb-4 mb-md-0 event-date">
                        <span class="h2 d-block">
                            <?php
                            $dateTime = new DateTime(substr($event->date, 0, 10));
                            $formattedDate = $dateTime->format('j');
                            print_r($formattedDate);
                            ?>
                        </span>
                        <?php
                        $dateTime = new DateTime(substr($event->date, 0, 10));
                        $formattedDate = $dateTime->format('F, Y');
                        print_r($formattedDate);
                        ?>

                    </div>
                    <div class="d-md-table-cell px-4 vertical-align-middle mb-4 mb-md-0 py-3">
                        <a href="notice-single.html" class="h4 mb-3 d-block">{{ $event->title }}</a>
                        <p class="mb-0">
                            {!! Str::limit($event->content, 200) !!}
                        </p>
                    </div>
                    <div class="d-md-table-cell text-right pr-0 pr-md-4"><a href="events/single/{{ $event->id }}"
                            class="btn btn-read-more">view details</a></div>
                </li>
            @endforeach
            <nav aria-label="Page navigation example">
                <ul class="pagination ">

                    <div class="mi-auto mt-4">
                        {{ $events->links('vendor.pagination.custom') }}

                    </div>
                </ul>
            </nav>
        </div>

    </section>
    <!-- /events -->
