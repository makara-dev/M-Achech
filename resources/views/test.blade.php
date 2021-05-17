@extends('layout.app')

@section('stylesheet')
<link rel="stylesheet" href="{{asset('css/time-line.css')}}">
@endsection

@section('title','Company Profile')

@section('content')
	<div class="time-line-wrapper">
		<div class="company-profile-text">
			<h2>COMPANY PROFILE</h2>
		</div>
		<div style="margin-top: 10%;" class="time-line-list-wrapper">
			<ul class="time-line-list">
				<li class="circle-block">
					<p class="project-text">Company Started</p>
					<div class="v-line-node"></div>
					<div class="circle-node"></div>
				</li>
				<li class="h-line-node"></li>
			</ul>
			<ul class="time-line-list1">
				<li class="circle-block">
					<p class="project-text1">2018</p>
					<div class="circle-node"></div>
				</li>
				<li class="h-line-node1"></li>
			</ul>
		</div>

	</div>
@endsection

@section('script')
<script>

</script>
@endsection