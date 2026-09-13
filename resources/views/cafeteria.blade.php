@extends('layouts.app')

@section('content')


<style>

.cafe-section{

    padding:clamp(2.5rem,6vw,5rem) 0;
    background:#fff;

}


.cafe-container{

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




.cafe-intro{

    max-width:900px;
    margin:auto;
    text-align:justify;
    color:#555;
    line-height:1.9;
    font-size:1.02rem;

}





.cafe-card{

    border:1px solid #e2e2e2;
    border-radius:10px;
    padding:25px;
    background:#fff;
    margin-top:25px;
    transition:.3s;

}



.cafe-card:hover{

    box-shadow:0 10px 25px rgba(0,0,0,.08);

}




.cafe-card h3{

    color:#e8552e;
    font-size:1.25rem;
    margin-bottom:15px;

}



.cafe-card p,
.cafe-card li{

    color:#555;
    line-height:1.9;

}



.cafe-card ul{

    padding-left:20px;

}





.cafe-grid{

    display:grid;
    grid-template-columns:repeat(2,1fr);
    gap:25px;
    margin-top:25px;

}



@media(max-width:900px){

.cafe-grid{

    grid-template-columns:1fr;

}

}




@media(max-width:600px){

.page-title{

    font-size:1.6rem;

}


.cafe-card{

    padding:20px;

}


.cafe-intro{

    font-size:.95rem;

}

}


</style>





<section class="cafe-section">


<div class="cafe-container">





<h1 class="page-title">

Cafeteria

</h1>



<div class="orange-line"></div>






<p class="cafe-intro">

The KYAU Cafeteria provides a comfortable and hygienic dining environment for students, faculty members, and staff. It serves as an important campus facility where members of the university community can enjoy quality meals, refreshments, and social interaction.

</p>









<div class="cafe-card">


<h3>

About Cafeteria

</h3>


<p>

The university cafeteria is designed to support the daily needs of students and employees by providing fresh food, beverages, and a relaxing space within the campus environment.

</p>


</div>









<div class="cafe-grid">





<div class="cafe-card">


<h3>

Food Services

</h3>


<ul>

<li>
Breakfast, lunch, snacks, and refreshments.
</li>

<li>
Variety of food options for students and staff.
</li>

<li>
Affordable meal facilities within campus.
</li>

<li>
Clean and hygienic food preparation environment.
</li>


</ul>


</div>








<div class="cafe-card">


<h3>

Student Experience

</h3>


<ul>

<li>
A common gathering space for students.
</li>

<li>
Opportunity for social interaction and relaxation.
</li>

<li>
A comfortable environment between academic activities.
</li>

<li>
Support for campus community building.
</li>


</ul>


</div>






</div>









<div class="cafe-card">


<h3>

Cafeteria Facilities

</h3>


<ul>

<li>
Seating arrangements for students and university members.
</li>

<li>
Clean dining area and service facilities.
</li>

<li>
Food and beverage service throughout university hours.
</li>

<li>
A welcoming environment for campus users.
</li>


</ul>


</div>









<div class="cafe-card">


<h3>

Healthy & Hygienic Food Practice

</h3>


<p>

KYAU encourages maintaining food quality, cleanliness, and hygiene standards to ensure a safe and healthy dining experience for all members of the university community.

</p>


</div>









</div>


</section>



@endsection