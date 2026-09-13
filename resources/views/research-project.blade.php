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
    margin-bottom:15px;

}



.research-card p,
.research-card li{

    color:#555;
    line-height:1.9;
    font-size:1rem;

}



.research-card ul{

    padding-left:20px;
    margin:0;

}



.research-card li{

    margin-bottom:8px;

}





/* Responsive */

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

Research Project

</h1>



<div class="orange-line"></div>






<div class="research-card">


<h3>

Ongoing Research Projects

</h3>



<ul>

<li>
Artificial Intelligence and Machine Learning Applications.
</li>


<li>
Renewable Energy and Sustainable Technology.
</li>


<li>
Healthcare Innovation and Medical Research.
</li>


<li>
Smart Technology Development.
</li>


</ul>



</div>








<div class="research-card">


<h3>

Completed Research Projects

</h3>



<p>

Completed research projects, publications, and outcomes will be updated regularly by the respective research teams.

</p>



</div>







</div>


</section>



@endsection