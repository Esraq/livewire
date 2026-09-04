

@extends('layouts.app')

@section('content')


  <section style="padding: clamp(2.5rem, 6vw, 5rem) 0;">
  <div style="max-width: 1100px; margin: 0 auto; padding: 0 1.25rem;">
    <div style="display: flex; flex-wrap: wrap; gap: 1.5rem; align-items: stretch;">

      <!-- Founder card -->
      <div style="flex: 0 1 300px; border: 1px solid #e2e2e2; border-radius: 6px; padding: 1rem; text-align: center;">
        <div style="border: 1px solid #e2e2e2; border-radius: 4px; padding: 0.5rem; margin-bottom: 1rem;">
          <img src="{{ asset('assets/images/arif.png') }}" alt="Mohammad Yusuf" style="width: 100%; height: auto; display: block; border-radius: 2px;">
        </div>
        <h3 style="color: #e8552e; font-size: 1.15rem; font-weight: 700; margin: 0 0 0.75rem;">
          Md. Arifujjaman
        </h3>
        <p style="font-size: 1.05rem; font-weight: 700; color: #1a1a1a; margin: 0 0 0.4rem;">
        Deputy Director (IT)

        </p>
        <p style="font-size: 1rem; font-weight: 600; color: #333; margin: 0 0 0.4rem;">
          01710437840<br>
 arifujjaman.it@kyau.edu.bd
 
        </p>
        <p style="font-size: 0.95rem; font-weight: 600; color: #333; margin: 0;">
         null (intercom)<br>
 111 (Room No.)
        </p>
      </div>

      <!-- Message -->

        <div style="flex: 0 1 300px; border: 1px solid #e2e2e2; border-radius: 6px; padding: 1rem; text-align: center;">
        <div style="border: 1px solid #e2e2e2; border-radius: 4px; padding: 0.5rem; margin-bottom: 1rem;">
          <img src="{{ asset('assets/images/tauhid.png') }}" alt="Mohammad Yusuf" style="width: 100%; height: auto; display: block; border-radius: 2px;">
        </div>
        <h3 style="color: #e8552e; font-size: 1.15rem; font-weight: 700; margin: 0 0 0.75rem;">
          Md Tauhid Hasan Brook
        </h3>
        <p style="font-size: 1.05rem; font-weight: 700; color: #1a1a1a; margin: 0 0 0.4rem;">
          Network Engineer
        </p>
        <p style="font-size: 1rem; font-weight: 600; color: #333; margin: 0 0 0.4rem;">
          01404461513 <br>
 tauhid.it@kyau.edu.bd
        </p>
        <p style="font-size: 0.95rem; font-weight: 600; color: #333; margin: 0;">
          128 (intercom) <br>
 428 (Room No.)
        </p>
      </div>

      <div style="flex: 0 1 300px; border: 1px solid #e2e2e2; border-radius: 6px; padding: 1rem; text-align: center;">
        <div style="border: 1px solid #e2e2e2; border-radius: 4px; padding: 0.5rem; margin-bottom: 1rem;">
          <img src="{{ asset('assets/images/jakirul.png') }}" alt="Mohammad Yusuf" style="width: 100%; height: auto; display: block; border-radius: 2px;">
        </div>
        <h3 style="color: #e8552e; font-size: 1.15rem; font-weight: 700; margin: 0 0 0.75rem;">
          
         Jakirul Islam
        </h3>
        <p style="font-size: 1.05rem; font-weight: 700; color: #1a1a1a; margin: 0 0 0.4rem;">
          Assistant Officer
        </p>
        <p style="font-size: 1rem; font-weight: 600; color: #333; margin: 0 0 0.4rem;">
          01783440244 <br>
 jakirul.it@kyau.edu.bd
        </p>
        <p style="font-size: 0.95rem; font-weight: 600; color: #333; margin: 0;">
       128 (intercom)
 428 (Room No.)
        </p>
      </div>

     

   
    </div>
  </div>
</section>



@endsection