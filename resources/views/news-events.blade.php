@extends('layouts.app')

@section('content')


<style>

.news-section{

    padding:clamp(2.5rem,6vw,5rem) 0;
    background:#fff;

}



.news-container{

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





.news-grid{

    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:25px;

}




.news-card{

    border:1px solid #e2e2e2;
    border-radius:10px;
    overflow:hidden;
    background:#fff;
    transition:.3s;

}



.news-card:hover{

    box-shadow:0 10px 25px rgba(0,0,0,.08);

}





.news-image{

    width:100%;
    height:220px;
    object-fit:cover;
    background:#f5f5f5;

}





.news-content{

    padding:20px;

}



.news-date{

    color:#e8552e;
    font-size:.9rem;
    font-weight:600;
    margin-bottom:10px;

}




.news-content h3{

    font-size:1.2rem;
    color:#222;
    margin-bottom:12px;

}




.news-content p{

    color:#555;
    line-height:1.7;
    font-size:.95rem;

}





.read-more{

    display:inline-block;
    margin-top:15px;
    color:#e8552e;
    font-weight:600;
    text-decoration:none;

}



.read-more:hover{

    text-decoration:underline;

}





.category{

    display:inline-block;
    background:#fdece6;
    color:#e8552e;
    padding:5px 12px;
    border-radius:20px;
    font-size:.8rem;
    margin-bottom:10px;

}





@media(max-width:900px){

.news-grid{

    grid-template-columns:repeat(2,1fr);

}

}





@media(max-width:600px){

.news-grid{

    grid-template-columns:1fr;

}


.page-title{

    font-size:1.6rem;

}


.news-image{

    height:200px;

}

}


</style>





<section class="news-section">


<div class="news-container">





<h1 class="page-title">

News & Events

</h1>



<div class="orange-line"></div>







<div class="news-grid">





<!-- News Card 1 -->


<div class="news-card">


<img src="{{ asset('images/news/news1.jpg') }}"
class="news-image"
alt="News Image">



<div class="news-content">


<span class="category">

University Event

</span>



<div class="news-date">

05 September 2026

</div>



<h3>

KYAU Organizes Academic Excellence Programme

</h3>



<p>

Khwaja Yunus Ali University organized an academic programme bringing together students, faculty members, and guests.

</p>



<a href="#" class="read-more">

Read More →

</a>



</div>


</div>








<!-- News Card 2 -->


<div class="news-card">


<img src="{{ asset('images/news/news2.jpg') }}"
class="news-image"
alt="News Image">



<div class="news-content">


<span class="category">

Research

</span>



<div class="news-date">

28 August 2026

</div>



<h3>

Research and Innovation Activities at KYAU

</h3>



<p>

Faculty members and researchers continue to contribute through innovative research projects and academic collaborations.

</p>



<a href="#" class="read-more">

Read More →

</a>



</div>


</div>








<!-- News Card 3 -->


<div class="news-card">


<img src="{{ asset('images/news/news3.jpg') }}"
class="news-image"
alt="News Image">



<div class="news-content">


<span class="category">

Student Activities

</span>



<div class="news-date">

20 August 2026

</div>



<h3>

Student Cultural and Sports Events

</h3>



<p>

KYAU students participated in various cultural, social, and sports activities promoting teamwork and creativity.

</p>



<a href="#" class="read-more">

Read More →

</a>



</div>


</div>






</div>






</div>


</section>



@endsection