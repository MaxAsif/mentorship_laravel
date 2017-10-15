@extends('layouts.master')
@section('contents')
<div class="row">
	<div  class="col-md-3 col-xs-6 col-sm-6" align="center" >
		<a href="/mentor_registration" style="outline: none;">
			<img class="card" src="img/mentor.png" alt="Mentor Registration" style="width:300px;margin-top: 2em">

		</a> 
	</div>

	<div  class="col-md-3 col-xs-6 col-sm-6" align="center" >
		<a href="/mentee_registration" style="outline: none;">
			<img class="card" src="img/ente.png" alt="Mentee Registration" style="width:300px;margin-top: 2em">

		</a> 
	</div>
	<div class="col-md-0 col-xs-3 col-sm-3">

	</div>
	<div class="col-md-5 col-sm-6 col-xs-6" align="center">
		<form class="form-horizontal" method="post" action="/show">
			{{ csrf_field() }}
			<h4>Log In</h4>
			<div class="form-group">
				
				<input type="email" name="email" class="form-control" placeholder="Enter your email">
			</div>
			<div class="form-group">
				
				<input type="password" name="password" class="form-control" placeholder="Enter your password ">
			</div>
			<div class="form-group"	>

				<button   name="sub2" style="width:100%" class="btn-sm btn-success" >Submit</button>
				
			</div>
		</form>
	</div>

</div>
<div class="tab-content">
	<center>
		<h2>
			Mentorship Programme
		</h2>
	</center>
	<p>
		The Student Alumni Mentorship programme was started in session 2010-11 by the Students’ Alumni Cell as an initiative to create a platform for the exchange of ideas and experience between the alumni and the current students of IIT Kharagpur.<br><br>
		With an ocean of possibilities available, students often find it difficult to decide their way out into the future. There are lots of instances where students need  a mentor who can counsel and guide them through. The alumni can improve students' insight into various aspects of life.  Their journey and personal experiences can help the students and motivate them through this pivotal phase of life. Under this programme, we invite our alumni from across the world and from different fields to interact with the students and help them build their network and gain new perspective on the possibilities open to them after graduation.
	</p>
	<hr>
	<center>
		<h2>
			Why choose this program
		</h2>
	</center>
	<h4  style="text-align:center;background-color:	#babfc6;color:white;border-radius:8px;">
		For Mentors
	</h4>
	<p>
		As a successful member of the IIT Kharagpur alumni community, you have the power to inspire, motivate, and support IIT KGP students. Your knowledge, experience, and insight will help students open their eyes to the opportunities and challenges they will face after graduation.

		When you serve as a mentor, you form meaningful, rewarding relationships that prepare students to be better employees and leaders, inspire them to stay connected with IIT Kharagpur, and motivate them to support the next generation of students. Mentors help perpetuate, grow, and strengthen IIT Kharagpur’s global alumni network.
	</p>
	<h4  style="text-align:center;background-color:	#babfc6;color:white;border-radius:8px;">
		For Mentees
	</h4>
	<p>
		Mentees can expect to receive guidance to help them navigate various career options, learn invaluable skills for professional development and make new contacts to expand their network.

		Mentors and students form supportive relationships built on the shared experience of the KGP way of life, and connect one-on-one in a relaxed, informal way. It’s a valuable relationship that serves as an important complement to your classroom and action learning experiences, and makes for a richer KGP experience.
	</p>
	<hr>

</div>
@include('layouts.testimonials')

@endsection('contents')