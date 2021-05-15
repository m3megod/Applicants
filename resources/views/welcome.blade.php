<!doctype html>
<html lang="en">
<head>
    <title>Applicants</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <a href="/">
                <h2 class="heading-section">Applicants</h2>
            </a>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="table-wrap">
                    <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th>ID no.</th>
                            <th>Name</th>
                            <th>Surname</th>
                            <th>Years of Experience</th>
                            <th>Hiring Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(count($applicants) != 0)
                            @foreach($applicants as $applicant)
                                <tr class="alert" role="alert">
                                    <th scope="row">{{$applicant->id}}</th>
                                    <td>{{$applicant->name}}</td>
                                    <td>{{$applicant->surname}}</td>
                                    <td>{{$applicant->experience_years}}</td>
                                    <td>
                                        @if($applicant->is_hired == 0)
                                            Un-Hired
                                        @else
                                            Hired
                                        @endif
                                    </td>
                                    <td>
                                        <a href="delete-applicant/{{$applicant->id}}" class="close">
                                            <i class="fa fa-trash"
                                               data-original-title="Delete"
                                               data-toggle="tooltip">
                                            </i>
                                        </a>
                                        <a href="/change-hiring/{{$applicant->id}}" class="close mr-1">
                                            <i class="fa fa-id-badge"
                                               @if($applicant->is_hired == 0)
                                               data-original-title="Hire"
                                               @else
                                               data-original-title="Un-hire"
                                               @endif
                                               data-toggle="tooltip">
                                            </i>
                                        </a>
                                        <a href="/edit-applicant/{{$applicant->id}}" class="close mr-1">
                                            <i class="fa fa-edit"
                                               data-original-title="Edit"
                                               data-toggle="tooltip">
                                            </i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr class="alert" role="alert">
                                <td>
                                    Applicants Not Found!
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                        @endif
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<script data-cfasync="false" src="{{asset('js/email-decode.min.js')}}"></script>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/popper.js')}}"></script>
</body>
</html>
