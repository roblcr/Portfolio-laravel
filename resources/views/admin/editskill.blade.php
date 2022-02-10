<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Modifier la compétence</title>
  </head>
  <body>
    <div class="row grid-margin">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Modifier la compétence</h4>

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
                  {!! Form::open(['action' => 'App\Http\Controllers\Portfolio@editskills', 'method' => 'POST', 'class' => 'cmxform', 'id' => 'commentForm']) !!}
                  {{ csrf_field() }}
                  <div class="form-group">
                      {!! Form::hidden('id', $skill->id)!!}
                      {!! Form::label('', 'Nom de la compétence', ['for' => 'cname']) !!}
                      {!! Form::text('skill_name', $skill->skill_name, ['class' => 'form-control', 'id' => 'cname']) !!}
                  </div>
                  <div class="form-group">
                    {!! Form::label('', 'Niveau de la compétence', ['for' => 'cname']) !!}
                    {!! Form::number('level', $skill->level, ['class' => 'form-control', 'id' => 'cname']) !!}
                  </div>
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
