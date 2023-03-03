<table>
@foreach($dataUsuarioDao as $vUsuaDao)
    <tr>
        <td>{{$vUsuaDao->getId()}}</td>
        <td>{{$vUsuaDao->getUuid()}}</td>
        <td>{{$vUsuaDao->getName()}}</td>
        <td>{{$vUsuaDao->getDesc()}}</td>
    </tr>
@endforeach
</table>
<hr>
