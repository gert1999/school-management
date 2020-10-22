<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="{{asset('font-awesome/css/font-awesome.min.css')}}">

<div class="card mb-3">
    <img height="265px" src="https://allea.org/wp-content/uploads/2019/06/shutterstock_520698799small-1500x430.jpg" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">Lijst met studenten</h5>
        <p class="card-text">Hier vind u alle informatie en gegevens van de studenten.</p>


        @if(auth()->user()->role_id == 2)
            <div class="form-group">
                <select class="form-control" type="text" id="myInput">
                    <option value="">Kies de klas...</option>
                    @foreach($data as $class)
                    <option value="{{$class->class}}">{{$class->class}}</option>
                    @endforeach
                </select>
            </div>
        <table class="table">
            <thead class="thead-light">
            <tr>
                <th scope="col">Student Nummer</th>
                <th scope="col">Voornaam</th>
                <th scope="col">Achternaam</th>
                <th scope="col">Klas</th>
                <th scope="col">Leeftijd</th>
                <th scope="col">Acties</th>
            </tr>
            </thead>
            <tbody id="myTable">
            @foreach($students as $student)
                    <tr>
                        <th scope="row">{{$student->studentnumber}}</th>
                        <td>{{$student->first_name}}</td>
                        <td>{{$student->last_name}}</td>
                        <td>{{$student->class}}</td>
                        <td>{{$student->age}}</td>
                        <td>

                            <a href="{{url('/edit/'.$student->id)}}" class="btn btn-sm btn-warning">Edit</a>

                        </td>
                    </tr>
            @endforeach
            </tbody>
        </table>
        @endif

        @if(auth()->user()->role_id == 3)
            <div class="form-group">
                <select class="form-control" type="text" id="myInput2">
                    <option value="">Kies de klas...</option>
                    <option value="CMT01">CMT01</option>
                    <option value="CMT02">CMT02</option>
                    <option value="CMT03">CMT03</option>
                    <option value="CMT04">CMT04</option>
                    <option value="CMT05">CMT05</option>
                </select>
            </div>
            <table class="table">
                <thead class="thead-light">
                <tr>
                    <th scope="col">Student Nummer</th>
                    <th scope="col">Voornaam</th>
                    <th scope="col">Achternaam</th>
                    <th scope="col">Klas</th>
                    <th scope="col">Leeftijd</th>
                    <th scope="col">Acties<a href="{{url('/create')}}"><i class="fa fa-plus" style="float:right;position:relative;top:5px;color:white;"></i></a></th>
                </tr>
                </thead>
                <tbody id="myTable2">
                @foreach($students as $student)
                    <tr>
                        <th scope="row">{{$student->studentnumber}}</th>
                        <td>{{$student->first_name}}</td>
                        <td>{{$student->last_name}}</td>
                        <td>{{$student->class}}</td>
                        <td>{{$student->age}}</td>
                        <td>

                            <a href="{{url('/edit/'.$student->id)}}" class="btn btn-sm btn-warning">Edit</a>
                            <a href="{{url('/student/pdf/'.$student->id)}}" class="btn btn-sm btn-primary">PDF</a>
                            <a href="{{url('/edit/'.$student->id)}}" class="btn btn-sm btn-danger">Delete</a>

                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    </div>
</div>
<script>
    $(document).ready(function(){
        $("#myInput").on("change", function() {
            var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });

    $(document).ready(function(){
        $("#myInput2").on("change", function() {
            var value = $(this).val().toLowerCase();
            $("#myTable2 tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>





