<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>All articles</title>
  </head>
  <body>





    <div class="container">
      <div class="row mt-5 text-center">
        <div class="col-md-12">
          <a href="{{ route('articles.create') }}" class="btn btn-info float-right mt-5">Add new</a>

          <table class="table table-responsive">
            <thead>
              <th>Title</th>
              <th>description</th>
              <th>Actions</th>
            </thead>
            <tbody>
              @foreach($articles as $article)
              <tr>
                <td><a href="{{ $article->path() }}">{{$article->title}}</a></td>
                <td>{!! $article->description !!}</td>
                <td><a href="{{ route('articles.edit', $article->id) }}" class="btn btn-warning">Edit</a></td>
              </tr>
              @endforeach
            </tbody>
          </table>


        </div>

      </div>
    </div>

    <div class="all">




      <div class="article" style="width:50%;">
        <h2></h2>
        <p></p>


      </div>




    </div>


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
      </body>
    </html>
