@extends('header')
@section('content')
		
	<div id="content" class="span10">
		<div class="row-fluid sortable">
					<div class="box-content">
					{!! Form::open(array('class' => 'form-horizontal', 'route' => 'handle_add_records', 'files' => true)) !!}
						<fieldset>
						<div class="control-group">
								<label class="control-label" for="selectError3">Plain Select</label>
								<div class="controls">
									{{ Form::select('relation', [
									   'Him Self' => 'Him Self',
									   'Wife' => 'Wife',
									   'Son' => 'Son',
									   'Daughter' => 'Daughter',
									   'Father' => 'Father',
									   'Mother' => 'Mother',
									   'Grand Son' => 'Grand Son',
									   'Grand Daughter' => 'Grand Daughter']
									) }}
								  <!-- <select id="selectError3">
									<option>Option 1</option>
									<option>Option 2</option>
									<option>Option 3</option>
									<option>Option 4</option>
									<option>Option 5</option>
								  </select> -->
								</div>
							  </div>  
						   	<div class="control-group hidden-phone">
								<label class="control-label">First Name *</label>
							  	<div class="controls">
							  		{!! Form::text('first_name', null, array('class' => 'form-control', 'placeholder' => 'First Name')) !!}
							  	</div>
							</div> 
							<div class="control-group hidden-phone">
								<label class="control-label">Middle Name *</label>
							  	<div class="controls">
							  		{!! Form::text('middle_name', null, array('class' => 'form-control', 'placeholder' => 'Middle Name')) !!}
							  	</div>
							</div>
							<div class="control-group hidden-phone">
								<label class="control-label">Last Name *</label>
							  	<div class="controls">
							  		{!! Form::text('last_name', null, array('class' => 'form-control', 'placeholder' => 'Last Name')) !!}
							  	</div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="date01">Date Of Birth *</label>
							  <div class="controls">
							  	{!! Form::text('date_of_birth', null, array('class' => 'form-control datepicker', 'id' => 'date01', 'placeholder' => 'Date Of Birth')) !!}
								<!-- <input type="text" class="input-xlarge datepicker" id="date01" value="02/16/12"> -->
							  </div>
							</div>
							<div class="control-group">
								<label class="control-label">Contact Number *</label>
							  	<div class="controls">
							  		{!! Form::number('contact', null, array('class' => 'form-control', 'placeholder' => 'Contact Number')) !!}
							  	</div>
							</div>
							<div class="control-group">
								<label class="control-label">E-mail Id *</label>
							  	<div class="controls">
							  		{!! Form::email('mail_id', null, array('class' => 'form-control', 'placeholder' => 'E-mail Id')) !!}
							  	</div>
							</div>
							<div class="control-group">
								<label class="control-label">Education *</label>
							  	<div class="controls">
							  		{!! Form::text('education', null, array('class' => 'form-control', 'placeholder' => 'Education')) !!}
							  	</div>
							</div>
							<div class="control-group hidden-phone">
								<label class="control-label">Occupation *</label>
							  	<div class="controls">
							  		{!! Form::text('occupation', null, array('class' => 'form-control', 'placeholder' => 'Occupation')) !!}
							  	</div>
							</div>
							<div class="control-group hidden-phone">
								<label class="control-label">Home Town *</label>
							  	<div class="controls">
							  		{!! Form::text('home_town', null, array('class' => 'form-control', 'placeholder' => 'Home Town')) !!}
							  	</div>
							</div>
							<div class="control-group">
								<label class="control-label">Marital Status</label>
								<div class="controls">
								  	<label class="radio">
								  		{!! Form::checkbox('married_status', '1') !!} Married
								  	</label>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">Gender *</label>

								<div class="controls">
									{!! Form::radio('gender', '1') !!} Male
									{!! Form::radio('gender', '0') !!} Female
								  	<label class="radio">
										
								  	</label>
								  	<div style="clear:both"></div>
								  	<label class="radio">
									
								  	</label>
								</div>
							</div>
							<div class="form-actions">
								{!! Form::submit('Save Records', array('class' => 'btn btn-primary')) !!}
							</div>
						</fieldset>
					{!! Form::close() !!}  
				</div><!--/span-->

			</div><!--/row-->

	</div><!--/.fluid-container-->
	
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
	</div>
		
	
@endsection
	