<!DOCTYPE html>
<html lang="lv">
    <head>
        <meta charset="UTF-8">
        <TITLE>Pieteikumi</TITLE>
    </head>
    <body>
        <h1>Saņemtie pieteikumi</h1>
        <table border="1" cellpadding="8">
            <tr>
            <th>ID</th>
            <th>Tūre</th>
            <th>Vārds</th>
            <th>E-pasts</th>
            <th>Telefons</th>
            <th>Statuss</th>
            <th>Darbības</th>
            </tr>
            @foreach($bookings as $booking)
            <tr>
                <td>{{ $booking->id }}</td>
                <td>{{ $booking->tour_title }}</td>
                <td>{{ $booking->name }}</td>
                <td>{{ $booking->email }}</td>
                <td>{{ $booking->phone }}</td>
                <td>{{ $booking->status }}</td>
                <td><a href="/admin/bookings/{{ $booking->id }}/done">Apstiprināt</a></td>
            </tr>
            @endforeach
        </table>
    </body>
</html>