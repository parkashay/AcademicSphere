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
                <li class="breadcrumb-item" aria-current="page"><a href="/learning-materials">Study Materials</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $singleMaterial->title }}</li>
            </ol>

            <div class="tiles-container">
                <div class="post-descriptive">
                    <h1 class="post-title">{{ $singleMaterial->title }}</h1>
                    <div>
                        <hr>
                        <div class="date-share">
                            <div class="post-date">Material By {{ $singleMaterial->teacher }}</div>
                            <div class="post-date"><a class="link-156dhcj"
                                    href="/courses">{{ $singleMaterial->course }}</a>
                            </div>
                        </div>
                        <hr>
                    </div>
                    <div class="post-text-image">
                        <div class="content-text">
                            {!! $singleMaterial->content !!}
                            @if (!empty($singleMaterial->files))
                                <br><br>Files attached with this material is/are:
                                <ul>
                                    <?php
                                    $count = 0;
                                    ?>
                                    @foreach ($singleMaterial->files as $file)
                                        <?php
                                        $count++;
                                        ?>
                                        <li><a href="{{ asset('storage/') . '/' . $file }}"
                                                download="{{ asset('storage/') . $file }}">{{ $singleMaterial->title . '-' . strval($count) }}</a>
                                        </li>
                                    @endforeach

                                </ul>
                            @endif

                        </div>
                    </div>


                </div>
            </div>
        </section>
    </main>
@endsection
