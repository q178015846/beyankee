@extends('layouts.frontnav')
@section('page_heading')

<div class="container">
	@foreach ($products as $p)
	<div class="panel panel-default">
	  <div class="panel-body">
	   	<a href="#">
	    <img src="http://www.beyankee.com/yankee/image/{{$p->image}}" class="img-responsive">
	    </a>
	    <div class="pull-left">
	    	 {{$p->model}}
	    </div>
	     <div class="btn-toolbar pull-right">
	        <div class="btn-group">
	          <a class="btn btn-primary" href="#fakelink"><span class="fui-time"></span></a>
	          <a class="btn btn-primary" href="#fakelink"><span class="fui-photo"></span></a>
	          <a class="btn btn-primary active" href="#fakelink"><span class="fui-heart"></span></a>
	          <a class="btn btn-primary" href="#fakelink"><span class="fui-eye"></span></a>
	        </div>
	      </div>
	  </div>
	</div>
	@endforeach
	 
</div>

@stop