@extends('layouts.app')

@section('content')

<style>

.cs-section{
    min-height:60vh;
    display:flex;
    align-items:center;
    justify-content:center;
    padding:clamp(3rem,8vw,6rem) 1.25rem;
    background:#f6f7f5;
}

.cs-card{
    max-width:640px;
    text-align:center;
}

.cs-eyebrow{
    font-size:.8rem;
    letter-spacing:.06em;
    font-weight:600;
    color:#b08d3e;
    text-transform:uppercase;
    margin:0 0 1rem;
}

.cs-title{
    font-size:clamp(1.5rem,3.5vw,2.2rem);
    font-weight:700;
    color:#1c1e1c;
    line-height:1.35;
    margin:0 0 1.25rem;
}

.cs-line{
    width:60px;
    height:3px;
    background:#1f3d2b;
    margin:0 auto 1.75rem;
}

.cs-message{
    font-size:1.5rem;
    font-weight:600;
    color:#1f3d2b;
    margin:0 0 .75rem;
}

.cs-sub{
    font-size:1rem;
    color:#6c756f;
    line-height:1.7;
    margin:0;
}

</style>

<section class="cs-section">

<div class="cs-card">

<p class="cs-eyebrow">Institute</p>

<h1 class="cs-title">
Khwaja Enayetpuri Sufism and Skill Development Institute
</h1>

<div class="cs-line"></div>

<p class="cs-message">
Coming Soon
</p>

<p class="cs-sub">
This page is currently under construction. Please check back soon.
</p>

</div>

</section>

@endsection