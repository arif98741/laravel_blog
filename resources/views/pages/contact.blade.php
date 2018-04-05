@extends('main')

@section('title', "| Contact ")

@section('content')
	   <div class="row">
	   		<div class="col-md-12">
	   			<form action="">
	   				<div class="form-group">
	   					<label for="Email">Email</label>
	   					<input type="text" class="form-control">

	   				</div>

	   				<div class="form-group">
	   					<label for="Subject">Subject</label>
	   					<input type="text" class="form-control">
	   				</div>
	   				
	   				<div class="form-group">
	   					<label for="Subject">Message</label>
	   					<textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>

	   				</div>

	   				
	   				<input type="submit" value="Send Message" class="form-contorl btn btn-success">

	   			</form>
	   		</div>
	   </div>
    @endsection

    