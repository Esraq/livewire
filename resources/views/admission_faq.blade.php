@extends('layouts.app')

@section('content')


<style>

.faq-section{
    padding:clamp(3rem,7vw,6rem) 0;
    min-height:60vh;
    display:flex;
    align-items:center;
}


.faq-container{
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




.faq-card{

    max-width:700px;
    margin:auto;
    border:1px solid #e2e2e2;
    border-radius:12px;
    padding:50px 30px;
    text-align:center;
    background:#fff;
    transition:.3s;

}



.faq-card:hover{

    box-shadow:0 12px 30px rgba(0,0,0,.08);

}





.faq-icon{

    width:80px;
    height:80px;
    border-radius:50%;
    background:#fdece6;
    display:flex;
    align-items:center;
    justify-content:center;
    margin:0 auto 25px;
    font-size:35px;

}





.faq-card h3{

    color:#e8552e;
    font-size:1.5rem;
    margin-bottom:15px;

}




.faq-card p{

    color:#555;
    line-height:1.8;
    font-size:1.05rem;

}




@media(max-width:600px){

.page-title{
    font-size:1.6rem;
}


.faq-card{
    padding:35px 20px;
}

}


</style>





<section class="faq-section">


<div class="faq-container">



<h1 class="page-title">

Admission FAQ

</h1>


<div class="orange-line"></div>





<div class="faq-card">


<div class="faq-icon">

❓

</div>



<h3>

Published Soon

</h3>



<p>

The Admission FAQ section is currently under preparation. Frequently asked questions regarding admission procedures, eligibility criteria, application process, fees, and other admission-related information will be published soon.

</p>



</div>






</div>


</section>



@endsection