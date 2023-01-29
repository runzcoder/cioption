<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome Message</title>
</head>

<body style="background-color: rgb(159, 155, 155); padding: 10% 15%">
    <div>
        @include('notifications.head')
        <h1>Hurray {{$data->name}}</h1>
       <p>
        We are really excited to welcome you to {{ env('APP_NAME') }} community.
        This is just the beginning of greater things to come.

        Here is how you can get the most out of our system.

        Make a Deposit, Buy an Investment Plan and sit back to enjoy while we make your money work for you.

        We look forward to seeing you gain your financial desires.

        Your experience is going to be nice and smooth. 🙂
        No frustrations, no trouble.


        Thanks, and welcome.
        {{ env('APP_NAME') }}
       </p>

        @include('notifications.head')
    </div>
</body>

</html>
