@extends('layouts.appadmin')

@section('title')
    Editer le profil
@endsection

@section('contenu')
    <div class="row grid-margin">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Modifier le profil</h4>

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
                  {!! Form::open(['action' => 'App\Http\Controllers\Portfolio@editprofile', 'method' => 'POST', 'class' => 'cmxform', 'id' => 'commentForm']) !!}
                  {{ csrf_field() }}
                  <div class="form-group">
                      {!! Form::hidden('id', $about->id)!!}
                      {!! Form::label('', 'Nom', ['for' => 'cname']) !!}
                      {!! Form::text('name', $about->name, ['class' => 'form-control', 'id' => 'cname']) !!}
                  </div>
                  <div class="form-group">
                    {!! Form::label('', 'Date de naissance', ['for' => 'cname']) !!}
                    {!! Form::text('birthday', $about->birthday, ['class' => 'form-control', 'id' => 'cname']) !!}
                  </div>
                  <div class="form-group">
                    {!! Form::label('', 'Site', ['for' => 'cname']) !!}
                    {!! Form::text('website', $about->website, ['class' => 'form-control', 'id' => 'cname']) !!}
                  </div>
                  <div class="form-group">
                    {!! Form::label('', 'Numero de telephone', ['for' => 'cname']) !!}
                    {!! Form::text('phone', $about->phone, ['class' => 'form-control', 'id' => 'cname']) !!}
                  </div>
                  <div class="form-group">
                    {!! Form::label('', 'Ville', ['for' => 'cname']) !!}
                    {!! Form::text('city', $about->city, ['class' => 'form-control', 'id' => 'cname']) !!}
                  </div>
                  <div class="form-group">
                    {!! Form::label('', 'Age', ['for' => 'cname']) !!}
                    {!! Form::number('age', $about->age, ['class' => 'form-control', 'id' => 'cname']) !!}
                  </div>
                  <div class="form-group">
                    {!! Form::label('', 'Niveau d\'??tudes', ['for' => 'cname']) !!}
                    {!! Form::text('degree', $about->degree, ['class' => 'form-control', 'id' => 'cname']) !!}
                  </div>
                  <div class="form-group">
                    {!! Form::label('', 'Email', ['for' => 'cname']) !!}
                    {!! Form::text('email', $about->email, ['class' => 'form-control', 'id' => 'cname']) !!}
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
