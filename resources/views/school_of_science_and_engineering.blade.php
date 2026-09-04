@extends('layouts.app')

@section('content')


<style>

.fst-section{
    padding:clamp(2.5rem,6vw,5rem) 0;
}


.fst-container{
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
    margin:0 auto 30px;

}



.intro{

    max-width:850px;
    margin:auto;
    text-align:center;
    color:#555;
    line-height:1.8;
    font-size:1.05rem;

}





/* Common Card */

.info-card{

    border:1px solid #e2e2e2;
    border-radius:10px;
    padding:25px;
    height:100%;
    background:#fff;
    transition:.3s;

}


.info-card:hover{

    box-shadow:0 10px 25px rgba(0,0,0,.08);

}


.info-card h3{

    color:#e8552e;
    font-size:1.25rem;
    margin-bottom:15px;

}


.info-card p,
.info-card li{

    color:#555;
    line-height:1.8;

}





/* Vision Mission */

.two-grid{

    display:grid;
    grid-template-columns:repeat(2,1fr);
    gap:25px;
    margin-top:40px;

}






/* Dean */

.profile-grid{

    display:grid;
    grid-template-columns:1fr;
    gap:25px;
    margin-top:40px;

}



.profile-card{

    border:1px solid #e2e2e2;
    border-radius:10px;
    padding:25px;
    text-align:center;

}



.profile-card img{

    width:150px;
    height:150px;
    border-radius:50%;
    object-fit:cover;
    border:4px solid #fdece6;

}



.profile-card h3{

    color:#e8552e;
    margin-top:15px;

}



.profile-card p{

    color:#555;
    line-height:1.8;

}






/* Departments */


.department-grid{

    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:20px;
    margin-top:30px;

}



.department{

    border:1px solid #e2e2e2;
    border-radius:8px;
    padding:20px;
    transition:.3s;

}



.department:hover{

    transform:translateY(-5px);
    box-shadow:0 8px 20px rgba(0,0,0,.08);

}



.department h4{

    color:#e8552e;
    font-size:1.1rem;

}



.department p{

    color:#555;
    line-height:1.7;

}






/* Responsive */

@media(max-width:900px){


.two-grid{

    grid-template-columns:1fr;

}


.department-grid{

    grid-template-columns:repeat(2,1fr);

}

}




@media(max-width:600px){


.page-title{

    font-size:1.6rem;

}


.department-grid{

    grid-template-columns:1fr;

}


.profile-card{

    padding:20px;

}

}



</style>





<section class="fst-section">


<div class="fst-container">





<!-- Header -->


<h1 class="page-title">

Faculty of Science & Technology

</h1>



<div class="orange-line"></div>




<p class="intro">

The Faculty of Science & Technology is committed to providing
quality education, advanced research opportunities and
industry-oriented knowledge to prepare students for global challenges.

</p>







<!-- Vision Mission -->


<div class="two-grid">


<div class="info-card">


<h3>
Vision
</h3>


<p>

To become a leading center of excellence in science and technology
education through innovation, research and practical learning.

</p>


</div>




<div class="info-card">


<h3>
Mission
</h3>


<p>

To develop skilled professionals with strong theoretical knowledge,
technical expertise and ethical values to contribute to society.

</p>


</div>



</div>









<!-- Dean Message -->


<h2 class="page-title" style="margin-top:60px;">

Message From Faculty Leadership

</h2>



<div class="orange-line"></div>




<div class="profile-grid">


<div class="profile-card">


<img src="{{asset('assets/images/dean.jpg')}}"
alt="Dean">


<h3>
Dean Message
</h3>



<p>

Welcome to the Faculty of Science & Technology.
Our faculty focuses on academic excellence,
research innovation and preparing students
for future opportunities.

</p>


</div>



</div>









<!-- Departments -->


<h2 class="page-title" style="margin-top:60px;">

Departments|Faculty List

</h2>



<div class="orange-line"></div>





<div class="department-grid">





<div class="department">

<h4>
Computer Science & Engineering
</h4>


<p>

Programs focusing on software engineering,
AI, data science and computing technologies.

</p>


</div>






<div class="department">

<h4>
Electrical & Electronic Engineering
</h4>


<p>

Developing knowledge in electronics,
communication and modern technology.

</p>


</div>







<div class="department">

<h4>
Mathematics & Physical Sciences
</h4>


<p>

Building strong foundations in scientific
and analytical disciplines.

</p>


</div>






</div>









<!-- Academic Programs -->


<div class="info-card" style="margin-top:40px;">


<h3>
Academic Programs
</h3>



<ul>

<li>
Undergraduate Programs
</li>


<li>
Graduate Programs
</li>


<li>
Research Opportunities
</li>


<li>
Course Catalog
</li>


<li>
Student Resources
</li>


</ul>



</div>









<!-- CTA -->


<div style="text-align:center;margin-top:50px;">



<a href="/admission"

style="
background:#e8552e;
color:#fff;
padding:14px 35px;
border-radius:5px;
text-decoration:none;
font-weight:600;
">

Apply Now →

</a>



</div>






</div>


</section>



@endsection