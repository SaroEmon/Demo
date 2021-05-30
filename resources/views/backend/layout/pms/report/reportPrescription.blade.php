@extends('backend.welcome')
@section('page')
    <!-- Button trigger modal -->
    <form action="{{route('report.prescription')}}" method="GET">

        <div class="row">
            <div class="col-md-8">
                <div class="row" style="padding: 2px 47px;">

                    <div class="form-group col-md-4">
                        <label for="from"> Date from:</label>
                        <input value="{{$fromDate}}" id="from" type="date" class="form-control" name="from_date">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="to"> Date to:</label>
                        <input value="{{$toDate}}" id="to" type="date" class="form-control" name="to_date">
                    </div>
                    <div style="padding: 31px 2px;" class="form-group col-md-4">
                        <button type="submit" class="btn btn-info">Search</button>
                        <button type="button" onclick="printDiv()" class="btn btn-success">Print</button>

                    </div>
                </div>
            </div>


        </div>
    </form>

    <div id="printArea">
        <h4 style="color: green;padding: 0px 45px;">Prescription Report from {{$fromDate}} to {{$toDate}}</h4><br>
    <table  class="table table-responsive table-bordered table-hover">
        <thead>

        <th scope="col">#ID</th>
        <th scope="col">PATIENT ID</th>
        <th scope="col">NAME</th>
        <th scope="col">AGE</th>
        <th scope="col">GENDER</th>
        <th scope="col">MEDICINE</th>
        <th scope="col">CONTENT</th>
        <th scope="col">DEPARTMENT</th>
        <th scope="col">DATE</th>



        </thead>
        <tbody>


        @foreach($report as $data)
            <tr>
                <th scope="row">{{$data->id}}</th>
                <td>{{$data->patient_id}}</td>
                <td>{{$data->name}}</td>
                <td>{{$data->age}}</td>
                <td>{{$data->gender}}</td>
                <td>{{$data->medicine_name}}</td>
                <td>{{$data->content}}</td>
                <td>{{$data->department}}</td>

                <td>{{$data->date}}</td>




            </tr>


        @endforeach


        </tbody>






    </table>

    </div>


    <script type="text/javascript">
        function printDiv(){
            var printContents = document.getElementById("printArea").innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;
            window.print();

            document.body.innerHTML = originalContents;

        }
    </script>

    <br>



@stop
