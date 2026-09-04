@extends('layouts.app')

@section('content')

<style>

.resources-section{
    padding: clamp(2.5rem,6vw,5rem) 0;
    background:#fff;
}

.section-title{
    font-size:clamp(1.7rem,3vw,2.4rem);
    font-weight:700;
    color:#1a1a1a;
    text-align:center;
}

.section-divider{
    width:70px;
    height:3px;
    background:#e8552e;
    margin:15px auto 25px;
}

.section-description{
    max-width:750px;
    margin:auto;
    text-align:center;
    color:#555;
    line-height:1.8;
    font-size:1.05rem;
}


.resource-card{
    height:100%;
    background:#fff;
    border:1px solid #e5e5e5;
    border-radius:12px;
    padding:30px;
    transition:all .3s ease;
}


.resource-card:hover{
    transform:translateY(-8px);
    box-shadow:0 12px 30px rgba(0,0,0,.08);
}


.resource-icon{

    width:50px;
    height:50px;
    border-radius:50%;
    background:#fdece6;
    color:#e8552e;

    display:flex;
    align-items:center;
    justify-content:center;

    font-size:22px;
    margin-bottom:20px;

}


.resource-card h3{

    font-size:1.2rem;
    font-weight:700;
    color:#222;
    margin-bottom:12px;

}


.resource-card p{

    color:#555;
    line-height:1.7;

}


.resource-card ul{

    padding-left:20px;
    color:#555;
    line-height:1.9;

}


.download-card{

    height:100%;
    display:block;
    padding:25px;
    border:1px solid #ddd;
    border-radius:12px;
    text-decoration:none;
    color:#222;
    transition:.3s;

}


.download-card:hover{

    border-color:#e8552e;
    transform:translateY(-5px);

}


.download-card span{

    color:#e8552e;
    font-weight:600;

}


.cta-btn{

    background:#e8552e;
    color:#fff;
    padding:14px 35px;
    border-radius:5px;
    text-decoration:none;
    font-weight:600;

}


.cta-btn:hover{

    background:#c94322;
    color:#fff;

}



@media(max-width:576px){

    .resource-card{
        padding:22px;
    }

    .section-description{
        font-size:.95rem;
    }

}

</style>



<section class="resources-section">

<div class="container">


<!-- Header -->

<h1 class="section-title">
University Resources
</h1>


<div class="section-divider"></div>


<p class="section-description mb-5">

Explore Khwaja Yunus Ali University's academic,
research, digital and student support resources
designed to create an effective learning environment.

</p>



<!-- Resources -->

<div class="row g-4">



<!-- Academic -->

<div class="col-lg-4 col-md-6 col-12">

<div class="resource-card">


<div class="resource-icon">
📚
</div>


<h3>
Academic Resources
</h3>


<p>
Important academic materials and information
to support students throughout their academic journey.
</p>


<ul>
<li>Academic Calendar</li>
<li>Student Handbook</li>
<li>Course Curriculum</li>
<li>University Publications</li>
</ul>


</div>

</div>




<!-- Digital -->

<div class="col-lg-4 col-md-6 col-12">

<div class="resource-card">


<div class="resource-icon">
💻
</div>


<h3>
Digital Resources
</h3>


<p>
Modern technology-based facilities providing
easy access to academic services.
</p>


<ul>
<li>Student Portal</li>
<li>University Webmail</li>
<li>Online Services</li>
<li>Campus Internet Facilities</li>
</ul>


</div>

</div>




<!-- Library -->

<div class="col-lg-4 col-md-6 col-12">

<div class="resource-card">


<div class="resource-icon">
📖
</div>


<h3>
Library & Knowledge Center
</h3>


<p>
A supportive learning environment with books,
journals and digital academic resources.
</p>


<ul>
<li>Books & Journals</li>
<li>Research Materials</li>
<li>Digital Resources</li>
<li>Library Services</li>
</ul>


</div>

</div>





<!-- Laboratory -->

<div class="col-lg-4 col-md-6 col-12">

<div class="resource-card">


<div class="resource-icon">
🧪
</div>


<h3>
Laboratory Facilities
</h3>


<p>
Practical learning facilities supporting
education and research activities.
</p>


<ul>
<li>CSE Laboratory</li>
<li>EEE Laboratory</li>
<li>Pharmacy Laboratory</li>
<li>Science Labs</li>
</ul>


</div>

</div>





<!-- Student -->

<div class="col-lg-4 col-md-6 col-12">

<div class="resource-card">


<div class="resource-icon">
🎓
</div>


<h3>
Student Support Services
</h3>


<p>
Facilities that enhance student life,
development and wellbeing.
</p>


<ul>
<li>Residential Facilities</li>
<li>Student Clubs</li>
<li>Sports Activities</li>
<li>Health Support</li>
</ul>


</div>

</div>





<!-- Research -->

<div class="col-lg-4 col-md-6 col-12">

<div class="resource-card">


<div class="resource-icon">
🔬
</div>


<h3>
Research Resources
</h3>


<p>
Resources supporting innovation, research
and academic excellence.
</p>


<ul>
<li>Research Publications</li>
<li>Faculty Research</li>
<li>Academic Collaboration</li>
<li>Innovation Support</li>
</ul>


</div>

</div>


</div>





<!-- Download Center -->


<h2 class="section-title mt-5 mb-4">
Download Center
</h2>



<div class="row g-4">


<div class="col-lg-4 col-md-6">

<a href="#" class="download-card">

<h4>
📘 University Prospectus
</h4>

<span>
Download →
</span>

</a>

</div>



<div class="col-lg-4 col-md-6">

<a href="#" class="download-card">

<h4>
📅 Academic Calendar
</h4>

<span>
Download →
</span>

</a>

</div>




<div class="col-lg-4 col-md-6">

<a href="#" class="download-card">

<h4>
📰 Newsletter
</h4>

<span>
View →
</span>

</a>

</div>


</div>




<!-- CTA -->


<div class="text-center mt-5">


<a href="/admission" class="cta-btn">

Start Your Application →

</a>


</div>



</div>

</section>


@endsection