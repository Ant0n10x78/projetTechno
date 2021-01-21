

<h1>Clients</h1>

<ul>
    @foreach($client as $clt)
    <li> {{ $clt }} </li>
    @endforeach
</ul>
<hr>
<form action="/client" method="POST">
    @csrf
    <div class="form-group">
        <input type="text" class="form-control" name="pseudo" />
    </div>
    <button type="submmit" class="btn btn-primary">Ajouter le client</button>
</form>

