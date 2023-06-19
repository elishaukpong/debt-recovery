<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



<!-- Favicon icon-->
<link rel="shortcut icon" type="image/x-icon" href="@@webRoot/assets/images/favicon/favicon.ico">

<!-- Libs CSS -->


<link href="{{asset("node_modules/bootstrap-icons/font/bootstrap-icons.css")}}" rel="stylesheet">
<link href="{{ asset ("node_modules/dropzone/dist/dropzone.css") }}"  rel="stylesheet">
<link href="@@webRoot/node_modules/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet" />
<link href="@@webRoot/node_modules/prismjs/themes/prism-okaidia.css" rel="stylesheet">



@yield("content")




<!-- Theme CSS -->
<!-- build:css @@webRoot/assets/css/theme.min.css -->
<link rel="stylesheet" href="@@webRoot/assets/css/theme.css">
<!-- endbuild -->
@extends("partials.navbar-vertical")
@section("content")
@endsection
