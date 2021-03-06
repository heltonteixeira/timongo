<div class="panel panel-default">
    <div class="panel-heading">Poções</div>
    <div class="panel-body">
        <form action="{{ url('/potion') }}" method="POST" id="potions-form">
            {{ csrf_field() }}
            <input type="hidden" name="potion_id">
            <input type="hidden" name="amount">
        </form>
        <table class="table">
            <thead>
                <tr>
                    <th>Imagem</th>
                    <th>Nome</th>
                    <th>Preço</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($potions as $potion)
                    <tr>
                        <td>
                            <img src="/img/items/{{ $potion->icon }}" alt="{{ $potion->name }}">
                        </td>
                        <td>{{ $potion->name }}</td>
                        <td><span class="label label-warning">{{ $potion->price }} {{ trans('profile.gold') }}</span></td>
                        <td class="text-center">
                            <button onClick="setPotion({{ $potion->id }})" class="btn btn-primary">{{ trans('buttons.buy') }}</button>
                            <button onClick="setPotion({{ $potion->id }}, 3)" class="btn btn-primary">{{ trans('buttons.buy') }} 3</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>