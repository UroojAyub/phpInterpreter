<!DOCTYPE html>
<html>
    <head>
        <title>My PHP Interpreter</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway" />
		
		<link href='button.css' rel="stylesheet" type="text/css">
		<link href='ribbon.css' rel="stylesheet" type="text/css">
       

        <style>
          textarea,iframe{
            height:500px;
            width: 45%;
          }
		 h1 { color: #ffffff; font-family: 'Raleway',sans-serif; font-size: 52px; font-weight: 900; line-height: 72px; margin: 0 0 24px; text-align: center; text-transform: uppercase; top:5%; background-color: rgba(0, 0, 0, 0.3);}
		 
		 form{
		 padding-left:5%;
		 }
		 
		 

        </style>
    </head>
    <body>
       <h1 >My PHP Interpreter</h1>

	
	  
		   <div id="ribbon-container" style="top:2%;right:0%;">
			  <a href="{{url('/prevcodes')}}" id="ribbon">Previous Codes</a>
		   </div> 
		   <div id="ribbon-container" style="top:12%;right:0%;">
			  <a href="{{url('/logout')}}"  id="ribbon">Logout</a>
		   </div>
	
	   
       {!!Form::open()!!}
       {!! csrf_field() !!}
            <textarea placeholder="Enter your code here" name="code" id="code" class="tarea">{{ old('code') }}</textarea>
			&nbsp
			&nbsp
			&nbsp
            <iframe style= "background:white;" frameborder="1" src="mycode.blade.php" class="tarea">
			</iframe>
            <br>
			<div style="padding-left:42%;">
            <button class="button-0" type="submit" value="Run">Run</button>
			</div>
		{{ Form::token() }}

       {!!Form::close()!!}

    </body>
</html>
