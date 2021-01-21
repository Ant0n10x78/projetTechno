@include('/layout/header')

<H1>PAGE SIGNUP</H1>



<form action="/signup" method="post">

{{ csrf_field() }}

<input type="email" name="email" placeholder="Votre E-mail">
<input type="password" name="password" placeholder="Votre Mot De Passe">
<input type="password" name="password_confirmation" placeholder="Mot De Passe De Confirmation">
<input type="submit" value="M'inscrire">

