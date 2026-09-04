@extends('layouts.app')

@section('content')


<section style="padding: clamp(2.5rem, 6vw, 5rem) 0;">
  <div style="max-width: 1100px; margin: 0 auto; padding: 0 1.25rem;">
    <div style="display: flex; flex-wrap: wrap; gap: 1.5rem; align-items: stretch;">

      <!-- Founder card -->
      <div style="flex: 0 1 300px; border: 1px solid #e2e2e2; border-radius: 6px; padding: 1rem; text-align: center;">
        <div style="border: 1px solid #e2e2e2; border-radius: 4px; padding: 0.5rem; margin-bottom: 1rem;">
          <img src="{{ asset('assets/images/vc.png') }}" alt="Professor Dr. Md. Asraf Ali" style="width: 100%; height: auto; display: block; border-radius: 2px;">
        </div>
        <h3 style="color: #e8552e; font-size: 1.15rem; font-weight: 700; margin: 0 0 0.75rem;">
          Professor Dr. Md. Asraf Ali
        </h3>
        <p style="font-size: 1.05rem; font-weight: 700; color: #1a1a1a; margin: 0 0 0.4rem;">
         Vice Chancellor
        </p>
        <p style="font-size: 1rem; font-weight: 600; color: #333; margin: 0 0 0.4rem;">
          Khwaja Yunus Ali University
        </p>
       
      </div>

      <!-- Message -->
      <div style="flex: 1 1 500px; border: 1px solid #e2e2e2; border-radius: 6px; padding: 1.5rem;">
        <h2 style="font-size: clamp(1.15rem, 2.2vw, 1.4rem); font-weight: 700; color: #1a1a1a; margin: 0 0 0.75rem;">
          Message of the honorable Vice Chancellor
        </h2>
        <div style="border-bottom: 3px solid #e8552e; margin-bottom: 1.25rem;"></div>
        <p style="text-align: justify; line-height: 1.85; font-size: 1.05rem; color: #333; margin: 0;">
          
          Dear Students, Faculty, and Members of the KYAU Family,

It gives me great pleasure to welcome you to Khwaja Yunus Ali University (KYAU), an institution that, since its establishment in 2012 on the banks of the river Jamuna in Enayetpur, Sirajganj, has steadily grown into a recognized center of academic excellence in Bangladesh.

Living up to our motto, "Quest for Knowledge," our Schools of Biomedical Science, Business, Human Science, Law, Science and Engineering, and Social Science are dedicated to producing graduates who are not only technically competent but also socially responsible and ethically grounded. Our Institutional Quality Assurance Cell continues to work closely with faculty and students to strengthen teaching methods, evaluation systems, and research culture across every discipline.

As Vice-Chancellor, my priority is to ensure that KYAU remains a place where academic rigor meets genuine care for every learner — where classrooms encourage critical thinking, laboratories foster innovation, and mentorship shapes character alongside competence. We are committed to aligning our curricula with global standards while remaining deeply connected to the needs of our local communities.

I encourage our students to approach their time here with discipline, intellectual curiosity, and a willingness to grow beyond the classroom. To our faculty, I extend my sincere appreciation for your continued dedication to teaching, research, and mentorship. And to our partners and well-wishers, thank you for your steadfast support as we work together to build a university that Bangladesh can be proud of.

I look forward to the journey ahead, and to seeing each member of our university community thrive.
<br>
With best wishes,<br>

Vice-Chancellor Khwaja Yunus Ali University (KYAU)


        </p>
      </div>

    </div>
  </div>
</section>



@endsection