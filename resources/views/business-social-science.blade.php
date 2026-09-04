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

School of Business & Social Science

</h1>



<div class="orange-line"></div>




<p class="intro">

The School of Business & Social Science provides quality education
in business management, economics, social sciences and leadership.
The school focuses on developing innovative professionals with
strong analytical skills, ethical values and global perspectives.

</p>







<!-- Vision Mission -->


<div class="two-grid">


<div class="info-card">


<h3>
Vision
</h3>


<p>

To become a center of excellence in business and social science
education by promoting innovation, research and responsible leadership.

</p>


</div>




<div class="info-card">


<h3>
Mission
</h3>


<p>

To develop skilled graduates with business knowledge,
critical thinking ability and professional competence
to contribute to national and global development.

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

Welcome to the School of Business & Social Science.
We are committed to providing a learning environment
that develops future business leaders, entrepreneurs
and socially responsible professionals.

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
Department of Business Administration
</h4>


<p>

Providing knowledge in management, finance,
marketing, accounting and entrepreneurship.

</p>


</div>






<div class="department">

<h4>
Department of Economics
</h4>


<p>

Developing analytical understanding of economic
systems, policies and global markets.

</p>


</div>







<div class="department">

<h4>
Department of English & Social Science
</h4>


<p>

Building communication skills, social awareness
and professional capabilities.

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
Bachelor of Business Administration (BBA)
</li>


<li>
Master of Business Administration (MBA)
</li>


<li>
Economics Programs
</li>


<li>
Social Science Programs
</li>


<li>
Research & Professional Development
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