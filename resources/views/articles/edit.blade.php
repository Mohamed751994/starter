<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Create</title>
  </head>
  <body>


    <section class="mt-5">
      <div class="container">
        <div class="row">
          <div class="col-md-6">


            <form method="post" action="{{ route('articles.update', $article->id) }}">
              @csrf
              @method('PUT')
              <div class="form-group">
                <label>title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ $article->title }}">
              </div>
              @error('title')
                  <p class="help is-invalid" style="color:red;">{{ $errors->first('title') }}</p>
              @enderror

              <div class="form-group">
                <label>desc</label>
                <textarea name="description" rows="8" cols="80" class="@error('description') is-invalid @enderror">{{ $article->description }}</textarea>
              </div>
              @error('description')
                  <p class="help is-invalid" style="color:red;">{{ $errors->first('description') }}</p>
              @enderror

              <button type="submit" class="btn btn-success">update</button>
            </form>


          </div>
        </div>
      </div>
    </section>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
