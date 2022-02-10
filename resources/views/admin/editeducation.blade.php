@extends('layouts.appadmin')

@section('title')
    Editer la formation
@endsection

@section('contenu')
    <div class="row grid-margin">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Modifier la formation</h4>

              @if (Session::has('status'))
                     <div class="alert alert-success">
                         {{Session::get('status')}}
                     </div>
                @endif
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                  {!! Form::open(['action' => 'App\Http\Controllers\Portfolio@editeducation', 'method' => 'POST', 'class' => 'cmxform', 'id' => 'commentForm']) !!}
                  {{ csrf_field() }}
                  <div class="form-group">
                      {!! Form::hidden('id', $education->id)!!}
                      {!! Form::label('', 'Nom de la formation', ['for' => 'cname']) !!}
                      {!! Form::text('title', $education->title, ['class' => 'form-control', 'id' => 'cname']) !!}
                  </div>
                  <div class="form-group">
                    {!! Form::label('', 'Début de la formation', ['for' => 'cname']) !!}
                    {!! Form::date('date_start', $education->date_start, ['class' => 'form-control', 'id' => 'cname']) !!}
                  </div>
                  <div class="form-group">
                    {!! Form::label('', 'Fin de la formation', ['for' => 'cname']) !!}
                    {!! Form::date('date_end', $education->date_end, ['class' => 'form-control', 'id' => 'cname']) !!}
                  </div>
                  <div class="form-group">
                    {!! Form::label('', 'Lieu de la formation', ['for' => 'cname']) !!}
                    {!! Form::text('place', $education->place, ['class' => 'form-control', 'id' => 'cname']) !!}
                  </div>
                  <div class="form-group">
                    {!! Form::label('', 'Resumé', ['for' => 'cname']) !!}
                    {!! Form::text('resume', $education->resume, ['class' => 'form-control', 'id' => 'cname']) !!}
                  </div>


                  {{-- <div class="form-group">
                    <label for="cemail">E-Mail (required)</label>
                    <input id="cemail" class="form-control" type="email" name="email" required>
                  </div>
                  <div class="form-group">
                    <label for="curl">URL (optional)</label>
                    <input id="curl" class="form-control" type="url" name="url">
                  </div>
                  <div class="form-group">
                    <label for="ccomment">Your comment (required)</label>
                    <textarea id="ccomment" class="form-control" name="comment" required></textarea>
                  </div> --}}

                  {!! Form::submit('Modifier', ['class' => 'btn btn-primary']) !!}
               {!! Form::close() !!}
            </div>
          </div>
        </div>
      </div>
      @endsection


   @section('scripts')
{{-- <script src="backend/js/form-validation.js"></script>
<script src="backend/js/bt-maxLength.js"></script> --}}
@endsection
