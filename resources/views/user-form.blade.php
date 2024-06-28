<div class="div">

<!-- this ois for the error of all alth the required -->
<!-- @if($errors->any())
@foreach($errors->all() as $error)
    <div class="error">
        {{$error}}
    </div>
@endforeach
@endif -->
<!-- for the error of the code -->
    <form action ="adduser" method="post">
        @csrf
        <div class="input-wrapper">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" placeholder="name">
            <span style="color:red">@error('name'){{$message}}@enderror </br></span>
            <label for="name">last Name:</label>
            <input type="text" name="lastName" id="lname" placeholder="Last Name">
            <label for="name">Email:</label>
            <input type="text" name="email" id="email" placeholder="Email">
            <button type="submit">Submit</button>

        </div>
    </form>
</div>
<style>
    input
        {
            margin: 10px;
            color: red;
            flex-wrap: wrap;
            width: 100%;
        }
       .input-wordwrap
        {
            flex-wrap: wrap;
            width: 100%;
        } 
        .error
        {
            color: red;
        }
</style>