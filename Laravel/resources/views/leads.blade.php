<table>
    <tr>
        <th>E-mail</th>
        <th>Nome</th>
        <th>IP</th>
        <th>Stack</th>
        <th>Data Hora</th>
    </tr>
    @foreach($leads as $lead)
        <tr>
            <td>{{ $lead->email }}</td>
            <td>{{ sprintf("%s %s", $lead->name, $lead->lastname) }}</td>
            <td>{{ $lead->ip }}</td>
            <td>{{ 'hacker' }}</td>
            <td>{{ $lead->created_at }}</td>
        </tr>
    @endforeach
</table>