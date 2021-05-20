<body>
    @extends('students.layout')
    @section('content')
    <br><br><br>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>Manage <b>Student Laravel Crud</b></h2>
                    </div>
                    <div class="col-sm-6">
                        <a class="btn btn-success" href="{{route('students.create')}}" data-toggle="modal"><i
                                class="">&#xE147;</i> <span>Add Student</span></a>

                    </div>
                </div>
            </div>
            @if($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{$message}}</p>
            </div>

            @endif

            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th></th>
                        <th>No</th>
                        <th>Name</th>
                        <th>Course</th>
                        <th>Year</th>
                        <th>Actions</th>
                    </tr>
                    @foreach($students as $student)

                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td>{{++$i}}</td>
                        <td>{{$student->studname}}</td>
                        <td>{{$student->course}}</td>
                        <td>{{$student->year}}</td>
                        <td>
                            <form action="{{route('students.destroy',$student->id)}}" method="POST">

                                <a class="btn btn-primary" href="{{route('students.edit',$student->id)}}"> Edit</a>
                                @csrf @method('DELETE')


                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                          
                        </td>
                    </tr>

                </tbody>
                @endforeach
            </table>

        </div>
    </div>

</body>
<style>
body {
    color: #566787;
    background-image: url('https://cdn5.vectorstock.com/i/1000x1000/67/99/mountains-landscape-at-dusk-vector-26896799.jpg');
    font-family: 'Varela Round', sans-serif;
    font-size: 13px;
}

.table-wrapper {
    background: #000046;
    /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #1CB5E0, #000046);
    /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to right, #1CB5E0, #000046);
    /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */


    padding: 20px 25px;
    margin: 30px 0;
    border-radius: 20px;
    box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
}

th {
    color: white;
}

.table-title {
    padding-bottom: 15px;
    background: #000428;
    /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #004e92, #000428);
    /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to right, #004e92, #000428);
    /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */


    color: #fff;
    padding: 16px 30px;
    margin: -20px -25px 10px;
    border-radius: 20px 20px 20px 0;
}

.table-title h2 {
    margin: 5px 0 0;
    font-size: 24px;
}

.table-title .btn-group {
    float: right;
}

/* add btn */
.table-title .btn {
    color: #fff;
    float: right;
    font-size: 13px;
    border: none;
    min-width: 50px;
    border-radius: 2px;
    border: none;
    outline: none !important;
    margin-left: 10px;
}

/* .table-title .btn i {
    float: left;
    font-size: 21px;
    margin-right: 5px;
}

.table-title .btn span {
    float: left;
    margin-top: 2px;
} */

table.table tr th,
table.table tr td {
    border-color: #e9e9e9;
    padding: 12px 15px;
    vertical-align: middle;
}

table.table tr th:first-child {
    width: 60px;
}

table.table tr th:last-child {
    width: 100px;
}

table.table-striped tbody tr:nth-of-type(odd) {
    background: #4CA1AF;
    /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #C4E0E5, #4CA1AF);
    /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to right, #C4E0E5, #4CA1AF);
    /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

}

table.table-striped.table-hover tbody tr:hover {
    background: #f5f5f5;
}

/* table.table th i {
    font-size: 13px;
    margin: 0 5px;
    cursor: pointer;
} */
/* 
table.table td:last-child i {
    opacity: 0.9;
    font-size: 22px;
    margin: 0 5px;
} */

/* table.table td a {
    font-weight: bold;
    color: #566787;
    display: inline-block;
    text-decoration: none;
    outline: none !important;
} */

/* table.table td a:hover {
    color: #2196F3;
}

table.table td a.edit {
    color: #FFC107;
} */

table.table td a.delete {
    color: #F44336;
}

table.table td i {
    font-size: 19px;
}

table.table .avatar {
    border-radius: 50%;
    vertical-align: middle;
    margin-right: 10px;
}
</style>



</html>