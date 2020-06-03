@extends('layouts.public')

@section('title', 'Elimina Cliente')

@section('content')
<div class="product-big-title-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2>Elimina Cliente Registrato</h2>
                </div>
            </div>
        </div>
    </div>
</div>


<div>
    <div class="woocommerce">
        {{ Form::open(array('route' => 'delClient.delete'))}}
            <table cellspacing="0" class="shop_table cart">
                <thead>
                    <tr>
                        <th></th>
                        <th> Username </th>
                        <th>Nome</th>
                        <th>Cognome</th>
                        <th>Data di Nascita</th>
                    </tr>
                </thead>
                
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td>
                           {{Form::checkbox('check['.$user->id.']', $user->username )}}  <!--('name', 'value') -->
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
                        <td>
                            <span>{{ $user->dataNascita }}</span>
                        </td>
                    </tr>
                    @endforeach
                    
                    <tr>
                        <td class="button_delete_user" colspan="6">
                            {{ Form::submit('Elimina') }}
                        </td>
                    </tr>
                </tbody>
            </table>
        {{ Form::close() }}
    </div>
</div>                        
</div>                    




@endsection

