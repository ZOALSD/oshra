
		<div class="actions">
				<div class="btn-group">
					
						<a data-toggle="modal" data-target="#delete_record{{$id}}" href="#">
							<i class="fa fa-trash"></i> {{trans('admin.delete')}}</a>
				
				</div>
		</div>
		<div class="modal fade" id="delete_record{{$id}}">
				<div class="modal-dialog">
						<div class="modal-content">
								<div class="modal-header">
										<button class="close" data-dismiss="modal">x</button>
										<h4 class="modal-title">{{trans('admin.delete')}}؟</h4>
								</div>
								<div class="modal-body">
										<i class="fa fa-exclamation-triangle"></i> {{trans('admin.ask_del_count')}} ({{$name}}) ؟
								</div>
								<div class="modal-footer">
										{!! Form::open([
										'method' => 'DELETE',
										'route' => ['addadmin.destroy', $id]
										]) !!}
										{!! Form::submit(trans('admin.approval'), ['class' => 'btn btn-danger']) !!}
										<a class="btn btn-default" data-dismiss="modal">{{trans('admin.cancel')}}</a>
										{!! Form::close() !!}
								</div>
						</div>
				</div>
		</div>
		