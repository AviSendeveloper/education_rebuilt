<!DOCTYPE html>

<html lang="en-US">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Slots</title>

    <script type="text/javascript"></script>
    <link rel="stylesheet" href="{{asset('assets1/css/quick.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" href="slot/dist/css/SUGstyleV3-responsive.minf4a1.css?v=1636996767345">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <script type="text/javascript" src="slot/dist/js/lib/jquery-1.11.1.minf4a1.js?v=1636996767345"></script>
</head>
<style>
    /* === Wrapper  ===*/
.wrapper{
  height: 100%;
  width: 100%;
  display: grid;
  grid-template-columns: 1fr;
  grid-template-areas:
    "nav-bar"
    "box"
    "footer";
}

/* === Nav Bab  ===*/
.nav-bar{
  grid-area: nav-bar;
  height: 70px;
  box-shadow: 0 1px 6px rgba(57,73,76,0.35);
}

.brand{
  font-size: 2.3em;
  text-transform: uppercase;
  margin-left: 20px;
  padding: 10px 10px;
  line-height: 1.42857;
  color: #222;
}

.box-wrapper{
  height: 630px;
  position: relative;  
}


/* === Contact form ===*/ 
.box{
  grid-area: box;
  position: absolute;
  top:  50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 400px;
  background-color: #FFF;
  padding: 40px;
  box-sizing: border-box;
  border: 1px solid rgba(0,0,0,.1);
  /* box-shadow: 0 30px 20px rgba(0,0,0,.2); */
  box-shadow: 0 3px 60px rgba(57,73,76,0.35);
  
}

.box h2{
  margin: 0 0 40px;
  padding: 0;
  color: #222;
  text-transform: uppercase;
  text-align: center;
    font-weight: bold;
}

.box input{
  padding: 10px 0;
  margin-bottom: 30px;
}

.box textarea{
  height: 80px;
  padding: 10px 0;
  margin-bottom: 40px;
}

.box input, .box textarea {
  width: 100%;
  box-sizing: border-box;
  box-shadow: none;
  outline: none;
  border: none;
  border-bottom: 2px solid #999;
}
.box textarea{  
  margin-bottom: 20px;
}

.box input[type="submit"]{
  font-size: 1.1em;
  border-bottom: none;
  cursor: pointer;
  background: #227ddd;
  color: #FFF;
  margin-bottom: 0;
  text-transform: uppercase;
}

.box form div{
  position: relative;
}

.box form div label {
  position: absolute;
  top: 10px;
  left: 0;
  color: #999;
  pointer-events: none;
  transition: .5s;
}

.box input:focus ~ label, .box textarea:focus ~ label, 
.box input:valid ~ label, .box textarea:valid ~ label {
  top: -15px;
  left: 0;
  color: #227ddd;
  font-size: 1em;
  font-weight: bold;
}

.box input:valid{
  border-bottom: 2px solid #227ddd;
}
</style>

<body>
<div class="wrapper">
    
    <div class="box-wrapper">
     <div class="box">
      <h2> Edit Dates/Times</h2> 
        <form id="form" action="/edit-date-form" method="post">
          @csrf
          <input type="hidden" name="id" value="{{$data['id']}}">
           <div>
          <input  type="date" id="birthdaytime" name="date" value="{{$data['date']}}" multiple="">
            <label> Date: </label>
          </div>
          <div>
          <div>
          <input  type="time" id="birthdaytime" name="time1" value="{{$data['time1']}}" multiple="">
            <label>Start time: </label>
          </div>
          <div>
          <input  type="time" id="birthdaytime" name="time2" value="{{$data['time2']}}" multiple="">
            <label>End time:</label>
          </div>
          <div>
          <input type="text" name="location" value="{{$data['location']}}" class="form-style">
            <label>Location: </label>
          </div>
          
          <input id="submit" type="submit" value="Submit">
           <a href="/slots" id="submit">Back</a>
        </form>  
  </div>
    </div>
</div>

</body>

</html>