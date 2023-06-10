<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Service Orders API</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica, sans-serif;
            color: #333
        }

        a {
            color: #1d13df;
        }

        .header {
            background: #222222;
            color: #fff;
            padding: 70px 50px;
            text-align: center;
            font-size: 40px;
        }

        .content {
            padding: 70px 30px;
            max-width: 900px;
            margin: 0 auto;
        }

        .border {
            border: 1px solid #ddd;
            border-radius: 10px;
        }

        .p-5 {
            padding: 15px;
        }

        .mb-5 {
            margin-bottom: 25px;
        }

        .endPoint {
            background: #4f0a7c;
            padding: 5px;
            color: #fff;
            margin-right: 8px;
        }

        .getMethod {
            background: #0ab30a;
            padding: 8px;
            color: #fff;
            border-radius: 3px;
        }

        .postMethod {
            background: #211c7b;
            padding: 8px;
            color: #fff;
            border-radius: 3px;
        }

        .putMethod {
            background: #129b9b;
            padding: 8px;
            color: #fff;
            border-radius: 3px;
        }

        .params {
            background: #095ec6;
            color: #fff;
            padding: 8px;
            width: 50%;
        }
    </style>
</head>
<body>

    <div class="header">
        Service Orders API Documentation
    </div>

    <div class="content">
        <h1>Endpoints</h1>

        <h2>Ordem de Serviços</h2>

        <div class="border p-5 mb-5">
            <h3>Listar ordem de serviços</h3>
            <p class="getMethod">Método: GET</p>
            <div class="link"> <span class="endPoint">Endpoint URL: </span> <a target="_blank" href="{{ route("service-orders.index") }}">{{ route("service-orders.index") }}</a></div>
        </div>

        <div class="border p-5 mb-5">
            <h3>Listar ordem de serviços com filtro de placa de veiculo</h3>
            <p class="getMethod">Método: GET</p>
            <div class="link"> 
                <span class="endPoint">Endpoint URL: </span> 
                <a target="_blank" href="{{ route("service-orders.index") }}?vehiclePlate[eq]={vehiclePlate}">
                    {{ route("service-orders.index") }}?vehiclePlate[eq]={vehiclePlate}
                </a>
            </div>
        </div>


        <div class="border p-5 mb-5">
            <h3>Adicionar ordem de serviço</h3>
            <p class="postMethod">Método: POST</p>
            <div class="link mb-5"> <span class="endPoint">Endpoint URL: </span> <a target="_blank" href="{{ route("service-orders.store") }}">{{ route("service-orders.store") }}</a></div>
            <div class="" style="display: flex; flex-direction:column; justify-content: space-around; align-items:flex-start">
                <div class="params" style="margin-top: 1.5em">Parâmetros</div>
                <div id="params">
                    <ul>
                        <li><b>userId</b>: # usuário responsável pelo serviço, número inteiro</li>
                        <li><b>vehiclePlate</b>: # número da matrícula, obrigatório</li>
                        <li> <b>entryDateTime</b>: # data de entrada. formato: 2000-01-01 </li>
                        <li> <b>exitDateTime</b>: # data de término: formato: 2000-0-01 </li>
                        <li> <b>priceType</b>: # tipo de preço, string </li>
                        <li> <b>price</b>: # preço, valor decimal, obrigatório, Ex: 100.99 </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="border p-5 mb-5">
            <h3>Atualizar ordem de serviço</h3>
            <p class="putMethod">Método: PUT</p>
            <div class="link mb-5">
                <span class="endPoint">Endpoint URL: </span> 
                <a target="_blank" href="{{ route("service-orders.update", 1) }}">
                    {{-- {{ route("service-orders.update", "6") }} --}}
                    {{ route("service-orders.index") }}/{id}
                </a>
            </div>
            <div class="" style="display: flex; flex-direction:column;  justify-content: space-around; align-items:flex-start">
                <div class="params" style="margin-top: 1.5em">Parâmetros</div>
                <div id="params">
                    <ul>
                        <li><b>userId</b>: # usuário responsável pelo serviço, número inteiro</li>
                        <li><b>vehiclePlate</b>: # número da matrícula, obrigatório</li>
                        <li> <b>entryDateTime</b>: # data de entrada. formato: 2000-01-01 </li>
                        <li> <b>exitDateTime</b>: # data de término: formato: 2000-0-01 </li>
                        <li> <b>priceType</b>: # tipo de preço, string </li>
                        <li> <b>price</b>: # preço, valor decimal, obrigatório, Ex: 100.99 </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
    
</body>
</html>