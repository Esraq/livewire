@extends('layouts.app')

@section('content')

<style>

.ac-section{
    padding:40px 0;
    background:#fff;
}


.page-title{

    text-align:center;
    font-size:18px;
    font-weight:600;
    text-transform:uppercase;
    color:#222;
    margin-bottom:8px;

}


.title-line{

    height:1px;
    width:100%;
    background:#e8552e;
    margin-bottom:8px;

}


.table-container{

    width:100%;
    overflow-x:auto;

}


.ac-table{

    width:100%;
    border-collapse:collapse;
    font-size:13px;
}


.ac-table th{

    border:1px solid #d6dce0;
    padding:8px;
    background:#fff;
    text-align:left;
    font-weight:600;

}



.ac-table td{

    border:1px solid #d6dce0;
    padding:8px;
    vertical-align:middle;

}



.ac-table tbody tr:nth-child(odd){

    background:#f1f1f1;

}


.ac-table tbody tr:nth-child(even){

    background:#fff;

}



.ac-table img{

    width:55px;
    height:55px;
    object-fit:cover;
    border-radius:50%;

}



.member-name{

    font-weight:600;
    color:#222;
    display:block;

}


.member-details{

    color:#555;
    font-size:12px;
    margin-top:4px;

}



.position{

    font-weight:500;
    color:#222;

}


.note{

    display:block;
    color:#555;
    font-size:12px;
    margin-top:4px;

}



@media(max-width:768px){

    .ac-table{

        min-width:900px;

    }

}


</style>



<section class="ac-section">


<div class="container">


<h1 class="page-title">
Academic Council
</h1>


<div class="title-line"></div>



<div class="table-container">


<table class="ac-table">


<thead>

<tr>

<th width="3%">
SL
</th>

<th width="12%">
Photo
</th>

<th width="40%">
Name
</th>

<th>
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

<span class="member-name">
Professor Dr. Md. Asraf Ali
</span>

<span class="member-details">
Vice Chancellor, Khwaja Yunus Ali University
</span>

</td>

<td>

<span class="position">
Chairman
</span>

<span class="note">
(.)
</span>

</td>

</tr>




<tr>

<td>2</td>

<td>
<img src="{{asset('images/council/mohammad-yusuf.jpg')}}">
</td>

<td>

<span class="member-name">
Mr. Mohammad Yusuf
</span>

<span class="member-details">
Chairman, Board of Trustees
</span>

</td>

<td>

<span class="position">
Member
</span>

<span class="note">
(Nominated by Board of Trustees)
</span>

</td>

</tr>





<tr>

<td>3</td>

<td>
<img src="{{asset('images/council/husne-ara.jpg')}}">
</td>

<td>

<span class="member-name">
Mrs. Husne Ara Hussain
</span>

<span class="member-details">
Member, Board of Trustees
</span>

</td>


<td>

<span class="position">
Member
</span>

<span class="note">
(Nominated by Board of Trustees)
</span>

</td>

</tr>





<tr>

<td>4</td>

<td>
<img src="{{asset('images/council/yunus-khan.jpg')}}">
</td>


<td>

<span class="member-name">
Mr. Mohammed Yunus Khan
</span>

<span class="member-details">
Member, Board of Trustees
</span>

</td>


<td>

<span class="position">
Member
</span>

<span class="note">
(Nominated by Board of Trustees)
</span>

</td>

</tr>





<tr>

<td>5</td>

<td>
<img src="{{asset('images/council/suman-kanti.jpg')}}">
</td>


<td>

<span class="member-name">
Professor Dr. Suman Kanti Barua
</span>

<span class="member-details">
Pro-Vice Chancellor, Rabindra University Bangladesh
</span>

</td>


<td>

<span class="position">
Member
</span>

<span class="note">
(Nominated by UGC)
</span>

</td>

</tr>





<tr>

<td>6</td>

<td>
<img src="{{asset('images/council/mostofa.jpg')}}">
</td>


<td>

<span class="member-name">
Prof. Dr. Mostofa Mahmud Hasan
</span>

<span class="member-details">
Dean, School of Business
</span>

</td>


<td>

<span class="position">
Member
</span>

<span class="note">
(Nominated By Vice Chancellor as the Dean)
</span>

</td>

</tr>





<tr>

<td>7</td>

<td>
<img src="{{asset('images/council/fazle.jpg')}}">
</td>


<td>

<span class="member-name">
Prof. Dr. Fazle Rabbi Shakil Ahmed
</span>

<span class="member-details">
Professor & Dean Faculty of Bio Medical Science
</span>

</td>


<td>

<span class="position">
Member
</span>

<span class="note">
(Nominated by Vice Chancellor as member of Academic Council)
</span>

</td>

</tr>





<tr>

<td>8</td>

<td>
<img src="{{asset('images/council/shafi.jpg')}}">
</td>


<td>

<span class="member-name">
Prof. Mohammad Shahed Akond
</span>

<span class="member-details">
Professor & Dean Faculty of Science & Engineering
</span>

</td>


<td>

<span class="position">
Member
</span>

<span class="note">
(Nominated by Vice Chancellor as Head of Department)
</span>

</td>

</tr>





<tr>

<td>9</td>

<td>
<img src="{{asset('images/council/mizanur.jpg')}}">
</td>


<td>

<span class="member-name">
Md. Mizanur Rahman
</span>

<span class="member-details">
Registrar (In Charge)
</span>

</td>


<td>

<span class="position">
Member Secretary
</span>

<span class="note">
(.)
</span>

</td>

</tr>



</tbody>


</table>


</div>



</div>


</section>


@endsection