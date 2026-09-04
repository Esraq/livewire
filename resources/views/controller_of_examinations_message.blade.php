

@extends('layouts.app')

@section('content')

<section style="padding: clamp(2.5rem, 6vw, 5rem) 0;">
  <div style="max-width: 1100px; margin: 0 auto; padding: 0 1.25rem;">
    <div style="display: flex; flex-wrap: wrap; gap: 1.5rem; align-items: stretch;">

      <!-- Founder card -->
      <div style="flex: 0 1 300px; border: 1px solid #e2e2e2; border-radius: 6px; padding: 1rem; text-align: center;">
        <div style="border: 1px solid #e2e2e2; border-radius: 4px; padding: 0.5rem; margin-bottom: 1rem;">
          <img src="{{ asset('assets/images/torab.png') }}" alt="Mohammad Yusuf" style="width: 100%; height: auto; display: block; border-radius: 2px;">
        </div>
        <h3 style="color: #e8552e; font-size: 1.15rem; font-weight: 700; margin: 0 0 0.75rem;">
          Professor Abu Torab Md. Hassan
        </h3>
        <p style="font-size: 1.05rem; font-weight: 700; color: #1a1a1a; margin: 0 0 0.4rem;">
        Controller of Examinations
        </p>
        <p style="font-size: 1rem; font-weight: 600; color: #333; margin: 0 0 0.4rem;">
          01404461504<br>
 torab.coe@kyau.edu.bd
 
        </p>
        <p style="font-size: 0.95rem; font-weight: 600; color: #333; margin: 0;">
          134 (intercom)<br>
 201 (Room No.)
        </p>
      </div>

      <!-- Message -->

        <div style="flex: 0 1 300px; border: 1px solid #e2e2e2; border-radius: 6px; padding: 1rem; text-align: center;">
        <div style="border: 1px solid #e2e2e2; border-radius: 4px; padding: 0.5rem; margin-bottom: 1rem;">
          <img src="{{ asset('assets/images/sakir.png') }}" alt="Mohammad Yusuf" style="width: 100%; height: auto; display: block; border-radius: 2px;">
        </div>
        <h3 style="color: #e8552e; font-size: 1.15rem; font-weight: 700; margin: 0 0 0.75rem;">
          Md. Sakir Hossain
        </h3>
        <p style="font-size: 1.05rem; font-weight: 700; color: #1a1a1a; margin: 0 0 0.4rem;">
          Asst. Controller of Exams
        </p>
        <p style="font-size: 1rem; font-weight: 600; color: #333; margin: 0 0 0.4rem;">
           01404461521 <br>
 sakir.coe@kyau.edu.bd
        </p>
        <p style="font-size: 0.95rem; font-weight: 600; color: #333; margin: 0;">
           142 (intercom) <br>
 203 (Room No.)
        </p>
      </div>

   
    </div>
  </div>
</section>

@endsection