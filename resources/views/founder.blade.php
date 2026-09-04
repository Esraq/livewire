@extends('layouts.app')

@section('content')


<section style="padding: clamp(2.5rem, 6vw, 5rem) 0;">
  <div style="max-width: 1100px; margin: 0 auto; padding: 0 1.25rem;">
    <div style="display: flex; flex-wrap: wrap; gap: 1.5rem; align-items: stretch;">

      <!-- Founder card -->
      <div style="flex: 0 1 300px; border: 1px solid #e2e2e2; border-radius: 6px; padding: 1rem; text-align: center;">
        <div style="border: 1px solid #e2e2e2; border-radius: 4px; padding: 0.5rem; margin-bottom: 1rem;">
          <img src="{{ asset('assets/images/founder.jpg') }}" alt="Dr. M. M. Amjad Hussain" style="width: 100%; height: auto; display: block; border-radius: 2px;">
        </div>
        <h3 style="color: #e8552e; font-size: 1.15rem; font-weight: 700; margin: 0 0 0.75rem;">
          DR. M. M. AMJAD HUSSAIN
        </h3>
        <p style="font-size: 1.05rem; font-weight: 700; color: #1a1a1a; margin: 0 0 0.4rem;">
          Founder Chairman
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
          I am really grateful to Almighty Allah who has given our family the opportunity and to nearly fulfill, what the great saint of the subcontinent Khwaja Yunus Ali (R) Enayetpuri once said, to establish a Center of Excellence for the welfare of Humanity. It came into being by founder and chairman Dr. M.M. Amjad Hussain in this sacred land, which is the holy birthplace of the great Saint. With the Mercy of Almighty Allah and blessings of Khwaja Yunus Ali (R), Enayetpuri, Khwaja Yunus Ali University has set forth its journey since 2012 to fulfill the holy wish of the great saint.
        </p>
      </div>

    </div>
  </div>
</section>



@endsection