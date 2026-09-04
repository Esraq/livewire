@extends('layouts.app')

@section('content')


<section style="padding: clamp(2.5rem, 6vw, 5rem) 0;">
  <div style="max-width: 1100px; margin: 0 auto; padding: 0 1.25rem;">
    <div style="display: flex; flex-wrap: wrap; gap: 1.5rem; align-items: stretch;">

      <!-- Founder card -->
      <div style="flex: 0 1 300px; border: 1px solid #e2e2e2; border-radius: 6px; padding: 1rem; text-align: center;">
        <div style="border: 1px solid #e2e2e2; border-radius: 4px; padding: 0.5rem; margin-bottom: 1rem;">
          <img src="{{ asset('assets/images/registrar.png') }}" alt="tressurer" style="width: 100%; height: auto; display: block; border-radius: 2px;">
        </div>
        <h3 style="color: #e8552e; font-size: 1.15rem; font-weight: 700; margin: 0 0 0.75rem;">
          Md Mizanur Rahman
        </h3>
        <p style="font-size: 1.05rem; font-weight: 700; color: #1a1a1a; margin: 0 0 0.4rem;">
         Registrar
        </p>
        <p style="font-size: 1rem; font-weight: 600; color: #333; margin: 0 0 0.4rem;">
          Khwaja Yunus Ali University
        </p>
       
      </div>

      <!-- Message -->
      <div style="flex: 1 1 500px; border: 1px solid #e2e2e2; border-radius: 6px; padding: 1.5rem;">
        <h2 style="font-size: clamp(1.15rem, 2.2vw, 1.4rem); font-weight: 700; color: #1a1a1a; margin: 0 0 0.75rem;">
          Message of the Registrar
        </h2>
        <div style="border-bottom: 3px solid #e8552e; margin-bottom: 1.25rem;"></div>
        <p style="text-align: justify; line-height: 1.85; font-size: 1.05rem; color: #333; margin: 0;">
          
         Dear Students, Faculty, and Guardians,

On behalf of the Registrar's Office, I extend a warm welcome to everyone joining or continuing their journey at Khwaja Yunus Ali University (KYAU). Since our establishment in 2012 in Enayetpur, Sirajganj, the university has worked steadily to build academic systems that are efficient, transparent, and responsive to the needs of our students and faculty.

The Registrar's Office serves as the administrative backbone of the university — overseeing admissions, academic records, examinations, curriculum coordination, and the countless processes that keep our institution running smoothly. Our goal is simple: to ensure that every student's academic journey, from enrollment to graduation, is supported by accurate records, clear communication, and timely service.

We are committed to maintaining the highest standards of academic integrity and administrative efficiency, working closely with our Schools of Biomedical Science, Business, Human Science, Law, Science and Engineering, and Social Science to ensure that policies and procedures serve both the university's academic mission and the practical needs of our students.

I want to thank our faculty and staff for their cooperation in maintaining accurate academic records and adhering to university policies, and our students for their patience and diligence as they navigate their academic requirements. To our guardians, thank you for entrusting us with your children's education.

As KYAU continues to grow, the Registrar's Office remains dedicated to modernizing our processes and improving the overall academic experience for every member of our university community.<br>

With warm regards,<br>

Registrar Khwaja Yunus Ali University (KYAU)

        </p>
      </div>

    </div>
  </div>
</section>



@endsection