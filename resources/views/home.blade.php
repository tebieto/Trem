@extends('layouts.app-dashboard')
@extends('layouts.app2')


@section('content')
<submit-reports :id="{{auth::id()}}" :authbranch="'{{auth::user()->branch}}'" :authname="'{{auth::user()->name}}'" :trem2="'{{Storage::url('public/images/tremlogo2.jpg')}}'"></submit-reports>

@endsection
