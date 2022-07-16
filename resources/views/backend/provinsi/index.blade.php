@extends('layouts')
<title>Provinsi</title>
@include('backend.layouts.nav')
<section>
	<div class="container py-5">
	<div class="text-center">
		<h1 class="h1 fw-bold">Provinsi</h1>
	</div>
	<div class="card">
		<div class="card-body">
            <div class="py-2">
                <form action="{{ url('/blog') }}" method="get" class="d-flex">
                    <input type="text" name="search" class="form-control">
                    <button type="submit" class="btn btn-dark btn-shp">Search</button>
                </form>
            </div>
			<div class="text-center py-2">
				<a href="{{ url('/admin/posts/create') }}" class="btn btn-dark btn-shp">Create</a>
				<a href="{{ url('/admin') }}" class="btn btn-outline-dark btn-shp">Back to Dashboard</a>
			</div>
		</div>
		<div class="card-body">
			<div class="py-3">
				<table class="table table-hover">
					<thead>
						<tr>
							<th style="width: 10px;">No.</th>
							<th>Image</th>
							<th>Title</th>
							<th>Desc</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th></th>
							<td><img width="100px" src="/storage/"></td>
							<td></td>
							<td></td>
							<td>
								<a href="" class="my-1 col-12 btn btn-dark btn-shp">Edit</a>
								<a href="" class="my-1 col-12 btn btn-success btn-shp">Preview</a>
								<form action="" method="post">
									@csrf
									@method('DELETE')
									<button class="my-1 col-12 btn btn-danger btn-shp">Delete</button>
								</form>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
</section>