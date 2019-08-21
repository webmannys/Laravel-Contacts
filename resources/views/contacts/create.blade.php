@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
	 <div class="col-md-8">
			<div class="card">
				<h1 class="card-header">Add Contact</h1>
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
					<form method="post" action="{{ route('contacts.store') }}">
							@csrf
							<div class="form-group">    
									<label for="First_Name">First Name:</label>
									<input type="text" class="form-control" name="First_Name"/>
							</div>

							<div class="form-group">
									<label for="Last_Name">Last Name:</label>
									<input type="text" class="form-control" name="Last_Name"/>
							</div>

							<div class="form-group">
									<label for="Street">Street:</label>
									<input type="text" class="form-control" name="Street"/>
							</div>
							<div class="form-group">
									<label for="City">City:</label>
									<input type="text" class="form-control" name="City"/>
							</div>
							<div class="form-group">
									<label for="State">State:</label>
									<input type="text" class="form-control" name="State"/>
							</div>
							<div class="form-group">
									<label for="Zip">Zip:</label>
									<input type="text" class="form-control" name="Zip"/>
							</div>
							<div class="form-group">
									<label for="Mobile_Phone">Mobile Phone:</label>
									<input type="text" class="form-control" name="Mobile_Phone"/>
							</div>     
							<div class="form-group">
									<label for="Home_Phone">Home Phone:</label>
									<input type="text" class="form-control" name="Home_Phone"/>
							</div>     							
							<button type="submit" class="btn btn-primary-outline">Add contact</button>
					</form>
			</div>
		</div>
		</div>
	</div>
</div>
@endsection