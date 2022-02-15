<section id="resume" class="resume">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Curriculum Vitae</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <h3 class="resume-title">Resumé</h3>
          <div class="resume-item pb-0">
            <h4>{{$about[0]->name}}</h4>
            <p><em>Innovative and deadline-driven Graphic Designer with 3+ years of experience designing and developing user-centered digital/print marketing material from initial concept to final, polished deliverable.</em></p>
            <ul>
              <li>{{$about[0]->city}}</li>
              <li>+ {{$about[0]->phone}}</li>
              <li>{{$about[0]->email}}</li>
            </ul>
          </div>


            <h3 class="resume-title">Education</h3>
            @foreach ($educations as $education)
                    <div class="resume-item">
                        <h4>{{$education->title}}</h4>
                        <h5>{{date('Y', strtotime($education->date_start))}} - {{date('Y', strtotime($education->date_end))}}</h5>
                        <p><em>{{$education->place}}</em></p>
                        <p>{{$education->resume}}</p>
                    </div>
          @endforeach

        </div>
        <div class="col-lg-6">
          <h3 class="resume-title">Experience Professionnelle</h3>
          @foreach ($professionalExps as $professionalExp)


          <div class="resume-item">
            <h4>{{$professionalExp->title}}</h4>
            <h5>{{date('Y', strtotime($professionalExp->date_start))}} - {{date('Y', strtotime($professionalExp->date_end))}}</h5>
            <p><em>{{$professionalExp->place}} </em></p>
            <ul>
              <li>{{$professionalExp->resume_one}}</li>
              <li>{{$professionalExp->resume_two}} </li>
              <li>{{$professionalExp->resume_three}}</li>
              <li>{{$professionalExp->resume_four}}</li>
            </ul>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </section>
