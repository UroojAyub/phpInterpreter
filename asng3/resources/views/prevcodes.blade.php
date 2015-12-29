<!DOCTYPE html>
<html>
    <head>
          <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway" />
		
		<link href='button.css' rel="stylesheet" type="text/css">

		<link href='ribbon.css' rel="stylesheet" type="text/css">
		<link href='table.css' rel="stylesheet" type="text/css">
        <style>
          textarea,iframe{
            height:500px;
            width: 40%;

          }
		  
		  	 h1 { color: #ffffff; font-family: 'Raleway',sans-serif; font-size: 52px; font-weight: 900; line-height: 72px; margin: 0 0 24px; text-align: center; text-transform: uppercase; top:5%; background-color: rgba(0, 0, 0, 0.3);}
			h2 { color: #ffffff; font-family: 'Raleway',sans-serif; font-size: 25px; font-weight: 800; line-height: 36px; margin: 0 0 24px; text-align: center; }


			p { color: #f8f8f8; font-family: 'Raleway',sans-serif; font-size: 18px; font-weight: 500; line-height: 32px; margin: 0 0 24px; }


			a { color: #c8c8c8; text-decoration: underline; }


			a:hover { color: #1c1c1c; text-decoration: underline; }

        </style>
    </head>
    <body>
       <h1>{{Auth::user()->name}}</h1>
       <h2>Email: {{Auth::user()->email}}</h2>
		@if(Auth::user()->id==1)
			<h2>Role:Moderator</h2>
		@else
			<h2>Role:User</h2>
		@endif	
	   
	   @if(Auth::user()->id==1)
		   <div style="padding-left:20%;width:100%">
			   <div class="datagrid">
			   <table align="center" >
					<thead><tr><th>	Name</th><th>Code</th><th>Time Created</th></tr></thead>
				@foreach($data as $c)
				<tr><td>{{ $c->name}}</td>
				<td>{{ $c->code}}</td>
				<td>{{ $c->created_at}}</td></tr>
				@endforeach
			   </table>
			   </div>
		   </div>
	   @else
			<div style="padding-left:20%;width:100%">
			   <div class="datagrid">
			   <table align="center" >
					<thead><th>Code</th><th>Time Created</th></tr></thead>
				@foreach($data as $c)
				<tr><td>{{ $c->code}}</td>
				<td>{{ $c->created_at}}</td></tr>
				@endforeach
			   </table>
			   </div>
		   </div>
	   @endif
	   
	   
	   <br><br>
	   <a class="button-0" href="{{url("/")}}">Back</a>
    

    </body>
</html>
