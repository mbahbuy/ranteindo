<h2>Halo</h2>
<p>Perkenalkan nama saya <strong>{{ $data->name }}</strong>,</p>
<p>Ingin menanyakan perihal : <strong>{{ $data->subject }}</strong></p>
<br>
<p>{{ $data->message }}</p>
<br>
<p>Mohon info lebih lanjut ke email : <strong><a href="mailto:{{ $data->email }}" target="_blank" rel="noopener noreferrer">{{ $data->email }}</a></strong></p>

<strong>Terima Kasih</strong>