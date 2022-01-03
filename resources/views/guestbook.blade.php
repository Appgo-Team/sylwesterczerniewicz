<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Księga gości</title>

</head>
<body>
    <form action="{{route('guest.add')}}"method="post">
        <h1>Złóż swoje życzenia</h1>
        <div>
            <label>Imie:</label><br/>
                <input type="text"  name="Imie" />
            <br/><br/>
            <label>Nazwisko:</label><br/>
                <input type="text" name="Nazwisko"/>
            <br/><br/>
            <label>Treść Twoich życzeń:</label><br/>
            <textarea  name="trescZyczen" rows="4" cols="50"></textarea>
            <br/><br/>
                <input type="submit" name="zlozZyczenia" value="Złóż życzenia">


        </div>
    </form>
</body>
</html>
