<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Modifier le profil</title>
  </head>
  <body>
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
                    {!! Form::label('', 'Niveau d\'études', ['for' => 'cname']) !!}
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


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
