@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
	 <div class="col">
			<div class="card">
				<h1 class="card-header">Contacts</h1>
			<div class="card-body">
			
				@if(session()->get('success'))
					<div class="alert alert-success">
						{{ session()->get('success') }}  
					</div>
				@endif
	
				<div>
					<a style="margin: 19px;" href="{{ route('contacts.create')}}" class="btn btn-primary">New contact</a>
				</div>  
		
				<table class="table table-striped">
					<thead>
							<tr>
								<td>ID</td>
								<td>Name</td>
								<td>Street</td>
								<td>City</td>
								<td>State</td>
								<td>Zip</td>
								<td>Mobile Phone</td>
								<td>Home Phone</td>
								<td colspan = 2>Actions</td>
							</tr>
					</thead>
					<tbody>
							@foreach($contacts as $contact)
							<tr>
									<td>{{$contact->id}}</td>
									<td>{{$contact->First_Name}} {{$contact->Last_Name}}</td>
									<td>{{$contact->Street}}</td>
									<td>{{$contact->City}}</td>
									<td>{{$contact->State}}</td>
									<td>{{$contact->Zip}}</td>
									<td>{{$contact->Mobile_Phone}}</td>
									<td>{{$contact->Home_Phone}}</td>
									<td>
											<a href="{{ route('contacts.edit',$contact->id)}}" class="btn btn-primary">Edit</a>
									</td>
									<td>
											<form action="{{ route('contacts.destroy', $contact->id)}}" method="post">
												@csrf
												@method('DELETE')
												<button class="btn btn-danger" type="submit">Delete</button>
											</form>
									</td>
							</tr>
							@endforeach
					</tbody>
				</table>
			</div>
		</div>
		</div>
	</div>
</div>
@endsection