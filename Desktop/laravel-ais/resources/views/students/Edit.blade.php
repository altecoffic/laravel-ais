<!-- @extends('students.layout') -->
@section('content')

<head>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>



<body style="width:400px;margin:auto;">

    <div class="container shadow-lg"><br>

        <a class="btn btn-primary" style="margin-left:200px" href="{{route('students.index')}}">Back</a>
        <h2 style="text-align:center;">ADD STUDENT</h2>

        <form class='login-form' action="{{route('students.update',$student->id)}}" method="POST">
            @csrf @method('PUT')


            <div class="flex-row">

                <input id="username" class='lf--input ' name="studname" value="{{$student->studname}}" placeholder='Name' type='text' required>
            </div>
            <div class="flex-row">

                <input id="password" class='lf--input' name="course" value="{{$student->course}}" placeholder='Course' type='text' required>
            </div>
            <div class="flex-row">

                <input id="year" class='lf--input' name="year" value="{{$student->year}}" placeholder='Year' type='text' required>
            </div>

            <input class='lf--submit' type='submit' value='SUBMIT'>
        </form>
    </div>
    </div>
</body>
@endsection

</html>

<style>
    * {
        /* -webkit-font-smoothing: antialiased;
    text-rendering: optimizeLegibility; */
        outline: none;
    }
    
    h2 {
        color: white;
    }
    
    .container {
        position: absolute;
        border-radius: 50px;
        top: 50%;
        left: 50%;
        height: 85vh;
        transform: translate(-50%, -50%);
        box-shadow: 4px 8px 16px 0 rgba(0, 0, 0, 0.2);
        overflow: hidden;
        background: #000046;
        /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #1CB5E0, #000046);
        /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #1CB5E0, #000046);
        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        display: grid;
        place-items: center;
    }
    
    body {
        /* display: flex; */
        align-items: center;
        /* justify-content: center;
        flex-direction: column; */
        position: relative;
        font-family: 'Poppins', sans-serif;
        font-size: 1.5em;
        background-image: url('https://lh3.googleusercontent.com/proxy/BsmOTELNTag1x7H_FxRp1WdMgFZ5G8cvx9LbDOJ1WxIAPLuxfdQzUMMFROsTFG9AP0VUCyxVIvGL0iiKoj2vdIPbt8bYFykfxJqs');
        background-repeat: no-repeat;
        background-size: cover;
    }
    
    input,
    path {
        border-radius: 30px;
    }
    
    .login-form {
        width: 100%;
        padding: 2em;
        position: relative;
        /* @media screen and (min-width: 600px) {
            width: 50vw;
            max-width: 15em;
        } */
    }
    
    .flex-row {
        display: flex;
        margin-bottom: 1em;
        border: 2px;
    }
    
    .lf--input {
        flex: 1;
        padding: 1em;
        border: 0;
        color: gray;
        font-size: 1rem;
    }
    
    .lf--submit {
        display: block;
        padding: 1em;
        margin: auto;
        width: 50%;
        border-radius: 30px;
        background: #007991;
        /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #78ffd6, #007991);
        /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #78ffd6, #007991);
        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        border: 0;
        color: #fff;
        cursor: pointer;
        font-size: 1em;
        font-weight: 600;
        text-shadow: 0 1px 0 rgba(black, .2);
    }
    
     ::placeholder {
        color: gray;
    }
</style>