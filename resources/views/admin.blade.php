@include('admin_header')
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- Bootstrap JS and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- Bootbox.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js"></script>


        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                  <i class="mdi mdi-home"></i>
                </span> Dashboard
              </h3>
              <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">
                    <span></span><a href="/getapidata" class="btn btn-gradient-primary btn-fw">Sync API</a>
                  </li>
                </ul>
              </nav>
            </div>
           <div class="row">
           <style>
  .push-top {
    /* margin-top: 50px; */
  }
</style>
<div class="push-top">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <div class="row table">
  <table class="table-responsive" id="bookLIstingTable" width="100%">
    <thead>
        <tr class="table-warning">
          <td>Sr No</td>
          <td>Title</td>
          <td>Author</td>
          <td>Publication Date</td>
          <td>ISBN</td>
          <td>Genre</td>
          <td class="text-center">Action</td>
        </tr>
    </thead>
    <tbody>
        @php
            $counter = 1;
        @endphp
        @foreach($BooksDetails as $book)
      
        <tr>
            <td>{{$counter}}</td>
            <td>{{$book->title}}</td>
            <td>{{$book->author}}</td>
            <td>{{$book->publication_date}}</td>
            <td>{{$book->isbn}}</td>
            <td>{{$book->genre}}</td>
            <td class="text-center">
                <a href="{{ route('book.edit', $book->id)}}" class="btn btn-primary btn-sm"">Edit</a>
                <!-- <form action="{{ route('book.destroy', $book->id)}}" method="post" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                  </form> -->
                  <form id="deleteForm" action="{{ route('book.destroy', $book->id)}}" method="POST" style="display: inline-block">
    @method('DELETE')
    @csrf
    <button class='btn btn-danger btn-sm' type="button" onclick="showConfirmation()">Delete</button>
</form>

                
            </td>
        </tr>
        @php
        $counter++;
        @endphp
        @endforeach
    </tbody>
  </table>
</div>
<div>
           </div>
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

           <script>
function showConfirmation() {
        bootbox.confirm({
            message: "Are you sure you want to delete this book?",
            buttons: {
                confirm: {
                    label: 'Delete',
                    className: 'btn-danger'
                },
                cancel: {
                    label: 'Cancel',
                    className: 'btn-secondary'
                }
            },
            callback: function (result) {
                if (result) {
                    // Submit the form if the user confirms deletion
                    document.getElementById('deleteForm').submit();
                }
            }
        });
    }

$(document).ready(function() {

  

  $('#bookLIstingTable').DataTable({
    columnDefs: [
      {
        targets: [0, 1, 2, 3, 4, 5, 6], // Column indexes to set the width
        width: '20%', // Desired width percentage
      }
    ]
  });
});
      function confirmDelete() {
        Swal.fire({
          title: 'Are you sure you want to Delete this entry?',
          showDenyButton: true,
          showCancelButton: true,
          confirmButtonText: 'Yes',
          denyButtonText: `No`,
        }).then((result) => {
          /* Read more about isConfirmed, isDenied below */
          if (result.isConfirmed) {
            Swal.fire('Deleted!', '', 'success')
          } else if (result.isDenied) {
            Swal.fire('Deletion Was Cancelled', '', 'info')
          }
        })
      }
      
    </script>
       @include('admin_footer')