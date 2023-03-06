<!DOCTYPE html>
<html lang="pt-br">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
      
      <title>Listagem teste</title>
</head>
<body>
      <main class="table">
            <section class="table_header">
                  <h1> Listagem Teste</h1>
            </section>
            <section class="table_body">
                  <table>
                        <!---Cabeçalho-->
                        <thead>
                              <!---Linhas do cabeçalho-->
                              <tr>  
                                    <!---Células do cabeçalho-->
                                    <th>Id</th>
                                    <th>uuid</th>
                                    <th>name</th>
                                    <th>description</th>  
                              </tr>

                        </thead>
                        <!---Corpo da tabela-->
                        <tbody>
                            @foreach($dataUsuarioDao as $vUsuaDao)
                                <tr>
                                    <td>{{$vUsuaDao->getId()}}</td>
                                    <td>{{$vUsuaDao->getUuid()}}</td>
                                    <td>{{$vUsuaDao->getName()}}</td>
                                    <td>{{$vUsuaDao->getDesc()}}</td>
                                </tr>
                            @endforeach    
                        </tbody>
                        
                  </table>

            </section>
      </main>
</body>
</html>


    
    