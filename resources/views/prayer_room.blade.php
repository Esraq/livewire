@extends('layouts.app')

@section('content')


<style>

.prayer-section{

    padding:clamp(2.5rem,6vw,5rem) 0;
    background:#fff;

}



.prayer-container{

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





.prayer-intro{

    max-width:900px;
    margin:auto;
    text-align:justify;
    color:#555;
    line-height:1.9;
    font-size:1.02rem;

}





.prayer-card{

    border:1px solid #e2e2e2;
    border-radius:10px;
    padding:25px;
    background:#fff;
    margin-top:25px;
    transition:.3s;

}



.prayer-card:hover{

    box-shadow:0 10px 25px rgba(0,0,0,.08);

}




.prayer-card h3{

    color:#e8552e;
    font-size:1.25rem;
    margin-bottom:15px;

}




.prayer-card p,
.prayer-card li{

    color:#555;
    line-height:1.9;

}



.prayer-card ul{

    padding-left:20px;

}





.prayer-grid{

    display:grid;
    grid-template-columns:repeat(2,1fr);
    gap:25px;
    margin-top:25px;

}





.prayer-icon{

    width:75px;
    height:75px;
    border-radius:50%;
    background:#fdece6;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:32px;
    margin-bottom:20px;

}





@media(max-width:900px){

.prayer-grid{

    grid-template-columns:1fr;

}

}




@media(max-width:600px){

.page-title{

    font-size:1.6rem;

}


.prayer-card{

    padding:20px;

}


.prayer-intro{

    font-size:.95rem;

}

}

</style>





<section class="prayer-section">


<div class="prayer-container">





<h1 class="page-title">

Prayer Room

</h1>



<div class="orange-line"></div>







<p class="prayer-intro">

Khwaja Yunus Ali University (KYAU) respects the spiritual and cultural needs of its students, faculty members, and staff. The university provides a peaceful prayer space where members of the KYAU community can perform religious activities and spend time in reflection within the campus environment.

</p>









<div class="prayer-card">


<div class="prayer-icon">

🕌

</div>



<h3>

About Prayer Room

</h3>


<p>

The KYAU Prayer Room is designed to provide a clean, quiet, and comfortable environment for students and employees to perform prayers and religious practices. It supports a balanced campus life by respecting individual beliefs and traditions.

</p>


</div>









<div class="prayer-grid">





<div class="prayer-card">


<h3>

Facilities

</h3>


<ul>

<li>
Clean and peaceful prayer environment.
</li>

<li>
Separate space for regular prayer activities.
</li>

<li>
Comfortable arrangements for students and staff.
</li>

<li>
Maintained environment for worship and reflection.
</li>

</ul>


</div>








<div class="prayer-card">


<h3>

Student Support

</h3>


<ul>

<li>
Accessible prayer facility for students.
</li>

<li>
Support for maintaining religious practices during academic activities.
</li>

<li>
Promoting respect and harmony among campus members.
</li>

<li>
Encouraging an inclusive university environment.
</li>

</ul>


</div>






</div>









<div class="prayer-card">


<h3>

Prayer Room Guidelines

</h3>


<ul>

<li>
Users should maintain cleanliness and discipline.
</li>

<li>
Respect others using the prayer facility.
</li>

<li>
Maintain a peaceful environment inside the prayer room.
</li>

<li>
Use the facility responsibly and follow university guidelines.
</li>


</ul>


</div>









<div class="prayer-card">


<h3>

Campus Diversity & Inclusion

</h3>


<p>

KYAU believes in creating a respectful campus environment where students and employees from diverse backgrounds can practice their faith and participate in university life with mutual respect.

</p>


</div>









<div class="prayer-card">


<h3>

Location & Contact

</h3>


<p>

<strong>
KYAU Prayer Room
</strong>

<br><br>

Location details, operating hours, and contact information will be updated soon.

</p>


</div>







</div>


</section>



@endsection