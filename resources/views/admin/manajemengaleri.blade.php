@extends('layouts.admin')
@section('judul','Setting Galeri')
@section('content')
       <div class="main-panel">
            <div class="content">
            	<div class="page-inner">
            		<div class="page-header">
						<h4 class="page-title">Setting Galeri</h4>
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
									<div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header no-bd">
													<h5 class="modal-title" id="modelHeading">
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
													<p class="small">Create a new photo</p>
													<form id="productForm" name="productForm" action="{{ route('manajemen-galeri.store') }}" enctype="multipart/form-data" method="POST">
													@csrf
														<div class="row">
															<input type="hidden" name="data_id" id="data_id">
															<div class="col-md-12">
																<div class="form-group form-group-default">
																	<label>photo</label>
																	<input name="foto" id="foto" type="file" class="form-control" placeholder="fill position">
																</div>
															</div>
															<div class="col-md-12">
										                    <div class="form-group form-group-default">
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
										<table id="add-row" class="display table table-striped table-hover text-center" >
											<thead class="table-secondary">
												<tr>
													<th style="width: 10%">No</th>
													<th style="width: 70%">Foto</th>
													<th style="width: 10%">Aksi</th>
												</tr>
											</thead>
											<tbody>
												@foreach($galeri as $gl)
												<tr>
													<td>{{ $loop->iteration }}</td>
													<td><img src="{{ asset('images/galeri/'.$gl->foto) }}" width="30%"></td>
													<td>
														<div class="form-button-action">
															<button data-toggle="modal" data-target="#hapus" class="btn btn-link btn-danger deleteData" data-original-title="Delete">
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
                        <form action="/manajemen-galeri/{{ $gl->id }}" method="post" class="d-inline">
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

			var action = '<td> <div class="form-button-action"><button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

			$('#addRowButton').click(function() {
				$('#add-row').dataTable().fnAddData([
					$("#addName").val(),
					$("#addPosition").val(),
					$("#addOffice").val(),
					action
					]);
				$('#addRowModal').modal('hide');

			});
		});

		$('#createNewData').click(function () {

        $('#saveBtn').val("create-data");

        $('#data_id').val('');

        $('#productForm').trigger("reset");

        $('#modelHeading').html("Buat Data Baru");

        $('#addRowModal').modal('show');

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