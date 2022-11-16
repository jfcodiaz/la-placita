<h1>Nuevo negocio</h1>

<form action="{{route('company.store')}}" method="POST">
Name <input type="text" value="{{ old('name') }}" name="name"><br>
Type
<select name="company_type_id" >
 @foreach($companyTypes as $companyType)
  <option 
    value="{{ $companyType->id }}"
    {{ (int)old('company_type_id') === $companyType->id ? 'checked' : ''}}
  >{{ $companyType->name }}</option>
 @endforeach
</select>
<br>
@csrf
<input type="submit" value="crear">

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

</form>