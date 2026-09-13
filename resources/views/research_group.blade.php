@extends('layouts.app')

@section('content')


<style>

.group-section{
padding:clamp(2.5rem,6vw,5rem) 0;
}

.group-container{
max-width:1100px;
margin:auto;
padding:0 1.25rem;
}


.page-title{
text-align:center;
font-size:2rem;
font-weight:700;
}


.orange-line{
width:70px;
height:3px;
background:#e8552e;
margin:0 auto 35px;
}


.group-grid{

display:grid;
grid-template-columns:repeat(2,1fr);
gap:25px;

}


.group-card{

border:1px solid #e2e2e2;
border-radius:10px;
padding:25px;
background:#fff;

}


.group-card h3{

color:#e8552e;

}


.group-card p{

color:#555;
line-height:1.8;

}


@media(max-width:900px){

.group-grid{
grid-template-columns:1fr;
}

}

</style>




<section class="group-section">


<div class="group-container">


<h1 class="page-title">

Research Group

</h1>


<div class="orange-line"></div>




<div class="group-grid">



<div class="group-card">

<h3>
Artificial Intelligence & Data Science Group
</h3>

<p>
Research focuses on artificial intelligence, machine learning, data analytics, and intelligent systems.
</p>

</div>




<div class="group-card">

<h3>
Engineering Innovation Group
</h3>

<p>
Focuses on advanced engineering solutions, technology development, and applied research.
</p>

</div>




<div class="group-card">

<h3>
Health & Life Science Research Group
</h3>

<p>
Conducts research in healthcare, medical science, and biological innovation.
</p>

</div>




<div class="group-card">

<h3>
Business & Social Research Group
</h3>

<p>
Focuses on management, economics, social development, and policy research.
</p>

</div>



</div>



</div>


</section>


@endsection