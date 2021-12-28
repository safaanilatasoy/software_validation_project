<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Book Name</th>
      <th scope="col">Author</th>
      <th scope="col">Category</th>
    </tr>
  </thead>
  <tbody>
    @foreach($books as $book)
    <tr>
      <td scope="row">{{$book->id }}</td>
      <td scope="row">{{$book->book_name }}</td>
      <td scope="row">{{$book->book_author }}</td>
      <td scope="row">{{$book->book_category }}</td>
      <td>
        {{-- İndirme özelliği eklenecek --}}
        <a href="download/{{$book->book_file}}" class="btn btn-sm btn-info">Donwload</a>
        
        <a href="{{url('/create')}}" class="btn btn-sm btn-warning">Edit</a>
        {{-- Silme özelliği eklenecek --}}
        <a href="#" class="btn btn-sm btn-danger">Delete</a>

      </td>
      
    </tr>
    @endforeach
  </tbody>
</table>