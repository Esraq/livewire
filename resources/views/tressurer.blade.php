@extends('layouts.app')

@section('content')


<section style="padding: clamp(2.5rem, 6vw, 5rem) 0;">
  <div style="max-width: 1100px; margin: 0 auto; padding: 0 1.25rem;">
    <div style="display: flex; flex-wrap: wrap; gap: 1.5rem; align-items: stretch;">

      <!-- Founder card -->
      <div style="flex: 0 1 300px; border: 1px solid #e2e2e2; border-radius: 6px; padding: 1rem; text-align: center;">
        <div style="border: 1px solid #e2e2e2; border-radius: 4px; padding: 0.5rem; margin-bottom: 1rem;">
          <img src="{{ asset('assets/images/tresurrer.png') }}" alt="tressurer" style="width: 100%; height: auto; display: block; border-radius: 2px;">
        </div>
        <h3 style="color: #e8552e; font-size: 1.15rem; font-weight: 700; margin: 0 0 0.75rem;">
          Professor Ahsanullah Habib
        </h3>
        <p style="font-size: 1.05rem; font-weight: 700; color: #1a1a1a; margin: 0 0 0.4rem;">
         Tressurer
        </p>
        <p style="font-size: 1rem; font-weight: 600; color: #333; margin: 0 0 0.4rem;">
          Khwaja Yunus Ali University
        </p>
       
      </div>

      <!-- Message -->
      <div style="flex: 1 1 500px; border: 1px solid #e2e2e2; border-radius: 6px; padding: 1.5rem;">
        <h2 style="font-size: clamp(1.15rem, 2.2vw, 1.4rem); font-weight: 700; color: #1a1a1a; margin: 0 0 0.75rem;">
          Message of the Tressurer
        </h2>
        <div style="border-bottom: 3px solid #e8552e; margin-bottom: 1.25rem;"></div>
        <p style="text-align: justify; line-height: 1.85; font-size: 1.05rem; color: #333; margin: 0;">
          
         Dear Students, Faculty, and Stakeholders,

It is my privilege to extend a warm welcome to everyone associated with Khwaja Yunus Ali University (KYAU). Since our establishment in 2012 in Enayetpur, Sirajganj, the university has grown steadily, and much of that growth rests on a foundation of sound financial planning, transparency, and responsible stewardship of our resources.

As Treasurer, my responsibility is to ensure that every resource entrusted to this university — whether from tuition, grants, or the generosity of our donors and well-wishers — is managed with integrity and directed toward what matters most: quality education, strong infrastructure, and opportunities for our students and faculty to excel. Financial discipline is not separate from our academic mission; it is what makes that mission sustainable for generations to come.

Over the years, we have worked to expand our facilities, support faculty development, and invest in the tools our students need to compete on a global stage, all while maintaining the fiscal responsibility that ensures KYAU's long-term stability. This balance between ambition and prudence will continue to guide every decision made in this office.

I want to thank our administration, faculty, and staff for their continued diligence, and our students and their families for the trust they place in us. I also extend my gratitude to our donors and partners, whose support strengthens our ability to serve the communities around us.

As we look to the future, I remain committed to ensuring that KYAU's financial foundation stays as strong as its academic aspirations, so that the university can continue to grow, innovate, and serve for many years ahead.<br>

With sincere regards,<br>

Treasurer Khwaja Yunus Ali University (KYAU)

        </p>
      </div>

    </div>
  </div>
</section>



@endsection