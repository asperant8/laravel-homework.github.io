@extends('mainpage')
@section('content')
<?php
 if(isset($request)){ // If the validation rules pass and the form data is sent corrently
 echo "<h1>Message is sent!</h1>";
    $to      = $request->email;
    $subject = $request->subject;
    $message = $request->content;
    $headers = 'From: .$request->email  '     . "\r\n" .
                 'Reply-To:.$request->email' . "\r\n" .
                 'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);
}
?>
   <div class="formdiv">
   <form method="post" action="contactus" class="contact_form">
    @csrf
    @if (count($errors) > 0)
    <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
    </ul>
    @endif 
    <div class="form-group">
        @if ($errors->has('email'))<strong>{{ $errors->first('email') }}</strong><br>@endif
      <label for="email">Email address</label>
      <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
    </div>
    <div class="form-group">
        @if ($errors->has('name'))<strong>{{ $errors->first('name') }}</strong><br>@endif
      <label for="name">Name</label>
      <input type="text" name="name" class="form-control" id="name" placeholder="Type your name here.">
    </div>
    <div class="form-group">
        @if ($errors->has('subject'))<strong>{{ $errors->first('subject') }}</strong><br>@endif
      <label for="subject">Subject</label>
      <input type="text" name="subject" class="form-control" id="subject" placeholder="The subject of the message.">
    </div>
    <div class="form-group">
        @if ($errors->has('content'))<strong>{{ $errors->first('content') }}</strong><br>@endif
      <label for="content">Your message</label>
      <textarea name="content" class="form-control" id="content" rows="3" placeholder="Write your message here."></textarea>
    </div>
    <div class="form-group">
        <input type="submit" value="Send message!" style="border:1px solid orangered; border-radius:4px;">
    </div>
  </form>
   </div>
   
@endsection