@extends('layouts.app')

@section('content')


<style>

.publication-section{
    padding:clamp(2.5rem,6vw,5rem) 0;
    background:#fff;
}

.publication-container{
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


.publication-card{

    border:1px solid #e2e2e2;
    border-radius:10px;
    padding:25px;
    background:#fff;
    margin-bottom:25px;
    transition:.3s;

}


.publication-card:hover{

    box-shadow:0 10px 25px rgba(0,0,0,.08);

}



.publication-card h3{

    color:#e8552e;
    margin-bottom:15px;

}



.publication-card p,
.publication-card li{

    color:#555;
    line-height:1.9;

}



.publication-card ul{

padding-left:20px;

}



@media(max-width:600px){

.page-title{
font-size:1.6rem;
}

.publication-card{
padding:20px;
}

}


</style>




<section class="publication-section">


<div class="publication-container">



<h1 class="page-title">

Scopus Indexed Journals

</h1>


<div class="orange-line"></div>





<div class="publication-card">


<h3>
Overview
</h3>


<p>

KYAU encourages high-quality research and scholarly publications through internationally recognized journals indexed by Scopus and other reputed databases.

</p>


</div>







<div class="publication-card">


<h3>
Research Publication Support
</h3>


<ul>

<li>
Encouraging faculty members and researchers to publish in indexed journals.
</li>

<li>
Supporting quality research and academic collaboration.
</li>

<li>
Promoting international visibility of university research outputs.
</li>

<li>
Maintaining ethical research and publication standards.
</li>

</ul>


</div>







<div class="publication-card">


<h3>
Scopus Indexed Publications

</h3>


<p>

Details of Scopus indexed journal publications by KYAU researchers will be updated regularly.

</p>


</div>




</div>


</section>


@endsection