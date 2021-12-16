@component('mail::message')


@foreach ($data as $data)
    @if($data->project_creator == $users->id)
    Olá <strong>{{$users->name}}</strong>, tudo bem ?<br>
    Esse é um alerta da llmagaia Agency, a sua empresa de gerenciamento de projectos e viemos aqui
    para informar-lhe que o seu projecto chegou ao ultimo dia e ainda não está concluido.
    Sugerimos um adiamento e aumentar a data da entrega do projecto. veja abaixo os 
    detalhes do projecto. <br><br>
    Nome: {{$data->name}}<br>
    Data de inicio: {{ date('d/m/Y', strtotime($data->start_project))}}<br>
    Data de conclusão: {{ date('d/m/Y', strtotime($data->done_project))}}
    @endif
    
@endforeach


Obrigado,<br>
{{ config('app.name') }}
@endcomponent
