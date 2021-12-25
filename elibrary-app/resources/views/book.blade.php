
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>ELibrary</title>
  </head>
  <body>


    @if ($layout == 'index')
        <div class="container-fluid">
  <div class="row">


          <section class="col">>
              @include('booklist')
          </section>
          <section class="col"></section>  
      </div>
      </div>
        @elseif ($layout == 'create')
        <div class="container-fluid">
  <div class="row">
          <section class="col">>
              @include('booklist')
          </section>
          <section class="col">
            <form action="{{url('/store')}}" method="post">
              @csrf
              <div class="form-group">
                <label>Book Name</label>
                <input name="book_name" type="text" class="form-control" placeholder="Enter book name">
              </div>
              <div class="form-group">
                <label>Author</label>
                <input name="book_author" type="text" class="form-control" placeholder="Enter book author's name">
              </div>
              <div class="form-group">
                <label>Category</label>
                <input name="book_category" type="text" class="form-control" placeholder="Enter book category">
              </div>
              <input type="submit" class="btn btn-info" value="Save">
              <input type="reset" class="btn btn-warning" value="Reset">
              
            </form>

          </section>
        </div>
      </div>
    @elseif ($layout == 'show')
    <div class="container-fluid">
  <div class="row">
          <section class="col">>
              @include('booklist')
          </section>
          <section class="col"></section>
      </div></div>
    @elseif ($layout == 'edit')
    <div class="container-fluid">
      <div class="row">
          <section class="col">>
              @include('booklist')
          </section>
          <section class="col"></section>
      </div></div>
    @endif

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>