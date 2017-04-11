<!DOCTYPE html>
<html>
<head>
	<title>
		test
	</title>
</head>
<body>


@foreach($events as $event)
@foreach($event->userNotify as $user)
{{$user->gender}}
@endforeach
@endforeach


	
</body>
</html>