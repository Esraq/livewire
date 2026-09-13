@extends('layouts.app')

@section('content')


<style>

.journal-section{

padding:clamp(2.5rem,6vw,5rem) 0;
background:#fff;

}

.journal-container{

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


.journal-card{

border:1px solid #e2e2e2;
border-radius:10px;
padding:25px;
margin-bottom:25px;

}



.journal-card h3{

color:#e8552e;

}



.journal-card p,
.journal-card li{

color:#555;
line-height:1.9;

}



.journal-card ul{

padding-left:20px;

}


</style>




<section class="journal-section">


<div class="journal-container">



<h1 class="page-title">

KYAU Journal

</h1>


<div class="orange-line"></div>





<div class="journal-card">


<h3>

About KYAU Journal

</h3>


<p>

KYAU Journal provides a platform for researchers, academicians, and professionals to publish original research findings and contribute to knowledge development.

</p>


</div>







<div class="journal-card">


<h3>

Objectives

</h3>


<ul>

<li>
Promote research and innovation.
</li>

<li>
Provide opportunities for scholarly publication.
</li>

<li>
Encourage interdisciplinary research.
</li>

<li>
Share academic knowledge with the wider community.
</li>


</ul>


</div>








<div class="journal-card">


<h3>

Journal Information

</h3>


<p>

Journal details, editorial board members, publication guidelines, submission procedures, and latest issues will be published soon.

</p>


</div>






</div>


</section>


@endsection