<!doctype html>
<html lang="en">
<head>
    <title>Applicants</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
                <a href="/">
                    <h2 class="heading-section">Applicants</h2>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="table-wrap">
                    <form method="post" action="/edit-applicant/{{$applicant->id}}">
                        @csrf
                        <table class="table">
                            <tbody>
                            <tr class="alert" role="alert">
                                <th scope="row">Name</th>
                                <td>
                                    <input type="text" name="name" class="form-control" value="{{$applicant->name}}">
                                </td>
                            </tr>
                            <tr class="alert" role="alert">
                                <th scope="row">Surname</th>
                                <td>
                                    <input type="text" name="surname" class="form-control"
                                           value="{{$applicant->surname}}">
                                </td>
                            </tr>
                            <tr class="alert" role="alert">
                                <th scope="row">Years of Experience</th>
                                <td>
                                    <input type="number" name="experience" min="0" max="70" class="form-control"
                                           value="{{$applicant->experience_years}}">
                                </td>
                            </tr>
                            <tr class="alert" role="alert">
                                <th scope="row">Hiring Status</th>
                                <td>
                                    <select class="form-control" name="status" required>
                                        <option value="0" @if($applicant->is_hired == 0) selected @endif >
                                            Un-Hired
                                        </option>
                                        <option value="1" @if($applicant->is_hired == 1) selected @endif >
                                            Hired
                                        </option>
                                    </select>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="col-12 mb-3" style="text-align: center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<script data-cfasync="false" src="{{asset('js/email-decode.min.js')}}">
</script>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/popper.js')}}"></script>
</body>
</html>
