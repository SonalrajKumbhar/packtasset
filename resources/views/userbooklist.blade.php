@include('userheader')
   <h2 class="mt-2 ml-5">Book List</h2>
   <div class="m-5">
            <table class="table" id="booklist">
    <thead>
        <tr class="table-success">
          <td>Sr No</td>
          <td>Title</td>
          <td>Author</td>
          <td>Publication Date</td>
          <td>ISBN</td>
          <td>Genre</td>
        
        </tr> 
    </thead>
    <tbody>
        @php
            $counter = 1;
        @endphp
        @foreach($BooksDetails as $book)
      
        <tr> 
            <td><a href="/bookdetail/{{$book->id}}/detail" >{{$counter}}</a></td>
            <td><a href="/bookdetail/{{$book->id}}/detail" >{{$book->title}}</a></td>
            <td><a href="/bookdetail/{{$book->id}}/detail" >{{$book->author}}</a></td>
            <td><a href="/bookdetail/{{$book->id}}/detail" >{{$book->publication_date}}</a></td>
            <td><a href="/bookdetail/{{$book->id}}/detail" >{{$book->isbn}}</a></td>
            <td><a href="/bookdetail/{{$book->id}}/detail" >{{$book->genre}}</a></td>
           
        </tr>
        @php
        $counter++;
        @endphp
        @endforeach
    </tbody>
  </table>
</div>





    @include('userfooter')