@extends('layouts.app')


<style>
    body,div,form,fieldset,textarea{

margin:0; padding: 0;border: 0; outline: none;

}
html{

	   height: 100%;
}

body {
background: #3407;
  font-family: sans-serif;
  font-size: 10px;

}

   #contact{
width: 430px;margin: 60px auto;padding: 60px 30px;
background:  #c9d0de;border: 1px solid #e1e1e1;
-moz-box-shadow:0px 0px 8px #444;
-webkit-box-shadow:0px 0px 8px #444;
   }
#cont{

margin-top: -800px;position: relative;

}
form {
  width: 600px;
  background: #fff;
  padding: 4em 4em 2em;
  max-width: 700px;
  margin: 50px auto 0;
  box-shadow: 0 0 1em #222;
  border-radius: 2px;
}
form h2 {
  margin: 0 0 50px 0;
  padding: 10px;
  text-align: center;
  font-size: 30px;
  color: #666666;
  border-bottom: solid 1px #e5e5e5;
}
form p {
  margin: 0 0 3em 0;
  position: relative;
}
form input {
  display: block;
  box-sizing: border-box;
  width: 100%;
  outline: none;
  margin: 0;
}
form input[type="text"],
form input[type="password"],
form input[type="date"],
form input[type="Email"]
{
  background: #fff;
  border: 1px solid #dbdbdb;
  font-size: 1.6em;
  padding: .8em .5em;
  border-radius: 2px;
}
form input[type="text"]:focus,
form input[type="password"]:focus,
form input[type="date"]:focus,
form input[type="Email"]:focus
{
  background: #fff;
}
form span {
  display: block;
  background: #F9A5A5;
  padding: 2px 5px;
  color: #666;
}
form input[type="submit"] {
  background: rgba(148, 186, 101, 0.7);
  box-shadow: 0 3px 0 0 rgba(123, 163, 73, 0.7);
  border-radius: 2px;
  border: none;
  color: #fff;
  cursor: pointer;
  display: block;
  font-size: 2em;
  line-height: 1.6em;
  margin: 2em 0 0;
  outline: none;
  padding: .8em 0;
  text-shadow: 0 1px #68B25B;
}
form input[type="submit"]:hover {
  background: #94af65;
  text-shadow: 0 1px 3px rgba(70, 93, 41, 0.7);
}
form label {
  position: absolute;
  left: 8px;
  top: 12px;
  color: #999;
  font-size: 16px;
  display: inline-block;
  padding: 4px 10px;
  font-weight: 400;
  background-color: rgba(255, 255, 255, 0);
  -moz-transition: color 0.3s, top 0.3s, background-color 0.8s;
  -o-transition: color 0.3s, top 0.3s, background-color 0.8s;
  -webkit-transition: color 0.3s, top 0.3s, background-color 0.8s;
  transition: color 0.3s, top 0.3s, background-color 0.8s;
}

form label.floatLabel {
  top: -11px;
  background-color: rgba(255, 255, 255, 0.8);
  font-size: 14px;
}


#myform{
  width: 800px;
}

#text{
text-align: center;
}


#area{
  margin-top: -100px;
  background-color: #3407;
}


hr{

  box-shadow: 0 3px 0 0 rgba(123, 163, 73, 0.9);
}
		</style>


@section('content')


<div id="area">
<form method="post" id="myform" action="register_action" >
	<input type="hidden" name="_token" value="{{csrf_token()}}">
  <h1 id="text">WELCOME</h1>
  <hr>

	@if(session()->has('message'))
	    <div class="alert alert-success">
	        {{ session()->get('message') }}
	    </div>
	@endif

<fieldset>
	@if($errors ->has('name'))
	<div class="alert alert-danger">
		{{$errors ->first('name')}}
 </div>

		@endif
    <p>
			<label for="Email" class="floatLabel">Name</label>
			<input  name="name" placeholder="********" type="text" id="Name">
		</p>



		@if($errors ->has('name'))
		<div class="alert alert-danger">
			{{$errors ->first('name')}}
	 </div>

			@endif
    <p>
      <label for="Email" class="floatLabel">SurName</label>
        <input type="text" placeholder="********" name="sName" >
    </p>

		@if($errors ->has('email'))
		<div class="alert alert-danger">
			{{$errors ->first('email')}}
	 </div>

			@endif
    <p>
      <label for="Email" class="floatLabel">Email</label>
    <input type="email" placeholder="********" name="email">
    </p>


		@if($errors ->has('bday'))
		<div class="alert alert-danger">
			{{$errors ->first('bday')}}
	 </div>

			@endif
    <p>
      <label for="Email" class="floatLabel" >BirthDay</label>
    <input type="date" name="bday"><br>
    </p>

			@if($errors ->has('pass'))
			<div class="alert alert-danger">
				{{$errors ->first('pass')}}
		 </div>

				@endif
    <p>
      <label for="Email" class="floatLabel">Password</label>
    <input type="Password" placeholder="********" name="pass">
    </p>


		@if($errors ->has('rePass'))
		<div class="alert alert-danger">
			{{$errors ->first('rePass')}}
	 </div>
    	@endif
    <p>
      <label for="Email" class="floatLabel">Confirm</label>
    <input type="password" placeholder="********" name="rePass">
    </p>

    <input type="submit"  value="CREATE ACCOUNT" name="send" class="btn btn-primary">
</fieldset>
</form>


</div>
@endsection
