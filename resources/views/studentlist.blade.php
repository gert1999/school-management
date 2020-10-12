
<div class="card mb-3">
    <img height="265px" src="https://allea.org/wp-content/uploads/2019/06/shutterstock_520698799small-1500x430.jpg" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">Lijst met studenten</h5>
        <p class="card-text">Hier vind u alle informatie en gegevens van de studenten.</p>

        <table class="table">
            <thead class="thead-light">
            <tr>
                <th scope="col">Student Nummer</th>
                <th scope="col">Voornaam</th>
                <th scope="col">Achternaam</th>
                <th scope="col">Leeftijd</th>
                <th scope="col">Acties</th>
            </tr>
            </thead>
            <tbody>
            @foreach($students as $student)
                <tr>
                    <th scope="row">{{$student->studentnumber}}</th>
                    <td>{{$student->first_name}}</td>
                    <td>{{$student->last_name}}</td>
                    <td>{{$student->age}}</td>
                    <td>

                        <a href="{{url('/edit/'.$student->id)}}" class="btn btn-sm btn-warning">Edit</a>

                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>





