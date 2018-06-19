@extends('layouts.app-viewreports')
@extends('layouts.app2')


@section('content')
<view-reports :id="{{auth::id()}}" :authbranch="'{{auth::user()->branch}}'" :authname="'{{auth::user()->name}}'" :trem2="'{{Storage::url('public/images/tremlogo2.jpg')}}'"></view-reports>

@endsection