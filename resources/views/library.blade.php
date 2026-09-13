@extends('layouts.app')

@section('content')


<style>

.library-section{

    padding:clamp(2.5rem,6vw,5rem) 0;
    background:#fff;

}


.library-container{

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





.library-intro{

    max-width:900px;
    margin:auto;
    text-align:justify;
    color:#555;
    line-height:1.9;
    font-size:1.02rem;

}





.library-card{

    border:1px solid #e2e2e2;
    border-radius:10px;
    padding:25px;
    background:#fff;
    margin-top:25px;
    transition:.3s;

}



.library-card:hover{

    box-shadow:0 10px 25px rgba(0,0,0,.08);

}



.library-card h3{

    color:#e8552e;
    font-size:1.25rem;
    margin-bottom:15px;

}



.library-card p,
.library-card li{

    color:#555;
    line-height:1.9;

}



.library-card ul{

    padding-left:20px;

}





.library-grid{

    display:grid;
    grid-template-columns:repeat(2,1fr);
    gap:25px;
    margin-top:25px;

}





@media(max-width:900px){

.library-grid{

    grid-template-columns:1fr;

}

}





@media(max-width:600px){

.page-title{

    font-size:1.6rem;

}


.library-card{

    padding:20px;

}


.library-intro{

    font-size:.95rem;

}

}


</style>





<section class="library-section">


<div class="library-container">





<h1 class="page-title">

Library

</h1>


<div class="orange-line"></div>





<p class="library-intro">

The KYAU Library serves as a center of knowledge, learning, and research support for students, faculty members, and researchers. The library provides access to academic resources, digital materials, and a comfortable learning environment to support teaching, learning, and research activities.

</p>








<div class="library-card">


<h3>

About KYAU Library

</h3>


<p>

The university library is designed to meet the academic and research needs of the KYAU community by providing a wide range of books, journals, research materials, and digital resources. It supports lifelong learning and encourages students to develop effective study and research skills.

</p>


</div>









<div class="library-grid">





<div class="library-card">


<h3>

Library Collection

</h3>


<ul>

<li>
Textbooks and reference books.
</li>

<li>
Academic journals and periodicals.
</li>

<li>
Research papers and publications.
</li>

<li>
Thesis and project reports.
</li>

<li>
Digital learning resources.
</li>

</ul>


</div>








<div class="library-card">


<h3>

Library Services

</h3>


<ul>

<li>
Book borrowing and return facilities.
</li>

<li>
Reference and information services.
</li>

<li>
Research support services.
</li>

<li>
Access to academic databases.
</li>

<li>
Study and reading facilities.
</li>

</ul>


</div>






</div>









<div class="library-card">


<h3>

Digital Library Resources

</h3>


<p>

KYAU promotes technology-based learning by providing access to digital resources, online academic materials, electronic journals, and research databases to support modern education and research.

</p>


</div>









<div class="library-card">


<h3>

Library Facilities

</h3>


<ul>

<li>
Comfortable reading environment.
</li>

<li>
Individual and group study spaces.
</li>

<li>
Computer and internet facilities.
</li>

<li>
Academic assistance from library personnel.
</li>

<li>
Support for students and researchers.
</li>


</ul>


</div>









<div class="library-card">


<h3>

Library Policy

</h3>


<ul>

<li>
Students must use valid university identification for library services.
</li>

<li>
Borrowed materials must be returned within the specified period.
</li>

<li>
Users must maintain a quiet and disciplined learning environment.
</li>

<li>
Library resources should be handled responsibly.
</li>

</ul>


</div>









<div class="library-card">


<h3>

Mission & Objectives

</h3>


<ul>

<li>
Provide quality academic resources for teaching and research.
</li>

<li>
Support students in achieving academic excellence.
</li>

<li>
Promote information literacy and independent learning.
</li>

<li>
Develop a modern knowledge-based learning environment.
</li>


</ul>


</div>









<div class="library-card">


<h3>

Contact Information

</h3>


<p>

<strong>
KYAU Library
</strong>

<br><br>

Contact details, librarian information, office hours, and library notices will be updated soon.

</p>


</div>






</div>


</section>



@endsection