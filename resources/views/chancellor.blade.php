@extends('layouts.app')

@section('content')


<section style="padding: clamp(2.5rem, 6vw, 5rem) 0;">
  <div style="max-width: 1100px; margin: 0 auto; padding: 0 1.25rem;">
    <div style="display: flex; flex-wrap: wrap; gap: 1.5rem; align-items: stretch;">

      <!-- Founder card -->
      <div style="flex: 0 1 300px; border: 1px solid #e2e2e2; border-radius: 6px; padding: 1rem; text-align: center;">
        <div style="border: 1px solid #e2e2e2; border-radius: 4px; padding: 0.5rem; margin-bottom: 1rem;">
          <img src="{{ asset('assets/images/chacellor.jpg') }}" alt="Mirza Fakhrul Islam Alamgir" style="width: 100%; height: auto; display: block; border-radius: 2px;">
        </div>
        <h3 style="color: #e8552e; font-size: 1.15rem; font-weight: 700; margin: 0 0 0.75rem;">
          Mirza Fakhrul Islam Alamgir
        </h3>
        <p style="font-size: 1.05rem; font-weight: 700; color: #1a1a1a; margin: 0 0 0.4rem;">
          Chancellor
        </p>
        <p style="font-size: 1rem; font-weight: 600; color: #333; margin: 0 0 0.4rem;">
          Khwaja Yunus Ali University
        </p>
       
      </div>

      <!-- Message -->
      <div style="flex: 1 1 500px; border: 1px solid #e2e2e2; border-radius: 6px; padding: 1.5rem;">
        <h2 style="font-size: clamp(1.15rem, 2.2vw, 1.4rem); font-weight: 700; color: #1a1a1a; margin: 0 0 0.75rem;">
          Message of the honorable Chancellor
        </h2>
        <div style="border-bottom: 3px solid #e8552e; margin-bottom: 1.25rem;"></div>
        <p style="text-align: justify; line-height: 1.85; font-size: 1.05rem; color: #333; margin: 0;">
          BNP Secretary General Mirza Fakhrul Islam Alamgir has said there is no reason to trust those who denied Bangladesh’s independence and are now trying to mislead people in the name of religion.

He made the remarks while speaking as chief guest at a discussion organised by the Jatiyatabadi Muktijoddha Dal at the Institution of Diploma Engineers, Bangladesh auditorium in Kakrail to mark Martyred Intellectuals Day. Freedom fighters and members of martyrs’ families attended the programme.

“Anyone who has denied my independence — I do not think there can be any reason to trust them,” Fakhrul said, adding that the same forces that opposed Bangladesh’s independence in 1971 were now trying to present themselves as capable of building a “new Bangladesh,” which, he said, people would not believe.

He said Bangladesh had won independence through struggle and war, and warned that the country now faced a choice between staying on the path of independence or moving towards those who had tried to undermine it. 

Fakhrul alleged that the “anti-independence” forces were again resurfacing and attempting to confuse people by using religion, as they had done in 1971.

Referring to the history of Martyred Intellectuals Day, Fakhrul said on December 14, 1971, the Pakistani army, with the help of local collaborators, carried out a planned killing of intellectuals — including teachers, doctors, engineers, writers and journalists — in an attempt to deprive Bangladesh of talent for the future. He said the plot failed and the Pakistani forces surrendered two days later.

“Success never comes through conspiracy,” he said, adding that success comes from staying on the path of truth and through struggle.

Describing the upcoming election as a contest between two forces, Fakhrul said one side represented independence, sovereignty and liberal democracy, while the other consisted of “backward forces” that had opposed independence in the past and were now trying to mislead people by using religion.

Remembering the martyred intellectuals, he said there was no scope to forget the killings carried out by the Pakistani army and their collaborators, and he said there was no reason to forgive those responsible.

He also said that while “fascism” had recently been driven out in the struggle to restore democracy, it did not mean any new form of “fascism” should be allowed to rise. 

He said Bangladesh had long been a country of communal harmony and people had never accepted, and would not accept, any ideology imposed by force.

Fakhrul further alleged that “defeated forces” were conspiring to destabilise the country after failing to accept defeat, adding that Bangladeshis would not bow to injustice and that no conspiracy could defeat public unity.
        </p>
      </div>

    </div>
  </div>
</section>



@endsection