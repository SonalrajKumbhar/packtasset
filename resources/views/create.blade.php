@include('admin_header')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

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
                    <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                  </li>
                </ul>
              </nav>
            </div>
           <div class="row">

<style>
    .container {
      max-width: 450px;
    }

</style>
<div class="card push-top">
  <div class="card-header">
    Add Book
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
<div class="col-12">
                <div class="">
                  <div class="">
                    <h4 class="card-title">Book Details</h4>
                    <form method="post" action="{{ route('book.store') }}">
                      <p class="card-description"></p>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                             @csrf
                            <label class="col-sm-3 col-form-label">Title</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="title">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Author</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="author">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                      <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">ISBN</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="isbn">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Publication Date</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="publication_date">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                      <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Genre</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="genre">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Publisher</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="publisher">
                            </div>
                          </div>
                        </div>
                      </div>

                      </div>
                      <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" rows="4" name="description"></textarea>
                      </div>
                      <div class="form-group">
                        <label>File upload</label>
                        <input type="file" name="image_url" class="file-upload-default">
                        <div class="input-group col-xs-12">
                          <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-gradient-primary" type="button">Upload</button>
                          </span>
                        </div>
                      </div>
                      <button type="submit" class="btn btn-block btn-danger">Create Book</button>
                    </form>
                  </div>
                </div>
              </div>
           </div>
         
            

          </div>
          <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" type="text/js"></script>
      <script>
       $("#bookTab"). addClass("active"); 
      </script>
      @include('admin_footer')