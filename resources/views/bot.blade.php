@extends('layouts.app')

@section('content')

<style>

.bot-section{
    padding:40px 0;
    background:#fff;
}


.bot-title{

    text-align:center;
    font-size:18px;
    font-weight:600;
    color:#222;
    text-transform:uppercase;
    margin-bottom:8px;

}


.bot-line{

    height:1px;
    background:#e8552e;
    width:100%;
    margin-bottom:5px;

}



.table-wrapper{

    overflow-x:auto;

}



.bot-table{

    width:100%;
    border-collapse:collapse;
    font-size:13px;

}


.bot-table th{

    background:#fff;
    border:1px solid #d8d8d8;
    padding:8px;
    text-align:left;
    font-weight:600;

}


.bot-table td{

    border:1px solid #d8d8d8;
    padding:8px;
    color:#333;

}



.bot-table tbody tr:nth-child(odd){

    background:#f2f2f2;

}


.bot-table tbody tr:nth-child(even){

    background:#fff;

}



.bot-table img{

    width:45px;
    height:45px;
    border-radius:50%;
    object-fit:cover;

}



@media(max-width:768px){

.bot-table{

    min-width:700px;

}

}

</style>



<section class="bot-section">


<div class="container">


<h1 class="bot-title">
Board of Trustees
</h1>


<div class="bot-line"></div>



<div class="table-wrapper">


<table class="bot-table">


<thead>

<tr>

<th width="5%">
SL
</th>


<th width="18%">
Photo
</th>


<th>
Name
</th>


<th width="30%">
Position
</th>


</tr>

</thead>



<tbody>



<tr>

<td>
1
</td>


<td>

<img src="{{asset('images/trustees/mohammad-yusuf.jpg')}}">

</td>


<td>
Mohammad Yusuf
</td>


<td>
Chairman
</td>


</tr>




<tr>

<td>
2
</td>


<td>

<img src="{{asset('images/trustees/default.png')}}">

</td>


<td>
Prof. Dr. Rubaiyat Farzana Hussain
</td>


<td>
Member Secretary
</td>


</tr>




<tr>

<td>
3
</td>


<td>

<img src="{{asset('images/trustees/default.png')}}">

</td>


<td>
Mrs. Khwaja Tajmahal
</td>


<td>
Member
</td>


</tr>




<tr>

<td>
4
</td>


<td>

<img src="{{asset('images/trustees/default.png')}}">

</td>


<td>
Mrs. Husne Ara Hussain
</td>


<td>
Member
</td>


</tr>




<tr>

<td>
5
</td>


<td>

<img src="{{asset('images/trustees/default.png')}}">

</td>


<td>
Mr. M. A. Haider Hussain
</td>


<td>
Member
</td>


</tr>




<tr>

<td>
6
</td>


<td>

<img src="{{asset('images/trustees/default.png')}}">

</td>


<td>
Mrs. Laila Hussain
</td>


<td>
Member
</td>


</tr>




<tr>

<td>
7
</td>


<td>

<img src="{{asset('images/trustees/default.png')}}">

</td>


<td>
Prof. Dr. Zulfikar Ali
</td>


<td>
Member
</td>


</tr>




<tr>

<td>
8
</td>


<td>

<img src="{{asset('images/trustees/default.png')}}">

</td>


<td>
Mr. Shaikh Abu Reza
</td>


<td>
Member
</td>


</tr>




<tr>

<td>
9
</td>


<td>

<img src="{{asset('images/trustees/default.png')}}">

</td>


<td>
Mohammed Yunus Khan
</td>


<td>
Member
</td>


</tr>




<tr>

<td>
10
</td>


<td>

<img src="{{asset('images/trustees/md-asraf-ali.jpg')}}">

</td>


<td>
Professor Dr. Md. Asraf Ali
</td>


<td>
Member
</td>


</tr>



</tbody>


</table>


</div>



</div>


</section>


@endsection