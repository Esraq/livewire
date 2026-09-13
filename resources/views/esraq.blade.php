@extends('layouts.app')

@section('content')
<section style="padding: 0 0 clamp(2rem, 5vw, 3.5rem);">

  {{-- ===================== Green department banner ===================== --}}
  <div style="background: #1a7a1a; padding: 1.1rem 1.25rem; margin-bottom: 1.5rem;">
    <h1 style="max-width: 1100px; margin: 0 auto; text-align: center; color: #fff; font-size: clamp(1.1rem, 2.2vw, 1.35rem); font-weight: 600;">
      Department of {{ $departmentName ?? 'Software Engineering' }}
    </h1>
  </div>

  <div style="max-width: 1100px; margin: 0 auto; padding: 0 1.25rem;">

    @php
      $profile = $profile ?? [
        'name'        => 'Dr. Imran Mahmud',
        'title'       => 'Professor & Head',
        'photo'       => '',
        'department'  => 'Department of Software Engineering',
        'faculty'     => 'Faculty of Science and Information Technology',
        'webpage'     => 'https://faculty.daffodilvarsity.edu.bd/profile/swe/imahmud.html',
        'email'       => 'imranmahmud@daffodilvarsity.edu.bd',
        'phone'       => '+8809617901233, Ext-35100',
        'cell_phone'  => '01847140117, 01711370502',
      ];

      $tabs = $tabs ?? [
        'Personal Information'   => 'personal',
        'Academic Qualification' => 'academic',
        'Training Experience'    => 'training',
        'Teaching'               => 'teaching',
        'Research Interest'      => 'research',
        'Publication'            => 'publication',
        'Award & Scholarship'    => 'award',
        'Membership'             => 'membership',
        'Previous Employment'    => 'previous',
      ];
    @endphp

    <div style="display: flex; flex-wrap: wrap; gap: 0; border: 1px solid #e2e2e2;">

      {{-- ===================== Left sidebar tabs ===================== --}}
      <div style="flex: 0 0 200px;">
        @foreach ($tabs as $label => $key)
          <button type="button"
                  class="faculty-tab-btn {{ $loop->first ? 'active' : '' }}"
                  data-tab="{{ $key }}"
                  style="display: block; width: 100%; text-align: left; padding: 0.85rem 1rem;
                         border: none; border-bottom: 1px solid #d8d8d8; cursor: pointer;
                         font-size: 0.9rem;
                         {{ $loop->first
                               ? 'background:#fff; color:#1a1a1a; font-weight:600;'
                               : 'background:#a9a9a9; color:#fff;' }}">
            {{ $label }}
          </button>
        @endforeach
      </div>

      {{-- ===================== Right content panel ===================== --}}
      <div style="flex: 1 1 400px; padding: 1.25rem 1.5rem;">

        {{-- Photo shown only on the Personal Information pane --}}
        <div id="faculty-photo-block" style="float: left; width: 130px; margin: 0 1.25rem 1rem 0;">
          <div style="border: 1px solid #333; aspect-ratio: 3 / 4; background: #f4f4f4; overflow: hidden;">
            @if(!empty($profile['photo']))
              <img src="{{ asset($profile['photo']) }}" alt="{{ $profile['name'] }}"
                   style="width: 100%; height: 100%; object-fit: cover; display: block;">
            @endif
          </div>
        </div>

        <h2 style="margin: 0 0 0.75rem;">
          <span style="font-size: 1.2rem; font-weight: 600; color: #1a1a1a;">{{ $profile['name'] }}</span>
          <span style="font-size: 0.85rem; color: #666; margin-left: 0.5rem;">{{ $profile['title'] }}</span>
        </h2>
        <div style="border-bottom: 2px solid #1a1a1a; margin-bottom: 1rem; clear: none;"></div>

        {{-- ---------- Personal Information pane ---------- --}}
        <div class="faculty-tab-pane" data-pane="personal" style="clear: left;">
          <table style="width: 100%; border-collapse: collapse; font-size: 0.92rem;">
            @php
              $rows = [
                'Name :'          => $profile['name'],
                'Designation'     => $profile['title'],
                'Department'      => $profile['department'],
                'Faculty'         => $profile['faculty'],
                'Personal Webpage'=> $profile['webpage'],
                'E-mail'          => $profile['email'],
                'Phone'           => $profile['phone'],
                'Cell-Phone'      => $profile['cell_phone'],
              ];
            @endphp
            @foreach ($rows as $label => $value)
              <tr style="background: {{ $loop->even ? '#f5f0f8' : '#f9fbee' }};">
                <td style="padding: 0.55rem 1rem; text-align: right; width: 33%; color: #1a1a1a; vertical-align: top;">
                  {{ $label }}
                </td>
                <td style="padding: 0.55rem 1rem; border-left: 1px solid #ddd; color: #1a1a1a;">
                  {{ $value }}
                </td>
              </tr>
            @endforeach
          </table>
        </div>

        {{-- ---------- Other panes (fill these in later) ---------- --}}
        <div class="faculty-tab-pane" data-pane="academic" style="display:none; clear: left;">
          <p style="font-size: 0.92rem; color: #444;">Academic qualification details go here.</p>
        </div>
        <div class="faculty-tab-pane" data-pane="training" style="display:none; clear: left;">
          <p style="font-size: 0.92rem; color: #444;">Training experience details go here.</p>
        </div>
        <div class="faculty-tab-pane" data-pane="teaching" style="display:none; clear: left;">
          <p style="font-size: 0.92rem; color: #444;">Teaching details go here.</p>
        </div>
        <div class="faculty-tab-pane" data-pane="research" style="display:none; clear: left;">
          <p style="font-size: 0.92rem; color: #444;">Research interest details go here.</p>
        </div>
        <div class="faculty-tab-pane" data-pane="publication" style="display:none; clear: left;">
          <p style="font-size: 0.92rem; color: #444;">Publication list goes here.</p>
        </div>
        <div class="faculty-tab-pane" data-pane="award" style="display:none; clear: left;">
          <p style="font-size: 0.92rem; color: #444;">Award &amp; scholarship details go here.</p>
        </div>
        <div class="faculty-tab-pane" data-pane="membership" style="display:none; clear: left;">
          <p style="font-size: 0.92rem; color: #444;">Membership details go here.</p>
        </div>
        <div class="faculty-tab-pane" data-pane="previous" style="display:none; clear: left;">
          <p style="font-size: 0.92rem; color: #444;">Previous employment details go here.</p>
        </div>

      </div>
    </div>
  </div>
</section>

<script>
  (function () {
    var buttons = document.querySelectorAll('.faculty-tab-btn');
    var panes   = document.querySelectorAll('.faculty-tab-pane');
    var photo   = document.getElementById('faculty-photo-block');

    buttons.forEach(function (btn) {
      btn.addEventListener('click', function () {
        var target = btn.getAttribute('data-tab');

        buttons.forEach(function (b) {
          b.style.background   = '#a9a9a9';
          b.style.color        = '#fff';
          b.style.fontWeight   = 'normal';
          b.classList.remove('active');
        });
        btn.style.background = '#fff';
        btn.style.color      = '#1a1a1a';
        btn.style.fontWeight = '600';
        btn.classList.add('active');

        panes.forEach(function (p) {
          p.style.display = (p.getAttribute('data-pane') === target) ? 'block' : 'none';
        });

        // Only show the photo alongside Personal Information
        photo.style.display = (target === 'personal') ? 'block' : 'none';
      });
    });
  })();
</script>
@endsection