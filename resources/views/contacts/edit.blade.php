@extends('layouts.app')

@section('content')
<div class="container">

<pre>
<?php
	// print_r($contact);
?>
</pre>

	<div class="row justify-content-center">
	 <div class="col-md-8">
			<div class="card">
				<h1 class="card-header">Update Contact</h1>
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
					<form method="post" action="{{ route('contacts.update', $contact->id) }}">
							@method('PATCH')
							@csrf
							<div class="form-group">    
									<label for="First_Name">First Name:</label>
									<input type="text" class="form-control" name="First_Name" value={{ $contact->First_Name }} />
							</div>

							<div class="form-group">
									<label for="Last_Name">Last Name:</label>
									<input type="text" class="form-control" name="Last_Name" value={{ $contact->Last_Name }} />
							</div>

							<div class="form-group">
									<label for="Street">Street:</label>
									<input type="text" class="form-control" name="Street" value={{ $contact->Street }} />
							</div>
							<div class="form-group">
									<label for="City">City:</label>
									<input type="text" class="form-control" name="City" value={{ $contact->City }} />
							</div>
							<div class="form-group">
									<label for="State">State:</label>
									<input type="text" class="form-control" name="State" value={{ $contact->State }} />
							</div>
							<div class="form-group">
									<label for="Zip">Zip:</label>
									<input type="text" class="form-control" name="Zip" value={{ $contact->Zip }} />
							</div>
							<div class="form-group">
									<label for="Mobile_Phone">Mobile Phone:</label>
									<input type="text" class="form-control" name="Mobile_Phone" value={{ $contact->Mobile_Phone }} />
							</div>     
							<div class="form-group">
									<label for="Home_Phone">Home Phone:</label>
									<input type="text" class="form-control" name="Home_Phone" value={{ $contact->Home_Phone }} />
							</div>     							
							<button type="submit" class="btn btn-primary-outline">Update</button>
					</form>
			</div>
		</div>
		</div>
	</div>
</div>
@endsection