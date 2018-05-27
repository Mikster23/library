<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>OPAC</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css');?>" />
    <link rel="stylesheet" href="<?php echo base_url('assets/datatables/css/dataTables.bootstrap.css');?>" />


    <base href="<?php print base_url(); ?>" />
  </head>
  <body>


  <div class="container">
    <h1>OPAC</h1>
</center>
    <h3>Book List</h3>
    <br />

    <br />
    <br />
    <table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
      <thead>
        <tr>

					<th>Book ISBN</th>
					<th>Book Title</th>
          <th>Book Other Title</th>
					<th>Book Author</th>
          <th>Book Other Author</th>
          <th>Publisher</th>
          <th>Edition</th>
          <th>Publication Year</th>
          <th>Book Category</th>
					<th>Description</th>
          <th>Abstract</th>


        </tr>
      </thead>
      <tbody>
				<?php foreach($books as $book){?>
				     <tr>

				         <td><?php echo $book->isbn;?></td>
								 <td><?php echo $book->title;?></td>
                <td><?php echo $book->other_title;?></td>
								<td><?php echo $book->author;?></td>
                <td><?php echo $book->other_author;?></td>
              	<td><?php echo $book->publisher;?></td>
              	<td><?php echo $book->edition;?></td>
              	<td><?php echo $book->publication_year;?></td>
								<td><?php echo $book->category;?></td>
              	<td><?php echo $book->description;?></td>
              	<td><?php echo $book->abstract;?></td>

				      </tr>
				     <?php }?>



      </tbody>

      <tfoot>
        <tr>

          <th>Book ISBN</th>
          <th>Book Title</th>
          <th>Book Other Title</th>
          <th>Book Author</th>
          <th>Book Other Author</th>
          <th>Publisher</th>
          <th>Edition</th>
          <th>Publication Year</th>
          <th>Book Category</th>
          <th>Description</th>
          <th>Abstract</th>

        </tr>
      </tfoot>
    </table>

  </div>

  <script src="<?php echo base_url('assets/jquery/jquery-3.1.0.min.js');?>"></script>
  <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js');?>"></script>
  <script src="<?php echo base_url('assets/datatables/js/jquery.dataTables.min.js');?>"></script>
  <script src="<?php echo base_url('assets/datatables/js/dataTables.bootstrap.js');?>"></script>


  <script type="text/javascript">
  $(document).ready( function () {
      $('#table_id').DataTable();
  } );
    var save_method; //for save method string
    var table;
    //var base_url = <?php// echo base_url(); ?>;







  </script>

  <!-- Bootstrap modal -->
  <div class="modal fade" id="modal_form" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title">Book Form</h3>
      </div>
      <div class="modal-body form">
        <form action="#" id="form" class="form-horizontal">
          <input type="hidden" value="" name="id"/>
          <div class="form-body">
            <div class="form-group">
              <label class="control-label col-md-3">Book ISBN</label>
              <div class="col-md-9">
                <input name="isbn" placeholder="Book ISBN" class="form-control" type="text">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Book Title</label>
              <div class="col-md-9">
                <input name="title" placeholder="Book_title" class="form-control" type="text">
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-3">Book other Title</label>
              <div class="col-md-9">
                <input name="othertitle" placeholder="Bookothertitle" class="form-control" type="text">
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-3">Book Author</label>
              <div class="col-md-9">
								<input name="author" placeholder="Book Author" class="form-control" type="text">

              </div>
            </div>


            <div class="form-group">
              <label class="control-label col-md-3">Book other Author</label>
              <div class="col-md-9">
                <input name="otherauthor" placeholder="BookotherAuthor" class="form-control" type="text">

              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-3">Book Publisher</label>
              <div class="col-md-9">
                <input name="publisher" placeholder="Book Publisherr" class="form-control" type="text">

              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-3">Book Edition</label>
              <div class="col-md-9">
                <input name="edition" placeholder="Book Edition" class="form-control" type="text">

              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-3">Book Publication_Year</label>
              <div class="col-md-9">
                <input name="publicationyear" placeholder="Book Edition" class="form-control" type="date">

              </div>
            </div>



						<div class="form-group">
							<label class="control-label col-md-3">Book Category</label>
							<div class="col-md-9">
								<input name="category" placeholder="Book Category" class="form-control" type="text">

							</div>
						</div>


            <div class="form-group">
              <label class="control-label col-md-3">Book Description</label>
              <div class="col-md-9">
                <input name="description" placeholder="Book Description" class="form-control" type="text">

              </div>
            </div>


            <div class="form-group">
              <label class="control-label col-md-3">Book Abstract</label>
              <div class="col-md-9">
                <input name="abstract" placeholder="Book Abstract" class="form-control" type="textarea">

              </div>
            </div>

          </div>
        </form>
          </div>

        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
  <!-- End Bootstrap modal -->

  </body>
</html>
