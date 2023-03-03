<table>
@foreach($dataGpUsuarioDao as $vUsuaGpDao)
    <tr>
        <td>{{$vUsuaGpDao->getId()}}</td>
        <td>{{$vUsuaGpDao->getUuid()}}</td>
        <td>{{$vUsuaGpDao->getName()}}</td>
        <td>{{$vUsuaGpDao->getDesc()}}</td>
    </tr>
@endforeach
</table>
<hr>
