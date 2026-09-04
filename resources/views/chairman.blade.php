@extends('layouts.app')

@section('content')


<section style="padding: clamp(2.5rem, 6vw, 5rem) 0;">
  <div style="max-width: 1100px; margin: 0 auto; padding: 0 1.25rem;">
    <div style="display: flex; flex-wrap: wrap; gap: 1.5rem; align-items: stretch;">

      <!-- Founder card -->
      <div style="flex: 0 1 300px; border: 1px solid #e2e2e2; border-radius: 6px; padding: 1rem; text-align: center;">
        <div style="border: 1px solid #e2e2e2; border-radius: 4px; padding: 0.5rem; margin-bottom: 1rem;">
          <img src="{{ asset('assets/images/chairman.png') }}" alt="Mohammad Yusuf" style="width: 100%; height: auto; display: block; border-radius: 2px;">
        </div>
        <h3 style="color: #e8552e; font-size: 1.15rem; font-weight: 700; margin: 0 0 0.75rem;">
          Mohammad Yusuf
        </h3>
        <p style="font-size: 1.05rem; font-weight: 700; color: #1a1a1a; margin: 0 0 0.4rem;">
          Chairman
        </p>
        <p style="font-size: 1rem; font-weight: 600; color: #333; margin: 0 0 0.4rem;">
          Khwaja Yunus Ali University
        </p>
        <p style="font-size: 0.95rem; font-weight: 600; color: #333; margin: 0;">
          1-Oct-1925 to 11-Sep-2012
        </p>
      </div>

      <!-- Message -->
      <div style="flex: 1 1 500px; border: 1px solid #e2e2e2; border-radius: 6px; padding: 1.5rem;">
        <h2 style="font-size: clamp(1.15rem, 2.2vw, 1.4rem); font-weight: 700; color: #1a1a1a; margin: 0 0 0.75rem;">
          Message of the honorable Founder and Chairman
        </h2>
        <div style="border-bottom: 3px solid #e8552e; margin-bottom: 1.25rem;"></div>
        <p style="text-align: justify; line-height: 1.85; font-size: 1.05rem; color: #333; margin: 0;">
         Dear Students, Faculty Members, and Well-wishers,

It is with immense pride and gratitude that I welcome you to Khwaja Yunus Ali University (KYAU). Established in 2012 on the fertile banks of the river Jamuna in Enayetpur, Sirajganj, our university was born from a simple but powerful conviction: that quality higher education should not be confined to a privileged few, but should reach the doorstep of the common people.

Guided by our motto, "Quest for Knowledge," KYAU has grown into a center of academic excellence across the fields of Biomedical Science, Business, Human Science, Law, Science and Engineering, and Social Science. Our mission remains steadfast — to nurture a skilled, ethical, and future-ready workforce capable of meeting the demands of the 21st century, while staying rooted in the values of integrity, compassion, and service to humanity.

None of this would be possible without the tireless dedication of our faculty, the discipline and curiosity of our students, and the unwavering support of our administration and stakeholders. Together, we continue to build an institution that our founders envisioned — one that transforms lives through knowledge and opens doors of opportunity for the communities we serve.

As Chairman, I remain committed to strengthening the infrastructure, academic quality, and research culture of KYAU, ensuring that every student who walks through our gates leaves not only with a degree, but with the character and competence to lead meaningfully in their chosen field.

I invite our students to embrace this journey with curiosity and discipline, our faculty to continue inspiring the next generation with excellence, and all our partners to walk alongside us as we work toward building a brighter future — for Sirajganj, for Bangladesh, and beyond.<br>

With warm regards,<br>

Chairman Khwaja Yunus Ali University (KYAU)
        </p>
      </div>

    </div>
  </div>
</section>



@endsection