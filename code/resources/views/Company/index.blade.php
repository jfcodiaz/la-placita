<h1>My Companies<h1>

<ul>
@foreach($companies as $company)
    <li>{{$company->name}}</li>
@endforeach
</ul>