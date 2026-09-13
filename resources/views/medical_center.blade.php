@extends('layouts.app')

@section('content')


<style>

.medical-section{

    padding:clamp(2.5rem,6vw,5rem) 0;
    background:#fff;

}


.medical-container{

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





.medical-intro{

    max-width:900px;
    margin:auto;
    text-align:justify;
    color:#555;
    line-height:1.9;
    font-size:1.02rem;

}





.medical-card{

    border:1px solid #e2e2e2;
    border-radius:10px;
    padding:25px;
    background:#fff;
    margin-top:25px;
    transition:.3s;

}



.medical-card:hover{

    box-shadow:0 10px 25px rgba(0,0,0,.08);

}



.medical-card h3{

    color:#e8552e;
    font-size:1.25rem;
    margin-bottom:15px;

}



.medical-card p,
.medical-card li{

    color:#555;
    line-height:1.9;

}



.medical-card ul{

    padding-left:20px;

}





.medical-grid{

    display:grid;
    grid-template-columns:repeat(2,1fr);
    gap:25px;
    margin-top:25px;

}






.medical-icon{

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

.medical-grid{

    grid-template-columns:1fr;

}

}





@media(max-width:600px){

.page-title{

    font-size:1.6rem;

}


.medical-card{

    padding:20px;

}


.medical-intro{

    font-size:.95rem;

}

}


</style>





<section class="medical-section">


<div class="medical-container">





<h1 class="page-title">

KYAU Medical Center

</h1>



<div class="orange-line"></div>







<p class="medical-intro">

The KYAU Medical Center provides essential healthcare support and medical services for students, faculty members, staff, and visitors. The center is committed to ensuring a healthy and safe campus environment through basic healthcare facilities, emergency support, and health awareness services.

</p>








<div class="medical-card">


<div class="medical-icon">

⚕️

</div>


<h3>

About Medical Center

</h3>


<p>

The university medical center serves as a convenient healthcare facility within the campus. It provides primary medical assistance and health-related support to the KYAU community whenever required.

</p>


</div>









<div class="medical-grid">





<div class="medical-card">


<h3>

Medical Services

</h3>


<ul>

<li>
First aid and basic medical assistance.
</li>

<li>
Health consultation support.
</li>

<li>
Prescription guidance and medicine support.
</li>

<li>
Emergency health assistance.
</li>

<li>
Basic health monitoring services.
</li>


</ul>


</div>








<div class="medical-card">


<h3>

Student Healthcare Support

</h3>


<ul>

<li>
Healthcare support for students during campus hours.
</li>

<li>
Assistance during illness or emergency situations.
</li>

<li>
Health awareness and preventive care guidance.
</li>

<li>
Support for residential and campus students.
</li>


</ul>


</div>






</div>









<div class="medical-card">


<h3>

Facilities

</h3>


<ul>

<li>
Basic medical equipment and healthcare facilities.
</li>

<li>
Comfortable consultation area.
</li>

<li>
Health records and medical support system.
</li>

<li>
Referral support for specialized treatment when necessary.
</li>


</ul>


</div>









<div class="medical-card">


<h3>

Health Awareness Programme

</h3>


<p>

KYAU Medical Center promotes health awareness among students and employees through preventive healthcare activities, wellness guidance, and health-related campaigns.

</p>


</div>









<div class="medical-card">


<h3>

Emergency Support

</h3>


<p>

The Medical Center provides immediate support during medical emergencies and assists in arranging further medical care whenever required.

</p>


</div>









<div class="medical-card">


<h3>

Contact Information

</h3>


<p>

<strong>
KYAU Medical Center
</strong>

<br><br>

Doctor information, contact number, service hours, and emergency contact details will be updated soon.

</p>


</div>







</div>


</section>



@endsection