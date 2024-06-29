<h1> Hoame page </h1>
<!-- using the component of the php of the code in the php code -->

<x-message-banner/>

<!--  passing the message in the form of the message -->
<!-- <x-message-banner msg="message of the diwash that is success"/> -->
<a href="/">welcome page</a>
<a href="/about/diwash">about page</a>

<a href="{{URL::to('diwash',['diwash'])}}">about diwash</a>

<style>
    h1
        {
            color: red;
        }

    .success
        {
            color: green;
        }

</style>