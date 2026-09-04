@extends('layouts.app')

@section('content')

<style>

.academic-section{
    padding:40px 0;
    background:#fff;
}


.page-heading{
    text-align:center;
    font-size:18px;
    font-weight:600;
    text-transform:uppercase;
    color:#222;
    margin-bottom:8px;
}


.heading-line{
    height:1px;
    background:#e8552e;
    width:100%;
    margin-bottom:10px;
}


.table-responsive{
    overflow-x:auto;
}


.academic-table{

    width:100%;
    border-collapse:collapse;
    font-size:12px;

}


.academic-table th{

    border:1px solid #d5dce0;
    padding:7px;
    text-align:left;
    font-weight:600;
    background:#fff;

}


.academic-table td{

    border:1px solid #d5dce0;
    padding:7px;
    vertical-align:middle;

}



.academic-table tbody tr:nth-child(odd){

    background:#f1f1f1;

}


.academic-table tbody tr:nth-child(even){

    background:#fff;

}



.academic-table img{

    width:45px;
    height:45px;
    border-radius:50%;
    object-fit:cover;

}



.person-name{

    font-weight:600;
    color:#222;
    display:block;

}


.designation{

    color:#555;
    font-size:11px;
    display:block;
    margin-top:3px;

}



.position-title{

    font-weight:600;

}


.position-note{

    color:#555;
    font-size:11px;
    display:block;

}



@media(max-width:768px){

.academic-table{

    min-width:950px;

}

}

</style>



<section class="academic-section">

<div class="container">


<h1 class="page-heading">
Academic Council
</h1>

<div class="heading-line"></div>



<div class="table-responsive">


<table class="academic-table">


<thead>

<tr>

<th width="3%">
SL
</th>

<th width="10%">
Photo
</th>

<th width="55%">
Name
</th>

<th width="32%">
Position
</th>

</tr>

</thead>



<tbody>



<tr>
<td>1</td>

<td>
<img src="{{asset('images/council/md-asraf-ali.jpg')}}">
</td>

<td>
<span class="person-name">
Professor Dr. Md. Asraf Ali
</span>
<span class="designation">
Khwaja Yunus Ali University
</span>
</td>

<td>
<span class="position-title">
Chairman
</span>
<span class="position-note">
(.)
</span>
</td>

</tr>




<tr>
<td>2</td>

<td>
<img src="{{asset('images/council/zulfikar.jpg')}}">
</td>

<td>
<span class="person-name">
Prof. Dr. Zulfikar Ali, PhD
</span>
<span class="designation">
Khwaja Yunus Ali Medical College
</span>
</td>

<td>
<span class="position-title">
Member
</span>
<span class="position-note">
(An academic professional nominated by the Syndicate)
</span>
</td>

</tr>




<tr>
<td>3</td>

<td>
<img src="{{asset('images/council/saiful.jpg')}}">
</td>

<td>
<span class="person-name">
Prof. Dr. Md. Saiful Islam
</span>
<span class="designation">
Khwaja Yunus Ali Medical College
</span>
</td>

<td>
<span class="position-title">
Member
</span>
<span class="position-note">
(An academic professional nominated by the Syndicate)
</span>
</td>

</tr>




<tr>
<td>4</td>

<td>
<img src="{{asset('images/council/mohsin.jpg')}}">
</td>

<td>
<span class="person-name">
Professor Dr. A.F.M. Mohsin
</span>
<span class="designation">
Dean, School of Law
</span>
</td>

<td>
<span class="position-title">
Member
</span>
<span class="position-note">
(Dean)
</span>
</td>

</tr>




<tr>
<td>5</td>

<td>
<img src="{{asset('images/council/fazle.jpg')}}">
</td>

<td>
<span class="person-name">
Dr. Fazle Rabbi Shakil Ahmed
</span>
<span class="designation">
Professor & Dean, Faculty of Biomedical Science
</span>
</td>

<td>
<span class="position-title">
Member
</span>
</td>

</tr>




<tr>
<td>6</td>

<td>
<img src="{{asset('images/council/shahed.jpg')}}">
</td>

<td>
<span class="person-name">
Prof. Mohammad Shahed Akond
</span>

<span class="designation">
Professor & Dean, Faculty of Science & Engineering
</span>

</td>

<td>
<span class="position-title">
Member
</span>
</td>

</tr>




<tr>
<td>7</td>

<td>
<img src="{{asset('images/council/mostofa.jpg')}}">
</td>

<td>
<span class="person-name">
Prof. Dr. Mostofa Mahmud Hasan
</span>

<span class="designation">
Professor & Dean, Faculty of Business
</span>

</td>

<td>
<span class="position-title">
Member
</span>
</td>

</tr>




<tr>
<td>8</td>

<td>
<img src="{{asset('images/council/tariq.jpg')}}">
</td>

<td>

<span class="person-name">
Dr. Md. Tariqul Islam
</span>

<span class="designation">
Assistant Professor & Head, Department of Biochemistry & Biotechnology
</span>

</td>

<td>
<span class="position-title">
Member
</span>
</td>

</tr>




<tr>
<td>9</td>

<td>
<img src="{{asset('images/council/motahar.jpg')}}">
</td>

<td>

<span class="person-name">
Dr. Md. Motahar Hossain
</span>

<span class="designation">
Assistant Professor & Head, Department of Business Administration
</span>

</td>

<td>
<span class="position-title">
Member
</span>
</td>

</tr>



<tr>
<td>10</td>

<td>
<img src="{{asset('images/council/default.png')}}">
</td>

<td>

<span class="person-name">
Md. Mizanur Rahman
</span>

<span class="designation">
Registrar (In Charge)
</span>

</td>

<td>

<span class="position-title">
Member Secretary
</span>

</td>

</tr>



</tbody>


</table>


</div>


</div>

</section>


@endsection