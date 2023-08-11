<h3>Email from Adida Spices's Website</h3>
<p>Fullname: {{ $fullname }}</p>
<p>Email: {{ $email }}</p>
@if($phone)<p>Phone: {{ $phone }}</p>@endif
@if($country)<p>Country: {{ $country }}</p>@endif
<p>Sector: {{ $sector }}</p>
<p>Message: <?php $message = preg_replace('/\r\n|\r|\n/','<br/>',$msg_client); echo $message; ?></p>