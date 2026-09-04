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





/* Cards */

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

}

</style>





<section class="fst-section">


<div class="fst-container">





<!-- Header -->


<h1 class="page-title">

School of Biomedical & Life Sciences

</h1>



<div class="orange-line"></div>





<p class="intro">

The School of Biomedical & Life Sciences is dedicated to advancing
knowledge in healthcare, biological sciences and medical research.
The school provides quality education, practical laboratory experience
and research opportunities to prepare students for careers in
biomedical innovation and life science industries.

</p>







<!-- Vision Mission -->


<div class="two-grid">


<div class="info-card">


<h3>
Vision
</h3>


<p>

To become a leading center of biomedical and life science education
through excellence in teaching, research, innovation and healthcare advancement.

</p>


</div>




<div class="info-card">


<h3>
Mission
</h3>


<p>

To develop skilled biomedical professionals with scientific knowledge,
research capabilities and ethical values to contribute to healthcare
and scientific development.

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

Welcome to the School of Biomedical & Life Sciences.
Our school is committed to creating an innovative learning
environment where students can explore biomedical science,
research and healthcare solutions.

</p>


</div>



</div>









<!-- Departments -->


<h2 class="page-title" style="margin-top:60px;">

Departments

</h2>



<div class="orange-line"></div>





<div class="department-grid">





<div class="department">

<h4>
Department of Pharmacy
</h4>


<p>

Providing education in pharmaceutical sciences,
drug development, clinical pharmacy and research.

</p>


</div>







<div class="department">

<h4>
Department of Biotechnology

</h4>


<p>

Focused on molecular biology, genetic engineering,
biotechnology applications and scientific research.

</p>


</div>







<div class="department">

<h4>
Department of Biochemistry & Molecular Biology
</h4>


<p>

Developing knowledge in biological processes,
medical science and laboratory research.

</p>


</div>







<div class="department">

<h4>
Department of Microbiology
</h4>


<p>

Exploring microorganisms, disease mechanisms,
diagnostics and healthcare applications.

</p>


</div>







<div class="department">

<h4>
Department of Public Health
</h4>


<p>

Promoting knowledge in healthcare systems,
community health and disease prevention.

</p>


</div>







<div class="department">

<h4>
Department of Biomedical Engineering
</h4>


<p>

Combining engineering principles with medicine
to develop healthcare technologies.

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
Bachelor Programs in Biomedical & Life Sciences
</li>


<li>
Pharmacy Programs
</li>


<li>
Biotechnology & Biological Science Programs
</li>


<li>
Research-Based Graduate Programs
</li>


<li>
Laboratory and Clinical Research Opportunities
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