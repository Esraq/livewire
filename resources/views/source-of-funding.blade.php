@extends('layouts.app')

@section('content')


<style>

.funding-section{

padding:clamp(2.5rem,6vw,5rem) 0;
background:#fff;

}


.funding-container{

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



.funding-card{

border:1px solid #e2e2e2;
border-radius:10px;
padding:25px;
margin-bottom:25px;

}


.funding-card h3{

color:#e8552e;

}


.funding-card p,
.funding-card li{

color:#555;
line-height:1.9;

}


.funding-card ul{

padding-left:20px;

}



@media(max-width:600px){

.page-title{
font-size:1.6rem;
}

}

</style>





<section class="funding-section">


<div class="funding-container">



<h1 class="page-title">

Source of Funding

</h1>



<div class="orange-line"></div>







<div class="funding-card">


<h3>

Research Funding Sources

</h3>


<ul>

<li>
University research grants.
</li>

<li>
Government-funded research programmes.
</li>

<li>
National and international research organizations.
</li>

<li>
Industry-sponsored research projects.
</li>

<li>
Collaborative research funding.
</li>

</ul>


</div>







<div class="funding-card">


<h3>

Funding Support

</h3>


<p>

KYAU supports researchers in preparing proposals, managing research projects, and utilizing available funding opportunities to promote impactful research.

</p>


</div>







<div class="funding-card">


<h3>

Future Funding Opportunities

</h3>


<p>

Details of available research grants, calls for proposals, and funding opportunities will be updated regularly.

</p>


</div>





</div>


</section>


@endsection