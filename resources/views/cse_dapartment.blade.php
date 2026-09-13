@extends('layouts.app')

@section('content')


<style>

.dept-section{
    padding:clamp(2.5rem,6vw,5rem) 0;
}


.dept-container{
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
    text-align:justify;
    color:#555;
    line-height:1.9;
    font-size:1.02rem;

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


.info-card p{

    color:#555;
    line-height:1.8;

}





/* Grid */

.two-grid{

    display:grid;
    grid-template-columns:repeat(2,1fr);
    gap:25px;
    margin-top:40px;

}







/* Head Message */

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



.profile-card span{

    display:block;
    color:#888;
    font-size:.9rem;
    margin-bottom:15px;

}



.profile-card p{

    color:#555;
    line-height:1.8;
    text-align:left;

}





/* PDF Button */

.pdf-btn{

    display:inline-block;
    margin-top:20px;
    padding:10px 25px;
    background:#e8552e;
    color:#fff;
    border-radius:6px;
    text-decoration:none;
    transition:.3s;
    font-weight:600;

}



.pdf-btn:hover{

    background:#c94220;
    color:#fff;

}





/* Responsive */

@media(max-width:900px){

.two-grid{

    grid-template-columns:1fr;

}

}




@media(max-width:600px){

.page-title{

    font-size:1.6rem;

}


.profile-card{

    padding:20px;

}

}



</style>





<section class="dept-section">


<div class="dept-container">





<!-- Header -->


<h1 class="page-title">

Department of Computer Science And Engineering

</h1>



<div class="orange-line"></div>




<p class="intro">

Testing

</p>







<!-- Vision Mission -->


<div class="two-grid">


<div class="info-card">


<h3>
Vision
</h3>


<p>

Testing

</p>


</div>





<div class="info-card">


<h3>
Mission
</h3>


<p>

Testing

</p>


</div>



</div>









<!-- Head Message -->


<h2 class="page-title" style="margin-top:60px;">

Message | 

<a href="/cse_faculty" style="color:#1a73e8;text-decoration:none;">

Faculty List

</a>

</h2>



<div class="orange-line"></div>





<div class="profile-grid">


<div class="profile-card">


<img src="" alt="Head of Department">



<h3>

F M Javeed Mehedi Samrat

</h3>


<span>

Head, CSE

</span>



<p>

Will be published letter

</p>



</div>


</div>









<!-- Programme Section -->


<h2 class="page-title" style="margin-top:60px;">

Programmes

</h2>



<div class="orange-line"></div>





<div class="two-grid">





<!-- Undergraduate Programme -->


<div class="info-card">


<h3>

Undergraduate Programme

</h3>


<p>

<strong>

B.Sc. in Computer Science and Engineering (CSE)

</strong>


<br><br>


The undergraduate programme provides students with strong foundations in programming, algorithms, software engineering, database systems, artificial intelligence, networking, and modern computing technologies.


</p>



  <a href="{{ asset('uploads/programmes/graduate-programme.pdf') }}" 
target="_blank"
class="pdf-btn">

View Programme Details PDF

</a>







</div>








<!-- Graduate Programme -->


<div class="info-card">


<h3>

Graduate Programme

</h3>


<p>

<strong>

M.Sc. in Computer Science (CS)

</strong>


<br><br>


The graduate programme focuses on advanced research and professional development in areas such as artificial intelligence, machine learning, data science, cybersecurity, software engineering, and emerging technologies.


</p>



<a href="{{ asset('uploads/programmes/graduate-programme.pdf') }}" 
target="_blank"
class="pdf-btn">

View Programme Details PDF

</a>



</div>





</div>






</div>


</section>



@endsection