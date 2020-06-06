@extends('layouts.public')

@section('title', 'Elimina Staff')

@section('scripts')

<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
<script type="text/javascript">
$(document).ready(function () {
    $("#delete").on('click', function() {
        var domanda = confirm("Sei sicuro di voler eliminare l'utente staff?");
        if (domanda === true) {
            return true;  
        }else{
            alert('Operazione annullata');
            return false;
        }
    });
});
</script>

@endsection

@section('content')
<div class="product-big-title-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2>Elimina o Modifica Utente Staff</h2>
                </div>
            </div>
        </div>
    </div>
</div>


<div>
    <div class="woocommerce">
        {{ Form::open(array('route' => 'manStaff.manage'))}}
        <table cellspacing="0" class="shop_table cart">
            <thead>
                <tr>
                    <th></th>
                    <th> Username </th>
                    <th>Nome</th>
                    <th>Cognome</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>
                        {{Form::radio('radioButton', $user->username )}}  <!--('name', 'value') -->
                    </td>
                    <td>
                        <span>{{ $user->username }}</span>
                    </td>
                    <td>
                        <span>{{ $user->nome }}</span>
                    </td>
                    <td>
                        <span>{{ $user->cognome }}</span>
                    </td>
                </tr>
                @endforeach

                <tr>
                    <td  colspan="6">
                        <div class="button_delete">
                            {{ Form::button('Elimina Staff', ['id' => 'delete', 'type' => 'submit','class' => 'input','name' => 'btnsubmit','value' => 'delete']) }}
                        </div>
                        <div class="button_editStaff">
                            {{ Form::button('Modifica Dati Staff', ['type' => 'submit', 'class' => 'input','name' => 'btnsubmit', 'value' => 'edit']) }}
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        {{ Form::close() }}
    </div>
</div>                        
</div>                    




@endsection

