@extends('layouts.form')
<div class="enter-code-page">
    <div class="enter-code-form-container">
        <img src={{asset('images/logo.png')}} alt="logo" class="logo-verify-page">
        @include('components.enter-code-form')
    </div>
</div>
