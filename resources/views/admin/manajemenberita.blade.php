@extends('layouts.admin')
@section('judul','Manajemen Berita')
@section('content')
       <div class="main-panel">
            <div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Manajemen Berita</h4>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="d-flex align-items-center">
										<h4 class="card-title">Add Row</h4>
										<button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
											<i class="fa fa-plus"></i>
											Add Row
										</button>
									</div>
								</div>
								<div class="card-body">
									<!-- Modal -->
									<div class="modal fade" id="addRowModal" aria-hidden="true">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header no-bd">
													<h5 class="modal-title"  id="modelHeading">
														<span class="fw-mediumbold">
														New</span> 
														<span class="fw-light">
															Row
														</span>
													</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<p class="small">Create a new row using this form, make sure you fill them all</p>
													<form id="productForm" name="productForm" action="{{ route('manajemen-berita.store') }}" enctype="multipart/form-data" method="POST">
													@csrf
														<div class="row">
														<input type="hidden" name="data_id" id="data_id">
															<div class="col-sm-12">
															<div class="form-group form-group-default">
																<label>Select</label>
																<select class="form-control" id="id_category" name="id_category">
																	<option>1</option>
																	<option>2</option>
																	<option>3</option>
																	<option>4</option>
																	<option>5</option>
																</select>
															</div>
															</div>
															<div class="col-sm-12">
																<div class="form-group form-group-default">
																	<label>Judul</label>
																	<input id="judul" type="text" class="form-control" name="judul">
																</div>
															</div>
															<div class="col-sm-12">
																<div class="form-group form-group-default" style="height: 200px;">
																	<label>Isi Berita</label>
																	<textarea id="isi" class="form-control" name="isi"></textarea>
																</div>
															</div>
															<div class="col-sm-12">
																<div class="form-group form-group-default">
																	<label>Tanggal</label>
																	<input id="created_at" id="addPosition" type="date" class="form-control" name="created_at">
																</div>
															</div>
															<div class="col-sm-12">
																<div class="form-group form-group-default">
																	<label>Gambar</label>
																	<input id="gambar" type="file" class="form-control" name="gambar">
																</div>
															</div>
															<div class="col-md-12">
										                    <div class="form-group">
										                        <label for="foto" class="col-sm-2 control-label"></label>
										                        <div class="col-sm-12">
										                        <div id="photos"></div>
										                    </div>
										                    </div>
										                        
										                    </div>					
														</div>
												</div>
												<div class="modal-footer no-bd">
													<button type="submit" class="btn btn-primary" id="saveBtn" value="create">Add</button>
													<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
												</div>
											</div>
											</form>
										</div>
									</div>

									<div class="table-responsive">
										<table id="add-row" class="display table table-striped table-hover" style="text-align: center">
											<thead class="table-secondary">
												<tr>
													<th>No</th>
													<th>Kategori</th>
													<th>Judul Berita</th>
													<th style="width: 20%;">Gambar</th>
													<th>Tanggal</th>
													<th style="width: 10%;">Action</th>
												</tr>
											</thead>
											<tbody>
											@foreach($berita as $brt => $value)
												<tr>
													<td>{{++$brt}}</td>
													<td>{{ $value->name }}</td>
													<td>{{ $value->judul }}</td>
													<td><img src="{{ asset('images/berita/'.$value->gambar) }}" width="100%"></td>
													<td>{{ $value->tanggal }}</td>
													<td>
														<div class="form-button-action">
															<a  href="javascript:void(0)" data-toggle="tooltip" class="btn edit editData" data-original-title="Edit Task" data-id="{{$value->id}}">
																<i class="fa fa-edit"></i>
															</a>
															<button data-toggle="modal" data-target="#hapus" data-toggle="tooltip"  data-original-title="Delete" class="btn btn-link btn-danger">
																<i class="fa fa-times"></i>
															</button>
														</div>
													</td>
												</tr>
                     <!-- modal happus -->
                    <div class="modal" tabindex="-1" role="dialog" id="hapus">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Hapus Data</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                        <form action="/manajemen-berita/{{ $value->id }}" method="post" class="d-inline">
                            @csrf
                            @method('delete')
                            <p>Apakah Anda Yakin Menghapus  Data ini?</p>


                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </div>
                        </div>
                        </form>
                    </div>
                    </div>
											@endforeach
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
            </div>
        </div>
@endsection
@section('script')
	<script >
		$(document).ready(function() {
			$('#basic-datatables').DataTable({
			});

			$('#multi-filter-select').DataTable( {
				"pageLength": 5,
				initComplete: function () {
					this.api().columns().every( function () {
						var column = this;
						var select = $('<select class="form-control"><option value=""></option></select>')
						.appendTo( $(column.footer()).empty() )
						.on( 'change', function () {
							var val = $.fn.dataTable.util.escapeRegex(
								$(this).val()
								);

							column
							.search( val ? '^'+val+'$' : '', true, false )
							.draw();
						} );

						column.data().unique().sort().each( function ( d, j ) {
							select.append( '<option value="'+d+'">'+d+'</option>' )
						} );
					} );
				}
			});

			// Add Row
			$('#add-row').DataTable({
				"pageLength": 5,
			});


			var action = '<td> <div class="form-button-action"><button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Edit"> <i class="fa fa-times"></i> </button><button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

		    $('#createNewData').click(function () {

		        $('#saveBtn').val("create-data");

		        $('#data_id').val('');

		        $('#productForm').trigger("reset");

		        $('#modelHeading').html("Buat Data Baru");

		        $('#addRowModal').modal('show');

		    });

		    $('body').on('click', '.editData', function () {

		      var data_id = $(this).data('id');

		      $.get("{{ route('manajemen-berita.index') }}" +'/' + data_id +'/edit', function (data) {

		          $('#modelHeading').html("Ubah data");

		          $('#saveBtn').val("edit-berita");

		          $('#addRowModal').modal('show');

		          $('#id_category').val(data.id_category);
		          $('#judul').val(data.judul);
		          $('#isi').val(data.isi);

		          $('#created_at').val(data.created_at);
		      	  $('#photos').html("<img src={{ URL::to('/') }}/images/berita/"+data.gambar+" width='100'>")

		          $('#data_id').val(data.id);

		          $('#gambar').val(data.gambar);


		      })

		   });


});



		    


        if ($("#productForm").length > 0) {
            $("#productForm").validate({

                submitHandler: function(form) {
                    $(this).parents("form").ajaxForm(options);

                }
            })
        }

	</script>
@endsection