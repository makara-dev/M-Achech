@extends('layout.app')

@section('stylesheet')
<link rel="stylesheet" href="{{asset('css/career.css')}}">
@endsection

@section('title', 'Career')

@section('content')

<!-- BEGIN :: Career -->
<div class="career-wrapper">
    <h2>@lang('career-lan.career')</h2>
    <ul>
        <li>
            <p class="question">@lang('career-lan.question-1')</p>
            <p class="answer">@lang('career-lan.answer-1')</p>
        </li>

        <li>
            <p class="question">@lang('career-lan.question-2')</p>
            <p class="answer">@lang('career-lan.answer-2')</p>
        </li>

        <li>
            <p class="question">@lang('career-lan.question-3')</p>
            <p class="answer">@lang('career-lan.answer-3')</p>
        </li>

        <li>
            <p class="question">@lang('career-lan.question-4')</p>
            <p class="answer">@lang('career-lan.answer-4')</p>
        </li>
    </ul>
</div>
<!-- END :: Career -->

@endsection