@extends('layouts.default')

{{-- Inline Scripts --}}
@section('scripts')
    @include('examples/apricots/init-js')
@stop

{{-- Page --}}
@section('page')

<header class="page__header">

    <div class="welcome mascot mascot--welcome mascot--brand row align-bottom">

        <div class="small-12 medium-5 columns">

            <h1>{{ trans('app.title') }}</h1>

            <h2 class="tagline">{{ trans('app.tagline') }}</h2>

            <a href="{{ route('install') }}" class="button call-to-action">Getting Started</a>

        </div>

    </div>

</header>

<div class="page__body">

    <div class="row align-top">

        <div class="small-12 medium-5 columns">

            <article class="article article--welcome">

                {!! renderMarkdown('content/introduction.md') !!}

            </article>

        </div>

        <div class="small-12 medium-7 columns">

            <section class="section section--box apricots">

                @include('examples/apricots/grid')

            </section>

        </div>

    </div>

</div>

@stop
