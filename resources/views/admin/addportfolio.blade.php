@extends('layouts.appadmin')

@section('title')
    Ajouter l'application
@endsection

@section('contenu')
        <div class="row grid-margin">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Ajouter l'application</h4>

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

                      {!! Form::open(['action' => 'App\Http\Controllers\Portfolio@saveportfolio', 'method' => 'POST', 'class' => 'cmxform', 'id' => 'commentForm', 'enctype' => 'multipart/form-data']) !!}
                      {{ csrf_field() }}
                      <div class="form-group">
                          {!! Form::label('', 'Nom de l\'application', ['for' => 'cname']) !!}
                          {!! Form::text('title', '', ['class' => 'form-control', 'id' => 'cname']) !!}
                      </div>
                      <div class="form-group">
                        {!! Form::label('', 'Description de l\'application', ['for' => 'cname']) !!}
                        {!! Form::text('subtitle', '', ['class' => 'form-control', 'id' => 'cname']) !!}
                      </div>
                      <div class="form-group">
                        {!! Form::label('', 'Lien de l\'application', ['for' => 'cname']) !!}
                        {!! Form::text('link', '', ['class' => 'form-control', 'id' => 'cname']) !!}
                      </div>
                      <div class="form-group">
                        {!! Form::label('', 'Image de l\'application', ['for' => 'cname']) !!}
                        {!! Form::file('image', ['class' => 'form-control', 'id' => 'cname']) !!}
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

                      {!! Form::submit('Ajouter', ['class' => 'btn btn-primary']) !!}
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
