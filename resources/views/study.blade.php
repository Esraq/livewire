@extends('layouts.app')

@section('content')
<section style="padding: clamp(2.5rem, 6vw, 5rem) 0;">
  <div style="max-width: 1100px; margin: 0 auto; padding: 0 1.25rem;">

    <h1 style="font-size: clamp(1.6rem, 3.2vw, 2.2rem); font-weight: 700; color: #1a1a1a; margin-bottom: 0.75rem; text-align: center;">
      Why Study Here
    </h1>
    <div style="width: 70px; height: 3px; background: #e8552e; margin: 0 auto 1.5rem;"></div>
    <p style="max-width: 720px; margin: 0 auto 3rem; text-align: center; line-height: 1.8; font-size: 1.05rem; color: #444;">
      Khwaja Yunus Ali University was founded in 2012 under the Private University Act 2010, with a vision to build a Centre of Excellence in higher education on the bank of the river Jamuna. Here's what sets a KYAU education apart.
    </p>

    <div style="display: flex; flex-wrap: wrap; gap: 1.5rem;">

      <!-- Reason 1 -->
      <div style="flex: 1 1 300px; border: 1px solid #e2e2e2; border-radius: 8px; padding: 1.5rem;">
        <div style="width: 44px; height: 44px; border-radius: 50%; background: #fdece6; color: #e8552e; display: flex; align-items: center; justify-content: center; font-size: 1.3rem; margin-bottom: 1rem;">🎓</div>
        <h3 style="font-size: 1.1rem; font-weight: 700; color: #1a1a1a; margin: 0 0 0.5rem;">Affordable, Global-Standard Education</h3>
        <p style="font-size: 0.98rem; line-height: 1.7; color: #444; margin: 0;">
          KYAU offers students from all walks of life a customized education of global standard, as a modern, dynamic and creative institution for both undergraduate and graduate study.
        </p>
      </div>

      <!-- Reason 2 -->
      <div style="flex: 1 1 300px; border: 1px solid #e2e2e2; border-radius: 8px; padding: 1.5rem;">
        <div style="width: 44px; height: 44px; border-radius: 50%; background: #fdece6; color: #e8552e; display: flex; align-items: center; justify-content: center; font-size: 1.3rem; margin-bottom: 1rem;">🧪</div>
        <h3 style="font-size: 1.1rem; font-weight: 700; color: #1a1a1a; margin: 0 0 0.5rem;">Industry-Aligned, 21st-Century Curriculum</h3>
        <p style="font-size: 0.98rem; line-height: 1.7; color: #444; margin: 0;">
          Quality education is kept in step with the exponential growth of 21st-century technology, preparing graduates to be a skilled workforce ready to meet the needs of a modern economy.
        </p>
      </div>

      <!-- Reason 3 -->
      <div style="flex: 1 1 300px; border: 1px solid #e2e2e2; border-radius: 8px; padding: 1.5rem;">
        <div style="width: 44px; height: 44px; border-radius: 50%; background: #fdece6; color: #e8552e; display: flex; align-items: center; justify-content: center; font-size: 1.3rem; margin-bottom: 1rem;">🏠</div>
        <h3 style="font-size: 1.1rem; font-weight: 700; color: #1a1a1a; margin: 0 0 0.5rem;">On-Campus Accommodation</h3>
        <p style="font-size: 0.98rem; line-height: 1.7; color: #444; margin: 0;">
          Two residential halls — one for male and one for female students, each with a 256-student capacity — provide safe, on-campus accommodation throughout the academic tenure.
        </p>
      </div>

      <!-- Reason 4 -->
      <div style="flex: 1 1 300px; border: 1px solid #e2e2e2; border-radius: 8px; padding: 1.5rem;">
        <div style="width: 44px; height: 44px; border-radius: 50%; background: #fdece6; color: #e8552e; display: flex; align-items: center; justify-content: center; font-size: 1.3rem; margin-bottom: 1rem;">🩺</div>
        <h3 style="font-size: 1.1rem; font-weight: 700; color: #1a1a1a; margin: 0 0 0.5rem;">On-Site Health & Treatment Facility</h3>
        <p style="font-size: 0.98rem; line-height: 1.7; color: #444; margin: 0;">
          Student wellbeing is treated as a prerequisite for uninterrupted academic progress — students who fall ill during their studies can access treatment facilities provided by the university.
        </p>
      </div>

      <!-- Reason 5 -->
      <div style="flex: 1 1 300px; border: 1px solid #e2e2e2; border-radius: 8px; padding: 1.5rem;">
        <div style="width: 44px; height: 44px; border-radius: 50%; background: #fdece6; color: #e8552e; display: flex; align-items: center; justify-content: center; font-size: 1.3rem; margin-bottom: 1rem;">💻</div>
        <h3 style="font-size: 1.1rem; font-weight: 700; color: #1a1a1a; margin: 0 0 0.5rem;">Modern Computing Facilities</h3>
        <p style="font-size: 0.98rem; line-height: 1.7; color: #444; margin: 0;">
          A modern central computer lab gives students and faculty ready access to computing and internet resources to support research, coursework and collaboration.
        </p>
      </div>

      <!-- Reason 6 -->
      <div style="flex: 1 1 300px; border: 1px solid #e2e2e2; border-radius: 8px; padding: 1.5rem;">
        <div style="width: 44px; height: 44px; border-radius: 50%; background: #fdece6; color: #e8552e; display: flex; align-items: center; justify-content: center; font-size: 1.3rem; margin-bottom: 1rem;">🏥</div>
        <h3 style="font-size: 1.1rem; font-weight: 700; color: #1a1a1a; margin: 0 0 0.5rem;">Part of a Larger Medical Community</h3>
        <p style="font-size: 0.98rem; line-height: 1.7; color: #444; margin: 0;">
          The university sits in the vicinity of Khwaja Yunus Ali Medical College &amp; Hospital, which was already functioning successfully before the university itself was founded — giving students proximity to an established institution of clinical and academic practice.
        </p>
      </div>

    </div>

    <!-- CTA -->
    <div style="text-align: center; margin-top: 3rem;">
      <a href="/admission" style="display: inline-block; background: #e8552e; color: #fff; padding: 0.85rem 2rem; border-radius: 4px; text-decoration: none; font-weight: 600;">
        Start Your Application →
      </a>
    </div>

  </div>
</section>
@endsection