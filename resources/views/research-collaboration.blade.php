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
    margin-bottom:25px;
    background:#fff;
    transition:.3s;

}



.research-card:hover{

    box-shadow:0 10px 25px rgba(0,0,0,.08);

}



.research-card h3{

    color:#e8552e;
    margin-bottom:15px;

}



.research-card p,
.research-card li{

    color:#555;
    line-height:1.9;

}



.research-card ul{

    padding-left:20px;

}



@media(max-width:600px){

.page-title{
font-size:1.6rem;
}

.research-card{
padding:20px;
}

}

</style>



<section class="research-section">


<div class="research-container">



<h1 class="page-title">

Research Collaboration

</h1>


<div class="orange-line"></div>





<div class="research-card">


<h3>
Overview
</h3>


<p>

KYAU promotes national and international research collaboration to enhance knowledge exchange, innovation, and academic excellence. The university encourages partnerships with academic institutions, industries, and research organizations.

</p>


</div>







<div class="research-card">


<h3>
Collaboration Areas
</h3>


<ul>

<li>
Joint research projects with universities and organizations.
</li>

<li>
Faculty and student research exchange programmes.
</li>

<li>
Collaborative publications and conferences.
</li>

<li>
Industry-academic research partnerships.
</li>

</ul>


</div>








<div class="research-card">


<h3>
Collaborating Partners

</h3>


<p>

Information about national and international research partners, MoUs, and collaborative initiatives will be updated soon.

</p>


</div>





</div>


</section>


@endsection