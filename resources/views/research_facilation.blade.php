@extends('layouts.app')

@section('content')


<style>

.research-section{

    padding:clamp(2.5rem,6vw,5rem) 0;
    background:#fff;

}



.research-container{

    max-width:1100px;
    margin:auto;
    padding:0 1.25rem;

}



.page-title{

    text-align:center;
    font-size:2rem;
    font-weight:700;
    color:#222;
    margin-bottom:10px;

}



.orange-line{

    width:70px;
    height:3px;
    background:#e8552e;
    margin:0 auto 35px;

}





.research-card{

    border:1px solid #e2e2e2;
    border-radius:10px;
    padding:25px;
    background:#fff;
    margin-bottom:25px;
    transition:.3s;

}



.research-card:hover{

    box-shadow:0 10px 25px rgba(0,0,0,.08);

}



.research-card h3{

    color:#e8552e;
    font-size:1.25rem;
    font-weight:600;
    margin-bottom:15px;

}



.research-card p,
.research-card li{

    color:#555;
    font-size:1rem;
    line-height:1.9;

}



.research-card ul{

    padding-left:20px;
    margin:0;

}



.research-card li{

    margin-bottom:8px;

}





/* Responsive Design */

@media(max-width:768px){


.page-title{

    font-size:1.6rem;

}



.research-card{

    padding:20px;

}



.research-card h3{

    font-size:1.15rem;

}



.research-card p,
.research-card li{

    font-size:.95rem;

}


}




@media(max-width:480px){


.research-container{

    padding:0 1rem;

}


.orange-line{

    width:60px;

}


}

</style>





<section class="research-section">


<div class="research-container">





<h1 class="page-title">

Research Facilitation & Funding Source

</h1>



<div class="orange-line"></div>






<div class="research-card">


<h3>

Research Facilitation

</h3>



<ul>

<li>
Support for faculty and student research activities.
</li>

<li>
Assistance in research proposal development.
</li>

<li>
Support for research publication and conference participation.
</li>

<li>
Development of research collaboration and academic partnerships.
</li>


</ul>



</div>








<div class="research-card">


<h3>

Funding Sources

</h3>



<ul>

<li>
University research grants.
</li>

<li>
Government research funding programmes.
</li>

<li>
National and international research organizations.
</li>

<li>
Industrial and collaborative research funding.
</li>

<li>
External research sponsorship and partnership opportunities.
</li>


</ul>



</div>








<div class="research-card">


<h3>

Research Support Services

</h3>



<p>

KYAU encourages researchers by providing academic support, administrative assistance, research guidance, and opportunities for collaboration to enhance research quality, innovation, and academic impact.

</p>



</div>






</div>


</section>



@endsection