@extends('mainpage')
@section('content')
<?php
 if(isset($request)){ // If the validation rules pass and the form data is sent corrently
 echo "<h1>Message is sent!</h1>";
    $to      = 'asperant8@gmail.com';
    $subject = $request->subject;
    $message = $request->content;
    $headers = 'From: .$request->email  '     . "\r\n" .
                 'Reply-To:.$request->email' . "\r\n" .
                 'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);
    ini_set();
}
?>

<form method="post" action="contactus">
    @csrf
    @if (count($errors) > 0)
    <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
    </ul>
    @endif 
    <h1>Form</h1>
    @if ($errors->has('email'))<strong>{{ $errors->first('email') }}</strong><br>@endif
    <label>E-mail:</label><input type="email" name="email"><br>
    @if ($errors->has('name'))<strong>{{ $errors->first('name') }}</strong><br>@endif
    <label>Name:</label><input type="text" name="name"><br>
    @if ($errors->has('subject'))<strong>{{ $errors->first('subject') }}</strong><br>@endif
    <label>Subject:</label><input type="text" name="subject"><br>
    @if ($errors->has('content'))<strong>{{ $errors->first('content') }}</strong><br>@endif
    <label>Content:</label><textarea name="content" cols="20" rows="5"></textarea>
    <label></label><input type="submit" value="Send">
   </form>
   
@endsection